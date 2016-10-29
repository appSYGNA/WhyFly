<template>
    <div class="container">
        <div>
            {{ price }}
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready.')
        },
        data: function() {
            return {
                plans: [
                    { price: '$100'},
                    { price: '$75'},
                    { price: '$50'}
                ]
            }
        }
    }
</script>
