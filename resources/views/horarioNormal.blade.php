@extends('layouts.app')

@section('htmlheader_title')
	Horario Normal
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Horario Normal de permanencia en el centro</div>

					<div class="panel-body">
<!--
<input id="ex13" type="text" data-slider-ticks="[0, 100, 200, 300, 400]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["$0", "$100", "$200", "$300", "$400"]'/>
             
<hr>

<input id="lunes" type="text"/>
<input id="martes" type="text"/>
<input id="miercoles" type="text"/>
<input id="jueves" type="text"/>
<input id="viernes" type="text"/>


 <div class="btn-toolbar" role="toolbar">

<span id="lunes-entrada" class="hidden"></span>
<span id="lunes-salida" class="hidden"></span>



      <div class="bfh-slider" data-name="slider1" min="1" max="7">
</div>
 -->
<hr>
<table>
<tr>
<td>
<select id="LE" class="btn btn-success">
<option>no</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</td><td>
<select id="ME" class="btn btn-success">
<option>no</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</td><td>
<select id="XE" class="btn btn-success">
<option>no</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</td><td>
<select id="JE" class="btn btn-success">
<option>no</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</td><td>
<select id="VE" class="btn btn-success">
<option>no</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
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
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td>2</td>
<td>2</td>
<td>2</td>
<td>2</td>
<td>2</td>
</tr>
<tr>
<td>3</td>
<td>3</td>
<td>3</td>
<td>3</td>
<td>3</td>
</tr>
<tr>
<td>4</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>4</td>
</tr>
<tr>
<td>5</td>
<td>5</td>
<td>5</td>
<td>5</td>
<td>5</td>
</tr>
<tr>
<td>6</td>
<td>6</td>
<td>6</td>
<td>6</td>
<td>6</td>
</tr>
<tr>
<td>7</td>
<td>7</td>
<td>7</td>
<td>7</td>
<td>7</td>
</tr>
<tr>
<td>
<select class="btn btn-danger">
  <option>no</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
</select>
</td>
<td>
<select class="btn btn-danger">
 <option>no</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
</select>
</td> 
<td>
<select class="btn btn-danger">
 <option>no</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
</select>
</td>
<td>
<select class="btn btn-danger">
  <option>no</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
</select>
</td>
<td>
<select class="btn btn-danger">
  <option>no</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>

</select>
</td>
</tr>
</table>




<!--

  <div class="btn-group-vertical">
    <button type="button" class="btn btn-warning">L</button>
    <button type="button" class="btn btn-default">1</button>
    <button type="button" class="btn btn-default">2</button>
    <button type="button" class="btn btn-default">3</button>
    <button type="button" class="btn btn-default">4</button>
    <button type="button" class="btn btn-default">5</button>
    <button type="button" class="btn btn-default">6</button>
  </div>
 
  <div class="btn-group-vertical">
    <button type="button" class="btn btn-warning">M</button>
    <button type="button" class="btn btn-default">1</button>
    <button type="button" class="btn btn-default">2</button>
    <button type="button" class="btn btn-default">3</button>
    <button type="button" class="btn btn-default">4</button>
    <button type="button" class="btn btn-default">5</button>
    <button type="button" class="btn btn-default">6</button>
  </div>
  <div class="btn-group-vertical">
    <button type="button" class="btn btn-warning">X</button>
    <button type="button" class="btn btn-default">1</button>
    <button type="button" class="btn btn-default">2</button>
    <button type="button" class="btn btn-default">3</button>
    <button type="button" class="btn btn-default">4</button>
    <button type="button" class="btn btn-default">5</button>
    <button type="button" class="btn btn-default">6</button>
  </div>
  <div class="btn-group-vertical">
    <button type="button" class="btn btn-warning">J</button>
    <button type="button" class="btn btn-default">1</button>
    <button type="button" class="btn btn-default">2</button>
    <button type="button" class="btn btn-default">3</button>
    <button type="button" class="btn btn-default">4</button>
    <button type="button" class="btn btn-default">5</button>
    <button type="button" class="btn btn-default">6</button>
  </div>
  <div class="btn-group-vertical">
    <button type="button" class="btn btn-warning">V</button>
    <button type="button" class="btn btn-default">1</button>
    <button type="button" class="btn btn-default">2</button>
    <button type="button" class="btn btn-default">3</button>
    <button type="button" class="btn btn-default">4</button>
    <button type="button" class="btn btn-default">5</button>
    <button type="button" class="btn btn-default">6</button>
  </div>
  -->
<!-- </div> -->



					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
