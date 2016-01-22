<?php //echo validation_errors(); ?>

<?php echo form_open('portfolio/add',array("class"=>"form-horizontal")); ?>

Test dropdown:<select name="categories[]" multiple>
      <option value="nothing" selected>Select course to show students</option>
<?php

foreach ($categories_dropdown as $item){		
?>
 <option value="<?php echo $item->categories_id ?>"><?php echo $item->category_name ?></option> 
<?php
}
?>
 </select>



	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<input type="text" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
		</div>
	</div>
	<div class="form-group">
		<label for="link" class="col-md-4 control-label">Link</label>
		<div class="col-md-8">
			<input type="text" name="link" value="<?php echo $this->input->post('link'); ?>" class="form-control" id="link" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
