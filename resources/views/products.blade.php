<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            width: 200px;
            margin: 10px;
            text-align: center;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
        .out-of-stock {
            color: red;
            font-weight: bold;
        }
        .price {
            font-size: 1.2em;
            color: green;
        }
    </style>
</head>
<body>

@foreach ($products as $product)
    <div class="product-card">
        <h3><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
        <p class="price"><?php echo number_format($product['cost'], 0, ',', ' ') . ' руб.'; ?></p>
        <p>На складе: <?php echo $product['amount'] > 0 ? $product['amount'] : '<span class="out-of-stock">Нет в наличии</span>'; ?></p>
        <?php if ($product['amount'] > 0): ?>
            <button>Добавить в корзину</button>
        <?php endif; ?>
    </div>
@endforeach

</body>
</html>