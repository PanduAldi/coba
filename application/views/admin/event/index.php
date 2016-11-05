<div id="event">
	<div id="alert-delay">
		<?php  
			echo $this->session->flashdata('add_success');
			echo $this->session->flashdata('update_success');
			echo $this->session->flashdata('delete_success');
		?>
	</div>
	<div class="well well-sm">
		<a href="<?php echo site_url('event/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Event</a>
	</div>
	<table class="table table-striped" id="datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Event</th>
				<th>Penulis</th>
				<th>Kategori</th>
				<th>Tanggal Update</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach ($event as $ev): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td>
						<?php echo $ev->judul ?><br>
						<!-- link section -->
						<a href="<?php echo site_url('event/edit/'.$ev->id_event)?>">Edit</a>&nbsp;|&nbsp;
						<a href="#" class="delete-event" kode="<?php echo $ev->id_event ?>">Hapus</a>
					</td>
					<td><?php echo $ev->penulis ?></td>
					<td><?php echo $ev->kategori ?></td>
					<td><?php echo $this->idn_times->tgl_db($ev->waktu_update) ?></td>
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
				url : "<?php echo site_url('event/hapus') ?>",
				type : "POST",
				data : "id_event="+kode,
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

