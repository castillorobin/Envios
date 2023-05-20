<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
    <i class="fas fa-home"></i><span>Inicio</span>
    </a>
    @can('ver-rol')
     <a class="nav-link" href="/usuarios">
    <i class="fas fa-users"></i><span>Usuarios</span>
    </a>
    @endcan
    @can('ver-rol')
    <a class="nav-link" href="/roles">
    <i class="fas fa-user-tag"></i><span>Roles</span>
    </a>
    @endcan
    <a class="nav-link" href="/recolecta">
    <i class="fas fa-archive"></i><span>Recolectas</span>
    </a>

</li>


