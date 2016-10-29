<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" id="loginCard" v-if="show">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <div class="btn-group pull-right">
                            <button id="closeLogin" v-on:click="show = !show">
                                <i class="fa fa-times-circle"></i>
                            </button>
                        </div>
                        Logged In
                    </div>
                    <div class="panel-body text-center">
                        You have successfully logged in.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
#closeLogin {
    background:none;
    border:none;
}
</style>
<script>
    export default {
        mounted() {
            console.log('Component ready.')
        },
        data: function() {
            return {
                show: true
            }
        }
    }
</script>
