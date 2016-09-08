@extends('layouts.app')

@section('contentheader_title')
Lista de todos los usuarios
@endsection

@section('main-content')

@include ('trozos.alertas')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
<a href="{{ route('listausuarios.create') }}" class="btn btn-info">Nuevo usuario</a>
                </div>

                <div class="panel-body">
                     <table id="tabla2" class="table responsive table-striped table-bordered">
    <thead>
   <tr>
        <th>id</th>
        <th>nombre</th>
        <th>apellidos</th>
        <th>email</th>
        <th>teléfono</th>
        <th>contrasena</th>
        <th>avatar</th>
        <th>activo</th>
        <th>cargo</th>
        <th>comandos</th>
</tr>
</thead>
    <tbody>
    @foreach ($usuarios as $usuario)
    <tr>
         <td>{{ $usuario->id }}</td>
        <td>{{ $usuario->name }}</td>
             <td>{{ $usuario->apellidos }}</td>
        <td>{{ $usuario->email }}</td>
             <td>{{ $usuario->phone }}</td>
        
        <td>{{ $usuario->contrasena }}</td>
                <td><img class="img-circle" src="{{ $usuario->avatar }}" width="30" height="30" alt="Imagen usuario"></td>

        <td>{{ $usuario->activo }} </td>
        <td>{{ $usuario->cargo }}</td>
        <td>
        
{!! Form::open(['route' => ['listausuarios.destroy', $usuario->id], 'method' => 'DELETE']) !!}
        <div class="btn-group-vertical">
          <a href="{{ route('listausuarios.edit', $usuario->id) }}" class="btn btn-xs btn-primary">Editar</a>
          <a href="{{ action('UsuarioController@activar', $usuario->id ) }}" class="btn btn-xs btn-info">Act/Desc</a>
          <a href="{{ action('UsuarioController@hacerAdmin', $usuario->id ) }}" class="btn btn-xs btn-warning">Adm/NoAdm</a>
          {!! Form::submit('Eliminar',['class' => 'btn btn-xs btn-danger'])!!}
        </div>
{!! Form::close() !!}            
        </td>
    </tr>
    @endforeach
</tbody>
  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   window.onload = function() { 
        $('#tabla').DataTable({
            'language': {
            "url": "plugins/datatables/Spanish.json"
            },
 //           responsive: true
        });
    };
</script>


@endsection


