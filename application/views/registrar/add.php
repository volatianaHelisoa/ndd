<?php echo form_open('registrar/add',array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte ">
	<div class="title-field">Ajouter registrar</div>

	<div class="field">
		<label for="name">Nom</label>
		
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" id="name" />
	</div>
	<div class="field">
		<label for="url">Url (*)</label>
		
		<input type="text" name="url" value="<?php echo $this->input->post('url'); ?>" id="url" require/>
	</div>

	<div class="field">
		<label for="login">Login (*)</label>
		
		<input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" id="login" require/>
	</div>
	
	<div class="field">
		<label for="password">Mot de passe (*)</label>
		
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" id="password" require/>
	</div>
	
	
	<button type="submit" class="btn submit">Enregistrer</button>
	</div>

<?php echo form_close(); ?>