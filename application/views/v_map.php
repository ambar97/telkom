 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>

 <div class="content">
 	<h4>Gangguan Terkini</h4>
 		 <?php $this->load->view('map/index') ?>
 </div>
 <?php $this->load->view('side/rightside') ?>