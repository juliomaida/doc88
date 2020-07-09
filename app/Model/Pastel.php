<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pastel extends Model
{
 
use SoftDeletes;

     protected $fillable = [
        'nome',
        'preco' ,
        'foto'
    ];
    public function rules()
    {
       return [
        'nome'=>'required',
        'preco'=>'required',
        'foto'=>'required'
        ];
    }
 
}