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
<<<<<<< HEAD

=======
    
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
        return view('seller/menu/index', $data);
    }

    public function create()
    {
<<<<<<< HEAD
        return view('seller/menu/create',);
=======
        return view('seller/menu/create', );
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
    }

    public function store()
    {
        $menuModel = new MenuModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
        ];

        $menuModel->insert($data);
<<<<<<< HEAD

=======
    
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
        return redirect()->to('/seller/menu')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $menuModel = new MenuModel();
<<<<<<< HEAD
        $data['id'] = $id;
=======

>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
        $data['menu'] = $menuModel->find($id);

        return view('seller/menu/edit', $data);
    }

<<<<<<< HEAD
    // public function update($id)
    // {
    //     // Membuat instance dari model
    //     $menuModel = new MenuModel();

    //     $data = [
    //         'name' => $this->request->getPost('name'),
    //         'price' => $this->request->getPost('price'),
    //     ];

    //     dd($id);
    //     dd($data);
    //     $menuModel->where('id', $id)->update($data);

    //     // Redirect ke halaman tampilan daftar menu
    //     return redirect()->to('/seller/menu')->with('success', 'Menu berhasil diperbarui.');
    // }

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

    public function delete($id)
    {

=======
    public function update($id)
    {
        // Membuat instance dari model
        $menuModel = new MenuModel();
        $id = $this->request->getPost('id');

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
        ];
        
        $menuModel->update($id, $data);

        // Redirect ke halaman tampilan daftar menu
        return redirect()->to('/seller/menu', $data)->with('success', 'Menu berhasil diperbarui.');
    }

    // public function update($id)
    // {
    //     $menuModel = new MenuModel(); // Define the $menuModel variable
    
    //     // Ambil data dari form edit menu
    //     $menuData = [
    //         'name' => $this->request->getPost('name'),
    //         'price' => $this->request->getPost('price')
    //     ];
    
    //     // Periksa apakah menu dengan $id ada dalam database
    //     $menu = $menuModel->find($id); // Use $menuModel instead of $this->menuModel
    //     if (!$menu) {
    //         return redirect()->back()->with('error', 'Menu not found');
    //     }
    
    //     // Perbarui data menu di database
    //     try {
    //         $menuModel->update($id, $menuData); // Use $menuModel instead of $this->menuModel
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Failed to update menu: ' . $e->getMessage());
    //     }
    
    //     // Redirect ke halaman daftar menu dengan pesan sukses
    //     return redirect()->to('/seller/menu')->with('success', 'Menu updated successfully');
    // }
    
    public function delete($id)
    {
        
>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
        $menuModel = new MenuModel();
        $menuModel->delete($id);

        return redirect()->to('seller/menu')->with('success', 'Menu berhasil dihapus.');
<<<<<<< HEAD
=======

>>>>>>> 925775b0c2a3a8a5eb2320500e04c23c38de954b
    }
}
