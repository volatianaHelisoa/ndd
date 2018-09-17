<div class="pull-right">
	<a href="<?php echo site_url('domaine/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Cms</th>
		<th>Id Registrar</th>
		<th>Id Heberg</th>
		<th>Ftp Login</th>
		<th>Ftp Password</th>
		<th>Ftp Server</th>
		<th>Admin Url</th>
		<th>Admin Login</th>
		<th>Admin Password</th>
		<th>Nom</th>
		<th>Date Creation</th>
		<th>Actions</th>
    </tr>
	<?php foreach($t_domaine as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_cms']; ?></td>
		<td><?php echo $t['id_registrar']; ?></td>
		<td><?php echo $t['id_heberg']; ?></td>
		<td><?php echo $t['ftp_login']; ?></td>
		<td><?php echo $t['ftp_password']; ?></td>
		<td><?php echo $t['ftp_server']; ?></td>
		<td><?php echo $t['admin_url']; ?></td>
		<td><?php echo $t['admin_login']; ?></td>
		<td><?php echo $t['admin_password']; ?></td>
		<td><?php echo $t['nom']; ?></td>
		<td><?php echo $t['date_creation']; ?></td>
		<td>
            <a href="<?php echo site_url('domaine/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('domaine/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
