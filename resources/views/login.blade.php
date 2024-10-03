<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif
    <form action=" {{ route('customers.login') }}" method="post">
        @csrf

        <label for="username">User name: </label>
        <input type="text" name="username" required maxlength="50"> <br>

        <label for="password"> Password</label>
        <input type="password" name="password" required maxlength="100" minlength="8"> <br>

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account <a href="{{route('customers.register_form')}}">Register now</a></p>

    @if ($errors->has('login_error'))
    <p>{{ $errors->first('login_error') }}</p>
    @endif
</body>
</html>