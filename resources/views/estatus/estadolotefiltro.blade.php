@extends('layouts.app')

@section('content')
{{date_default_timezone_set('America/El_Salvador') }}

<script languague="javascript">
       

        function mostrando()
{
  var checkbox = document.getElementById('check2');
  if (checkbox.checked != true)
  {
    div = document.getElementById('flotante');
            div.style.display = 'none';
           

  }else{
    div = document.getElementById('flotante');
            div.style.display = '';
           
  }
}


function mostrando2()
{
  var checkbox = document.getElementById('check4');
  if (checkbox.checked != true)
  {
    div = document.getElementById('flotante2');
            div.style.display = 'none';
           

  }else{
    div = document.getElementById('flotante2');
            div.style.display = '';
           
  }
}
 
</script>

<style>
    @media print{
@page {
size: landscape;
}
} 
    /*
    .dropdown-menu-center {
  left: 2% !important;
  right: auto !important;
  text-align: center !important;
  transform: translate(-50%, 0) !important;
        margin-top: 25px;
}
*/
.opciones li {
    margin-right: 45px;
 display: block;
 transition-duration: 0.5s;
text-align: left;
 
}

.opciones li:hover {
  cursor: pointer;
  background:#b2b2b2;
}

.opciones ul li ul {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  transition: all 0.5s ease;
  margin-top: 1rem;
  left: 0;
  display: none;
  
}

.opciones ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
  
}
.opciones a:link, a:visited, a:active {
            text-decoration:none;
            color: black;
        }
.cambiar {
   
    float: left;
      
    }

.cambiar2 {
    float: right;
    margin-right: 20px;
  
}

.pagina1{
    margin-bottom: 30px;
    margin-top: -30px;
    
}
.pagina2{
    
    margin-bottom: -25px;
    padding-top: 10px;
    
}
.pagina3{
    margin-bottom: 0px;
    margin-top: 0px;
    
}
.dataTables_paginate a:hover {
    color: white !important;
    background:#0d6efd !important;
    
}
 
input[type="date"]::-webkit-calendar-picker-indicator {
        display: block;
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }

    input[type="date"]::before {
	color: #999999;
	content: attr(placeholder) !important;
}
input[type="date"] {
	color: #ffffff;
    
}
input[type="date"]:focus,
input[type="date"]:valid {
	color: #666666;
    
}
input[type="date"]:focus::before,
input[type="date"]:valid::before {
	content: "" !important;
}

.dt-buttons button {
    background: #0275d8;
    color: white;
    border-radius: 5px;
    font-size: 16px;
    float: right;
}
.imprimir{
    float: right;
    margin-top: -70px;
    margin-right: -200px;
}

.headt td {
  height: 15px !important;
  padding: 0px;
 font-size: 14px;
 background: #ffffff;
}
.modal-backdrop {
  z-index: 0;
}
</style>

<style>
    .modal-backdrop {
  z-index: 0;
}
</style>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>  
jQuery(document).ready(function($){
    $(document).ready(function() {
       $('.mi-selector1').select2({
        placeholder: "Repartidor"
       });

       $('.mi-selector2').select2({
        placeholder: "Estado"
       });
       
      //  $('#comer').on('select2:select', function (e) { 
            
        //    var data = e.params.data;
    //console.log(data.text);
    //document.getElementById('mostrar').value = data.text;
    //window.location = "https://appmeloexpress.com/factura/listadofiltro/" + data.text; 
    //window.location = "http://127.0.0.1:8000/factura/filtroemanual/" + data.text;
       // });

    });
   
   
});



