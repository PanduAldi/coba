
<!-- Halaman utama artikel -->
<?php echo $this->session->flashdata('add_success'); ?>

<form action="<?php echo site_url('artikel/multiple_delete') ?>" method="post">
<div class="well well-sm">
	<a href="<?php echo site_url('artikel/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Berita</a>
	<a href="<?php echo site_url('kategori') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Kategori</a>
	<button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus data terpilih </button>
	<!-- right section -->

</div>
<div class="" id="table">
	<table class="table table-striped table-bordered" id="datatable">
		<thead>
			<tr>
				<th><input type="checkbox" id="checkAll"></th>
				<th>Title</th>
				<th>Categories</th>
				<th>Author</th>
				<th>Date</th>
			
			</tr>
		</thead>
		<tbody>
		<?php
			$no = 1;
		 	foreach ($artikel as $berita): 
		?>
			<tr>
				<td width="15">
					<input type="checkbox" name="check[]" value="<?php echo $berita->id_artikel ?>" class="ace-switch check">
				</td>
				<td>
					<?php echo ucwords($berita->judul) ?>
					<p>
						<small>
							<a href="<?php echo site_url('artikel/detail/'.$berita->id_artikel) ?>"  title="Detail">View</a>&nbsp; | &nbsp;
							<a href="<?php echo site_url('artikel/edit/'.$berita->id_artikel) ?>"  title="Edit">Edit</a>&nbsp; | &nbsp;
							<a href="#" class="hapus" kode="<?php echo $berita->id_artikel ?>"  title="Hapus">Delete</a>
						</small>
					</p>
				</td>
				<td>
					<?php 
						$id = $berita->id_kategori;
						$kategori = $this->db->get_where('t_kategori', array('id_kategori'=>$id))->row_array();

						echo $kategori['kategori'];
					?>
				</td>
				<td><?php echo $berita->penulis ?></td>
				<td>
					<?php echo  $this->idn_times->hari_indo($berita->waktu).", ".$this->idn_times->tgl_db($berita->waktu) ?>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
</div>
</form>

<script>
		$(function(){

			//show modal
			$(".hapus").click(function(){
				var kode = $(this).attr("kode");
				$('#idhapus').val(kode);
				$('#modal-delete').modal("show");
			});

			// confirm delete
			$("#konfirmasi").click(function(){
				var kode= $("#idhapus").val();

				$.ajax({
					url : "<?php echo site_url('artikel/hapus') ?>",
					type  : "POST",
					data  : "kode="+kode,
					cache : false,
					success : function(html){
						location.reload();
					}
				})
			})



			//checkAll
			$("#checkAll").click(function(){

				if ((this).checked == true)
					$(".check").prop('checked', true);
				else
					$(".check").prop('checked', false)  
			});

			// alert delay
			$("#alert-delay").delay(2000).hide(1000);

		});
</script>