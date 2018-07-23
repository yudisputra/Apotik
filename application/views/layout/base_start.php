<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url('assets/images/apotik.jpg')?>" type="image/x-icon" />
		<title>Apotik Lancar Sehat</title>

		<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  media="screen,projection"/>
      	<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

      	<!--JavaScript at end of body for optimized loading-->
      	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
      	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
      	<script type="text/javascript" src="js/materialize.min.js"></script>

      	<script type="text/javascript" class="init">
      	$(document).ready(function() {
            $('#example').DataTable();
        });
      	</script>
      	
		<style type="text/css">
			body {
				font-family: 'Segoe UI';
			}
		</style>
	</head>
	<body>
	
	<?php $this->load->view('layout/header'); ?>