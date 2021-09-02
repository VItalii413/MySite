<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Classes\Basket;


class BasketController extends Controller
{
    //корзина
    public function basket()
    {
        // $products = Product::all();
        // dd($products);
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            
        }
        return view('basket', compact('order'));
    }

    // подтверждение заказа 
    public function basketConfirm(Request $request)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('home');
        }
        $order = Order::find($orderId);
        $succuess = $order->saveOrder($request->name, $request->phone);
        if ($succuess ) {
            session()->flash('success','Ваш заказ принят!');
        }else{
            session()->flash('warning', 'Ошибка!');
        }
        return redirect()->route('home');
    }

    // оформление заказа
    public function basketPlace()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('home');
        }

        $order = Order::find($orderId);

        return view('orders', compact('order'));
    }

    // добавление в корзину
    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);
        return redirect()->route('basket');
    }
    // удаление с корзины
    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return view('basket', compact('order'));
        }
        $order = Order::find($orderId);
        $order->products()->detach($productId);
        return redirect()->route('basket');
    }
}
