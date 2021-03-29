
<section class="content">
    <div class="body_scroll">      
        <div class="container-fluid">
            <!-- Multi Column -->
            <div class="row clearfix">
                <?php
                foreach($records as $r)
                {
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                    <!-- <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <center><strong><p style="color: blue;"><?php echo  $error1; ?><p></strong></center>
                           <?php } ?> -->
                    <div class="header">
                    <h2><strong>Property Update</strong></h2>

                    <form action="<?php echo base_url();?>updatepropertiescontent/" enctype="multipart/form-data" method="POST" id="signup-form" class="signup-form">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name" value="<?php echo $r->name;?>" id="slug-source" class="form-control" required="true">
                                        <input type="hidden" name="slug" value="<?php echo $r->slug;?>" class="form-control" required="true">
                                         <input type="hidden" name="id" value="<?php echo $r->id;?>" class="form-control" required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Slug*</label>
                                        <input type="test" name="slug" id="slug-target" value="<?php echo $r->slug;?>" class="form-control" readonly>  
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description*</label>
                                        <textarea name="descriptions" id="description_modal" class="form-control" required="true"><?php echo $r->descriptions;?></textarea>
                                    </div>
                                </div>
                                <script>
                                CKEDITOR.replace('descriptions');
                                </script>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Short Description*</label>
                                        <textarea name="short_description" class="form-control" required="true"><?php echo $r->short_description;?></textarea>
                                    </div>
                                </div>
                                <script>
                              CKEDITOR.replace('short_description');
                                </script>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Feature Image*</label>
                                        <img src="<?php echo base_url();?>upload/properties/<?php echo $r->feature_image;?>">
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Amount*</label>
                                        <input type="text" name="amount" value="<?php echo $r->amount;?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Size*</label>
                                        <input type="text" name="size" value="<?php echo $r->size;?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Number Of Bathroom*</label>
                                        <input type="number" name="number_of_bathroom" value="<?php echo $r->number_of_bathroom;?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Number Of Bedrooms*</label>
                                        <input type="number" name="number_of_bedroom" value="<?php echo $r->number_of_bedroom;?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Number Of Garage*</label>
                                        <input type="number" name="number_of_garage" value="<?php echo $r->number_of_garage;?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address*</label>
                                        <textarea name="address" class="form-control" required="true"><?php echo $r->address;?></textarea>
                                    </div>
                                    <script>
                              CKEDITOR.replace('address');
                                </script>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Features*</label>
                                        <textarea name="features" class="form-control" required="true"><?php echo $r->features;?></textarea>
                                    </div>
                                </div>
                                <script>
                              CKEDITOR.replace('features');
                                </script>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Floor Plan*</label>
                                        <img src="<?php echo base_url();?>upload/properties/<?php echo $r->floor_plan;?>">
                                        <input type="file" name="file1" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Property Map*</label>
                                        <textarea name="property_map" class="form-control" required="true"><?php echo $r->property_map;?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                            <button type="submit" name="submit" class="btn btn-primary formbtn" value="ADD">Update</button>
                            </div>  
                        </div>
                    </form>
                   
                    </div>
                    </div>
                </div>
                 <?php
                 }
                 ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                    <!-- <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <center><strong><p style="color: blue;"><?php echo  $error1; ?><p></strong></center>
                           <?php } ?> -->
                    <div class="header">
                    <h2><strong>Property Images</strong></h2>

                    <form action="<?php echo base_url();?>addpropertiescontent/" enctype="multipart/form-data" method="POST" id="signup-form" class="signup-form">
                        <div class="body">
                            <div class="row clearfix">
                             <div class="col-md-12">
                                    <div class="form-group">
                                        <!-- <label>Property Image*</label> -->
                                        <?php
                                        foreach($records2 as $r2)
                                        {
                                        ?>
                                        <img src="<?php echo base_url();?>upload/properties/<?php echo $r2->image;?>" height="400" width="600">
                                
                                        <!-- <input type="file" name="file1" class="form-control" required="true"> -->
                                        <?php echo "<a class='btn btn-sm btn-danger delete' href=".base_url()."propertiesimagedel/".$r2->id.">Delete</a>"?>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>   
                            <div class="form-group">
                            <!-- <button type="submit" name="submit" class="btn btn-primary formbtn" value="ADD">Upload</button> -->
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


