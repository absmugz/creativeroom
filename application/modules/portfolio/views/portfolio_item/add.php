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

<script type="text/javascript">
    $(document).ready(function() {
        $('#categories').multiselect();
    });
</script>