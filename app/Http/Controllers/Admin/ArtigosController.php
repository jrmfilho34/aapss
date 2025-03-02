<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artigo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArtigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMigalhas = json_encode([
            ["titulo" => "Admin", "url" => route('admin')],
            ["titulo" => "Lista de artigos", "url" =>""]
        ]);
        $listaArtigos = Artigo::listaArtigos(5);
        // dd($listaArtigos);
        return view('admin.artigos.index', compact('listaMigalhas','listaArtigos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validacao = \Validator::make($data,[
            "titulo"=>"required",
            "descricao"=>"required",
            "conteudo"=>"required",
            "imagen" =>"required",
            "data"=>"required"
        ]);
        if ($validacao->fails()) {
            return redirect('admin/artigos')
                        ->withErrors($validacao)
                        ->withInput();
        }
        $path = $request->file('imagen')->move('imagens');
        $data['imagen'] = $path;
        // dd($data);
        Artigo::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Artigo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validacao = \Validator::make($data,[
            "titulo"=>"required",
            "descricao"=>"required",
            "conteudo"=>"required",
            "imagen" =>"required",
            "data"=>"required"
        ]);
        if ($validacao->fails()) {
            return redirect('admin/artigos')
                        ->withErrors($validacao)
                        ->withInput();
        }
        Artigo::find($id)->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artigo::find($id)->delete();
        return redirect()->back();
    }
}
