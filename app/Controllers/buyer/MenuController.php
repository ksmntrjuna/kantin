<?php

namespace App\Controllers\Buyer;

use App\Controllers\BaseController;
use App\Models\MenuModel;

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
        // Proses pemesanan menu ke dalam database
        // ...

        return redirect()->to('/buyer/menu')->with('success', 'Pesanan berhasil dibuat.');
    }
}
