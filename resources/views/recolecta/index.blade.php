@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Recolecta</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"> 
                        <div class="card-body">
                           
                             
<style>
 
 

.cambiar {
   
    float: left;
    margin - 
     
   }

.cambiar2 {
    float: right;
    margin-right: 20px;
    margin-top: 5px;
 
}

.pagina1{
    margin-bottom: 30px;
    margin-top: -30px;
    
}
.pagina2{
    margin-bottom: -25px;
    padding-top: 10px;
    
}
.nocolor a:link, a:visited, a:active {
    text-decoration:none; 
    color:black;
            
        }

        .dataTables_paginate a:hover {
    color: white !important;
    background:#0d6efd !important;
    
}

.opciones li {
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

.dt-buttons button {
    background: #0275d8;
    color: white;
    border-radius: 5px;
    font-size: 16px;
    float: right;
}
</style>



<div class="row" style="background-color: white;" >
<!--
<h8 style="font-size:14px" ><i class="fas fa-home"></i> Inicio / Almacen / Recolectas</h8>
-->
    <div class="  col-sm-12 py-3" >
        <h3 class="text-center">Listado de Recolectas</h3>
    </div>

 
    <div class="col-12">


            <div class="d-flex justify-content-end">
    
            <div >
                <a href="/recolecta/create" class="btn btn-warning" style="color:white;"><i class="fas fa-database"></i> Agregar Recolecta</a>
                <br>
            </div>


</div>



   




 


  <div class="table-responsive" >



<table id="tvendedor" class="table table-striped mt-2">
<thead style="background-color:#6777ef;">
    <tr >
        <th style="color: #fff;">Comercio</th>
        <th style="color: #fff;">Dirección de recolecta</th>
        <th style="color: #fff;">Teléfono</th>
        <th style="color: #fff;">Fecha de recolecta</th>
        <th style="color: #fff;">Fecha de entrega</th>
        <th style="color: #fff;" >Estado de recolecta</th>
        <th style="color: #fff;">Agencia</th>
        <th style="color: #fff;">Opciones</th>
    </tr>
</thead>
<tbody> 
   
    @for ($i=0; $i< count($recolectas ); $i++)
    <tr>
    <td>{{ $recolectas[$i]->nombre }}</td>
    <td>{{ $recolectas[$i]->direccion }}</td>
    <td>{{ $recolectas[$i]->telefono }}</td>
    <td>{{  date('d/m/Y', strtotime($recolectas[$i]->created_at))  }} </td>
    <td>{{  date('d/m/Y', strtotime($recolectas[$i]->fechaent))  }}</td>
    <td class="text-center" style="background: #e3e8e7"><h5><span class="badge badge-dark">{{ $recolectas[$i]->estado }}</span></h5></td>
    <td>{{ $recolectas[$i]->agencia }}</td>

    

    <td class="opciones text-center" style="">
    
   
   
 
    <a href="" class="dropdown-toggle" data-toggle="dropdown">

    <i class="fas fa-list"></i></a>
    <ul class="dropdown-menu" style="background-color: #ffffff;">
    @can('editar-recolecta')
    <div class="botones"> 
    
    <li class="botones">
    &nbsp;
    
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/recolecta/{{ $recolectas[$i]->id }}/edit" ><button style="background: none; border: 0;">Editar</button></a></li> 
    </div>  
    @endcan
	<li class="botones">
    <form >
   
    &nbsp;
    <i class="fas fa-eye"></i>
    &nbsp;&nbsp;
    <button type="button" class="edit" data-bs-toggle="modal" value="{{ $recolectas[$i]->id }}" data-bs-target="#exampleModal" style="background: none; border: 0;">Ver</button>
  
    
    </form>
            </li>
            @can('borrar-recolecta')
        <li class="botones">
    <form action="{{ route ('recolecta.destroy', $recolectas[$i]->id)}}" method="POST">
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
 
   
    </td>
    </tr>
    @endfor
</tbody>
</table>










<script src="https://code.jquery.com/jquery-3.5.1.js"></script>



<script src="https://kit.fontawesome.com/b64093b700.js" crossorigin="anonymous"></script> 




<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>

  

                 
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" defer></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>



<script>
    
  
$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var first=$('#nombre'+id).text();
        var direc=$('#dire'+id).text();
        var telef=$('#tele'+id).text();
        var email=$('#correo'+id).text();
        var du=$('#dui'+id).text();
        var ni=$('#nit'+id).text();
        var alt=$('#tipoc'+id).text();
        var baj=$('#agencia'+id).text();
        var tip=$('#isss'+id).text();
        var esta=$('#afp'+id).text();
        var agenc=$('#cargo'+id).text();
        var titu=$('#falta'+id).text();
        var banc=$('#sala'+id).text();
        var cuent=$('#fbaja'+id).text();
        var tcuent=$('#nota'+id).text();
        var chiv=$('#tvehi'+id).text();
        var tmon=$('#equipo'+id).text();
        var empre=$('#placa'+id).text();
        var gir=$('#tarjeta'+id).text();

        var nr=$('#licencia'+id).text();
		
	
		$('#edit').modal('show');
		$('#efirstname').text(first);
        $('#dire').text(direc);
        $('#tele').text(telef);
        $('#corre').text(email);
        $('#dui').text(du);
        $('#iva').text(ni);
        $('#alta').text(alt);
        $('#baja').text(baj);
        $('#tipo').text(tip);
        $('#estado').text(esta);  
        $('#agenci').text(agenc);
        $('#titul').text(titu);
        $('#banco').text(banc);
        $('#cuenta').text(cuent);
        $('#tcuenta').text(tcuent);
        $('#chivo').text(chiv);
        $('#tmoney').text(tmon);
        $('#empresa').text(empre);
        $('#giro').text(gir);   

        $('#nrc').text(nr);
		
	});
});
       

    
    </script>


<script>
    
$(document).ready(function() {


$('#tvendedor').DataTable( {
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
      dom: '<"cambiar"f><"pagina2"p><"cambiar2"l>tri<"pagina1"p>',
         

  //responsive: true



} );



} );
</script>


                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>    
@endsection

