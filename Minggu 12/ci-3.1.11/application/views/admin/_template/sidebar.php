<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if(strtolower(uri_string())=='admin') echo "active"; ?>">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php if(strtolower(uri_string())=='admin/tabel/grup'||strtolower(uri_string())=='admin/tabel/user') echo "active"; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-table"></i>
            <span>Tabel</span>
        </a>
        <div id="collapsePages" class="collapse <?php if(strtolower(uri_string())=='admin/tabel/grup'||strtolower(uri_string())=='admin/tabel/user') echo "show"; ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kelola Tabel:</h6>
                <a class="collapse-item <?php if(strtolower(uri_string())=='admin/tabel/grup') echo "active"; ?>" href="<?= base_url('admin/tabel/grup'); ?>">Grup</a>
                <a class="collapse-item <?php if(strtolower(uri_string())=='admin/tabel/user') echo "active"; ?>" href="<?= base_url('admin/tabel/user'); ?>">User</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>