<?php echo form_open('hebergement/add',array("class"=>"form-horizontal")); ?>
	<div class="head-section centered-el">
		<span class="title-l">Ajout d'hébergement</span>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla laoreet mauriss</p>
	</div>
	<div class="carte wrap-field info-gen">
		<div class="title-field">Information générale</div>
		<div class="field">
			<label for="name">Name</label>
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
		<div class="field">
			<label for="url">Url</label>
			<input type="text" name="url" value="<?php echo $this->input->post('url'); ?>" class="form-control" id="url" />
		</div>
		<div class="field">
			<label for="login">Login</label>
			<input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" class="form-control" id="login" />
		</div>
		<div class="field">
			<label for="password">Password (*)</label>
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" require/>
		</div>
		<button type="submit" class="btn submit">Enregistrer</button>
	</div>
<?php echo form_close(); ?>