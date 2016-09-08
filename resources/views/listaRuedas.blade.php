@extends('layouts.app')

@section('contentheader_title')

Lista de ruedas

@endsection

@section('main-content')

@include ('trozos.alertas')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
<a href="{{ route('rueda.create') }}" class="btn btn-info">Nueva Rueda</a>
                </div>
                <div class="panel-body">

  <table id="tabla2" class="table responsive table-striped table-bordered">
  <thead>
    <tr>
        <th>id</th>
        <th>Semana</th>
        <th>comentarios</th>
        <th>Controles</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($ruedas as $rueda)
    <tr>
    	<td>{{ $rueda->id }}</td>
        <td>{{ $rueda->semana }}</td>
        <td>{{ $rueda->comentarios }}</td>
       

        <td>
<div class='btn-group-vertical'>    
<a href="{{ route('rueda.show', $rueda->id) }}" class="btn btn-xs btn-primary">Ver</a>
{!! Form::open(['route' => ['rueda.destroy', $rueda->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Eliminar',['class' => 'btn btn-xs btn-danger'])!!}
{!! Form::close() !!}
</div>
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

@endsection
