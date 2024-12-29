<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class AuthController extends ResourceController
{
    protected $modelName = 'App\\Models\\UserModel';
    protected $format    = 'json';

    public function register()
    {
        $data = $this->request->getJSON(true); // Ambil data JSON dari request
    
        $rules = [
            'username' => 'required|is_unique[users.username]',
            'password' => 'required|min_length[6]',
        ];
    
        // Validasi data
        if (!$this->validate($rules)) {
            return $this->failValidationErrors($this->validator->getErrors());
        }
    
        // Periksa apakah username dan password diterima
        if (empty($data['username']) || empty($data['password'])) {
            return $this->failValidationErrors(['error' => 'Username and password are required.']);
        }
    
        $user = [
            'username' => $data['username'],
            'password' => password_hash($data['password'], PASSWORD_BCRYPT),
        ];
    
        if ($this->model->insert($user)) {
            return $this->respondCreated(['message' => 'User registered successfully.']);
        } else {
            return $this->failServerError('Failed to register user.');
        }
    }
    

    public function login()
    {
        $data = $this->request->getJSON(true); // Ambil data JSON dari request
    
        // Periksa apakah username dan password ada
        if (empty($data['username']) || empty($data['password'])) {
            return $this->failValidationErrors(['error' => 'Username and password are required.']);
        }
    
        // Cari user berdasarkan username
        $user = $this->model->where('username', $data['username'])->first();
    
        // Periksa apakah username ditemukan dan password cocok
        if (!$user || !password_verify($data['password'], $user['password'])) {
            return $this->failUnauthorized('Invalid username or password.');
        }
    
        // Buat token dummy (gunakan JWT untuk implementasi nyata)
        $token = base64_encode(random_bytes(32));
    
        return $this->respond([
            'message' => 'Login successful.',
            'token' => $token
        ]);
    }    
}
