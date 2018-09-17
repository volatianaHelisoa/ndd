
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
					<div class="iconmess">		
						<i class="fa fa-3x fa-check"></i>	
					</div>	
					
					<div class="login-container innerpopup">
					<div class="item-container">
						<div class="center_blc no-border">
							<div class="formfields">
								<div class="done-request">
									<h3 class="messdone"><strong>DONE !</strong></h3>
									<span class="ltl-consign messlab"><i class="fa fa-3x fa-info-circle"></i>License file has been successfully  generated and sent to the following customer email : </span>
									<div class="emaillicense">
										<span class="downwithmail">"<?php echo $mail;?>"</span>
									</div>
									<div class="dowloadlicense">
									<span class="ltl-consign"><a href="<?php echo base_url();?>users/downloadlic2"><i class="fa fa-3x fa-download"></i>Download license file</a></span>
									</div>
									<div class="btn-submit">
									<input type="submit" class="messok" value="Ok" onclick="window.location.href='<?php echo base_url(); ?>users/edit/<?php echo $id;?>'">
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

