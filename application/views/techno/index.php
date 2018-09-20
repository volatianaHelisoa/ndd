<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('techno/add'); ?>" class="cust-btn dark-btn add">Ajouter technologie</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Actions</th>
    </tr>
	<?php foreach($t_techno as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['name']; ?></td>
		<td>
            <a href="<?php echo site_url('techno/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('techno/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
