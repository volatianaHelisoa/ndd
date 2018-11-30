<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- JS Libs -->	
		
		<script type="text/javascript"	src="<?php echo base_url(); ?>assets/JS/jquery-3.1.1.js"></script>
		<script type="text/javascript"	src="<?php echo base_url(); ?>assets/JS/jquery-ui-1.12.1.js"></script>

		


		<script src="<?php echo base_url(); ?>assets/plugins/typeahead/typeahead.bundle.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/materialize-tags/js/materialize-tags.min.js"></script> 
		<script src="<?php echo base_url(); ?>assets/JS/materialize.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/JS/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/JS/jquery.dataTables.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/JS/dataTables.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/buttons.flash.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/jszip.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/pdfmake.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/buttons.flash.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/vfs_fonts.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/buttons.html5.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/buttons.print.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/JS/customscript.js"> </script>
		<script src="<?php echo base_url(); ?>assets/JS/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url(); ?>assets/JS/chart.min.js"></script>

		<!-- CSS styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.auto-complete.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/datatables.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/base.css">	
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">		
	</head>

	<body>
	<?php	
		$current_user = $this->session->userdata('sessiondata');  
		$token =  $current_user["token"];			
	?>
	<div class="flex-wrapper-dashboard">
        <aside class="nav-panel">
            <a class="logo" href=""><img src="<?php echo base_url(); ?>assets/images/logo_light.png" alt="Mon Ndd" srcset=""></a>
            <nav class="menu">
                <ul>
                    <li><a href="<?php echo site_url('dashboard'); ?>">Dashboard</a></li>
                    <li><a href="<?php echo site_url('domaine'); ?>">Nom de domaine</a></li>
                    <li><a href="<?php echo site_url('hebergement'); ?>">Hebergement</a></li>
                    <li><a href="<?php echo site_url('ip'); ?>">IP</a></li>
                    <li><a href="<?php echo site_url('theme'); ?>">Gestion thématique</a></li>
                    <li><a href="<?php echo site_url('registrar'); ?>">Registrar</a></li>
					<li><a href="<?php echo site_url('type'); ?>">Type</a></li>
                    <li><a href="<?php echo site_url('utilisateur'); ?>">Utilisateurs</a></li>
                    <li><a href="<?php echo site_url('utilisateur/compte/'.$token); ?>">Mon compte</a></li>
                </ul>
            </nav>
		</aside>
		<main class="dashboard-container">

				<div class="topbar-head clearfix">
					<div class="bloc-user">
						<div class="user-name">Bienvenue, <span><?php echo $current_user['login']; ?> </span>.</div>
						<div class="avatar"><img src="<?php echo base_url();?>assets/images/user-thumb.jpg" alt=""></div>
						<ul class="sub-user">
							<li><a href="<?php echo site_url('user/logout'); ?>">Deconnexion</a></li>
						</ul>
					</div>
				</div>
			<div class="main-wrapper">
				<?php	
				if($this->session->userdata('sessiondata')) {					
					if(isset($_view) && $_view)
						$this->load->view($_view);
				}else
					redirect(base_url() . 'login');  	
				?>
			</div>
     	</main>
	</div>
	</body>
	<!-- JS Libs -->	 

	    
	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
	</script>
</html>
