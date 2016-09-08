<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User as User;
use App\Horary as Horary;
use App\HoraryNormal as HoraryNormal;
use App\Task as Task;
use Auth;

class HoraryController extends Controller
{

public function __construct()
{
    $this->middleware('auth');
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               
        $usuario = Auth::user();
        $horarios = Horary::all();
        if ($usuario->cargo==="usuario"):
          return redirect('/');
        endif;
        return \View::make('listaHorarios',['horarios'=> $horarios, 'usuario'=>$usuario,'nuevo'=>0  ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = new User();
        $horario = new Horary();
        $horario->name="nombre";
     
       return \View::make('formularioHorario',['horario'=> $horario, 'usuario'=>$usuario, 'nuevo'=>1 ]);
  
        
        
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = Auth::user();
        $add_horario = new Horary($request->all());   
        $add_horario->name= User::find($add_horario->id)->name;
        $add_horario->save();
        
        $horarios = Horary::all();
        
        $tareas = Task::where('user_id','=',$usuario->id)
                    ->get();
            foreach ($tareas as $tarea):  
            if($tarea->tipo=="propuesta"):
                $tarea->delete();
            endif;    
            endforeach;
         if ($usuario->cargo==="usuario"):
          return redirect('/');
      endif;    
        return \View::make('listaHorarios',['horarios'=> $horarios, 'success'=>'Horario creado correctamente', 'usuario'=>$usuario ]);
   //     return redirect('/horariosemanal')->with('success','Horario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // return "estoy en show de HoraryController "; //
       $usuario = Auth::user();
       $horario = Horary::find($id);
       if ($horario == null):
          $horario = HoraryNormal::find($id);
       if ($horario == null):
          $horario = new Horary();
          $horario->name=$usuario->name;
       endif;    
       endif;
       return \View::make('formularioHorario',['horario'=> $horario, 'usuario'=>$usuario, 'nuevo'=>0 ]);
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Auth::user();
        $nombre = User::find($id)->name;
        $horario = Horary::find($id);
        if ($horario == null):
            $horario = new Horary();
            $horario->id=$id;
            $horario->name=$nombre;
        endif;
    
        return \View::make('formularioHorario',['horario'=> $horario, 'usuario'=>$usuario,'nuevo'=>0 ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $horario = Horary::find($id);
        $horario->fill($request->all());
        $horario->save();
    //    return redirect('/horariosemanal')->with('success','Horario actualizado correctamente');
        $usuario = Auth::user();
        $horarios = Horary::all();
        if ($usuario->cargo==="usuario"):
            return redirect('/');
        endif;
        return \View::make('listaHorarios',['horarios'=> $horarios, 'success'=>'Horario actualizado correctamente', 'usuario'=>$usuario ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horario = Horary::find($id);
        $horario->delete();
    //     return redirect('/horariosemanal')->with('success','Horario borrado correctamente');
        $usuario = Auth::user();
        $horarios = Horary::all();
        return \View::make('listaHorarios',['horarios'=> $horarios, 'success'=>'Horario borrado correctamente', 'usuario'=>$usuario ]);
         
    }    
    
      public function ruedator()
    {
        $usuarios = User::all();
        $horarios = Horary::all();
        return \View::make('ruedator',['horarios'=> $horarios, 'usuarios'=> $usuarios]);
    }
    
     public function grabarRueda($dato)
     {

        
         
         return "estoy en grabarRueda" . $dato;
     }
       
    
      public function limpieza()
    {
          
      
          
    }
    
       
}
