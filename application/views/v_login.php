 <?php $this->load->view("side/head"); ?>
 <body class="off-canvas-sidebar">
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('<?php echo base_url()?>bg.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="" action="#">
              <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Login</h4>
                  TELKOM INDONESIA
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">Masuk Disini</p>
                  <form method="POST" action="">
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="First Name..." name="username">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password..." name="password">
                    </div>
                  </span>
                  </form>
                </div>
                <div class="card-footer justify-content-center">
                  <a href="#pablo" class="btn btn-rose btn-link btn-lg">Lets Go</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php $this->load->view("side/footer"); ?>
      <?php $this->load->view("side/js"); ?>