<nav class="navbar navbar-vertical navbar-expand-lg">
        <script>
          var navbarStyle = window.config.config.phoenixNavbarStyle;
          if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
          }
        </script>
       
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <!-- scrollbar removed-->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
              <li class="nav-item">
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link " href="/home" role="button" aria-controls="nv-home">
                    <div class="d-flex align-items-center">
                      <div > </div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></span><span class="nav-link-text">Inicio</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" >
                      <li class="d-none"><a class="nav-link active" href="/home" data-bs-toggle="" aria-expanded="false">Inicio</a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </li>

              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Digitador
                </p>
                <hr class="navbar-vertical-line">
                <!-- parent pages-->
                
                
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1 collapsed" href="#nv-project-management" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-project-management">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><svg class="svg-inline--fa fa-caret-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z"></path></svg><!-- <span class="fas fa-caret-right"></span> Font Awesome fontawesome.com --></div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg></span><span class="nav-link-text">Gestion de Pedidos</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav parent collapse" data-bs-parent="#navbarVerticalCollapse" id="nv-project-management" style="">
                      <li class="collapsed-nav-item-title d-none">Gestion de Pedidos
                      </li>
                      <li class="nav-item"><a class="nav-link " href="/pedido/crearp" data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Crear pedido</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="/pedido/indexdigitado" data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Lista de pedidos</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../../apps/project-management/project-card-view.html" data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Estado de pedido</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      
                    </ul>
                  </div>
                </div>
                <!-- parent pages-->
                
                <!-- parent pages-->
                
                <!-- parent pages-->
                
                <!-- parent pages-->
                
                <!-- parent pages-->
                
                <!-- parent pages-->
                
              </li>
              
              
              
            </ul>

                
                
          </div>
          </div>