

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

                    <h2><strong>Update Category</strong></h2>

                    <form action="<?php echo base_url();?>updatecategory/" enctype="multipart/form-data" method="POST" id="signup-form" class="signup-form">

                        <?php

                        foreach ($records as $r) 

                        {

                        ?>

                        <div class="body">

                            <div class="row clearfix">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label>Category Code*</label>

                                        <input type="hidden" name="id" value="<?php echo $r->id;?>">

                                        <input type="text" name="cat_code" readonly="true" class="form-control" value="<?php echo $r->cat_code;?>">

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label>Category Name*</label>

                                        <input type="text" name="cat_name" value="<?php echo $r->cat_name;?>" class="form-control">

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label>Category Icon*</label><br>

                                        <img src="<?php echo base_url();?>upload/icon/<?php echo $r->cat_icon;?>" style="width: 200px; height:100px;">

                                        <input type="file" name="file" class="form-control">

                                    </div>

                                </div>

                                <input type="hidden" value="Category" name="type">



                             <input type="hidden" value="<?php echo $this->session->userdata('id');?>" name="created_by"> 

                             <input type="hidden" value="<?php echo $r->created_on;?>" name="created_on">

                             <div class="col-md-12">

                                    <div class="form-group">

                                        <label>Priority*</label>

                                        <input type="text" name="prority" value="<?php echo $r->prority;?>" class="form-control">

                                    </div>

                             </div>

                             <div class="col-md-12">

                                    <div class="form-group  divid" required style="display: none;">

                                        <label>Parent Category*</label>


                                        <select name="parent_cat" id="parent_cat" class="form-control show-tick ms select2" data-placeholder="Select">

                                        <?php

                                        foreach($records1 as $r1)

                                        {

                                        ?>

                                        <option value="<?php echo $r1->id;?>"><?php echo $r1->cat_name;?></option>

                                        
                                        <?php

                                        }

                                        ?>

                                        </select>


                                    </div>

                             </div>

                            

                             <div class="col-md-12">

                                    <div class="form-group">

                                        <label>Is Parent*</label><br>

                                        <select name="is_parent" id="is_parent" onchange="getparent()" class="form-control show-tick ms select2" data-placeholder="Select">

                                        <option value="Y">Yes</option>

                                        <option value="N">No</option>

                                        </select>

                                    </div>

                             </div>

                                  

                            <div class="col-md-12">

                                    <div class="form-group">

                                        <label>Description*</label>

                                        <textarea name="descriptionz" class="form-control" required="true"><?php echo $r->description;?></textarea>

                                    </div>

                                </div>

                                <script>

                                 CKEDITOR.replace('descriptionz');

                                </script>

                            </div>

                            <div class="row clearfix">

                            <button type="submit" name="submit" class="btn btn-primary formbtn" value="ADD">Update</button>

                            </div>  

                        </div>

                    <?php

                    }

                    ?>

                    </form>

                    </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



    <script>

$(".divid").hide();

function getparent(){

  var is_parent = $('#is_parent').val();

  if(is_parent == 'N'){                  

    $("#parent_cat").prop('required', true);

    $(".divid").show();

  }

  else{

   $("#parent_cat").prop('required', false);

   $(".divid").hide();

  }

  

}

    </script>





