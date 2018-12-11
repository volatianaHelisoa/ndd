<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- JS Libs -->	
		
		<script type="text/javascript"	src="<?php echo base_url(); ?>assets/JS/jquery-3.1.1.js"></script>
		<script src="<?php echo base_url(); ?>assets/JS/customscript.js"> </script>

		<!-- CSS styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/base.css">	
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout.css">
	</head>

	<body>
		<main class="dashboard-container">
			<div class="login-page">
				<div class="wrapper">
					<div class="title-field">RÉINITIALISER LE MOT DE PASSE</div>
					<span class="ltl-consign messlab"><i class="fa fa-3x fa-info-circle"></i>Veuillez entrer votre nouveau mot de passe et cliquer sur le bouton "Réinitialiser" pour le sauvegarder.</span>
					<?php echo validation_errors(); $token = $_GET['hash'];		?>
					<?php echo form_open('User/newpassword',array('class' => 'carte small')); ?>	
						<div class="inline-form clr">
							<input type="hidden" name="nameuser" value="<?php echo $token ;?>"></input>
							<input type="password" id="passwd" placeholder="New password" name="password" autofocus required class="input rwd"></input>
							<input type="password" id="newpasswd" placeholder="Confirm new password" name="password2" autofocus required class="input rwd"></input>
							<ul class="policies">
								<li><strong>Règles du mot de passe :</strong></li>
								<li><span class="ltl-consign">- Doit contenir au moins 8 caractères </span></li>
								<li><span class="ltl-consign">- Doit contenir au moins 1 caractère non alphanumérique</span></li>
								<li><span class="ltl-consign">- Doit contenir au moins 1 caractère</span></li>
								<li><span class="ltl-consign">- Doit contenir au moins 1 caractère majuscule</span></li>
								<li><span class="ltl-consign">- Doit contenir au moins 1 caractère minuscule</span></li>
							</ul>
							
							<div class="createuserbutton">	
								<button type="submit" value="Reset" class="cust-btn submit">Réinitialiser</button>
								<a class="cust-btn submit" href="<?php echo base_url(); ?>login">Annuler</a>							
							</div>
							
						</div>
					<?php echo form_close(); ?>	
				</div>
			</div>
		</main>
	</body>
</html>