<?php $this->load->view('layout/base_start');?>

	<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open('Welcome/inputpenjualan'); ?>

			<legend>Transaksi</legend>
			<?php echo validation_errors(); ?>
			<div class="form-group">
			<br>
			<label for="">Tanggal Transaksi</label>
			<input type="date" class="form-control" id="tanggaltransaksi" name="tanggaltransaksi">
			<br>
			<label for="">No Antrian</label>
			<input type="text" class="form-control" id="noantrian" name="noantrian" value="<?php echo $pelanggan[0]->noantrian?>">
			<br>
			<label for="">Nama Pelanggan</label>
			<input type="text" class="form-control" id="namapelanggan" name="namapelanggan" value="<?php echo $pelanggan[0]->namapelanggan?>">
			<br>
			<label for="sel1">Nama Pegawai</label>
  				<select class="form-control" id="idpegawai" name="idpegawai">
  				<?php foreach ($pegawai as $key) { ;?>
   		    	<option value="<?php echo $key->idpegawai?>"><?php echo $key->namapegawai?></option>
   		     	<?php } ?> 
  				</select>
  			<br>
			<label for="sel1">Input Obat</label>
  				<select class="form-control" id="pilihobat" name="pilihobat">
  				<?php foreach ($obat as $key) { ;?>
   		    	<option value="<?php echo $key->idobat?>"><?php echo $key->namaobat?></option>
   		     	<?php } ?> 
  				</select>
  			<br>
			<label for="">Jumlah Obat</label>
			<input type="text" class="form-control" id="jumlahobat" name="jumlahobat">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
</div>	 
	</div>
</div>
<br>
	

<?php $this->load->view('layout/footer');?>