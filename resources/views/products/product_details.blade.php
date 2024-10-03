<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><strong>Product ID: </strong> {{$product->id}}</p>
    <p><strong>Product Name: </strong> {{$product->Product_name}}</p>
    <p><strong>Price: </strong> {{$product->price}}</p>
    <p><strong>Product's Description: </strong> {{$product->description}}</p>

    <p><a href="{{route('products.product_list')}}">View List</a></p>
    
</body>
</html>