<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Simple array of gadgets products
        $products = [
            ['id' => 1, 'name' => 'Smartphone', 'brand' => 'Samsung', 'price' => 15000, 'stock' => 10],
            ['id' => 2, 'name' => 'Laptop', 'brand' => 'Asus', 'price' => 45000, 'stock' => 5],
            ['id' => 3, 'name' => 'Headphones', 'brand' => 'JBL', 'price' => 2500, 'stock' => 20],
            ['id' => 4, 'name' => 'Smartwatch', 'brand' => 'Apple', 'price' => 18000, 'stock' => 8],
            ['id' => 5, 'name' => 'Tablet', 'brand' => 'Lenovo', 'price' => 12000, 'stock' => 12]
        ];

        return view('products', ['products' => $products]);
    }
}