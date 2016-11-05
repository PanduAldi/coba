<div id="tambah-event">
	<p>
		<?php 
			echo form_error('nama');
			echo form_error('deskripsi');
			echo form_error('kategori'); 
		?>
	</p>
	<div class="row">
		<form action="" method="POST" enctype="multipart/form-data">
		<div class="col-lg-9 col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-body">
					<label for="" class="control-label">Nama Produk :</label>
					<input type="text" name="nama" class="form-control" value="<?php echo $this->input->post('nama') ?>">
					<label for="" class="control-label">Deskripsi :</label>
					<textarea name="deskripsi" rows="15"><?php echo $this->input->post('deskripsi') ?></textarea>	
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-xs-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					Gambar Kategori
				</div>
				<div class="panel-body">
					<input type="file" name="img" class="form-control" required>
				</div>
			</div>
			<div class="well well-sm">
				<button class="btn btn-primary btn-block">Simpan</button>
				<button type="reset" class="btn btn-warning btn-block">Bersihkan</button>
				<a onclick="window.history.go(-1)" class="btn btn-danger btn-block">Batalkan</a>
			</div>	
		</div>
		</form>
	</div>
</div>	