<div id="tambah_user">
	<div class="panel panel-default">
		<form action="" method="POST" class="form-horizontal">
		<div class="panel-body">
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Nama Lengkap :</label>
					<div class="col-md-5">
						<input type="text" class="form-control" name="nama">
						<div class="delay"><?php echo form_error('nama'); ?></div> 
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Username :</label>
					<div class="col-md-3">
						<input type="text" name="username" class="form-control">
						<div class="delay"><?php echo form_error('username'); ?></div>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Password :</label> 
					<div class="col-md-3">
						<input type="password" name="password" class="form-control">
						<div class="delay"><?php echo form_error('password');  ?></div>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Level</label>
					<div class="col-md-3">
						<select name="level" id="" required>
							<option value="">-- Pilih Level -- </option>
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
					</div>
				</div>
		</div>
		<div class="panel-footer">
			<div class="container-fluid">
				<button class="btn btn-primary" id="simpan"><i class="fa fa-disk"></i> Simpan Data</button>
				<a href="<?php echo site_url('user') ?>" class="btn btn-danger">Batal</a>
			</div>
		</div>
		</form>
	</div>
</div>

<!-- Action jQuery -->
<script>
	
	$(function(){

		//delay alert
		$(".delay").delay(10000).hide(50);

		//loading
		$("#simpan").click(function(){
			$(this).html('<i class="fa fa-cog fa-spinner"></i> Menyimpan ... ');
		});
	});
</script>