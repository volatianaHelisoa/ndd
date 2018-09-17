
<main class="wrapperpages">
	<div class="page pagesUser clear">
		
		<section class="column2 rightDivision  fullWidth">
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
								<input class="usr-srch--input" type="search" placeholder="Search"/>
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
							<span class="ltl-consign messlab"><i class="fa fa-3x fa-info-circle"></i>Customer has been sucessfully created !</span>
							<div class="btn-submit">
							<input type="submit" class="messok" value="Ok" onclick="window.location.href='<?php echo base_url(); ?>users'">
							
							<input type="submit" value="Edit customer" class="green-input" onclick="window.location.href='<?php echo base_url(); ?>users/edit/<?php echo $id; ?>'">
							</form>
											
						</div>
					</div>
				</div>
			</div>
			</div>	
					
		</section>
	</div>		
</main>
 <script type="text/javascript" src="js/myscript.js"></script>
