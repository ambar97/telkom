 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="card">
 					<div class="card-header card-header-danger">
 						<h4 class="card-title " style="font-weight: bold;">Tabel Data Primer</h4>
 						<p class="card-category"> Klik <span style="font-weight: bold;">Tambah Data Primer</span> untuk menambahkan data baru</p>
 						<div style="float: right;">
 							<a class="btn btn-info" href="<?php echo base_url('DataPrimer/tambah') ?>">Tambah Data Primer</a>
 						</div>
 					</div>
 					<div class="card-body">
 						<div class="toolbar">
 						</div>
 						<div class="material-datatables">
 							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
 								<thead>
 									<tr>
 										<th>No</th>
 										<!-- <th>Nama</th> -->
 										<th>Lokasi</th>
 										<th>Jenis Kabel</th>
 										<th>Panjang</th>
 										<th>Ruas</th>
 										<th class="disabled-sorting text-right">Actions</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php $no=1; foreach ($primer as $key) { ?>
 										<tr>
 											<td><?php echo $no++; ?></td>
 											<!-- <td class="text-danger"><?php echo $key->nama; ?></td> -->
 											<td><i class="text-success"><?php echo $key->lokasi_1; ?></i> -> <i class="text-warning"> <?php echo $key->lokasi_2; ?></i></td>
 											<td><?php echo $key->jenis_kabel; ?></td>
 											<td><?php echo $key->panjang; ?></td>
 											<td><?php echo $key->ruas; ?></td>
 											<td class="text-right">
 												<a href="<?php echo base_url('DataPrimer/ubah/'.$key->id_primer) ?>" title="edit" class="btn btn-link btn-warning btn-just-icon edit" ><i class="material-icons">dvr</i></a>
 												<a href="<?php echo base_url('DataPrimer/hapus/'.$key-> id_primer) ?>" title="hapus" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
 											</td>
 										</tr>
 									<?php } ?>
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
 <?php $this->load->view("side/js"); ?>