				<!-- Bagian content -->
				

							<!-- slide  -->
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <?php

                                    $no = 0;

                                foreach ($slide as $art): 
                                    
                                    if ($no == 0)
                                    {
                                        $active = 'active';
                                    }
                                    else
                                    {
                                        $active = '';
                                    }
                                ?>
                                <div class="item <?php echo $active ?>">
                                  <img src="<?php echo base_url('assets/img-repo/artikel/'.$art->gambar) ?>" width="900" height="500" alt="<?php echo $art->gambar ?>">
                                  <div class="carousel-caption">
                                    <h2> <strong><?php echo $art->judul ?>  </strong></h2>
                                    <p><?php echo substr($art->artikel, 0, 150) ?>[...]</p>
                                    <p><a href="<?php echo site_url('web/read/'.$art->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $art->judul)) ?>" class="btn btn-primary">Lihat Selengkapnya</a></p>
                                  </div>
                                </div>    
                                <?php $no++; endforeach ?>    
                              </div>
                            </div>
                            <hr>
                            <h1>Berita Headline</h1>
                           	<div class="row">
                           		<div class="col-lg-6">
                   					<div class="panel panel-warning">
                   						<div class="panel-heading">
                   							Teknologi
                   						</div>
                   						<div class="panel-body">
                 							<?php foreach ($teknologi as $tek): ?>
                           			<div class="media">
          												  <div class="media-left">
          												    <a href="<?php echo site_url('web/read/'.$tek->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $tek->judul)) ?>">
          												      <img class="media-object" src="<?php echo base_url('assets/img-repo/artikel/'.$tek->gambar) ?>" width="64" height="64" alt="...">
          												    </a>
          												  </div>
          												  <div class="media-body">
          												    <a href="<?php echo site_url('web/read/'.$tek->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $tek->judul)) ?>	"><h5 class="media-heading"><strong><?php echo $tek->judul ?></strong></h5></a>
          												    <small><?php echo substr($tek->artikel, 0, 150) ?> [...]</small>
          												    <p style="font-size : 10px;" class="pull-right"><i class="fa fa-clock-o"></i> <?php echo $this->idn_times->hari_indo($tek->waktu).", ".$this->idn_times->tgl_db($tek->waktu) ?>. By. <?php echo $tek->penulis ?></p>
          												  </div>
          											</div>
                 							<?php endforeach ?>
                   						</div>
                   					</div>
                           		</div>
                           		<div class="col-lg-6">
                   					<div class="panel panel-warning">
                   						<div class="panel-heading">
                   							Tutorial
                   						</div>
                   						<div class="panel-body">
                 							<?php foreach ($tutorial as $tut): ?>
                 								<div class="media">
												  <div class="media-left">
												    <a href="<?php echo site_url('web/read/'.$tut->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $tut->judul)) ?>">
												      <img class="media-object" src="<?php echo base_url('assets/img-repo/artikel/'.$tut->gambar) ?>" width="64" height="64" alt="...">
												    </a>
												  </div>
												  
												  <div class="media-body">
												    <a href="<?php echo site_url('web/read/'.$tut->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $tut->judul)) ?>	"><h5 class="media-heading"><strong><?php echo $tut->judul ?></strong></h5></a>
												    <small><?php echo substr($tut->artikel, 0, 150) ?> [...]</small>
												    <p style="font-size : 10px;" class="pull-right"><i class="fa fa-clock-o"></i> <?php echo $this->idn_times->hari_indo($tut->waktu).", ".$this->idn_times->tgl_db($tut->waktu) ?>. By. <?php echo $tut->penulis ?></p>
												  </div>
												</div>
                 							<?php endforeach ?>
                   						</div>
                   					</div>
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-lg-6">
                   					<div class="panel panel-warning">
                   						<div class="panel-heading">
                   							Agama
                   						</div>
                   						<div class="panel-body">
                 							<?php foreach ($agama as $ag): ?>
                 								<div class="media">
												  <div class="media-left">
												    <a href="<?php echo site_url('web/read/'.$ag->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $ag->judul)) ?>">
												      <img class="media-object" src="<?php echo base_url('assets/img-repo/artikel/'.$ag->gambar) ?>" width="64" height="64" alt="...">
												    </a>
												  </div>
												  
												  <div class="media-body">
												    <a href="<?php echo site_url('web/read/'.$ag->id_artikel.'/'.str_replace(array(' ',',','"',':','/'), '-', $ag->judul)) ?>	"><h5 class="media-heading"><strong><?php echo $ag->judul ?></strong></h5></a>
												    <small><?php echo substr($ag->artikel, 0, 150) ?> [...]</small>
												    <p style="font-size : 10px;" class="pull-right"><i class="fa fa-clock-o"></i> <?php echo $this->idn_times->hari_indo($ag->waktu).", ".$this->idn_times->tgl_db($ag->waktu) ?>. By. <?php echo $ag->penulis ?></p>
												  </div>
												</div>
                 							<?php endforeach ?>
                   						</div>
                   					</div>
                           		</div>
                           	</div>  
                           	<hr>
                           	<h1>Produk Headline</h1>
                 			<?php foreach ($produk as $pro): ?>
                 				<div class="media">
								  <div class="media-left">
								    <a href="<?php echo site_url('web/detail_produk/'.$pro->id.'/'.str_replace(array(' ',',','"',':','/'), '-', $pro->nama)) ?>">
								      <img class="media-object" src="<?php echo base_url('assets/img-repo/produk/'.$pro->img) ?>" width="64" height="64" alt="...">
								    </a>
								  </div>
								  
								  <div class="media-body">
								    <a href="<?php echo site_url('web/detail_produk/'.$pro->id.'/'.str_replace(array(' ',',','"',':','/'), '-', $pro->nama)) ?>	"><h5 class="media-heading"><strong><?php echo $pro->nama ?></strong></h5></a>
								    <small><?php echo substr($pro->deskripsi, 0, 150) ?> [...]</small>
								  </div>
								</div>
                 			<?php endforeach ?>  	

