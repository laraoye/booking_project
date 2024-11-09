<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles') <!-- For additional styles in child views -->
</head>
<body>
    <header>
        <h1>My Application</h1>
        <!-- Navigation bar, if any -->
    </header>

    <main>
        @yield('content') <!-- This is where child views will insert their content -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts') <!-- For additional scripts in child views -->
</body>
</html>
