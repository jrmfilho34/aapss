<template>
    <div>
        <div class="form-inline">
            <a v-if="criar && !modal" v-bind:href="criar" class="btn btn-success btn-sm">criar</a>
            <modallink-component v-if="criar && modal"
                                nome="adicionar"
                                cor="success"
                                titulo="criar">
            </modallink-component>
            <div class="form-group pull-right">
                <input type="search" class="form-control" placeholder="Buscar publicação" v-model="buscar">
            </div>
        </div>
        
        <table class="table">
            <thead class="thead-dark" >
                <tr >
                <th v-for="(iten,index) in titulos" v-on:click="ordenaColuna(index)" style="cursor:pointer;" scope="col">
                    {{ iten}}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(iten,index) in lista">
                    <td v-for="(i,t) in iten">
                        <template v-if="t == 'imagen'">
                            <img :src="i" class="rounded float-left" alt="appss" style=" height: 60px; width:60px;">
                        </template>
                        <template  v-if="t != 'imagen'">
                                 {{ i }}
                        </template>
                    </td>
                  
                    <td>
                        <form v-bind:id="index" v-bind:action="deletar + iten.id" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" v-bind:value="token">
                        | <a v-if="detalhe && !modal" v-bind:href="detalhe" class="btn btn-primary  btn-sm">Detalhe</a>
                            <modallink-component v-if="detalhe && modal"
                                                nome="detalhe"
                                                cor="primary"
                                                v-bind:item="iten" 
                                                v-bind:url="detalhe"
                                                titulo="detalhe">
                            </modallink-component>
                        | <a v-if="editar && !modal" v-bind:href="editar" class="btn btn-info  btn-sm">Editar</a> 
                            <modallink-component v-if="editar && modal"
                                                nome="editar"
                                                cor="info"
                                                v-bind:item="iten"
                                                v-bind:url="editar"
                                                titulo="editar">
                            </modallink-component>
                        | <a href="#" v-if="deletar" v-on:click="executaForm(index)"  class="btn btn-danger  btn-sm">Deletar</a>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    props:['itens','criar','detalhe','token','editar','deletar','orden','ordenCol','modal','titulos'],
    data(){
        return{
            buscar:'',
            ordenAux: this.orden | 'asc',
            ordenColAux: this.ordenCol | 0,
            image: 'images/recent-news-1-600x450.jpg'
        }
    },
    mounted(){
        console.log('ALFABETO'.toLowerCase())
    },
    methods:{
        executaForm(index){
            document.getElementById(index).submit()
        },
        ordenaColuna(coluna){
            this.ordenColAux = coluna;
            if(this.ordenAux == "asc"){
                this.ordenAux = "desc"
            }else{
                this.ordenAux = 'asc'
            }
        }
    },
    computed:{
        lista(){
            let lista = this.itens.data;
            let orden = this.ordenAux
            let ordenCol = this.ordenColAux
            ordenCol = parseInt(ordenCol)
            
            if(orden === "asc"){
                lista.sort(function(a,b){
                    if ( Object.values(a)[ordenCol] > Object.values(b)[ordenCol] ) { return 1 }
                    if ( Object.values(a)[ordenCol]< Object.values(b)[ordenCol] ) { return -1}
                    return 0;
                })
            }else{
                lista.sort(function(a,b){
                    if ( Object.values(a)[ordenCol] < Object.values(b)[ordenCol] ) { return 1 }
                    if ( Object.values(a)[ordenCol] > Object.values(b)[ordenCol] ) { return -1}
                    return 0;
                })
            }

            let busca = this.buscar
            if(this.buscar){
                return lista.filter(resp=>{
                    resp = Object.values(resp)
                    for(let k=0; k < resp.length; k++){
                        if((resp[k]+"").toLowerCase().indexOf(busca.toLowerCase()) >= 0){
                        return true
                        }
                    }
                    return false
                })
            }

            return lista
        }
    }
}
</script>