<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><strong>ID: </strong> {{$customer->id}}</p>
    <p><strong>Username: </strong> {{$customer->username}}</p>
    <p><strong>Full name: </strong> {{$customer->fullname}}</p>
    <p><strong>Image: </strong> <img src="{{$customer->image}}" alt="{{$customer ->username}}"></p>
    
</body>
</html>