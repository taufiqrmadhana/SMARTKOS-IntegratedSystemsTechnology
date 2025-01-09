<?php

namespace App\Controllers;

use App\Models\MaintenanceModel;
use CodeIgniter\RESTful\ResourceController;

class MaintenanceController extends ResourceController
{
    protected $modelName = 'App\Models\MaintenanceModel';
    protected $format    = 'json';

    public function create()
    {
        $data = $this->request->getJSON(true);
        if (!$this->validate([
            'maintenance_type' => 'required|string|max_length[255]',
            'description'      => 'required|string',
            'facility'         => 'required|string|max_length[255]',
            'scheduled_date'   => 'required|valid_date[Y-m-d]',
            'status'           => 'required|in_list[pending,scheduled,completed]'
        ])) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        if ($this->model->insert($data)) {
            return $this->respondCreated(['message' => 'Jadwal perawatan berhasil dibuat.']);
        }

        return $this->fail('Gagal dalam membuat jadwal perawatan.', 400);
    }

    public function index()
    {
        $schedules = $this->model->findAll();
        return $this->respond($schedules);
    }

    public function update($id = null)
    {
        $schedule = $this->model->find($id);
        if (!$schedule) {
            return $this->failNotFound('Jadwal perawatan tidak ditemukan.');
        }

        $data = $this->request->getJSON(true);
        if (!$this->validate([
            'maintenance_type' => 'required|string|max_length[255]',
            'description'      => 'required|string',
            'facility'         => 'required|string|max_length[255]',
            'scheduled_date'   => 'required|valid_date[Y-m-d]',
            'status'           => 'required|in_list[pending,scheduled,completed]'
        ])) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        if ($this->model->update($id, $data)) {
            $total = $this->model->countAll();
            $pending = $this->model->where('status', 'pending')->countAllResults();
            $scheduled = $this->model->where('status', 'scheduled')->countAllResults();
            $completed = $this->model->where('status', 'completed')->countAllResults();

            $facilities = $this->model
                               ->select('facility, COUNT(*) as count')
                               ->groupBy('facility')
                               ->findAll();
            $by_facility = [];
            foreach ($facilities as $facility) {
                $by_facility[$facility['facility']] = (int) $facility['count'];
            }

            $stats = [
                'total_schedules' => $total,
                'pending'         => $pending,
                'scheduled'       => $scheduled,
                'completed'       => $completed,
                'by_facility'     => $by_facility
            ];

            return $this->respond([
                'message' => 'Jadwal perawatan berhasil diperbarui.',
                'stats'   => $stats
            ]);
        }

        return $this->fail('Gagal dalam memperbarui jadwal perawatan.', 400);
    }

    public function filter()
    {
        $facility   = $this->request->getGet('facility');
        $start_date = $this->request->getGet('start_date');
        $end_date   = $this->request->getGet('end_date');

        $builder = $this->model->builder();

        if ($facility) {
            $builder->where('facility', $facility);
        }

        if ($start_date && $end_date) {
            $builder->where('scheduled_date >=', $start_date)
                    ->where('scheduled_date <=', $end_date);
        }

        $schedules = $builder->get()->getResult();
        return $this->respond($schedules);
    }

    public function stats()
    {
        $total = $this->model->countAll();
        $pending = $this->model->where('status', 'pending')->countAllResults();
        $scheduled = $this->model->where('status', 'scheduled')->countAllResults();
        $completed = $this->model->where('status', 'completed')->countAllResults();

        $facilities = $this->model
                           ->select('facility, COUNT(*) as count')
                           ->groupBy('facility')
                           ->findAll();
        $by_facility = [];
        foreach ($facilities as $facility) {
            $by_facility[$facility['facility']] = (int) $facility['count'];
        }

        $stats = [
            'total_schedules' => $total,
            'pending'         => $pending,
            'scheduled'       => $scheduled,
            'completed'       => $completed,
            'by_facility'     => $by_facility
        ];

        return $this->respond($stats);
    }

    public function delete($id = null)
    {
        $schedule = $this->model->find($id);
        if (!$schedule) {
            return $this->failNotFound('Jadwal perawatan tidak ditemukan.');
        }

        if ($this->model->delete($id)) {
            return $this->respond(['message' => 'Jadwal perawatan berhasil dihapus.']);
        }

        return $this->fail('Gagal dalam menghapus jadwal perawatan.', 400);
    }
}
