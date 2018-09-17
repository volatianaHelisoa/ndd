<main class="wrapperpages">
	<div class="page" id="">
		<div class="box-pop-up login-container innerpopup">
			<div class="item-container resetmessage">
			<div class="iconmessrest">		
						<i class="fa fa-3x fa-times "></i>	
			</div>
				<div class="center_blc resetmessage">
					<div class="formfields">
						<div class="done-request">
							<h3><strong>OUPS  !</strong></h3>
							<span class="ltl-consign messlab"><i class="fa fa-3x fa-info-circle"></i>Invalid file extension.</span>
							<div class="btn-submit"><input type="submit" class="messok" value="Ok" onclick="window.location.href='<?php echo base_url(); ?>users/fileview/?hash=<?php $id=$_GET['hash']; echo $id; ?>'"></input></div>				
						</div>
					</div>
				</div>
			</div>
		</div>
</main>