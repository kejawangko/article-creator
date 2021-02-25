<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center text-red" href="{{ url('admin-panel') }}">
        <div class="sidebar-brand-text mx-3 text-red">Dashboard Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item {{ Request::is('articles') || Request::is('articles/*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('articles') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Article</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->