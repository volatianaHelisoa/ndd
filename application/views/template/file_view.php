<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Trigger - Edit user</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome..min.css">
	<script type="text/javascript"
	        src="<?php echo base_url(); ?>assets/JS/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/JS/jquery-ui.min.js"></script>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
	<script type="text/javascript"
	        src="<?php echo base_url(); ?>assets/JS/trigger.js"></script>
	<link rel="stylesheet" type="text/css"
	      href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8"
	        src="<?php echo base_url(); ?>assets/JS/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8"
	        src="<?php echo base_url(); ?>assets/JS/validation.js"></script>
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
					
					
					<div class="innerform-container">
					<div class="item-container">
					<i class="fa fa-3x"><img src="<?php echo base_url(); ?>assets/images/user.png" alt="Photo profil"></i>
					<h3><strong>UPLOAD LOGO CUSTOMER</strong></h3>
						<div class="center_blccreate upload">
							<div class="formfields">
									<div style="color: gray;font-size: 13px;padding-bottom: 15px;padding-top: 15px;"> Allowed extensions (png / jpg / jpeg) only.</br> Minimum size : 340x340 pixels</div>
									<h3><strong class="upldtitle" >Select your image</strong></h3>
									<?php echo $error; $guid= $_GET['hash'];?> <!-- Error Message will show up here -->
									<?php echo form_open_multipart('users/do_upload/'. $user);?>
										<div class="uploadform">
											<div class="spanslt">
												<span class="file-detect">No files selected</span>
											</div>
											
											<div class="custom-inputfile">
												<?php echo "<input id='inputupload' class='inputfiles inputfiles-1' type='file' required name='userfile' size='20' accept='image/*'/>"; ?>
												<label for="inputupload"><span>Select file</span></label>
											</div>
										</div>	
																		
									<div class="createuserbutton uploaded">	
										<div class="btn-submituser">
											<?php echo "<input id='buttonupload' type='submit' name='submit' value='upload' /> ";?>
											
										</div>
										 <div class="btn-canceluser upload">
											<a class="btn btn-defaultuser" href="<?php echo base_url();?>users/edit/<?php echo $guid;?>">Cancel</a>
										 </div>
									 </div>
									<?php echo "</form>"?>
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