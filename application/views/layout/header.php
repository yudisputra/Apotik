<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Menu</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url('welcome/home'); ?>">Halaman Utama</a></li>
				<li><a href="<?php echo base_url('Welcome/antrian'); ?>">Antrian</a></li>
				<li><a href="<?php echo base_url('welcome/daftarobat'); ?>">Daftar Obat</a></li>
				<li><a href="<?php echo base_url('welcome/daftarpenjualan'); ?>">Penjualan</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="">Daftar</a></li>
				<li><a href="<?php echo base_url('admin/index'); ?>">Login</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>