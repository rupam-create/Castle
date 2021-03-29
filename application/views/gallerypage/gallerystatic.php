      
 <!-- Breadcrumbs-->
<?php
foreach($records1 as $r1)
{
?>
      <section class="breadcrumbs-custom bg-image context-dark" data-opacity="37" style="background-image: url(<?php echo base_url();?>upload/slider/<?php echo $r1->image;?>);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Gallery</h2>
        </div>
      </section>
<?php
}
?>
 <section class="section-xs bg-white">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Gallery</li>
          </ul>
        </div>
      </section>
      <div class="divider-section"></div>
				      



<section class="section section-lg bg-default">
        <div class="container">
            <h2 class="heading-decoration-1"><span class="heading-inner">Gallery</span></h2>
          <div class="row row-30">
           <?php
          foreach($records as $r)
          {
          ?>
                          <div class="col-md-6 col-lg-4">
                <!-- <a href=""><img src="<?php echo base_url();?>upload/gallery/<?php echo $r->image;?>" alt="img" width="100%" height="287"/></a> -->
                 <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="<?php echo base_url();?>upload/gallery/<?php echo $r->image;?>" title="10.jpg">
          <img src="<?php echo base_url();?>upload/gallery/<?php echo $r->image;?>" alt="10.jpg" width="100%" height="287"/>
          <i class="fa fa-search-plus" aria-hidden="true"></i>
        </a>
      </div>
                             </div>
          <?php
          }
          ?>
          </div>
        </div>
      </section>









                         







