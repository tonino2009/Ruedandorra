<?php

use Illuminate\Database\Seeder;

class HorarioNormalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horary_normals')->truncate();
    	DB::table('horary_normals')->insert([
    		'id'=> 1,
            'name'=> 'Maria',
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
    	]);
        DB::table('horary_normals')->insert([
            'id'=> 2,
            'name'=> 'Antonio',
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
        DB::table('horary_normals')->insert([
            'id'=> 3,
            'name'=> 'Jose',
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
        ]);
        DB::table('horary_normals')->insert([
            'id'=> 4,
            'name'=> 'manolito',
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
        ]);
    }
}
