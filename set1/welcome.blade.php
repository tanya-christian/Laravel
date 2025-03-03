<!DOCTYPE html>
<html>
    <body>
        <head>
            <title>Food and Beverage Industry</title>
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
        </head>
        <header>
            <nav>
                <a href="{{url('/')}}" >Home</a>
                <a href="{{url('/menu')}}">Menu</a>
                <a href="{{url('/order')}}">Place Order</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>&copy; 2025 Food And Beverage Industry</p>
        </footer>
    </body>
</html>