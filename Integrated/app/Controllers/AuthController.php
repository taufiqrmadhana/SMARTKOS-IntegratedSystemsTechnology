<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class AuthController extends ResourceController
{
    protected $modelName = 'App\\Models\\UserModel';
    protected $format    = 'json';

    public function register()
    {
        $data = $this->request->getJSON(true);

        $rules = [
            'username' => 'required|is_unique[users.username]',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($rules)) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $user = [
            'username' => $data['username'],
            'password' => password_hash($data['password'], PASSWORD_BCRYPT),
        ];

        if ($this->model->insert($user)) {
            return $this->respondCreated(['message' => 'User registered successfully.']);
        }

        return $this->failServerError('Failed to register user.');
    }

    public function login()
    {
        $data = $this->request->getJSON(true);

        if (empty($data['username']) || empty($data['password'])) {
            return $this->failValidationErrors(['error' => 'Username and password are required.']);
        }

        $user = $this->model->where('username', $data['username'])->first();

        if (!$user || !password_verify($data['password'], $user['password'])) {
            return $this->failUnauthorized('Invalid username or password.');
        }

        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('userId', $user['id']);

        return $this->respond([
            'message' => 'Login successful.',
            'redirect' => '/dashboard', // Tambahkan redirect tujuan
        ]);
    }
    public function logout()
    {
        $session = session();
        $session->destroy(); // Hancurkan session
        return $this->respond([
            'message' => 'Logout successful.',
            'redirect' => '/login'
        ]);
    }

}
