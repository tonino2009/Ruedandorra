@extends('layouts.app')

@section('contentheader_title')
Ruedator
@endsection

@section('main-content')

@include ('trozos.alertas')
<div class="row">
    <div class="col-sm-9">
        <div class="box box-solid box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Horario próxima semana</h3>
                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">

                <div class="col-sm-12 col-xs-12">


                    <div class="row bg-green-gradient">
                        <div class="col-sm-1 col-xs-1 text-center">H</div>       
                        <div class="col-sm-2 col-xs-2 text-center">L</div>
                        <div class="col-sm-2 col-xs-2 text-center">M</div>
                        <div class="col-sm-2 col-xs-2 text-center">X</div>
                        <div class="col-sm-2 col-xs-2 text-center">J</div>
                        <div class="col-sm-2 col-xs-2 text-center">V</div>
                        <div class="col-sm-1 col-xs-1 text-center">H</div>
                    </div>
                    <div class="row">
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1" id="H1">1</div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="L1" class="well list-group ruedator lunes    "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="M1" class="well list-group ruedator martes   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="X1" class="well list-group ruedator miercoles"></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="J1" class="well list-group ruedator jueves   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="V1" class="well list-group ruedator viernes  "></ul></div>
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1" id="H1">1</div>
                    </div>
                    <div class="row">
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1" id="H1">2</div>    
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="L2" class="well list-group ruedator lunes    "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="M2" class="well list-group ruedator martes   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="X2" class="well list-group ruedator miercoles"></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="J2" class="well list-group ruedator jueves   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="V2" class="well list-group ruedator viernes  "></ul></div>
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1" id="H1">2</div>
                    </div>
                    <div class="row">
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1 text-center" id="H1">3</div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="L3" class="well list-group ruedator lunes    "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="M3" class="well list-group ruedator martes   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="X3" class="well list-group ruedator miercoles"></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="J3" class="well list-group ruedator jueves   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="V3" class="well list-group ruedator viernes  "></ul></div>
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1 text-center" id="H1">3</div>
                    </div>
                    <div class="row">
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1 text-center" id="H1">4</div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="L4" class="well list-group ruedator lunes    "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="M4" class="well list-group ruedator martes   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="X4" class="well list-group ruedator miercoles"></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="J4" class="well list-group ruedator jueves   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="V4" class="well list-group ruedator viernes  "></ul></div>
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1 text-center" id="H1">4</div>
                    </div>
                    <div class="row">
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1 text-center" id="H1">5</div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="L5" class="well list-group ruedator lunes    "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="M5" class="well list-group ruedator martes   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="X5" class="well list-group ruedator miercoles"></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="J5" class="well list-group ruedator jueves   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="V5" class="well list-group ruedator viernes  "></ul></div>
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1 text-center" id="H1">5</div>
                    </div>
                    <div class="row">
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1 text-center" id="H1">6</div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="L6" class="well list-group ruedator lunes    "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="M6" class="well list-group ruedator martes   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="X6" class="well list-group ruedator miercoles"></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="J6" class="well list-group ruedator jueves   "></ul></div>
                        <div class="ruedator col-sm-2 col-xs-2"><ul id="V6" class="well list-group ruedator viernes  "></ul></div>
                        <div class="well-lg bg-green-gradient col-sm-1 col-xs-1 text-center" id="H1">6</div>
                    </div>



                </div> 




            </div>
        </div>
    </div>



    <div class="col-sm-3">
        <div class="box box-solid box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Datos usuarios</h3>
                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">Nombre</div>
                        <div class="col-sm-2 col-xs-2">C</div>
                        <div class="col-sm-2 col-xs-2">CT</div>
                        <div class="col-sm-2 col-xs-2">VT</div>
                    </div>
                    @foreach($usuarios as $usuario)
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">{{$usuario->name}}</div>
                        <div class="col-sm-2 col-xs-2"><span id='{{$usuario->name}}'>0</span></div>
                        <div class="col-sm-2 col-xs-2">{{$usuario->CT}}</div>
                        <div class="col-sm-2 col-xs-2">{{$usuario->VT}}</div>
                    </div>

                    @endforeach          

                    <br>  

                    <ul class="list-group ruedator">
                        <li class="list-group-item list-group-item-success">comentarios</li>
                        @foreach($horarios as $horario)
                        @if($horario->comentario!=="")
                        <li class="list-group-item"><strong>{{$horario->name}}</strong><p>{{$horario->comentario}}</p></li>
                        @endif
                        @endforeach      
                    </ul>
                </div>    
            </div>
        </div>



        <div class="box box-solid box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Controles</h3>
                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
                <button id='cargarDatos' class="btn btn-block btn-info" >Cargar datos para enviar</button>


                {!! Form::open(array('route' => 'rueda.store', 'method' => 'POST'), array('role' => 'form')) !!}
                <div class="form-group">
                    {{ Form::label('semana','Semana:') }}
                    <br>
                    {{ Form::text('semana',null,['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('comentarios','Comentarios:') }}
                    <br>
                    {{ Form::text('comentarios',null,['class' => 'form-control']) }}
                </div>

                {{ Form::hidden('L1','L1') }}
                {{ Form::hidden('L2','L2') }}
                {{ Form::hidden('L3','L3') }}
                {{ Form::hidden('L4','L4') }}
                {{ Form::hidden('L5','L5') }}
                {{ Form::hidden('L6','L6') }}
                {{ Form::hidden('M1','M1') }}
                {{ Form::hidden('M2','M2') }}
                {{ Form::hidden('M3','M3') }}
                {{ Form::hidden('M4','M4') }}
                {{ Form::hidden('M5','M5') }}
                {{ Form::hidden('M6','M6') }}
                {{ Form::hidden('X1','X1') }}
                {{ Form::hidden('X2','X2') }}
                {{ Form::hidden('X3','X3') }}
                {{ Form::hidden('X4','X4') }}
                {{ Form::hidden('X5','X5') }}
                {{ Form::hidden('X6','X6') }}
                {{ Form::hidden('J1','J1') }}
                {{ Form::hidden('J2','J2') }}
                {{ Form::hidden('J3','J3') }}
                {{ Form::hidden('J4','J4') }}
                {{ Form::hidden('J5','J5') }}
                {{ Form::hidden('J6','J6') }}
                {{ Form::hidden('V1','V1') }}
                {{ Form::hidden('V2','V2') }}
                {{ Form::hidden('V3','V3') }}
                {{ Form::hidden('V4','V4') }}
                {{ Form::hidden('V5','V5') }}
                {{ Form::hidden('V6','V6') }}
                {{ Form::submit('Enviar',['class' => 'btn btn-block btn-primary disabled']) }}
                {{ Form::close() }}
            </div>         
        </div>         

    </div>

</div>


<script type="text/javascript">
    window.onload = function() {
    @foreach($horarios as $horario)
$("#L{{$horario->LE}}").append('<li name="L{{$horario->name}}" class="btn btn-xs btn-block btn-success">{{$horario->id}}-{{$horario->name}} E{{$horario->LE}} {!!($horario->LC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
$("#L{{$horario->LS}}").append('<li name="L{{$horario->name}}" class="btn btn-xs btn-block btn-warning">{{$horario->id}}-{{$horario->name}} S{{$horario->LS}} {!!($horario->LC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
$("#M{{$horario->ME}}").append('<li name="M{{$horario->name}}" class="btn btn-xs btn-block btn-success">{{$horario->id}}-{{$horario->name}} E{{$horario->ME}} {!!($horario->MC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
$("#M{{$horario->MS}}").append('<li name="M{{$horario->name}}" class="btn btn-xs btn-block btn-warning">{{$horario->id}}-{{$horario->name}} S{{$horario->MS}} {!!($horario->MC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
$("#X{{$horario->XE}}").append('<li name="X{{$horario->name}}" class="btn btn-xs btn-block btn-success">{{$horario->id}}-{{$horario->name}} E{{$horario->XE}} {!!($horario->XC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
$("#X{{$horario->XS}}").append('<li name="X{{$horario->name}}" class="btn btn-xs btn-block btn-warning">{{$horario->id}}-{{$horario->name}} S{{$horario->XS}} {!!($horario->XC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
$("#J{{$horario->JE}}").append('<li name="J{{$horario->name}}" class="btn btn-xs btn-block btn-success">{{$horario->id}}-{{$horario->name}} E{{$horario->JE}} {!!($horario->JC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
$("#J{{$horario->JS}}").append('<li name="J{{$horario->name}}" class="btn btn-xs btn-block btn-warning">{{$horario->id}}-{{$horario->name}} S{{$horario->JS}} {!!($horario->JC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
$("#V{{$horario->VE}}").append('<li name="V{{$horario->name}}" class="btn btn-xs btn-block btn-success">{{$horario->id}}-{{$horario->name}} E{{$horario->VE}} {!!($horario->VC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
$("#V{{$horario->VS}}").append('<li name="V{{$horario->name}}" class="btn btn-xs btn-block btn-warning">{{$horario->id}}-{{$horario->name}} S{{$horario->VS}} {!!($horario->VC) ? '<i class="fa fa-fw fa-automobile"></i>':'' !!}</li>');
            @endforeach

            $("#L1, #L2, #L3, #L4, #L5, #L6").sortable({
    connectWith: ".lunes"
    }).disableSelection();
    $("#M1, #M2, #M3, #M4, #M5, #M6").sortable({
    connectWith: ".martes"
    }).disableSelection();
    $("#X1, #X2, #X3, #X4, #X5, #X6").sortable({
    connectWith: ".miercoles"
    }).disableSelection();
    $("#J1, #J2, #J3, #J4, #J5, #J6").sortable({
    connectWith: ".jueves"
    }).disableSelection();
    $("#V1, #V2, #V3, #V4, #V5, #V6").sortable({
    connectWith: ".viernes"
    }).disableSelection();
    $("ul.ruedator li").on('click', function(){

    if ($(this).hasClass("bg-maroon")) {
    //      $(this).removeClass("bg-maroon");
    $('[name=' + $(this).attr("name") + ']').removeClass("bg-maroon");
    var cantidad = $('span#'+$(this).attr("name").slice(1)).text();
    cantidad --;
    $('span#' + $(this).attr("name").slice(1)).text(cantidad);
    }
    else{
    //    var celda= $(this).attr("name");
    //    $(this).addClass("bg-maroon"); 
    $('[name=' + $(this).attr("name") + ']').addClass("bg-maroon");
    var cantidad = $('span#'+$(this).attr("name").slice(1)).text();
    cantidad ++;
    $('span#' + $(this).attr("name").slice(1)).text(cantidad);
    }
    });
    $('#cargarDatos').on('click', function() {

    var casillas = ["L1", "L2", "L3", "L4", "L5", "L6", "M1", "M2", "M3", "M4", "M5", "M6", "X1", "X2", "X3", "X4", "X5", "X6", "J1", "J2", "J3", "J4", "J5", "J6", "V1", "V2", "V3", "V4", "V5", "V6"];
    $.each(casillas, function(index, value){

    celda = "";
    $("#" + value + ' li').each(function() {
    if ($(this).hasClass("bg-maroon")) {
    celda += $(this).text() + 'coche' + "**";
    } else{
    celda += $(this).text() + "**";
    }
    });
    $("input[name=" + value + "]").val(celda);
  });
    $("input[type='submit']").removeClass("disabled");
    });
    };
</script>



@endsection