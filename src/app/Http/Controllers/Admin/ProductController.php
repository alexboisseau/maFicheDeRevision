<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){

        return view('admin.products.index', [
            "products" => Product::all(),
        ]);
    }
}
