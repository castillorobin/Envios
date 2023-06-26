@extends('layouts.app')

@section('content')
<style>
    .modal-backdrop {
  z-index: 0;
}
</style>
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




function ivan()
{
    var total = document.getElementById('preci2').textContent;
		//var ivavalor = 1.0;
        //var iva = parseFloat(total, 10) + parseFloat(ivavalor, 10);
        //alert("le diste click" + prec);
        var tota = total * 0.13;
       
         

        if (document.getElementById("checkiva").checked) {
            
            //var to3 = parseFloat(total, 10) + parseFloat(ivavalor, 10);
            document.getElementById('preci2').innerHTML = parseFloat(total) + parseFloat(tota) ; 
           
            //document.getElementById(preci2) = to4;  
        } else {
            document.getElementById('preci2').innerHTML = document.getElementById('preci').textContent ; 
        
        
        }
        
}

</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>  
jQuery(document).ready(function($){
    $(document).ready(function() {
        $('.mi-selector').select2();
       
        $('#comer').on('select2:select', function (e) { 
            
            var data = e.params.data;
    console.log(data.text);
    //document.getElementById('mostrar').value = data.text;
   window.location = "http://54.237.159.219/facturasfiltro/" + data.text; 
    //window.location = "http://127.0.0.1:8000/facturasfiltro/" + data.text;

        });

    });

   
});



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
            <div class="col-12 text-center pt-3 mb-3" style="background-color:#e85f24; color:white; height:75px;">  <!-- Inicia columna total  -->
<H1>Total $ <label for="" id="preci">0</label></H1>

</div> <!-- Termina columna total  -->

                <div class="col-12">   <!-- Inicia columna 8  -->
                
                <div class="row mt-1 border mr-1">   
                
                <div class="col-sm-6 mt-4"> <!-- div buscar -->

<div class="input-group mb-3 ">

<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> <i class="fas fa-search"></i> </span>
</div>
<select class="form-control mi-selector" name="comer" id="comer">
    
    <option value="{{$vende[0]->nombre }}" selected >{{$vende[0]->nombre }}</option>
    @for($i=0;  $i< count($vendedores); $i++ )
                    <option value="{{$vendedores[$i]->nombre}}">{{ $vendedores[$i]->nombre }} </option>
       
                        @endfor
</select>

</div>
</div> <!-- Termina div buscar  -->


<div class="col-6 mt-4">  <!-- div filtrros  -->
<button type="button" class="btn btn-warning">Ver</button>
<a href="/vendedores/{{ $vende[0]->id }}/edit" ><button class="btn btn-success" >Editar</button></a>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Pagar
</button>
                </div> <!-- Termina div filtros  -->

<div class="col-12 table-responsive " style="height:700px; " > <!-- div tabla  -->
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
                    



                    <td class="opciones text-center" style="">
    
  
  
 
    <a href="" class="dropdown-toggle" data-toggle="dropdown">

    <i class="fas fa-list"></i></a>
    <ul class="dropdown-menu" style="background-color: #ffffff;"> 
     <div class="botones"> 
    <li class="botones">
    &nbsp;
    <i class="fas fa-edit"></i>
    &nbsp;&nbsp;
    <a href="/pedidos/{{ $pedidos[$i]->id }}/edit" ><button style="background: none; border: 0;">Editar</button></a></li> 
    </div>  
	<li class="botones">
   
    &nbsp;
    <i class="fas fa-eye"></i>
    &nbsp;&nbsp;
    <button type="button" class="edit" data-toggle="modal" value="{{ $pedidos[$i]->id }}" data-target="#exampleModal" style="background: none; border: 0;">Ver</button>
