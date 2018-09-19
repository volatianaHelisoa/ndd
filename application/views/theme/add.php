<?php echo form_open('theme/add',array("class"=>"form-horizontal")); ?>
	<div class="head-section centered-el">
		<span class="title-l">Ajout thématique</span>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla laoreet mauriss</p>
	</div>

	<div class="wrap-field info-gen carte ">
	<div class="title-field">Thématique</div>
		<div class="field">
			<label for="name">Nom (*)</label>
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" id="name" require/>
		</div>

		<button type="submit" class="btn submit">Ajouter</button>
	</div>

<?php echo form_close(); ?>