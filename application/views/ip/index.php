<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('ip/add'); ?>" class="cust-btn dark-btn add">Ajouter IP</a> 
</div>
<div class="filter">
	<input type="text" class="searchInTable" placeholder="Rechercher">
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
    <tr id="<?php echo $t->id; ?>">
		<td><?php echo $t->adresse; ?></td>
		<td><?php echo $t->hebergement; ?></td>
		<td><?php echo $t->reverseip; ?></td>
		<td><?php echo $t->nb_site; ?></td>
		<td>
            <a href="<?php echo site_url('ip/edit/'.$t->id); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('ip/remove/'.$t->id); ?>" class="btn btn-danger btn-xs">Delete</a>
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
		var ipList = $('#ipList').DataTable();
		$('.searchInTable').keyup(function(){
			ipList.search($(this).val()).draw() ;
		})
	})
</script>
