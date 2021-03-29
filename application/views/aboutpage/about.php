
<?php
foreach($records1 as $r1)
{
?>
 <section class="breadcrumbs-custom bg-image context-dark" data-opacity="37" style="background-image: url(<?php echo base_url();?>upload/slider/<?php echo $r1->image;?>);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">About Us</h2>
        </div>
      </section>
<?php
}
?>
 <section class="section-xs bg-white">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">About Us</li>
          </ul>
        </div>
      </section>
      <div class="divider-section"></div>
				        
  
  
  <!-- Shortly About Us-->
  <?php
  foreach($records as $r)
  {
  ?>
      <section class="section section-md bg-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 bg-about">
                    <div class="row">
                 <h2><?php echo $r->heading;?></h2>
                 
<?php echo $r->about;?>
             </div></div>
             <div class="col-lg-6">
                 <div class="row">
                 <img width="800" height="600" src="<?php echo base_url();?>upload/gallery/<?php echo $r->image;?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="<?php echo base_url();?>upload/gallery/<?php echo $r->image;?>, uploads/2020/12/About_pic-300x225.jpg 300w, uploads/2020/12/About_pic-768x576.jpg 768w" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px" />                 </div>
                 </div>
          <!--<article class="box-info box-info-1">
            <div class="box-info-aside">
              <div class="image-block-1" style="background-image: url();"></div>
            </div>
            <div class="box-info-main context-dark">
              <div class="box-info-main-inner">
                <h2 class="f1"></h2>
                <div class="divider-small"></div>
                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Our goal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Our Mission</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                                         </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                                         </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                                           </div>
                  </div>
                </div><a class="button button-sm button-primary" href=" /">Get in Touch</a>
              </div>
            </div>
          </article>--->
          </div>
        </div>
      </section>
      <?php
      }
      ?>


                         







