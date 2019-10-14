 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form id="LoginValidation" action="<?php echo base_url('DataPrimer/edit') ?>" method="post">
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">contacts</i>
              </div>
              <h4 class="card-title">Edit Data Primer</h4>
            </div>
            <div class="card-body ">
              <?php foreach ($priemr->result() as $key): ?>
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="hidden" name="idP" value="<?php echo $key->id_primer ?>">
                  <label for="examplePasswords" class="bmd-label-floating"> Lokasi 1 *</label>
                  <input type="text" class="form-control" value="<?php echo $key->lokasi_1?>" required="true" name="lk1" required="">
                </div>
                <div class="form-group col-md-6">
                <label for="examplePasswords" class="bmd-label-floating"> Lokasi 2 *</label>
                <input type="text" class="form-control" value="<?php echo $key->lokasi_2?>" required="true" name="lk2" required="">
              </div>
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Jenis Kabel *</label>
                <select required="" class="form-control custom-select" data-placeholder="Choose a Category" name="jenis">
                  <option class="disable">Pilih Jenis Kabel</option>
                  <option>Aerial</option>
                  <option>Duct</option>
                  <option>Direct Burried</option>
                </select>
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Panjang *</label>
                <input type="text" class="form-control" value="<?php echo $key->panjang?>" required="true" name="panjang" required="">
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Ruas *</label>
                <input type="text" class="form-control" value="<?php echo $key->ruas?>" required="true" name="ruas" required="">
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