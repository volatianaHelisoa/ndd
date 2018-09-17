<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Trigger - Delete customer</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome..min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/myscript.js"></script>
</head>
<body>
<header id="header">
<div class="top-panel clear">
<div class="left">
	<div class="sleft">
		<img src="<?php echo base_url(); ?>assets/images/home.jpg" alt="Photo profil">
	</div>
	<div class="sright">
	<span id="pAneltxt">Trigger's Reports - Customer's license manager</span>
	</div>
</div>
<div class="right">
	<div class="user_wlcm">Welcome, <span><?php echo $name;?></span>
		<a href="<?php echo base_url();?>/login" onclick="return confirm('Are you sure you want to log out?')"><i class="fa fa-sign-out"></i>Logout</a>
	</div>
</div>
</div>
</header>

<main class="wrapperpages">
	<div class="page pagesUser clear">
		
		<section class="column2 rightDivision fullWidth">
			<div class="rowpad">
				<div id="divisionContent">
					<div class="wrapper-onglet">
						<div class="right usr-create">
							<a href="<?php echo base_url(); ?>usermobile" title="Users" class="green-btn no-active">Users</a>
						</div>
						<div class="right usr-create">
							<a href="<?php echo base_url(); ?>actualites" title="News" class="green-btn no-active">News</a>
						</div>
						<div class="right usr-create">
							<a href="<?php echo base_url(); ?>users" title="Customer" class="green-btn">Customer</a>
						</div>
					</div>
					<!-- top panel -->
					<div id="inner-top-panel" class="hidepanel clear">					
						<div class="left search-bloc">					
							<form method="get" action="" class="usr-srch">
								<div class="usr-srch--input-wrapper">
								<input class="usr-srch--input" type="search" placeholder="Search"></input>
								</div>
								<input class="usr-srch--submit" type="submit" value="&#xf002;">
							</form>
						</div>
						
						<div class="right usr-create">
							<a href="#" title="Create user" class="green-btn">Create user</a>
						</div>
					</div>
					<!-- end top panel -->
					<div class="iconmess">		
						<i class="fa fa-3x fa-check"></i>	
					</div>	
					
					<div class="login-container innerpopup">
					<div class="item-container">
						<div class="center_blc no-border">
							<div class="formfields">
								<div class="done-request">
									<h3 class="messdone"><strong>DONE !</strong></h3>
									<span class="ltl-consign messlab"><i class="fa fa-3x fa-info-circle"></i>Customer(s) has been sucessfully deleted !</span>
									<div class="btn-submit">
									<input type="submit" class="messok" value="Ok" onclick="window.location.href='<?php echo base_url(); ?>users'">
									</div>				
								</div>
							</div>
						</div>
					</div>
					</div>							
			</div>		
		</section>
	</div>		
</main>

</body>
</html>