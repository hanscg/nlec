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
          <img src="<?= base_url() ?>assets/NLEC_logo.jpg" alt=".">
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
            <a href="<?= base_url() ?>">NILAI</a>
          </li>
          <li>
            <a href="<?= base_url() ?>">PENGGAJIAN</a>
          </li>
        </ul>
        <!-- / link and dropdown -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bdg_search text14"></i>              
            </a>
            <!-- dropdown -->
             <div class="search_wrapper pull-right w-xl animated fadeIn">
              <form action="<?= base_url('cari_diklat') ?>" method="GET">
                <i class="pull-left glyphicon glyphicon-search"></i>
                  <input type="text" name="q" class="pull-left" placeholder="Type Here">
                <a href="#" class="remove-search"><i class="pull-right icon-bdg_cross"></i></a>
              </form>
            </div>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->


<!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="<?= base_url() ?>assets/bdgwebkit/img/01.jpg" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li>
                  <a href>Settings</a>
                </li>
                <li>
                  <a href="page_profile.html">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="page_signin.html">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->
         <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded m-t text-dark-grey text-xs padder-md padder-v-sm">
                <span>Presensi pengajar</span>
              </li>
              <!-- <li class="active"> -->
              <li>
                <a href="<?= base_url('presensi/') ?>" class="auto">
                  <i class="fa fa-folder-open"></i>
                  <span class="font-bold">Isi presensi</span>
                </a>
              </li>
          </ul>
        </nav>
      <!-- nav -->
    </div>
  </div>
</aside>
<!-- / aside -->