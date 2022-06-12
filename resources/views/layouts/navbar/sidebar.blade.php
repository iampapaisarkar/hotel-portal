<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('images/logo.png')}}" class="w-100"/>
        </div>
        <div class="sidebar-brand-text mx-3">HOTELS <sup>Portal</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>


    <!-- Nav Item - Tables -->
    @if(Auth::user()->hasRole(['admin']))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('agents.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Agents</span></a>
    </li>
    @endif

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('hotels.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Hotels</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('restaurants.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Restaurants</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>

<style>
    .bg-gradient-primary {
        background-color: #ef7c1d;
        background-image: linear-gradient(180deg,#ed7a1b 10%,#ec791c 100%);
        background-size: cover;
    }
</style>