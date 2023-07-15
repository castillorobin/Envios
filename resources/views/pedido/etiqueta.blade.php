<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       @page {
		margin-left: 10px;
		margin-right: 10px;
        margin-bottom: 0.2cm;
        margin-top: 0.2cm;
	}
        .principal{
           border:2px solid;
           width: 355px;
           font-size: 11px;
        }
        .logop{
            width: 190px;
            
        }

        .titulos{
            font-size: 8px;
            font-weight: bolder;
        }

    </style>

</head>
<body style="padding: 0; ">
<div class="principal ">
  <table style="width:100%; ">
    <tr >
        <td style="width: 250px; ">
         <span class="titulos">Melo Express </span> 
         <br>
         
        Comercio / tienda: 
        <br>
        <span class="titulos">{{ $pedido->vendedor }}</span>
        
        </td>
        
        </td>
    </tr>
<hr style="border-top: dotted 1px;">
    <tr>
    
    <td>

    Destinatario: 
        <br>
        <span class="titulos">{{ $pedido->destinatario }}</span>
        <br>
        <br>
        Dirección:
        <br>
        <span class="titulos">{{ $pedido->direccion }}</span>
        <br>
        <br>
        Teléfono:<span class="titulos"> {{ $pedido->telefono }}</span>
        <br>
        Whatsapp:<span class="titulos"> {{ $pedido->whatsapp }}</span>
        
      
        <br>
        <br>
        Fecha de entrega:<span class="titulos"> {{  date('l d F Y',strtotime($pedido->fecha_entrega));}} </span>

        <br>
        <br>
        <span class="titulos" style="float: right; font-size: 16px;"> Total: ${{  $pedido->total}} </span>
        <br>
        <br>
        <hr style="border-top: dotted 1px;">
        <br>
        </td>
       
        
    </tr>
        <tr >
            
            <td style="text-align: center; width:100%; ">  
            

Tipo de envio: <span class="titulos">{{ $pedido->tipo }} </span>
<br>
<br>
  <div style="padding-left: 115px;"> {!! DNS1D::getBarcodeHTML($pedido->id , 'C39') !!} <span style="padding-right: 100px;"> {{ $pedido->id }} </span></div>
</br>        
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