<?php

namespace App\Controllers\Buyer;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('buyer/dashboard');
    }
}
