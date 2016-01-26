<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

<!-- Bootstrap css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">

<!-- Bootstrap multiselect css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-multiselect.css"); ?>">

<!-- dropzone css -->

<link rel="stylesheet" href="<?php echo base_url("assets/dropzone/js/dropzone.css"); ?>">

<!-- custom css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css"); ?>">

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 <div class="container">
     
     
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
     
     
     <div class="container" id="container">
		
		<div id="actions" class="row">
			<div class="col-lg-7">
				<!-- The fileinput-button span is used to style the file input field as button -->
				<span class="btn btn-success fileinput-button">
					<i class="glyphicon glyphicon-plus"></i>
					<span>Add files...</span>
				</span>
				<button type="submit" class="btn btn-primary start">
					<i class="glyphicon glyphicon-upload"></i>
					<span>Start upload</span>
				</button>
				<button type="reset" class="btn btn-warning cancel">
					<i class="glyphicon glyphicon-ban-circle"></i>
					<span>Cancel upload</span>
				</button>
			</div>

			<div class="col-lg-5">
				<!-- The global file processing state -->
				<span class="fileupload-process">
					<div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
						<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
					</div>
				</span>
			</div>
		</div>

		<div class="table table-striped" class="files" id="previews">
			<div id="template" class="file-row">
				<!-- This is used as the file preview template -->
				<div>
					<span class="preview"><img data-dz-thumbnail /></span>
				</div>
				<div>
					<p class="name" data-dz-name></p>
					<strong class="error text-danger" data-dz-errormessage></strong>
				</div>
				<div>
					<p class="size" data-dz-size></p>
					<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
						<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
					</div>
				</div>
				<div>
					<button class="btn btn-primary start">
						<i class="glyphicon glyphicon-upload"></i>
						<span>Start</span>
					</button>
					<button data-dz-remove class="btn btn-warning cancel">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancel</span>
					</button>
					<p data-dz-remove class="delete">
						<i class="glyphicon glyphicon-check"></i>
						<span>Finish</span>
					</p>
				</div>
			</div>
		</div>
		<hr>
		
	</div>

<?php //echo validation_errors(); ?>

 
<?php echo form_open('portfolio/add',array("class"=>"form-horizontal")); ?>

     
         <div class="form-group">
		<label for="name" class="col-md-4 control-label">Category <span class="required">*</span></label>
		<div class="col-md-4">
                    <select name="categories[]" multiple="multiple" id="categories">
<?php

foreach ($categories_dropdown as $item){		
?>
 <option value="<?php echo $item->categories_id ?>"><?php echo $item->category_name ?></option> 
<?php
}
?>
 </select>
		</div>
                 <div class="col-md-4 error-label">
			<?php echo form_error('category'); ?>
		</div>
	</div>




	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name <span class="required">*</span></label>
                
		<div class="col-md-4">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
                
                  <div class="col-md-4 error-label">
			<?php echo form_error('name'); ?>
		</div>
               
                
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description <span class="required">*</span></label>
		<div class="col-md-4">
			<input type="text" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
		</div>
                  <div class="col-md-4 error-label">
			<?php echo form_error('description'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="link" class="col-md-4 control-label">Link</label>
		<div class="col-md-4">
			<input type="text" name="link" value="<?php echo $this->input->post('link'); ?>" class="form-control" id="link" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>

 </div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-multiselect.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dropzone/dropzone.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dropzone/js/build.js"); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#categories').multiselect();
    });
</script>

