<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $producto = Product::find($id);
        return view('products.show', compact('producto'));
    }
}
