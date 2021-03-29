<section class="content">
    <div class="body_scroll">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>View Properties</strong></h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                  <?php
                                  if($records)
                                  {
                                  ?>
                                    <a href="#" class="btn btn-primary image_modal">Add Image</a>
                                  <?php
                                  }
                                  else
                                  {
                                  ?>
                                  <?php
                                  }
                                  ?>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Size</th>
                                            <th>Number Of Bathrooms</th>
                                            <th>Number Of Bedrooms</th>
                                            <th>Number Of Garage</th>
                                            <th>Feature Image</th>
                                            <th>Floor Plan</th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                          $counter = 0;
                                          foreach($records as $r)
                                          {
                                          ?>
                                        <tr>
                                            <td><?php echo ++$counter;?></td>
                                            <td><?php echo $r->name;?></td>
                                            <td><?php echo $r->amount;?></td>
                                            <td><?php echo $r->size;?></td>
                                            <td><?php echo $r->number_of_bathroom;?></td>
                                            <td><?php echo $r->number_of_bedroom;?></td>
                                            <td><?php echo $r->number_of_garage;?></td>
                                            <td>
                                            <img src="<?php echo base_url();?>upload/properties/<?php echo $r->feature_image;?>" style="width: 200px; height:100px;">
                                            </td>
                                            <td>
                                            <img src="<?php echo base_url();?>upload/properties/<?php echo $r->floor_plan;?>" style="width: 200px; height:100px;">
                                            </td>
                                            <td>
                                              <center><?php echo "<a class='btn btn-sm btn-info' href=".base_url()."propertiesupdate/".$r->id.">Edit</a>"?></center>
                                                <!-- <center><a href='#' class="btn btn-sm btn-success editValue gallery_edit" data-name="<?php echo $r->name;?>" data-amount="<?php echo $r->amount;?>" data-size="<?php echo $r->size;?>" data-number_of_bathroom="<?php echo $r->number_of_bathroom;?>" data-number_of_bedroom="<?php echo $r->number_of_bedroom;?>" data-number_of_garage="<?php echo $r->number_of_garage;?>" data-id="<?php echo $r->id;?>" data-feature_image="<?php echo base_url();?>upload/properties/<?php echo $r->feature_image;?>">
                                               Edit
                                                </a></center> -->
                                          <center><?php echo "<a class='btn btn-sm btn-danger delete' href=".base_url()."propertiesdel/".$r->id.">Delete</a>"?></center></td>
                                        </tr>
                                          <?php
                                          }
                                          ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


              <div class="modal fade" id="imagemodal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url();?>addpropertyimage" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id_modal" class="form-control" placeholder="Product Code" readonly>
                            <div class="col-md-12">
                              <div class="form-group">
                              <label>Select Properties</label><br>
                               <select name="propid" class="form-control show-tick ms select2" data-placeholder="Select">
                                        <?php
                                        foreach($records as $r)
                                        {
                                        ?>
                                        <option value="<?php echo $r->id;?>"><?php echo $r->name;?></option>
                                        <?php
                                        }
                                        ?>
                               </select>
                             </div>
                            </div>
                        <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Image*</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                </div>
                         <center><input type="submit" name="submit" value="Save"></center>
                        </form>
                        </div>
                     <!--    <div class="form-group row">
                            <div class="col-md-10">
                              <img src="<?php echo base_url();?>upload/serviceareaimages/<?php echo $r->servicearea_image;?>" style="width: 100px; height:50px;">
                            </div>
                        </div> -->
                  </div>
               <!--    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary testimonialupdate">Update</button>
                  </div> -->
                </div>
              </div>
            
            
            
          
         
          
          
      </div>
    