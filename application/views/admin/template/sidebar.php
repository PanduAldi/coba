			<div id="sidebar" class="sidebar responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<ul class="nav nav-list">

					<?php  

						if ($this->session->userdata('level') == 'admin') 
						{
							?>
							<li class="">
								<a href="<?php echo site_url('dashboard') ?>">
									<i class="menu-icon fa fa-tachometer"></i>
									<span class="menu-text"> Dashboard </span>
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo site_url('data_statis') ?>">
									<i class="menu-icon fa fa-user"></i>
									<span class="menu-text"> Profil </span>
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo site_url('artikel') ?>">
									<i class="menu-icon fa fa-book"></i>
									<span class="menu-text"> Berita </span>
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo site_url('produk') ?>">
									<i class="menu-icon fa fa-cubes"></i>
									<span class="menu-text"> Produk </span>
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo site_url('user') ?>">
									<i class="menu-icon fa fa-users"></i>
									<span class="menu-text"> Data User </span>
								</a>

								<b class="arrow"></b>
							</li>							
							<?php
						}
						elseif($this->session->userdata('level') == 'user')
						{
						?>
							<li class="">
								<a href="<?php echo site_url('dashboard') ?>">
									<i class="menu-icon fa fa-tachometer"></i>
									<span class="menu-text"> Dashboard </span>
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo site_url('artikel') ?>">
									<i class="menu-icon fa fa-book"></i>
									<span class="menu-text"> Berita </span>
								</a>

								<b class="arrow"></b>
							</li>
						<?php
						}

					?>
					<!--
					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="tables.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Simple &amp; Dynamic
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="jqgrid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									jqGrid plugin
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					-->

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>