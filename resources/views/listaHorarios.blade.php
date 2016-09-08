@extends('layouts.app')

@section('contentheader_title')

Lista de horarios semanales

@endsection

@section('main-content')

@include ('trozos.alertas')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
<a href="{{ route('horariosemanal.create') }}" class="btn btn-info">Nuevo horario</a>
                </div>
                <div class="panel-body">

  <table id="tabla2" class="table responsive table-striped table-bordered">
  <thead>
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>semana</th>
        <th>LE</th>
        <th>LS</th>
        <th>ME</th>
        <th>MS</th>
        <th>XE</th>
        <th>XS</th>
        <th>JE</th>
        <th>JS</th>
        <th>VE</th>
        <th>VS</th>
        <th>LC</th>
        <th>MC</th>
        <th>XC</th>
        <th>JC</th>
        <th>VC</th>
        <th>Fecha</th>
        <th>Comentario</th>
        <th>Controles</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($horarios as $horario)
    <tr>
    	<td>{{ $horario->id }}</td>
        <td>{{ $horario->name }}</td>
        <td>{{ $horario->semana }}</td>
        <td>{{ $horario->LE }}</td>
        <td>{{ $horario->LS }}</td>
        <td>{{ $horario->ME }}</td>
        <td>{{ $horario->MS }}</td>
        <td>{{ $horario->XE }}</td>
        <td>{{ $horario->XS }}</td>
        <td>{{ $horario->JE }}</td>
        <td>{{ $horario->JS }}</td>
        <td>{{ $horario->VE }}</td>
        <td>{{ $horario->VS }}</td>
        <td>{{ $horario->LC }}</td>
        <td>{{ $horario->MC }}</td>
        <td>{{ $horario->XC }}</td>
        <td>{{ $horario->JC }}</td>
        <td>{{ $horario->VC }}</td>
         <td>{{ $horario->created_at }}</td>    
        <td>{{ $horario->comentario }}</td>

        <td>
<div class='btn-group-vertical'>    
<a href="{{ route('horariosemanal.edit', $horario->id) }}" class="btn btn-xs btn-primary">Editar</a>
{!! Form::open(['route' => ['horariosemanal.destroy', $horario->id], 'method' => 'DELETE']) !!}
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
<script>
   window.onload = function() { 
        $('#tabla').DataTable({
            'language': {
            "url": "plugins/datatables/Spanish.json"
            },
            "responsive": true,
            "ordering":false,
            "columnDefs": [
                {
                    "targets": [3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18],
                    "searchable": false
                }
            ]
        });
    };
</script>

@endsection
