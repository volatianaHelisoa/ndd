<div class="head-section centered-el">
	<span class="title-l">Nom de domaine</span>
	<p>Vous avez <span><?php echo $nb_site ?></span> Nom(s) de domaine(s)</p>
</div>
<div class="filter">

	<div id="inner-top-panel" class="showpanel clear">
		<div class="left ">
			<div class="usr-srch--input-wrapper">
				<input autocomplete="off" class="searchInTable usr-srch--input" type="search" placeholder="Rechercher" id="recherche"/>
			</div>
			<i class="fa fa-3x fa-search"></i>
		</div>
	</div>
	<label>
		Registrar
		<select name="select_registrar" id="filter-registar" >
				<option value="">Tous</option>
				<?php 
				foreach($all_t_registrar as $t_registrar)
				{
					$selected =  "";

					echo '<option value="'.$t_registrar['name'].'" '.$selected.'>'.$t_registrar['name'].'</option>';
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
					$selected =  "";

					echo '<option value="'.$t_hebergement['name'].'" '.$selected.'>'.$t_hebergement['name'].'</option>';
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
			<td class="td_ip" data-ndd="<?php echo $t->id; ?>" data-backdrop="static" data-keyboard="false" > <span > <?php   if($t->ip != null ) echo $t->ip["ip"]; ?></span></td>
			<td class="thematique">
				<?php if($t->theme != null ) {?>
					<span class="tag"><?php echo $t->theme["name"]; ?></span>	
				<?php }?>
			</td>
			<td class="cms-type" >			
			<?php if($t->cms != null ) {?>
				<button class="cust-btn dark-btn small-btn techno "  data-backdrop="static" data-keyboard="false" data-ndd="<?php echo $t->id; ?>"  data-type="<?php echo $t->cms; ?>">VOIR</button>
			<?php } else echo "NAN";?>

			</td>
			<td class="thematique">		
			<?php if($t->techno != null ) { ?>	
				
					<?php	foreach($t->techno as $tech){	?>
						<span class="tag"><?php echo  $tech["techno"]; ?> </span>
					<?php	} ?>		
				
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
		<button type="button" class="close close_techno" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true"></span>
		</button>
		<div class="modal-body">
		<div class="wrap-field carte">
		<div class="title-field">Cms : <span id="cms_res"> </span></div>
			<form action="">
			<input type="hidden" name="ndd_id" id="ndd_id" />
			<div class="sub-title">Accès FTP</div>
			<div class="ttl-infos clearfix">
				<input type="button" class="modif btn_update_techno" value="Modifier" >
			</div>
                            
			<div class="field1">
				<label for="">Serveur : </label>
				<span id="serveur_res" ></span>
				<input type="text" id="txt_serveur_res">
			</div>
			<div class="field1">
				<label for="">Login :  </label>
				<span id="login_res"></span>
				<input type="text" id="txt_login_res">
			</div>
			<div class="field1">
				<label for="">Mot de passe : </label>
				<span id="pass_res"></span>
				<input type="text" id="txt_pass_res">
			</div>
			<div class="sub-title">Administration</div>
			<div class="field1">
				<label for="">URL :</label>
				<span id="url_res"></span>
				<input type="text" id="txt_url_res">
			</div>
			<div class="field1">
				<label for="">Login :  </label>
				<span id="bologin_res"></span>
				<input type="text" id="txt_bologin_res">
			</div>
			<div class="field1">
				<label for="">Mot de passe : </label>
				<span id="bopass_res"></span>
				<input type="text" id="txt_bopass_res">
			</div>
			<div class="sub-title">Plugin</div>
			<div class="content-chips ">
				<ul id="techno_result">					
				</ul> 
			</div>
			<div class="content-chips select_techno_result">			
				<select  name="select_ml_techno[]" id="select_techno_type"  data-live-search="true" multiple class="select_techno" >							
				</select>
				
			</div>
			</form>
			<input type="button" class="submit btn_save_acces" value="Enregistrer">
		
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
					<button  id="nb_ip_res" ></button>
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
	  
		var $popInput = $('#technoModal input[type="text"]');	
		$popInput.hide();
		$("#technoModal .select_techno_result").hide();	
		$(".btn_save_acces").hide();	
			
		$('#technoModal').modal({
                backdrop: 'static',
				keyboard: false,
				show: false
	   })
	   

		$('.techno').click(function(e){           
			var nddId = $(this).attr('data-ndd'); 
		
			var current_cms = $(this).attr('data-type'); 	
			console.log(current_cms)	;
			$("#ndd_id").text(nddId);	
			$.ajax({
				url: "<?=site_url('domaine/get_techno_by_domaine')?>",
				data: { id: nddId},
				dataType: "json",
				type: "GET",                  
				success: function(data){   				
					
					if(!jQuery.isEmptyObject(data)){
						$("#cms_res").text(current_cms);	

						$("#serveur_res").text(data[0].ftp_server);	
						$("#login_res").text(data[0].ftp_login);	
						$("#pass_res").text(data[0].ftp_password);	

						$("#url_res").text(data[0].admin_url);	
						$("#bologin_res").text(data[0].admin_login);			
						$("#bopass_res").text(data[0].admin_password);	
						
						$("#txt_serveur_res").val(data[0].ftp_server);	
						$("#txt_login_res").val(data[0].ftp_login);	
						$("#txt_pass_res").val(data[0].ftp_password);	

						$("#txt_url_res").val(data[0].admin_url);	
						$("#txt_bologin_res").val(data[0].admin_login);			
						$("#txt_bopass_res").val(data[0].admin_password);		

						var techno_result = $("#techno_result");  
						techno_result.empty();       
						$.each(data, function (index, ndd) {
							techno_result.append("<li>" +ndd.techno+ "<span>x</span></li>");                 
						
						})
					}
					
					$('#technoModal').modal('show');
				}
			});
        
		 });

		 $('.btn_save_acces').click(function(e){   	
			var nddId = $("#ndd_id").text(); 	
			
			var ftp_server = $("#txt_serveur_res").val();	
			var ftp_login = $("#txt_login_res").val();	
			var ftp_password = $("#txt_pass_res").val();	
			var admin_url = $("#txt_url_res").val();
			var admin_login = $("#txt_bologin_res").val();
			var admin_password = $("#txt_bopass_res").val();			
			var techno_list = get_techno_selected();
			var ndd_obj = {"ndd_id": nddId,"ftp_server":ftp_server, "ftp_login":ftp_login,"ftp_password":ftp_password,"admin_url":admin_url,"admin_login":admin_login,"admin_password":admin_password,"techno_list":techno_list};      
			console.log(ndd_obj);
			 $.ajax({
				type: "POST",
				url:  "<?=site_url('domaine/edit_acces')?>",
				data: ndd_obj,
				dataType: "text",  
				cache:false,
				success: 
					function(response){
						if ( myTrim(response) == "index"  ){
							console.log(response);  
							reinit_techno();
							$('#technoModal').modal('hide');
						}
					}
				});// you have missed this bracket
		

		});  

		function get_techno_selected(){
			var arr = [];
			$('#select_techno_type option:selected').each(function() {			
				arr.push($(this).val());
			});
			return arr;
		}

		$('.close_techno').click(function(e){   
			
			reinit_techno();
		});  

		function myTrim(x) {
            return x.replace(/^\s+|\s+$/gm,'');
		}
		
		function reinit_techno(){
			var $popInput = $('#technoModal input[type="text"]');	
			$popInput.hide();		
			$(".btn_save_acces").hide();	
			var select = $("#technoModal .select_techno_result select");	
			select.empty();
			$("#technoModal .select_techno_result").hide();	
			
			var $popSpan = $('#technoModal span');	
			$popSpan.show();

			$('.btn_update_techno').show();	
		}

		 $('.btn_update_techno').click(function(e){   
		
			// var $popInput = $('#technoModal input[type="text"]');	
			// $popInput.hide();
			// $("#technoModal .select_techno_result").hide();	
			// $(".btn_save_acces").hide();	
			$('.btn_update_techno').hide();	

			$.ajax({
				url: "<?=site_url('domaine/get_techno_list')?>",				
				dataType: "json",
				type: "GET",                  
				success: function(data){   

					$("#technoModal .select_techno_result").removeAttr("style");
					var $popInput = $('#technoModal input[type="text"]');	
					$popInput.show();
				
					$(".btn_save_acces").show();						
					var $popSpan = $('#technoModal span');	
					$popSpan.hide();


					var select = $("#technoModal .select_techno_result #select_techno_type");	
					select.empty();
					
					$.each(data, function (index, itemData) {					
						select
							.append($('<option>', { value : itemData.id })
							.text(itemData.value));
					});	

					$('#technoModal .select_techno_result select').multiselect({});
					
					

				}
			});
		});

		$('#ipModal').modal({
                backdrop: 'static',
				keyboard: false,
				show: false
       	})

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
