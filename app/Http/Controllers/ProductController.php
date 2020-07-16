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
        // Validar

        // Reglas
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0',
            'long_description' => 'required',
        ];

        // Mensajes personalizados
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el producto',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres',
            'description.required' => 'La descripción corta es un campo obligatorio',
            'description.max' => 'La descripción corta solo admite hasta 200 caracteres',
            'price.required' => 'Es obligatorio definir un precio para el producto',
            'price.numeric' => 'Ingrese un precio válido',
            'price.min' => 'No se admiten valores negativos',
        ];

        $this->validate($request, $rules, $messages);


        // Registrar producto en la BD
        $producto = new Product();
        $producto->name = $request->input('name');
        $producto->description = $request->input('description');
        $producto->price = $request->input('price');
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

    public function update(Request $request, $id)
    {
        // Reglas
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0',
            'long_description' => 'required',
        ];

        // Mensajes personalizados
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el producto',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres',
            'description.required' => 'La descripción corta es un campo obligatorio',
            'description.max' => 'La descripción corta solo admite hasta 200 caracteres',
            'price.required' => 'Es obligatorio definir un precio para el producto',
            'price.numeric' => 'Ingrese un precio válido',
            'price.min' => 'No se admiten valores negativos',
        ];

        $this->validate($request, $rules, $messages);

        // Se actualiza el producto
        $producto = Product::find($id);
        $producto->name = $request->input('name');
        $producto->description = $request->input('description');
        $producto->price = $request->input('price');
        $producto->long_description = $request->input('long_description');
        $producto->save();

        return redirect('/admin/products');

    }

    public function destroy($id)
    {
        $producto = Product::find($id);
        $producto->delete();

        return back();
    }
}
