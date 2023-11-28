
@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>


<script>

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


    function redireccionarPagina(){
    window.setTimeout( abrirURL, 2000 ); // 3 segundos
};
    
function abrirURL(){
    //Abrir URL que necesites
    //window.location = "http://127.0.0.1:8000/pedidos";
    window.location = "https://appmeloexpress.com/pedido/crearp";
};
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {
 
}

input[type="date"]::-webkit-calendar-picker-indicator {
        display: block;
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }
.select2-selection{
  height: 35px !important;
 
}
</style>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
   $('.js-example-basic-single').select2({
 placeholder: "Busca alguno de tus lugares",
 });
</script>
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
                    

														//const castot = parseFloat(document.getElementById("totalc").value);
														//document.getElementById("ptotal").value = castot ; 

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
                    

														//const castot = parseFloat(document.getElementById("totalc").value);
														//document.getElementById("ptotal").value = castot ; 

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
                    

														//const castot = parseFloat(document.getElementById("totalc").value);
														//document.getElementById("ptotal").value = castot ; 

    				});
              
                                            });
  

  
</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>  
jQuery(document).ready(function($){
    $(document).ready(function() {
        $('.mi-selector').select2({
          maximumSelectionLength: 1
        });
        $('.mi-selector1').select2({
          maximumSelectionLength: 1
        });
        
    });
});
</script>

<script>
  $(document).ready(function() {
  $("input").focusout(function() {
    var value = $(this).val();
    if (value.length == 0) {
      $(this).addClass("is-invalid");
      $(this).removeClass("is-valid");
    } else {
      $(this).removeClass("is-invalid");
      $(this).addClass("is-valid");
    }
    /*
           
    */
    console.log('Este campo es obligatorio');
  });
});

$(document).ready(function() {
  $("select").focusout(function() {
    var value = $(this).val();
    if (value.length == 0) {
      $(this).addClass("is-invalid");
      $(this).removeClass("is-valid");
    } else {
      $(this).removeClass("is-invalid");
      $(this).addClass("is-valid");
    }
    /*
           
    */
    console.log('Este campo es obligatorio');
  });
});
</script>

<!--  
Inicia nuevo formulario
-->

<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Crear Envio</h3>
    </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">

                <ul class="nav nav-underline" id="myTab" role="tablist">
  <li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">Personalizado</a></li>
  <li class="nav-item"><a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false">Punto Fijo</a></li>
  <li class="nav-item"><a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab-contact" role="tab" aria-controls="tab-contact" aria-selected="false">Casillero</a></li>
</ul>

<div class="tab-content mt-3" id="myTabContent">

<div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
  <div class="border p-3 rounded">


                  
                        
                    <div class="col-xl-12">
            <form class="row g-3 mb-12">
              <h1>Personalizado</h1>
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
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Costo del envio </label>
                </div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputBudget" type="text" placeholder="Budget">
                  <label for="floatingInputBudget">Precio del paquete</label>
                </div>
              </div>
              
              <div class="col-md-6 gy-6">
              <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Costo del envio </label>
                </div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputBudget" type="text" placeholder="Budget">
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

          <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="border p-3 rounded">


                  
                        
                    <div class="col-xl-12">
            <form class="row g-3 mb-12">
            <h1>Punto Fijo</h1>
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
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Costo del envio </label>
                </div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputBudget" type="text" placeholder="Budget">
                  <label for="floatingInputBudget">Precio del paquete</label>
                </div>
              </div>
              
              <div class="col-md-6 gy-6">
              <div class="form-floating">
                  <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title">
                  <label for="floatingInputGrid">Costo del envio </label>
                </div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputBudget" type="text" placeholder="Budget">
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


</div>
</div>
</div>
</div>
</div>




<!--  
Terminad nuevo formulario
-->




                                        

   

   



<br>
<p></p>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.3/jquery.inputmask.bundle.min.js"></script>


   
 
<script>
  $(document).ready(function(){
  
 /* $(":input").inputmask();*/
 Inputmask().mask(document.querySelectorAll("input"));
});
</script>

</div>
                    </div>
                </div> 
            </div>
        </div>
    </section>    
@endsection
