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
<body>
<div id="app" class="flex flex-col justify-between min-h-screen">

    <pizza-tracker-component></pizza-tracker-component>

    <div class="flex flex-1 bg-green-500">
        <div class="flex flex-col w-1/2 justify-center text-center justify-around">
            <img src="{{ asset('/assets/pizza.svg') }}" class="w-1/2 mx-auto">
        </div>
        <div class="flex flex-col w-1/2 p-3 text-center">
            <h1 class="text-2xl">Order details</h1>
        </div>
    </div>

</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
