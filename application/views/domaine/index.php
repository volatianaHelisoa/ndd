<div class="head-section centered-el">
	<span class="title-l">Nom de domaine</span>
	<p>Vous avez 1000 Nom de domaines</p>
</div>
<div class="filter">
	<input type="text" class="searchInTable" placeholder="Rechercher">
	<label>
		Registrar
		<select name="select_registrar" >
				<option value="">Tous</option>
				<?php 
				foreach($all_t_registrar as $t_registrar)
				{
					$selected = ($t_registrar['id'] == $t_domaine['id_registrar']) ? ' selected="selected"' : "";

					echo '<option value="'.$t_registrar['id'].'" '.$selected.'>'.$t_registrar['name'].'</option>';
				} 
				?>
			</select>
	</label>
	<label>
		Hébergement
		<select name="select_heberg" >
				<option value="">Tous</option>
				<?php 
				foreach($all_t_hebergement as $t_hebergement)
				{
					$selected = ($t_hebergement['id'] == $t_domaine['id_heberg']) ? ' selected="selected"' : "";

					echo '<option value="'.$t_hebergement['id'].'" '.$selected.'>'.$t_hebergement['name'].'</option>';
				} 
				?>
			</select>
	</label>
	<label>
		Thématique
		<select name="select_theme" >
				<option value="">Toutes</option>
				<?php 
				foreach($all_t_theme as $t_theme)
				{
					$selected = $t_theme['id'] != null  ? ' selected="selected"' : "";

					echo '<option value="'.$t_theme['id'].'" '.$selected.'>'.$t_theme['name'].'</option>';
				} 
				?>
		</select>
	</label>
	<label>
		<button id="do_filter">Filter</button>
		<button id="reset_filter">&times;</button>
	</label>
</div>

<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('domaine/add'); ?>" class="cust-btn dark-btn add">Ajouter ndd</a> 
</div>

