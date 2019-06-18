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
    <painel-component titulo="Lista de Usuários" cor="danger">
        <migalhas-component v-bind:lista="{{ $listaMigalhas }}">
        </migalhas-component>
        <tabela-component  v-bind:titulos="['#','nome','email','Ação']"
                        v-bind:itens="{{ json_encode($listaModelo) }}"
                        criar="#adicionar"
                        orden="asc"
                        ordenCol ="0"
                        detalhe="/usuarios/" 
                        editar="/usuarios/" 
                        deletar="/usuarios/" 
                        token="{{ csrf_token() }}"
                        modal="sim">
        </tabela-component>
        <div align="center">
        {{$listaModelo}}
        </div>
    </painel-component>
</pagina-component>
<!-- Criar publicação -->
<modal-component nome="adicionar" titulo="Adicionar">

        <formulario-component id="formAdicionar" css="" rota="{{ route('usuarios.store')}}" method="post" token="{{ csrf_token() }}">
        <input type="hidden" name="autor" value=" {{ Auth::user()->name }}">
            <div class="form-group">
                <label for="name">Nome</label>
                <input class="form-control" type="text" name="name" placeholder="Default input" value="{{ old('name')}}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email" value="{{ old('email')}}" placeholder="Default input">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password"  value="{{ old('password')}}">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <select class="form-control" name="autor" id="">
                    <option {{ (old('autor') && old('autor') == 'N' ? 'selected' : '') }} value="N"> Não </option>
                    <option {{ (old('autor') && old('autor') == 'N' ? 'selected' : '') }} value="S"> Sim </option>
                </select>
            </div>
            <div class="modal-footer">
            <button form="formAdicionar" type="submit" class="btn btn-primary">Enviar</button> 
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>

        </formulario-component>   
  
</modal-component>
<!-- Editar publicação -->
<modal-component nome="editar" titulo="Editar">
        <formulario-component id="formEditar" css="" v-bind:rota="'/usuarios/' + $store.state.item.id " method="put" token="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Nome</label>
                <input class="form-control" type="text" name="name" placeholder="Default input" v-model="$store.state.item.name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" v-model="$store.state.item.email" placeholder="Default input">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input class="form-control" type="password" name="password" v-model="$store.state.item.password" placeholder="Default input">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <select class="form-control" name="autor" id=""  v-model="$store.state.item.autor" >
                    <option  value="N"> Não </option>
                    <option  value="S"> Sim </option>
                </select>
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
         <strong>Nome: </strong>@{{ $store.state.item.name }}
        </div>
        <div class="card-body">
            <h5 class="card-title"><strong>Email: </strong>@{{ $store.state.item.email }} </h5>
            <p class="card-text"><strong>Senha: </strong>@{{ $store.state.item.password }}</p>
            <p class="card-text"><strong>Data da publicação: </strong>@{{ $store.state.item.create_date }}</p>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        </div>
        </div>
        <p></p>
</modal-component>
@endsection
