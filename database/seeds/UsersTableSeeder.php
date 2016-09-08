<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
    	DB::table('users')->insert([
    		'name'=> 'usuario',
    		'email'=> 'usuario@andorra.com',
    		'contrasena'=> 'usuario',
    		'cargo'=> 'usuario',
            'password' => bcrypt('usuario'),
            'apellidos'=> 'olivan petrus',
            'phone'=> '87678887',
            'activo'=> 'activo',
            'avatar'=> '/img/user5-128x128.jpg',
            'cochemarca'=> 'seat',
            'cochemodelo'=> 'ibiza',
            'CT'=> '23',
            'VT'=> '34',
            'ratio'=> '2',
    	]);
		DB::table('users')->insert([
    		'name'=> 'administrador',
    		'email'=> 'admin@andorra.es',
    		'contrasena'=> 'administrador',
            'password' => bcrypt('administrador'),
    		'cargo'=> 'administrador',
            'apellidos'=> 'castejon martinez',
            'phone'=> '8484738939',
            'activo'=> 'noactivo',
            'avatar'=> '/img/user7-128x128.jpg',
            'cochemarca'=> 'opel',
            'cochemodelo'=> 'astra',
            'CT'=> '4',
            'VT'=> '89',
            'ratio'=> '2',
    	]);
    	DB::table('users')->insert([
    		'name'=> 'antonio',
    		'email'=> 'antonio@andorra.es',
    		'contrasena'=> 'antonio',
            'password' => bcrypt('antonio'),
    		'cargo'=> 'administrador',
            'apellidos'=> 'perez perez',
            'phone'=> '934948493849',
            'activo'=> 'activo',
            'avatar'=> '/img/user2-128x128.jpg',
            'cochemarca'=> 'citroen',
            'cochemodelo'=> 'C3',
            'CT'=> '6',
            'VT'=> '567',
            'ratio'=> '19',
    	]);
    }
}


            