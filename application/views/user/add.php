<?php echo form_open('user/add',array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte ">
	<div class="field">
		<label for="name">Nom (*)</label>
		
		<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" id="name" require/>
	</div>
	<div class="field">
		<label for="firstname"control-label">Prénom</label>
		
		<input type="text" name="firstname" value="<?php echo $this->input->post('firstname'); ?>" id="firstname" />
	</div>
	<div class="field">
		<label for="email"control-label">Email (*)</label>
		
		<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" id="email" require/>
	</div>
	<div class="field">
		<label for="password">Mot de passe (*)</label>		
		<input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" id="password" require/>
	</div>

	<div class="field">
		<label for="id_role">Rôle (*)</label>
		<select name="id_role" require>
			<option value="">Rôle de l'utilisateur</option>
			<?php 
			foreach($all_t_role as $t_role)
			{
				$selected = ($t_role['id'] == $this->input->post('id_role')) ? ' selected="selected"' : "";

				echo '<option value="'.$t_role['id'].'" '.$selected.'>'.$t_role['type'].'</option>';
			} 
			?>
		</select>
	</div>
	
	<div class="field">
		<button type="submit" class="btn submit">Ajouter</button>
	</div>
</div>

<?php echo form_close(); ?>