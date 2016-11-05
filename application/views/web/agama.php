<!-- Halaman Agama -->
<div>
	<?php foreach ($agama as $tek): ?>
		<div class="panel panel-info">
			<div class="panel-body">
             	<div class="row">
          			<div class="col-lg-3">
          				<a href="<?php echo site_url('web/read/'.$tek->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $tek->judul)) ?>">
          					<img class="media-object" src="<?php echo base_url('assets/img-repo/artikel/'.$tek->gambar) ?>" class="img-responsive" width="180" height="160" alt="...">
          				</a>
          			</div>
          			<div class="col-lg-9">
          				<a href="<?php echo site_url('web/read/'.$tek->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $tek->judul)) ?>	"><h5 class="media-heading"><strong><?php echo $tek->judul ?></strong></h5></a>
          				<small><?php echo substr($tek->artikel, 0, 250) ?> [...]</small>
          				<p style="font-size : 10px;" class="pull-right"><i class="fa fa-clock-o"></i> <?php echo $this->idn_times->hari_indo($tek->waktu).", ".$this->idn_times->tgl_db($tek->waktu) ?>. By. <?php echo $tek->penulis ?></p>
          			 </div>
          		</div>				
			</div>
			<div class="panel-footer">
				<p align="right"><a href="<?php echo site_url('web/read/'.$tek->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $tek->judul)) ?>" class="btn btn-success">Lihat Selengkapnya</a></p>
				
			</div>
		</div>
	<?php endforeach ?>
	<?php echo $pagination ?>
</div>