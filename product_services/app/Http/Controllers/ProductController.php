<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function getAllProducts()
    {
        // $products = [
        //     ['name' => 'Apple'],
        //     ['name' => 'Banana'],
        //     ['name' => 'Cup'],
        //     ['name' => 'Iphone'],
        //     ['name' => 'Private Jet'],
        //     ['name' => 'Yutch'],
        // ];

        $products = Product::all();

        return response()->json($products);
    }
}
