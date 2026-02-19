<!DOCTYPE html>
<html>

<head>
    <title>Gadgets Products</title>
</head>

<body>
    <h1>Gadgets List</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['brand'] }}</td>
                <td>{{ number_format($product['price']) }}</td>
                <td>{{ $product['stock'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p>Total Products: {{ count($products) }}</p>
</body>

</html>