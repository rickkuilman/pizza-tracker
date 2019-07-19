<template>
    <div class="container">
        Hi!
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