<table id="ndd-list" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
			<th>Nom de domaine</th>
			<th>Registrar</th>
			<th>Hébergement</th>
			<th>IP</th>
			<th class="thematique">Thématique</th>
			<th>CMS</th>
			<th>Techno</th>
			<th>Action</th>
	</thead>
	<tbody>
	<?php foreach($t_domaine as $t){  ?> 
		<tr id="<?php echo $t->id; ?>"> 
			<td><?php echo $t->domaine; ?></td>
			<td class="td_registrar"><?php echo $t->registrar; ?></td>
			<td class="td_heberg"><?php echo $t->heberg; ?></td>
			<td class="td_ip" data-ndd="<?php echo $t->id; ?>" > <span > <?php   if($t->ip != null ) echo $t->ip["ip"]; ?></span></td>
			<td class="thematique">
				<?php if($t->theme != null ) {?>
					<span class="tag"><?php echo $t->theme["name"]; ?></span>	
				<?php }?>
			</td>
			<td class="cms-type"><?php echo $t->cms; ?></td>
			<td>		
			<?php if($t->techno != null ) {?>
				<button class="cust-btn dark-btn small-btn techno " data-ndd="<?php echo $t->id; ?>">VOIR</button>
			<?php } else echo "NAN";?>
			
			</td>
			<td class="actions">
				<a href="<?php echo site_url('domaine/edit/'.$t->id); ?>" class="btn btn-info btn-xs">Edit</a> 
				<a href="<?php echo site_url('domaine/remove/'.$t->id); ?>" class="btn btn-danger btn-xs">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<div class="modal fade" id="technoModal">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true"></span>
		</button>
		<div class="modal-body">
		<div class="wrap-field carte">
		<div class="title-field">Cms : <span id="cms_res"> </span></div>
		<form action="">
			<div class="sub-title">Accès FTP</div>
			<div class="field1">
				<label for="">Serveur : </label>
				<input type="text" id="serveur_res" >
			</div>
			<div class="field1">
				<label for="">Login :  </label>
				<input type="text" id="login_res">
			</div>
			<div class="field1">
				<label for="">Mot de passe : </label>
				<input type="text" id="pass_res">
			</div>
			<div class="sub-title">Administration</div>
			<div class="field1">
				<label for="">URL :</label>
				<input type="text" id="url_res">
			</div>
			<div class="field1">
				<label for="">Login :  </label>
				<input type="text" id="bologin_res">
			</div>
			<div class="field1">
				<label for="">Mot de passe : </label>
				<input type="text" id="bopass_res">
			</div>
			<div class="sub-title">Plugin</div>
			<div class="content-chips ">
				<ul id="techno_result">
					
				</ul>
			</div>
			
		</form>
	</div>
		</div>
	</div>
	</div>
</div>

 <div class="modal fade" id="ipModal">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true"></span>
		</button>
		<div class="modal-body">
		<div class="wrap-field carte">
			<div class="title-field">Adresse IP : <span id="ip_res"> </span></div>
			<form action="">
				<div class="field2">
					<label for="">Nombre de site sur cette IP :</label>
					<span  id="nb_ip_res"></span>
				</div>
				<div class="field2">
					<label for="">Thematique Hébergé : </label>
					<div class="content-chips">
						<ul  id="theme_res">
							<li>Décoration<span>x</span></li>
							<li>Crédit<span>x</span></li>
							<li>Voyage <span>x</span></li>
							<li>Mode <span>x</span></li>
							<li>Life style<span>x</span></li>
						</ul>
					</div>
				</div>
				<div class="field2 other-field">
					<label for="">Hébergement : </label>
					
					<span id="heberg_res"></span>
				</div>
				<div class="field2 other-field">
					<label for="">Registrar : </label>
					<span id="registrar_res"></span>
				</div>
			</form>
		</div>
		</div>
	</div>
	</div>
</div>


<script type="text/javascript">
     // Start jQuery function after page is loaded
        $(document).ready(function(){       
      
		$('.techno').click(function(e){           
			var nddId = $(this).attr('data-ndd'); 
			var current_cms = $("#"+nddId).children('td.cms-type').text(); 
			
			$.ajax({
				url: "<?=site_url('domaine/get_techno_by_domaine')?>",
				data: { id: nddId},
				dataType: "json",
				type: "GET",                  
				success: function(data){   
					console.log(data);
						$("#cms_res").text(current_cms);	

						$("#serveur_res").val(data[0].ftp_server);	
						$("#login_res").val(data[0].ftp_login);	
						$("#pass_res").val(data[0].ftp_password);	

						$("#url_res").val(data[0].admin_url);	
						$("#bologin_res").val(data[0].admin_login);			
						$("#bopass_res").val(data[0].admin_password);											 

					var techno_result = $("#techno_result");  
					techno_result.empty();       
					$.each(data, function (index, ndd) {
						techno_result.append("<li>" +ndd.techno+ "<span>x</span></li>");                 
					
					})
					$('#technoModal').modal('show');
				}
			});
        
		 });
		 
		 $('.td_ip').click(function(e){           
			var nddId = $(this).attr('data-ndd'); 
		
			var current_registrar = $("#"+nddId).children('td.td_registrar').text(); 
			var current_heberg = $("#"+nddId).children('td.td_heberg').text(); 
			var current_ip = $("#"+nddId).children('td.td_ip').text(); 					
			
			$("#ip_res").text(current_ip);	
			$("#registrar_res").text(current_registrar);
			$("#heberg_res").text(current_heberg);
			
			$.ajax({
				url: "<?=site_url('domaine/get_ip_info_by_domaine')?>",
				data: { id: current_ip},
				dataType: "json",
				type: "GET",                  
				success: function(data){   
					console.log(data);						 
					$("#nb_ip_res").text(data.length);
					var theme_res = $("#theme_res");  
					theme_res.empty();       
					$.each(data, function (index, ndd) {
						theme_res.append("<li>" +ndd.name+ "<span>x</span></li>");                 
					
					})
					$('#ipModal').modal('show');
				}
			});

		});
     });  
    </script>
