<template>
    <div class="flex h-48 text-white text-xl uppercase text-center">
        <div class="flex flex-col flex-1 bg-red-500 justify-around">
            Making
        </div>
        <div class="flex flex-col flex-1 bg-blue-600 justify-around">
            Baking
        </div>
        <div class="flex flex-col flex-1 bg-blue-500 justify-around">
            On its way
        </div>
        <div class="flex flex-col flex-1 bg-blue-500 justify-around">
            Delivered
        </div>
    </div>
</template>

<script>

    export default {
        mounted() {

            window.Echo.channel('my-channel').listen('MyEvent', function(data) {
                alert(JSON.stringify(data));
            });

        }
    }
</script>
