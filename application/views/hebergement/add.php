<?php echo form_open('hebergement/add',array("class"=>"form-horizontal")); ?>
	
	<div class="head-section centered-el">
		<span class="title-l">Hébergement</span>
		<p>Vous avez <span><?php echo $nb_hebergement ?></span></span> hébergement(s)</p>
	</div>
	<div class="wrap-field info-gen carte">
		<div class="title-field">Ajouter un hébergement</div>
		<?php if(isset($error_nom)) :?>
				<div class="alert alert-info" role="alert">
					<?php echo $error_nom; ?>
				</div>
		<?php endif ?>
		<div class="field">
			<label for="name">Nom (*)</label>
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" id="name" required/>
		</div>
		<div class="field">
			<label for="url">Url (*)</label>
			<input type="text" name="url" value="<?php echo $this->input->post('url'); ?>" id="url" required/>
		</div>
		<div class="field">
			<label for="login">Login</label>
			<input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" id="login" />
		</div>
		<div class="field">
			<label for="password">Password</label>
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" id="password" />
		</div>
		<button type="submit" class="btn submit primary-action">Enregistrer</button>
		<a href="<?php echo site_url('hebergement'); ?>" class="submit">Annuler</a>
	</div>
<?php echo form_close(); ?>