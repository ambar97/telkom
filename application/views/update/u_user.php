 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form id="LoginValidation" action="<?php echo base_url('User/insertD') ?>" method="POST">
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">contacts</i>
              </div>
              <h4 class="card-title">Tambah Data User</h4>
            </div>
            <div class="card-body ">
              <div class="form-group">
                <span>Nama Karyawan</span>
                <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="karyawan">
                  <option class="disable">Pilih Karyawan</option>
                  <?php foreach ($karyawan->result() as $key): ?>
                    <option value="<?php echo $key->id_karyawan ?>"><?php echo $key->nama ?></option>
                  <?php endforeach ?>
                </select>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Username *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="asd">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Password *</label>
                <input type="password" class="form-control" id="examplePasswords" required="true" name="password">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Kategori User *</label>
                <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="kategori">
                  <option>Pilih Kategori</option>
                  <option value="public">Public</option>
                  <option value="karyawan">Karyawan</option>
                  <option value="service">Service</option>
                </select>
              </div>
              <div class="category form-category">* Required fields</div>
            </div>
            <div class="card-footer ml-auto" style="float: right;">
              <button type="submit" class="btn btn-rose" >Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('side/rightside') ?>
<?php $this->load->view('side/js') ?>