<main class="wrapperpages">

	<div class="page" id="Loginpage">
			<div class="login-container">
				<div class="top">
					<div class="heading-ttl">			
						<h1>Bienvenue</h2>
						<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    </div>
				</div>
				
					<div class="item-container">	
				
					<div class="center_blclogin">	
					<?php echo validation_errors(); ?>      		
					<?php echo form_open('user/verifyUser',array('class' => 'formfields')); ?>
				<form class="formfields"  method="post">
								<fieldset>
								<h3>Login</h3>
									<input type="text" placeholder="Email" value="<?php echo (isset($sess['username'])) ? $sess['username'] : ''; ?>" name="email" autofocus="" class="input" required>
									<input type="password" id="passwd"  value="<?php echo (isset($sess['password'])) ? $sess['password'] : ''; ?>" placeholder="Mot de passe"  name="password" autofocus required class="input">
									<div class="remind">
										<input id= "check_session" type="checkbox" name="check_session"></input>
										<p>Remember me on this computer ?</p>
									</div>
									<div class="btn-submit"><button type="submit" value="Login" class="btn btn-primary">Connexion</button></div>					
								</fieldset>
				</form>

				<div class="a-forgot-pass">
                    <a href="<?php echo base_url(); ?>SendResetPassword">Mot de passe oublié ?</a>
                </div>
			
				</div>
			
			</div>
				</div>
		
		</div>		
	</div>

</main>

</body>
</html>