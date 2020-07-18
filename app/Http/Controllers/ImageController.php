<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id)
    {
        $producto = Product::find($id);
        $imagenes = $producto->images;
        return view('admin.products.images.index', compact('producto','imagenes'));
    }

    public function store()
    {

    }

    public function destroy()
    {

    }
}
