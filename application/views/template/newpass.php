<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Trigger - etape1 Reset passeword</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome..min.css">
</head>
<body>
<header></header>

<main class="wrapperpages">
	<div class="page" id="">
		<div class="box-pop-up restpass">
			<div class="item-container">
				<i class="fa fa-3x"><img src="<?php echo base_url(); ?>assets/images/icon-locked.png" alt="Photo profil"></i>
				<h3><strong>RESET PASSWORD</strong></h3>
				<span class="ltl-consign"><i class="fa fa-3x fa-info-circle"></i>Please enter your new password and clic the "Reset Password" button to save it.</span>
				<div class="center_blccreate">
				<?php echo validation_errors(); $token = $_GET['hash'];
			?>
				<?php echo form_open('pages/newpassword',array('class' => 'formfields')); ?>		
				<fieldset>
					<div class="inline-form clr">
						<input type="hidden" name="nameuser" value="<?php echo $token ;?>"></input>
						<input type="password" id="passwd" placeholder="New password" name="password" autofocus required class="input rwd"></input>
						<input type="password" id="passwd" placeholder="Confirm new password" name="password2" autofocus required class="input rwd"></input>
						<ul class="policies">
							<li><strong>Password policies :</strong></li>
							<li><span class="ltl-consign">- Must contain at least 8 characters</span></li>
							<li><span class="ltl-consign">- Must contain at least 1 non-alphanumeric character</span></li>
							<li><span class="ltl-consign">- Must contain at least 1 digit character</span></li>
							<li><span class="ltl-consign">- Must contain at least 1 uppercase character</span></li>
							<li><span class="ltl-consign">- Must contain at least 1 lowercase character</span></li>
						</ul>
						
						<div class="createuserbutton">	
							<div class="btn-submituser"><button type="submit" value="Reset">Reset</button></div>
							<div class="btn-canceluser">
									<a class="btn btn-defaultuser" href="<?php echo base_url(); ?>login">Cancel</a>
							</div>								
						</div>
						
					</div>
				</fieldset>
				</form>
				</div>
			</div>
		</div>	
	</div>
</main>

</body>
</html>