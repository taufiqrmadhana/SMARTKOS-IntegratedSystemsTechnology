<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ReportController extends ResourceController
{
    protected $modelName = 'App\\Models\\ReportModel';
    protected $format    = 'json';

    public function create()
    {
        $rules = [
            'problem_type'  => 'required',
            'description'   => 'required',
            'room_location' => 'required',
            'photo'         => 'uploaded[photo]|max_size[photo,2048]|is_image[photo]', // Validasi file
        ];

        if (!$this->validate($rules)) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $file = $this->request->getFile('photo');
        if ($file->isValid() && !$file->hasMoved()) {
            // Simpan file ke folder 'public/uploads'
            $fileName = $file->getRandomName(); // Nama acak untuk file
            $file->move('uploads', $fileName); // Simpan file di 'public/uploads'
            $photoPath = 'uploads/' . $fileName; // Path relatif
        } else {
            return $this->fail('Error uploading photo.');
        }

        $data = [
            'problem_type'   => $this->request->getPost('problem_type'),
            'description'    => $this->request->getPost('description'),
            'room_location'  => $this->request->getPost('room_location'),
            'photo'          => $photoPath, // Simpan path relatif
            'status'         => 'pending', // Status default
            'created_at'     => date('Y-m-d H:i:s'),
        ];

        if ($this->model->insert($data)) {
            return $this->respondCreated(["message" => "Report berhasil disubmit."]);
        } else {
            return $this->failServerError("Gagal dalam membuat report.");
        }
    }

    // Get all reports (for owners)
    public function index()
    {
        $reports = $this->model->findAll();
    
        // Tambahkan URL lengkap untuk foto
        foreach ($reports as &$report) {
            $report['photo_url'] = base_url($report['photo']); // Base URL + relative path
        }
    
        return $this->respond($reports);
    }    

    // Update report status
    public function updateStatus($id = null)
    {
        $data = $this->request->getJSON(true); // Ambil data JSON dari request

        // Periksa apakah laporan dengan ID tersebut ada
        $report = $this->model->find($id);
        if (!$report) {
            return $this->failNotFound("Report not found.");
        }

        $rules = [
            'status' => 'required|in_list[pending,in_process,completed]',
        ];

        if (!$this->validate($rules)) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        if ($this->model->update($id, $data)) {
            return $this->respondUpdated(["message" => "Report status updated."]);
        } else {
            return $this->failServerError("Failed to update report status.");
        }
    }
  

    public function getByStatus($status = null)
    {
        $reports = $this->model->where('status', $status)->findAll();
        if (!$reports) {
            return $this->failNotFound("No reports found with status: $status");
        }
        return $this->respond($reports);
    }

    public function stats()
    {
        $stats = [
            'total_reports' => $this->model->countAll(),
            'pending'       => $this->model->where('status', 'pending')->countAllResults(),
            'in_process'    => $this->model->where('status', 'in_process')->countAllResults(),
            'completed'     => $this->model->where('status', 'completed')->countAllResults(),
        ];
        return $this->respond($stats);
    }

    public function deleteReport($id = null)
    {
        // Cari laporan berdasarkan ID
        $report = $this->model->find($id);

        if (!$report) {
            return $this->failNotFound("Report not found.");
        }

        // Hapus file foto jika ada
        if (!empty($report['photo']) && file_exists(FCPATH . $report['photo'])) {
            unlink(FCPATH . $report['photo']); // Hapus file dari server
        }

        // Hapus laporan dari database
        if ($this->model->delete($id)) {
            return $this->respondDeleted(["message" => "Report deleted successfully."]);
        } else {
            return $this->failServerError("Failed to delete report.");
        }
    }

}
