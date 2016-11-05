<div class="edit-event">
	<div class="row">
		<form action="" method="POST">
		<div class="col-lg-8 col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-body">
					<label for="" class="control-label">Nama Event :</label>
					<input type="text" name="judul" class="form-control" value="<?php echo $event['judul'] ?>">
					<label for="" class="control-label">Deskripsi :</label>
					<textarea name="deskripsi" rows="15"><?php echo $event['deskripsi'] ?></textarea>	
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-xs-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					Pilih Kategori Event
				</div>
				<div class="panel-body">
					<?php  
						$kategori = array('agenda', 'pengumuman');
						for ($i=0; $i < count($kategori); $i++) { 
							$checked = ($event['kategori']==$kategori[$i])?"checked":"";
							echo '<input type="radio" name="kategori" value="'.$kategori[$i].'" '.$checked.'>'.ucwords($kategori[$i]).'<br>';
						}
					?>
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