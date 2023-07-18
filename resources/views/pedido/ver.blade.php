@extends('layouts.app')

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

<div class="row mx-5 mb-5" style="font-size:14px; background: white; border: 1px solid; ">
   <div class="col-12" style="background:#d5d5d5">
<div class="row mx-1 text-center" >
    <h5>Cambiar Status del envio</h5>
      
    </div>
    </div>
  <br>
  <div class="col-12">


<div class="row mx-2" style=" background: white;"> <!--  Inicia el row general  -->
<br>
<div class="col-12 text-center"> <!--  Inicia la primera columna  -->

<div class="row" >
    <div class="col-12" >
        
        <label for="inputEmail3" class="">Id: <strong> {{$pedido->id}}</strong></label>
        <br>
        <label for="inputEmail3" class="">Destinatario: <strong>{{$pedido->destinatario}}</strong></label>
        <br>
        <label for="inputEmail3" class="">Comercio: <strong>{{$pedido->vendedor}}</strong></label>
        <br>
        <label for="inputEmail3" class="">Direccion: <strong>{{$pedido->direccion}}</strong></label>
        <br>
        <label for="inputEmail3" class="">Total: <strong>${{$pedido->total}}</strong></label>
        <br>

        <p></p>
        <a href="/pedidos" class="btn btn-primary btn-lg btn-block">Entregado</a> 
<br>
<p></p>
<a href="/pedidos" class="btn btn-primary btn-lg btn-block">Reprogamado</a> 
<br>
<p></p>
<a href="/pedidos" class="btn btn-primary btn-lg btn-block">No entregado</a> 
<p></p>
    </div>
    
</div>



</div> <!--  Fin de la primera columna  -->



 


<br><p></p>
</div>
</div> <!--  Termina el row general  -->

</div>

</form>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>




@endsection

