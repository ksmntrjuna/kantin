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
            'name' => $menu['name'],
            'price' => $menu['price'],
            'quantity' => $this->request->getPost('quantity'),
            'status' => 'pending',
        ]);

        $orderData = $orderModel->find($orderId);
        $data['menu'] = $menu;
        $data['orderData'] = $orderData;

        $session = session();
        $orderList = $session->get('orderList', []);
        $orderList[] = $orderData;
        $session->set('orderList', $orderList);

        // var_dump($orderList);die();
                
        return view('buyer/menu/payment', ['orderList' => $orderList]);

        // return view('buyer/menu/payment', ['orderData' => $orderData], ['orderList' => $orderList]);
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
    public function addOrder($orderId)
    {
        $orderModel = new OrderModel();
        $order = $orderModel->find($orderId);

        if (!$order) {
            return redirect()->to('/buyer/menu')->with('error', 'Order not found.');
        }

        // Lakukan logika tambahan untuk menambahkan pesanan di sini
        // Misalnya, menambahkannya ke keranjang belanja atau melakukan pembayaran

        $menuModel = new MenuModel();
        $orderedMenus = $menuModel->whereIn('id', explode(',', $order['food_id']))->findAll();

        return view('buyer/menu/payment', ['orderData' => $order, 'orderedMenus' => $orderedMenus]);
    }

    


}