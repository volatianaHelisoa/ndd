<?php echo form_open('registrar/edit/'.$t_registrar['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier le registrar</div>
	<?php if(isset($error_nom)) :?>
				<div class="alert alert-info" role="alert">
					<?php echo $error_nom; ?>
				</div>
		<?php endif ?>
	<div class="field">
		<label for="name">Nom</label>
		<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $t_registrar['name']); ?>" class="form-control" id="name" required />
	</div>
	<div class="field">
		<label for="url">Url</label>
		<input type="text" name="url" value="<?php echo ($this->input->post('url') ? $this->input->post('url') : $t_registrar['url']); ?>" class="form-control" id="url" required />
	</div>
	<div class="field">
		<label for="login">Login</label>
		<input type="text" name="login" value="<?php echo ($this->input->post('login') ? $this->input->post('login') : $t_registrar['login']); ?>" class="form-control" id="login"  />
	</div>
	<div class="field">
		<label for="password">Mot de passe</label>		
		<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $t_registrar['password']); ?>" class="form-control" id="password"  />
	</div>
	
	<button type="submit" class="btn submit primary-action">Enregistrer</button>
	<a href="<?php echo site_url('registrar'); ?>" class="submit">Annuler</a>
</div>
	
<?php echo form_close(); ?>