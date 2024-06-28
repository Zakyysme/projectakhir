<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{

    protected $userModel;
    protected $session;
    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = session();
        $this->userModel = new UserModel();
    }

    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function loginPost()
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];

        if ($this->validate($rules)) {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $user = $this->userModel->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                $this->session->set('user', $user);
                if ($user['role'] == 'admin') {
                    return redirect()->to('/products');
                } else {
                    return redirect()->to('/');
                }
            } else {
                $this->session->setFlashdata('error', 'Invalid email or password.');
                return redirect()->back()->withInput();
            }
        } 
        return view('auth/login');
    }

    public function registerPost()
    {
        $rules = [
            'name' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'password_confirm' => 'matches[password]' 
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $role = $model->countAll() > 0 ? 'user' : 'admin';
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role' => $role,
            ];


            $model->createUser($data);
            return redirect()->to('/login');
        } 
            return view('auth/register');
        
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}