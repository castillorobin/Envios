
@extends('layouts.app')

@section('content')




<style>
    @media print{
@page {
size: landscape;
}
}
   
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


<script>  
jQuery(document).ready(function($){
    $(document).ready(function() {
        $('.mi-selector').select2();
       
        $('#comer').on('select2:select', function (e) { 
            
            var data = e.params.data;
    //console.log(data.text);   http://209.145.56.57/
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







<div class="row" style="" >
    <div class=" col-sm-12" >
        <h3 class="text-center">Reporte de envíos</h3>
    </div>
            
    <div class="col-12">   <!-- Inicia columna 8  -->
                
                <div class="row mt-1    mr-1">   
                
                <div class="col-sm-6 mt-4"> <!-- div buscar -->



<select class="form-select" id="comer" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}' name="comer" onchange="actualizar(this)">
<option value="">Buscar Comercio</option>
    @for($i=0;  $i< count($vendedores); $i++ )
                    <option value="{{$vendedores[$i]->nombre}}">{{ $vendedores[$i]->nombre }} </option>
       
                        @endfor
  
</select>


</div> <!-- Termina div buscar  -->


<div class="col-6 mt-4">  <!-- div filtrros  -->


<span style="font-size:18px; color: red;"> {{ $nota }} &nbsp; </span>

                </div> <!-- Termina div filtros  -->
    
 
    <div class="col-12">
 
        


            <div class="d-flex justify-content-end">
            @can('crear-envios')
            <div >

<a href="/pedidos/create" class="btn btn-warning" style="color:white;"><i class="fas fa-database"></i> Agregar Nuevo</a>
<br>
            </div>
            @endcan

  
            </div>
            <br>

            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">

<div class="table-responsive" >


<br>
<table id="tpedido" class="table table-striped mt-2">
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
<tbody>
     
    
</tbody>
</table>









</div>
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
