<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function about(): string {
        return view('about');
    }

    public function cart(): string {
        return view('cart');
    }

    public function shop() :string {
        return view('shop-single');
    }

    public function contact() :string {
        return view('contact');
    }
}
