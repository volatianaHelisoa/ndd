<div class="pull-right">
	<a href="<?php echo site_url('type/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Type</th>
		<th>Name Type</th>
		<th>Actions</th>
    </tr>
	<?php foreach($t_type as $t){ ?>
    <tr>
		<td><?php echo $t['id_type']; ?></td>
		<td><?php echo $t['name_type']; ?></td>
		<td>
            <a href="<?php echo site_url('type/edit/'.$t['id_type']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('type/remove/'.$t['id_type']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
