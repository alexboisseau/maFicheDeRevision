<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Product::orderBy('created_at', 'desc')->take(3)->get());
        return view('home', [
            'products' => Product::orderBy('created_at', 'desc')->take(3)->get()
        ]);
    }
}
