

<div class="login-page">
	<div class="wrapper">
		<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="My NDD" srcset="">
		<?php echo validation_errors(); ?>      		
		<?php echo form_open('user/sendforgotpassword',array('class' => 'carte small')); ?>
			<div class="fixed-entet">Mot de passe oublié </div>
			<p>Veuillez saisir votre adresse email. Vous recevrez un lien par email pour créer un nouveau mot de passe.</p>
			<input type="email" name="email" id="username" required placeholder="E-mail" value="<?php echo (isset($sess['username'])) ? $sess['username'] : ''; ?>">
			<button type="submit" class="cust-btn submit">Envoyer</button>
			<a href="<?php echo site_url('login'); ?>" class="cust-btn submit">Annuler</a>
			<?php echo form_close(); ?>
	</div>
</div>


</body>
</html>