<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admin/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-truck mr-2"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> {{ env('APP_NAME') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>



    <li class="nav-item  {{ request()->is('admin/users') ? 'active' : '' }}">
        <a class="nav-link " href="{{ url('admin/users') }}">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            <span>Users </span></a>
    </li>



    <li class="nav-item  {{ request()->is('admin/category') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('category') }}">
            <i class="fa-brands fa-buromobelexperte"></i>
            <span>Categories</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/weight') ? 'active' : '' }} ">
        <a class="nav-link" href="{{ route('weight') }}">
            <i class="fa-solid fa-weight-scale"></i>
            <span>Weight</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/booking') ? 'active' : '' }} ">
        <a class="nav-link" href="{{ route('admin.booking') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Booking</span></a>
    </li>


    <li class="nav-item  {{ request()->is('admin/rider') ? 'active' : '' }} ">
        <a class="nav-link" href="{{ route('rider') }}">
            <i class="fa-solid fa-user"></i>
            <span>Delivery Man</span></a>
    </li>
    <li class="nav-item  {{ request()->is('admin/location') ? 'active' : '' }} ">
        <a class="nav-link" href="{{ route('location') }}">
            <i class="fa-solid fa-location-dot"></i>
            <span>Location</span></a>
    </li>

    <li class="nav-item  {{ request()->is('admin/report') ? 'active' : '' }} ">
        <a class="nav-link" href="{{route('report')}}">
            <i class="fa-regular fa-flag"></i>
            <span>Report</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">

    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Utilities Collapse Menu -->


 

    <!-- Heading -->
    <div class="sidebar-heading">

    </div>

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Charts -->




    <!-- Sidebar Toggler (Sidebar) -->


    <!-- Sidebar Message -->


</ul>
