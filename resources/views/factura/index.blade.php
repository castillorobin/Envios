@extends('layouts.app')

@section('content')
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
                        
            <div class="row border mx-1 py-4" style="background-color: white;" >   <!-- Inicia fila General -->
                <div class="col-9 ">   <!-- Inicia columna 8  -->
                <div class="col-12 border ">   
                    <h4>Pagar</h4>
                </div> 
                <div class="row mt-2">   
                
                <div class="col-sm-6"> <!-- div buscar -->

<div class="input-group mb-3">

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


<div class="col-6">  <!-- div filtrros  -->
<button type="button" class="btn btn-warning">Ver</button>
<button type="button" class="btn btn-success">Editar</button>
                </div> <!-- Termina div filtros  -->

<div class="col-12" style=" height:500px;  overflow: scroll;" > <!-- div tabla  -->
<table id="tvendedor" class="table table-striped mt-2" style=" ">
<thead style="background-color:#6777ef;">
    <tr >
        <th style="color: #fff;">Comercio</th>
        <th style="color: #fff;">Destinatario</th>
        <th style="color: #fff;">Dirección</th>
        <th style="color: #fff;">Tipo</th>
        <th style="color: #fff;">Estado del envio</th>
        <th style="color: #fff;">Fecha de entrega</th>
        <th style="color: #fff;">Estado del pago</th>
        <th style="color: #fff;">Estado del paquete</th>
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
                    <td>{{ $pedidos[$i]->vendedor }} </td>
                    <td>{{ $pedidos[$i]->destinatario }} </td>
                    <td>{{ $pedidos[$i]->direccion }} </td>
                    <td>{{ $pedidos[$i]->tipo }} </td>
                    <td>{{ $pedidos[$i]->estado }} </td>
                    <td>{{ $pedidos[$i]->fecha_entrega }} </td>
                    <td>{{ $pedidos[$i]->pagado }} </td>
                    <td> </td>
                    <td>{{ $pedidos[$i]->precio }} </td>
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
<tr>
<td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="background-color:#cecece"></td>
    <td></td>
</tr>
<tr>
<td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="background-color:#cecece"></td>
    <td></td>
</tr>
<tr>
<td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="background-color:#cecece"></td>
    <td></td>
</tr>
<tr>
<td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="background-color:#cecece"></td>
    <td></td>
</tr>
<tr>
<td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="background-color:#cecece"></td>
    <td></td>
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

                <div class="col-3 border px-0 ">  <!-- Inicia columna 4  -->

                <div class="col-12 text-center pt-3" style="background-color:#e85f24; color:white; height:75px;">  <!-- Inicia columna total  -->
                <H1>Total $000.00</H1>
                </div> <!-- Termina columna total  -->
                <div class="col-12">  <!-- Inicia cajero, pagos etc. -->
                <br>
                Cajero
                <input type="text" class="form-control" name="cajero" id="cajero" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" >
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
                <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    IVA
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Hacer descuento
  </label>
</div>

                </div>


                <div class="col-6">
             
<div class="input-group ">
  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1"> <i class="far fa-money-bill-alt"></i> </span>
  </div>

  <input type="text" class="form-control" name="fpago" id="fpago"  aria-label="Username" aria-describedby="basic-addon1">
    
</div>






      </div>
                </div>

<br>
            <div class="col-12">
                Nota de descuento
                <input type="text" class="form-control" name="fpago" id="fpago"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="col-12">
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
@endsection
