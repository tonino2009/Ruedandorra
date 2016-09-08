<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\HoraryNormal as HoraryNormal;

class HoraryNormalController extends Controller
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
        $horarios = HoraryNormal::all();
        if ($usuario->cargo==="usuario"):
            return redirect('/');
        endif;
        return \View::make('listaHorariosNormales',['usuario'=> $usuario, 'horarios'=> $horarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $usuario = Auth::user();
        
         
         
        return \View::make('formularioHorarioNormal',['usuario'=> $usuario, 'cantidadTareas'=>'*' ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $horario = new HoraryNormal($request->all());
        $horario->save();
        return redirect('/horarionormal')->with('success','Horario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   //    return "estoy en show de HoraryNormalController"; //
       $usuario = Auth::user();
       $horario = HoraryNormal::find($id);
   //    if ($horario == null):
   //      $horario = new HoraryNormal();
   //      $horario->id = $usuario->id;
    //   endif;
 
        return \View::make('formularioHorarioNormal',['horario'=> $horario, 'usuario'=>$usuario ]);
  
       
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = HoraryNormal::find($id);
        return \View::make('formularioHorarioNormal')->with('horario', $horario);
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
        $horario = HoraryNormal::find($id);
        if ($horario == null):
         $horario = new HoraryNormal();
     endif;
        $horario->fill($request->all());
        $horario->save();
        return redirect('/horarionormal')->with('success','Horario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $horario = HoraryNormal::find($id);
         $horario->delete();
         return redirect('/horarionormal')->with('success','Horario borrado correctamente');
    }
}
