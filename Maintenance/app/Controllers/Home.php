<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function registerView(): string
    {
        return view('register');
    }

    public function loginView(): string
    {
        return view('login');
    }

    public function dashboardView()
    {
        $session = session();
        if (!$session->has('isLoggedIn') || !$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    
        // Lanjutkan dengan logika tampilan dashboard jika autentikasi berhasil
        return view('dashboard');
    }
}
