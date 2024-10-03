<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Actions</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <th>{{$product->id}}</th>
            <th>{{$product->Product_name}}</th>
            <th><a href="{{route('products.product_details', $product->id)}}">View</a></th>
        </tr>
        @endforeach
    </table>

    <p><a href="{{route('customers.list')}}">View Customer</a></p>
</body>
</html>