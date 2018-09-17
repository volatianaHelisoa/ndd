<div class="pull-right">
	<a href="<?php echo site_url('domaine_theme_ip/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Domaine</th>
		<th>Id Ip</th>
		<th>Id Theme</th>
		<th>Actions</th>
    </tr>
	<?php foreach($t_domaine_theme_ip as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_domaine']; ?></td>
		<td><?php echo $t['id_ip']; ?></td>
		<td><?php echo $t['id_theme']; ?></td>
		<td>
            <a href="<?php echo site_url('domaine_theme_ip/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('domaine_theme_ip/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
