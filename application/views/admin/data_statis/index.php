<div id="data_statis">
	<div id="alert-delay">
		<?php  
			echo $this->session->flashdata('add_success');
			echo $this->session->flashdata('update_success');
			echo $this->session->flashdata('delete_success');
		?>
	</div>
	<div class="well well-sm">
		<a href="<?php echo site_url('data_statis/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Statis</a>
	</div>
	<table class="table table-striped" id="datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Penulis</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach ($statis as $stat): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td>
						<?php echo $stat->judul ?><br>
					</td>
					<td width="500"><?php echo $stat->penulis ?></td>
					<td>
						<a href="#" class="btn btn-warning btn-sm"><i class="fa fa-search"></i> View</a>
						<a href="<?php echo site_url('data_statis/edit/'.$stat->id) ?>" class="btn btn-primary btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
						<a href="#" kode="<?php echo $stat->id ?>" class="btn btn-danger btn-sm hapus_statis"><i class="fa fa-trash"></i> Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

<script>
	
	$(function(){

		//delay alert
		$("#alert-delay").delay(2000).hide(200);

		//hapus
		$(".hapus_statis").click(function(){
			var kode = $(this).attr("kode");
			$("#idhapus").val(kode);
			$("#modal-delete").modal("show");
		});

		$("#konfirmasi").click(function(){
			var kode = $("#idhapus").val();

			$.ajax({
				url : "<?php echo site_url('data_statis/hapus') ?>",
				type : "POST",
				data : "id_statis="+kode,
				success : function(html){
					location.reload();
				}
			})
		});
	});
</script>