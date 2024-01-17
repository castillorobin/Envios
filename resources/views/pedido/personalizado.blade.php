
@extends('layouts.app')

@section('content')

<script>
 
function myFunction() {
  document.getElementById("myForm").reset();
}
 $(document).ready(function() {
  
   					$("#envio").change(function() {
       												 //alert($(this).val());
          const tenv = document.getElementById("cenvio").value;
					const preci = parseFloat(document.getElementById("precio").value);						                                                    
          const envi =parseFloat($(this).val()); 
          
          if(tenv=="Pagado")
          {
            document.getElementById("total").value = preci;
          }else{
            document.getElementById("total").value = preci - envi;
          }
                    


    				});

            $("#precio").change(function() {
       												 //alert($(this).val());
          const tenv2 = document.getElementById("cenvio").value;
					const envi2 = parseFloat(document.getElementById("envio").value);						                                                    
          const preci2 =parseFloat($(this).val()); 
          
          if(tenv2=="Pagado")
          {
            document.getElementById("total").value = preci2;
          }else{
            document.getElementById("total").value = preci2 - envi2;
          }
                    


    				});


            $("#cenvio").change(function() {
       												 //alert($(this).val());
          const tenv3 = document.getElementById("precio").value;
					const envi3 = parseFloat(document.getElementById("envio").value);						                                                    
          const preci3 =document.getElementById("cenvio").value; 
          
          if(preci3=="Pagado")
          {
            document.getElementById("total").value = tenv3;
          }else{
            document.getElementById("total").value = tenv3 - envi3;
          }
                    											
    				});
              
                                            });

  
</script>


      
      <div class="row">
      <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#!">Gestion de Pedidos</a></li>
            <li class="breadcrumb-item active">Crear Pedido</li>
          </ol>
        </nav>
        <h2 class="mb-3">Crear Envio</h2>
        <div class="row">
          <div class="col-xl-9">
             
          <ul class="nav nav-underline" id="myTab" role="tablist">
  <li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">Personalizado</a></li>
  <li class="nav-item"><a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="false">Personalizado Departamental</a></li>
  <li class="nav-item"><a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false">Punto Fijo</a></li>
  <li class="nav-item"><a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab-contact" role="tab" aria-controls="tab-contact" aria-selected="false">Casillero</a></li>
</ul>                 






<div class="tab-content mt-3" id="myTabContent">

<div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
  <div class="p-1 rounded">


                   
                        
                    <div class="col-xl-12">
            <form class="row g-3 mb-12">
              
              <h1>Personalizado</h1>
              <div class="col-sm-12 col-md-12">
                <div class="form-floating">
                <select class="form-select" id="comer" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}' name="comer" onchange="actualizar(this)" >
<option value="">Buscar Comercio</option>
    @for($i=0;  $i< count($vendedores); $i++ )
                    <option value="{{$vendedores[$i]->nombre}}">{{ $vendedores[$i]->nombre }} </option>
       
                        @endfor
  
