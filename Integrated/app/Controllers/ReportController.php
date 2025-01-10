<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ReportController extends ResourceController
{
    protected $modelName = 'App\Models\ReportModel'; // Menggunakan model laporan
    protected $format    = 'json'; // Format respons adalah JSON

    public function index()
    {
        // Mendapatkan semua laporan beserta username
        $reports = $this->model->getReportsWithUsernames();
        return $this->respond($reports);
    }

    public function getByStatus($status)
    {
        // Mendapatkan laporan berdasarkan status
        $reports = $this->model->getReportsByStatus($status);
        if (!$reports) {
            return $this->failNotFound("No reports found with status: $status");
        }
        return $this->respond($reports);
    }

    public function create()
    {
        // Validasi data masukan
        $rules = [
            'problem_type'  => 'required|string|max_length[255]',
            'description'   => 'required|string',
            'room_location' => 'required|string|max_length[255]',
            'photo'         => 'permit_empty|string|max_length[255]',
            'status'        => 'required|in_list[pending,scheduled,completed]',
            'user_id'       => 'required|integer',
        ];

        if (!$this->validate($rules)) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        // Simpan laporan
        $data = $this->request->getPost();
        $this->model->insert($data);

        return $this->respondCreated(['message' => 'Report created successfully.']);
    }

    public function delete($id)
    {
        // Hapus laporan berdasarkan ID
        $report = $this->model->find($id);
        if (!$report) {
            return $this->failNotFound("Report with ID $id not found.");
        }

        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Report deleted successfully.']);
    }
}
