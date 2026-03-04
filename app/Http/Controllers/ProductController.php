<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function list()
    {
        $products = [
            ['name' => 'Laptop Gaming', 'price' => 23500000],
            ['name' => 'Chuột không dây', 'price' => 450000],
            ['name' => 'iPhone 15', 'price' => 18900000],
            ['name' => 'Tai nghe Bluetooth', 'price' => 1200000],
            ['name' => 'Màn hình 24 inch', 'price' => 3900000],
        ];

        return view('products', compact('products'));
    }
}