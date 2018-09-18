<div style="margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('user/add'); ?>" class="cust-btn dark-btn add">Add</a> 
</div>

<table id="userList" class="display compact custom-styled" style="width:100%">
    <tr>
		<th>ID</th>
		<th>Id Role</th>
		<th>Name</th>
		<th>Firstname</th>
		<th>Email</th>		
		<th>Actions</th>
    </tr>
	<?php foreach($t_user as $t){  ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_role']; ?></td>
		<td><?php echo $t['name']; ?></td>
		<td><?php echo $t['firstname']; ?></td>
		<td><?php echo $t['email']; ?></td>	
		<td>
            <a href="<?php echo site_url('user/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
