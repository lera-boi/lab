<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Получаем все продукты из базы данных
        return view('products.index', compact('products')); // Передаем данные в представление
    }
}

