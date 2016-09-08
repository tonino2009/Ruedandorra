<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Task as Task;
use App\User as User;
use Auth;

class TaskController extends Controller
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
    if ($usuario->cargo==="usuario"):
            $tasks = Task::where('user_id','=',$usuario->id)
                    ->get();
     else:                
            $tasks = Task::all();
     endif;

     if (!isset ($success)):
            $success = "";
        endif;
        if (!isset ($tarea)):
            $tarea = new Task();
        endif;
//      if ($usuario->cargo==="usuario"):
//          return redirect('/');
//      endif;              
        return \View::make('listaTareas', ['tasks'=> $tasks,'tarea'=>$tarea ,'sucess'=>$success, 'usuario'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return "estoy en create";   //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task($request->all());
        $task->save();
        return redirect('/tareas')->with('success','Tarea creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return "Estoy en show";   //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Task::find($id);
         $usuario = Auth::user();
     if ($usuario->cargo==="usuario"):
            $tasks = Task::where('user_id','=',$usuario->id)
                    ->get();
     else:                
            $tasks = Task::all();
     endif;
        
        
    //    return redirect('/tareas')->with('tarea', $task);
        return \View::make('listaTareas', ['tasks'=> $tasks,'tarea'=>$tarea]);
        
        
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
        $task = Task::find($id);
        $task->fill($request->all());
        $task->save();
        return redirect('/tareas')->with('success','Tarea actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tareas')->with('success','Tarea borrada correctamente');
    }
}
