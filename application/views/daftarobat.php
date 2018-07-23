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
							<th>ID obat</th>
							<th>Nama Obat</th>
							<th>Harga</th>
							<th>Stock</th>
							<th>Jenis Obat</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($obat as $key) { ;?>
			            <tr>
			            	<td><?php echo $key->idobat ?></td>
			                <td><?php echo $key->namaobat?></td>
			                <td><?php echo $key->harga?></td>
			                <td><?php echo $key->stock?></td>
			                 <td><?php echo $key->jenisobat?></td>
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