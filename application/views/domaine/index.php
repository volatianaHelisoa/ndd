<div class="pull-right">
	<a href="<?php echo site_url('domaine/add'); ?>" class="btn btn-success">Add</a> 
</div>

<div class="filter">
	<input type="text" class="searchInTable">
	<label>
		Registrar
		<select>
			<option value="toutes">Toutes</option>
			<option value="ovh">OVH</option>
			<option value="bookmyname">BookMyName</option>
			<option value="filnet">Filnet</option>
		</select>
	</label>
	<label>
		Hébergement
		<select>
			<option value="toutes">Toutes</option>
			<option value="plesk">Plesk</option>
			<option value="archive-host">Archive-Host</option>
			<option value="A-a-hebergement">A-a-hebergement</option>
		</select>
	</label>
	<label>
		Thématique
		<select>
			<option value="toutes">Aucun</option>
			<option value="plesk">Décoration maison</option>
			<option value="archive-host">Crédit</option>
			<option value="A-a-hebergement">Voyage</option>
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
	<?php foreach($t_domaine as $t){ ?>
		<tr>
			<td><?php echo $t['nom']; ?></td>
			<td><?php echo $t['id_registrar']; ?></td>
			<td>OVH</td>
			<td>100. 25. 62.01</td>
			<td class="thematique">
				<span class="tag">Décoration Maison</span>
				<span class="tag">Crédit</span>
				<span class="tag">Voyage</span>
			</td>
			<td><?php echo $t['id_cms']; ?></td>
			<td><button class="cust-btn dark-btn small-btn">VOIR</button></td>
			<td class="actions">
				<a href="<?php echo site_url('domaine/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
				<a href="<?php echo site_url('domaine/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
