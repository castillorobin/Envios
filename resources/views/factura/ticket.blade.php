<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    
</head>
<body>
<style>
        .fecha{
           
        }
        
.columna{
    width:350px;
}
.columna2{
    width:150px;
    text-align: center;
}
.centrar{
    font-weight: bolder;
    text-align: center;
}

    </style>

    <div style="width:100%; " class="text-center centrar">
            <span class="page__heading " >Melo Express</span>
           <!-- <img alt="image" src="/public/img/logo.png" > -->
           <br>
           <span>Servicios de Encomiendas</span>
           <br>
           <span>Centro Comercial Metrogaleria</span>
           
        </div>
        

                        <div class="fecha centrar">
   Fecha: {{ now()->Format('d/m/Y')}}
   </div>
   <br>
   
   <span>Cajero: {{\Illuminate\Support\Facades\Auth::user()->name}}</span>
   <br>
<span>Comercio: {{ $pedidos[0]->vendedor}}</span>
<br>
<span>Agencia: {{ $pedidos[0]->agencia}}</span>

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
   