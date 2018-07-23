<?php $this->load->view('layout/base_start');?>

	<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open('Welcome/create'); ?>

			<legend>Tambah Daftar Antrian</legend>
			<?php echo validation_errors(); ?>
			<div class="form-group">
			<label for="">Nama</label>
			<input type="text" class="form-control" id="namapelanggan" name="namapelanggan" placeholder="Masukkan Nama Disini">
			<label for="">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Disini">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
</div>	 
	</div>
</div>
<br>
<br>

	<div class="container-fluid">
		<div class="row">
		
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-success">
		<div class="panel-heading">Daftar Antrian</div>
		<div class="panel-body">
				<table id="example" class="table table-responsive table-hover" style="width:100%">
					<thead>
						<tr>
							<th>No Antrian</th>
							<th>Nama Pelanggan</th>
							<th>Alamat Pelanggan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($antrian as $key) { ;?>
			            <tr>
			            	<td><?php echo $key->noantrian ?></td>
			                <td><?php echo $key->namapelanggan?></td>
			                <td><?php echo $key->alamat?></td>
			                <td><a href="<?php echo site_url()?>welcome/penjualan/<?php echo $key->noantrian?>"><button type="button" class="btn btn-default" aria-label="Left Align">Pembayaran Resep</button></a></td>
			            </tr>
			            <?php } ?>
					</tbody>
				</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	

<?php $this->load->view('layout/footer');?>