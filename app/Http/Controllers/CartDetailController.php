<?php

namespace App\Http\Controllers;

use App\CartDetail;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    public function store(Request $request)
    {
        $cartDetail = new CartDetail();
        $cartDetail->cart_id = auth()->user()->cart->id;
        $cartDetail->product_id = $request->product_id;
        $cartDetail->quantity = $request->quantity;
        $cartDetail->save();

        return back();
    }

    public function destroy(Request $request)
    {
        $cartDetail = CartDetail::find($request->cart_detail_id);

        // Evitar que un usuario elimine el producto de añadido en el pedido de otro usuario
        if ($cartDetail->cart_id == auth()->user()->cart_id);
            $cartDetail->delete();

        $notificacion = 'El producto se ha eliminado del carrito de compras correctamente';
        return back()->with(compact('notificacion'));
    }
}
