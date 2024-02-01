
@extends('layouts.app')

@section('content')


<script>
        function doSearch()

{

    const tableReg = document.getElementById('tpedido');

    const searchText = document.getElementById('searchTerm').value.toLowerCase();

    let total = 0;



    // Recorremos todas las filas con contenido de la tabla

    for (let i = 1; i < tableReg.rows.length; i++) {

        // Si el td tiene la clase "noSearch" no se busca en su cntenido

        if (tableReg.rows[i].classList.contains("noSearch")) {

            continue;

        }



        let found = false;

        const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

        // Recorremos todas las celdas

        for (let j = 0; j < cellsOfRow.length && !found; j++) {

            const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

            // Buscamos el texto en el contenido de la celda

            if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

                found = true;

                total++;

            }

        }

        if (found) {

            tableReg.rows[i].style.display = '';

        } else {

           

            tableReg.rows[i].style.display = 'none';

        }

    }



    // mostramos las coincidencias

    const lastTR=tableReg.rows[tableReg.rows.length-1];

    const td=lastTR.querySelector("td");

    lastTR.classList.remove("hide", "red");

    if (searchText == "") {

        lastTR.classList.add("hide");

    } else if (total) {

        td.innerHTML="";

    } else {

        lastTR.classList.add("red");

        td.innerHTML="";

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

.grande{
    margin-top: 50px;
}
.grande:hover{
    width: 700px;
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

@media only screen and (max-width: 500px) {
    .cambiar2 {
        display: none;
       
        
    }
}
.pagina1{
    margin-bottom: 30px;
    margin-top: -30px;
    
}

@media only screen and (max-width: 500px) {
    .pagina1 {
        margin-top: 20px;
       
        
    }
}
.pagina2{
    
    margin-bottom: -25px;
    padding-top: 10px;
    
}

@media only screen and (max-width: 500px) {
    .pagina2 {
        
        margin: 20px;
        
    }
}
.pagina3{
    margin-bottom: 0px;
    margin-top: 0px;
    
}
@media only screen and (max-width: 500px) {
    .pagina4 {
        display: none;
       
        
    }
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



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>  






jQuery(document).ready(function($){
    $(document).ready(function() {
        $('.mi-selector').select2();
       
        $('#comer').on('select2:select', function (e) { 
            
            var data = e.params.data;
    //console.log(data.text);
    //document.getElementById('mostrar').value = data.text;
    //window.location = "https://appmeloexpress.com/pedido/indexdigitadofiltro/" + data.text; 
    window.location = "http://209.145.56.57/pedido/indexdigitadofiltro/" + data.text;
    //window.location = "http://127.0.0.1:8000/pedido/indexdigitadofiltro/" + data.text;
        });

    });
   
   
});

function actualizar(opcion){
    var data = opcion.value;

    window.location = "http://209.145.56.57/pedido/indexdigitadofiltro/" + opcion.value; 

//window.location = "http://127.0.0.1:8000/pedido/indexdigitadofiltro/" + opcion.value;

        
    }

</script>



   
            
    <div class="col-12 pt-0">  
    <div class="row ">   
                
                <!-- div buscar -->
<!-- Termina div buscar  -->


<div class="col-6">  <!-- div filtrros  -->


<span style="font-size:18px; color: red;"> {{ $nota }} &nbsp; </span>

                </div> <!-- Termina div filtros  -->
 
    <div class="col-12">
 
        
    <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Inicio</a></li>
            <li class="breadcrumb-item">Lista de ordenes</li>
            
          </ol>
        </nav>

        <div class="row g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Reporte de Ordenes</h2>
            </div>
          </div> 
        


       
         

            <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link" href="{{url('digitadocomerestado',['comercio' => $comercio, 'estado' => 'Entregado'])}}"><span>Entregados</span><span class="text-700 fw-semi-bold">( {{ $entrega }})</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('digitadocomerestado',['comercio' => $comercio, 'estado' => 'Creado'])}}"><span>Creado</span><span class="text-700 fw-semi-bold">( {{ $creado }})</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('digitadocomerestado',['comercio' => $comercio, 'estado' => 'En ruta'])}}"><span>En ruta</span><span class="text-700 fw-semi-bold">( {{ $ruta }})</span></a></li>

            
            <li class="nav-item"><a class="nav-link" href="{{url('digitadocomerestado',['comercio' => $comercio, 'estado' => 'No retirado'])}}"><span>No Retirados </span><span class="text-700 fw-semi-bold">({{ $noentrega }})</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('digitadocomerestado',['comercio' => $comercio, 'estado' => 'Reprogramado'])}}"><span>Reprogramados </span><span class="text-700 fw-semi-bold">({{ $reprogra }})</span></a></li>
           
          </ul>

          <div class="row">

          <div class="col-3 mt-2">
            <div class="search-box">
                   
                      <input id="searchTerm" class="form-control search-input search" type="search" placeholder="Buscar ordenes" onkeyup="doSearch()" >
                      <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path></svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->

                    
                  </div>

         </div>


                  <div class="col-6 mt-2">   
                  

        
