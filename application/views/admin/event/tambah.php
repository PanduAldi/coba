<div id="tambah-event">
	<p>
		<?php 
			echo form_error('judul');
			echo form_error('deskripsi');
			echo form_error('kategori'); 
		?>
	</p>
	<div class="row">
		<form action="" method="POST">
		<div class="col-lg-9 col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-body">
					<label for="" class="control-label">Nama Event :</label>
					<input type="text" name="judul" class="form-control" value="<?php echo $this->input->post('judul') ?>">
					<label for="" class="control-label">Deskripsi :</label>
					<textarea name="deskripsi" rows="15"><?php echo $this->input->post('deskripsi') ?></textarea>	
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-xs-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					Pilih Kategori Event
				</div>
				<div class="panel-body">
					<?php  
						$atas = '<div class="radio"><label>';
						$bawah = '</label></div>';
						$data = array('agenda', 'pengumuman');
						for ($i=0; $i < count($data); $i++) { 
							$checked = ($this->input->post('kategori')==$data[$i])?"checked":"";
							echo $atas.'<input type="radio" name="kategori" value="'.$data[$i].'" '.$checked.'>'.ucwords($data[$i]).'<br>'.$bawah;
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