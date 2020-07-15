<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Product::paginate(10);
        return view('admin.products.index', compact('productos'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        // Registrar producto en la BD
        $producto = new Product();
        $producto->name = $request->input('name');
        $producto->description = $request->input('description');
        $producto->price = $request->input('precio');
        $producto->long_description = $request->input('long_description');
        $producto->save();

        //return redirect()->back();
        return redirect('/admin/products');
    }

    public function edit($id)
    {
        $producto = Product::find($id);
        return view('admin.products.edit', compact('producto'));
    }

    public function update()
    {

    }
}
