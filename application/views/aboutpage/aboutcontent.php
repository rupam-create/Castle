
<section class="content">
    <div class="body_scroll">      
        <div class="container-fluid">
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                    <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <center><strong><p style="color: blue;"><?php echo  $error1; ?><p></strong></center>
                           <?php } ?>
                    <div class="header">
                    <h2><strong>About</strong></h2>
                    <form action="<?php echo base_url();?>addaboutcontent/" enctype="multipart/form-data" method="POST" id="signup-form" class="signup-form">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Heading*</label>
                                        <input type="text" name="heading" class="form-control" required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About*</label>
                                        <textarea name="about" class="form-control" required="true"></textarea>
                                    </div>
                                </div>
                                <script>
                              CKEDITOR.replace('about');
                                </script>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Image*</label>
                                        <input type="file" name="file" class="form-control" required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                            <button type="submit" name="submit" class="btn btn-primary formbtn" value="ADD">Upload</button>
                            </div>  
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


