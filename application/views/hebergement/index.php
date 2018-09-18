<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('hebergement/add'); ?>" class="cust-btn dark-btn add">Ajouter</a> 
</div>

<table id="hebergement" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>ID</th>
		<th>Password</th>
		<th>Name</th>
		<th>Url</th>
		<th>Login</th>
		<th>Actions</th>
    </thead>
	<?php foreach($t_hebergement as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['password']; ?></td>
		<td><?php echo $t['name']; ?></td>
		<td><?php echo $t['url']; ?></td>
		<td><?php echo $t['login']; ?></td>
		<td>
            <a href="<?php echo site_url('hebergement/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('hebergement/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
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
