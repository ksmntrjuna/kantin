<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\QrModel;
use App\Models\UserModel;

class QrController extends BaseController
{
    public function index()
    {

        $userModel = new UserModel();
        $data['user'] = $userModel->findAll();
        return view('seller/qr/create', $data);
    }

    public function store()
    {
        $rekening = new QrModel();
        $data = [
            'rekening' => $this->request->getVar('rekening'),
            'user_id' => $this->request->getVar('user'),
        ];

        $rekening->insert($data);
        return redirect()->to('seller/dashboard');
    }
}
