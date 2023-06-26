<?php

namespace App\Controllers\Seller;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class MenuController extends BaseController
{
    public function index()
    {
        $model = new MenuModel();
        $data['menus'] = $model->findAll();

        return view('seller/menu/index', $data);
    }

    public function create()
    {
        return view('seller/menu/create');
    }

    public function store()
    {
        // Proses penyimpanan menu baru ke database
        // ...

        return redirect()->to('/seller/menu')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $model = new MenuModel();
        $data['menu'] = $model->find($id);

        return view('seller/menu/edit', $data);
    }

    public function update($id)
    {
        // Proses pembaruan menu di database
        // ...

        return redirect()->to('/seller/menu')->with('success', 'Menu berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Proses penghapusan menu dari database
        // ...

        return redirect()->to('/seller/menu')->with('success', 'Menu berhasil dihapus.');
    }
}
