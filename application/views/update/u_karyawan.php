 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form id="LoginValidation" action="<?php echo base_url('Karyawan/edit') ?>" method="post">
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">contacts</i>
              </div>
              <h4 class="card-title">Edit Data Karayawan</h4>
            </div>
            <div class="card-body ">
              <?php foreach ($datane->result() as $key): ?>
              <div class="form-group">
                <label for="exampleEmails" class="bmd-label-floating"> Nama Karyawan *</label>
                <input type="hidden" name="id_karyawan" value="<?php echo $key->id_karyawan ?>">
                <input type="text" class="form-control" value="<?php echo $key->nama ?>" required="true" name="nama" required="">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Posisi Kerja *</label>
                <input type="text" class="form-control" value="<?php echo $key->posisi_kerja?>" required="true" name="posisi" required="">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Shift Kerja *</label>
                <input type="text" class="form-control" value="<?php echo $key->shift_kerja?>" required="true" name="shift" required="">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Alamat *</label>
                <input type="text" class="form-control" value="<?php echo $key->Alamat?>" required="true" name="alamat" required="">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> No Telp *</label>
                <input type="text" class="form-control" value="<?php echo $key->telp ?>" required="true" name="telp" required="">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> e-mail *</label>
                <input type="email" class="form-control" value="<?php echo $key->email ?>" required="true" name="email" required="">
              </div>
              <?php endforeach ?>
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