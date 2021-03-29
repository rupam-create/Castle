
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
                    <h2><strong>Properties</strong></h2>
                    <form action="<?php echo base_url();?>addpropertiescontent/" enctype="multipart/form-data" method="POST" id="signup-form" class="signup-form">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name" id="slug-source" class="form-control" required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Slug*</label>
                                        <input type="text" name="slug" id="slug-target" class="form-control" required="true" readonly="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description*</label>
                                        <textarea name="descriptions" class="form-control" required="true"></textarea>
                                    </div>
                                </div>
                                <script>
                              CKEDITOR.replace('descriptions');
                                </script>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Short Description*</label>
                                        <textarea name="short_description" class="form-control" required="true"></textarea>
                                    </div>
                                </div>
                                <script>
                              CKEDITOR.replace('short_description');
                                </script>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Feature Image*</label>
                                        <input type="file" name="file" required="true" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Amount*</label>
                                        <input type="text" name="amount" required="true" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Size*</label>
                                        <input type="text" name="size" required="true" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Number Of Bathroom*</label>
                                        <input type="number" name="number_of_bathroom" required="true" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Number Of Bedrooms*</label>
                                        <input type="number" name="number_of_bedroom" required="true" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Number Of Garage*</label>
                                        <input type="number" name="number_of_garage" required="true" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Is Feature*</label><br>
                                        <select name="is_feature" required="true">
                                        <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address*</label>
                                        <textarea name="address" class="form-control" required="true"></textarea>
                                    </div>
                                    <script>
                              CKEDITOR.replace('address');
                                </script>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Features*</label>
                                        <textarea name="features" class="form-control" required="true"></textarea>
                                    </div>
                                </div>
                                <script>
                              CKEDITOR.replace('features');
                                </script>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Floor Plan*</label>
                                        <input type="file" name="file1" class="form-control" required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Property Map*</label>
                                        <textarea name="property_map" class="form-control" required="true"></textarea>
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


