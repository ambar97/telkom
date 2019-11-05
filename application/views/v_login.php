 <?php $this->load->view("side/head"); ?>
 <body class="off-canvas-sidebar">
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="100%" width="100%" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="white" style="background-image: url('<?php echo base_url()?>bglgn.png'); background-size: cover; background-position: top center; background-attachment: fixed;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">

            <div class="card card-login card-hidden">
              <div class="card-header card-header-rose text-center">
                <h4 class="card-title">Login</h4>
                TELKOM INDONESIA
              </div>
              <div class="card-body ">
                <p class="card-description text-center">Masuk Disini</p>
                <form class="form" method="POST" action="<?php echo base_url('Login/aksi_login') ?>">
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" required="" placeholder="First Name..." name="username">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" required="" placeholder="Password..." name="password" id="pass">
                    </div>
                    <div style="margin-left: 55px;">
                      <input type="checkbox" id="show-pass" name="show-pass"/>
                      <label for="show-pass">Show password</label>
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-rose btn-link btn-lg">LOGIN</button>
                  <!-- <a href="" type="submit" class="">Lets Go</a> -->
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php $this->load->view("side/footer"); ?>
      <script>
(function() {
    var _show = function( element, field ) {
        this.element = element;
        this.field = field;
        this.toggle();    
    };
    _show.prototype = {
        toggle: function() {
            var self = this;
            self.element.addEventListener( "change", function() {
                if( self.element.checked ) {
                    self.field.setAttribute( "type", "text" );
                } else {
                    self.field.setAttribute( "type", "password" );    
                }
            }, false);
        }
    };
    
    document.addEventListener( "DOMContentLoaded", function() {
        var checkbox = document.querySelector( "#show-pass" ),
            pass = document.querySelector( "#pass" ),
            _form = document.querySelector( "form" );
            var toggler = new _show( checkbox, pass );
    });
})();
</script>
      <?php $this->load->view("side/js"); ?>
      <?php if ($this->session->flashdata()) { ?>
        <?php echo $this->session->flashdata('Pesan'); ?>                   
        <?php } ?>