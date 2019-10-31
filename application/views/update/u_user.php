 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form id="LoginValidation" action="<?php echo base_url('User/update') ?>" method="POST">
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">contacts</i>
              </div>
              <h4 class="card-title">Tambah Data User</h4>
            </div>
            <div class="card-body ">
              <?php foreach ($data->result() as $key) { ?>
              <div class="form-group">
                <div class="form-group">
                <span>Nama Karyawan</span>
                <input type="hidden" name="idf" value="<?php echo $key->idUser ?>">
                <input type="text" class="form-control" disabled id="examplePasswords" required="true" name="asd" value="<?php echo $key->nama ?>" >
                </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Username *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="asd" value="<?php echo $key->username ?>">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Password *</label>
                <input type="password" class="form-control" id="examplePasswords" name="password">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Kategori User *</label>
                <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="kategori" required="">
                  <option>Pilih Kategori</option>
                  <option value="public">Public</option>
                  <option value="karyawan">Karyawan</option>
                  <option value="service">Service</option>
                </select>
              </div>
              <div class="category form-category">* Required fields</div>
            </div>
            <?php } ?>
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