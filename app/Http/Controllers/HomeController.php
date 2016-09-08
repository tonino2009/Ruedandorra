<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\HoraryNormal as HoraryNormal;
use App\User as User;
use App\Task as Task;
use App\Horary as Horary;
use Auth;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
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
     * @return Response
     */
    public function index()
    {
     
        $usuario = Auth::user();
// Si es su primer inicio de sesión se le asignan tareas pendientes    
// Completar el perfil
        if($usuario->activo==""):
        $task = new Task();
        $task->user_id = $usuario->id ;
        $task->tipo = "perfil";
        $task->contenido = "Tienes que terminar de completar tu perfil";
        $task->estado = "activa";
        $task->fecha = $usuario->created_at;
        $task->save();
// Completar el horario típico y el próximo       
        $task = new Task();
        $task->user_id = $usuario->id ;
        $task->tipo = "propuesta";
        $task->contenido = "Debes completar el horario típico y la propuesta de la próxima semana";
        $task->estado = "activa";
        $task->fecha = $usuario->created_at;
        $task->save();
// Hacer al usuario noactivo       
        $usuario->activo = "noactivo";
        $usuario->save();
        endif;       
        $tasks = Task::all();
        $cantidadTareas = 0;
        foreach ($tasks as $task):     
if ($task->user_id == $usuario->id):
    $cantidadTareas++;
endif;
endforeach;

        if (!isset ($success)):
            $success = "";
        endif;
        if (!isset ($tarea)):
            $tarea = new Task();
        endif;
        
        $horario = HoraryNormal::find(Auth::user()->id);
        if (!isset ($horario)):
        $horario = new HoraryNormal();
        endif;
        
        $horarioProx = Horary::find(Auth::user()->id);
        if (!isset ($horarioProx)):
        $horarioProx = new Horary();
        endif;
        
        return \View::make('home',['usuario'=> $usuario, 'horarioNormal'=>$horario, 'horarioProx'=>$horarioProx, 'cantidadTareas'=>$cantidadTareas ,'tasks'=> $tasks,'success'=>$success ]);
    }

    }
   