</div> 




</div>






<br>



<div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">

<div class="table-responsive scrollbar">
<table id="tpedido" class="table fs--1 mb-0 border-top border-200">
<thead style="">
<th class="white-space-nowrap fs--1 align-middle ps-0" style="width:26px;">
                        <div class="form-check mb-0 fs-0">
                          <input class="form-check-input" id="checkbox-bulk-order-select" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;order-table-body&quot;}">
                        </div>
                      </th>
        <th style="">ID</th>
        
        <th style="">COMERCIO</th>
        <th style="">CLIENTE</th>
    
        <th style="">TIPO DE ORDEN</th>
        <th style="">TOTAL</th>
        <th style="">ENVIO</th>
        <th style="">PRECIO</th>
        <th style="">ESTADO DE LA ORDEN</th>
        <th style="">ESTADO DEL PAGO</th>
        <th style="">FECHA DE ENTREGA</th>
        
        
        
    
        
    </tr>
</thead>
<tbody class="list">

    @for ($i=0; $i< count($pedidos); $i++)
    <tr class="position-static">
    <td class="fs--1 align-middle px-0 py-3">
                        <div class="form-check mb-0 fs-0">
                          <input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2453,&quot;total&quot;:87,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/32.webp&quot;,&quot;name&quot;:&quot;Carry Anna&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Complete&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Cancelled&quot;,&quot;type&quot;:&quot;badge-phoenix-secondary&quot;,&quot;icon&quot;:&quot;x&quot;},&quot;delivery_type&quot;:&quot;Cash on delivery&quot;,&quot;date&quot;:&quot;Dec 12, 12:56 PM&quot;}">
                        </div>
                      </td>
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->id }}</td>
  
   
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->vendedor }}</td>
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->destinatario }}</td>
    
    <td>{{ $pedidos[$i]->tipo }}</td>
    <td style="font-weight: bolder; color: #484f55;">${{ $pedidos[$i]->total }}</td>
    <td style="font-weight: bolder; color: #484f55;">${{ $pedidos[$i]->envio }}</td>
    <td style="font-weight: bolder; color: #484f55;">${{ $pedidos[$i]->precio }}</td>
    <!--Empieza If s de estados -->

    @if( $pedidos[$i]->estado =='Entregado')
    <td><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">{{ $pedidos[$i]->estado }}</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
    
    
    @elseif( $pedidos[$i]->estado =='No retirado')
    <td><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">{{ $pedidos[$i]->estado }}</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>
    

    @elseif( $pedidos[$i]->estado =='Reprogramado')
    <td><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">{{ $pedidos[$i]->estado }}</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>

    @else
    <td>{{ $pedidos[$i]->estado }}</td>
    @endif


    <td>{{ $pedidos[$i]->pagado }}</td>

  <!--Termina If s de estados -->
    <td> {{ date('d/m/Y', strtotime($pedidos[$i]->fecha_entrega)) }}</td>
    
   
    
   
 

    </tr>
    @endfor
</tbody>
</table>

</div>


