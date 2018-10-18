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
				$selected = ($t_role['id'] ==  $t_user['id_role']) ? ' selected="selected"' : "";
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
	
	<div class="step-after clearfix" style=" clear: both;">
		<div class="ttl-infos clearfix">
			<span>Changer mot de passe</span>
		</div>
		<div class="field half">
			<label for="">Nouveau mot de passe : </label>
			<input type="text" name="password" id="newpass1" class="pass-field">
		</div>
		<div class="field half">
			<label for="">Répétér nouveau mot de passe :</label>
			<input type="text" id="newpass2" class="pass-field">
		</div>
		
	</div>
	<div id="mdp-equality" class="clearfix"></div>
		<ul class="policies">
			<li id="pass-length">Au moin caractère 8</li>
			<li id="pass-min-maj">Utilisez des MAJ et des MIN</li>
			<li id="pass-special">Utilisez des caractères spéciaux</li>
			<li id="pass-number">Pensez à ajouter des chiffres</li>
		</ul>  
	<div id="result"></div> 
	<button type="submit" class="submit primary-action">Enregistrer</button>
	<a href="<?php echo site_url('utilisateur'); ?>" class="submit">Annuler</a>
</div>
	
<?php echo form_close(); ?>

<script type="text/javascript">
	function checkStrength(s) {
		var a = 0;
		return s.length >= 8 ? (a += 1, $("#pass-length").removeClass(), $("#pass-length").addClass("valid")) : ($("#result").addClass("short"), $("#pass-length").removeClass(), $("#pass-length").addClass("invalid")),
		s.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/) && s.length > 0 ? (a += 1, $("#pass-min-maj").removeClass(), $("#pass-min-maj").addClass("valid")) : ($("#pass-min-maj").removeClass(), $("#pass-min-maj").addClass("invalid")),
		s.match(/([0-9])/) && null != s.length ? (a += 1, $("#pass-number").removeClass(), $("#pass-number").addClass("valid")) : ($("#pass-number").removeClass(), $("#pass-number").addClass("invalid")),
		s.match(/([!,%,&,@,#,$,^,*,?,_,~])/) && null != s.length ? (a += 1, $("#pass-special").removeClass(), $("#pass-special").addClass("valid")) : ($("#pass-special").removeClass(), $("#pass-special").addClass("invalid")),
		s.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/) && null != s.length && (a += 1),
		a < 2 ? ($("#result").removeClass(), $("#result").addClass("faible"), "Mot de passe trop Faible") : 2 == a ? ($("#result").removeClass(), $("#result").addClass("bon"), "Mot de passe moyen") : ($("#result").removeClass(), $("#result").addClass("fort"), "Mot de passe fort")
	}

	function checkEquality() {
		var s = $("#newpass1").val(),
			a = $("#newpass2").val();
		a && s == a ? (console.log("pass"), $("#mdp-equality").html('Vos mots de passe concordent')) : $("#mdp-equality").html('Les deux mots de passes ne sont pas identiques')
	}
	$("#newpass1").keyup(function() {
		$("#result").html(checkStrength($("#newpass1").val()))
	}), $(".pass-field").keyup(function() {
		checkEquality()
	});
</script>