<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .principal{
           border:2px solid;
           width: 500px;
            
        }
        .logop{
            width: 190px;
            
        }

    </style>

</head>
<body>
<div class="principal ">
  <table >
    <tr >
        <td style="width: 250px; font-size: 20px;">
        <strong> Melo Express </strong><br>
        Metrogalerias local 3-9 <br>
        San Salvador <br>
        Telefono: 7457-6280 <br>
        &nbsp; &nbsp; &nbsp;
        </td>
        <td>
        <img src="vendor/adminlte/dist/img/logo.jpg" alt="" class="logop">
        </td>
    </tr>

    <tr>
    <td style=" " > 
    <br>
        <div>{!! DNS2D::getBarcodeHTML(" $pedido->id ", 'QRCODE') !!}</div>

        </td>
    <td style=" font-size: 20px;">

        <strong> Datos de Entrega: </strong><br>
        Nombre: {{ $pedido->destinatario }}  <br>
    Dirección: {{ $pedido->direccion }} <br>
    Telefono: {{ $pedido->telefono }} <br>
    Ruta : {{ $pedido->ruta }} 
        </td>
       
        
    </tr>
        <tr>
            <td></td>
            <td>  
            <p></p>
<br>
Pedido: {{ $pedido->id }} 
  <div>{!! DNS1D::getBarcodeHTML($pedido->id , 'C39') !!}</div></br>        
        </td>
        </tr>


  </table>
 
  
    
    
</div>

<script>

window.print();
setTimeout(saludos, 3000);

function saludos(){
    window.location.href = '/pedidos';
}

</script>

</body>

</html>