 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="card">
 					<div class="card-header card-header-danger">
 						<h4 class="card-title " style="font-weight: bold;">Tabel Data Karyawan</h4>
 						<p class="card-category"> Klik <span style="font-weight: bold;">Tambah Karyawan</span> untuk tambah data baru</p>
 						<div style="float: right;">
 							<a class="btn btn-info" href="<?php echo base_url('Karyawan/tambah') ?>">Tambah Karyawan</a>
 						</div>
 					</div>
 					<div class="card-body">
 						<div class="toolbar">
 						</div>
 						<div class="material-datatables">
 							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
 								<thead>
 									<tr>
 										<th>Nama</th>
 										<th>Posisi</th>
 										<th>Shift Kerja</th>
 										<th>Alamat</th>
 										<th>No Telp</th>
 										<th>e-mail</th>
 										<th class="disabled-sorting text-right">Actions</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php foreach ($karyawan->result() as $key): ?>
 										<tr>
 											<td class="text-danger"><?php echo $key->nama ?></td>
 											<td><?php echo $key->posisi_kerja ?></td>
 											<td><?php echo $key->shift_kerja ?></td>
 											<td><?php echo $key->Alamat ?></td>
 											<td><?php echo $key->telp ?></td>
 											<td><?php echo $key->email ?></td>
 											<td class="text-right">
 												<a href="<?php echo base_url('Karyawan/goet/'.$key->id_karyawan) ?>" title="edit" class="btn btn-link btn-warning btn-just-icon edit" ><i class="material-icons">dvr</i></a>
 												<a href="<?php echo base_url('Karyawan/hapus/'.$key-> id_karyawan) ?>" title="hapus" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
 											</td>
 										</tr>
 									<?php endforeach ?>
 								</tbody>
 							</table>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <?php $this->load->view('side/rightside') ?>
 <?php $this->load->view('side/js') ?>
