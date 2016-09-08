@extends('layouts.app')

@section('main-content')

@include ('trozos.alertas')

@if(Auth::User()->cargo==="administrador")
<div class="container-fluid">
        <div class="col-md-12">
            <div class="box box-solid box-info">
                <div class="box-header with-border">
                    
                    <h3 class="box-title">Formulario para gestionar las tareas</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
      
      <!-- This will cause the box to be removed when clicked -->
<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
<!-- This will cause the box to collapse when clicked -->
<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
                    

                </div>

                <div class="box-body">

{!! Form::open(array('route' => 'tareas.store', 'method' => 'POST'), array('role' => 'form', 'class'=>'form')) !!}
<div class="row">
     <div class="col-md-4">
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:', array('class'=>'col-sm-4 control-label') ) !!}
    {!! Form::text('tipo', $tarea->tipo , array('class'=>'form-control')) !!}
</div>
     </div>
<div class="col-md-4">
<div class="form-group">
    {!! Form::label('estado', 'Estado:', array('class'=>'col-sm-4 control-label') ) !!}
    {!! Form::text('estado', $tarea->estado , array('class'=>'form-control')) !!}
</div>
</div>
<div class="col-md-4">
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:', array('class'=>'col-sm-4 control-label') ) !!}
    {!! Form::date('fecha', \Carbon\Carbon::now(), array('class'=>'form-control')) !!}
</div>
</div>
</div>
<div class="form-group">
    {!! Form::label('contenido', 'Contenido:', array('class'=>'col-sm-4 control-label') ) !!}
    {!! Form::text('contenido', $tarea->contenido , array('class'=>'form-control')) !!}
</div>
    
<div class="form-group">
    {!! Form::label('user_id', 'Destinatario:', array('class'=>'col-sm-4 control-label') ) !!}
    {!! Form::text('user_id', $tarea->user_id , array('class'=>'form-control')) !!}
</div>
				

            

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
        
                  
        {!! Form::button('Crear tarea', array('type' => 'submit', 'class' => 'btn btn-success pull-right')) !!}    

        
        {!! Form::close() !!}
           
              </div>
              <!-- /.box-footer -->
             
                </div>
            </div>
        </div>
@endif 


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
Lista de tareas
                </div>

                <div class="panel-body">
                     <table id="tabla2" class="table responsive table-striped table-bordered">
    <thead>
   <tr>
        <th>id</th>
        <th>Usuario</th>
        <th>Tipo</th>
        <th>Contenido</th>
        <th>Estado</th>
        <th>Fecha</th>
        <th>comandos</th>
</tr>
</thead>
    <tbody>
    @foreach ($tasks as $task)
    <tr>
        <td>{{ $task->id }}</td>
        <td>{{ $task->user_id }}</td>
        <td>{{ $task->tipo }}</td>
        <td>{{ $task->contenido }}</td>
        <td>{{ $task->estado }}</td>
        <td>{{ $task->fecha }}</td>
        <td>
        <div class="btn-group-vertical">
            
@if(Auth::User()->cargo==="administrador")            
          <a href="{{ route('tareas.edit', $task->id) }}" class="btn btn-xs btn-primary">Editar</a>
@endif          

{!! Form::open(['route' => ['tareas.destroy', $task->id], 'method' => 'DELETE']) !!}
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