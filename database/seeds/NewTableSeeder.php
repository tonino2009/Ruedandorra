<?php

use Illuminate\Database\Seeder;

class NewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('navs')->truncate();
    	DB::table('navs')->insert([
    		'position'=> 1,
    		'icono'=> 'icono33',
    		'name'=> 'Home',
    		'url'=> '/',
    		'cargo'=> 'usuario',
    	]);
    	DB::table('navs')->insert([
    		'position'=> 2,
    		'icono'=> 'icono33',
    		'name'=> 'Modificar Perfil',
    		'url'=> '/datosusuario',
    		'cargo'=> 'usuario',
    	]);
    	DB::table('navs')->insert([
    		'position'=> 3,
    		'icono'=> 'icono33',
    		'name'=> 'Horario Normal',
    		'url'=> '/horarionormal',
    		'cargo'=> 'usuario',
    	]);
    	DB::table('navs')->insert([
    		'position'=> 4,
    		'icono'=> 'icono33',
    		'name'=> 'Encuestas',
    		'url'=> '/encuestas',
    		'cargo'=> 'usuario',
    	]);
    	DB::table('navs')->insert([
    		'position'=> 5,
    		'icono'=> 'icono33',
    		'name'=> 'Listado de usuarios',
    		'url'=> '/listadodeusuarios',
    		'cargo'=> 'administrador',
    	]);


    }
}
