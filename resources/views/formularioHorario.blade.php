@extends('layouts.app')

@section('contentheader_title')
Formulario de modificación del horario de  {{ Auth::user()->name }}
@endsection

@section('main-content')
<div class="row">
<div class="col-md-6 col-xs-6">

				<div class="panel panel-success">
					<div class="panel-heading">Propuesta de horario de {{ $horario->name }}</div>

					<div class="panel-body">

<?php

$claseEntradas = ['class' => 'form-control'];
$contenidoSelectEntrada = array('0' => 'no', '1' => '1' ,'2'=>'2','3'=>'3','4'=>'4','5'=>'5');
$claseSalidas = ['class' => 'form-control'];
$contenidoSelectSalida = array('0' => 'no', '2' => '2' ,'3'=>'3','4'=>'4','5'=>'5','6'=>'6');
$claseCoches = ['class' => 'form-control'];
$contenidoSelectCoche = array('0' => 'no', '1' => 'si');
$semana = 6;


if (isset($horario->semana)):
    $form_data = array('route' => array('horariosemanal.update', $horario->id), 'method' => 'PATCH');
    $action    = 'Editar';
else: 
    $form_data = array('route' => 'horariosemanal.store', 'method' => 'POST');
    $action    = 'Crear';     
endif;
?>

{!! Form::open($form_data, array('role' => 'form')) !!}

@if($nuevo)
<div class="form-group">
{!! Form::label('id', 'Id: ') !!}
{!! Form::text('id', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('semana', 'Semana: ') !!}
{!! Form::text('semana', null,['class' => 'form-control']) !!}
</div>
@else
@if(isset($horario->semana))
{!! Form::hidden('id', $horario->id) !!}
{!! Form::hidden('semana', $horario->semana) !!}
@else
{!! Form::hidden('id', $usuario->id) !!}
{!! Form::hidden('semana', $semana) !!}
@endif
@endif
     

<table>
    <tr>
        <td></td>
            
<td class="btn-lg btn-warning text-center">L</td>
<td class="btn-lg btn-warning text-center">M</td>
<td class="btn-lg btn-warning text-center">X</td>
<td class="btn-lg btn-warning text-center">J</td>
<td class="btn-lg btn-warning text-center">V</td>
</tr>
<tr>
    <td><label class="control-label">ENTRADAS</label></td>
<td>
        {!! Form::select('LE', $contenidoSelectEntrada,'null',$claseEntradas + array('id' => 'LE')) !!}
</td><td>
        {!! Form::select('ME', $contenidoSelectEntrada,'null',$claseEntradas + array('id' => 'ME')) !!}
</td><td>
        {!! Form::select('XE', $contenidoSelectEntrada,'null',$claseEntradas + array('id' => 'XE')) !!}
</td><td>
        {!! Form::select('JE', $contenidoSelectEntrada,'null',$claseEntradas + array('id' => 'JE')) !!}
</td><td>
        {!! Form::select('VE', $contenidoSelectEntrada,'null',$claseEntradas + array('id' => 'VE')) !!}
</td>
</tr>



<tr>
    <td><label class="control-label">SALIDAS</label></td>
<td>
        {!! Form::select('LS', $contenidoSelectSalida,null,$claseSalidas + array('id' => 'LS')) !!}
</td><td>
        {!! Form::select('MS', $contenidoSelectSalida,null,$claseSalidas + array('id' => 'MS')) !!}
</td><td>
        {!! Form::select('XS', $contenidoSelectSalida,null,$claseSalidas + array('id' => 'XS')) !!}
</td><td>
        {!! Form::select('JS', $contenidoSelectSalida,null,$claseSalidas + array('id' => 'JS')) !!}
</td><td>
        {!! Form::select('VS', $contenidoSelectSalida,null,$claseSalidas + array('id' => 'VS')) !!}
</td>
</tr><tr>
    <td><label class="control-label">Coche disponible</label> </td>
<td>
        {!! Form::select('LC', $contenidoSelectCoche,null,$claseCoches + array('id' => 'LC')) !!}
</td><td>
        {!! Form::select('MC', $contenidoSelectCoche,null,$claseCoches + array('id' => 'MC')) !!}
</td><td>
        {!! Form::select('XC', $contenidoSelectCoche,null,$claseCoches + array('id' => 'XC')) !!}
</td><td>
        {!! Form::select('JC', $contenidoSelectCoche,null,$claseCoches + array('id' => 'JC')) !!}
</td><td>
        {!! Form::select('VC', $contenidoSelectCoche,null,$claseCoches + array('id' => 'VC')) !!}
</td>
</tr>
</table>

<div class="form-group">
            {!! Form::label('comentario', 'Comentario: ', ['class'=>'control-label']) !!}
            {!! Form::text('comentario', $horario->comentario,['class'=>'form-control']) !!}		
</div>        


                                        </div>
<div class="panel-footer">
    <div class="row">
<div class="col-md-6 col-xs-6">
{!! Form::button($action . ' horario', array('type' => 'submit', 'class' => 'btn btn-primary')) !!}   
{!! Form::close() !!}
</div>
    <div class="col-md-6 col-xs-6">
@if(isset($horario))
{!! Form::open(['route' => ['horariosemanal.destroy', Auth::user()->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Eliminar',['class' => 'btn  btn-danger'])!!}
{!! Form::close() !!}
@endif
</div>
</div>
 </div>
</div>

</div>
</div>


<script type="text/javascript">
// Con este script se cargan los datos en $horario en el formulario
@if(isset($horario))
window.onload = function() { 

$("#LE option[value={{ $horario->LE }}]").attr("selected",true);
$("#LS option[value={{ $horario->LS }}]").attr("selected",true);
$("#LC option[value={{ $horario->LC }}]").attr("selected",true);
$("#ME option[value={{ $horario->ME }}]").attr("selected",true);
$("#MS option[value={{ $horario->MS }}]").attr("selected",true);
$("#MC option[value={{ $horario->MC }}]").attr("selected",true);
$("#XE option[value={{ $horario->XE }}]").attr("selected",true);
$("#XS option[value={{ $horario->XS }}]").attr("selected",true);
$("#XC option[value={{ $horario->XC }}]").attr("selected",true);
$("#JE option[value={{ $horario->JE }}]").attr("selected",true);
$("#JS option[value={{ $horario->JS }}]").attr("selected",true);
$("#JC option[value={{ $horario->JC }}]").attr("selected",true);
$("#VE option[value={{ $horario->VE }}]").attr("selected",true);
$("#VS option[value={{ $horario->VS }}]").attr("selected",true);
$("#VC option[value={{ $horario->VC }}]").attr("selected",true);

}
@else 
@endif
</script>


@endsection
