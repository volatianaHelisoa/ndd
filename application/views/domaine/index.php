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
		Type
		<select name="select_type" id="filter-type" >
				<option value="tous">Tous</option>
				<?php 
				foreach($all_t_type as $t_type)
				{
					$selected =  "";

					echo '<option value="'.$t_type['name_type'].'" '.$selected.'>'.$t_type['name_type'].'</option>';
				} 
				?>
			</select>
	</label>
	<label>
		Registrar
		<select name="select_registrar" id="filter-registar" >
				<option value="tous">Tous</option>
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
		<select name="select_heberg" id="filter-heberg" >
				<option value="tous">Tous</option>
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
		<select name="select_theme" id="filter-theme" >
				<option value="tous">Toutes</option>
				<?php 
				foreach($all_t_theme as $t_theme)
				{
					$selected =  "";

					echo '<option value="'.$t_theme['name'].'" '.$selected.'>'.$t_theme['name'].'</option>';
				} 
				?>
		</select>
	</label>
	<label>
		<button id="do_filter">Filtrer</button>
		<button id="reset_filter">&times;</button>
	</label>
</div>

<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('domaine/add'); ?>" class="cust-btn dark-btn add">Ajouter ndd</a> 
</div>

<table id="ndd-list" class="display compact responsive custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>Nom de domaine</th>
		<th>Type</th>
		<th>Registrar</th>
		<th>Hébergement</th>
		<th>IP</th>
		<th class="thematique">Thématique</th>
		<th class="not-export">CMS</th>		
		<th class="not-export">Statut</th>
		<th class="not-export">Action</th>
	</thead>
	<tbody>
	<?php foreach($t_domaine as $t){  ?> 
		<tr id="<?php echo $t->id; ?>"> 
			<td class="url"><?php echo $t->domaine; ?></td>
			<td><?php echo $t->type; ?></td>
			<td class="td_registrar" data-id ="<?php echo $t->id_registrar; ?>"><?php echo $t->registrar; ?></td>
			<td class="td_heberg" data-id ="<?php echo $t->id_heberg; ?>"><?php echo $t->heberg; ?></td>
			<td class="td_ip" data-id="<?php if($t->ip!= null ) echo $t->ip["id"];  ?>" data-ndd="<?php echo $t->id; ?>" data-backdrop="static" data-keyboard="false" > <span > <?php   if($t->ip != null ) echo $t->ip["adresse"]; ?></span></td>
			<td class="thematique">
				<?php if($t->theme != null ) {?>				
					<?php	foreach($t->theme as $theme){ ?>
						<span class="tag"><?php echo  $theme["name"]; ?></span>
					<?php	} ?>	
					
				<?php }?>
			</td>
			<td class="td_cms not-export" data-id ="<?php echo $t->id_cms; ?>" data-type="<?php echo $t->cms; ?>" >
				<div class="techno"  data-backdrop="static" data-keyboard="false" data-ndd="<?php echo $t->id; ?>"  data-type="<?php echo $t->cms; ?>">
					<?php if($t->cms != "" ){				
						echo  $t->cms;  }
					else{
						echo "AJOUTER";
					}   
					?>
				</div>
			</td>
			
			<td class="statut not-export">				
				<button title="Status domaine" class="btn btn-danger">Voir</button>
			</td>
			<td class="actions not-export">	
				<a href="<?php echo site_url('Domaine/edit/'.$t->id); ?>" class="btn btn-info btn-xs act-edit-btn"></a> 	
				<a href=""  title="Supprimer domaine"  class="btn btn-danger act-delete-btn" data-toggle="modal" data-target="#myModal<?php echo $t->id; ?>"></a>
			</td>
		</tr>
		<div class="modal fade" id="myModal<?php echo $t->id; ?>" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">      
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>                
					<div class="modal-body">
                        <div class="wrap-field carte">
                          	<div class="title-field">Confirmation</div>
                           
							<p>Êtes-vous sûr de vouloir supprimer ?</p>
							<div class="modal-footer">
							<a  href="<?php echo site_url('domaine/remove/'. $t->id); ?>" class="submit"  >Oui</a>
							<button type="button" class="submit" data-dismiss="modal">Non</button>
						</div>
					</div>
				</div>
			</div>
		</div>				

	<?php } ?>
	</tbody>
