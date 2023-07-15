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
           
           width: 355px;
           font-size: 11px;
        }
        .logop{
            width: 190px;
            
        }

        .titulos{
            font-size: 14px;
            font-weight: bolder;
        }
body{
    
}
    </style>

</head>
<body>
    <table style="width: 100%; border: 1px solid; height: 95%; ">
        <tr>
            <td colspan="2">
            <span class="titulos" style="font-size:20px; ">Melo Express </span> 
            </td>
        </tr>
        <tr >
            <td style="width: 60%; border-top: 1px solid;">
            <br>
            Comercio/tienda: 
        <br>
        <span class="titulos" style="font-size:18px; ">{{ $pedido->vendedor }}</span>
            </td>
            <td style=" border-top: 1px solid;">
            <br>
        Teléfono:<span class="titulos" style="font-size:16px; "> {{ $pedido->telefono }}</span>
        <br>
        Whatsapp:<span class="titulos" style="font-size:16px; "> {{ $pedido->whatsapp }}</span>
            </td>
        </tr>
        <tr>
            <td style="width: 60%; border-top: 1px solid;">
            Destinatario: 
        <br>
        <span class="titulos" style="font-size:18px; ">{{ $pedido->destinatario }}</span>
        <br>
        <br>
            
            
            Dirección:
        <br>
        <span class="titulos" style="font-size:18px; ">{{ $pedido->direccion }}</span>
        <br>
            </td>
            <td style="border-top: 1px solid; border-left: 1px solid;"> codigo Qr</td>
        </tr>
        <tr>
            <td colspan="2" style="width: 60%; border-top: 1px solid;">
                Tipo de envio: 
                <br>
                <span class="titulos" style="font-size:18px; ">{{ $pedido->tipo }} </span>
                <br>
        </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 60%; border-top: 1px solid; text-align:center;">
            Fecha de entrega:<span class="titulos" style="font-size:18px; "> {{  date('l d F Y',strtotime($pedido->fecha_entrega));}} </span>
            <br>
            <br>
            <div style="padding-left: 115px;"> {!! DNS1D::getBarcodeHTML($pedido->id , 'C39') !!} <span style="padding-right: 100px;"> {{ $pedido->id }} </span></div>
            </td>
        </tr>
    </table>
</body>

</html>