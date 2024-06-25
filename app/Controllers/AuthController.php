<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModels;

class AuthController extends Controller
{
    public function login()
    {
        $request = \Config\Services::request();
        
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($request)->run()) {
            return $this->response->setJSON(['error' => $validation->getErrors()]);
        }

        $email = $request->getPost('email');
        $password = $request->getPost('password');

        $userModel = new UserModels();
        $user = $userModel->where('email', $email)->first();

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Jika login berhasil
                $session = session();
                $session->set('user_id', $user['id']);
                return $this->response->setJSON(['success' => 'Login successful']);
            } else {
                // Jika password salah
                return $this->response->setJSON(['error' => 'Invalid password']);
            }
        } else {
            // Jika user tidak ditemukan
            return $this->response->setJSON(['error' => 'User not found']);
        }
    }

    public function register()
    {
        $request = \Config\Services::request();
        
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($request)->run()) {
            return $this->response->setJSON(['error' => $validation->getErrors()]);
        }

        $email = $request->getPost('email');
        $password = password_hash($request->getPost('password'), PASSWORD_BCRYPT);

        $userModel = new UserModels();
        $userModel->save([
            'email' => $email,
            'password' => $password
        ]);

        return $this->response->setJSON(['success' => 'User registered successfully']);
    }
}
