<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('index', $data);
    }

    public function about(): string {
        return view('about');
    }

    public function cart(): string {
        return view('cart');
    }

    public function shop() :string {
        $model = new ProductModel();
        $data['products'] = $model->findAll();

        // echo view('products/shop', $data);
        return view('shop', $data);
    }
    // public function shopsingle() :string {
    //     return view('shop-single');
    // }

    public function contact() :string {
        return view('contact');
    }
}