<!DOCTYPE html>
<html>
    <body>
        <head>
            <title>Job Portal</title>
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
        </head>
        <header>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/jobs') }}">Jobs</a>
                <a href="{{ url('/apply') }}">Apply</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p> &copy; 2025 Job Portal</p>
        </footer>
    </body>
</html>