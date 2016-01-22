<div class="pull-right">
	<a href="<?php echo site_url('portfolio_item/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Portfolio Id</td>
		<td>Name</td>
		<td>Description</td>
		<td>Link</td>
		<td>Actions</td>
    </tr>
	<?php foreach($portfolio_items as $p): ?>
    <tr>
		<td><?php echo $p['portfolio_id']; ?></td>
		<td><?php echo $p['name']; ?></td>
		<td><?php echo $p['description']; ?></td>
		<td><?php echo $p['link']; ?></td>
		<td>
            <a href="<?php echo site_url('portfolio_item/edit/'.$p['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('portfolio_item/remove/'.$p['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>