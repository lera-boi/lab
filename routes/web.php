<?php

use Illuminate\Support\Facades\Route;

Route::webResource('products', 
   ProductController::class);
   
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    $products = [
        ["name" => "Orange", "cost" => 500, "amount" => 27],
        ["name" => "Banana", "cost" => 120, "amount" => 17],
        ["name" => "Bread", "cost" => 700, "amount" => 0],
    ];

    return view('products', ['products' => $products]);
});
