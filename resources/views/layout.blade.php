<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    header, main, footer{
        width: 80%;
        margin: 10px auto;
        border-radius: 10px;
    }
    header, footer{
        height: 100px;
        padding: 10p;
        background: lightblue;
    }
    </style>
</head>
<body>
    <header class="">Đây là phần đầu trang</header>

    <main>
        @yield('content')
    </main>
    <footer>
        Đây là chân trang
    </footer>
</body>
</html>