
<section class="column2 rightDivision fullWidth">
	<div class="rowpad">
		<div id="divisionContent">		
			<!-- top panel -->
			<div id="inner-top-panel" class="hidepanel clear">
				<div class="left search-bloc">
					<form method="get" action="" class="usr-srch">
						<div class="usr-srch--input-wrapper">
							<input class="usr-srch--input" type="search" placeholder="Search" />
						</div>
						<input class="usr-srch--submit" type="submit" value="&#xf002;" />
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

					<h3><strong>RESET KEY</strong></h3>
					<span class="ltl-consign"><i class="fa fa-3x fa-info-circle"></i>Please enter your new key and clic the "Reset key" button to save it.</span>

					<div class="center_blccreate">
						<?php echo form_open( 'users/triggerkey', array( 'class' => 'formfields' ) ); ?>
						<fieldset>
							<div class="inline-form clr">				
								<input type="password" id="triggerkey" placeholder="Old key" name="oldkey" autofocus  class="input rwd<?php echo (empty(form_error('oldkey'))) ? "" : " has-error"; ?>" value="<?php echo set_value('oldkey'); ?>"></input>
								<span class="block-erreur key"><?php echo form_error('oldkey'); ?></span>
								<input type="password" id="triggerkey" placeholder="New key" name="newkey" autofocus  class="input rwd<?php echo (empty(form_error('newkey'))) ? "" : " has-error"; ?>" value="<?php echo set_value('newkey'); ?>"></input>		<span class="block-erreur key"><?php echo form_error('newkey'); ?></span>				
								<div class="createuserbutton">	
									<div class="btn-submituser"><button type="submit" value="Reset">Reset</button></div>
									<div class="btn-canceluser">
											<a class="btn btn-defaultuser" href="<?php echo base_url(); ?>users">Cancel</a>
									</div>								
								</div>
								
							</div>
						</fieldset>
						</form>
					</div>
			</div>

		</div>
	</div>
</section>