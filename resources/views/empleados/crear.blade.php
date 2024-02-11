@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Empleado</h3>
        </div>
      

        <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
                    <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
                      <ul class="nav justify-content-between nav-wizard" role="tablist">
                      <li class="nav-item" role="presentation"><a class="nav-link active fw-semibold" href="#bootstrap-wizard-validation-tab1" data-bs-toggle="tab" data-wizard-step="1" aria-selected="true" role="tab">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-users" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M320 288c88.37 0 160-71.63 160-160S408.4 0 320 0 160 71.63 160 160s71.63 160 160 160zm0 64c-48.6 0-92.71 19.88-124.2 51.97C163.7 426.2 192.4 448 224 448h192c31.57 0 60.34-21.75 80.19-35.97C412.7 371.9 368.6 352 320 352zm0 96c-70.69 0-141.9 34.11-185.1 87.1-7.469 8.625-7.531 21.48 0 30.12 26.75 30.88 74.5 52.88 123.1 52.88h124.1c48.59 0 96.34-22 123.1-52.88 7.5-8.625 7.438-21.5 0-30.12C461.9 482.1 390.7 448 320 448z"></path><!-- <span class="fas fa-user"></span> Font Awesome fontawesome.com --></svg></span></span><span class="d-none d-md-block mt-1 fs-9">Usuarios</span></div>
                        </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab2" data-bs-toggle="tab" data-wizard-step="2" aria-selected="false" tabindex="-1" role="tab">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path></svg><!-- <span class="fas fa-user"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs-9">Personal</span></div>
                          </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab3" data-bs-toggle="tab" data-wizard-step="3" aria-selected="false" tabindex="-1" role="tab">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-file-lines" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-lines" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM272 416h-160C103.2 416 96 408.8 96 400C96 391.2 103.2 384 112 384h160c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 352h-160C103.2 352 96 344.8 96 336C96 327.2 103.2 320 112 320h160c8.836 0 16 7.162 16 16C288 344.8 280.8 352 272 352zM288 272C288 280.8 280.8 288 272 288h-160C103.2 288 96 280.8 96 272C96 263.2 103.2 256 112 256h160C280.8 256 288 263.2 288 272z"></path></svg><!-- <span class="fas fa-file-alt"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs-9">Billing</span></div>
                          </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab4" data-bs-toggle="tab" data-wizard-step="4" aria-selected="false" tabindex="-1" role="tab">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path></svg><!-- <span class="fas fa-check"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs-9">Done</span></div>
                          </a></li>
                      </ul>
                    </div>
                     <!-- Form de datos de usuarios -->
                    <div class="card-body pt-4 pb-0">
                      <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                          <form class="needs-validation was-validated" id="wizardValidationForm1" novalidate="novalidate" data-wizard-form="1">
                            <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard-name">Nombre</label><input class="form-control" type="text" name="name" placeholder="Nombre" required="required" id="bootstrap-wizard-validation-wizard-name" wfd-id="id19">
                              <div class="invalid-feedback">Por favor introduzca su nombre de usuario</div>
                            </div>
                            <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-wizard-email">Correo Electronico</label><input class="form-control" type="email" name="email" placeholder="Correo Electronico" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required" id="bootstrap-wizard-validation-wizard-email" wfd-id="id20">
                              <div class="invalid-feedback">Por favor agregue su correo electronico</div>
                            </div>
                            <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                <div class="mb-2 mb-sm-0"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard-password">Contraseña</label><input class="form-control" type="password" name="password" placeholder="Password" required="required" id="bootstrap-wizard-validation-wizard-password" data-wizard-password="true" wfd-id="id21">
                                  <div class="invalid-feedback">Por favor introduzca la contraseña</div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard-confirm-password">Confirme contraseña</label><input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password" required="required" id="bootstrap-wizard-validation-wizard-confirm-password" data-wizard-confirm-password="true" wfd-id="id22">
                                  <div class="invalid-feedback">Las contraseñas deben coincidir</div>
                                </div>
                              </div>
                            </div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="terms" required="required" checked="checked" id="bootstrap-wizard-validation-wizard-checkbox" wfd-id="id23"><label class="form-check-label text-body" for="bootstrap-wizard-validation-wizard-checkbox">Acepto los <a href="#!">termeminos </a>y <a href="#!">política de privacidad</a></label></div>
                          </form>
                        </div>
                        <!-- Form de Datos personales -->
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
                            <form class="needs-validation" id="wizardValidationForm2" novalidate="novalidate" data-wizard-form="2">
                                <div class="row mb-4">
                                    <div class="col-md">
                                        <div class="input-group">
                                            <input type="file" class="form-control d-none" accept="image/jpeg, image/png" name="photo" id="photo-upload">
                                            <label for="photo-upload" class="input-group-text w-100 bg-dark text-black d-flex justify-content-center align-items-center">
                                                <i class="fas fa-upload me-2"></i> Subir Foto
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md">
                                        <div class="mb-2">
                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-phone">Teléfono</label>
                                            <input class="form-control" type="text" name="phone" placeholder="Teléfono" id="bootstrap-wizard-validation-wizard-phone" required="required">
                                            <div class="invalid-feedback">Este campo es obligatorio.</div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="mb-2">
                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-phone">WhatsApp</label>
                                            <input class="form-control" type="text" name="phone" placeholder="WhatsApp" id="bootstrap-wizard-validation-wizard-phone" required="required">
                                            <div class="invalid-feedback">Este campo es obligatorio.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md">
                                        <div class="mb-2">
                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-datepicker">Fecha de Nacimiento</label>
                                            <input class="form-control datetimepicker flatpickr-input" type="text" placeholder="d/m/y" data-options="{&quot;dateFormat&quot;:&quot;d/m/y&quot;,&quot;disableMobile&quot;:true}" required="required" id="bootstrap-wizard-validation-wizard-datepicker" readonly="readonly">
                                            <div class="invalid-feedback">Este campo es obligatorio.</div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="mb-2">
                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-dui">DUI</label>
                                            <input class="form-control" type="text" name="dui" placeholder="DUI" id="bootstrap-wizard-validation-wizard-dui" required="required">
                                            <div class="invalid-feedback">Este campo es obligatorio.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="bootstrap-wizard-validation-wizard-address">Dirección</label>
                                    <textarea class="form-control" rows="4" id="bootstrap-wizard-validation-wizard-address" required="required"></textarea>
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </form>
                        </div>
                         <!-- Form de Datos personales -->
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab3" id="bootstrap-wizard-validation-tab3">
                            <form class="mb-2 needs-validation" id="wizardValidationForm3" novalidate="novalidate" data-wizard-form="3">
                                <div class="row gx-3 gy-2">
                                    <div class="col-6">
                                        <label class="form-label" for="cargo">Cargo</label>
                                        <input class="form-control" type="text" id="cargo" placeholder="cargo" required>
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="fecha-alta">Fecha de Alta</label>
                                        <input class="form-control" type="text" id="fecha-alta" placeholder="Fecha de alta" required>
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="n-isss">Nº de ISSS</label>
                                        <input class="form-control" type="text" id="n-isss" placeholder="N de isss" required>
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="n-afp">Nº de AFP</label>
                                        <input class="form-control" type="text" id="n-afp" placeholder="N de afp" required>
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="agencia-registro">Agencia de Registro</label>
                                        <input class="form-control" type="text" id="agencia-registro" placeholder="Agencia de registro" required>
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="descripcion">Descripción</label>
                                        <textarea class="form-control" rows="4" id="descripcion" required></textarea>
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Form parte final-->
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab4" id="bootstrap-wizard-validation-tab4">
                          <div class="row flex-center pb-8 pt-4 gx-3 gy-4">
                            <div class="col-12 col-sm-auto">
                              <div class="text-center text-sm-start"><img class="d-dark-none" src="../../assets/img/spot-illustrations/38.webp" alt="" width="220"><img class="d-light-none" src="../../assets/img/spot-illustrations/dark_38.webp" alt="" width="220"></div>
                            </div>
                            <div class="col-12 col-sm-auto">
                              <div class="text-center text-sm-start">
                                <h5 class="mb-3">¡Estás Registrado!</h5>
                                <p class="text-body-emphasis fs-9">Ahora puedes revisar tus datos en empleados<br>En cualquier momento</p><a class="btn btn-primary px-6" href="/empleados">Regresar a empleados</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer border-top-0" data-wizard-footer="data-wizard-footer">
                      <div class="d-flex pager wizard list-inline mb-0"><button class="d-none btn btn-link ps-0" type="button" data-wizard-prev-btn="data-wizard-prev-btn"><svg class="svg-inline--fa fa-chevron-left me-1" data-fa-transform="shrink-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5em;"><g transform="translate(160 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z" transform="translate(-160 -256)"></path></g></g></svg><!-- <span class="fas fa-chevron-left me-1" data-fa-transform="shrink-3"></span> Font Awesome fontawesome.com -->Previous</button>
                        <div class="flex-1 text-end"><button class="btn btn-primary px-6 px-sm-6" type="submit" data-wizard-next-btn="data-wizard-next-btn">Next<svg class="svg-inline--fa fa-chevron-right ms-1" data-fa-transform="shrink-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5em;"><g transform="translate(160 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" transform="translate(-160 -256)"></path></g></g></svg><!-- <span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-3"> </span> Font Awesome fontawesome.com --></button></div>
                      </div>
                    </div>
                  </div>
                
   
@endsection