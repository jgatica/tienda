<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index($id)
    {
        $producto = Product::find($id);
        $imagenes = $producto->images()->orderBy('featured', 'desc')->get();
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
        $move  = $file->move($path, $fileName);

        // Crear 1 registro en la tabla product_images
        if ($move) {
            $productImage = new ProductImage();
            $productImage->image = $fileName;
            $productImage->featured = false;
            $productImage->product_id = $id;
            $productImage->save();
        }

        return back();
    }

    public function destroy(Request $request, $id)
    {
        // Eliminar archivo
        $productoImage = ProductImage::find($request->input('image_id'));

        if (substr($productoImage->image, 0, 4) == 'http') {
            $deleted = true;
        } else {
            $fullPath = public_path() . '/images/products/' . $productoImage->image;
            $deleted = File::delete($fullPath);
        }

        // Eliminar el registro de la imagen en la base de datos
        if ($deleted) {
            $productoImage->delete();
        }

        return back();

    }

    public function select($id, $image)
    {
        ProductImage::where('product_id',$id)->update([
            'featured' => false
        ]);

        $productImage = ProductImage::find($image);
        $productImage->featured = true;
        $productImage->save();

        return back();
    }
}
