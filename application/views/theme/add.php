<?php echo form_open('theme/add',array("class"=>"form-horizontal")); ?>
	<div class="head-section centered-el">
		<span class="title-l">Ajout thématique</span>
	</div>

	<div class="wrap-field info-gen carte ">
	<div class="title-field">Thématique</div>
	<?php if(isset($error_nom)) :?>
			<div class="alert alert-info" role="alert">
				<?php echo $error_nom; ?>
			</div>
		<?php endif ?>		
		<div class="field">
			<label for="name">Nom (*)</label>
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" id="name" required/>
		</div>

		<button type="submit" class="btn submit primary-action">Ajouter</button>
		<a href="<?php echo site_url('theme'); ?>" class="submit">Annuler</a>
	</div>

<?php echo form_close(); ?>