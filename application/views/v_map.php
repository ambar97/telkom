 <?php $this->load->view("side/head"); ?>
 <?php echo $map['js'];?>
 <?php $this->load->view("side/navbar"); ?>

 <div class="content">
 	<h4>Gangguan Terkini</h4>
 		<?php echo $map['html'];?>
 </div>
 <?php $this->load->view('side/rightside') ?>