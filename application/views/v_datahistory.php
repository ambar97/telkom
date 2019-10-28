 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="card">
 					<div class="card-header card-header-danger">
 						<h4 class="card-title " style="font-weight: bold;">Tabel Data History</h4>
 						
 						<div style="float: right;">
 							
 						</div>
 					</div>
 					<div class="card-body">
 						<div class="toolbar">
 						</div>
 						<div class="material-datatables">
 							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
 								<thead>
 									<tr>
 										<th>id history</th>
 										<!-- <th>Nama</th> -->
 										<th>Lat</th>
 										<th>Lng</th>
 										<th>Kabel</th>
 										<th>Des</th>
 									
 									</tr>
 								</thead>
 								<tbody>
 									<?php $no=1; foreach ($data_history as $key) { ?>
 										<tr>
 											<td><?php echo $no++; ?></td>
 											<!-- <td class="text-danger"><?php echo $key->nama; ?></td> -->
 											<td><i class="text-success"><?php echo $key->lat; ?></i> -> <i class="text-warning"> <?php echo $key->lng; ?></i></td>
 											<td><?php echo $key->kabel; ?></td>
 											<td><?php echo $key->core; ?></td>
 											<td><?php echo $key->des; ?></td>
 											
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