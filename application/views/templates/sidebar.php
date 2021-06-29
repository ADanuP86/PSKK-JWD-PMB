<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Siswa</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?=$this->uri->segment(2) == 'index' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?> class="nav-item">
          <a href="<?php echo base_url('C_siswa/index') ?>" class="nav-link">
            <i class="fa fa-dashboard"></i> <span>Pendaftaran Siswa</span>
          </a>
        </li>
         <li <?=$this->uri->segment(2) == 'detail' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?> class="nav-item">
          <a href="<?php echo base_url('C_siswa/detail') ?>" class="nav-link">
            <i class="fa fa-file"></i> <span>Detail Data Siswa</span>
          </a>
        </li>
         <li <?=$this->uri->segment(2) == 'logout' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?> class="nav-item">
          <a onclick="javascript: return confirm('Yakin Ingin Keluar?')" href="<?php echo base_url('C_login/logout') ?>" class="nav-link">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
