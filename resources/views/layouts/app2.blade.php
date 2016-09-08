<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show


<body>
<div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
   

        @include('layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
   



</div><!-- ./wrapper -->

@section('scripts')
    @include('layouts.partials.scripts')
@show

</body>
</html>
