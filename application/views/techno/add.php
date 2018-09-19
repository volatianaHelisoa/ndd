<?php echo form_open('techno/add',array("class"=>"form-horizontal")); ?>
	<div class="wrap-field info-gen carte">
		<div class="title-field">Ajouter registrar</div>
		<div class="field">
			<label for="name">Nom (*)</label>
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" id="name" required/>
		</div>
		<button type="submit" class="btn submit">Ajouter</button>
	</div>

<?php echo form_close(); ?>