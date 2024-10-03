<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('products.productAdd')}}" method="post">
        @csrf
        <label for="Product_name">Product Name: </label>
        <input type="text" name="Product_name" required maxlength="50"> <br>

        <label for="price">Price: </label>
        <input type="number" name="price" required> <br>

        <label for="description">Description </label>
        <input type="text" name="description" maxlength="200"> <br>

        <button type="submit">Add</button>
    </form>
    <p> Product List? <a href="{{route('products.product_list')}}">View</a></p>    
</body>
</html>