<?php 
use App\Models\UserRole;

    $user_role = UserRole::where('user_id', auth()->user()->id)->first();
    // dd($user_role->role->nama_role);
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rental Mobil</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('dashboard-active')">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item @yield('rental-mobil-active')">
        <a class="nav-link" href="{{route('rental-mobil.index')}}">
            <i class="fas fa-fw fa-car"></i>
            <span>Mobil</span></a>
    </li>
    <li class="nav-item @yield('transaksi-active')">
        <a class="nav-link" href="{{route('transaksi.index')}}">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>Transaksi</span></a>
    </li>
    @if ($user_role->role->nama_role == 'Admin')
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse @yield('master-data-show')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">master data:</h6>
                <a class="collapse-item @yield('merk-mobil-active')" href="{{route('merk-mobil.index')}}">Kategori</a>
                <a class="collapse-item @yield('mobil-active')" href="{{route('mobil.index')}}">Mobil</a>
                
            </div>
        </div>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Tables -->
    
        <li class="nav-item @yield('users-active')">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>User</span></a>
        </li>
    @endif


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>