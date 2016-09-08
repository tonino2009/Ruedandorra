@extends('layouts.app')

@section('htmlheader_title')
	Datos Usuario
@endsection


@section('main-content')
	

    <div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Datos Usuario</div>

					       <div class="panel-body">



						<form class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-3">Email:</label>
        <div class="col-xs-9">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Password:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" value="{{ Auth::user()->password }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Confirmar Password:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" placeholder="Confirmar Password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Nombre" value="{{ Auth::user()->name }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellido:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Apellido" value="{{ Auth::user()->cargo }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" >Telefono:</label>
        <div class="col-xs-9">
            <input type="tel" class="form-control" placeholder="Telefono">
        </div>
    </div>
   
    <div class="form-group">
        <label class="control-label col-xs-3">Dirección:</label>
        <div class="col-xs-9">
            <textarea rows="3" class="form-control" placeholder="Dirección"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Usuario:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="genderRadios" value="conductor"> Conductor
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="genderRadios" value="peaton"> Peatón
            </label>
        </div>
    </div>
    
    <div class="form-group">
Datos del vehículo:
        <label class="control-label col-xs-2">Marca:</label>
        <div class="col-xs-3">
            <input type="text" class="form-control" id="inputMarca" placeholder="Marca del vehículo" value="{{ Auth::user()->marca }}">
        </div>
        <label class="control-label col-xs-2">Modelo:</label>
        <div class="col-xs-3">
            <input type="text" class="form-control" id="inputModelo" placeholder="Modelo del vehículo" value="{{ Auth::user()->modelo }}">
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="reset" class="btn btn-default" value="Limpiar">
        </div>
    </div>
</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
