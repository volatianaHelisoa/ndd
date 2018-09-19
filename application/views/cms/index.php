<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('cms/add'); ?>" class="cust-btn dark-btn add">Ajouter CMS</a> 
</div>

<table id="cmsList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>ID</th>
		<th>Type</th>
		<th>Actions</th>
    </thead>
	<tbody>
		<?php foreach($t_cms as $t){ ?>
		<tr>
			<td><?php echo $t['id']; ?></td>
			<td><?php echo $t['type']; ?></td>
			<td>
				<a href="<?php echo site_url('cms/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
				<a href="<?php echo site_url('cms/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<script>
	$(document).ready(function() {
		$('#cmsList').DataTable( {
			"dom": 'frtip',
			"info":"Affichage de _START_ de _END_ of _TOTAL_ entrées",
			"bFilter": false,
		});		
	})
</script>
