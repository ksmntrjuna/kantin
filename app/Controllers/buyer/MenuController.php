<?php

namespace App\Controllers;

namespace App\Controllers\Buyer;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\OrderModel;
use Endroid\QrCode\QrCode;


class MenuController extends BaseController
{
    public function index()
    {
        $model = new MenuModel();
        $data['menu'] = $model->findAll();

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
    }
}