</form>
</li>
<li class="botones">
    <form action="{{ route ('pedidos.destroy', $pedidos[$i]->id)}}" method="POST">
        @csrf
        @method('DELETE')
        &nbsp;
        <i class="fas fa-trash-alt"></i> 
        &nbsp;&nbsp;
        <button style="background: none; border: 0;">Eliminar</button>
        </form>
        </li>
    </ul>
 
  <!--
 <a class="btn btn-info" href="{{ route('pedidos.edit', $pedidos[$i]->id) }}">Editar</a>


 <form action="{{ route ('pedidos.destroy', $pedidos[$i]->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Eliminar</button>
        </form>

-->

    </td>




                    </tr>
                        @endfor
<tr>
<td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
    <td  ></td>
</tr>



<tr class="text-center" style="background-color:#6777ef; height:5px;">
    
    <td style="color: #fff; height:5px;" colspan="2">SUMAS</td>
    <td style="color: #fff; height:5px;">IVA </td>
    <td  style="color: #fff; height:5px;">SUBTOTAL</td>
    <td  style="color: #fff; height:5px;" colspan="2">VENTA NO SUJETA </td>
    <td  style="color: #fff; height:5px;" colspan="2">VENTA EXCENTA </td>
    <td  style="color: #fff; height:5px;" colspan="2">TOTAL</td>
    <td style="color: #fff; height:5px;"></td>
    <td style="color: #fff; height:5px;"></td>
    <td style="color: #fff; height:5px;"></td>
    
     
    
   
</tr>

<tr class="text-center">    
<td colspan="2">$<label for="" id="sumas">0</label></td>
    <td>$<label for="" id="ivat">0</label></td>
    <td > $<label for="" id="stotal">0</label></td>
    <td  colspan="2">$ 000.00</td>
    <td  colspan="2">$000.00</td>
    <td  colspan="2">$<label for="" id="atotal">0</label></td>
    <td >  </td>
    <td> </td>
   <td></td>

</tr>


</table>

</div><!-- termina div tabla  -->
<div class="col-6 my-4">
&nbsp; &nbsp;
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"> Pagar</button> 
  &nbsp;  &nbsp; <a href="/facturas" class="btn btn-danger">Cancelar</a>
    <br>
    <p></p>
    &nbsp;
    <p></p>
    </div>

                </div> <!-- Termina columna 12 -->
     
                </div>  <!-- Termina columna 8  -->
             
            </div> <!-- Termina fila General -->
                            
         
            
            
            <!-- Empieza Modal -->

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pagar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <div class="col-12 border px-0 mt-1">  <!-- Inicia columna 4  -->
      <div class="col-12 text-center pt-2 mb-3" style="background-color:#e85f24; color:white; height:75px;">  <!-- Inicia columna total  -->
<H1>Total $ <label for="" id="preci2">0</label></H1>

</div> <!-- Termina columna total  -->
<div class="col-12">  <!-- Inicia cajero, pagos etc. -->

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
<input type="checkbox" class="form-check-input" id="checkiva" Onclick="javascript:ivan();">
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



      </div>
      <div class="modal-footer " style="background-color:white;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


            <!-- Termina Modal -->






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
        if ($(this).prop('checked')) {
            var to3 = parseFloat(tota, 10) + parseFloat(prec, 10);
        $('#preci').text(to3); 
        $('#preci2').text(to3);  
        } else {
            var to3 = parseFloat(tota, 10) - parseFloat(prec, 10);
        $('#preci').text(to3); 
        $('#preci2').text(to3);  
        }
        $('#sumas').text(to3); 
        $('#ivat').text((parseFloat(to3, 10) * 0.13).toFixed(2) ); 
        $('#stotal').text(parseFloat(to3, 10) + (parseFloat(to3, 10) * 0.13) ); 
        $('#atotal').text(parseFloat(to3, 10) + (parseFloat(to3, 10) * 0.13) ); 
        
        //var tota = document.getElementById("pre").val;
        
       // $('#preci').text(tota.toString() + 'hola' );  
     

    });
   
    
    


   // $(document).on('change', '.selection', function(){   
//console.log('Hola');
 //   });
    
});
 



        </script> 
@endsection
