
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
    
     <a class="nav-link" href="/repartir">
     <i class="fas fa-truck"></i><span>Repartidores</span>
    </a>
    </li>
    <li>
    
     <a class="nav-link" href="/facturas">
     <i class="fas fa-file-invoice"></i><span>Facturación</span>
    </a>
    </li>

    <li>
    @can('ver-rol')
     <a class="nav-link" href="/usuarios">
    <i class="fas fa-users"></i><span>Usuarios</span>
    </a>
    </li>
    @endcan
    <li>
 
    @can('ver-rol')
    <a class="nav-link" href="/roles">
    <i class="fas fa-user-tag"></i><span>Roles</span>
    </a>
    @endcan
   

</li>



    