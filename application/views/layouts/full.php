<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/datatables.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/base.css">	
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" type="text/javascript"></script>
	</head>

	<body>
	<div class="flex-wrapper-dashboard">
        <aside class="nav-panel">
            <a class="logo" href=""><img src="<?php echo base_url(); ?>assets/images/logo_light.png" alt="Mon Ndd" srcset=""></a>
            <nav class="menu">
                <ul>
                    <li><a href="<?php echo site_url('dashboard'); ?>">Dashboard</a></li>
                    <li><a href="<?php echo site_url('domaine/index'); ?>">Nom de domaine</a></li>
                    <li><a href="<?php echo site_url('hebergement/index'); ?>">Hebergement</a></li>
                    <li><a href="<?php echo site_url('ip/index'); ?>">IP</a></li>
                    <li><a href="<?php echo site_url('theme/index'); ?>">Gestion thématique</a></li>
                    <li><a href="<?php echo site_url('registrar/index'); ?>">Registrar</a></li>
                    <li><a href="<?php echo site_url('user/index'); ?>">Utilisateurs</a></li>
                    <li><a href="#">Mon compte</a></li>
                </ul>
            </nav>
		</aside>
		<main class="dashboard-container">
			<div class="topbar-head"></div>
			<div class="main-wrapper">
				<?php	if(isset($_view) && $_view)
					$this->load->view($_view);
				?>
			</div>
        </main>
	</div>
	</body>
	<!-- JS Libs -->	 
	<script type="text/javascript"
	src="<?php echo base_url(); ?>assets/JS/jquery-ui-1.12.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/JS/customscript.js"
	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
	</script>
</html>
