<?php 
header('Cache-Control: max-age=900');
    /* Including header and sidebar */   
    $this->load->view('admin/include/header'); 
    $this->load->view('admin/include/sidebar'); 
  ?>
  <!-- ======= Sidebar ======= -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Video  <a href="<?php echo base_url('admin/videos'); ?>" class="btn btn-info">All Videos</a></h1> 
     <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>-->
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
			
			
			
              <h5 class="card-title" style="margin-right:60px;">Video Info</h5>

              <!-- General Form Elements -->
			  <style>
			      #link-error {
					  color: red;
					}
			  </style>

        

          
          <?php 
          /*File Validation message ( if file is empty) */ 
				    if($this->session->flashdata('empty')) 
              {
                ?>
                <div class="alert alert-danger">
               <strong>Error!</strong> <?php echo $this->session->flashdata('empty'); ?>
              </div>
				    <?php  
              }
				   ?> 
           
           <?php 
         /*File Validation message ( if not valid extension) */ 
				    if($this->session->flashdata('fileerror')) 
              {
                ?>
                <div class="alert alert-danger">
               <strong> <?php echo $this->session->flashdata('fileerror'); ?></strong>
              </div>
				    <?php  
              }
				   ?> 
        
        <?php 
         /*File Validation message ( if image uploaded successfully) */ 
				    if($this->session->flashdata('success2')) 
              {
                ?>
                <div class="alert alert-success">
               <strong> <?php echo $this->session->flashdata('success2'); ?></strong>
              </div>
				    <?php  
              }
				   
	

				   
				   ?> 

              <form method="post" action="<?php echo base_url('admin/addvideo'); ?>" enctype="multipart/form-data" name="addblog" id="addblog">
                
                
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Link</label>
                  <div class="col-sm-10">
				   <span style="color:red";><?php  ?></span>
                    <input class="form-control validate[required]" type="text" id="link" name="link" required>
                  
                  
                  </div>
                </div>
                
                
                
				
		       
		        
		        
		        
	
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit"> 	
					
                  </div>
                </div>
				</form>
               <?php //echo form_close(); ?><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
		
		
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!--<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>--><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php
	$this->load->view('admin/include/footer'); 
	
	
	
	?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// $().ready(function() {
// $("#addblog").validate({
          
            // rules: {
                    // file: {
                    // required: true
                    // },
                    // 'editor1': {
                    // required: true
                    // }
            // },
            // messages: {
			// file: {
                     // required: "Please enter your image"
                 // }
                // },
			 // ignore: [],	
        // });
// });




$(document).ready(function () {
 
    $('#addblog').validate({
        rules: {
            'link': {
              required:true
			  }
            
        },
        messages: {
            link: "Please enter YouTube link",
            
        }
 });
});


</script>


  <script src="<?php echo base_url();?>assets/lib/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/dist/jquery.validate.js"></script>		

</body>

</html>