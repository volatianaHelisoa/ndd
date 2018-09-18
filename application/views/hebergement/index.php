<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('hebergement/add'); ?>" class="cust-btn dark-btn add">Ajouter</a> 
</div>

<table id="hebergement" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>Hébergement</th>
		<th>Accès</th>
		<th>Nombre d'IP</th>
		<th>Nombre de site</th>
		<th>Actions</th>
    </thead>
	<tbody>
	<?php foreach($t_hebergement as $t){?>
    <tr>	
		<td><?php echo $t['name']; ?></td>
		<td><button class="cust-btn dark-btn small-btn">VOIR</button></td>
		<td><?php echo $t['password']; ?></td>
		<td><?php echo $t['url']; ?></td>
		<td>
            <a href="<?php echo site_url('hebergement/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('hebergement/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>
<script>
	$(document).ready(function() {
		$('#hebergement').DataTable( {
			"dom": 'frtip',
			"info":"Affichage de _START_ de _END_ of _TOTAL_ entrées",
			"bFilter": false,
		});
		
	})
</script>
