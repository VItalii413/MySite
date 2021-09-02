<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Menu;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $products = Product::get();
        return view('home', compact('products'));
    }
    public function about(){
        // dd(request());
        return view('about');
    }
    public function menu(){
        $products = Product::get();
        // $menu = Menu::all();
        // dd($menu);
        return view('menu', compact('products'));
    }
    public function login(){
        return view('login');
    }
    public function registration(){
        return view('registration');
    }

}
