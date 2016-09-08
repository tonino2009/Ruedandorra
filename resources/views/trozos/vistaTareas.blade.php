<div class="box box-solid box-info">
      <div class="box-header with-border">
    <h3 class="box-title">Tareas pendientes</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
      <span class="label label-primary">{{ $cantidadTareas }} Tareas</span>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
      
<?php
foreach ($tasks as $task):
if ($task->user_id == $usuario->id):
if ($task->tipo == 'perfil'):
$color = 'alert alert-warning alert-dismissible';
elseif ($task->tipo == 'encuesta'):
$color = 'alert alert-danger alert-dismissible';
elseif ($task->tipo == 'propuesta'):
$color = 'alert alert-success alert-dismissible';
elseif ($task->tipo == 'rueda'):
$color = 'alert alert-info alert-dismissible';
else:
$color = 'alert alert-default alert-dismissible';
endif;
?>  
 <div class="{{$color}}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                 {{ $task->contenido }} 
    </div>       
<?php
endif;
endforeach;   
?>   
  </div><!-- /.box-body -->
</div><!-- /.box -->
    
   