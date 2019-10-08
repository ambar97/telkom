 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="card">
 					<div class="card-header card-header-danger">
 						<h4 class="card-title " style="font-weight: bold;">Tabel Data Primer</h4>
 						<p class="card-category"> Tabel ini akan <span style="font-weight: bold;">Automatis Update</span> Ketika user melakukan pengiriman data</p>
 					</div>
 					<div class="card-body">
 						<div class="toolbar">
 						</div>
 						<div class="material-datatables">
 							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
 								<thead>
 									<tr>
 										<th>No</th>
 										<th>Nama</th>
 										<th>Lokasi</th>
 										<th>Jarak</th>
 										<th>Iat</th>
 										<th>Waktu Gangguan</th>
 										<th class="disabled-sorting text-right">Actions</th>
 									</tr>
 								</thead>
 								<tbody>
 										<tr>
 											<td></td>
 											<td class="text-danger"></td>
 											<td></td>
 											<td></td>
 											<td></td>
 											<td></td>
 											<td class="text-right">
 												<a href="" title="edit" class="btn btn-link btn-warning btn-just-icon edit" ><i class="material-icons">dvr</i></a>
 												<a href="" title="hapus" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
 											</td>
 										</tr>
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