@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mel</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"> 
                        <div class="card-body">

                        <div class="fecha">
   Fecha: {{ now()->Format('d/m/Y')}} Hora: {{ now()->Format('H:i A')}}
   </div>
   <hr>
<p></p>
   <table >
    <tr>
        <td class="columna" ><b> Caja: </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1  </td>
   
        <td class="columna">  <b> Entregados: </b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </td>
        <td class="columna2"> $ </td>
    </tr>
    <tr>
        <td class="columna"><b> Usuario: </b> &nbsp;&nbsp; &nbsp; &nbsp; 1 </td>
        <td class="columna">  <b> Reprogramados: </b>  </td>
        <td class="columna2"> $</td>
    </tr>
    <tr>
        <td class="columna"><b> Repartidor: </b> </td>
        <td class="columna">  <b> No entregados: </b> &nbsp; &nbsp;0 </td>
        <td class="columna2">$ 0 
            
        </td>
    </tr>
    <tr>
        <td class="columna"><b> Ruta: </b>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
        <td class="columna">     </td>
        <td style="border-top: 1px solid;"> </td>
    </tr>
    <tr>
        <td class="columna"><b> Envios: </b> &nbsp; &nbsp; &nbsp; &nbsp;    </td>
        <td class="columna">  Total   </td>
        <td class="columna2"> $ </td>
    </tr>
   </table>

   <br>
<table class="table table-bordered shadow-lg mt-4" style='id;'>
<thead >
    <tr style='background: #223161; color:white; font-size:13px; text-align: center;'>
        
        <th scope="col">Comercio</th>
        <th scope="col">Destinatario</th>
        <th scope="col">Direccion</th>
        
        <th scope="col">Tipo</th>
        <th scope="col">Estado del envio</th>
        <th scope="col">Fecha de entrega</th>
        <th scope="col">Agencia</th>
        <th scope="col">Repartidor</th>
        <th scope="col">Ruta</th>
        <th scope="col">Nota</th>
        
    </tr>
</thead>

</table>

                            
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>    
@endsection
