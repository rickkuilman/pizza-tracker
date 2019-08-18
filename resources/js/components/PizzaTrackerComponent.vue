<template>
    <div class="my-5 flex">

        <div class="flex-1">
            <h1 class="text-center w-full my-2 uppercase text-xl">step 1</h1>

            <div class="w-10 h-10 bg-orange-500 mx-auto rounded-full text-lg text-white flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-clock text-center w-full">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
<!--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"-->
<!--                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"-->
<!--                     class="feather feather-check-circle text-center w-full">-->
<!--                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>-->
<!--                    <polyline points="22 4 12 14.01 9 11.01"></polyline>-->
<!--                </svg>-->
            </div>

            <h2 class="text-center w-full my-2 uppercase text-red-700">Recieving order</h2>

        </div>

        <div class="flex-1">
            <h1 class="text-center w-full my-2 uppercase text-xl">step 2</h1>

            <div class="w-10 h-10 bg-white mx-auto rounded-full text-lg text-gray-500 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-clock text-center w-full">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </div>

            <h2 class="text-center w-full my-2 uppercase text-red-700">Prepare</h2>

        </div>

        <div class="flex-1">
            <h1 class="text-center w-full my-2 uppercase text-xl">step 3</h1>

            <div class="w-10 h-10 bg-white mx-auto rounded-full text-lg text-gray-500 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-clock text-center w-full">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </div>

            <h2 class="text-center w-full my-2 uppercase text-red-700">In oven</h2>

        </div>

        <div class="flex-1">

            <h1 class="text-center w-full my-2 uppercase text-xl">step 3</h1>

            <div class="w-10 h-10 bg-white mx-auto rounded-full text-lg text-gray-500 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-clock text-center w-full">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </div>

            <h2 class="text-center w-full my-2 uppercase text-red-700">On your way</h2>

        </div>

    </div>
</template>

<script>

    export default {
        mounted() {

            window.Echo.channel('my-channel').listen('MyEvent', function (data) {
                alert(JSON.stringify(data));
            });

        }
    }
</script>
