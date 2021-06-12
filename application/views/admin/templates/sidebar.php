<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url(''); ?>" class="brand-link">
    <img src="<?= base_url('assets/img/logo-transparent.png'); ?>" alt="AdminLTE Logo" class="brand-image">
    <span class="brand-text font-weight-bold">Breakpoint</span> Admin
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/img/avatar.png'); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $this->session->userdata('username'); ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-3 pb-3 mb-3">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Sidebar Item -->
        <li class="nav-item">
          <a href="<?= base_url('dashboard'); ?>" class="nav-link <?= ($title == 'Dashboard') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('activity'); ?>" class="nav-link <?= ($title == 'Admin Activity') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-fw fa-user-shield"></i>
            <p>
              Admin Activity
            </p>
          </a>
        </li>
        <li class="nav-header">ADMINISTRATOR</li>
        <li class="nav-item">
          <a href="<?= base_url('shortenlink'); ?>" class="nav-link <?= ($title == 'Shorten Link') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-fw fa-link"></i>
            <p>
              Shorten Link
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('pricelist'); ?>" class="nav-link <?= ($title == 'Pricelist') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-fw fa-money-check-alt"></i>
            <p>
              Pricelist
            </p>
          </a>
        </li>
        <!-- End of Sidebar Item -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>