<!DOCTYPE html>
<html lang="en">
<head>
<!-- csrf token --->
<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->


    <!-- script -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Todo App</title>
</head>
<body>
    @yield('content')
</body>
</html>