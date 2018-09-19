<?php echo form_open('domaine/edit/'.$t_domaine['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
<div class="title-field">Modifier le ndd</div>
	<div class="field">
		<label for="nom">Nom</label>
		<input type="text" name="nom" value="<?php echo ($this->input->post('nom') ? $this->input->post('nom') : $t_domaine['nom']); ?>" class="form-control" id="nom" />
	</div>
	
	<div class="field">
                        	<label for="">Thématique :</label>
                        	<input type="text" id="theme" name="theme" >
                        </div>
	<div class="field">
		<label for="id_registrar">Registrar</label>
		
		<select name="id_registrar" class="form-control">
			<option value="">Sélectionner</option>
			<?php 
			foreach($all_t_registrar as $t_registrar)
			{
				$selected = ($t_registrar['id'] == $t_domaine['id_registrar']) ? ' selected="selected"' : "";

				echo '<option value="'.$t_registrar['id'].'" '.$selected.'>'.$t_registrar['id'].'</option>';
			} 
			?>
		</select>
	</div>


<div class="field">
	<label for="">Hébegement :</label>
	<select name="id_heberg"  id="id_heberg">
	<option value="">Selectionner hebergement</option>
	<?php 
	foreach($all_t_hebergement as $t_hebergement)
	{
		$selected = ($t_hebergement['id'] == $t_domaine['id_heberg']) ? ' selected="selected"' : "";

		echo '<option value="'.$t_hebergement['id'].'" '.$selected.'>'.$t_hebergement['url'].'</option>';
	} 
	?>
</select>
</div>
<div class="field div-addr-ip" >
		<label for="">Adresse IP :</label>
		<select id="addr-ip"   name="addr-ip" ?>" >
		</select>
</div>





</div>
<div class="wrap-field info-gen carte">
<div class="field">
		<label for="id_cms">Cms</label>
		
		<select name="id_cms" class="form-control">
			<option value="">Sélectionner</option>
			<?php 
			foreach($all_t_cms as $t_cms)
			{
				$selected = ($t_cms['id'] == $t_domaine['id_cms']) ? ' selected="selected"' : "";

				echo '<option value="'.$t_cms['id'].'" '.$selected.'>'.$t_cms['id'].'</option>';
			} 
			?>
		</select>
	</div>
	<div class="ttl-infos clearfix">
		<span>Serveur et administration</span>
	</div>
	<div class="field">
		<label for="ftp_server">Ftp Server</label>
		<input type="text" name="ftp_server" value="<?php echo ($this->input->post('ftp_server') ? $this->input->post('ftp_server') : $t_domaine['ftp_server']); ?>" class="form-control" id="ftp_server" />
	</div>
	<div class="field">
		<label for="ftp_login">Ftp Login</label>
		<input type="text" name="ftp_login" value="<?php echo ($this->input->post('ftp_login') ? $this->input->post('ftp_login') : $t_domaine['ftp_login']); ?>" class="form-control" id="ftp_login" />
	</div>
	<div class="field">
		<label for="ftp_password">Ftp Password</label>
		<input type="text" name="ftp_password" value="<?php echo ($this->input->post('ftp_password') ? $this->input->post('ftp_password') : $t_domaine['ftp_password']); ?>" class="form-control" id="ftp_password" />
	</div>
	<div class="field">
		<label for="admin_url">Admin Url</label>
		<input type="text" name="admin_url" value="<?php echo ($this->input->post('admin_url') ? $this->input->post('admin_url') : $t_domaine['admin_url']); ?>" class="form-control" id="admin_url" />
	</div>
	<div class="field">
		<label for="admin_login">Admin Login</label>
		<input type="text" name="admin_login" value="<?php echo ($this->input->post('admin_login') ? $this->input->post('admin_login') : $t_domaine['admin_login']); ?>" class="form-control" id="admin_login" />
	</div>
	<div class="field">
		<label for="admin_password">Admin Password</label>
		<input type="text" name="admin_password" value="<?php echo ($this->input->post('admin_password') ? $this->input->post('admin_password') : $t_domaine['admin_password']); ?>" class="form-control" id="admin_password" />
	</div>
	
	<button type="submit" class="btn submit">Enregistrer</button>
</div>	
<?php echo form_close(); ?>