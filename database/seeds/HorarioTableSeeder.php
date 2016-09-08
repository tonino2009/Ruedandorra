<?php

use Illuminate\Database\Seeder;

class HorarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horaries')->truncate();
    	DB::table('horaries')->insert([
            'id'=> 1,
            'semana'=> 4,
            'name'=>'antonio',
            'LE'=> 1,
            'LS'=> 6,
            'LC'=> 1,
            'ME'=> 2,
            'MS'=> 5,
            'MC'=> 0,
            'XE'=> 1,
            'XS'=> 6,
            'XC'=> 1,
            'JE'=> 3,
            'JS'=> 6,
            'JC'=> 0,
            'VE'=> 1,
            'VS'=> 4,
            'VC'=> 0,
            'comentario'=>'El martes no voy',
    	]);
        DB::table('horaries')->insert([
            'id'=> 2,
            'semana'=> 4,
            'name'=>'manuel',
            'LE'=> 3,
            'LS'=> 6,
            'LC'=> 1,
            'ME'=> 2,
            'MS'=> 6,
            'MC'=> 0,
            'XE'=> 1,
            'XS'=> 6,
            'XC'=> 0,
            'JE'=> 2,
            'JS'=> 6,
            'JC'=> 0,
            'VE'=> 3,
            'VS'=> 4,
            'VC'=> 0,
        ]);
        DB::table('horaries')->insert([
            'id'=> 3,
            'semana'=> 4,
            'name'=>'pedro',
            'LE'=> 1,
            'LS'=> 6,
            'LC'=> 0,
            'ME'=> 2,
            'MS'=> 5,
            'MC'=> 0,
            'XE'=> 1,
            'XS'=> 6,
            'XC'=> 0,
            'JE'=> 3,
            'JS'=> 6,
            'JC'=> 0,
            'VE'=> 1,
            'VS'=> 4,
            'VC'=> 0,
            'comentario'=>'Hoy es otro dia',
        ]);
        DB::table('horaries')->insert([
            'id'=> 4,
            'name'=>'paco',
            'semana'=> 4,
            'LE'=> 1,
            'LS'=> 6,
            'LC'=> 1,
            'ME'=> 4,
            'MS'=> 5,
            'MC'=> 1,
            'XE'=> 2,
            'XS'=> 6,
            'XC'=> 0,
            'JE'=> 3,
            'JS'=> 6,
            'JC'=> 0,
            'VE'=> 1,
            'VS'=> 4,
            'VC'=> 0,
            'comentario'=>'voy en bici',
        ]);
    }
}