</select>
                </div>
              </div>

              <div class="col-sm-12 col-md-12">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title" tabindex="1">
                  <label for="floatingInputGrid">Destinatario </label>
                </div>
              </div>
              
              <div class="col-sm-6 col-md-8">
              <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title" tabindex="2">
                  <label for="floatingInputGrid">Direccion </label>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
              <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title" tabindex="4" data-inputmask="'mask': '9999-9999'">
                  <label for="floatingInputGrid">Telefono </label>
                </div>
              </div>
              
              <div class="col-sm-6 col-md-6">
                <div class="form-floating">
                <select id="cenvio" name="cenvio" class="form-control" tabindex="5">
          <option value="Pendiente">Pendiente</option>
          <option value="Pagado">Pagado</option>
          </select>
                  <label for="floatingInputBudget">Cobro del envio</label>
                </div>
              </div>
             
              <div class="col-md-6 ">
              <div class="input-group form-floating">
                <span class="input-group-text">$</span>

                <input class="form-control" name="precio" id="precio" type="text" placeholder="Precio del paquete" tabindex="6" />
               
                
                <label for="floatingInputBudget"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Precio del paquete</label>
                
                </div>                                
              </div>

             
              <div class="col-md-6 ">
              <div class="input-group form-floating">
                <span class="input-group-text">$</span>

                <input class="form-control" name="envio" id="envio" type="text" placeholder="Budget" tabindex="7">
               
                
                <label for="floatingInputBudget"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Precio del envio</label>
                
                </div>                                
              </div>

            

              <div class="col-md-6 ">
              <div class="input-group form-floating">
                <span class="input-group-text">$</span>

                <input class="form-control" name="total" id="total" type="text" placeholder="Project title" tabindex="8">
               
                
                <label for="floatingInputBudget"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Total a pagar</label>
                
                </div>                                
              </div>

                      
           




              <div class="col-sm-6 col-md-6">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectAdmin" tabindex="9">
                  <option value="Creado" >Creado</option>
                  <option value="Entregado">Entregado</option>
                    
                <option value="En ruta">En ruta</option>
                <option value="Nr devuelto al comercio">Nr devuelto al comercio</option>
                <option value="Reprogramado">Reprogramado</option>
                <option value="Agencia San Salvador">Agencia San Salvador</option>
                <option value="Agencia San Miguel">Agencia San Miguel</option>
                <option value="Agencia Santa Ana">Agencia Santa Ana</option>
                <option value="No retirado">No retirado</option>
                <option value="No retirado agencia San Salvador">No retirado agencia San Salvador</option>
                <option value="No retirado agencia San Miguel">No retirado agencia San Miguel</option>
                <option value="No retirado agencia Santa Ana">No retirado agencia Santa Ana</option>
                <option value="No retirado Centro logístico">No retirado Centro logístico</option>
                <option value="Casillero San Salvador">Casillero San Salvador</option>
                <option value="Casillero San Miguel">Casillero San Miguel</option>
                <option value="Casillero Santa Ana">Casillero Santa Ana</option>

                  </select>
                  <label for="floatingSelectAdmin">Estado del envio</label>
                </div>
              </div>

              <div class="col-sm-6 col-md-6">
                <div class="form-floating">
                <select id="pagado" name="pagado" class="form-select" id="floatingSelectAdmin" tabindex="10">
                    <option value="Por pagar">Por pagar</option>
                    <option value="Pagado">Pagado</option>
                    <option value="Trans. a la empresa">Trans. a la empresa</option>
                    <option value="Trans. al comercio">Trans. al comercio</option>
            
                      </select>
                  <label for="floatingInputBudget">Estado del pago</label>
                </div>
              </div>




              <div class="col-sm-6 ">
                <div class="form-floating">
                <select id="tenvio" name="tenvio" class="form-control" tabindex="11">
      
      <option value="Personalizado">Personalizado</option>
      <option value="Personalizado departamental">Personalizado departamental</option>
      <option value="Punto fijo">Punto fijo</option>
      <option value="Casillero departamental">Casillero departamental</option>
      <option value="Casillero San Salvador">Casillero San Salvador</option>
      <option value="Casillero San Miguel">Casillero San Miguel</option>
      <option value="Casillero Santa Ana">Casillero Santa Ana</option>
      <option value="Casillero centro logístico">Casillero centro logístico</option>
    </select>
                  <label for="floatingSelectAdmin">Tipo del envio</label>
                </div>
              </div>


                
              <div class="col-md-6">
                <div class="form-floating">
                <input class="form-control datetimepicker" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' id="basic-form-dob" type="date" tabindex="12" />
                  <label for="floatingInputBudget">Fecha de entrega </label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                <textarea class="form-control" id="exampleTextarea" rows="3" tabindex="13"> </textarea>
                  <label for="floatingInputBudget">Nota</label>
                </div>
              </div>

             

             
              <div class="col-12 ">
                <div class="row g-3 justify-content-end">
                  <div class="col-auto">
                    <button class="btn btn-phoenix-primary px-5" tabindex="14">Cancelar</button>
                  </div>
                  <div class="col-auto">
                    <button class="btn btn-primary px-5 px-sm-15" tabindex="15">Guardar</button>
                  </div>

                </div>
              </div>
            </form>
          </div>
      </div>
          
      </div> 

          <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="p-3 rounded">


  <div class="col-xl-12">
            <form class="row g-3 mb-12">
              <h1>Punto fijo</h1>
              <div class="col-sm-12 col-md-12">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Comercio</label>
                </div>
              </div>
              <div class="col-sm-12 col-md-12">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Destinatario </label>
                </div>
              </div>
              
              <div class="col-sm-6 col-md-8">
              <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Direccion </label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
              <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Telefono </label>
                </div>
              </div>
              
             
              <div class="col-md-6 gy-6">
              <div class="form-floating">
                  <input class="form-control" id="costo" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Costo del envio </label>
                </div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="precio" type="text" placeholder="Budget">
                  <label for="floatingInputBudget">Precio del paquete</label>
                </div>
              </div>
              
              <div class="col-md-6 gy-6">
              <div class="form-floating">
                  <input class="form-control" id="envio" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">precio del envio </label>
                </div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="total" type="text" placeholder="Budget">
                  <label for="floatingInputBudget">Total a pagar</label>
                </div>
              </div>






              <div class="col-sm-6 col-md-6">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectAdmin">
                  <option value="Entregado">Entregado</option>
                    <option value="Creado" >Creado</option>
                <option value="En ruta">En ruta</option>
                <option value="Nr devuelto al comercio">Nr devuelto al comercio</option>
                <option value="Reprogramado">Reprogramado</option>
                <option value="Agencia San Salvador">Agencia San Salvador</option>
                <option value="Agencia San Miguel">Agencia San Miguel</option>
                <option value="Agencia Santa Ana">Agencia Santa Ana</option>
                <option value="No retirado">No retirado</option>
                <option value="No retirado agencia San Salvador">No retirado agencia San Salvador</option>
                <option value="No retirado agencia San Miguel">No retirado agencia San Miguel</option>
                <option value="No retirado agencia Santa Ana">No retirado agencia Santa Ana</option>
                <option value="No retirado Centro logístico">No retirado Centro logístico</option>
                <option value="Casillero San Salvador">Casillero San Salvador</option>
                <option value="Casillero San Miguel">Casillero San Miguel</option>
                <option value="Casillero Santa Ana">Casillero Santa Ana</option>

                  </select>
                  <label for="floatingSelectAdmin">Estado del envio</label>
                </div>
              </div>

              <div class="col-sm-6 col-md-6">
                <div class="form-floating">
                <select id="pagado" name="pagado" class="form-select" id="floatingSelectAdmin">
                    <option value="Por pagar">Por pagar</option>
                    <option value="Pagado">Pagado</option>
                    <option value="Trans. a la empresa">Trans. a la empresa</option>
                    <option value="Trans. al comercio">Trans. al comercio</option>
            
                      </select>
                  <label for="floatingInputBudget">Estado del pago</label>
                </div>
              </div>
                            

              <div class="col-md-12 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="total" type="textarea" placeholder="Budget">
                  <label for="floatingInputBudget">Nota</label>
                </div>
              </div>
             

             
              <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                  <div class="col-auto">
                    <button class="btn btn-phoenix-primary px-5">Cancelar</button>
                  </div>
                  <div class="col-auto">
                    <button class="btn btn-primary px-5 px-sm-15">Guardar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          </div>

          </div> 
          <div class="tab-pane fade" id="tab-contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="p-3 rounded">


  <div class="col-xl-12">
            <form class="row g-3 mb-12">
              <h1>Casillero</h1>
              <div class="col-sm-12 col-md-12">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Comercio</label>
                </div>
              </div>
              <div class="col-sm-12 col-md-12">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Destinatario </label>
                </div>
              </div>
              
              <div class="col-sm-6 col-md-8">
              <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Direccion </label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
              <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Telefono </label>
                </div>
              </div>
              
             
              <div class="col-md-6 gy-6">
              <div class="form-floating">
                  <input class="form-control" id="costo" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Costo del envio </label>
                </div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="precio" type="text" placeholder="Budget">
                  <label for="floatingInputBudget">Precio del paquete</label>
                </div>
              </div>
              
              <div class="col-md-6 gy-6">
              <div class="form-floating">
                  <input class="form-control" id="envio" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">precio del envio </label>
                </div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="total" type="text" placeholder="Budget">
                  <label for="floatingInputBudget">Total a pagar</label>
                </div>
              </div>






              <div class="col-sm-6 col-md-6">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectAdmin">
                  <option value="Entregado">Entregado</option>
                    <option value="Creado" >Creado</option>
                <option value="En ruta">En ruta</option>
                <option value="Nr devuelto al comercio">Nr devuelto al comercio</option>
                <option value="Reprogramado">Reprogramado</option>
                <option value="Agencia San Salvador">Agencia San Salvador</option>
                <option value="Agencia San Miguel">Agencia San Miguel</option>
                <option value="Agencia Santa Ana">Agencia Santa Ana</option>
                <option value="No retirado">No retirado</option>
                <option value="No retirado agencia San Salvador">No retirado agencia San Salvador</option>
                <option value="No retirado agencia San Miguel">No retirado agencia San Miguel</option>
                <option value="No retirado agencia Santa Ana">No retirado agencia Santa Ana</option>
                <option value="No retirado Centro logístico">No retirado Centro logístico</option>
                <option value="Casillero San Salvador">Casillero San Salvador</option>
                <option value="Casillero San Miguel">Casillero San Miguel</option>
                <option value="Casillero Santa Ana">Casillero Santa Ana</option>

                  </select>
                  <label for="floatingSelectAdmin">Estado del envio</label>
                </div>
              </div>

              <div class="col-sm-6 col-md-6">
                <div class="form-floating">
                <select id="pagado" name="pagado" class="form-select" id="floatingSelectAdmin">
                    <option value="Por pagar">Por pagar</option>
                    <option value="Pagado">Pagado</option>
                    <option value="Trans. a la empresa">Trans. a la empresa</option>
                    <option value="Trans. al comercio">Trans. al comercio</option>
            
                      </select>
                  <label for="floatingInputBudget">Estado del pago</label>
                </div>
              </div>
                            

              <div class="col-md-12 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="total" type="textarea" placeholder="Budget">
                  <label for="floatingInputBudget">Nota</label>
                </div>
              </div>
             

             
              <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                  <div class="col-auto">
                    <button class="btn btn-phoenix-primary px-5">Cancelar</button>
                  </div>
                  <div class="col-auto">
                    <button class="btn btn-primary px-5 px-sm-15">Guardar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>



          </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.3/jquery.inputmask.bundle.min.js"></script>

 
<script>
  $(document).ready(function(){
  
 /* $(":input").inputmask();*/
 Inputmask().mask(document.querySelectorAll("input"));
});
</script>
        
@endsection