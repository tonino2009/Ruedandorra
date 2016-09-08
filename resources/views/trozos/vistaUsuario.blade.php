<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-yellow">

        <h5 class="widget-user-desc">Id:{{ $usuario->id }}  ---  {{ $usuario->cargo }}</h5>
        <h3 class="widget-user-username">{{ $usuario->name }}</h3>
    </div>
    <div class="widget-user-image">
        <img alt="User Avatar" src="{{ $usuario->avatar }}" class="img-circle">
    </div>

    <div class="box-footer">
        <div class="row">
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">{{ $usuario->VT }}</h5>
                    <span class="description-text">Viajes totales</span>
                </div>
                <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">{{ $usuario->CT }}</h5>
                    <span class="description-text">Coches totales</span>
                </div>
                <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
                <div class="description-block">
                    <h5 class="description-header">{{ $usuario->ratio }}</h5>
                    <span class="description-text">Ratio</span>
                </div>
                <!-- /.description-block -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4 col-xs-4"><label class="text-yellow">Nombre :</label></div><div class="col-sm-8 col-xs-8">{{ $usuario->name }}</div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-4"><label class="text-yellow">Apellidos :</label></div><div class="col-sm-8 col-xs-8">{{ $usuario->apellidos }}</div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-4"><label class="text-yellow">Teléfono :</label></div><div class="col-sm-8 col-xs-8">{{ $usuario->phone }}</div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-4"><label class="text-yellow">Email :</label></div><div class="col-sm-8 col-xs-8">{{ $usuario->email }}</div>
        </div>        
        <div class="row">
            <div class="col-sm-4 col-xs-4"><label class="text-yellow">Marca vehículo :</label></div><div class="col-sm-8 col-xs-8">{{ $usuario->cochemarca }}</div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-4"><label class="text-yellow">Modelo del vehículo :</label></div><div class="col-sm-8 col-xs-8">{{ $usuario->cochemodelo }}</div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-4"><label class="text-yellow">Usuario desde :</label></div><div class="col-sm-8 col-xs-8">{{ $usuario->created_at }}</div>
        </div>
    </div>

</div>
<!-- /.widget-user -->
