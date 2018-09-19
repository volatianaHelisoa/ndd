<div class="login-page">
	<div class="wrapper">
		<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="My NDD" srcset="">
		<span class="title-l">Bienvenue</span>
		<p>Lorem ipsum dolor sit amet, Nunc posuere libero id auctor efficitur. Aenean posuere leo quis dolor iaculis </p>
		<?php echo validation_errors(); ?>      		
		<?php echo form_open('user/verifyUser',array('class' => 'carte small')); ?>
			<div class="fixed-entet">Connexion</div>
			<input type="email" name="email" id="username" required placeholder="E-mail" value="<?php echo (isset($sess['username'])) ? $sess['username'] : ''; ?>">
			<input type="password" name="password" value="<?php echo (isset($sess['password'])) ? $sess['password'] : ''; ?>" id="password" placeholder="Mot de passe" require>

			<div class="flex-content flex-jcenter-acenter save-content">
				<span class="SavePass">
					<input type="checkbox" id="SavePass" name="check_session">
					Se souvenir de moi
				</span>                            
				<a href="" class="link forgotPass">Mot de passe oublié ?</a>
			</div>

			<button type="submit" class="cust-btn submit">Connexion</button>
	</div>
</div>

</body>
</html>