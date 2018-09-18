<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('ip/add'); ?>" class="cust-btn dark-btn add">Ajouter IP</a> 
</div>

<table id="ipList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>Liste IP</th>
		<th>Hébergement</th>
		<th>Reverse IP</th>
		<th>Nombre de site</th>
		<th>Action</th>
    </thead>
	<tbody>
	<?php foreach($t_ip as $t){ ?>
    <tr>
		<td>100.25.62.01</td>
		<td>Plesk</td>
		<td>ip00e-cs-123-456::00</td>
		<td>25</td>
		<td>
            <a href="<?php echo site_url('ip/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('ip/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
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
