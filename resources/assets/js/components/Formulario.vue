<template>
    <form v-bind:action="rota" v-bind:class="estilo" v-bind:method="defineMethod" enctype="multipart/form-data">
        <input v-if="alteraMethod" type="hidden" name="_method" v-bind:value="alteraMethod">
        <input v-if="token" type="hidden" name="_token" v-bind:value="token">
        <slot></slot>
    </form>
</template>
<script>
export default {
    props:['rota','estilo','method','token'],
    data: function() { 
        return {
            alteraMethod:''
        }
    },
    computed:{
        defineMethod(){
            if(this.method == "post" || this.method == "get"){
                return this.method;
            }
            if(this.method == "put"){
               this.alteraMethod = "put"
            }
            if(this.method == "delete"){
                this.alteraMethod = "delete"
            }
            return "post"
        }
    }
}
</script>