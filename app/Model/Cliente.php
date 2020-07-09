<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;

     protected $fillable = [
        'nome',
        'email',
        'telefone',
        'data_nascimento',
        'endereco',
        'complemento',
        'bairro',
        'cep'
    ];
    public function rules()
    {
       return [
        'nome'=>'required',
        'email'=>'required|unique.unique:Cliente',
        'data_nascimento'=>'required',
        'endereco'=>'required',
        'bairro'=>'required',
        'cep'=>'required'
        ];
    }
    
}
