<?php

use App\Model\Pastel;
use Illuminate\Database\Seeder;


class PastelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        (new Pastel())->insert([
           'nome' => 'Frango',
            'preco' =>   5.50,
            'foto' =>  'storage/pastel/frango.jpeg'
        ]);


 
        (new Pastel())->insert([
            'nome' => 'Queijo',
            'preco' =>   5.50,
            'foto' =>  'storage/pastel/queijo.jpeg'
        ]);


        (new Pastel())->insert([
            'nome' => 'Carne',
            'preco' =>   5.50,
            'foto' =>  'storage/pastel/carne.jpeg'
        ]);


        (new Pastel())->insert([
            'nome' => 'Pizza',
            'preco' =>   4.00,
            'foto' =>  'storage/pastel/pizza.jpeg'
        ]);
        
    }
}
