<div class="pull-right">
	<a href="<?php echo site_url('domaine/add'); ?>" class="btn btn-success">Add</a> 
</div>

<div class="filter">
	<input type="text" class="searchInTable">
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

<table id="ndd-list" class="display compact" style="width:100%">
	<thead class="customized-thead">
		<tr>
			<th>Nom de domaine</th>
			<th>Registrar</th>
			<th>Hébergement</th>
			<th>IP</th>
			<th class="thematique">Thématique</th>
			<th>CMS</th>
			<th>Techno</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($t_domaine as $t){  ?> 
		<tr>
			<td><?php echo $t->domaine; ?></td>
			<td><?php echo $t->registrar; ?></td>
			<td><?php echo $t->heberg; ?></td>
			<td><?php   if($t->ip != null ) echo $t->ip["ip"]; ?></td>
			<td class="thematique">
				<?php if($t->theme != null ) {?>
					<span class="tag"><?php echo $t->theme["name"]; ?></span>	
				<?php }?>
			</td>
			<td><?php echo $t->cms; ?></td>
			<td>
			<?php  if($t->techno != null ) foreach($t->techno as $plug){  ?> 
				echo $plug->techno;
			<?php } ?>
			<button class="cust-btn dark-btn small-btn">VOIR</button>
			</td>
			<td class="actions">
				<a href="<?php echo site_url('domaine/edit/'.$t->id); ?>" class="btn btn-info btn-xs">Edit</a> 
				<a href="<?php echo site_url('domaine/remove/'.$t->id); ?>" class="btn btn-danger btn-xs">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
