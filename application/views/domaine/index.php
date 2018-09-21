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
				<option value="tous">Tous</option>
				<?php 
				foreach($all_t_registrar as $t_registrar)
				{
					$selected =  "";

					echo '<option value="'.$t_registrar['id'].'" '.$selected.'>'.$t_registrar['name'].'</option>';
				} 
				?>
			</select>
	</label>
	<label>
		Hébergement
		<select name="select_heberg" id="filter-heberg" >
				<option value="tous">Tous</option>
				<?php 
				foreach($all_t_hebergement as $t_hebergement)
				{
					$selected =  "";

					echo '<option value="'.$t_hebergement['id'].'" '.$selected.'>'.$t_hebergement['name'].'</option>';
				} 
				?>
			</select>
	</label>
	<label>
		Thématique
		<select name="select_theme" id="filter-theme" >
				<option value="tous">Toutes</option>
				<?php 
				foreach($all_t_theme as $t_theme)
				{
					$selected =  "";

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
			<td class="td_registrar" data-id ="<?php echo $t->id_registrar; ?>"><?php echo $t->registrar; ?></td>
			<td class="td_heberg" data-id ="<?php echo $t->id_heberg; ?>"><?php echo $t->heberg; ?></td>
			<td class="td_ip" data-id="<?php if($t->ip!= null ) echo $t->ip["id"];  ?>" data-ndd="<?php echo $t->id; ?>" data-backdrop="static" data-keyboard="false" > <span > <?php   if($t->ip != null ) echo $t->ip["adresse"]; ?></span></td>
			<td class="thematique">
				<?php if($t->theme != null ) {?>
					<span class="tag"><?php echo $t->theme["name"]; ?></span>	
				<?php }?>
			</td>
			<td class="td_cms" data-id ="<?php echo $t->id_cms; ?>" data-type="<?php echo $t->cms; ?>" >			
		
				<button class="cust-btn dark-btn small-btn techno "  data-backdrop="static" data-keyboard="false" data-ndd="<?php echo $t->id; ?>"  data-type="<?php echo $t->cms; ?>">	
				<?php if($t->cms != "" ){				
					echo  "VOIR";  }
				else{
					echo "AJOUTER";
				}   
				?>
			</button>
		
				
			
			</td>
			<td class="thematique">		
			<?php if($t->techno != null ) { ?>	
				
					<?php	foreach($t->techno as $tech){	?>
						<span class="tag"><?php echo  $tech["techno"]; ?> </span>
					<?php	} ?>		
				
				<?php } else echo "NAN";?>
			
			</td>
			<td class="actions">
			
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
			<div class="ttl-infos clearfix">
				<input type="button" class="modif btn_update_techno" value="Modifier" >
			</div>
			<div class="div_cms" >
			<div class="sub-title">CMS / HTML</div>
			<div class="field ">					
				<select name="id_cms" id="select_cms">
					<option value="">Selectionner cms</option>
					<?php 
					foreach($all_t_cms as $t_cms)
					{
						$selected = "";

						echo '<option value="'.$t_cms['id'].'" '.$selected.'>'.$t_cms['type'].'</option>';
					} 
					?>
				</select>
			</div>
			</div>
			<div class="sub-title">Accès FTP</div>	
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
		<button type="button" class="close close_ip" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true"></span>
		</button>
		<input type="hidden" name="ndd_id" id="ndd_domaine_id" />
		<div class="modal-body">
		<div class="wrap-field carte">
			<div class="title-field">Adresse IP : <span id="addrese_ip_res"> </span></div>
			<form action="">
				<div class="ttl-infos clearfix">
					<input type="button" class="modif btn_update_ip" value="Modifier" >
				</div>
				<div class="field2">
					<label for="">Nombre de site sur cette IP :</label>
					<button  id="nb_ip_res" class="btn_nb_ip" ></button>
				</div>
				<div class="field">
					<label for="">Thematique hébergée : </label>
					<div class="content-chips">
						<ul  id="theme_res">						
						</ul>									
					</div>			
					
				</div>
				<div class="field other-field sel_theme">
					
						<select name="registrar" id="dp_theme"  >
						<option value="">Selectionner theme</option>
						<?php 
							foreach($all_t_theme as $t_theme)
							{
								$selected = "";
								echo '<option value="'.$t_theme['id'].'" '.$selected.'>'.$t_theme['name'].'</option>';
							} 
						?>
					</select>						
				</div>
				<div class="field other-field">
					<label for="">Registrar : </label>
					<span id="registrar_res" data-id="" ></span>
					<select name="registrar" id="dp_registrar"  >
						<option value="">Selectionner registrar</option>
						<?php 
						foreach($all_t_registrar as $t_registrar)
						{
							$selected = "";

							echo '<option value="'.$t_registrar['id'].'" '.$selected.'>'.$t_registrar['name'].'</option>';
						} 
						?>
					</select>
				</div>
				
				<div class="field other-field">
					<label for="">Hébergement : </label>					
					<span id="heberg_res" data-id="" ></span>
					<select name="hebergement"  id="dp_heberg" >
							<option value="">Selectionner hebergement</option>
							<?php 
							foreach($all_t_hebergement as $t_hebergement)
							{
								$selected = "";
								echo '<option value="'.$t_hebergement['id'].'" '.$selected.'>'.$t_hebergement['name'].'</option>';
							} 
							?>
					</select>
				</div>				
				
				<div class="field other-field">
						<label for="">Adresse IP :</label>
						<span id="ip_res" data-id="" ></span>
						<select id="dp_ip" name="addr-ip" class="div-addr-ip" >									
							
						</select>
				</div>
			
			
				<input type="button" class="submit btn_save_ip" value="Enregistrer">
			</form>
		</div>
		</div>
	</div>
	</div>
</div>
<script src="<?php echo base_url(); ?>assets/JS/ndd-script.js"></script>

<script type="text/javascript">
     // Start jQuery function after page is loaded
        $(document).ready(function(){       
	  
		var $popInput = $('#technoModal input[type="text"]');	
		$popInput.hide();
		$("#technoModal .select_techno_result").hide();	
		$(".btn_save_acces").hide();
		
		$(".div_cms").hide();	

		$("#dp_heberg").hide();
		$("#dp_registrar").hide();
		$(".btn_save_ip").hide();
		$(".div-addr-ip").hide();
		$("#dp_theme").hide();
		$(".sel_theme").hide();
		
			
		$('#technoModal').modal({
                backdrop: 'static',
				keyboard: false,
				show: false
	   })
	   
		$('.techno').click(function(e){           
			var nddId = $(this).attr('data-ndd'); 		
			var current_cms = $(this).attr('data-type'); 
			var current_cms_id = $("#"+nddId).children('td.td_cms').attr('data-id'); 
			$("#ndd_id").text(nddId);	
			$("#cms_res").text(current_cms);	
			$("#select_cms").val(current_cms_id);	

			$.ajax({
				url: "<?=site_url('domaine/get_techno_by_domaine')?>",
				data: { id: nddId},
				dataType: "json",
				type: "GET",                  
				success: function(data){   				
					
					if(!jQuery.isEmptyObject(data)){
					

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

		  $('.btn_update_techno').click(function(e){  
			var nddId = $("#ndd_id").text();	
			$('.btn_update_techno').hide();	
			var current_cms = $("#"+nddId).children('td.td_cms').attr('data-type');  
			var current_cms_id = $("#"+nddId).children('td.td_cms').attr('data-id'); 
			$("#cms_res").text(current_cms);	
			$("#select_cms").val(current_cms_id);	

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
					$("#cms_res").show();	
					$(".div_cms").show();	

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

		 $('.btn_save_acces').click(function(e){   	
			var nddId = $("#ndd_id").text(); 	
			
			var ftp_server = $("#txt_serveur_res").val();	
			var ftp_login = $("#txt_login_res").val();	
			var ftp_password = $("#txt_pass_res").val();	
			var admin_url = $("#txt_url_res").val();
			var admin_login = $("#txt_bologin_res").val();
			var admin_password = $("#txt_bopass_res").val();
			var cms = $("#select_cms").val();
						
			var techno_list = get_techno_selected();

			var ndd_obj = {"ndd_id": nddId,"ftp_server":ftp_server, "ftp_login":ftp_login,"ftp_password":ftp_password,"admin_url":admin_url,"admin_login":admin_login,"admin_password":admin_password,"techno_list":techno_list,"cms":cms};      
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
							location.reload();
						}
					}
				});
		

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

		$('.close_ip').click(function(e){   
			
			reinit_ip();
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
		
		
			$("#ndd_domaine_id").text(nddId);	
			
			$("#registrar_res").text(current_registrar);
			$("#heberg_res").text(current_heberg);
			$("#ip_res").text(current_ip);	
			$("#addrese_ip_res").text(current_ip);	
			
			$.ajax({
				url: "<?=site_url('domaine/get_ip_info_by_domaine')?>",
				data: { id: current_ip},
				dataType: "json",
				type: "GET",                  
				success: function(data){   
									 
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

		

		 $('.btn_update_ip').click(function(e){   
			var nddId = $("#ndd_domaine_id").text();	
			var current_registrar = $("#"+nddId).children('td.td_registrar').attr('data-id'); 
			var current_heberg = $("#"+nddId).children('td.td_heberg').attr('data-id'); 
			var theme = $("#dp_theme").val();	
		
			if(current_heberg)
				get_ip_list_by_heberg(current_heberg);

			$("#dp_registrar").val(current_registrar);
			$("#dp_heberg").val(current_heberg);
			$("#dp_heberg").show();
			$("#dp_registrar").show();
			$("#dp_theme").show();
			$(".sel_theme").show();

			$(".btn_save_ip").show();
			$("#heberg_res").hide();
			$("#ip_res").hide();
			$("#registrar_res").hide();
			$('.btn_update_ip').hide();	
		});

		function reinit_ip(){
			$("#dp_heberg").hide();
			$("#dp_registrar").hide();
			$("#dp_theme").hide();
			$(".btn_save_ip").hide();
			$(".sel_theme").hide();
			$(".div-addr-ip").hide();
			
			$("#heberg_res").show();
			$("#ip_res").show();
			$("#registrar_res").show();
			$('.btn_update_ip').show();	

		}

		function get_ip_list_by_heberg(id_heberg){
			var nddId = $("#ndd_domaine_id").text();	
			var current_ip_id = $("#"+nddId).children('td.td_ip').attr('data-id') ;
			$.ajax({
				type: "GET",
				url: "<?=site_url('domaine/get_select_ip')?>",
				data: { id_heberg: id_heberg},
				dataType: "json",
				success: function(data){

					var select = $("#dp_ip");				
					select.empty();
					select.append($('<option/>', {
						value: 0,
						text: "Selectionner IP"
					}));
					$.each(data, function (index, itemData) {
					
						select
							.append($('<option>', { value : itemData.id })
							.text(itemData.value));
						});			

					if(current_ip_id != "")
						select.val(current_ip_id);				
						$(".div-addr-ip").show();		
				}			
        	});	
		}

		$("#dp_heberg").change(function(){
			var dID = $(this).val();			
			var nddId = $("#ndd_domaine_id").text(); 	
			var registrar = $("#dp_registrar").val();
			var heberg = $("#dp_heberg").val();	
			
			
			var current_ip = $("#"+nddId).children('td.td_ip').text(); 	
		
			if(dID != ""){
				$.ajax({
				type: "GET",
				url: "<?=site_url('domaine/get_select_ip')?>",
				data: { id_heberg: dID},
				dataType: "json",
				success: function(data){

					var select = $("#dp_ip");				
					select.empty();
					select.append($('<option/>', {
						value: 0,
						text: "Selectionner IP"
					}));
					$.each(data, function (index, itemData) {
					
						select
							.append($('<option>', { value : itemData.id })
							.text(itemData.value));
						});			

					if(current_ip_id != "")
						select.val(current_ip_id);

					$(".div-addr-ip").show();		
				
				}			
        	});	
			}
		});		

		 $('.btn_save_ip').click(function(e){   	
			var nddId = $("#ndd_domaine_id").text(); 	
			var registrar = $("#dp_registrar").val();
			var heberg = $("#dp_heberg").val();	
			var ip = $("#dp_ip").val();	
			var current_ip = ($("#dp_ip").val() == "") ? $("#"+nddId).children('td.td_ip').attr('data-id') : $("#dp_ip").val(); 
			var theme = $("#dp_theme").val();	
			
			var ndd_obj = {"ndd_id": nddId,"registrar":registrar,"heberg":heberg, "ip":ip,"theme":theme};      
			console.log(ndd_obj);
			 $.ajax({
				type: "POST",
				url:  "<?=site_url('domaine/edit_ip')?>",
				data: ndd_obj,
				dataType: "text",  
				cache:false,
				success: 
					function(response){
						if ( myTrim(response) == "index"  ){
							console.log(response);  
							reinit_ip();
							$('#ipModal').modal('hide');
							location.reload();
						}
					}
				});		

		});  

     });  
    </script>
