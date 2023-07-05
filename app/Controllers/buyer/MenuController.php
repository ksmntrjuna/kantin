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
        $data['menus'] = $model->findAll();

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
        // $rules = [
        //     'quantity' => 'required|numeric|min:1',
        //     'address' => 'required',
        // ];
        $rules = [
            'quantity' => 'required|numeric|greater_than_equal_to[1]',
            'address' => 'required',
        ];
        

           if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Simpan data pemesanan ke dalam database  
        $orderModel = new OrderModel();
        $orderId = $orderModel->insert([
            'food_id' => $menu['id'],
            'quantity' => $this->request->getPost('quantity'),
            'status' => 'pending',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        $orderData = $orderModel->find($orderId);

        // Generate QR code
        // $qrCode = new QrCode(route_to('menuController::showPayment', $orderId));
        // $qrCode->setSize(300);
        // $qrCodeString = $qrCode->writeString('png');
        // $qrCodeDataUri = 'data:image/png;base64,' . base64_encode($qrCodeString);

        // return view('buyer/menu/payment', ['qrCode' => $qrCodeDataUri]);
        // return view('buyer/menu/payment');

        
        // $qrCode = new QrCode(route('menuController.showPayment', $orderId));
        // $qrCode->setSize(300);

        return view('buyer/menu/payment', ['orderData' => $orderData]);
    }

    public function showPayment($id)
    {
        $orderModel = new OrderModel();
        $order = $orderModel->find($orderId);
        $data['menu'] = $model->find($id);


        if (!$order) {
            return redirect()->to('/buyer/menu')->with('error', 'Order not found.');
        }

        return view('buyer/menu/payment', $data, ['order' => $order]);
        // Proses pemesanan menu ke dalam database
        // ...

        return redirect()->to('/buyer/menu')->with('success', 'Pesanan berhasil dibuat.');
    }

}
