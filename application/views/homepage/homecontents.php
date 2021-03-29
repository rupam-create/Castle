
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
                    <h2><strong>Home</strong></h2>
                    <form action="<?php echo base_url();?>addhomecontents/" enctype="multipart/form-data" method="POST" id="signup-form" class="signup-form">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>First Heading*</label>
                                        <input type="text" name="heading_one" class="form-control" required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Second Heading*</label>
                                        <input type="text" name="heading_two" class="form-control" required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About*</label>
                                        <input type="text" name="about" class="form-control" required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Youtube Link*</label>
                                        <input type="text" name="youtube_link" class="form-control" required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Paragraph*</label>
                                        <textarea name="paragraph" class="form-control" required="true"></textarea>
                                    </div>
                                </div>
                                <script>
                              CKEDITOR.replace('paragraph');
                                </script>
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


