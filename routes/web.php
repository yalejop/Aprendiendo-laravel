<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Product;


Route::get('products', function () {
    return view('products.index');
})->name('products.index');

Route::get('products/create', function () {
    return view('products.create');
})->name('products.create');

Route::post('products', function (Request $request) {
     $newProduct = new Product;
     $newProduct->description = $request->input('description');
     $newProduct->price = $request->input('price');
     $newProduct->save();

     return redirect()->route('products.index');

})->name('products.store');;