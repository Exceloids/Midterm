<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadgets</title>

    <style>
        h1 {text-align: center;}
        h3 {text-align: center;}
    </style>
</head>
<body>
    <div class="container">
            <h1>Gadgets</h1>
            <h3>Tindahan ni Kuya Excel</h2>
            <ul>
                @foreach ($products as $product)
                    <li>
                        <h2>{{ $product['name'] }}</h2>
                        <p>{{ $product['description'] }}</p>
                        <span>Price: Php {{ $product['price'] }}</span>
                    </li> 
                @endforeach
            </ul>
        </div>
</body>
</html>