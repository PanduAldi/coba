<div id="event">
	<div id="alert-delay">
		<?php  
			echo $this->session->flashdata('add_success');
			echo $this->session->flashdata('update_success');
			echo $this->session->flashdata('delete_success');
		?>
	</div>
	<div class="well well-sm">
		<a href="<?php echo site_url('produk/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Produk</a>
	</div>
	<table class="table table-striped" id="datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>img</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach ($produk as $ev): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td>
						<?php echo $ev->nama ?><br>
						<!-- link section -->
						<a href="<?php echo site_url('produk/edit/'.$ev->id)?>">Edit</a>&nbsp;|&nbsp;
						<a href="#" class="delete-event" kode="<?php echo $ev->id ?>">Hapus</a>
					</td>
					<td><img src="<?php echo base_url('assets/img-repo/produk/'.$ev->img) ?>" width="200" height="200" alt=""></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>	

<script>
	$(function(){
		//delete
		$(".delete-event").click(function(){
			var kode = $(this).attr("kode");
			$('#idhapus').val(kode);
			$('#modal-delete').modal("show");
		});

		$("#konfirmasi").click(function(){
			var kode = $("#idhapus").val();

			$.ajax({
				url : "<?php echo site_url('produk/hapus') ?>",
				type : "POST",
				data : "kode="+kode,
				cache : false,
				success : function(){
					location.reload();
				}
			})
		})

		//set alert delay
		$("#alert-delay").delay(2000).hide(500);
	});
</script>