</script>
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Melo Express</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card"> 
                        <div class="card-body">

                            <h3 class="text-center">Cambiar Estado en Lote</h3>
                        
            <div class="row py-2" style="background-color: white;" >   <!-- Inicia fila General -->
           

                <div class="col-12 ">   <!-- Inicia columna 8  -->
                
                <div class="row mt-1 border mr-1 ">   
                
                <div class="col-12 mt-4 mb-4"> <!-- div buscar -->
                <form action="/estado/lotefiltro/" method="get">
                    <table>
                        <tr>
                            <td>
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width:55px;"> <i class="far fa-calendar-alt"></i> </span>
                                </div>
                                <input type="date" id="fecha" name="fecha" class="form-control" placeholder="Fecha" value="" min="1997-01-01" max="2030-12-31">
                                <br>
                            </div>
                            </td>
                            <td>
                                 
    <div class="col-12 ">
        
        <div class="input-group">

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/25/null/external-delivery-man-logistics-delivery-kmg-design-detailed-outline-kmg-design-2.png"/></span>
          </div>
          <select id="repartidor" name="repartidor"  class="form-control mi-selector1" multiple="multiple">
            
            @foreach($repartidores as $repartidor)
            <option value="{{ $repartidor->nombre }}">{{ $repartidor->nombre }}</option>
            @endforeach
          </select>
           
        </div>
    </div>
                            </td>

                            <td>

                            <div class="col-12">
      
      <div class="input-group">

        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/deliver-food.png"/></span>
        </div>
        <select id="estado" name="estado" class="form-control mi-selector2" multiple="multiple">
          <option value="estado" >Estado del Envio</option>
          <option value="Creado" >Creado</option>
          <option value="En ruta">En ruta</option>
          <option value="Entregado">Entregado</option>
          <option value="Nr devuelto al comercio">Nr devuelto al comercio</option>
          <option value="Reprogramado">Reprogramado</option>
          <option value="Agencia San Salvador">Agencia San Salvador</option>
          <option value="Agencia San Miguel">Agencia San Miguel</option>
          <option value="Agencia Santa Ana">Agencia Santa Ana</option>
          <option value="No retirado">No retirado</option>
          <option value="No retirado agencia San Salvador">No retirado agencia San Salvador</option>
          <option value="No retirado agencia San Miguel">No retirado agencia San Miguel</option>
          <option value="No retirado agencia Santa Ana">No retirado agencia Santa Ana</option>
          <option value="No retirado Centro logístico">No retirado Centro logístico</option>
          <option value="Casillero San Salvador">Casillero San Salvador</option>
          <option value="Casillero San Miguel">Casillero San Miguel</option>
          <option value="Casillero Santa Ana">Casillero Santa Ana</option>
        </select>
         
      </div>
  </div>
                            </td>


                            <td>
                            <button type="submit" class="btn btn-primary " style="width:45px; height:40px; border-radius: 5px;" > <i class="fas fa-search"></i></button>      
        <a href="/estado/estadolote" class="btn btn-danger " style="width:45px; height:40px; border-radius: 5px;" > <i class="fas fa-times" style="color: #ffffff;"></i></a>
                            </td>
                        </tr>
                        </form>
                    </table>
               

                <form action="/estado/cestadolote" method="get">
<div class="col-12 table-responsive mt-4" > <!-- div tabla  -->
<table id="tvendedor" class="table table-striped " style="  ">
<thead style="background-color:#6777ef;"> 
    <tr >
    <th style="color: #fff;">*</th>
       
        <th style="color: #fff;">Comercio</th>
        <th style="color: #fff;">Destinatario</th>
        <th style="color: #fff;">Dirección</th>
        <th style="color: #fff;">Tipo</th>
        <th style="color: #fff;">Estado del envio</th>
        <th style="color: #fff;">Fecha de entrega</th>
        <th style="color: #fff;">Estado del pago</th>
        <th style="color: #fff;">Repartidor</th>
        <th style="color: #fff;">Precio del paquete</th>
        <th style="color: #fff;">Precio del envio</th>
        <th style="color: #fff;">Total</th>
        <th style="color: #fff;">Agencia</th>
        
    </tr>
</thead>
<tbody> 




