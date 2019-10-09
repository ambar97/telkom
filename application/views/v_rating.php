 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="card">
 					<div class="card-header card-header-danger">
 						<h4 class="card-title " style="font-weight: bold;">Tabel Rating Karyawan</h4>
 						<p class="card-category"> Tabel ini akan <span style="font-weight: bold;">Automatis Update</span> Ketika admin memberi tambahan point pada karyawan</p>
 					</div>
 					<div class="card-body">
 						<div class="toolbar">
 						</div>
 						<div class="material-datatables">
 							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
 								<thead>
 									<tr>
 										<th>No</th>
 										<th>Nama Karyawan</th>
 										<th>Point</th>
 										<!-- <th class="disabled-sorting text-right">Actions</th> -->
 									</tr>
 								</thead>
 								<tbody>
 									<?php $no=1; foreach ($rating as $key) { ?>
 										<tr>
 											<td><?php echo $no++; ?></td>
 											<td class="text-danger"><?php echo $key->nama; ?></td>
 											<td><?php echo $key->points; ?></td>
 											<!-- <td class="text-right">
 												<a href="" title="edit" class="btn btn-link btn-warning btn-just-icon edit" ><i class="material-icons">dvr</i></a>
 												<a href="" title="hapus" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
 											</td> -->
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