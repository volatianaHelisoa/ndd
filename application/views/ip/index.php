<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('ip/add'); ?>" class="cust-btn dark-btn add">Ajouter IP</a> 
</div>

<table id="ipList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>ID</th>
		<th>Id Heberg</th>
		<th>Adresse</th>
		<th>Actions</th>
    </thead>
	<?php foreach($t_ip as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_heberg']; ?></td>
		<td><?php echo $t['adresse']; ?></td>
		<td>
            <a href="<?php echo site_url('ip/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('ip/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<script>
	$(document).ready(function() {
		$('#ipList').DataTable( {
			"dom": 'frtip',
			"info":"Affichage de _START_ de _END_ of _TOTAL_ entrées",
			"bFilter": false
		});
	})
</script>
