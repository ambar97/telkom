<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold">Product</h3>
			<h4 class=""></h4>
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
			<li><a href="<?php echo base_url() ?>">Home</a></li>
			<li>/</li>
			<li class="c-state_active">Product</li>

		</ul>
	</div>
</div>
<div class="container">
	<div class="c-layout-sidebar-content ">
		<div class="c-margin-t-20"></div>
		<div class="c-bs-grid-small-space">
			<div class="row">
				<?php foreach ($produk as $key): ?>
				<div class="col-md-3 col-sm-6 c-margin-b-20">
						<div class="c-content-product-2 c-bg-white c-border">
						<div class="c-content-overlay">
							<?php if ($key->kategori=='promo'){ ?>
								<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Promo</div>
							<?php } elseif ($key->kategori=='baru') { ?>
								<div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
							<?php } elseif($key->kategori=='pb'){ ?>
								<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Promo</div>
								<div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
							<?php } else{ ?>
								
							<?php } ?>
							<div class="c-overlay-wrapper">
								<div class="c-overlay-content">
									<a href="<?php echo base_url('Product/detail/').$key->idProduct ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
								</div>
							</div>
							<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(<?php echo $key->foto ?>);"></div>
						</div>
						<div class="c-info">
							<p class="c-title c-font-16 c-font-slim"><?php echo $key->nmProduct ?></p>
							<p class="c-price c-font-14 c-font-slim">Rp. <?php echo number_format($key->harga) ?> &nbsp;
								<!-- <span class="c-font-14 c-font-line-through c-font-red">$600</span> -->
							</p>
						</div>
						<div class="btn-group btn-group-justified" role="group">
							<div class="btn-group c-border-left c-border-top" role="group">
								<a href="https://wa.me/+6282230033283?text=saya20%mau20%bertanya20%tentang20%mobil20%suzuki20%sesuai20%di20%website" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Beli Sekarang</a>
							</div>
						</div>
					</div>
				</div>
					<?php endforeach ?>

			</div>


		</div>

		<div class="c-margin-t-20"></div>

		<!-- <ul class="c-content-pagination c-square c-theme pull-right">
			<li class="c-prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
			<li><a href="#">1</a></li>
			<li class="c-active"><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li class="c-next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
		</ul> -->
	</div>
</div>
</div>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>