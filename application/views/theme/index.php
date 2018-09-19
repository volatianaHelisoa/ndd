<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('theme/add'); ?>" class="cust-btn dark-btn add">Ajouter thématique</a> 
</div>

<table id="thematiqueList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>Thématique</th>
		<th>Nombre de site</th>
		<th>Actions</th>
    </thead>
	<tbody>
	<?php foreach($t_theme as $t){ ?>
    <tr>
		<td><?php echo $t->name; ?></td>
		<td><?php echo $t->nb_site; ?></td>
		<td>
            <a href="<?php echo site_url('theme/edit/'.$t->id); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('theme/remove/'.$t->id); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>
<script>
	$(document).ready(function() {
		$('#thematiqueList').DataTable( {
			"dom": 'frtip',
			"info":"Affichage de _START_ de _END_ of _TOTAL_ entrées",
			"bFilter": false
		});
	})
</script>
