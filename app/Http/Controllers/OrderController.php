<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных формы
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Получение продукта
        $product = Product::findOrFail($validated['product_id']);

        // Проверка доступности на складе
        if ($validated['quantity'] > $product->stock) {
            return back()->withErrors('Недостаточно товара на складе.');
        }

        // Рассчитываем общую сумму
        $totalPrice = $product->price * $validated['quantity'];

        // Сохранение заказа в базе данных
        Order::create([
            'product_id' => $product->id,
            'quantity' => $validated['quantity'],
            'total_price' => $totalPrice,
        ]);

        // Обновляем количество товара на складе
        $product->update(['stock' => $product->stock - $validated['quantity']]);

        // Возвращаем пользователя с подтверждением
        return redirect()->route('products.index')->with('success', 'Заказ успешно оформлен.');
    }
}
