
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
    <i class="fas fa-home"></i><span>Inicio</span>
    </a>
    </li>
   
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-building "></i> Almacen
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/pedidos"><i class="fas fa-truck"></i> Envios</a>
          <a class="dropdown-item" href="/recolecta"><i class="fas fa-archive"></i>Recolectas</a>
          <a class="dropdown-item" href="/vendedores"><i class="fas fa-shopping-cart"></i> Comercios</a>
          <a class="dropdown-item" href="/repartidores"><i class="fas fa-user"></i> Empleados</a>
        </div>
      </li>

<li>
    
    </li>
    <li>
    
     <a class="nav-link" href="/estatus">
     <i class="fas fa-truck"></i><span>Cambiar Estado</span>
    </a>
    </li>
    
    <li>
  
     <a class="nav-link" href="/pedido/estado">
     <i class="fas fa-truck"></i><span>Repartidores</span>
    </a>
    </li>
    @can('crear-empleados')
    <li>
    
     <a class="nav-link" href="/facturas">
     <i class="fas fa-file-invoice"></i><span>Facturación</span>
    </a>
    </li>
    @endcan
    @can('crear-empleados')
    <li>
   
     <a class="nav-link" href="/reportes">
     <i class="fas fa-chart-line"></i><span>Reportes</span>
    </a>
    </li>
    @endcan
    @can('crear-rol')
    <li>
    
     <a class="nav-link" href="/usuarios">
    <i class="fas fa-users"></i><span>Usuarios</span>
    </a>
    </li>
    @endcan
    @can('crear-rol')
    <li>
    <a class="nav-link" href="/roles">
    <i class="fas fa-user-tag"></i><span>Roles</span>
    </a>
    </li>
    @endcan


    