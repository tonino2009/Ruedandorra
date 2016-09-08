<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User as User;
use App\Task as Task;
use App\Rueda as Rueda;
use App\Horary as Horary;
use PDF;


class RuedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //   Echo 'estoy en index'; 
        $usuario = Auth::user();
        
        if ($usuario->activo==="noactivo"):
          return redirect('/');
        endif;      
        
        $tareas = Task::where('user_id','=',$usuario->id)
                    ->get();
            foreach ($tareas as $tarea):  
            if($tarea->tipo=="rueda"):
                $tarea->delete();
            endif;    
            endforeach;
        if ($usuario->cargo==="usuario"):
        $horario = Horary::find($usuario->id);//
        if ($horario == null):
          $horario = new Horary();
        endif;
        $rueda = Rueda::all()->last();
//$pdf = PDF::loadView('ruedaPdf');
        $pdf = PDF::loadView('ruedaPdf',['rueda'=> $rueda ]);
    //    $pdf = PDF::loadView('textoprueba');
    //    return $pdf->stream('rueda1.pdf');
        return \View::make('ruedaPdf',['rueda'=> $rueda, 'horarioProx'=>$horario ]); 
       

        return \View::make('rueda',['rueda'=> $rueda, 'horarioProx'=>$horario ]); 


        endif;
        $ruedas = Rueda::all();
        return \View::make('listaRuedas',['ruedas'=> $ruedas, 'success'=>'Rueda creada correctamente' ]); 
       
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //   Echo 'estoy store'. $request->L1; //
        
        $usuario = Auth::user();
        $rueda = new Rueda($request->all());
        $rueda->save();
        $ruedas = Rueda::all();
        $usuarios = User::all();
  //      if($usuario->activo==""):
        
    foreach ($usuarios as $usuario):    
        $task = new Task();
        $task->user_id = $usuario->id ;
        $task->tipo = "rueda";
        $task->contenido = "Ya está la rueda organizada de la semana: ". $rueda->semana;
        $task->estado = "activa";
        $task->fecha = $rueda->created_at;
        $task->save();
   endforeach;    
                
        return \View::make('listaRuedas',['ruedas'=> $ruedas, 'success'=>'Rueda creada correctamente' ]);

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rueda = Rueda::find($id);//
        $horario = Horary::find(Auth::user()->id);
        if ($horario == null):
          $horario = new Horary();
        endif;
     return \View::make('rueda',['rueda'=> $rueda, 'horarioProx'=>$horario ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        
        Echo $request; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
