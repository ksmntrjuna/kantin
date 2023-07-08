<?php

namespace App\Controllers\Seller;

use App\Models\QrModel;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $model = new QrModel;
        $data['qr'] = $model->findAll();
        
        return view('seller/dashboard', $data);


    }
}

