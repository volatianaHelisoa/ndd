<div class="pull-right">
	<a href="<?php echo site_url('ip/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Heberg</th>
		<th>Adresse</th>
		<th>Actions</th>
    </tr>
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
