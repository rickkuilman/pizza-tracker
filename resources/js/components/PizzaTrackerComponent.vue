<template>
    <div>
        <h1 class="text-6xl text-yellow-500">Following your pizza</h1>
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
