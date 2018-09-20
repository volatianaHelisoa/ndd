<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('role/add'); ?>" class="cust-btn dark-btn add">Ajouter role</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Type</th>
		<th>Actions</th>
    </tr>
	<?php foreach($t_role as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['type']; ?></td>
		<td>
            <a href="<?php echo site_url('role/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('role/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
