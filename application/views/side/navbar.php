<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="brown" data-image="<?php echo base_url()?>master/assets/img/bg.jpg">
      <div class="logo">
        <a href="<?php echo base_url() ?>" class="simple-text logo-normal">
          <img style="height: 70px; width: 100px" src="<?php echo base_url()?>master/assets/img/logo.png" />
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if ($this->uri->segment('1')=='' || $this->uri->segment('1')=='Home' ) : ?>
              active
          <?php endif ?>">
            <a class="nav-link" href="<?php echo base_url() ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php if ($this->uri->segment('1')=='User'): ?>
              active
          <?php endif ?>">
            <a class="nav-link" href="<?php echo base_url('User') ?>">
              <i class="material-icons">person</i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item <?php if ($this->uri->segment('1')=='Karyawan'): ?>
              active
          <?php endif ?>">
            <a class="nav-link" href="<?php echo base_url('Karyawan') ?>">
              <i class="material-icons">content_paste</i>
              <p> Data Karyawan</p>
            </a>
            </li>
             <li class="nav-item <?php if ($this->uri->segment('1')=='DataHistory'): ?>
              active
          <?php endif ?>">
            <a class="nav-link" href="<?php echo base_url('DataHistory') ?>">
              <i class="material-icons">library_books</i>
              <p>Data History</p>
            </a> 
          </li>
          </li>
          <li class="nav-item <?php if ($this->uri->segment('1')=='DataRating'): ?>
              active
          <?php endif ?>">
            <a class="nav-link" href="<?php echo base_url('DataRating') ?>">
              <i class="material-icons">library_books</i>
              <p>Data Rating</p>
            </a>
          </li>
          <li class="nav-item <?php if ($this->uri->segment('1')=='DataPrimer'): ?>
              active
          <?php endif ?>">
            <a class="nav-link" href="<?php echo base_url('DataPrimer') ?>">
              <i class="material-icons">bubble_chart</i>
              <p>Data Primer</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('Maps') ?>">
              <i class="material-icons">location_ons</i>
              <p>Maps Telkom</p>
            </a>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a style="font-size: 28px; padding-left: 10px; " class="navbar-brand" href="<?php echo base_url() ?>">TELKOM YOGYAKARTA</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo base_url('Profile') ?>">Profile</a>
                  <!-- <a class="dropdown-item" href="#">Settings</a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('Login/logout') ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>