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
		<div class="wrap-field carte">
		<div class="title-field">RÉINITIALISER MOT DE PASSE</div>
		<span class="ltl-consign messlab"><i class="fa fa-3x fa-info-circle"></i>Veuillez entrer votre nouveau mot de passe et cliquer sur le bouton "Réinitialiser" pour le sauvegarder.</span>
			<?php echo validation_errors(); $token = $_GET['hash'];		?>
				<?php echo form_open('pages/newpassword',array('class' => 'formfields')); ?>	
				<fieldset>
					<div class="inline-form clr">
						<input type="hidden" name="nameuser" value="<?php echo $token ;?>"></input>
						<input type="password" id="passwd" placeholder="New password" name="password" autofocus required class="input rwd"></input>
						<input type="password" id="passwd" placeholder="Confirm new password" name="password2" autofocus required class="input rwd"></input>
						<ul class="policies">
							<li><strong>Règles du mot de passe :</strong></li>
							<li><span class="ltl-consign">- Doit contenir au moins 8 caractères </span></li>
							<li><span class="ltl-consign">- Doit contenir au moins 1 caractère non alphanumérique</span></li>
							<li><span class="ltl-consign">- Doit contenir au moins 1 caractère</span></li>
							<li><span class="ltl-consign">- Doit contenir au moins 1 caractère majuscule</span></li>
							<li><span class="ltl-consign">- Doit contenir au moins 1 caractère minuscule</span></li>
						</ul>
						
						<div class="createuserbutton">	
							<div class="btn-submituser"><button type="submit" value="Reset">Réinitialiser</button></div>
							<div class="btn-canceluser">
									<a class="btn btn-defaultuser" href="<?php echo base_url(); ?>login">Annuler</a>
							</div>								
						</div>
						
					</div>
				</fieldset>
			
		
				
			<?php echo form_close(); ?>	
		</div>
</div>

	
</main>

</body>
</html>