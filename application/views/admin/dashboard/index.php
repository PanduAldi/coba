<!-- Content dashboard -->
<div class="jumbotron">
	<div class="container">
		<p>Hallo, <?php echo $this->session->userdata('nama'); ?> </p>
		<p><small>Selamat Datang di panel administrator Web Profil. </small></p>
	
		<div class="panel panel-info">
			<div class="panel-body">
		<center>
		<?php if ($this->session->userdata('level') == 'admin'): ?>
		<!-- panel icon  -->
		<a href="<?php echo site_url('artikel') ?>" class="btn btn-app btn-purple">
			<i class="fa fa-edit bigger-230"></i><br>
			Berita
		</a>
		<a href="<?php echo site_url('profil') ?>" class="btn btn-app btn-purple">
			<i class="fa fa-user bigger-230"></i><br>
			Profil
		</a>
		<a href="<?php echo site_url('') ?>" class="btn btn-app btn-purple">
			<i class="fa fa-cubes bigger-230"></i><br>
			Produk
		</a>
		<a href="<?php echo site_url('') ?>" class="btn btn-app btn-purple">
			<i class="fa fa-users bigger-230"></i><br>
			User
		</a>
		<?php endif ?>	
		
		<?php if ($this->session->userdata('level') == "user"): ?>
			<p>Halaman ini hanya dapat mengelola berita karena anda adalah User</p>
		<?php endif ?>
		</center>	

			</div>
		</div>

	</div>
</div>