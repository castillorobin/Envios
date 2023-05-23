
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
<h6 ><i class="fas fa-home"></i> Inicio / Almacen / Ver</h6>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
@stop

@section('content')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<style>
    .datos{
        color:#787878
    }

/* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<form action="/pedidos/{{$pedido->id}}" >

<div class="row mx-5 mb-5" style="font-size:20px; background: white; border: 1px solid; ">
   <div class="col-12" style="background:#d5d5d5">
<div class="row mx-5" >
    <h3>Detalle del envio</h3>
      
    </div>
    </div>
  <br>
  <div class="col-12">


<div class="row mx-5" style="font-size:20px; background: white;"> <!--  Inicia el row general  -->
<br>
<div class="col-6"> <!--  Inicia la primera columna  -->

<div class="row" >
    <div class="col-4"  >
        <br>
        <label for="inputEmail3" class="">Id de envio</label>
    </div>
    <div class="col-6">
    <br>
        <label for="inputEmail3" class="datos" >{{$pedido->id}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Nombre de comercio / Tienda</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->vendedor}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Destinatario </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->destinatario}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Telefono </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->telefono}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Direccion de entrega </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->direccion}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Fecha de creacion </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{  date('d/m/Y', strtotime($pedido->created_at))  }}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Fecha de entrega </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{  date('d/m/Y', strtotime($pedido->fecha_entrega))  }}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Tipo de servicio </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->servicio}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Tipo de envio </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->tipo}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Cobro del envio </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" ></label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Estado del envio </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->estado}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Estado del pago </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->pagado}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Precio del paquete </label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->precio}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Costo del envio</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->precio}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Total a cobrar</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->total}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Usuario que registra</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->ingresado}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Recepción agencia</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->agencia}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Repartidor</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->repartidor}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Ruta</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->ruta}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Nota</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->nota}}</label>
    </div>
</div>

<div class="row" >
    <div class="col-4"  >
        <label for="inputEmail3" class="">Nota</label>
    </div>
    <div class="col-6">
        <label for="inputEmail3" class="datos" >{{$pedido->nota}}</label>
    </div>
</div>



</div> <!--  Fin de la primera columna  -->


<div class="col-6"> <!--  Inicia la segunda columna  -->

<!-- Trigger the Modal -->
<img id="myImg" src="/imgs/fotos/{{$pedido->foto}}" style="width:100%;max-width:300px">
<br> <p></p>
<img id="myImg2" src="/imgs/fotos/{{$pedido->foto2}}"  style="width:100%;max-width:300px">
<br><p></p>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01" >

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<!-- The Modal 2-->
<div id="myModal2" class="modal">

  <!-- The Close Button -->
  <span class="close" id="close2">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img02" >

  <!-- Modal Caption (Image Text) -->
  <div id="caption2"></div>
</div>



</div> <!--  Fin de la segunda columna  -->
<div class="row">

<div class="modal-footer">
        
     
<a href="/pedidos" class="btn btn-primary">Regresar</a> 
        </div>

    
        </div>

<br><p></p>
</div>
</div> <!--  Termina el row general  -->

</div>

</form>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}


// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img2 = document.getElementById("myImg2");
var modalImg2 = document.getElementById("img02");
var captionText2 = document.getElementById("caption2");
img2.onclick = function(){
  modal2.style.display = "block";
  modalImg2.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

var span2 = document.getElementsById("close2")[0];

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}
</script>






@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
