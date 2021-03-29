
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
                    <h2><strong>Settings</strong></h2>
                    <form action="<?php echo base_url();?>addsettings/" enctype="multipart/form-data" method="POST" id="signup-form" class="signup-form">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Site Name*</label>
                                        <input type="text" name="site_name" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['site_name'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <input type="hidden" name="settings_type" class="form-control" value="settings_type">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tag Line*</label>
                                        <input type="text" name="tagline" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['tagline'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description*</label>
                                        <input type="text" name="description" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['description'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Owner Name*</label>
                                        <input type="text" name="owner_name" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['owner_name'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Support email*</label>
                                        <input type="text" name="support_email" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['support_email'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>From Email*</label>
                                        <input type="text" name="from_email" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['from_email'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Reply to*</label>
                                        <input type="text" name="reply_to" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['reply_to'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Support Number*</label>
                                        <input type="text" name="support_number" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['support_number'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Toll free number Number*</label>
                                        <input type="text" name="toll_free_no" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['toll_free_no'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone Number*</label>
                                        <input type="text" name="phone_no" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['phone_no'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Whatsapp Number*</label>
                                        <input type="text" name="whatsapp_no" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['whatsapp_no'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>First address heading*</label>
                                        <input type="text" name="address_one_heading" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['address_one_heading'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address*</label>
                                        <input type="text" name="address" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['address'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Second address heading*</label>
                                        <input type="text" name="address_two_heading" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['address_two_heading'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address Two*</label>
                                        <input type="text" name="address_two" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['address_two'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Map*</label>
                                        <input type="text" name="map" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['map'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Play store Link*</label>
                                        <input type="text" name="playstore_link" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['playstore_link'];
                            } else{
                              echo "";
                            }?>">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                 <div class="form-group">
                                        <label>Email*</label>
                                        <input type="text" name="email" class="form-control" value="
                    <?php if($records){
                              echo $records[0]['email'];
                            } else{
                              echo "";
                            }?>">
                                 </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                         <img src="<?php echo base_url();?>upload/logo/<?php echo $records[0]['logo'];?>" style="width: 200px; height:100px;">
                    </div>
                                        <label>Update logo*</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                     <div class="col-md-4">
                                    <div class="form-group">
                                         <img src="<?php echo base_url();?>upload/logo/<?php echo $records[0]['footer_logo'];?>" style="width: 200px; height:100px;">
                    </div>
                                        <label>Update FooterLogo*</label>
                                        <input type="file" name="file1" class="form-control">
                                    </div>
                                     <div class="col-md-4">
                                    <div class="form-group">
                                         <img src="<?php echo base_url();?>upload/logo/<?php echo $records[0]['favicon'];?>" style="width: 200px; height:100px;">
                    </div>
                                        <label>Update Favicon*</label>
                                        <input type="file" name="file2" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                            <button type="submit" name="submit" class="btn btn-primary formbtn" value="ADD"><?php if($records){
                              echo "UPDATE";
                            } else{
                              echo "UPLOAD";
                            }?></button>
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



    