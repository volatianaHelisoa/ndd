<!DOCTYPE html>
<html>
<head>
	<title>Mon NDD</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

	<link rel="stylesheet"
	      href="<?php echo base_url(); ?>assets/css/font-awesome.css">
	<link rel="stylesheet"
	      href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	
	<script type="text/javascript"
	        src="<?php echo base_url(); ?>assets/JS/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/JS/jquery-ui.min.js"></script>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
	</script>

	<link rel="stylesheet" type="text/css"
	      href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8"
	        src="<?php echo base_url(); ?>assets/JS/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8"
		  src="<?php echo base_url(); ?>assets/JS/validation.js"></script>
		  
	<!-- CSS styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	
	<!-- JS Libs -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>

<header id="header">
	<div class="top-panel clear">
		<div class="left">
			<div class="sleft">
				<img src="<?php echo base_url(); ?>assets/images/home.jpg" alt="Photo profil">
			</div>
			<div class="sright">
				<span id="pAneltxt">Mon Ndd</span>
			</div>
		</div>
		<div id="dialog_log" title="Confirmation">
		  Are you sure you want to log out?
		 </div>​
		<div class="right">
			<!-- <?php $sessiondata = $this->session->get_userdata('sessiondata'); ?>
			<div class="user_wlcm">Welcome, <span> <?php echo $sessiondata['sessiondata']['login']; ?></span>
				<a class="log_dec" data-url="<?php echo base_url(); ?>/login" href="#">
					<i class="fa fa-sign-out"></i>Logout
				</a>
			</div> -->
		</div>
	</div>
</header>

<div class="container">


