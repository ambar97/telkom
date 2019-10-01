 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form id="LoginValidation" action="#" method="">
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
                <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="jabatan_k">
                  
                  <option class="disable">Pilih Karyawan</option>
                  <?php foreach ($karyawan->result() as $key): ?>
                    <optgroup><?php echo $key->nama ?></optgroup>
                  <?php endforeach ?>
                </select>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Posisi Kerja *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="password">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Shift Kerja *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="password">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Alamat *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="password">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> No Telp *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="password">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> e-mail *</label>
                <input type="email" class="form-control" id="examplePasswords" required="true" name="password">
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