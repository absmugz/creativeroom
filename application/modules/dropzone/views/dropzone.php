<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="kang-cahya.com" />
	<meta name="author" content="" />

	<title>Dropzone + Codeigniter</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo $css; ?>/bootstrap.css">
      
        <!-- Bootstrap multiselect css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-multiselect.css"); ?>">

	<style>
		html, body {
		  height: 100%;
		}
		#actions {
		  margin: 2em 0;
		}

		/* Mimic table appearance */
		div.table {
		  display: table;
		}
		div.table .file-row {
		  display: table-row;
		}
		div.table .file-row > div {
		  display: table-cell;
		  vertical-align: top;
		  border-top: 1px solid #ddd;
		  padding: 8px;
		}
		div.table .file-row:nth-child(odd) {
		  background: #f9f9f9;
		}

		/* The total progress gets shown by event listeners */
		#total-progress {
		  opacity: 0;
		  transition: opacity 0.3s linear;
		}

		/* Hide the progress bar when finished */
		#previews .file-row.dz-success .progress {
		  opacity: 0;
		  transition: opacity 0.3s linear;
		}

		/* Hide the delete button initially */
		#previews .file-row .delete {
		  display: none;
		}

		/* Hide the start and cancel buttons and show the delete button */

		#previews .file-row.dz-success .start,
		#previews .file-row.dz-success .cancel {
		  display: none;
		}
		#previews .file-row.dz-success .delete {
		  display: block;
		}
	</style>
	
	<script src="<?php echo $js; ?>/jquery.min.js"></script>

</head>
<body>
	<div class="container" id="container">
	<form id="actions" action="">  
            
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

		<div class="row">
			<div class="col-lg-7">
				<!-- The fileinput-button span is used to style the file input field as button -->
				<span class="btn btn-success fileinput-button">
					<i class="glyphicon glyphicon-plus"></i>
					<span>Add files...</span>
				</span>
				
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
               <button type="submit" class="btn btn-primary start">
					<i class="glyphicon glyphicon-upload"></i>
					<span>Start upload</span>
				</button>
        </form>
	</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<script src="<?php echo $js; ?>/dropzone/dropzone.js"></script>
	<script src="<?php echo $js; ?>/dropzone/build.js"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-multiselect.js"); ?>"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#categories').multiselect();
    });
</script>
	<script>
		var Dropzone = require("enyo-dropzone");
		Dropzone.autoDiscover = false;
	</script>
	<script>
	  // Dapatkan HTML Template dan menghapusnya dari dokumen
      var previewNode = document.querySelector("#template");
      previewNode.id = "";
      var previewTemplate = previewNode.parentNode.innerHTML;
      previewNode.parentNode.removeChild(previewNode);

      var myDropzone = new Dropzone(document.body, { 
        url: "<?php echo site_url('dropzone/gambar_upload');?>", // mengatur url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
		maxFilesize: 1, // membatasi ukuran file yang di upload
		acceptedFiles: "image/jpg, image/jpeg", // menentukan tipe file yang akan di upload
        previewTemplate: previewTemplate,
        autoQueue: false, // Pastikan bahwa file tidak antri sampai ditambahkan secara manual
        previewsContainer: "#previews", // menentukan elemen untuk menampilkan preview
        clickable: ".fileinput-button" // menentukan elemen pemicu untuk memilih file
      });

      myDropzone.on("addedfile", function(file) {
        // menghubungkan tombol trart
        file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
      });

      // Update total progress bar pada saat proses upload
      myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
      });

      myDropzone.on("sending", function(file, xhr, formData) {
        // menampilkan total progressbar
        document.querySelector("#total-progress").style.opacity = "1";
        // pada saat upload berlangsung, tombol start akan mati(disabled)
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
      });

      // progressbar akan di sembunyikan ketika prosess upload sudah selesai
      myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0";
      });

      // Membuat fungsi mengunggah semua gambar pada tombol start
		document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
      };
      // Membuat fungsi pembatalan semua gambar pada saat upload
      document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true);
      };
    </script>
</body>
</html>