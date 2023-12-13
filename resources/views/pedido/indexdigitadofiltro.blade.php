
@extends('layouts.app')

@section('content')

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



</script>



<br>
 
<div class="row" style="background-color: white;" >
    
            
    <div class="col-12">  
    <div class="row mt-1 border mr-1">   
                
                <!-- div buscar -->
<!-- Termina div buscar  -->


<div class="col-6 mt-4">  <!-- div filtrros  -->


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
            
            <li class="nav-item"><a class="nav-link" href="#"><span>Reprogramados </span><span class="text-700 fw-semi-bold">()</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span>No entregados </span><span class="text-700 fw-semi-bold">()</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span>Entregados</span><span class="text-700 fw-semi-bold">()</span></a></li>
           
          </ul>

          <div class="row">

          <div class="col-3 mt-2">
            <div class="search-box">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                      <input class="form-control search-input search" type="search" placeholder="Buscar ordenes" aria-label="Search">
                      <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path></svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->

                    </form>
                  </div>

         </div>


                  <div class="col-6 mt-2">   
                  

                  <div class="search-box">

<select class="mi-selector form-control search" name="comer" id="comer">
    <option value="">  &nbsp; &nbsp; &nbsp; &nbsp; Buscar Comercio</option>
    @for($i=0;  $i< count($vendedores); $i++ )
                    <option value="{{$vendedores[$i]->nombre}}">{{ $vendedores[$i]->nombre }} </option>
       
                        @endfor
</select>
<svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path></svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->

</div>
</div> 




</div>



<div class="table-responsive">


<br>
<div class="table-responsive scrollbar">
<table id="tpedido" class="table fs--1 mb-0 border-top border-200">
<thead style="">
        
        <th style="">ID</th>
        <th style="">Comercio</th>
        <th style="">Destinatario</th>
        <th style="">Direccion</th>
        
        <th style="">Tipo</th>
        <th style="">Estado del envio</th>
        <th style="">Fecha de entrega</th>
        <th style="">Agencia</th>
        <th style="">Repartidor</th>
        <th style="">Ruta</th>
        <th style="">Nota</th>
        <th style="">Opciones</th>
    </tr>
</thead>
<tbody class="list">
     
    @for ($i=0; $i< count($pedidos); $i++)
    <tr class="position-static">
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->id }}</td>
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->vendedor }}</td>
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->destinatario }}</td>
    <td>{{ $pedidos[$i]->direccion }}</td>
    <td>{{ $pedidos[$i]->tipo }}</td>
    <td > 

    <span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">F{{ $pedidos[$i]->estado }}</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>


</td>
    <td> {{ date('d/m/Y', strtotime($pedidos[$i]->fecha_entrega)) }}</td>
    <td> {{ $pedidos[$i]->agencia }}</td>
    <td> {{ $pedidos[$i]->repartidor }}</td>
    <td> {{ $pedidos[$i]->ruta }}</td>
    <td> {{ $pedidos[$i]->nota }}</td>
    <span hidden id="nom{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->vendedor }}</span>
    <span hidden id="des{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->destinatario }}</span>
    <span hidden id="tel{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->telefono }}</span>
    <span hidden id="dir{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->direccion}}</span>
    <span hidden id="fec{{ $pedidos[$i]->id }}"> {{  date('d/m/Y', strtotime($pedidos[$i]->created_at))  }}</span>
    <span hidden id="fece{{ $pedidos[$i]->id }}"> {{  date('d/m/Y', strtotime($pedidos[$i]->fecha_entrega))}}</span>
    <span hidden id="tip{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->tipo}}</span>
    <span hidden id="este{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->estado}}</span>
    <span hidden id="estp{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->pagado}}</span>
    <span hidden id="pre{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->precio}}</span>
    <span hidden id="env{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->envio}}</span>
    <span hidden id="tot{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->total}}</span>
    <span hidden id="ing{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->ingresado}}</span>
    <span hidden id="ang{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->agencia}}</span>
    <span hidden id="rep{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->repartidor}}</span>
    <span hidden id="rut{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->ruta}}</span>
    <span hidden id="not{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->nota}}</span>
    <span hidden id="est{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->estante}}</span>
    <span hidden id="cob{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->cobroenvio}}</span>
    <span hidden id="fott{{ $pedidos[$i]->id }}"> /storage/{{ $pedidos[$i]->foto}}</span>
    <span hidden id="fot2{{ $pedidos[$i]->id }}"> /storage/{{ $pedidos[$i]->foto2}}</span>
    <span hidden id="fot3{{ $pedidos[$i]->id }}"> /storage/{{ $pedidos[$i]->foto3}}</span>

    <td class="opciones text-center" style="">
    
   
  
 
    <a href="" class="dropdown-toggle" data-toggle="dropdown">

    <i class="fas fa-list"></i></a>
    <ul class="dropdown-menu" style="background-color: #ffffff;"> 
     <div class="botones"> 
     @can('crear-rol')
    <li class="botones">
    &nbsp;
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/pedidos/{{ $pedidos[$i]->id }}/edit" ><button style="background: none; border: 0;">Editar</button></a></li> 
    @endcan
    </div>  
	<li class="botones">
   
    &nbsp;
    <i class="fas fa-eye"></i>
    &nbsp;&nbsp;
    <button type="button" class="edit" data-toggle="modal" value="{{ $pedidos[$i]->id }}" data-target="#exampleModal" style="background: none; border: 0;">Ver</button>
</form>
</li>

<div class="botones"> 
    <li class="botones">
    &nbsp;
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/pedidos/etiqueta/{{ $pedidos[$i]->id }}" target="_blank"><button style="background: none; border: 0;" formtarget="_blank">Etiqueta</button></a></li> 
    </div>  
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
 
  <!--
 <a class="btn btn-info" href="{{ route('pedidos.edit', $pedidos[$i]->id) }}">Editar</a>


 <form action="{{ route ('pedidos.destroy', $pedidos[$i]->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Eliminar</button>
        </form>

-->

    </td>
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
