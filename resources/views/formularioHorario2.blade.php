@extends('layouts.app')

@section('htmlheader_title')
	Horario Normal
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Formulario Horario de {{ Auth::user()->name }}</div>

					<div class="panel-body">
<!--
<table>
<tr>
        <td>{{ $horario->id }}</td>
        <td>{{ $horario->LE }}</td>
        <td>{{ $horario->LS }}</td>
        <td>{{ $horario->LC }}</td>
        <td>{{ $horario->ME }}</td>
        <td>{{ $horario->MS }}</td>
        <td>{{ $horario->MC }}</td>
        <td>{{ $horario->XE }}</td>
        <td>{{ $horario->XS }}</td>
        <td>{{ $horario->XC }}</td>
        <td>{{ $horario->JE }}</td>
        <td>{{ $horario->JS }}</td>
        <td>{{ $horario->JC }}</td>
        <td>{{ $horario->VE }}</td>
        <td>{{ $horario->VS }}</td>
        <td>{{ $horario->VC }}</td>
</tr>
</table>
-->
<table>
<tr>
<td>
<select id="LE" class="btn btn-success">
  <option value="no">no</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
</td><td>
<select id="ME" class="btn btn-success">
<option value="no">no</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
</td><td>
<select id="XE" class="btn btn-success">
<option value="no">no</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
</td><td>
<select id="JE" class="btn btn-success">
<option value="no">no</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
</td><td>
<select id="VE" class="btn btn-success">
<option value="no">no</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
</td>
</tr>
<tr>
<td class="btn-warning">L</td>
<td class="btn-warning">M</td>
<td class="btn-warning">X</td>
<td class="btn-warning">J</td>
<td class="btn-warning">V</td>
</tr>

<tr>
<td>
<select id="LS" class="btn btn-danger">
  <option value="no">no</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="6">7</option>
</select>
</td>
<td>
<select id="MS" class="btn btn-danger">
 <option value="no">no</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="6">7</option>
</select>
</td> 
<td>
<select id="XS" class="btn btn-danger">
 <option value="no">no</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="6">7</option>
</select>
</td>
<td>
<select id=JS class="btn btn-danger">
 <option value="no">no</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="6">7</option>
</select>
</td>
<td>
<select id="VS" class="btn btn-danger">
  <option value="no">no</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="6">7</option>
</select>
</td>
</tr>
<tr>
  <td>
<select id="LC" class="btn btn-info">
 <option value="0">no</option>
  <option value="1">si</option>
</select>
</td>
<td>
<select id="MC" class="btn btn-info">
 <option value="0">no</option>
  <option value="1">si</option>
</select>
</td>
<td>
<select id="XC" class="btn btn-info">
 <option value="0">no</option>
  <option value="1">si</option>
</select>
</td>
<td>
<select id="JC" class="btn btn-info">
  <option value="0">no</option>
  <option value="1">si</option>
</select>
</td>
<td>
<select id="VC" class="btn btn-info">
  <option value="0">no</option>
  <option value="1">si</option>
</select>
</td>
</tr>
</table>


					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
 