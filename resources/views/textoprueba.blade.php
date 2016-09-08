@extends('layouts.app2')

@section('contentheader_title')

Rueda próxima semana

@endsection

@section('main-content')



<div class="row">


<div class="col-md-9">
@include('trozos.vistaRueda')

</div>
<div class="col-md-3">
@include('trozos.vistaHorarioProx')
</div>
    
      
    
</div>
<script type="text/javascript">

</script>


@endsection
