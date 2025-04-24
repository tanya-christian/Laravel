<!DOCTYPE html>
<html>
    <head>
        <title>Travel And Tourism Industry</title>
        <link rel="stylesheet" href="{{asset('css\style.css')}}">
</head>
<body>
    <header>
        <nav>
            <a href="{{route('tours.create')}}">Book Tour</a>
</nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    <p>&copy; 2025 Travel And Tourism Industry</p>
</footer>
</body>
</html>