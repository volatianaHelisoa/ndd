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
		
		<div class="box-pop-up login-container innerpopup">
			<div class="item-container resetmessage">
			<div class="iconmessrest">		
						<i class="fa fa-3x fa-check "></i>	
			</div>	
				<div class="center_blc resetmessage">
					<div class="formfields">
						<div class="done-request">
							<h3><strong>DONE !</strong></h3>
							<span class="ltl-consign messlab"><i class="fa fa-3x fa-info-circle"></i>We have just sent the reset password</br> instructions to :</span>
							<div id="maildone">
								<a href="#" class="mail-reset-dest"> "<?php  echo $admin['email']?>"</a>
							</div>
							<div class="btn-submit"><input type="submit" class="messok" value="Ok" onclick="window.location.href='<?php echo base_url(); ?>login'"></input></div>				
						</div>
					</div>
					<div id="foot-notes">
						<span style="font-weight: bold; font-size: 14px;"><i class="fa fa-3x fa-info-circle fa-mess"></i>Note about spam filters</span>
						<span style="position:relative; top:10px;" class="ltl-consign">If you dont receive an email form us within a few minutes, please check your spam filter.</span>
					</div>
				</div>
			</div>
		</div>
</main>
</form>
</body>
</html>