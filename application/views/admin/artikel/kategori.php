<div id="kategori">
	<div id="alert-delay">
		<?php 
			echo $this->session->flashdata('add_success'); 
			echo $this->session->flashdata('update_success'); 
			echo $this->session->flashdata('delete_success');
		?>		
		<div class="alert alert-info" id="load" style="display:none"><i class="fa fa-spinner fa-spin"></i> Tunggu</div>
	</div>
	<div class="row">
		<!-- form section -->
		<div class="col-lg-4 col-xs-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<input type="hidden" name="id_kategori" id="id_kategori">
					<input type="text" id="kategori-input" class="form-control" name="kategori" placeholder="Masukan Nama Kategori">
					<br>
					<button id="simpan" class="btn btn-primary">Simpan</button>
					<button class="btn btn-warning" id="edit-button" style="visibility:hidden">Edit</button>
					<button class="btn btn-danger" id="cancel" style="visibility:hidden">Cancel</button>
				</div>
			</div>
		</div>
		<!-- table section -->
		<div class="col-lg-8 col-xs-12">
			<div class="widget-box">
				<div class="widget-header">
					<h4>Table Kategori</h4>
				</div>
				<div class="widget-body">
					<div class="widget-main">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Kategori</th>
									<th>#</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($kategori as $kat): ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $kat->kategori ?></td>
										<td>
											<a href="#" class="edit-kategori" kode="<?php echo $kat->id_kategori ?>" kategori="<?php echo $kat->kategori ?>" title="Edit kategori"><i class="fa fa-pencil"></i></a>&nbsp;
											<a href="#" class="hapus" kode="<?php echo $kat->id_kategori ?>" title="hapus"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>				
				</div>		
			</div>
		</div>
	</div>
</div>

<script>
	$(function(){

		//Add kategori
		$("#simpan").click(function(){
			
			var kategori = $("#kategori-input").val();

			$.ajax({
				url : "<?php echo site_url('kategori/tambah') ?>",
				type : "post",
				data : "kategori="+kategori,
				cache : false,
				success : function(html){
					$("#kategori-input").val('');
					location.reload();
				}
			})
			
		});

		//update kategori
		$(".edit-kategori").click(function(){
			//definisi variable
			var kode = $(this).attr("kode");
			var kategori = $(this).attr("kategori");
			
			$("#id_kategori").val(kode);
			$("#kategori-input").val(kategori);

			//inner code button
			$("#edit-button").attr('style', '');
			$("#cancel").attr('style', '');
			$("#simpan").hide(50);
		});

		$("#edit-button").click(function(){
			var kode 	 = $("#id_kategori").val();
			var kategori = $("#kategori-input").val();

			$.ajax({
				url : "<?php echo site_url('kategori/edit') ?>",
				type : "POST",
				data : "id_kategori="+kode+"&kategori="+kategori,
				cache : false,
				success : function(html){
					$("#id_kategori").val('');
					$("#kategori-input").val('');
					location.reload();
				}
			}) 
		});

		$("#cancel").click(function(){
			$("#id_kategori").val('');
			$("#kategori-input").val('');			
			location.reload();
		});


		//delete kategori
		$(".hapus").click(function(){
			var kode = $(this).attr("kode");
			$("#idhapus").val(kode);
			$("#modal-delete").modal("show");
		});

		$("#konfirmasi").click(function(){
			var kode = $("#idhapus").val();

			$.ajax({
				url : "<?php echo site_url('kategori/hapus') ?>",
				type : "post",
				data : "id_kategori="+kode,
				success : function(html){
					location.reload();
				}

			})
		});

		//set flasdata
		$("#alert-delay").delay(2000).hide(500);

				$('#gritter-center').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a centered notification',
						text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
						class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
		
	});	
</script>