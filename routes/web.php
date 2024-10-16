<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('index'); // Список всех продуктов
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show'); // Просмотр конкретного продукта
Route::post('/order', [OrderController::class, 'store'])->name('orders.store');

//Route::get('/products', function () {
   // return view('welcome');
//});
//Route::get('/', function () {
  //  $products = [//переменная
//        ["name" => "Orange", "cost" => 500, "amount" => 27],
 //       ["name" => "Banana", "cost" => 120, "amount" => 17],
 //       ["name" => "Bread", "cost" => 700, "amount" => 0],
  //  ];

  //  return view('products', ['products' => $products]);
//});
