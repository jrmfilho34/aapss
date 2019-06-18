<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artigo extends Model
{
    use SoftDeletes;
        /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $fillable = ['titulo', 'descricao','conteudo','imagen','autor','data'];
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public static function listaArtigos($index)
    {
        return Artigo::select('id','titulo','imagen','descricao','autor','data')->paginate($index);
    }
}
