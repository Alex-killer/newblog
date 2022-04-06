<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap JS + Popper JS -->
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <title>Блог</title>
</head>
<body>
<header>
    @include('blog.includes.navbar')

    @yield('content')

</header>
<footer>

</footer>
</body>
</html>
