<div class="box box-solid box-warning">
      <div class="box-header with-border">
    <h3 class="box-title">Horario normal</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
     <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
  
      <div class="col-sm-12 col-xs-12">
          
        
<div class="row">
	<div class="col-sm-2 col-xs-2" id="H0">H</div>
	<div class="col-sm-2 col-xs-2" id="L0">L</div>
	<div class="col-sm-2 col-xs-2" id="M0">M</div>
	<div class="col-sm-2 col-xs-2" id="X0">X</div>
	<div class="col-sm-2 col-xs-2" id="J0">J</div>
	<div class="col-sm-2 col-xs-2" id="V0">V</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="H1">1</div>
	<div class="col-sm-2 col-xs-2" id="L1">+</div>
	<div class="col-sm-2 col-xs-2" id="M1">+</div>
	<div class="col-sm-2 col-xs-2" id="X1">+</div>
	<div class="col-sm-2 col-xs-2" id="J1">+</div>
	<div class="col-sm-2 col-xs-2" id="V1">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="H2">2</div>
	<div class="col-sm-2 col-xs-2" id="L2">+</div>
	<div class="col-sm-2 col-xs-2" id="M2">+</div>
	<div class="col-sm-2 col-xs-2" id="X2">+</div>
	<div class="col-sm-2 col-xs-2" id="J2">+</div>
	<div class="col-sm-2 col-xs-2" id="V2">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="H3">3</div>
	<div class="col-sm-2 col-xs-2" id="L3">+</div>
	<div class="col-sm-2 col-xs-2" id="M3">+</div>
	<div class="col-sm-2 col-xs-2" id="X3">+</div>
	<div class="col-sm-2 col-xs-2" id="J3">+</div>
	<div class="col-sm-2 col-xs-2" id="V3">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="H4">4</div>
	<div class="col-sm-2 col-xs-2" id="L4">+</div>
	<div class="col-sm-2 col-xs-2" id="M4">+</div>
	<div class="col-sm-2 col-xs-2" id="X4">+</div>
	<div class="col-sm-2 col-xs-2" id="J4">+</div>
	<div class="col-sm-2 col-xs-2" id="V4">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="H5">5</div>
	<div class="col-sm-2 col-xs-2" id="L5">+</div>
	<div class="col-sm-2 col-xs-2" id="M5">+</div>
	<div class="col-sm-2 col-xs-2" id="X5">+</div>
	<div class="col-sm-2 col-xs-2" id="J5">+</div>
	<div class="col-sm-2 col-xs-2" id="V5">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="H6">6</div>
	<div class="col-sm-2 col-xs-2" id="L6">+</div>
	<div class="col-sm-2 col-xs-2" id="M6">+</div>
	<div class="col-sm-2 col-xs-2" id="X6">+</div>
	<div class="col-sm-2 col-xs-2" id="J6">+</div>
	<div class="col-sm-2 col-xs-2" id="V6">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="HC">C</div>
	<div class="col-sm-2 col-xs-2" id="LC"></div>
	<div class="col-sm-2 col-xs-2" id="MC"></div>
	<div class="col-sm-2 col-xs-2" id="XC"></div>
	<div class="col-sm-2 col-xs-2" id="JC"></div>
	<div class="col-sm-2 col-xs-2" id="VC"></div>
</div>
    

  </div>  

</div><!-- /.box-body -->
</div><!-- /.box -->
    


@push('scripts')
 
$("#H0").addClass("bg-maroon color-palette");
$("#L0").addClass("bg-maroon color-palette");
$("#M0").addClass("bg-maroon color-palette");
$("#X0").addClass("bg-maroon color-palette");
$("#J0").addClass("bg-maroon color-palette");
$("#V0").addClass("bg-maroon color-palette");
$("#H1").addClass("bg-maroon color-palette");
$("#H2").addClass("bg-maroon color-palette");
$("#H3").addClass("bg-maroon color-palette");
$("#H4").addClass("bg-maroon color-palette");
$("#H5").addClass("bg-maroon color-palette");
$("#H6").addClass("bg-maroon color-palette");
$("#HC").addClass("bg-maroon color-palette");

$("#L{{ $horarioNormal->LE }}").addClass("bg-green color-palette");
$("#M{{ $horarioNormal->ME }}").addClass("bg-green color-palette");
$("#X{{ $horarioNormal->XE }}").addClass("bg-green color-palette");
$("#J{{ $horarioNormal->JE }}").addClass("bg-green color-palette");
$("#V{{ $horarioNormal->VE }}").addClass("bg-green color-palette");

$("#L{{ $horarioNormal->LS }}").addClass("bg-red color-palette");
$("#M{{ $horarioNormal->MS }}").addClass("bg-red color-palette");
$("#X{{ $horarioNormal->XS }}").addClass("bg-red color-palette");
$("#J{{ $horarioNormal->JS }}").addClass("bg-red color-palette");
$("#V{{ $horarioNormal->VS }}").addClass("bg-red color-palette");
@if($horarioNormal->LC)
$("#LC").addClass("bg-orange color-palette");
$("#LC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif
@if($horarioNormal->MC)
$("#MC").addClass("bg-orange color-palette");
$("#MC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif
@if($horarioNormal->XC)
$("#XC").addClass("bg-orange color-palette");
$("#XC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif
@if($horarioNormal->JC)
$("#JC").addClass("bg-orange color-palette");
$("#JC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif
@if($horarioNormal->VC)
$("#VC").addClass("bg-orange color-palette");
$("#VC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif
   
@endpush