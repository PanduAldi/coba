<div id="tambah_statis">
	<?php  
		echo form_error('list');
		echo form_error('deskripsi');

	?>
	<div class="alert alert-success" id="load" style="display:none;"><i class="fa fa-spinner fa-spin"></i> Loading</div>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="well well-sm" align="right">
		<button class="btn btn-primary" id="simpan">Simpan Data</button>
		<a href="<?php echo site_url('data_statis') ?>" class="btn btn-danger">Batal</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-body">
				<div class="col-lg-4 div-xs-12">
					<label for="" class="control-label">Judul :</label>
					<input type="text" name="judul" value="<?php echo $statis['judul'] ?>">
				</div>
				<div class="col-lg-12">
					<label for="" class="cotrol-label">Deskripsi :</label>
					<textarea name="deskripsi" rows="15"><?php echo $statis['deskripsi'] ?></textarea>
				</div>
		</div>
	</div>
	</form>	
</div>

<script>
	$(function(){

		$("#simpan").click(function(){
			$("#load").show();
		});
	});
</script>