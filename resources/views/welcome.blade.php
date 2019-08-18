<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="font-serif">
<div id="app" class="flex min-h-screen flex-col justify-between">
    <div class="flex-1 flex flex-col md:flex-row justify-between">
        <div class="w-full md:w-1/2 flex flex-col bg-orange-100 text-center justify-center">
            <img src="{{ asset('/assets/pizza-place.svg') }}" class="w-3/4 mx-auto">
        </div>
        <div class="w-full md:w-1/2 flex flex-col p-5 bg-orange-100 text-red-600 justify-around">
            <div class="lg:w-3/4 w-full mx-auto border-4 border-dashed border-red-600 p-5 rounded">
                <h1 class="text-6xl mb-5">Your Order</h1>

                <h2 class="text-3xl mx-auto">Order number #190818001</h2>
                <p class="mx-auto mb-5">Thanks for placing an order with us!</p>

                <h2 class="text-4xl">Let's sum it up</h2>
                <p class="mx-auto">Spotted a mistake? Contact us at 202-555-0107</p>

                <table class="w-full my-5">
                    <tr>
                        <td class="p-2">1x</td>
                        <td class="p-2">Pepperoni</td>
                        <td class="text-right p-2 font-weight-bold">&euro; 8.49</td>
                    </tr>
                    <tr>
                        <td class="p-2">1x</td>
                        <td class="p-2">Seafood</td>
                        <td class="text-right p-2 font-weight-bold">&euro; 11.49</td>
                    </tr>
                    <tr>
                        <td class="p-2">1x</td>
                        <td class="p-2">Mushroom</td>
                        <td class="text-right p-2 font-weight-bold">&euro; 7.49</td>
                    </tr>
                    <tr>
                        <td class="p-2">2x</td>
                        <td class="p-2">Mexican</td>
                        <td class="text-right p-2 font-weight-bold">&euro; 10.99</td>
                    </tr>
                    <tr>
                        <td class="p-2">2x</td>
                        <td class="p-2">Hawaian</td>
                        <td class="text-right p-2 font-weight-bold">&euro; 7.99</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right p-2 font-weight-bold">&euro; 46.45</td>
                    </tr>
                </table>
                <h2 class="text-4xl">Follow your order</h2>
                <p class="mx-auto">We are just as excited as you are, let's track your order down</p>

                <pizza-tracker-component></pizza-tracker-component>
            </div>
        </div>
    </div>
    <div class="flex flex-col h-16 bg-gray-900 text-white justify-center text-center">
        <div>
            <a href="https://rickkuilman.nl">Code by Rick Kuilman</a> |
            <a href="https://github.com/rickkuilman/pizza-tracker">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
            </a> |
            <a rel="nofollow" href="https://www.vecteezy.com" target="_blank">Vectors by Vecteezy!</a>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
</body>
</html>
