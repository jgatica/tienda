<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function update()
    {
        $cart = auth()->user()->cart;
        $cart->status = 'Pending';
        $cart->save(); // UPDATE

        $notificacion = "Tu pedido se uha registrado correctamente. Te contactaremos pronto vía mail!";

        return back()->with(compact('notificacion'));
    }
}
