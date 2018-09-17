<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Trigger - Reset done</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
</head>
<body>
<header></header>

<main class="wrapperpages">
	<div class="page" id="">
		<div class="box-pop-up login-container innerpopup">
			<div class="item-container resetmessage">
			<div class="iconmessrest">		
						<i class="fa fa-3x fa-check "></i>	
			</div>
				<div class="center_blc resetmessage">
					<div class="formfields">
						<div class="done-request">
							<h3><strong>DONE !</strong></h3>
							<span class="ltl-consign messlab"><i class="fa fa-3x fa-info-circle"></i>Your password has been successfully changed !<br> Please clic on the button bellow to go to the login page.</span>
							<div class="btn-submit"><input type="submit" class="messok" value="Ok" onclick="window.location.href='<?php echo base_url(); ?>login'"></input></div>				
						</div>
					</div>
				</div>
			</div>
		</div>
</main>

</body>
</html>