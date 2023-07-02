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
        return view('seller/menu/create', );
    }

    public function store()
    {
        $menuModel = new MenuModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
        ];

        $menuModel->insert($data);
    
        return redirect()->to('/seller/menu')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function update($id)
    {
        $menuModel = new MenuModel(); // Define the $menuModel variable
    
        // Ambil data dari form edit menu
        $menuData = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price')
        ];
    
        // Periksa apakah menu dengan $id ada dalam database
        $menu = $menuModel->find($id); // Use $menuModel instead of $this->menuModel
        if (!$menu) {
            return redirect()->back()->with('error', 'Menu not found');
        }
    
        // Perbarui data menu di database
        try {
            $menuModel->update($id, $menuData); // Use $menuModel instead of $this->menuModel
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update menu: ' . $e->getMessage());
        }
    
        // Redirect ke halaman daftar menu dengan pesan sukses
        return redirect()->to('/seller/menu')->with('success', 'Menu updated successfully');
    }
    


    // public function update()
    // {
    //     // $menuModel = new MenuModel();

    //     // $data = [
    //     //     'name' => $this->request->getPost('name'),
    //     //     'price' => $this->request->getPost('price'),
    //     // ];

    //     // $menuModel->update($data);

    //     // return redirect()->to('/seller/menu')->with('success', 'Menu berhasil diperbarui.');
    // }

    
    public function delete($id)
    {
        
        $menuModel = new MenuModel();
        $menuModel->delete($id);

        return redirect()->to('seller/menu')->with('success', 'Menu berhasil dihapus.');

    }
}
