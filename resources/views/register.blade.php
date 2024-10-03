<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('customers.register')}}" method="post">
        @csrf
        <label for="username">User name: </label>
        <input type="text" name="username" required maxlength="50"> <br>

        <label for="password">Password: </label>
        <input type="password" name="password" required maxlength="100" minlength="8"> <br>

        <label for="fullname">Full name: </label>
        <input type="text" name="fullname" maxlength="50"> <br>

        <label for="image">Image Url:  </label>
        <input type="text" name="image"  maxlength="255"> <br>

        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="{{route('customers.login_form')}}">Login</a></p>    
</body>
</html>