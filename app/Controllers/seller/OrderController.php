<?php

namespace App\Controllers\Seller;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class OrderController extends BaseController
{
    public function index()
    {
        $model = new OrderModel();
        $data['orders'] = $model->findAll();
        
        return view('seller/order/index', $data);
    }
}