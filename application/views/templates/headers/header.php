  <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-info">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="<?= base_url() ?>" class="navbar-brand text-lt">          
          <img src="<?= base_url() ?>assets/bdgwebkit/img/logo-small.png" alt="." class="small-logo hide">
          <img src="<?= base_url() ?>assets/NLEC_logo.jpg" alt="." class="large-logo">
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse bg-info">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
                  
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li>
            <a href="<?= base_url() ?>">SISWA</a>
          </li>
          <li>
            <a href="<?= base_url('pengajar') ?>">PENGAJAR</a>
          </li>
          <li>
            <a href="<?= base_url('kelas') ?>">KELAS</a>
          </li>
          <li>
            <a href="<?= base_url('presensi') ?>">PRESENSI PENGAJAR</a>
          </li>
          <li>
            <a href="<?= base_url('penggajian') ?>">PENGGAJIAN</a>
          </li>
        </ul>
        <!-- / link and dropdown -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="<?= base_url('admin/signout') ?>">KELUAR</a>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->