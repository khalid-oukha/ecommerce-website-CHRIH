<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add this in the head section of your layout file -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    @vite('resources/css/app.css')

</head>