<!-- Inicio Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="float: left;"></h1> &nbsp; &nbsp; &nbsp;
        <span style="float: right; text-align: right;"><button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button></span>
      </div>
      <div class="modal-body">
        <div class="row p-3 m-3" style="border: solid 1px;">
           
            <table class="table table-borderless" >
                <tr>
                    <td  colspan="3"><h4>Datos del Comercio</h4>
                        <hr>
                    </td>
                    
                </tr>

                <tr class="headt">
                    <td width="230px">Nombre de comercio / Tienda </td>
                    <td> <span ></span> <label for="" id="nombre"></label> </td>
                    <td rowspan="22"><span ></span> <img alt="Foto1" class="grande " id="fotoss" width="250" > 
                    <br> <img alt="" id="fotos2" width="250">
                    <br> <img alt="" id="fotos3" width="250"></td>
                </tr>

                <tr class="headt">
                    <td width="230px">Dirección </td>
                    <td> <span ></span> </td>
                    
                </tr>
                

                <tr class="headt">
                    <br>
                    <td  colspan="3" class="pt-2"> <h4> Datos del destinatario</h4>
                        <hr>
                    </td>
                      
                </tr>

                <tr class="headt">
                    <td width="230px">Destinatario </td>
                    <td> <span ></span> <label for="" id="desti"></label> </td>
                    
                </tr>
                <tr class="headt">
                    <td width="230px">Telefono </td>
                    <td> <span ></span> <label for="" id="telef"></label> </td>
                    
                </tr>
                <tr class="headt">
                    <td width="230px">Direccion de entrega </td>
                    <td> <span ></span> <label for="" id="direc"></label> </td>
                    
                </tr>
                

                <tr class="headt">
                    <br>
                    <td  colspan="3" class="pt-2"> <h4> Datos del paquete</h4>
                        <hr>
                    </td>
                      
                </tr>
 
                <tr class="headt">
                    <td width="230px">Fecha de creacion </td>
                    <td> <span ></span> <label for="" id="fecha"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Fecha de entrega </td>
                    <td> <span ></span> <label for="" id="fechen"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Tipo de envio </td>
                    <td> <span ></span> <label for="" id="tipoe"></label> </td>  
                </tr>
                </tr>
                <tr class="headt">
                    <td width="230px">Estado del envio </td>
                    <td> <span ></span> <label for="" id="este"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Estado del pago </td>
                    <td> <span ></span> <label for="" id="estp"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Precio del paquete </td>
                    <td> <span ></span> <label for="" id="preci"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Costo del envio </td>
                    <td> <span ></span> <label for="" id="envio"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Total a cobrar </td>
                    <td> <span ></span> <label for="" id="total"></label> </td>  
                </tr>

                <tr class="headt">
                    <br>
                    <td  colspan="3" class="pt-2"> <h4> Datos internos</h4>
                        <hr>
                    </td>
                      
                </tr>

                <tr class="headt">
                    <td width="230px">Usuario que registró </td>
                    <td> <span ></span> <label for="" id="ingre"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Recepción agencia </td>
                    <td> <span ></span> <label for="" id="agen"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Repartidor </td>
                    <td> <span ></span> <label for="" id="repar"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Ruta </td>
                    <td> <span ></span> <label for="" id="ruta1"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Nota </td>
                    <td> <span ></span> <label for="" id="nota1"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Estante</td>
                    <td> <span ></span> <label for="" id="estan"></label> </td>  
                </tr>
                <tr class="headt">
                    <td width="230px">Cobro de envio</td>
                    <td> <span ></span> <label for="" id="cobro"></label> </td>  
                </tr>


            </table>


        </div>



       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times" style="color: #ffffff;"></i> &nbsp; Cerrar</button>
        <a id="impri" class="btn btn-primary" style="color: #ffffff;">Imprimir</a>
      </div>
    </div>
  </div>
</div>


<!-- Termina Modal -->








</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>




	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />


    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>

    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" defer></script>

                 
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>

    
    
                 

    <!--
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" defer></script>
-->



<script>
       
        
$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var nomb=$('#nom'+id).text();
        var dest=$('#des'+id).text();
        var tele=$('#tel'+id).text();
        var dire=$('#dir'+id).text();
        var fech=$('#fec'+id).text();
        var feche=$('#fece'+id).text();
        var tipo=$('#tip'+id).text();
        var est=$('#este'+id).text();
        var esp=$('#estp'+id).text();
        var prec=$('#pre'+id).text();
        var envi=$('#env'+id).text();
        var tota=$('#tot'+id).text();
        var ingr=$('#ing'+id).text();
        var ange=$('#ang'+id).text();
        var repa=$('#rep'+id).text();
        var ruta=$('#rut'+id).text();
        var nota=$('#not'+id).text();
        var esta=$('#est'+id).text();
        var cobr=$('#cob'+id).text();
        var fotoo=$('#fott'+id).text();
        var foto2=$('#fot2'+id).text();
        var foto3=$('#fot3'+id).text();
        //foti= '/imgs/fotos/';

		
	
		$('#edit').modal('show');
		$('#nombre').text(nomb);
        $('#desti').text(dest);
        $('#telef').text(tele);
        $('#direc').text(dire);
        $('#fecha').text(fech);
        $('#fechen').text(feche);
        $('#tipoe').text(tipo);
        $('#este').text(est);
        $('#estp').text(esp);
        $('#preci').text(prec);  
        $('#envio').text(envi);
        $('#total').text(tota);
        $('#ingre').text(ingr);
        $('#agen').text(ange);
        $('#repar').text(repa);
        $('#ruta1').text(ruta);
        $('#nota1').text(nota);
        $('#estan').text(esta);
        $('#cobro').text(cobr);


        $('#fotoss').attr("src", fotoo);
        $('#fotos2').attr("src", foto2);
        $('#fotos3').attr("src", foto3);
        //$('#fotos').src(fot);
        var ide = '/repartidor/imprimir/'+id ;
		

        //$('#impri a').prop("href", ide);
        //$('.paginacion a').prop('href','http://nuevaUrl.com');

        document.getElementById("impri").href = ide;
	});
});
 






    </script>

    <script>
         
        $(document).ready(function () {
    $('#tpedido').DataTable(
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

        dom: 'tri<"pagina1" p>',
        
        
       
       

        } 
    );
}); 
    </script>
  
@endsection
