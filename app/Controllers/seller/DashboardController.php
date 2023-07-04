<?php

namespace App\Controllers\Seller;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('seller/dashboard');
    }
}
