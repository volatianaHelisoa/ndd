
	<div class="head-section centered-el">
		<span class="title-l">Mon compte</span>
	</div>
	<div class="wrap-field-compte carte">
		<div class="title-field"></div>
		<div class="bloc-profil">
			<span class="img-thumb"><img src="<?php echo base_url(); ?>assets/images/user-thumb.jpg" alt="Profil photo"></span>
		</div>
		<div class="ttl-infos clearfix">
			<span>Informations</span>
			<a href="<?php echo site_url('user/edit/'.$t_user['id']); ?>" class="modif">Modifier</a>
		</div>
		<div class="field half">
			<label for="">Rôle</label>
			<span class="info-bill"><?php echo $t_role; ?></span>
		</div>
		<div class="field half">
			<label for="">Nom : </label>
			<span class="info-bill"><?php echo ($this->input->post('name') ? $this->input->post('name') : $t_user['name']); ?></span>
		</div>
		<div class="field half">
			<label for="">Prénom :</label>
			<span class="info-bill"><?php echo ($this->input->post('firstname') ? $this->input->post('firstname') : $t_user['firstname']); ?></span>
		</div>
		<div class="field half"> 
			<label for="">Email :</label>
			<span class="info-bill"><?php echo ($this->input->post('email') ? $this->input->post('email') : $t_user['email']); ?></span>
		</div>
		<div class="field full">
			<label for="">Mot de passe :</label>
			<span class="info-bill"><?php echo ($this->input->post('password') ? $this->input->post('password') : $t_user['password']); ?></span>
		</div>
	</div>