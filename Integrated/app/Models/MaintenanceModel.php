<?php

namespace App\Models;

use CodeIgniter\Model;

class MaintenanceModel extends Model
{
    protected $table = 'maintenance_schedules';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'maintenance_type',
        'description',
        'facility',
        'scheduled_date',
        'status'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validasi data sebelum disimpan
    protected $validationRules = [
        'maintenance_type' => 'required|string|max_length[255]',
        'description'      => 'required|string',
        'facility'         => 'required|string|max_length[255]',
        'scheduled_date'   => 'required|valid_date[Y-m-d]',
        'status'           => 'required|in_list[pending,scheduled,completed]'
    ];

    protected $validationMessages = [
        'maintenance_type' => [
            'required' => 'Jenis perawatan harus diisi.',
            'max_length' => 'Jenis perawatan tidak boleh lebih dari 255 karakter.'
        ],
        'description' => [
            'required' => 'Deskripsi harus diisi.'
        ],
        'facility' => [
            'required' => 'Fasilitas harus diisi.',
            'max_length' => 'Fasilitas tidak boleh lebih dari 255 karakter.'
        ],
        'scheduled_date' => [
            'required' => 'Tanggal perawatan harus diisi.',
            'valid_date' => 'Format tanggal perawatan tidak valid.'
        ],
        'status' => [
            'required' => 'Status perawatan harus diisi.',
            'in_list' => 'Status perawatan harus berupa pending, scheduled, atau completed.'
        ]
    ];
}
