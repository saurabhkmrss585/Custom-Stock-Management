<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        h1 { text-align: center; color: #555; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; color: #333; }
        .total { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Invoice</h1>
    <p><strong>Sale Date:</strong> {{ $saleDate }}</p>

    <h3>Sold Products:</h3>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($soldProducts as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['quantity'] }}</td>
                    <td>Rs {{ $product['price'] }}</td>
                    <td>Rs {{ $product['total'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p class="total"><strong>Total Amount:</strong>Rs {{ $totalAmount }}</p>
</body>
</html>
