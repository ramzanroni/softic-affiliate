<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    @if (Auth::user()->id==1)
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin/dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Affiate</div>
    </a>
    @else
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('affilate')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Affiate</div>
    </a>
    @endif
    

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

   
    @if (Auth::user()->role_as=='1')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>General Users</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('affilate-users') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Affiliation Users</span></a>
    </li>
    @endif
    @if (Auth::user()->role_as=='2')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('refer') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Refers</span></a>
    </li>
    @endif
    <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-fw fa-chart-area"></i>
                {{ __('Logout') }}<span>({{ Auth::user()->name }})</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->