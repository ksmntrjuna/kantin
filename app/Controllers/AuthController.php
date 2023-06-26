<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function store()
    {
        $model = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role')
        ];
        $model->insert($data);

        return redirect()->to('/login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
{
    $model = new UserModel();
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $user = $model->where('email', $email)->first();

    if ($user && password_verify($password, $user['password'])) {
        // Authentication success

        // Set user session or JWT token, etc.
        $sessionData = [
            'id' => $user['id'],
            'name' => $user['name'],
            'role' => $user['role']
        ];
        session()->set($sessionData);

        // Redirect user to the appropriate dashboard based on their role
        if ($user['role'] === 'seller') {
            return redirect()->to('/dashboard/seller');
        } else if ($user['role'] === 'buyer') {
            return redirect()->to('/dashboard/buyer');
        }
    } else {
        // Authentication failed
        // Show error message or redirect to login page
        return redirect()->back()->with('error', 'Invalid email or password');
    }
}


    public function logout()
    {
        // Destroy user session or JWT token, etc.
        return redirect()->to('/login');
        session()->remove(['id', 'name', 'role']);

    }
    
}
