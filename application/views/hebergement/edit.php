<?php echo form_open('hebergement/edit/'.$t_hebergement['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier l'hébergement</div>
	<?php if(isset($error_nom)) :?>
				<div class="alert alert-info" role="alert">
					<?php echo $error_nom; ?>
				</div>
		<?php endif ?>
	<div class="field">
		<label for="name">Nom</label>
		<input type="text" required name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $t_hebergement['name']); ?>" class="form-control" id="name" />
	</div>
	<div class="field">
		<label for="url">Url</label>
		
		<input type="text" required name="url" value="<?php echo ($this->input->post('url') ? $this->input->post('url') : $t_hebergement['url']); ?>" class="form-control" id="url" />
	</div>
	<div class="field">
		<label for="login">Login</label>
		<input type="text" name="login" value="<?php echo ($this->input->post('login') ? $this->input->post('login') : $t_hebergement['login']); ?>" class="form-control" id="login" />
	</div>
	<div class="field">
		<label for="password">Mot de passe</label>
		<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $t_hebergement['password']); ?>" class="form-control" id="password" />
	</div>
	
	<button type="submit" class="btn submit">Enregistrer</button>
</div>
	
<?php echo form_close(); ?>