@for($i=0;  $i< count($pedidos); $i++ )
<tr>
                    <td >
                    <div class="form-group form-check" style="width: 5px;">
                     <input type="checkbox" value="{{ $pedidos[$i]->id }}" class="form-check-input" id="check3" name="checked[]" >
                     
                    </div>
                    </td>
                    
                    <td>{{ $pedidos[$i]->vendedor }} </td>
                    <td>{{ $pedidos[$i]->destinatario }} </td>
                    <td>{{ $pedidos[$i]->direccion }} </td>
                    <td>{{ $pedidos[$i]->tipo }}</td>  
                    <td >{{ $pedidos[$i]->estado }}</td>
                    <td>{{  date('d/m/Y', strtotime($pedidos[$i]->fecha_entrega))}} </td>

                    @if($pedidos[$i]->pagado=='Pagado')
                    <td class="text-center"><h5><span class="badge badge-success ">{{ $pedidos[$i]->pagado }} </span></h5></td>
                    @else
                    <td class="text-center"><h5><span class="badge badge-danger ">{{ $pedidos[$i]->pagado }} </span></h5></td>
                    @endif
                    <td >{{ $pedidos[$i]->repartidor }}</td>  
                   
                    <td>{{ $pedidos[$i]->precio }}  </td>
                   
                    <td>{{ $pedidos[$i]->envio }} </td>
                    
                    <td>{{ $pedidos[$i]->total }} </td>
                    <td>{{ $pedidos[$i]->agencia }} </td>
                   
    

    






                    </tr>
                        @endfor



</tbody>

</table>
<tr>
        <td colspan="12" style="width:100%">
        <button type="button" class="btn btn-primary p-1 m-2" data-toggle="modal" data-target="#exampleModal5" style="float:right; ">
  Cambiar Estado en Lote
</button>
        </td>
    </tr>
</div><!-- termina div tabla  -->


                </div> <!-- Termina columna 12 -->
     
                </div>  <!-- Termina columna 8  -->
             
            </div> <!-- Termina fila General -->
                            
         
            
            
            <!-- Empieza Modal -->

            <!-- Modal -->
<!-- Modal estatus en lote-->

<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar Estado en Lote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <select id="estadom" name="estadom" class="form-control" tabindex="9" onChange="jsFunction()">
            <option value="Creado" onclick="jsFunction()">Creado</option>
            <option value="En ruta">En ruta</option>
            <option value="Entregado">Entregado</option>
            <option value="Nr devuelto al comercio">Nr devuelto al comercio</option>
            <option value="Reprogramado">Reprogramado</option>
            <option value="Agencia San Salvador">Agencia San Salvador</option>
            <option value="Agencia San Miguel">Agencia San Miguel</option>
            <option value="Agencia Santa Ana">Agencia Santa Ana</option>
            <option value="No retirado agencia San Salvador">No retirado agencia San Salvador</option>
            <option value="No retirado agencia San Miguel">No retirado agencia San Miguel</option>
            <option value="No retirado agencia Santa Ana">No retirado agencia Santa Ana</option>
            <option value="No retirado Centro logístico">No retirado Centro logístico</option>
            <option value="Casillero San Salvador">Casillero San Salvador</option>
            <option value="Casillero San Miguel">Casillero San Miguel</option>
            <option value="Casillero Santa Ana">Casillero Santa Ana</option>
            
          </select>

          <br>
        

 <label hidden for="" id="prueba" name="prueba"></label> 
 <input hidden type="text" id="proba" name="proba">

 <div class="col-12">
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="check2" name="check2" Onclick="javascript:mostrando();">
            <label class="form-check-label" for="check2">Asignar repartidor</label>
        </div>
</div>


<div class="col-6" id="flotante" style="display:none;">

    <div class="input-group ">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"> <i class="fas fa-truck"></i> </span>
        </div>

        <select id="repartidorm" name="repartidorm" class="form-control" tabindex="15">
            <option value="">-Sin asignar-</option>
            @foreach($repartidores as $repartidor)
            <option value="{{ $repartidor->nombre }}">{{ $repartidor->nombre }}</option>
            @endforeach
          </select>

    </div>

</div>







<div class="col-12">
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="check4" name="check4" Onclick="javascript:mostrando2();">
            <label class="form-check-label" for="check4">Caja o Estante</label>
        </div>
</div>


<div class="col-6" id="flotante2" style="display:none;">

    <div class="input-group ">
        <div class="input-group-prepend">
            
        </div>

        <input type="text" id="estante" name="estante">

    </div>

</div>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        
        </form>
      </div>
    </div>
  </div>
</div>

            <!-- Termina Modal -->






                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>




	
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />


<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>

<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" defer></script>

             
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" defer></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>


    
    <script>
         
        $(document).ready(function () {
    $('#tvendedor').DataTable(
        {
           
            language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },

        dom: '<"cambiar" f><"pagina2" p><"cambiar2"l>tri<"pagina1" p>',
        
        
       
       

        } 
    );
}); 
    </script>
@endsection
