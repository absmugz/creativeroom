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
	
             
             <?php $attributes = array('id' => 'mydropzone', 'class'=>'dropzone'); echo form_open('tests/upload', $attributes);?>

           <label>Username:<input type="text" name="uname"/> </label>
           <label>Password:<input type="text" name="pass"/> </label>
           <div id="dropzonePreview"></div> 
           <input type="button" id="sbmtbtn" value="submit"/>
           

     <?php echo form_close(); ?>
		
		
	</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-multiselect.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/dropzone.js"); ?>"></script>


<script type="text/javascript">
    // Dropzone class:
var myDropzone = new Dropzone("div#mydropzone", { url: "/tests/upload"});

Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element

  // The configuration we've talked about above
  autoProcessQueue: false,
  uploadMultiple: true,
  parallelUploads: 100,
  maxFiles: 100,

  // The setting up of the dropzone
  init: function() {
    var myDropzone = this;

    // First change the button to actually tell Dropzone to process the queue.
    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
      // Make sure that the form isn't actually being sent.
      e.preventDefault();
      e.stopPropagation();
      myDropzone.processQueue();
    });

    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
    // of the sending event because uploadMultiple is set to true.
    this.on("sendingmultiple", function() {
      // Gets triggered when the form is actually being sent.
      // Hide the success button or the complete form.
    });
    this.on("successmultiple", function(files, response) {
      // Gets triggered when the files have successfully been sent.
      // Redirect user or notify of success.
    });
    this.on("errormultiple", function(files, response) {
      // Gets triggered when there was an error sending the files.
      // Maybe show form again, and notify user of error
    });
  }

}
</script>

</body>
</html>