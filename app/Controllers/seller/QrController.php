<?php

namespace App\Controllers\Seller;

use App\Controllers\BaseController;
use App\Models\QrModel;
use App\Models\UserModel;

class QrController extends BaseController
{
    public function index()
    {
        $model = new QrModel;
        $data['qr'] = $model->findAll();
        
        return view('seller/qr/index', $data);
    }

    public function create()
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->findAll();

        return view('seller/qr/create', $data);
    }

    public function store()
    {
        $rekening = new QrModel();
        $validation =  \Config\Services::validation();

        $data = [
            'rekening' => $this->request->getVar('rekening'),
            'user_id' => $this->request->getVar('user'),
        ];

        // Aturan validasi
        $validation->setRules([
            'rekening' => 'required',
            'user_id' => 'required'
        ]);

        // Jalankan validasi
        if (!$validation->run($data)) {
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $rekening->insert($data);
        return redirect()->to('/qr');
    }

    public function delete($id)
    {
        $rekening = new QrModel();

        // Cek apakah rekening dengan ID tersebut ada
        $rekeningData = $rekening->find($id);
        if (!$rekeningData) {
            return redirect()->back()->with('error', 'Rekening tidak ditemukan.');
        }

        // Hapus rekening berdasarkan ID
        $rekening->delete($id);

        return redirect()->back()->with('success', 'Rekening berhasil dihapus.');
    }

}
