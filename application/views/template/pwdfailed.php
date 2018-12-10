<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- JS Libs -->	
		
		<script type="text/javascript"	src="<?php echo base_url(); ?>assets/JS/jquery-3.1.1.js"></script>
		<script type="text/javascript"	src="<?php echo base_url(); ?>assets/JS/jquery-ui-1.12.1.js"></script>
		<script src="<?php echo base_url(); ?>assets/JS/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/JS/jquery.dataTables.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/JS/dataTables.js"></script>
		<script src="<?php echo base_url(); ?>assets/JS/customscript.js"> </script>
		<script src="<?php echo base_url(); ?>assets/JS/bootstrap-multiselect.js"></script>

		<!-- CSS styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.auto-complete.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/datatables.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/base.css">	
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-multiselect.css" />
	</head>

	<body>
<main class="dashboard-container">

		<div class="main-wrapper">
			<div class="full-carte">
			<div class="title-field">OUPS  !</div>							
				<?php $guid=$_GET['hash'];?>
				<span class="ltl-consign messlab"><i class="fa fa-3x fa-info-circle"></i>Invalid password.<br> Please clic on the button bellow to go to the reset passord page.</span>
				<div class="btn-submit"><input type="submit" class="messok" value="Ok" onclick="window.location.href='<?php echo base_url(); ?>nouveauMotDePasse/?hash=<?php echo $guid;?>'"></input></div>				
			</div>
		</div>
       

</main>

</body>
</html>