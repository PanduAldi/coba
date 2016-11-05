<!-- Halaman Agama -->
<div>
	<?php foreach ($produk as $tek): ?>
		<div class="panel panel-info">
			<div class="panel-body">
             	<div class="row">
          			<div class="col-lg-3">
          				<a href="<?php echo site_url('web/detail_produk/'.$tek->id.'/'.str_replace(array(' ',',','"',':','/'), '-', $tek->nama)) ?>">
          					<img class="media-object" src="<?php echo base_url('assets/img-repo/produk/'.$tek->img) ?>" class="img-responsive" width="180" height="160" alt="...">
          				</a>
          			</div>
          			<div class="col-lg-9">
          				<a href="<?php echo site_url('web/detail_produk/'.$tek->id.'/'.str_replace(array(' ',',','"',':','/'), '-', $tek->nama)) ?>	"><h5 class="media-heading"><strong><?php echo $tek->nama ?></strong></h5></a>
          				<small><?php echo substr($tek->deskripsi, 0, 250) ?> [...]</small>
          			 </div>
          		</div>				
			</div>
			<div class="panel-footer">
				<p align="right"><a href="<?php echo site_url('web/detail_produk/'.$tek->id.'/'.str_replace(array(' ',',','"',':','/'), '-', $tek->nama)) ?>" class="btn btn-success">Lihat Selengkapnya</a></p>
				
			</div>
		</div>
	<?php endforeach ?>
	<?php echo $pagination ?>
</div>