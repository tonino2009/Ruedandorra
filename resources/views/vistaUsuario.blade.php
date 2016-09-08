@extends('layouts.app')
@section('main-content')

<div class="row">
<div class="col-md-6">  
<div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-user"></i>

              <h3 class="box-title">Datos del usuario</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Nombre :</dt><dd>A description list is perfect for defining terms.</dd>
                <dt>Apellidos :</dt><dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                <dt>Email :</dt><dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                <dt>Marca del vehículo :</dt><dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                  sit amet risus.
                </dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>

</div>
<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img alt="User Avatar" src="../dist/img/user1-128x128.jpg" class="img-circle">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>

</div>

@endsection