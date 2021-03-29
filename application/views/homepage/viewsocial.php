<section class="content">
    <div class="body_scroll">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Manage Social</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
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
                                            <th>Icon</th>
                                            <th>Link</th>
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
                                            <td><?php echo $r->icon;?></td>
                                            <td><?php echo $r->link;?></td>
                                            <td>
                                                <center><a href='#' class="btn btn-sm btn-success editValue social_edit" data-name="<?php echo $r->name;?>" data-id="<?php echo $r->id;?>" data-icon="<?php echo $r->icon;?>" data-link="<?php echo $r->link;?>" data-status="<?php echo $r->status;?>">
                                               Edit
                                                </a></center>
                                          
                                          <center><?php echo "<a class='btn btn-sm btn-danger delete' href=".base_url()."socialdel/".$r->id.">Delete</a>"?></center></td>
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




            <div class="modal fade" id="socialmodal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Social</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url();?>updatesocial" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id_modal" class="form-control" placeholder="Product Code" readonly>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="name" id="name_modal" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Icon</label>
                            <div class="col-md-10">
                              <input type="text" name="icon" id="icon_modal" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Link</label>
                            <div class="col-md-10">
                              <input type="text" name="link" id="link_modal" class="form-control">
                            </div>
                        </div>
                        <input type="hidden" name="status" id="status_modal" class="form-control">
                        <!-- <div class="form-group row">
                        <label class="col-md-2 col-form-label">Status</label>
                        <div class="col-md-10">
                        <input type="radio" id="status_modal" name="status" value="Y">
                        <label for="male">Yes</label><br>
                        <input type="radio" id="status_modal" name="status" value="N">
                        <label for="female">No</label><br>
                         </div>
                       </div> -->
                         <center><input type="submit" name="submit" value="update"></center>
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
    