<?php echo form_open('registrar/add',array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte ">
	<div class="title-field">Ajouter registrar</div>
	<?php if(isset($error_nom)) :?>
				<div class="alert alert-info" role="alert">
					<?php echo $error_nom; ?>
				</div>
	<?php endif ?>
	<div class="field">
		<label for="name">Nom</label>
		
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" id="name" required />
	</div>
	<div class="field">
		<label for="url">Url (*)</label>
		
		<input type="text" name="url" value="<?php echo $this->input->post('url'); ?>" id="url" required/>
	</div>

	<div class="field">
		<label for="login">Login (*)</label>
		
		<input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" id="login" required/>
	</div>
	
	<div class="field">
		<label for="password">Mot de passe (*)</label>
		
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" id="password" required/>
	</div>
	
	
	<button type="submit" class="btn submit">Enregistrer</button>
	</div>

<?php echo form_close(); ?>