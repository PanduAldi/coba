<!-- facebook comment -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.5&appId=559696837515393";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end -->

<div id="read">
	<h2><?php echo $read->judul ?></h2>
	<small style="color : #2A1BD3"><i class="fa fa-clock-o"></i> <?php echo $this->idn_times->hari_indo($read->waktu).", ".$this->idn_times->tgl_db($read->waktu) ?>&nbsp; &nbsp; <i class="fa fa-edit"></i> <?php echo $read->penulis ?> &nbsp;&nbsp;</small>
	<br><br>
	<p align="center"><img src="<?php echo base_url('assets/img-repo/artikel/'.$read->gambar) ?>" class="img-responsive" alt="<?php echo $read->gambar ?>" width="780"></p>
	<?php echo $read->artikel ?>
	<br><br>
	<em>IT Team</em><br><br>

	<!-- komentar -->
	<div class="panel panel-info">
		<div class="panel-heading">
			KOMENTAR ANDA
		</div>
		<div class="panel-body">
			<div class="fb-comments" data-href="<?php echo base_url('web/read/'.$this->uri->segment(3)."/".$this->uri->segment(4)) ?>" data-width="780" data-numposts="5"></div>
		</div>
	</div>
</div>