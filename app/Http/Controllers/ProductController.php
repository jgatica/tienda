<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Product::all();
        return view('admin.products.index', compact('productos'));
    }

    public function create()
    {
        view('admin.products.create');
    }

    public function store()
    {

    }
}
