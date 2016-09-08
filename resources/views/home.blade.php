@extends('layouts.app')

@section('contentheader_title')
Escritorio de {{ Auth::user()->name }}
@endsection

@section('contentheader_description')
@endsection

@section('main-content')

<div class="row">

<div class="col-md-4">
@include('trozos.vistaUsuario')

  </div>
<div class="col-md-4">
@include('trozos.vistaHorarioNormal')
@include('trozos.vistaHorarioProx')
</div>
<div class="col-md-4">
@include('trozos.vistaTareas')
</div>
    
      
    
</div>
<script type="text/javascript">
    window.onload = function() { 

@stack('scripts');  

    };
</script>
@endsection



