<div class="pull-right">
	<a href="<?php echo site_url('registrar/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Password</th>
		<th>Name</th>
		<th>Url</th>
		<th>Login</th>
		<th>Actions</th>
    </tr>
	<?php foreach($t_registrar as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['password']; ?></td>
		<td><?php echo $t['name']; ?></td>
		<td><?php echo $t['url']; ?></td>
		<td><?php echo $t['login']; ?></td>
		<td>
            <a href="<?php echo site_url('registrar/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('registrar/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
