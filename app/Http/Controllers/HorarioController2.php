<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\HorarioSemanal as HorarioSemanal;

use App\Horary as Horary;

class HorarioController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horary::all();
        return \View::make('listaHorarios')->with('horarios', $horarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return \View::make('formularioHorario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        return $request->user();
        return "EStoy en el store de horariocontroller2"; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return "estoy en show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horary::find($id);
        return \View::make('formularioHorario')->with('horario', $horario);

      //  return 'Aqui editamos el horario de: ' . $id;
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
  
return $id;
  //       return "EStoy en el update de horariocontroller2"; 
    
// Creamos un nuevo objeto para nuestro nuevo usuario
        $horario = new HorarioSemanal;//HorarioSemanal::find($id);
        
        // Si el usuario no existe entonces lanzamos un error 404 :(
  //      if  (false)          //(is_null ($horario))
  //      {
  //          App::abort(404);
   //     }
        
        // Obtenemos la data enviada por el usuario
        $data = $request;
        
        // Revisamos si la data es válido
        if  (true)        //($horario->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $horario->fill($data);
            // Guardamos el usuario
            $horario->save();
            // Y Devolvemos una redirección a la acción show para mostrar el usuario
            return Redirect::route('horariosemanal.show', array($horario->id));
        }
        else
        {
            // En caso de error regresa a la acción edit con los datos y los errores encontrados
            return Redirect::route('admin.users.edit', $horario->id)->withInput()->withErrors($user->errors);
        
}


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "EStoy en el destroy de horariocontroller2"; 
    }
}
