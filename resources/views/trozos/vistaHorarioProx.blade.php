<div class="box box-solid box-success">
      <div class="box-header with-border">
    <h3 class="box-title">Mi propuesta próxima semana</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
     <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
  
      <div class="col-sm-12 col-xs-12">
          
        
<div class="row">
	<div class="col-sm-2 col-xs-2" id="PH0">H</div>
	<div class="col-sm-2 col-xs-2" id="PL0">L</div>
	<div class="col-sm-2 col-xs-2" id="PM0">M</div>
	<div class="col-sm-2 col-xs-2" id="PX0">X</div>
	<div class="col-sm-2 col-xs-2" id="PJ0">J</div>
	<div class="col-sm-2 col-xs-2" id="PV0">V</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="PH1">1</div>
	<div class="col-sm-2 col-xs-2" id="PL1">+</div>
	<div class="col-sm-2 col-xs-2" id="PM1">+</div>
	<div class="col-sm-2 col-xs-2" id="PX1">+</div>
	<div class="col-sm-2 col-xs-2" id="PJ1">+</div>
	<div class="col-sm-2 col-xs-2" id="PV1">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="PH2">2</div>
	<div class="col-sm-2 col-xs-2" id="PL2">+</div>
	<div class="col-sm-2 col-xs-2" id="PM2">+</div>
	<div class="col-sm-2 col-xs-2" id="PX2">+</div>
	<div class="col-sm-2 col-xs-2" id="PJ2">+</div>
	<div class="col-sm-2 col-xs-2" id="PV2">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="PH3">3</div>
	<div class="col-sm-2 col-xs-2" id="PL3">+</div>
	<div class="col-sm-2 col-xs-2" id="PM3">+</div>
	<div class="col-sm-2 col-xs-2" id="PX3">+</div>
	<div class="col-sm-2 col-xs-2" id="PJ3">+</div>
	<div class="col-sm-2 col-xs-2" id="PV3">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="PH4">4</div>
	<div class="col-sm-2 col-xs-2" id="PL4">+</div>
	<div class="col-sm-2 col-xs-2" id="PM4">+</div>
	<div class="col-sm-2 col-xs-2" id="PX4">+</div>
	<div class="col-sm-2 col-xs-2" id="PJ4">+</div>
	<div class="col-sm-2 col-xs-2" id="PV4">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="PH5">5</div>
	<div class="col-sm-2 col-xs-2" id="PL5">+</div>
	<div class="col-sm-2 col-xs-2" id="PM5">+</div>
	<div class="col-sm-2 col-xs-2" id="PX5">+</div>
	<div class="col-sm-2 col-xs-2" id="PJ5">+</div>
	<div class="col-sm-2 col-xs-2" id="PV5">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="PH6">6</div>
	<div class="col-sm-2 col-xs-2" id="PL6">+</div>
	<div class="col-sm-2 col-xs-2" id="PM6">+</div>
	<div class="col-sm-2 col-xs-2" id="PX6">+</div>
	<div class="col-sm-2 col-xs-2" id="PJ6">+</div>
	<div class="col-sm-2 col-xs-2" id="PV6">+</div>
</div>
<div class="row">
	<div class="col-sm-2 col-xs-2" id="PHC">C</div>
	<div class="col-sm-2 col-xs-2" id="PLC"></div>
	<div class="col-sm-2 col-xs-2" id="PMC"></div>
	<div class="col-sm-2 col-xs-2" id="PXC"></div>
	<div class="col-sm-2 col-xs-2" id="PJC"></div>
	<div class="col-sm-2 col-xs-2" id="PVC"></div>
</div>
    

  </div>  

</div><!-- /.box-body -->
</div><!-- /.box -->
@push('scripts')    

$("#PH0").addClass("bg-maroon color-palette");
$("#PL0").addClass("bg-maroon color-palette");
$("#PM0").addClass("bg-maroon color-palette");
$("#PX0").addClass("bg-maroon color-palette");
$("#PJ0").addClass("bg-maroon color-palette");
$("#PV0").addClass("bg-maroon color-palette");
$("#PH1").addClass("bg-maroon color-palette");
$("#PH2").addClass("bg-maroon color-palette");
$("#PH3").addClass("bg-maroon color-palette");
$("#PH4").addClass("bg-maroon color-palette");
$("#PH5").addClass("bg-maroon color-palette");
$("#PH6").addClass("bg-maroon color-palette");
$("#PHC").addClass("bg-maroon color-palette");


$("#PL{{ $horarioProx->LE }}").addClass("bg-green color-palette");
$("#PM{{ $horarioProx->ME }}").addClass("bg-green color-palette");
$("#PX{{ $horarioProx->XE }}").addClass("bg-green color-palette");
$("#PJ{{ $horarioProx->JE }}").addClass("bg-green color-palette");
$("#PV{{ $horarioProx->VE }}").addClass("bg-green color-palette");

$("#PL{{ $horarioProx->LS }}").addClass("bg-red color-palette");
$("#PM{{ $horarioProx->MS }}").addClass("bg-red color-palette");
$("#PX{{ $horarioProx->XS }}").addClass("bg-red color-palette");
$("#PJ{{ $horarioProx->JS }}").addClass("bg-red color-palette");
$("#PV{{ $horarioProx->VS }}").addClass("bg-red color-palette");
@if($horarioProx->LC)
$("#PLC").addClass("bg-orange color-palette");
$("#PLC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif
@if($horarioProx->MC)
$("#PMC").addClass("bg-orange color-palette");
$("#PMC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif
@if($horarioProx->XC)
$("#PXC").addClass("bg-orange color-palette");
$("#PXC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif
@if($horarioProx->JC)
$("#PJC").addClass("bg-orange color-palette");
$("#PJC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif
@if($horarioProx->VC)
$("#PVC").addClass("bg-orange color-palette");
$("#PVC").append('<i class="fa fa-fw fa-automobile"></i>');
@endif

@endpush  