 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form id="LoginValidation" action="<?php echo base_url('DataPrimer/insert') ?>" method="POST">
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">contacts</i>
              </div>
              <h4 class="card-title">Tambah Data Primer</h4>
            </div>
            <div class="card-body ">  
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Nama *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="nama">
              </div>
              <div class="row">
              <div class="form-group col-md-6">
                <label for="examplePasswords" class="bmd-label-floating"> Lokasi 2 *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="lk1">
              </div>
              <div class="form-group col-md-6">
                <label for="examplePasswords" class="bmd-label-floating"> Lokasi 1 *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="lk2">
              </div>
              </div>
              <div class="row">
              <div class="form-group col-md-6">
                <label for="examplePasswords" class="bmd-label-floating"> Jenis Kabel *</label>
                <select required="" class="form-control custom-select" data-placeholder="Choose a Category" name="jenis">
                  <option class="disable">Pilih Jenis Kabel</option>
                  <option>Aerial</option>
                  <option>Duct</option>
                  <option>Direct Burried</option>
                </select>
              </div>
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Panjang / meter *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="panjang">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Ruas *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="ruas">
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