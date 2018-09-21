<?php echo form_open('registrar/edit/'.$t_registrar['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier le registrar</div>
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
		<input type="text" name="login" value="<?php echo ($this->input->post('login') ? $this->input->post('login') : $t_registrar['login']); ?>" class="form-control" id="login" required />
	</div>
	<div class="field">
		<label for="password">Mot de passe</label>		
		<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $t_registrar['password']); ?>" class="form-control" id="password" required />
	</div>
	
	<button type="submit" class="btn submit">Enregistrer</button>
</div>
	
<?php echo form_close(); ?>