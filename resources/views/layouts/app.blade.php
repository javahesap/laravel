<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Uygulaması</title>
   <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        @include('partials.header')
    </header>
   <div>beşir</div>
    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>
