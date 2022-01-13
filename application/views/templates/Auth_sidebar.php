 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">OSIS SMK NU</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('auth/beranda')?>">
        <i class="fas fa-home"></i>
        <span>dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('auth/home5')?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Admin</span></a>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('auth/home')?>">
        <i class="fas fa-fw fa-handshake"></i>
        <span>Jabatan</span></a>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('Auth/home1')?>">
        <i class="fas fa-fw fa-male"></i>
        <span>anggota</span></a>

      
  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('Auth/home3')?>">
        <i class="fas fa-fw fa-male"></i>
        <span>masa khidmat</span></a>

      

      


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?=base_url('auth/')?>">
            <i class="fas fa-sign-out-alt text-gray-400"></i>
            <span>Logout</span>
        </a>
    </div>
</li>

</ul>

</nav>
<!-- End of Topbar -->