</table>

<div class="modal fade" id="statusModal" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true"></span>
		</button>
		<div class="modal-body">
		<div class="wrap-field carte">
			<div class="title-field">Status du domaine : <?php echo $t->domaine; ?></div>									
				<div class="field2 other-field">
					<div class="msg-info"></div>				
					<span class="domaine_status"></span>
				</div>
		</div>
		</div>
	</div>
	</div>
</div>

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
			<div class="modifier-btn clearfix div_update_techno">
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
				<input type="password" id="pass_res" disabled class="info-disabled">
				<input type="checkbox" onclick='toggleView("pass_res")' class="eye_toggle" id="view_ftppass">
				<input type="text" id="txt_pass_res">
			</div>
						
				<div id="bo-acces" class="">
					<div class="sub-title">Administration</div>
					<div class="field1">
						<label for="">URL :</label>
						<a href="#" id="url_a" rel="noopener noreferrer" target="_blank" ><span id="url_res"></span></a>
						<input type="text" id="txt_url_res">
					</div>
					<div class="field1">
						<label for="">Login :  </label>
						<span id="bologin_res"></span>
						<input type="text" id="txt_bologin_res">
					</div>
					<div class="field1">
						<label for="">Mot de passe : </label>
						<input type="password" id="bopass_res" disabled class="info-disabled">
						<input type="checkbox" onclick='toggleView("bopass_res")' class="eye_toggle" id="view_bopass">
						<input type="text" id="txt_bopass_res">
					</div>
					<div class="sub-title">Techno</div>
					<div class="content-chips plug-list">
						<ul id="techno_result">					
						</ul> 
					</div>
					<div class="select_techno_result">			
						<input class="typeahead" name="techno_tags" type="text" data-role="materialtags" placeholder="Saisissez vos plugins ici">			
					</div>
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
				<div class="ttl-infos clearfix div_update_ip">
					<input type="button" class="modif btn_update_ip" value="Modifier" >
				</div>
				<div class="field2">
					<label for="">Nombre de site sur cette IP :</label>
					<button  id="nb_ip_res" class="btn_nb_ip" ></button>
				</div>
				<div class="field">
					<label for="">Thematique hébergée : </label>
					<div class="content-chips">
						<input class="typeahead" name="theme_tags" type="text" id="techno_result" data-role="materialtags" placeholder="Ajouter d'autres thèmes" value="">
						<ul  id="theme_res">		
						</ul>									
					</div>
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
				<div class="field other-field div_ip">
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
	function toggleView(elm) {
		var x = document.getElementById(elm);
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}

	$(document).ready(function(){
	
		
		$("#select_cms").change(function(){
			var value = $(this).find("option:selected").text();
			if (value.toLowerCase().indexOf("html") >= 0) 
				$("#bo-acces").hide();
			else
				$("#bo-acces").show();				
		});
		
		var $popInput = $('#technoModal input[type="text"]');	
		$popInput.hide();
		$("#technoModal .select_techno_result").hide();	
		$(".btn_save_acces").hide();
		
		$(".div_cms").hide();	

		$("#dp_heberg").hide();
		$("#dp_registrar").hide();
		$(".btn_save_ip").hide();
		$(".div-addr-ip").hide();
		$(".div_ip").hide();
		
	//	$("#dp_theme").hide();
		$(".sel_theme").hide();
		
		$('#technoModal').modal({
				backdrop: 'static',
				keyboard: false,
				show: false
		})
   
		$('#ndd-list').on('click', 'div.techno', function(e){
		// $('.techno').click(function(e){
			var str = $(this).attr("data-type");					
			var nddId = $(this).attr('data-ndd'); 		
			var current_cms = $(this).attr('data-type'); 
			var current_cms_id = $("#"+nddId).children('td.td_cms').attr('data-id'); 
			$("#ndd_id").text(nddId);	
			$("#cms_res").text(current_cms);	
			$("#select_cms").val(current_cms_id);	
										
			if (str.toLowerCase().indexOf("html") >= 0) {
				$("#bo-acces").hide();					
				$.ajax({
					url: "<?=site_url('domaine/get_by_domaine')?>",
					data: { id: nddId},
					dataType: "json",
					type: "GET",
					success: function(data){							
						if(!jQuery.isEmptyObject(data)){
							//console.log(url);
							$("#serveur_res").text(data.ftp_server);
							$("#login_res").text(data.ftp_login);
							$("#pass_res").val(data.ftp_password);
							$("#txt_serveur_res").val(data.ftp_server);	
							$("#txt_login_res").val(data.ftp_login);	
							$("#txt_pass_res").val(data.ftp_password);								
						}
						$('#technoModal').modal('show');
					}
				});				
			}
			else{					
				$.ajax({
					url: "<?=site_url('domaine/get_techno_by_domaine')?>",
					data: { id: nddId},
					dataType: "json",
					type: "GET",                  
					success: function(data){   				
						if($.isArray(data)){
							if(!jQuery.isEmptyObject(data)){						

								$("#serveur_res").text(data[0].ftp_server);	
								$("#login_res").text(data[0].ftp_login);	
								$("#pass_res").val(data[0].ftp_password);	

								$("#url_res").text(data[0].admin_url);	
								$("#url_a").attr("href", data[0].admin_url);
								$("#bologin_res").text(data[0].admin_login);			
								$("#bopass_res").val(data[0].admin_password);	

								$("#txt_serveur_res").val(data[0].ftp_server);	
								$("#txt_login_res").val(data[0].ftp_login);	
								$("#txt_pass_res").val(data[0].ftp_password);	

								$("#txt_url_res").val(data[0].admin_url);	
								$("#txt_bologin_res").val(data[0].admin_login);			
								$("#txt_bopass_res").val(data[0].admin_password);		

								var techno_result = $("#techno_result");  
								techno_result.empty();       
								
								$.each(data, function (index, ndd) {										
									
									techno_result.append("<li>" +ndd.techno+ "</li>");   
									
								})
							}
						}else{
							if(!jQuery.isEmptyObject(data)){
						
								$("#serveur_res").text(data.ftp_server);
								$("#login_res").text(data.ftp_login);
								$("#pass_res").val(data.ftp_password);
								$("#txt_serveur_res").val(data.ftp_server);	
								$("#txt_login_res").val(data.ftp_login);	
								$("#txt_pass_res").val(data.ftp_password);								
							}
						}
						
						$('#technoModal').modal('show');
					}
				});        

			}
			
		});

		$('.btn_update_techno').click(function(e){ 
			$("#technoModal").addClass("in-modification");
			$("#view_bopass").hide();$("#view_ftppass").hide();$("#bopass_res").hide();$("#pass_res").hide();
			var nddId = $("#ndd_id").text();	
			$('.div_update_techno').hide();	
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

					var technos = new Bloodhound({
						datumTokenizer: Bloodhound.tokenizers.obj.whitespace('label'),
						queryTokenizer: Bloodhound.tokenizers.whitespace,                   
						local:data
					});
					technos.initialize();
					var elt = $('input.n-tag');
					elt.materialtags({								
						confirmKeys: [188, 13,9],
						typeaheadjs: {
							name: 'technos',
							displayKey: 'label',
							valueKey: 'label',
							source: technos.ttAdapter(),	
							trimValue: true
						}
					});		
					
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
		 $.ajax({
			type: "POST",
			url:  "<?=site_url('domaine/edit_acces')?>",
			data: ndd_obj,
			dataType: "text",  
			cache:false,
			success: 
				function(response){
					if ( myTrim(response) == "index"  ){
						//console.log(response);  
						reinit_techno();
						$('#technoModal').modal('hide');
						location.reload();
					}
				}
		});
		

	});  

		function get_techno_selected(){
			var tags = [];			
            $('.materialize-tags').find('span.chip').each(function() {               
				var value = $(this).text();	
				var res = value.replace("close", "");			
				tags.push(res); 				           
			});          
		
			return tags;
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
			
			$("#txt_serveur_res").val();	
			$("#txt_login_res").val();	
			$("#txt_pass_res").val();	

			$("#txt_url_res").val();	
			$("#txt_bologin_res").val();			
			$("#txt_bopass_res").val();	

			$('.div_update_techno').show();	
		}
		$("#technoModal").on("hidden.bs.modal", function () {
			$("#view_bopass").show();$("#view_ftppass").show();$("#bopass_res").show();$("#pass_res").show();
			$('#technoModal input#pass_res').attr('type', 'password');
			$('#technoModal input#bopass_res').attr('type', 'password');
			$(".div_cms").hide();
			$('#technoModal input[type=checkbox]').each(function() 
				{ 
						this.checked = false; 
				});
			$('#technoModal input:checkbox').removeAttr('checked');
			$("#technoModal").removeClass("in-modification");
			$("#bo-acces").show();
			$("#technoModal form .field1 span").empty();
			$("#technoModal form .field1 input").val("");
		});		

		$('#ipModal').modal({
                backdrop: 'static',
				keyboard: false,
				show: false
		   })
		   
		$('#ndd-list').on('click', 'td.td_ip', function(e){
		//  $('.td_ip').click(function(e){           
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
									 
					$("#nb_ip_res").text(data['nb_site']);
					var theme_res = $("#theme_res");
					theme_res.empty();       
					$.each(data['themes'], function (index, ndd) {
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
			if(current_heberg)
				get_ip_list_by_heberg(current_heberg);

			$("#dp_registrar").val(current_registrar);
			$("#dp_heberg").val(current_heberg);
			$("#dp_heberg").show();
			$("#dp_registrar").show();
			//$("#dp_theme").show();
			$(".sel_theme").show();
			$(".div_ip").show();
		

			$(".btn_save_ip").show();
			$("#heberg_res").hide();
			$("#ip_res").hide();
			$("#registrar_res").hide();
			$('.div_update_ip').hide();	
		});

		function reinit_ip(){
			$("#dp_heberg").hide();
			$("#dp_registrar").hide();
			//$("#dp_theme").hide();
			$(".btn_save_ip").hide();
			$(".sel_theme").hide();
			$(".div-addr-ip").hide();
			$(".div_ip").hide();

			$("#heberg_res").show();
			$("#ip_res").show();
			$("#registrar_res").show();
			$('.div_update_ip').show();	

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
			var current_ip_id = $("#"+nddId).children('td.td_ip').attr('data-id') ;
			
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
			
			var ndd_obj = {"ndd_id": nddId,"registrar":registrar,"heberg":heberg, "ip":ip};
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
							reinit_ip();
							$('#ipModal').modal('hide');
							location.reload();
						}
					}
				});		

		});

		/* Statut domaine */
		$('#ndd-list').on('click', 'td.statut > button', function(e){
		// $('td.statut > button').click(function(e){           
			var elm = $( e.target );
			var id = elm.parents("tr").attr("id");
			e.preventDefault();
			
			$.ajax({
				url: "<?=site_url('domaine/get_domain_status')?>",
				data: { id: id},
				dataType: "json",
				type: "GET",                  
				success: function(data){					
					var status= $('#statusModal .domaine_status'),
					message = $('#statusModal .msg-info');

					if(data == 200) {
						status.addClass("valid").text("Statut "+data);
						message.text("Le domaine est enregistré");
					}
					else {
						status.removeClass("valid").text('Statut '+data);
						message.text("Le domaine n'est pas enregistré ou inactif");
					}
					$('#statusModal').modal('show');
				}
			});
		});
     });  
    </script>
