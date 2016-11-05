<!-- Form tambah artikel -->
<div class="row">
	<?php  
		echo $message;
		echo form_error('judul');
		echo form_error('artikel');
		echo form_error('id_kategori');
		echo form_error('status');
	?>

	<form action="" method="POST" enctype="multipart/form-data">
		<div class="col-lg-9">
			<label for="" class="cotrol-label">Judul Artikel</label>
			<input type="text" name="judul" class="form-control" value="<?php echo $artikel['judul'] ?>" autofocus>
			<br>
			<label for="" class="control-label">Artikel</label>
			<textarea name="artikel" rows="20"><?php echo $artikel['artikel'] ?></textarea>
		</div>
		<div class="col-lg-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					Status Posting
				</div>
				<div class="panel-body">
					<?php  
						$status = array('publish', 'draft');
						for($i=0; $i < count($status); $i++) {
							$checked = ($artikel['status']==$status[$i])?"checked":"";
							echo '<input type="radio" name="status" value="'.$status[$i].'" '.$checked.'> '.ucwords($status[$i]).'<br />';
						}
					?>
				</div>
			</div>
			<div class="panel panel-warning">
				<div class="panel-heading">
					Kategori
				</div>
				<div class="panel-body">
					<?php  
						$kategori = $this->db->get('t_kategori')->result();
						foreach ($kategori as $kat) {
							$checked = ($artikel['id_kategori']==$kat->id_kategori)?"checked":"";
							echo '<input type="radio" name="id_kategori" value="'.$kat->id_kategori.'" '.$checked.'> '.$kat->kategori.'<br />';
						}
					?>
				</div>
			</div>
			<div class="upload">
				<label for="" class="control-label">Gambar : </label>
				<input type="file" name="gambar" class="form-control" /><br>
				<img src="<?php echo base_url('assets/img-repo/artikel/'.$artikel['gambar']); ?>" alt="gambar" width="250" height="200">
			</div><br>
			<div class="well well-sm">
				<button class="btn btn-primary btn-block">Simpan Artikel</button>
				<button type="reset" class="btn btn-danger btn-block">Bersihkan</button>
				<a href="<?php echo site_url('artikel/index') ?>" class="btn btn-warning btn-block">Batalkan</a>
			</div>
		</div>
	</form>
</div>