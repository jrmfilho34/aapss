<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{ titulo}}</div>

        <div class="panel-body">
           <slot></slot>
        </div>
    </div>
</template>
<script>
export default {
    props:['titulo','cor'],
    data: function() { 
        return {
            
        }
    },
    computed:{
        defineCor: function(){
            return "panel panel-"+ (this.cor || "default")
        }
    }
}
</script>