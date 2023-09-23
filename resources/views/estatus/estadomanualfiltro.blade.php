@extends('layouts.app')

@section('content')
{{date_default_timezone_set('America/El_Salvador') }}


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
                <div class="col-lg-12">
                    <div class="card"> 
                        <div class="card-body">

                            <h3 class="text-center">Cambiar Estado Manual</h3>
                        
            <div class="row  py-2" style="background-color: white;" >   <!-- Inicia fila General -->
           

                <div class="col-12 ">   <!-- Inicia columna 8  -->
                
                <div class="row mt-1 border mr-1 ">   
                
                <div class="col-sm-8 mt-4 mb-4"> <!-- div buscar -->
                <form action="/estado/manualfiltro/" method="get">
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
                                 
    <div class="col-sm-12 ">
        
        <div class="input-group">

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/25/null/external-delivery-man-logistics-delivery-kmg-design-detailed-outline-kmg-design-2.png"/></span>
          </div>
          <select id="repartidor" name="repartidor[]"  class="form-control mi-selector1" multiple="multiple">
            
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
        <select id="estado" name="estado[]" class="form-control mi-selector2" multiple="multiple">
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
        <a href="/estado/estadomanual" class="btn btn-danger " style="width:45px; height:40px; border-radius: 5px;" > <i class="fas fa-times" style="color: #ffffff;"></i></a>
                            </td>
                        </tr>
                        </form>
                    </table>
                </div> <!-- Termina div buscar  -->


<div class="col-4 mt-4">  <!-- div filtrros  -->
<a href="/facturas" class="btn btn-danger" style="float:right;">Cerrar</a>

<span style="font-size:18px; color: red;">  &nbsp; </span>

                </div> <!-- Termina div filtros  -->

<div class="col-12 table-responsive " > <!-- div tabla  -->
<table id="tvendedor" class="table table-striped " style="  ">
<thead style="background-color:#6777ef;"> 
    <tr >
       
        <th style="color: #fff;">Comercio</th>
        <th style="color: #fff;">Destinatario</th>
        <th style="color: #fff;">Dirección</th>
        <th style="color: #fff;">Tipo</th>
        <th style="color: #fff;">Estado del envio</th>
        <th style="color: #fff;">Fecha de entrega</th>
        <th style="color: #fff;">Estado del pago</th>
        <th style="color: #fff;">Precio del paquete</th>
        <th style="color: #fff;">Precio del envio</th>
        <th style="color: #fff;">Total</th>
        <th style="color: #fff;">Agencia</th>
        <th style="color: #fff;">Opciones</th>
    </tr>
</thead>
<tbody> 




@for($i=0;  $i< count($pedidos); $i++ )
<tr>
                    
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

                   
                    <td>{{ $pedidos[$i]->precio }}  </td>
                   
                    <td>{{ $pedidos[$i]->envio }} </td>
                    
                    <td>{{ $pedidos[$i]->total }} </td>
                    <td>{{ $pedidos[$i]->agencia }} </td>
                   
   

    


                    <td class="opciones text-center" style="">

  

<button type="button" class="edit btn btn-warning" data-toggle="modal" value="{{ $pedidos[$i]->detallep }}" data-target="#exampleMo" >Cambiar</button>
  <!--
 
    <a href="" class="dropdown-toggle" data-toggle="dropdown">

    <i class="fas fa-list"></i></a>
    <ul class="dropdown-menu" style="background-color: #ffffff;"> 
    @can('editar-rol')
     <div class="botones"> 

    <li class="botones">
    &nbsp;
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/pedido/editando/{{ $pedidos[$i]->id }}" >Editar</a></li> 
    </div>  
    @endcan
	<li class="botones">
   
    &nbsp;
    <i class="fas fa-eye"></i>
    &nbsp;&nbsp;
    <button type="button" class="edit" data-toggle="modal" value="{{ $pedidos[$i]->id }}" data-target="#exampleModal2" style="background: none; border: 0;">Ver</button>

</li>
@can('crear-rol')
<li class="botones">
    <form action="{{ route ('pedidos.destroy', $pedidos[$i]->id)}}" method="POST">
        @csrf
        @method('DELETE')
        &nbsp;
        <i class="fas fa-trash-alt"></i> 
        &nbsp;&nbsp;
        <button style="background: none; border: 0;">Eliminar</button>
        </form>
        </li>
        @endcan
    </ul>
-->

    </td>




                    </tr>
                        @endfor



</tbody>

</table>

</div><!-- termina div tabla  -->


                </div> <!-- Termina columna 12 -->
     
                </div>  <!-- Termina columna 8  -->
             
            </div> <!-- Termina fila General -->
                            
         
            
            
            <!-- Empieza Modal -->

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pagar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <div class="col-12 border px-0 mt-1">  <!-- Inicia columna 4  -->
      <div class="col-12 text-center pt-2 mb-3" style="background-color:#e85f24; color:white; height:75px;">  <!-- Inicia columna total  -->
<H1>Total $ <label for="" id="preci">0</label></H1>

</div> <!-- Termina columna total  -->
<div class="col-12">  <!-- Inicia cajero, pagos etc. -->

Cajero
<input type="text" class="form-control" name="cajero" id="cajero" value="" readonly>
<br>
<div class="row pt-2">
    
<div class="col-6">Medio de pago
    <select name="medio" id="medio" class="form-control">
        <option value="Efectivo">Efectivo</option>
        <option value="Deposito">Deposito</option>
        <option value="Tigo Money">Tigo Money</option>
        <option value="Chivo">Chivo</option>
    </select>

</div>
<div class="col-6">
    

Fecha de pago

<div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
</div>

<input type="text" class="form-control" name="fpago" id="fpago" value="{{ date('d/m/Y') }}" aria-label="Username" aria-describedby="basic-addon1" readonly>

</div>





</div>
</div>



<br>

<div class="row pt-2">
    
<div class="col-6">Tipo de comprobante
    <select name="medio" id="medio" class="form-control">
        <option value="Efectivo">Ticket</option>
        <option value="Deposito">Factura</option>
        <option value="Tigo Money">Crédito Fiscal</option>
        <option value="Tigo Money">PDF</option>
        
    </select>

</div>
<div class="col-6">
    

No. de comprobante

<div class="input-group ">
<div class="input-group-prepend">

</div>

<input type="text" class="form-control" name="fpago" id="fpago" aria-label="Username" aria-describedby="basic-addon1" >

</div>





</div>
</div>
<br>

<div class="col-12">
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="check1">
<label class="form-check-label" for="check1">IVA</label>
</div>
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="check2" Onclick="javascript:mostrando();">
<label class="form-check-label" for="check2">Hacer descuento</label>
</div>

</div>







<div class="col-6" id="flotante" style="display:none;">

<div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="far fa-money-bill-alt"></i> </span>
</div>

<input type="text" class="form-control" name="fpago" id="fpago"  aria-label="Username" aria-describedby="basic-addon1">

</div>






</div>
</div>

<br>
<div class="col-12" id="flotante2" style="display:none;">
Nota de descuento
<input type="text" class="form-control" name="fpago" id="fpago"  aria-label="Username" aria-describedby="basic-addon1">
</div>









<br>
<div class="col-12 mb-3">
<button type="button" class="btn btn-lg btn-warning btn-block">PAGAR</button>
</div>

</div> <!-- Termina cajero, pagos etc.  -->
</div> <!-- Termina columna 4  -->



      </div>
      <div class="modal-footer " style="background-color:white;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
