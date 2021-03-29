<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                  <thead>
                  <tr>
                  <th>Sl.No</th> 
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th><center>Action</center></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $counter = 0;
                  foreach($records as $r)
                  {
                  ?>
                  <tr><td><?php echo ++$counter;?></td><td><?php echo "$r->name";?></td><td><?php echo "$r->email";?></td></td><td><?php echo "$r->details";?></td>
                  <td><center><?php echo "<a class='btn btn-sm btn-danger delete' href=".base_url()."contactdel/".$r->id.">Delete</a>"?></center></td>
                  </tr>          
                  <?php
                  } 
                  ?> 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
