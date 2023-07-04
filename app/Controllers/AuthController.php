<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Config\Services;


class AuthController extends BaseController
{
    public function processRegister()
    {
        $userModel = new UserModel();
    
        // Validasi input dari form register
        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'role' => 'required',
        ];
    
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
    
        // Menyimpan data user ke database
        $userModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role'),
        ]);
    
        // Redirect ke halaman login atau halaman lainnya
        return redirect()->to('/login')->with('message', 'Registration successful. Please login.');
    }
    public function register()
    {
        return view('auth/register');
    }
    protected function getRoles()
{
    $config = new \Config\Auth();
    return $config->validRoles;
}
    

    public function store()
    {
        // Process the registration form submission
        // Same logic as the register method
        return $this->register();
    }

    public function login()
    {
        helper(['form']);
    
        if ($this->request->getMethod() === 'post') {
            // Validate the form data
            $rules = [
                'email'    => 'required|valid_email',
                'password' => 'required',
            ];
    
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                // Check if the user exists in the database
                $userModel = new UserModel();
                $user = $userModel->where('email', $this->request->getPost('email'))->first();
    
                if ($user) {
                    // User exists in the database
    
                    if (password_verify($this->request->getPost('password'), $user['password'])) {
                        // Password is correct
    
                        // Get user role from database
                        $role = $user['role'];
    
                        // Check user role
                        if ($role == 'seller') {
                            // Redirect to seller dashboard
                            return redirect()->to('/seller/dashboard');
                        } elseif ($role == 'buyer') {
                            // Redirect to buyer dashboard
                            return redirect()->to('/buyer/dashboard');
                        } else {
                            // Invalid role
                            $data['error'] = 'Invalid role';
                        }
                    } else {
                        // Invalid password
                        $data['error'] = 'Email or password is incorrect';
                    }
                } else {
                    // User does not exist
                    $data['error'] = 'Email or password is incorrect';
                }
            }
        }
    
        return view('auth/login');
    }
    public function sellerDashboard()
    {
<<<<<<< HEAD
      
        return view('seller/dashboard');
    }
    public function buyerDashboard()
    {

        return view('buyer/dashboard');
=======
    // Add your logic to handle the seller dashboard
    // For example, you can load the seller dashboard view
    return view('seller/dashboard');
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
    }
    public function logout()
    {
        session()->destroy();
    
        // Redirect the user to the login page or any other page as needed
        return redirect()->to('/login');
    }
    
    
    
    
}
