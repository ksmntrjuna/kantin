<?php

<<<<<<< HEAD
namespace App\Controllers;

=======
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
namespace App\Controllers\Buyer;

use App\Controllers\BaseController;
use App\Models\MenuModel;
<<<<<<< HEAD
use App\Models\OrderModel;
use Endroid\QrCode\QrCode;

=======
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b

class MenuController extends BaseController
{
    public function index()
    {
        $model = new MenuModel();
<<<<<<< HEAD
        $data['menu'] = $model->findAll();
=======
        $data['menus'] = $model->findAll();
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b

        return view('buyer/menu/index', $data);
    }

    public function order($id)
    {
        $model = new MenuModel();
        $data['menu'] = $model->find($id);

        return view('buyer/menu/order', $data);
    }

    public function storeOrder($id)
    {
<<<<<<< HEAD
        $model = new MenuModel();
        $menu = $model->find($id);

        // Validasi input dari form pemesanan
        $rules = [
            'quantity' => 'required|numeric|min:1',
            'address' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Simpan data pemesanan ke dalam database
        $orderModel = new OrderModel();
        $orderId = $orderModel->insertGetId([
            'food_id' => $menu['id'],
            'quantity' => $this->request->getPost('quantity'),
            'status' => 'pending',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        // Generate QR code
        $qrCode = new QrCode(route('menuController.showPayment', $orderId));
        $qrCode->setSize(300);

        return view('buyer/menu/payment', ['qrCode' => $qrCode->writeDataUri()]);
    }

    public function showPayment($orderId)
    {
        $orderModel = new OrderModel();
        $order = $orderModel->find($orderId);

        if (!$order) {
            return redirect()->to('/buyer/menu')->with('error', 'Order not found.');
        }

        return view('buyer/menu/payment', ['order' => $order]);
=======
        // Proses pemesanan menu ke dalam database
        // ...

        return redirect()->to('/buyer/menu')->with('success', 'Pesanan berhasil dibuat.');
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
    }
}
