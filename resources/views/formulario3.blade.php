@extends('layouts.app')
@section('contentheader_title')
Modificar perfil de 

@endsection

@section('main-content')

<div class="col-md-6">
  
<div class="box box-widget widget-user-2">
<div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img id="foto" class="img-circle" src="img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Nadia Carmichael</h3>
              <h5 class="widget-user-desc">Ficha personal</h5>
            </div>
             <div class="box-footer bg-yellow no-padding">
              <div class="col-sm-4 border-right">
              <div class="description-block">
              	<h5 class="description-header">Id:23</h5>
              	</div>
              </div>
				<div class="col-sm-4 border-right">
				<div class="description-block">
				<h5 class="description-header">Cargo:Usuario</h5>
			</div>
				</div>
				<div class="col-sm-4">
				<div class="description-block">
				<h5 class="description-header"><i class="fa fa-circle text-success"></i> Activo</h5>
				</div>
				</div>
			</div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

	

				<div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Nombre: </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="nombre">
                  </div>
                </div>

				<div class="form-group">
                  <label for="apellidos" class="col-sm-2 control-label">Apellidos: </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellidos" placeholder="apellidos">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>

				<div class="form-group">
                  <label for="phone" class="col-sm-2 control-label">Teléfono: </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" placeholder="Id">
                  </div>
                </div>

				<div class="form-group">
                  <label for="avatar" class="col-sm-2 control-label">Avatar: </label>

                  <div class="col-sm-6">

                    <select id="avatar" class="form-control">
                    	<option value="img/avatar5.png">Selecciona una imagen</option>
						  <option value="img/user1-128x128.jpg">avatar 1</option>
						  <option value="img/user2-160x160.jpg">avatar 2</option>
						  <option value="img/user3-128x128.jpg">avatar 3</option>
						  <option value="img/user4-128x128.jpg">avatar 4</option>
						  <option value="img/user5-128x128.jpg">avatar 5</option>
						  <option value="img/user6-128x128.jpg">avatar 6</option>
						  <option value="img/user7-128x128.jpg">avatar 7</option>
						  <option value="img/user8-128x128.jpg">avatar 8</option>
					</select>
                  </div>
 <div class="col-sm-4">
<img id="foto2" class="img-circle" src="img/avatar5.png" width="60" height="60" alt="User Avatar">
 </div>
                </div>


                <div class="form-group">
                  <label for="password1" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password1" placeholder="Password">
                  </div>
                </div>
  				
  				<div class="form-group">
                  <label for="cochemarca" class="col-sm-2 control-label">Marca del vehículo: </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="cochemarca" placeholder="Marca del vehículo">
                  </div>
                </div>

                <div class="form-group">
                  <label for="cochemodelo" class="col-sm-2 control-label">Modelo del vehículo: </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="cochemodelo" placeholder="Modelo del vehículo">
                  </div>
                </div>

               

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
        
                <button type="submit" class="btn btn-info pull-right">Acualizar perfil</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</div>

<script type="text/javascript">
window.onload = function() { 
	
$('#avatar').on('change', function() {
		var valor = $(this).val();
		$("#foto").attr("src",valor);
		$("#foto2").attr("src",valor);
});
}
</script>

		<!-- 	<div class="form-group">
                  <label for="id" class="col-sm-2 control-label">Id: </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" placeholder="Id">
                  </div>
                </div>

				<div class="form-group">
                  <label for="cargo" class="col-sm-2 control-label">Cargo: </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="cargo" placeholder="cargo">
                  </div>
                </div>
				<div class="form-group">
                  <label for="activo" class="col-sm-2 control-label">Activo: </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="activo" placeholder="activo">
                  </div>
                </div>


              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
				<div class="form-group">
				<label for="InputFile" class="col-sm-2 control-label">File input</label>
                  <div class="col-sm-10">
                    <input type="file" id="InputFile">
                  	<p class="help-block">Añadir archivo adjunto</p>
                  </div>
                </div>
 -->





@endsection