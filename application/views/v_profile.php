 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">Edit Profile
                    <!-- <small class="category">Complete your profile</small> -->
                  </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <?php foreach ($nama->result() as $key): ?>
                          <input type="text" class="form-control" value="<?php echo $key->username ?>" disabled>
                          <?php endforeach ?>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control" value="*****" disabled="">
                        </div>
                      </div>
                    </div>
                    <h4>Perbarui Username </h4>
                    <form method="POST" action="<?php echo base_url('Profile/ubhUser') ?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username Baru</label>
                          <input type="text" class="form-control" required="" name="username">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password Lama</label>
                          <input type="password" class="form-control" required="" name="password">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-rose pull-right">Update Username</button>
                    </form>
                    <div class="clearfix"></div>
                    <hr>
                    <h4>Perbarui Password </h4>
                    <form method="POST" action="<?php echo base_url('Profile/ubhPsw') ?>">
                    <!-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password Lama</label>
                          <input type="password" class="form-control" name="pswku" required="">
                        </div>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password Baru</label>
                          <input type="password" class="form-control"  id="pw1" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ulangi Password Baru</label>
                          <input type="password" class="form-control" name="pswny" id="pw2" required="">
                        </div>
                      </div>
                    </div>
                    <p><i style="font-weight: bold;">*</i> Passtikan anda mengingat password baru yang anda buat</p>
                    <button type="submit" class="btn btn-rose pull-right">Update Password</button>
                    </form>
                    <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="<?php echo base_url() ?>master/assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Admin Telkom</h6>
                  <h4 class="card-title">Nama Admin</h4>
                  <p class="card-description">
                    Deskripsi admin disini
                  </p>
                  <!-- <a href="#pablo" class="btn btn-rose btn-round">Follow</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php $this->load->view("side/footer"); ?>
  <script type="text/javascript">
    window.onload = function () {
        document.getElementById("pw1").onchange = validatePassword;
        document.getElementById("pw2").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("pw2").value;
    var pass1=document.getElementById("pw1").value;
    if(pass1!=pass2)
        document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("pw2").setCustomValidity('');
    }
</script>
 <?php $this->load->view("side/js"); ?>
 <?php if ($this->session->flashdata()) { ?>
                        <?php echo $this->session->flashdata('Pesan'); ?>                   
                    <?php } ?>