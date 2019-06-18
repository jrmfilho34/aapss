@extends('layouts.app')

@section('content')
<pagina-component tamanho="12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <painel-component titulo="Lista de Artigos" cor="success">
        <migalhas-component v-bind:lista="{{ $listaMigalhas }}">
        </migalhas-component>
        <tabela-component v-bind:titulos="['#','Titulo','imagen','Descrição','Autor','Data','Ação']"
                        v-bind:itens="{{ json_encode($listaArtigos) }}"
                        criar="#adicionar"
                        orden="asc"
                        ordenCol ="0"
                        detalhe="/artigos/" 
                        editar="/artigos/" 
                        deletar="/artigos/" 
                        token="{{ csrf_token() }}"
                        modal="sim">
        </tabela-component>
        <div align="center">
        {{$listaArtigos}}
        </div>
    </painel-component>
</pagina-component>
<!-- Criar publicação -->
<modal-component nome="adicionar" titulo="Adicionar">

        <formulario-component id="formAdicionar" css="" rota="{{ route('artigos.store')}}" method="post" token="{{ csrf_token() }}">
        <input type="hidden" name="autor" value=" {{ Auth::user()->name }}">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Título</label>
                <input class="form-control" type="text" name="titulo" placeholder="Default input" value="{{ old('titulo')}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Imagen</label>
                <input class="form-control" name="imagen" value="{{ old('imagen')}}" type="file">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <input class="form-control" type="text" name="descricao" value="{{ old('descricao')}}" placeholder="Default input">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Conteudo</label>
                <textarea class="form-control" name="conteudo" rows="3">{{ old('conteudo')}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Data</label>
                <input class="form-control" name="data" value="{{ old('data')}}" type="date">
            </div>
            <div class="modal-footer">
            <button form="formAdicionar" type="submit" class="btn btn-primary">Enviar</button> 
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </formulario-component>   
</modal-component>
<!-- Editar publicação -->
<modal-component nome="editar" titulo="Editar">
        <formulario-component id="formEditar" css="" v-bind:rota="'/artigos/' + $store.state.item.id " method="put" token="{{ csrf_token() }}">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Título</label>
                <input class="form-control" type="text" name="titulo" placeholder="Default input" v-model="$store.state.item.titulo">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Imagen</label>
                <input class="form-control" name="imagen" value="{{ old('imagen')}}" type="file">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <input class="form-control" type="text" name="descricao" v-model="$store.state.item.descricao" placeholder="Default input">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Conteudo</label>
                <textarea class="form-control" name="conteudo" rows="3" v-model="$store.state.item.conteudo"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Data</label>
                <input class="form-control" name="data" v-model="$store.state.item.data" type="date">
            </div>
            <div class="modal-footer">
            <button form="formEditar" type="submit" class="btn btn-primary">Enviar</button> 
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </formulario-component>  
</modal-component>
<!-- Detalhes da publicação -->
<modal-component nome="detalhe" v-bind:titulo="'Detalhes'">
        <div class="card">
        <div class="card-header">
         <strong>Titulo: </strong>@{{ $store.state.item.titulo }}
        </div>
        <div class="card-body">
            <h5 class="card-title"><strong>Descrição: </strong>@{{ $store.state.item.descricao }} </h5>
            <p class="card-text"><strong>Conteudo: </strong>@{{ $store.state.item.conteudo }}</p>
            <img src="@{{ $store.state.item.imagen}}" alt="">
            <p class="card-text"><strong>Data da publicação: </strong>@{{ $store.state.item.data }}</p>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        </div>
        </div>
        <p></p>
</modal-component>
@endsection
