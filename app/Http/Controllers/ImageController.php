<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id)
    {
        $producto = Product::find($id);
        $imagenes = $producto->images;
        return view('admin.products.images.index', compact('producto','imagenes'));
    }

    /**
     * @param uniqid esta funcion devuelve una sequencia de numeros en base a la hora del sistema
     * funcion getClientOriginalExtension obtiene el nombre original del archivo
     */
    public function store(Request $request, $id)
    {
        // Guardar la imagen en nuestro proyecto
        $file = $request->file('photo');
        $path = public_path() . '/images/products';
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move($path, $fileName);

        // Crear 1 registro en la tabla product_images
        $productImage = new ProductImage();
        $productImage->image = $fileName;
        $productImage->feature = false;
        $productImage->product_id = $id;
        $productImage->save();

        return back();
    }

    public function destroy()
    {

    }
}
