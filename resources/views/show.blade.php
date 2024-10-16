<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукт</title>
</head>
<body>
<h2>{{ $product->name }}</h2>
<p>{{ $product->description }}</p>
<p>Цена: {{ $product->price }} руб.</p>

<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <label for="quantity">Количество:</label>
    <input type="number" name="quantity" id="quantity" value="1" min="1" max="{{ $product->stock }}">
    <button type="submit">Заказать</button>
</form>

</body>
</html>