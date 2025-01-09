<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{
    protected $table      = 'reports';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $allowedFields = [
        'problem_type',
        'description',
        'room_location',
        'photo',
        'status',
        'user_id'
    ]; 

    public function getReportsWithUsernames()
    {
        return $this->select('reports.*, users.username')
                    ->join('users', 'users.id = reports.user_id')
                    ->findAll();
    }
}
