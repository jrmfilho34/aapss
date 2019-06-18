<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMigalhas = json_encode([
            ["titulo" => "Admin", "url" => route('admin')]
        ]);
        $artigos = Artigo::all()->count();
        $autores = User::all()->where('autor','=','S')->count();
        $usuarios = User::all()->where('autor','=','N')->count();       
        return view('admin', compact('listaMigalhas','artigos','autores','usuarios'));
    }
}
