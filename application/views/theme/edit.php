<?php echo form_open('theme/edit/'.$t_theme['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier le thématique</div>
	<div class="form-group">
	<label for="name">Nom (*)</label>
		<?php if(isset($t_theme['error_nom'])) { ?>
							<p> <?php echo  $t_theme['error_nom'] ?></p> 
		<?php } ?>		
	
		<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $t_theme['name']); ?>" id="name" required />
	</div>
	<button type="submit" class="btn submit primary-action">Enregistrer</button>
	<a href="<?php echo site_url('theme'); ?>" class="submit">Annuler</a>
</div>
	
<?php echo form_close(); ?>