<?php echo form_open('cms/add',array("class"=>"form-horizontal")); ?>
	<div class="wrap-field info-gen carte">
		<div class="title-field">Ajouter CMS</div>
		<div class="field">
			<label for="type">Type (*)</label>
			<input type="text" name="type" value="<?php echo $this->input->post('type'); ?>" id="type" required/>
		</div>
		
		<button type="submit" class="btn submit">Ajouter</button>
	</div>

<?php echo form_close(); ?>