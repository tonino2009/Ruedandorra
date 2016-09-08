<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{Auth::user()->avatar}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
@if ( Auth::user()->activo==="activo")               
                <a href="#"><i class="fa fa-circle text-success"></i> activo</a>
@else 
                <a href="#"><i class="fa fa-circle text-red"></i> no activo</a>
@endif
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU DE USUARIO</li>
            <!-- Optionally, you can add icons to the links -->
<li><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
<li><a href="{{ url('listausuarios',Auth::user()->id) }}"><i class='fa fa-user'></i> <span>Modificar perfil</span></a></li>
<li><a href="{{ url('horarionormal' ,Auth::user()->id) }}"><i class='fa fa-calendar'></i> <span>Horario normal</span></a></li>
<li><a href="{{ url('horariosemanal',Auth::user()->id) }}"><i class='fa fa-car'></i> <span>Mi propuesta próxima semana</span></a></li>
<li><a href="{{ url('rueda') }}"><i class='fa fa-gears'></i> <span>Rueda</span>
@if (Auth::user()->activo==="noactivo")     
    <span class="pull-right badge bg-red">desactivado</span>
@endif
</a></li>
<li><a href="{{ url('tareas') }}"><i class='fa fa-tasks'></i> <span>Tareas</span></a></li>
@if (Auth::user()->cargo==="administrador") 
<li class="header">MENU DE ADMINISTRADOR</li>
<li><a href="{{ url('listausuarios') }}"><i class='fa fa-users'></i><span>Lista usuarios</span></a></li>
<li><a href="{{ url('horarionormal') }}"><i class='fa fa-calendar'></i><span>Horarios normales</span></a></li>
<li><a href="{{ url('horariosemanal') }}"><i class='fa fa-car'></i><span>Horarios próxima semana</span></a></li>
<li><a href="{{ url('tareas') }}"><i class='fa fa-tasks'></i> <span>Tareas</span></a></li>
<!--<li><a href="{{ url('encuestas') }}"><i class='fa fa-edit'></i><span>Encuestas</span></a></li>-->
<li><a href="{{ url('ruedator') }}"><i class='fa fa-arrows'></i><span>Ruedator</span></a></li>
@endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
