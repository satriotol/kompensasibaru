<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    <div>

        <header>
            @include('includes.header')
        </header>

        <div>

            @yield('content')

        </div>

        <footer>
            @include('includes.footer')
        </footer>

    </div>
</body>

</html>
