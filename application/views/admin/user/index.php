<div id="user">
	<div id="alert-delay">
	<?php  
		echo $this->session->flashdata('add_success');
		echo $this->session->flashdata('update_success');
		echo $this->session->flashdata('delete_success');
	?>
	</div>
	<div class="well well-sm">
		<a href="<?php echo site_url('user/tambah') ?>" class="btn btn-prmary"><i class="fa fa-plus"></i> Tambah Data</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-body">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Level</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($user as $us): ?>
						<tr>
							<td><?php echo $us->id_user ?></td>
							<td><?php echo $us->nama ?></td>
							<td><?php echo $us->username ?></td>
							<td><?php echo $us->level ?></td>
							<td>
								<a href="<?php echo site_url('user/edit/'.$us->id_user) ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
								<a href="<?php echo site_url('user/hapus/'.$us->id_user) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			
			</table>	
		</div>
	</div>
</div>

<script>
	//jQuery action
	$(function(){

		//delay alert
		$("#alert-delay").delay(2000).hide(100);

		// action delete
		$(".hapus").click(function(){
			var kode = $(this).attr("kode");
			$("#idhapus").val(kode);
			$("#modal-delete").modal("show");
		})

		$("#konfirmasi").click(function(){
			var id = $("#id_hapus").val();

			$.ajax({
				url : "<?php echo site_url('user/hapus') ?>",
				type : "POST",
				data : "id_user="+id,
				cache : false,
				success : function(html){
					location.reload();
				}
			})
		});
	});
</script>