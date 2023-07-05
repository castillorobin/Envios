<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura PDF</title>
</head>
<body>
<style>
        .fecha{
            float: right;
        }
        
.columna{
    width:350px;
}
.columna2{
    width:150px;
    text-align: center;
}

    </style>

            <h3 class="page__heading">Melo Express</h3>
            <img alt="image" src="/public/img/logo.png" >
        </div>
        

                        <div class="fecha">
   Fecha: {{ now()->Format('d/m/Y')}} Hora: {{ now()->Format('H:i A')}}
   </div>
   <hr>
<p></p>



<table class="table table-bordered shadow-lg mt-4" style="width:100%">
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
<tbody>
    @foreach($pedidos as $pedido)
    <tr style='border-bottom: 1px solid; font-size: 12px'>
    
    <td >{{ $pedido->vendedor }}</td>
    <td >{{ $pedido->destinatario }}</td>
    <td>{{ $pedido->direccion }}</td>
    <td>{{ $pedido->tipo }}</td>
    <td> {{ $pedido->estado }}</td>
    <td> {{ $pedido->fecha_entrega }}</td>
    <td> {{ $pedido->agencia }}</td>
    <td> {{ $pedido->repartidor }}</td>
    <td> {{ $pedido->ruta }}</td>
    <td> {{ $pedido->nota }}</td>
    
</tr>

    @endforeach
</tbody>
</table>
<br>
<hr>

<table >
   
  
   <tr>
       
       <td >  Total Pagado:  </td>
       <td > $ {{ $total}}</td>
   </tr>
  </table>   
   


</body>
</html>
   