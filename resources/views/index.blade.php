<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
</head>
<body>
@foreach($products as $product)
    <div class="product-card">
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <p>Цена: {{ $product->price }} руб.</p>
        <a href="{{ route('show', $product->id) }}">Подробнее</a>
    </div>
@endforeach

</body>
</html>