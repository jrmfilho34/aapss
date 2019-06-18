<template>
    <span id="modalLink">
        <span v-if="item">
            <button type="button" 
                    v-bind:class="'btn btn-'+cor+' btn-sm' || 'btn btn-primary btn-sm' " 
                    data-toggle="modal" 
                    v-bind:data-target="'#'+nome"
                    v-on:click="preencherFormulario">
                    {{ titulo }}
            </button>
        </span>
        <span v-if="!item">
            <button type="button" 
                    v-bind:class="'btn btn-'+cor+' btn-sm' || 'btn btn-primary btn-sm' " 
                    data-toggle="modal" 
                    v-bind:data-target="'#'+nome">
                    {{ titulo }}
            </button>
        </span>
    </span>
</template>
<script>
export default {
    props:['nome','cor','titulo','item','url'],
    data: function() { 
        return {
            
        }
    },
    methods:{
        preencherFormulario(){
            axios.get(this.url + this.item.id).then(resp=>{
                console.log(resp.data)
                this.$store.commit('setItem',resp.data)
            })          
        }
    }
}
</script>