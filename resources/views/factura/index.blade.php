@extends('layouts.app')

@section('content')
<script languague="javascript">
       

        function mostrando()
{
  var checkbox = document.getElementById('check2');
  if (checkbox.checked != true)
  {
    div = document.getElementById('flotante');
            div.style.display = 'none';
            div2 = document.getElementById('flotante2');
            div2.style.display = 'none';

  }else{
    div = document.getElementById('flotante');
            div.style.display = '';
            div2 = document.getElementById('flotante2');
            div2.style.display = '';
  }
}

</script>
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Melo Express</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"> 
                        <div class="card-body">

                            <h3 class="text-center">Facturación</h3>
                        
            <div class="row  py-2" style="background-color: white;" >   <!-- Inicia fila General -->
                <div class="col-8">   <!-- Inicia columna 8  -->
                
                <div class="row mt-1 border mr-1">   
                
                <div class="col-sm-6 mt-4"> <!-- div buscar -->

<div class="input-group mb-3 ">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-search"></i> </span>
</div>
<select class="form-control" name="" id="">
    <option value="">Buscar Comercio</option>
    @for($i=0;  $i< count($vendedores); $i++ )
                    <option value="{{$vendedores[$i]->nombre}}">{{ $vendedores[$i]->nombre }} </option>
       
                        @endfor
</select>

</div>
</div> <!-- Termina div buscar  -->


<div class="col-6 mt-4">  <!-- div filtrros  -->
<button type="button" class="btn btn-warning">Ver</button>
<button type="button" class="btn btn-success">Editar</button>
                </div> <!-- Termina div filtros  -->

<div class="col-12 table-responsive " style=" height:500px; " > <!-- div tabla  -->
<table id="tvendedor" class="table table-striped " style="  ">
<thead style="background-color:#6777ef;"> 
    <tr >
        <th>*</th>
        <th style="color: #fff;">Comercio</th>
        <th style="color: #fff;">Destinatario</th>
        <th style="color: #fff;">Dirección</th>
        <th style="color: #fff;">Tipo</th>
        <th style="color: #fff;">Estado del envio</th>
        <th style="color: #fff;">Fecha de entrega</th>
        <th style="color: #fff;">Estado del pago</th>
        <th style="color: #fff;">Precio del paquete</th>
        <th style="color: #fff;">Precio del envio</th>
        <th style="color: #fff;">Total</th>
        <th style="color: #fff;">Agencia</th>
        <th style="color: #fff;">Opciones</th>
    </tr>
</thead>
<tbody> 
</tbody> 
@for($i=0;  $i< count($pedidos); $i++ )
<tr>
                    <td >
                    <div class="form-group form-check" style="width: 5px;">
                     <input type="checkbox" value="{{ $pedidos[$i]->id }}" class="form-check-input" id="check3" >
                     
                    </div>
                    </td>
                    <td>{{ $pedidos[$i]->vendedor }} </td>
                    <td>{{ $pedidos[$i]->destinatario }} </td>
                    <td>{{ $pedidos[$i]->direccion }} </td>
                    <td>{{ $pedidos[$i]->tipo }}</td>  
                    <td>{{ $pedidos[$i]->estado }} </td>
                    <td>{{ $pedidos[$i]->fecha_entrega }} </td>
                    @if($pedidos[$i]->pagado=='Pagado')
                    <td class="text-center"><h5><span class="badge badge-success ">{{ $pedidos[$i]->pagado }} </span></h5></td>
                    @else
                    <td class="text-center"><h5><span class="badge badge-danger ">{{ $pedidos[$i]->pagado }} </span></h5></td>
                    @endif

                   
                    <td>{{ $pedidos[$i]->precio }}  </td>
                    <span hidden id="pre{{ $pedidos[$i]->id }}"> {{ $pedidos[$i]->precio}}</span>
                    <td>{{ $pedidos[$i]->envio }} </td>
                    <td>{{ $pedidos[$i]->total }} </td>
                    <td>{{ $pedidos[$i]->agencia }} </td>
                    <td>Opciones </td>
                    </tr>
                        @endfor
<tr>
    <td style="width: 100px; "></td>
    <td style="width: 100px; "></td>
    <td style="width: 100px; "></td>
    <td style="width: 100px; "></td>
    <td style="width: 100px; "></td>
    <td style="width: 100px; "></td>
    <td style="width: 100px; "></td>
    <td style="width: 100px; "></td>
    <td style="width: 100px; "></td>
    <td style="width: 100px; "></td>
    <td style="width: 100px; " style="background-color:#cecece"></td>
    <td style="width: 100px; "></td>
</tr>


