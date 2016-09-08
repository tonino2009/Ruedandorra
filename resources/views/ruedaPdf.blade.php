<html>
<head>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }

    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background-color: #ddd;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>
<body>
  <header>
    <h1>Cabecera de mi documento</h1>
    <h2>DesarrolloWeb.com</h2>
  </header>
  <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
              Desarrolloweb.com
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>
  <div id="content">
    <p>
      Lorem ipsum dolor sit...
    </p><p>
    Vestibulum pharetra fermentum fringilla...
    </p>
    <p style="page-break-before: always;">
    Podemos romper la página en cualquier momento...</p>
    </p>var celdas = ['{!! $rueda->L1 !!}','{!! $rueda->L2 !!}','{!! $rueda->L3 !!}','{!! $rueda->L4 !!}','{!! $rueda->L5 !!}','{!! $rueda->L6 !!}','{!! $rueda->M1 !!}','{!! $rueda->M2 !!}','{!! $rueda->M3 !!}','{!! $rueda->M4 !!}','{!! $rueda->M5 !!}','{!! $rueda->M6 !!}','{!! $rueda->X1 !!}','{!! $rueda->X2 !!}','{!! $rueda->X3 !!}','{!! $rueda->X4 !!}','{!! $rueda->X5 !!}','{!! $rueda->X6 !!}','{!! $rueda->J1 !!}','{!! $rueda->J2 !!}','{!! $rueda->J3 !!}','{!! $rueda->J4 !!}','{!! $rueda->J5 !!}','{!! $rueda->J6 !!}','{!! $rueda->V1 !!}','{!! $rueda->V2 !!}','{!! $rueda->V3 !!}','{!! $rueda->V4 !!}','{!! $rueda->V5 !!}','{!! $rueda->V6 !!}'];
var ids = ["L1","L2","L3","L4","L5","L6","M1","M2","M3","M4","M5","M6","X1","X2","X3","X4","X5","X6","J1","J2","J3","J4","J5","J6","V1","V2","V3","V4","V5","V6"];
<p>
    Praesent pharetra enim sit amet...
    </p>
  </div>

<script type="text/javascript">
    window.onload = function() { 

@stack('scripts');  

    };
</script>




@push('scripts')


var celdas = ['{!! $rueda->L1 !!}','{!! $rueda->L2 !!}','{!! $rueda->L3 !!}','{!! $rueda->L4 !!}','{!! $rueda->L5 !!}','{!! $rueda->L6 !!}','{!! $rueda->M1 !!}','{!! $rueda->M2 !!}','{!! $rueda->M3 !!}','{!! $rueda->M4 !!}','{!! $rueda->M5 !!}','{!! $rueda->M6 !!}','{!! $rueda->X1 !!}','{!! $rueda->X2 !!}','{!! $rueda->X3 !!}','{!! $rueda->X4 !!}','{!! $rueda->X5 !!}','{!! $rueda->X6 !!}','{!! $rueda->J1 !!}','{!! $rueda->J2 !!}','{!! $rueda->J3 !!}','{!! $rueda->J4 !!}','{!! $rueda->J5 !!}','{!! $rueda->J6 !!}','{!! $rueda->V1 !!}','{!! $rueda->V2 !!}','{!! $rueda->V3 !!}','{!! $rueda->V4 !!}','{!! $rueda->V5 !!}','{!! $rueda->V6 !!}'];
var ids = ["L1","L2","L3","L4","L5","L6","M1","M2","M3","M4","M5","M6","X1","X2","X3","X4","X5","X6","J1","J2","J3","J4","J5","J6","V1","V2","V3","V4","V5","V6"];

$.each(celdas, function(index1,value){
var cadenaCompleta = value;
var elementos = cadenaCompleta.split('**');
    $.each(elementos, function(index2,value){
        if(value!=""){
            if(value.search('coche')!=-1){
                value = value.replace("coche", '<i class="fa fa-fw fa-automobile"></i>');
                $('ul#'+ids[index1]).append('<li class="btn btn-xs btn-block btn-warning bg-maroon">' + value + "</li>");
        }else{
            $('ul#'+ids[index1]).append('<li class="btn btn-xs btn-block btn-success">' + value + "</li>");
            };    
        };
    });
});

@endpush


</body>
</html>