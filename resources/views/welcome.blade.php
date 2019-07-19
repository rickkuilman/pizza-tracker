<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="font-serif">
<div id="app" class="flex justify-between min-h-screen">
    <div class="w-1/2 justify-center bg-teal-500 flex flex-col text-center justify-around">
        <h1 class="text-7xl text-teal-800">Pizza Tracker</h1>
        <img src="{{ asset('/assets/pizza.svg') }}" class="w-1/2 mx-auto">
    </div>
    <div class="w-1/2 p-3 bg-teal-600 text-dark flex flex-col text-center justify-around">
        <pizza-tracker-component></pizza-tracker-component>
    </div>

</div>
<script src="{{ asset('js/app.js') }}"></script>
<link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
</body>
</html>
