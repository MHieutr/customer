<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Actions</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <th>{{$customer->id}}</th>
            <th>{{$customer->username}}</th>
            <th>{{$customer->fullname}}</th>
            <th><a href="{{route('customers.details', $customer->id)}}">View</a></th>
        </tr>
        @endforeach
    </table>
    <br>
    <p><a href="{{route('products.productAdd')}}">Add Product</a></p>
    <br>
    <p><a href="{{route('products.product_list')}}">Product List</a></p>
    @endsection('content')
</body>
</html>