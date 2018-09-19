<?php echo form_open('user/edit/'.$t_user['id'],array("class"=>"form-horizontal")); ?>
<div class="head-section centered-el">
	<span class="title-l">Mon compte</span>
</div>
<div class="wrap-field-compte carte">
	<div class="title-field"></div>
	<div class="bloc-profil">
		<span class="img-thumb"><img src="<?php echo base_url(); ?>assets/images/user-thumb.jpg" alt="Profil photo"></span>
		<div class="change-photo">
			
		</div>
	</div>
	<div class="ttl-infos clearfix">
		<span>Informations</span>
	</div>
	<div class="field half">
		<label for="">Rôle</label>
		<select name="id_role" id="" required>
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
	<div class="field half">
		<label for="">Nom : </label>
		<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $t_user['name']); ?>">
	</div>
	<div class="field half">
		<label for="">Prénom :</label>
		<input type="text" name="firstname" value="<?php echo ($this->input->post('firstname') ? $this->input->post('firstname') : $t_user['firstname']); ?>">
	</div>
	<div class="field half">
		<label for="">Email :</label>
		<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $t_user['email']); ?>">
	</div>
	
	<div class="step-after" style=" clear: both;">
		<div class="ttl-infos clearfix">
			<span>Changer mot de passe</span>
		</div>
		<div class="field half">
			<label for="">Nouveau mot de passe : </label>
			<input type="password" name="password"  value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $t_user['password']); ?>">
		</div>
		<div class="field half">
			<label for="">Répétér nouveau mot de passe :</label>
			<input type="text">
		</div>
	</div>
	<button type="submit" class="submit">Enregistrer</button>
</div>
	
<?php echo form_close(); ?>