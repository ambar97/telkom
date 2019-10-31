 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title " style="font-weight: bold;">Tabel Data User</h4>
                  <p class="card-category"> Klik <span style="font-weight: bold;">Tambah User</span> untuk tambah data baru</p>
                  <div style="float: right;">
                  	<a type="button" class="btn btn-primary" href="<?php echo base_url('User/tambah') ?>">Tambah User</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Karyawan</th>
                          <th>Tanggal Daftar</th>
                          <th>Username</th>
                          <th>Status</th>
                          <th>Kategori</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach ($user as $var): ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $var->nama ?></td>
                          <td><?php echo $var->tgl_daftar ?></td>
                          <td><?php echo $var->username ?></td>
                          <td><?php echo $var->status ?></td>
                          <td><?php echo $var->kategori_user?></td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="<?php echo base_url('User/hapus/'.$var-> idUser) ?>" title="hapus" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>

<?php $this->load->view('side/rightside') ?>
<?php $this->load->view('side/js') ?>
<?php if ($this->session->flashdata()) { ?>
                        <?php echo $this->session->flashdata('Pesan'); ?>                   
                    <?php } ?>
