<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Product;


Route::get('products', function () {
    $products = Product::orderBy('created_at','desc')->get();
    return view('products.index', compact('products'));
})->name('products.index');

Route::get('products/create', function () {
    return view('products.create');
})->name('products.create');

Route::post('products', function (Request $request) {
     $newProduct = new Product;
     $newProduct->description = $request->input('description');
     $newProduct->price = $request->input('price');
     $newProduct->save();

     return redirect()->route('products.index')->with('info', 'Producto creado Exitosamente');

})->name('products.store');