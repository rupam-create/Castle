<!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark" data-opacity="37" style="background-image: url(<?php echo base_url();?>assets/images/inner_bg.jpg);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Properties</h2>
        </div>
      </section>
 <section class="section-xs bg-white">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="">Home</a></li>
            <li class="active">Properties</li>
          </ul>
        </div>
      </section>
      <div class="divider-section"></div>
				      


 <section class="section section-md bg-gray-12">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-7 col-xl-8">
              <div class="row row-30">
                <div class="col-12">
                  <div class="row row-50">
                    <?php
                    foreach($records as $r)
                    {
                    $desc = ellipsize($r->address,85); 
                    ?>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <!-- Product Classic-->
                    <article class="product-classic">
                    <a href="<?php echo base_url();?>properties/<?php echo $r->slug;?>">
                        <div class="product-classic-media">
                           <div class="owl-carousel Similar_img" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                           <img src="<?php echo base_url();?>upload/properties/<?php echo $r->feature_image;?>">
                           <!-- <img src="<?php echo base_url();?>assets/uploads/2021/02/1-2.jpg"/>
                           <img src="<?php echo base_url();?>assets/uploads/2021/02/2-2.jpg" />
                           <img src="<?php echo base_url();?>assets/uploads/2021/02/3-2.jpg"/>
                           <img src="<?php echo base_url();?>assets/uploads/2021/02/4-2.jpg"/> -->
                          </div>
                          <div class="product-classic-price"><span><?php echo $r->name;?></span></div>
                        </div>
                        </a>
                        <h4 class="product-classic-title"><a href="<?php echo base_url();?>properties/<?php echo $r->slug;?>"><span><?php echo $desc;?></a></h4>
                        <div class="product-classic-divider"></div>
                        <!---<ul class="product-classic-list">
                          <li><span class="icon mdi mdi-vector-square"></span><span></span></li>
                  <li><span class="icon hotel-icon-10"></span><span></span></li>
                  <li><span class="icon hotel-icon-05"></span><span></span></li>
                  <li><span class="icon hotel-icon-26"></span><span></span></li>
                        </ul>--->
                      </article>
                    </div>
                    <?php
                    }
                    ?>
                  
                  
                 
                  </div>
                </div>
                <div class="col-12">
                
                                   </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-xl-4">
              <!-- include ../components/_agent-sidebar-right-->
              <div class="row row-50">
              
                <div class="col-md-6 col-lg-12">
                  <article class="block-callboard">
                    <div class="block-callboard-body">
                      <h3 class="block-callboard-title">Get a Free Consultation</h3>
                      <div class="block-callboard-divider"></div>
                      <div class="block-callboard-text">
                        <p>If you have any questions, just call or email us, and we will answer you shortly.</p>
                      </div>
                      <ul class="block-callboard-list">
                        <li>
                          <div class="block-callboard-tell"><a href="tel:<?php echo $records2[0]['phone_no'];?>"><?php echo $records2[0]['phone_no'];?></a></div>
                        </li>
                        <li>
                          <div class="block-callboard-mail"><a href="mailto:<?php echo $records2[0]['email'];?>"><?php echo $records2[0]['email'];?></a></div>
                        </li>
                      </ul><a class="button button-block button-secondary" href="<?php echo base_url();?>contact/">Contact us</a>
                    </div>
                  </article>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </section>

