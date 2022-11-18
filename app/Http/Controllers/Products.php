<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Products as ModelsProducts;
use Illuminate\Http\Request;

class Products extends Controller
{
    public function admin() {
        $products = ModelsProducts::all();

        return view('admin', compact('products'));
    }

    public function create_product(Request $request) {
        $name = $request->name;
        $price = $request->price;
        
        ModelsProducts::create(['name' => $name, 'price' => $price]);

        return redirect('/admin');
    }

    public function delete_product($id) {
        $product = ModelsProducts::where(['id' => $id])->delete();
        
        return redirect('/admin');
    }

    public function basket() {
        return view('basket');
    }

    public function caregories() {
        return view('categories');
    }

    public function home() {
        return view('home');
    }

    public function profile() {
        return view('profile');
    }
}
