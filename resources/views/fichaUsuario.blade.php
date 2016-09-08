@extends('layouts.app')

@section('contentheader_title')
Escritorio de {{$usuario->name}}
@endsection

@section('main-content')
<div class="row">	

<div class="col-md-6">
  
<div class="box box-widget widget-user-2">
<div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img id="foto" class="img-circle" src="{{$usuario->avatar}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{$usuario->name}}</h3>
              <h5 class="widget-user-desc">Ficha personal</h5>
            </div>
             <div class="box-footer bg-yellow no-padding">
              <div class="col-sm-4 border-right">
              <div class="description-block">
              	<h5 class="description-header">Id:{{$usuario->id}}</h5>
              	</div>
              </div>
				<div class="col-sm-4 border-right">
				<div class="description-block">
				<h5 class="description-header">Cargo:{{$usuario->cargo}}</h5>
			</div>
				</div>
				<div class="col-sm-4">
				<div class="description-block">
@if ($usuario->activo==="activo")				
				<h5 class="description-header"><i class="fa fa-circle text-success"></i> activo</h5>
@else 
				<h5 class="description-header"><i class="fa fa-circle text-warning"></i> desactivado</h5>
@endif
				</div>
				</div>
			</div>
            <!-- /.box-header -->
            <!-- form start -->
<?php
if (isset($usuario->id)):
     $form_data = array('route' => array('listausuarios.update', $usuario->id), 'method' => 'PATCH');
     $action    = 'Editar';
else:
     $form_data = array('route' => 'listausuarios.store', 'method' => 'POST');
     $action    = 'Crear';    
endif;
?>



              <div class="box-body">

{!! Form::open($form_data, array('role' => 'form', 'class'=>'form-horizontal')) !!}
<div class="form-group">
			{!! Form::label('name', 'Nombre:', array('class'=>'col-sm-4 control-label') ) !!}
	<div class="col-sm-8">	
		{!! Form::text('name', $usuario->name, array('class'=>'form-control')) !!}
	</div>			

</div>
				

				<div class="form-group">
                  {!! Form::label('apellidos', 'Apellidos :', array('class'=>'col-sm-4 control-label') ) !!}
                  <div class="col-sm-8">
                 	{!! Form::text('apellidos', $usuario->apellidos, array('class'=>'form-control')) !!}
                  </div>
                </div>

                <div class="form-group">
{!! Form::label('email', 'Email :', array('class'=>'col-sm-4 control-label') ) !!}
                  <div class="col-sm-8">
                	{!! Form::text('email', $usuario->email, array('class'=>'form-control')) !!}
                  </div>
                </div>

				<div class="form-group">
{!! Form::label('phone', 'Teléfono :', array('class'=>'col-sm-4 control-label') ) !!}
                  <div class="col-sm-8">
           		{!! Form::text('phone', $usuario->phone, array('class'=>'form-control')) !!}
                  </div>
                </div>



<div class="row"> 
<div class="col-sm-12"> 
        <div class="form-group">
                  <label for="avatar" class="col-sm-4 control-label">Avatar: </label>

                  <div class="col-sm-6">
<?php  
$clase = ['class' => 'form-control'];
$contenidoSelect = array("/img/avatar5.png" => 'Selecciona una imagen', '/img/user1-128x128.jpg' => 'avatar 1' ,'/img/user2-160x160.jpg'=>'avatar 2','/img/user3-128x128.jpg'=>'avatar 3','/img/user4-128x128.jpg'=>'avatar 4','/img/user5-128x128.jpg'=>'avatar 5','/img/user6-128x128.jpg'=>'avatar 6','/img/user7-128x128.jpg'=>'avatar 7','/img/user8-128x128.jpg'=>'avatar 8');
?>                  
        {!! Form::select('avatar', $contenidoSelect,null,$clase + array('id' => 'avatar')) !!}
     
                  </div>
                  <div class="col-sm-2">
<img id="foto2" class="img-circle" src="/img/avatar5.png" width="50" height="50" alt="Imagen usuario">
            </div>
 
                </div>
</div>
</div>





                <div class="form-group">
{!! Form::label('password1', 'Contraseña:', array('class'=>'col-sm-4 control-label') ) !!}
                  <div class="col-sm-8">
{!! Form::text('password1', $usuario->contrasena, array('class'=>'form-control')) !!}
                  </div>
                </div>

                 <div class="form-group">
{!! Form::label('password2', 'Repite contraseña:', array('class'=>'col-sm-4 control-label') ) !!}
                  <div class="col-sm-8">
{!! Form::text('password2', $usuario->contrasena, array('class'=>'form-control')) !!}
                  </div>
                </div>
  				
  				<div class="form-group">
{!! Form::label('cochemarca', 'Marca del vehículo:', array('class'=>'col-sm-4 control-label') ) !!}
                  <div class="col-sm-8">
             		{!! Form::text('cochemarca', $usuario->cochemarca, array('class'=>'form-control')) !!}
                  </div>
                </div>

                <div class="form-group">
{!! Form::label('cochemodelo', 'Modelo del vehículo:', array('class'=>'col-sm-4 control-label') ) !!}
                  <div class="col-sm-8">
		{!! Form::text('cochemodelo', $usuario->cochemodelo, array('class'=>'form-control')) !!}
                  </div>
                </div>

            

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
        {!! Form::button($action. ' usuario', array('type' => 'submit', 'class' => 'btn btn-success pull-right')) !!}    

           
              </div>
              <!-- /.box-footer -->
{!! Form::close() !!}

          </div>
</div>


</div>
<script type="text/javascript">
window.onload = function() { 
	
$('#avatar').on('change', function() {
		var valor = $(this).val();
		$("#foto").attr("src",valor);
		$("#foto2").attr("src",valor);
});
}
</script>

@endsection