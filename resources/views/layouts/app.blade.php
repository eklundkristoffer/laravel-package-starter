<!DOCTYPE html>
<html lang="{{ config('app.locale', 'en') }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Styles --}}
    <link rel="stylesheet" href="/package/css/app.css">
</head>
<body>
    <div id="app">
        @yield ('content')
    </div>

    {{-- Scripts --}}
    <script src="/package/js/app.js"></script>
</body>
</html>
