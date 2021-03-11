<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="<?=site_url('dashboard');?>"><small><?=NAMA_WEB;?></small></a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

  </form>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"><small></i><?=$this->session->userdata('full_name');?></small>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <?php
        if($this->session->userdata('username') == 'admin'){
          echo '<a class="dropdown-item" href="'.base_url('manage').'">Manage Account</a>';
          echo '<div class="dropdown-divider"></div>';
        }
        ?>
        <a class="dropdown-item" href="<?=base_url('logout');?>">Logout</a>
      </div>
    </li>
  </ul>

</nav>