<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Trigger - Reset passeword</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome..min.css">
</head>
<body>
<header></header>
<main class="wrapperpages">
	<div class="page" id="">
		<div class="box-pop-up forgotpass">
			<div class="item-container">
				<i class="fa fa-3x"><img src="<?php echo base_url(); ?>assets/images/icon-locked.png" alt="Photo profil"></i>
				<h3><strong>FORGOT YOUR PASSWORD ?</strong></h3>
				<span class="ltl-consign"><i class="fa fa-3x fa-info-circle"></i>Please enter your email address and we will send you password reset instructions.</span>
			<div class="center_blccreate">
				<?php echo validation_errors(); ?>
				<?php echo form_open('pages/forgotpassword',array('class' => 'formfields')); ?>		
					<fieldset>
						<div class="inline-form clr">
					
							<input type="text" placeholder="Email address" name="emailuser" autofocus="" required class="input pwd">
							
							<div class="createuserbutton fwd">	
								<div class="btn-submituser"><button type="submit">Send</button></div>
							
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