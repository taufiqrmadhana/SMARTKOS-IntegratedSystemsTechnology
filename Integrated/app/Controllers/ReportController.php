<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\MaintenanceModel;

class ReportController extends ResourceController
{
    protected $maintenanceModel;

    public function __construct()
    {
        $this->maintenanceModel = new MaintenanceModel();
    }

    public function receiveReports()
    {
        $data = $this->request->getJSON(true); // Ambil data JSON dari request

        if (empty($data)) {
            return $this->failValidationErrors(['error' => 'Data laporan tidak boleh kosong.']);
        }

        $response = [];

        foreach ($data as $report) {
            $report['status'] = 'pending'; // Set default status untuk laporan baru
            $isScheduled = $this->maintenanceModel->scheduleMaintenance($report);

            if ($isScheduled) {
                $response[] = [
                    'report' => $report,
                    'message' => 'Maintenance berhasil dijadwalkan.',
                    'id' => $isScheduled
                ];
            } else {
                $response[] = [
                    'report' => $report,
                    'message' => 'Gagal menjadwalkan maintenance.',
                    'errors' => $this->maintenanceModel->errors()
                ];
            }
        }

        return $this->respond([
            'message' => 'Proses laporan selesai.',
            'results' => $response
        ]);
    }

    /**
     * Dapatkan semua jadwal maintenance.
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function getSchedules()
    {
        $schedules = $this->maintenanceModel->findAll();

        return $this->respond($schedules);
    }

    /**
     * Perbarui laporan berdasarkan ID.
     * 
     * @param int $id
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function updateReport($id = null)
    {
        // Pastikan ID diberikan
        if (!$id) {
            return $this->failNotFound('ID laporan tidak ditemukan.');
        }

        $data = $this->request->getJSON(true); // Ambil data JSON dari request

        // Validasi data input
        if (!$this->maintenanceModel->validate($data)) {
            return $this->failValidationErrors($this->maintenanceModel->errors());
        }

        // Cari laporan berdasarkan ID
        $report = $this->maintenanceModel->find($id);
        if (!$report) {
            return $this->failNotFound('Laporan dengan ID tersebut tidak ditemukan.');
        }

        // Perbarui laporan
        $isUpdated = $this->maintenanceModel->update($id, $data);
        if ($isUpdated) {
            return $this->respond([
                'message' => 'Laporan berhasil diperbarui.',
                'data' => $this->maintenanceModel->find($id)
            ]);
        }

        return $this->fail('Gagal memperbarui laporan.');
    }
}
