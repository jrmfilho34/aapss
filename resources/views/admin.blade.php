@extends('layouts.app')

@section('content')
<pagina-component tamanho="10">
    <painel-component titulo="Dashaboard" cor="default">
                    <migalhas-component v-bind:lista="{{ $listaMigalhas }}">
                    </migalhas-component>
                    <div class="row">
                        <div class="col-md-4">
                            <caixa-component quantidade="{{ $artigos }}"
                                            titulo="Artigos"
                                            url="{{ route('artigos.index')}}"
                                            cor="orange"
                                            icone="far fa-newspaper">
                            </caixa-component>
                        </div>
                        <div class="col-md-4">
                            <caixa-component quantidade="{{ $usuarios }}"
                                            titulo="Usuários"
                                            url="{{ route('usuarios.index')}}"
                                            cor="#3c8dbc"
                                            icone="fas fa-user-friends">
                            </caixa-component>
                        </div>
                        <div class="col-md-4">
                        <caixa-component quantidade="{{ $autores }}"
                                            titulo="Autores"
                                            url="{{ route('autores.index')}}"
                                            cor="green"
                                            icone="fas fa-chalkboard-teacher">
                            </caixa-component>
                        </div>
                    </div>
                </painel-component>
</pagina-component>
@endsection
