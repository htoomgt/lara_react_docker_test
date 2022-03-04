<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = [
            ['name' => 'Apple'],
            ['name' => 'Banana'],
            ['name' => 'Cup'],
            ['name' => 'Iphone'],
            ['name' => 'Private Jet'],
            ['name' => 'Yutch'],
        ];

        return response()->json($products);
    }
}
