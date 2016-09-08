<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task as Task;
use App\User as User;
use Auth;
use DB;

class UsuarioController extends Controller
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
        if (!isset ($success)):
            $success = "";
        endif;
        
        $usuario = Auth::user();
        if ($usuario->cargo==="usuario"):
          return redirect('/');
        endif; 
        
        $usuarios = User::all();
        return \View::make('listaUsuarios', ['usuarios'=> $usuarios, 'sucess'=>$success]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = new User();
        return \View::make('fichaUsuario')->with('usuario', $usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User($request->all());
        $usuario->contrasena=$request->password1;
        $usuario->password=bcrypt($request->password1);
        $usuario->save();
        
        
        return redirect('/listausuarios')->with('success','Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

     //   return "estoy en show";
        $usuario = User::find($id);
        return \View::make('fichaUsuario')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return \View::make('fichaUsuario')->with('usuario', $usuario);
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
        $usuario = User::find($id);
        $usuario->fill($request->all());
        $usuario->contrasena=$request->password1;
        $usuario->password=bcrypt($request->password1);
        $usuario->save();
    
        
        $tareas = Task::where('user_id','=',$usuario->id)
                    ->get();
            foreach ($tareas as $tarea):  
            if($tarea->tipo=="perfil"):
                $tarea->delete();
            endif;    
            endforeach;
        if ($usuario->cargo==="usuario"):
          return redirect('/');
        endif;     
        $usuarios = User::all();
        return \View::make('listaUsuarios', ['success'=>'Usuario actualizado correctamente', 'usuarios'=> $usuarios]);

      //  return redirect('/listausuarios')->with('success','Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $usuario = User::find($id);
            $usuario->delete();
     //       return redirect('/listausuarios')->with('success','Usuario borrado correctamente');
            $usuarios = User::all();
            return \View::make('listaUsuarios', ['success'=>'Usuario borrado correctamente', 'usuarios'=> $usuarios]);
    }

  public function activar($id)
    {
        $usuario = User::find($id);
        if($usuario->activo==="activo"):
        $usuario->activo="noactivo";
else:
        $usuario->activo="activo";
endif;
        $usuario->save();
        $usuarios = User::all();
        return \View::make('listaUsuarios', ['success'=>'Usuario cambiado correctamente', 'usuarios'=> $usuarios]);

    //    return "estoy en usuario controler activar con Id:". $id;//
    }

      public function hacerAdmin($id)
    {
        $usuario = User::find($id);
        if($usuario->cargo==="administrador"):
        $usuario->cargo="usuario";
else:
        $usuario->cargo="administrador";
endif;
        $usuario->save();
        $usuarios = User::all();
        return \View::make('listaUsuarios', ['success'=>'Usuario cambiado correctamente', 'usuarios'=> $usuarios]);
    }
}
