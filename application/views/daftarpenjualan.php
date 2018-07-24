<?php $this->load->view('layout/base_start');?>

	<div class="container-fluid">
		<div class="row">
		
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-success">
		<div class="panel-heading">Daftar Antrian</div>
		<div class="panel-body">
				<table id="example" class="table table-responsive table-hover" style="width:100%">
					<thead>
						<tr>
							<th>Kode Transaksi</th>
							<th>Tanggal Transaksi</th>
							<th>No Antrian Pengunjung</th>
							<th>Nama Pengunjung</th>
							<th>Jumlah Pembelian</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($penjualan as $key) { ;?>
			            <tr>
			            	<td><?php echo $key->kodetransaksi ?></td>
			                <td><?php echo $key->tanggaltransaksi?></td>
			                <td><?php echo $key->noantrian?></td>
			                 <td><?php echo $key->namapelanggan?></td>
			                <td><?php echo $key->total?></td>
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