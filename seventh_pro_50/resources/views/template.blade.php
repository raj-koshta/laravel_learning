<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
</head>

<body>
    <div class="header">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Login</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
    {{-- @yield('main') --}}
    @section('main')
    @show
    <div class="footer">
        <p>All Right Reserved - Footer</p>
    </div>
</body>

</html>