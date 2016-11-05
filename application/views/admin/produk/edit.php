<div class="edit-event">
	<div class="row">
		<form action="" method="POST" enctype="multipart/form-data">
		<div class="col-lg-8 col-xs-12">
			<?php echo $message ?>
			<div class="panel panel-primary">
				<div class="panel-body">
					<label for="" class="control-label">Nama Produk :</label>
					<input type="text" name="nama" class="form-control" value="<?php echo $produk['nama'] ?>">
					<label for="" class="control-label">Deskripsi :</label>
					<textarea name="deskripsi" rows="15"><?php echo $produk['deskripsi'] ?></textarea>	
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-xs-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					Ganti Gambar produk
				</div>
				<div class="panel-body">
					<input type="file" name="img" id="">
					<br>
					<img src="<?php echo base_url('assets/img-repo/produk/'.$produk['img']) ?>" width="200" height='200' alt="">
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