<!doctype html>
<html lang="en">
@include('includes.head')
<head>

</head>
<body>
    <header>
        @include('includes.menu')
    </header>
    <main role="main">
        @yield('content')
    </main>

    @include('includes.jsfooter')
    <footer>
        @include('includes.footer')
    </footer>
</body>
</html>