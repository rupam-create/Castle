     
<!-- Breadcrumbs-->
<?php
foreach($records as $r)
{
?>
      <section class="breadcrumbs-custom bg-image context-dark" data-opacity="37" style="background-image: url(<?php echo base_url();?>assets/images/inner_bg.jpg);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title"><?php echo $r->name;?></h2>
        </div>
      </section>
 <section class="section-xs bg-white">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active"><?php echo $r->name;?></li>
          </ul>
        </div>
      </section>
      <div class="divider-section"></div>
				           
      <section class="section section-md bg-gray-12">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-7 col-xl-8">
              <!-- Slick Carousel-->
              <div class="slick-slider-1">
                <div class="slick-slider-price"><?php echo $r->name;?></div>
                <div class="slick-slider carousel-parent" id="parent-carousel" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-fade="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                  <div class="item img_details"><img src="<?php echo base_url();?>upload/properties/<?php echo $r->feature_image;?>"/>
                  </div>
                 
                   <?php
                  foreach($records2 as $r2)
                  {
                  ?>                 
                  <div class="item">
                  <img src="<?php echo base_url();?>upload/properties/<?php echo $r2->image;?>" alt="" width="763" height="443"/>
                  </div>
                  <?php
                  }
                  ?>
              
                 <!--                    <div class="item">
                  <img src="<?php echo base_url();?>upload/properties/<?php echo $r->feature_image;?>" alt="" width="763" height="443"/>
                  </div>
              
                                    <div class="item">
                  <img src="<?php echo base_url();?>upload/properties/<?php echo $r->feature_image;?>" alt="" width="763" height="443"/>
                  </div> -->
              
             
              
                                   
                </div>
              
                <div class="slick-slider carousel-child" id="child-carousel" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="7" data-lg-items="7" data-xl-items="10" data-slide-to-scroll="1" data-for="#parent-carousel">
                   
                  <div>
                    <!-- <div class="slick-slide-inner" style="background-image: url(<?php echo base_url();?>upload/properties/<?php echo $r->feature_image;?>"></div> -->
                  </div>
                 
                  <?php
                  foreach($records2 as $r2)
                  {
                  ?>                 
                  <div>
                
                    <div class="slick-slide-inner" style="background-image: url(<?php echo base_url();?>upload/properties/<?php echo $r2->image;?>"></div>
                  </div>
                  <?php
                  }
                  ?>
                  
                  

                 
                                   
                 <!--  <div>
                    <div class="slick-slide-inner" style="background-image: url(<?php echo base_url();?>assets/uploads/2021/02/2.jpeg);"></div>
                  </div>
                 
                                   
                  <div>
                    <div class="slick-slide-inner" style="background-image: url(<?php echo base_url();?>assets/uploads/2021/02/3.jpeg);"></div>
                  </div> -->
                 
                 
                                   
                </div>
              </div>
              <!--<div class="features-block">
                <div class="features-block-inner">
                  <div class="features-block-item">
                    <ul class="features-block-list">
                      <li><span class="icon hotel-icon-10"></span><span></span></li>
                      <li><span class="icon hotel-icon-05"></span><span></span></li>
                      <li><span class="icon mdi mdi-vector-square"></span><span></span></li>
                      <li><span class="icon hotel-icon-26"></span><span></span></li>
                    </ul>
                  </div>
                  <div class="features-block-item"><a class="link link-1" href="#"><span class="icon mdi mdi-heart-outline"></span>Add to Favorites</a></div>
                </div>
              </div>-->
              <center><h2 class="address"><?php echo $r->address;?></h2></center>
              <p><?php echo $r->descriptions;?></p>
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate">
                  <div class="card-header" id="accordion2-heading-1" role="tab">
                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion2-collapse-1" aria-controls="accordion2-collapse-1" aria-expanded="false"><span>Properties Available</span>
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse" id="accordion2-collapse-1" role="tabpanel" aria-labelledby="accordion2-heading-1" data-parent="#accordion2">
                    <div class="card-body">
                      <ul class="list-marked-2 layout-2">
                       <?php echo $r->short_description;?>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate">
                  <div class="card-header" id="accordion3-heading-1" role="tab">
                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion3-collapse-1" aria-controls="accordion3-collapse-1" aria-expanded="false"><span>Amenities</span>
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse" id="accordion3-collapse-1" role="tabpanel" aria-labelledby="accordion3-heading-1" data-parent="#accordion2">
                    <div class="card-body">
                      <ul class="list-marked-2 layout-2">
                      <?php echo $r->features;?>
<!-- <li>Skill Fully Designed and Engineered&#8230;</li>
<li>Premium Gated Community with 24/7 Security 100%</li>
<li>Vaasthu compliance,</li>
<li>Double layer Wetmix roads with street lights</li>
<li>Separate Plumbing lines for fresh water and utility water,</li>
<li>3-Phase EB Children&#8217;s Play Park with Walking Track,Garden With Ganesha Temple and Overhead Storage Tank,Concrete Drainage for waste water disposalPrime Locality and Much More&#8230;</li> -->
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist" aria-multiselectable="false">
                <article class="card card-custom card-corporate">
                  <div class="card-header" id="accordion4-heading-1" role="tab">
                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion4-collapse-1" aria-controls="accordion4-collapse-1" aria-expanded="false"><span>Property Map</span>
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse" id="accordion4-collapse-1" role="tabpanel" aria-labelledby="accordion4-heading-1" data-parent="#accordion3">
                    
                    <p><iframe src="<?php echo $r->property_map;?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
                  </div>
                </article>
              </div>
              
              
              <div class="card-group-custom card-group-corporate" id="accordion4" role="tablist" aria-multiselectable="false">
                <article class="card card-custom card-corporate">
                  <div class="card-header" id="accordion5-heading-1" role="tab">
                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion5-collapse-1" aria-controls="accordion5-collapse-1" aria-expanded="false"><span>Floor Plan</span>
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse" id="accordion5-collapse-1" role="tabpanel" aria-labelledby="accordion5-heading-1" data-parent="#accordion4">
                    <p><img src="<?php echo base_url();?>upload/properties/<?php echo $r->floor_plan;?>"/></p>
                  </div>
                </article>
              </div>
              
            
              
              
              <div class="block-group-item">
                <h3>Similar Properties</h3>
                <div class="row row-50 mt-10">
                  <?php
                  foreach($records3 as $r3)
                  {
                   $desc = ellipsize($r3->descriptions,50);
                  ?>               
                  <div class="col-md-6 col-lg-12 col-xl-6">
                    <!-- Product Classic-->
                    <article class="product-classic">
                    <a href="<?php echo base_url();?>properties/<?php echo $r3->slug;?>">
                <div class="product-classic-media">
                  <div class="owl-carousel Similar_img" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                
                  <img src="<?php echo base_url();?>upload/properties/<?php echo $r3->feature_image;?>" alt=""/>
               
                  </div>
                  <div class="product-classic-price"><span><?php echo $r3->name;?></span></div>
                </div>
                </a>
                <h4 class="product-classic-title"><a href="#"><?php echo $desc;?></a></h4>
                <!--<div class="product-classic-divider"></div>
                <ul class="product-classic-list">
                  <li><span class="icon mdi mdi-vector-square"></span><span></span></li>
                  <li><span class="icon hotel-icon-10"></span><span></span></li>
                  <li><span class="icon hotel-icon-05"></span><span></span></li>
                  <li><span class="icon hotel-icon-26"></span><span></span></li>
                </ul>-->
              </article>
                  </div>
                  <?php
                  }
                  ?> 
                  
                
                
                                
                
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-xl-4">
              <div class="row row-50">
                <div class="col-md-6 col-lg-12">
                  <article class="block-callboard">
                    <?php if($error = $this->session->flashdata('msg')){ ?>
                           <p style="color: green;"><strong><?php echo  $error; ?></strong><p></center>
                           <?php } ?>
                    <div class="block-callboard-body">
                      <h3 class="block-callboard-title">Request a Call</h3>
                      <!-- RD Mailform-->


<form action="<?php echo base_url();?>sendmail/" method="post">
<div class="rd-form rd-mailform" >
<div class="row row-20">
<div class="col-12">
<div class="form-wrap">
<label  for="contact-name">Your Name</label><br />
                          <span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input" required="true" placeholder="Your Name" /></span>
                            </div>
</div>
<div class="col-12">
<div class="form-wrap">
                              <label  for="contact-email">E-mail</label><br />
<span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-input" required="true" placeholder="E-mail" /></span>
                            </div>
</div>
<div class="col-12">
<div class="form-wrap">
                              <label  for="contact-phone">Phone</label><br />
<span class="wpcf7-form-control-wrap phone"><input type="text" name="phone_number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input" required="true" placeholder="Your Phone" /></span>
                            </div>
</div>
<div class="col-12">
<div class="form-wrap">
                              <label  for="contact-message">Message</label><br />
<span class="wpcf7-form-control-wrap message"><textarea name="details" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-input" required="true" placeholder="Message"></textarea></span>
                            </div>
</div>
<div class="col-12">
<input type="submit" value="Send message" class="wpcf7-form-control wpcf7-submit button button-block button-secondary" />
                          </div>
</div>
</div>
</form></div>                    
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
}
?>