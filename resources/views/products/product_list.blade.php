    @extends('layout')
    @section('content')
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
    @endsection
