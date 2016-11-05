
<div id="read">
	<p align="right"><a href="<?php echo site_url('web/produk') ?>" class="btn btn-primary"><i class="fa fa-angle-double-left"></i> Kembali</a></p>
	<h2><?php echo $detail_produk->nama ?></h2>
	<br><br>
	<p align="center"><img src="<?php echo base_url('assets/img-repo/produk/'.$detail_produk->img) ?>" class="img-responsive" alt="<?php echo $detail_produk->img ?>" width="780"></p>
	<?php echo $detail_produk->deskripsi ?>
	<br><br>
	<em>IT Team</em><br><br>

</div>