<tr style="background-color:#ffffff">
    
    <td colspan="11" class="text-right" >SUMAS</td>
    <td>$000.00</td>
</tr>
<tr style="background-color:#ffffff">
    
    <td colspan="11" class="text-right" style="">IVA</td>
    <td>$000.00</td>
</tr>
<tr style="background-color:#ffffff">
    
    <td colspan="11" class="text-right" style="">SUBTOTAL</td>
    <td>$000.00</td>
</tr>
<tr style="background-color:#ffffff">
    
    <td colspan="11" class="text-right" style="">VENTA NO SUJETA</td>
    <td>$000.00</td>
</tr>
<tr style="background-color:#ffffff">
    
    <td colspan="11" class="text-right" style="">VENTA EXCENTA</td>
    <td>$000.00</td>
</tr>
<tr style="background-color:#ffffff">
    
    <td colspan="11" class="text-right" style="">TOTAL</td>
    <td>$000.00</td>
</tr>
</table>
</div><!-- termina div tabla  -->


                </div> <!-- Termina columna 12 -->

                </div>  <!-- Termina columna 8  -->
  
                <div class="col-4 border px-0 mt-1">  <!-- Inicia columna 4  -->

                <div class="col-12 text-center pt-3" style="background-color:#e85f24; color:white; height:75px;">  <!-- Inicia columna total  -->
                <H1>Total $ <label for="" id="preci">0</label></H1>
             
                </div> <!-- Termina columna total  -->
                <div class="col-12">  <!-- Inicia cajero, pagos etc. -->
                <br>
                Cajero
                <input type="text" class="form-control" name="cajero" id="cajero" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                <br>
                <div class="row pt-2">
                    
                <div class="col-6">Medio de pago
                    <select name="medio" id="medio" class="form-control">
                        <option value="Efectivo">Efectivo</option>
                        <option value="Deposito">Deposito</option>
                        <option value="Tigo Money">Tigo Money</option>
                        <option value="Chivo">Chivo</option>
                    </select>

                </div>
                <div class="col-6">
                    
               
          Fecha de pago

          <div class="input-group ">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">  <img src="https://img.icons8.com/ios-filled/25/null/tear-off-calendar.png"/></span>
            </div>
  
            <input type="text" class="form-control" name="fpago" id="fpago" value="{{ date('d/m/Y') }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
              
          </div>
        
        



                </div>
                </div>



<br>

                <div class="row pt-2">
                    
                <div class="col-6">Tipo de comprobante
                    <select name="medio" id="medio" class="form-control">
                        <option value="Efectivo">Ticket</option>
                        <option value="Deposito">Factura</option>
                        <option value="Tigo Money">Crédito Fiscal</option>
                        <option value="Tigo Money">PDF</option>
                        
                    </select>

                </div>
                <div class="col-6">
                    
               
          No. de comprobante

          <div class="input-group ">
            <div class="input-group-prepend">
            
            </div>
  
            <input type="text" class="form-control" name="fpago" id="fpago" aria-label="Username" aria-describedby="basic-addon1" >
              
          </div>
        
        



                </div>
                </div>
                <br>

                <div class="col-12">
                <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="check1">
    <label class="form-check-label" for="check1">IVA</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="check2" Onclick="javascript:mostrando();">
    <label class="form-check-label" for="check2">Hacer descuento</label>
  </div>

                </div>







                <div class="col-6" id="flotante" style="display:none;">
             
<div class="input-group ">
  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"> <i class="far fa-money-bill-alt"></i> </span>
  </div>

  <input type="text" class="form-control" name="fpago" id="fpago"  aria-label="Username" aria-describedby="basic-addon1">
    
</div>






      </div>
                </div>

<br>
            <div class="col-12" id="flotante2" style="display:none;">
                Nota de descuento
                <input type="text" class="form-control" name="fpago" id="fpago"  aria-label="Username" aria-describedby="basic-addon1">
            </div>









            <br>
            <div class="col-12 mb-3">
            <button type="button" class="btn btn-lg btn-warning btn-block">PAGAR</button>
            </div>

                </div> <!-- Termina cajero, pagos etc.  -->
                </div> <!-- Termina columna 4  -->
            </div> <!-- Termina fila General -->
                            
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
         <script>
        
$(document).ready(function(){
	$(document).on('click', '#check3', function(){
		var id=$(this).val();
		var prec=$('#pre'+id).text();
        
        //alert("le diste click" + prec);
        var tota = $('#preci').text();
        //var tota = document.getElementById("pre").val;
        var to3 = parseFloat(tota, 10) + parseFloat(prec, 10);
        $('#preci').text(to3);  
       // $('#preci').text(tota.toString() + 'hola' );  



    });
});
 
        </script> 
@endsection
