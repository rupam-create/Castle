
       <!-- Counters-->
      <?php
      foreach($records as $r)
      {
      ?>
      <section class="section parallax-container" data-parallax-img="<?php echo base_url();?>upload/slider/<?php echo $r->image;?>">
      <?php
      }
      ?>
        <div class="parallax-content section-lg context-dark text-center">
          <div class="container">
            <div class="row row-30">
          <?php
          foreach($records3 as $r3)
          {
          ?>
              <div class="col-6 col-md-3">
                <!-- Box counter-->
              <article class="box-counter">
<div class="box-counter-main">
<div class="counter"><?php echo $r3->counter;?></div>
<p>+
</p></div>
<p class="box-counter-title"><?php echo $r3->counter_name;?></p>
</article>

              </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </section>
      <!-- Icon List-->
      <?php
      foreach($records1 as $r1)
      {
      ?>
      <section class="section section-md">
        <div class="container">
            <h4 class="mgl50">Welcome to</h4>
            <h2 class="heading-decoration-1 ml10"><span class="heading-inner"><?php echo $r1->heading_one;?></span></h2>
            <p class="mgl50"><?php echo $r1->heading_two;?></p>
            <div class="row">
                
                <div class="col-lg-6">
                 <p class="home-about"><?php echo $r1->paragraph;?></p>
                 <a class="button button-primary" href="<?php echo base_url();?>about/"><?php echo $r1->about;?></a>
             </div>
             <div class="col-lg-6">
                   <iframe width="100%" class="video" height="315" src="<?php echo $r1->youtube_link;?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 </div>
            </div>
        </div>
      </section>
      <?php
      }
      ?>
      <section class="section section-lg1 bg-default">
        <div class="container">
            <h2 class="heading-decoration-1"><span class="heading-inner">Gallery</span></h2>
          <div class="row row-30">
          <?php
          foreach($records2 as $r2)
          {
          ?>
                          <div class="col-md-6 col-lg-4">
                <!-- <a href="https://www.titlefreelancer.com/castlereality/gallery"><img src="<?php echo base_url();?>upload/gallery/<?php echo $r2->image;?>" alt="img" width="100%" height="287"/></a> -->




                <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="<?php echo base_url();?>upload/gallery/<?php echo $r2->image;?>" title="10.jpg">
          <img src="<?php echo base_url();?>upload/gallery/<?php echo $r2->image;?>" alt="10.jpg" width="100%" height="287"/>
          <i class="fa fa-search-plus" aria-hidden="true"></i>
        </a>
      </div>
                             </div>
                            
           <?php
          }
          ?>
            <div class="col-12 text-center"><a class="button button-primary" href="<?php echo base_url();?>gallerys/">View all Gallery</a></div>
            <!---<div class="col-md-6 col-lg-4">
                              </div>
            <div class="col-md-6 col-lg-4">
                              </div>--->
          </div>
        </div>
      </section>
      <!-- Featured Properties-->
      <section class="section section-lg  work_bg work_area">
        <div class="container">
          <div class="layout-4">
            <h2 class="heading-decoration-1"><span class="heading-inner white">Our Work</span></h2>
            <div class="layout-4-item">
             <!-- <ul class="list-inline-bordered heading-7">
                <li><a href="#">For Rent</a></li>
                <li><a href="#">For Sale</a></li>
              </ul>-->
            </div>
          </div>
          <div class="row row-50">
          
            <?php
            foreach($records7 as $r7)
            {
            $desc = ellipsize($r7->address,85); 
            ?>          
            <div class="col-md-6 col-lg-4">
              <!-- Product Classic-->
              <article class="product-classic">
              <a href="<?php echo base_url();?>properties/<?php echo $r7->slug;?>">
                <div class="product-classic-media">
                  <div class="owl-carousel home_work_img" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                  
                  <img src="<?php echo base_url();?>upload/properties/<?php echo $r7->feature_image;?>" alt="img"/>
                 <!--  <img src="<?php echo base_url();?>assets/uploads/2021/02/1-2.jpg" alt="img"/>
                  <img src="<?php echo base_url();?>assets/uploads/2021/02/2-2.jpg" alt="img"/>
                  <img src="<?php echo base_url();?>assets/uploads/2021/02/3-2.jpg" alt="img"/>
                  <img src="<?php echo base_url();?>assets/uploads/2021/02/4-2.jpg" alt="img"/>
                  <img src="<?php echo base_url();?>assets/uploads/2021/02/5-2.jpg" alt="img"/>
                  <img src="" alt="img"/> -->
                  
                  </div>
                  <div class="product-classic-price"><span><?php echo $r7->name;?></span></div>
                </div></a>
                <h4 class="product-classic-title"><a href="<?php echo base_url();?>properties/<?php echo $r7->slug;?>"><?php echo $desc;?></a></h4>
                <!---<div class="product-classic-divider"></div>
                <ul class="product-classic-list">
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
          
          
                                
          
           
            <div class="col-12 text-center"><a class="button button-primary" href="<?php echo base_url();?>properties">View all properties</a></div>
          </div>
        </div>
      </section>
      
  <!-- FScreen-->
      <section class="section">
        <div class="range">
          <div class="cell-xl-12_lg box-1-cell height-fill context-dark">
            <div class="box-1-bg-shape"><img class="box-1-bg-image" src="<?php echo base_url();?>assets/images/bg-shape-1.png" alt="" role="presentation"></div>
            <div class="cell-inner box-1-outer">
              <div class="box-2" style="padding-top:30px;">
                <?php if($error = $this->session->flashdata('msg')){ ?>
                           <p style="color: green;"><strong><?php echo  $error; ?></strong><p></center>
                           <?php } ?>
                <h2>Find Your Property</h2>
                <div role="form" class="wpcf7" id="wpcf7-f152-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="<?php echo base_url();?>propertyform" method="post" class="wpcf7-form">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="152" />
<input type="hidden" name="_wpcf7_version" value="5.1.3" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f152-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
</div>
<div class="rd-form">
<div class="row row-x-20 row-20">
<div class="col-sm-6 col-lg-12 col-xl-6">
<div class="form-wrap form-wrap-validation">
<label>Location</label><br />
<span class="wpcf7-form-control-wrap choose-location"><select name="location" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-input select-filter" required="true"><option value="Saravanampatti">Saravanampatti</option><option value="Thudiyalur">Thudiyalur</option><option value="Sundarapuram">Sundarapuram</option><option value="Sulur">Sulur</option></select></span>
                      </div>
</p></div>
<div class="col-sm-6">
<div class="form-wrap form-wrap-validation">
<label>Property Type</label><br />
<span class="wpcf7-form-control-wrap property-type">
<select name="propertytype" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-input select-filter" required="true" id="propertytype">
<option value="Individual villa">Individual villa</option>
<option value="Apartment">Apartment</option>
<option value="Residential Plots">Residential Plots</option></select></span></p></div>
</p></div>
<div class="col-sm-4 col-lg-6 col-xl-4">
<div class="form-wrap form-wrap-validation">
<label>Property Status</label><br />
<span class="wpcf7-form-control-wrap property-status">
  <select name="status" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-input select-filter"  id="status"><option value="1 BHK" class="hide">1 BHK</option>
  </select></span></p></div>
</p></div>
<div class="col-sm-4 col-lg-6 col-xl-4">
<div class="form-wrap form-wrap-validation">
<label>Name</label><br />
<span class="wpcf7-form-control-wrap text-275"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input" required="true" /></span>
                      </div>
</p></div>
<div class="col-sm-4 col-lg-6 col-xl-4">
<div class="form-wrap form-wrap-validation">
<label>Phone No</label><br />
<span class="wpcf7-form-control-wrap tel-67"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-input" required="true"/></span>
                      </div>
</p></div>
</p></div>
<div class="layout-5">
<div class="layout-5-item">
<input type="submit" value="SUBMIT" name="submit" class="wpcf7-form-control wpcf7-submit button button-primary-outline" />
</div>
</p></div>
</p></div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>              </div>
            </div>
          </div>


          <!--<div class="cell-xl-6_sm height-fill">
            <div class="box-2">
              
              <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="1" data-xl-items="2" data-dots="false" data-nav="false" data-nav-custom="#owl-outer-nav" data-loop="true" data-margin="30" data-autoplay="false" data-autoplay-speed="3500" data-stage-padding="0" data-mouse-drag="false">
              
                               
              
                  <a class="product-corporate context-dark" href="" style="background-image: url(uploads/2020/12/bg-02-1920x916-1200x573.jpg);">
                  <div class="product-corporate-inner">
                    <div class="product-corporate-caption">
                      <h3 class="product-corporate-title"></h3>
                      <h4 class="product-corporate-info">, </h4>
                    </div>
                  </div>
                  </a>
               
                                
                  
                  
                  </div>
              <div class="box-2-footer">
                <div class="box-2-footer-inner">
                  <h3>Recent Properties</h3>
                  <div class="owl-outer-nav" id="owl-outer-nav">
                    <button class="owl-arrow owl-arrow-prev"><span class="icon fl-budicons-free-left161"></span><span>prev</span></button>
                    <button class="owl-arrow owl-arrow-next"><span>next</span><span class="icon fl-budicons-free-right163"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>--->
        </div>
      </section>
      
      <!-- What People Say-->
      <section class="section section-lg  Customer_Feedback_bg  work_area">
        <div class="container">
          <h2 class="heading-decoration-1"><span class="heading-inner white">Customer Feedback</span></h2>
        </div>
        <div class="container container-wide">
          <!-- Owl Carousel-->
          <div class="owl-carousel" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false">
            <?php
            foreach($records8 as $r8)
            {
            ?>       
            <article class="quote-modern">
              <div class="quote-modern-inner">
                <time class="quote-modern-time" datetime="2020"></time>
                <div class="quote-modern-main feedback">
                     <p><?php echo $r8->comment;?></p>
                </div>
                <div class="quote-modern-meta-outer">
                  <!--<img class="quote-modern-avatar" src="" alt="" width="57" height="57"/>-->
                  <div class="quote-modern-meta">
                    <h4 class="quote-modern-cite"><?php echo $r8->name;?></h4>
                    <p class="quote-modern-position"></p>
                  </div>
                </div>
              </div>
            </article>
            <?php
            }
            ?>               
            
          </div>
        </div>
      </section>
      <!-- Team-->
      <!--<section class="section section-lg bg-default">
        <div class="container">
          <h2 class="heading-decoration-1"><span class="heading-inner">Our Team</span></h2>
          <div class="row row-30">
                     
            <div class="col-sm-6 col-lg-3">
                     
                <div class="block-agent">
                        <img src="" alt="" width="540" height="460"/>
                          <div class="block-agent-body">
                            <h3 class="block-agent-title"></h3>
                                                      </div>
                   </div>
            </div>
           
                             
          
       
          </div>
        </div>
      </section>-->
      <!-- FAQ-->
      <section class="section section-lg bg-default">
        <div class="container">
          <!-- Box Info-->
          <article class="box-info box-info-2">
            <div class="box-info-main context-dark">
              <?php if($error = $this->session->flashdata('msg')){ ?>
                           <p style="color: green;"><strong><?php echo  $error; ?></strong><p></center>
                           <?php } ?>
              <div class="box-info-main-inner">
                <h2>Get a Free Consultation</h2>
                <!-- RD Mailform-->
               <div role="form" class="wpcf7" id="wpcf7-f348-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="<?php echo base_url();?>consultation/" method="post" class="wpcf7-form">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="348" />
<input type="hidden" name="_wpcf7_version" value="5.1.3" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f348-o2" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
</div>
<div class="rd-form rd-mailform" >
<div class="row row-20">
<div class="col-12">
<div class="form-wrap">
 <label class="" for="contact-email">E-mail</label><br />
<span class="wpcf7-form-control-wrap contact-email"><input type="email" name="email" required value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-input" aria-invalid="false" placeholder="E-mail" /></span></p></div>
</p></div>
<div class="col-12">
<div class="form-wrap">
                        <label class="" for="contact-message">Message</label><br />
<span class="wpcf7-form-control-wrap message"><textarea name="message" required="true" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-input" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>
                      </div>
</p></div>
<div class="col-12">
                      <button class="button button-primary" type="submit" name="submit">Send message</button>
                    </div>
</form>
</p></div>
</p></div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>              </div>
            </div>
            <div class="box-info-aside">
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                       
                  
                          
                         <?php
                         $i=0;
                         foreach($records5 as $r5)
                         {
                         if($i == 0) 
                         { 
                         ?>



                                                  <!-- Bootstrap card-->
                          <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-0" role="tab">
                              <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion1-collapse-0" aria-controls="accordion1-collapse-0" aria-expanded="true"><span><?php echo $r5->question;?></span>
                                  <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="collapse show" id="accordion1-collapse-0" role="tabpanel" aria-labelledby="accordion1-heading-0" data-parent="#accordion1">
                              <div class="card-body">
                                <p><?php echo $r5->answer;?></p>
                              </div>
                            </div>
                          </article>
                           <?php 
                          } 
                          elseif($i == 1)
                          { 
                          ?>
                         
                         
                                                   <!-- Bootstrap card-->
                          <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-1" role="tab">
                              <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion1-collapse-1" aria-controls="accordion1-collapse-1" aria-expanded="true"><span><?php echo $r5->question;?></span>
                                  <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="collapse " id="accordion1-collapse-1" role="tabpanel" aria-labelledby="accordion1-heading-1" data-parent="#accordion1">
                              <div class="card-body">
                                <p><?php echo $r5->answer;?></p>
                              </div>
                            </div>
                          </article>
                          <?php 
                          } 
                          elseif($i == 2)
                          { 
                          ?>
                         
                                                   <!-- Bootstrap card-->
                          <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-2" role="tab">
                              <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion1-collapse-2" aria-controls="accordion1-collapse-2" aria-expanded="true"><span><?php echo $r5->question;?></span>
                                  <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="collapse " id="accordion1-collapse-2" role="tabpanel" aria-labelledby="accordion1-heading-2" data-parent="#accordion1">
                              <div class="card-body">
                                <p><?php echo $r5->answer;?></p>
                              </div>
                            </div>
                          </article>
                          <?php
                          }
                          $i++;
                          }
                          ?> 
                         
                         
                                         
                        
              </div>
            </div>
          </article>
        </div>
      </section>
      
       <!-- Our Services -->
      <section class="section section-lg bg-gray-12">
        <div class="container">
          <h2 class="heading-decoration-1"><span class="heading-inner">Our Services</span></h2>
        </div>
        <div class="container container-wide">
          <!-- Owl Carousel-->
          <div class="owl-carousel" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false">
            <?php
            foreach ($records4 as $r4) 
            {
            ?>     
            <article class="quote-modern">
              <div class="quote-modern-inner">
                 <img src="<?php echo base_url();?>upload/gallery/<?php echo $r4->image;?>" alt="" class="img-responsive"/>


                <time class="quote-modern-time" datetime="2020"><?php echo $r4->name;?></time>
                <div class="quote-modern-main">
                     <p><?php echo $r4->description;?></p>
                </div>
                
              </div>
            </article>
            <?php
            }
            ?>                     
            
          </div>
        </div>
      </section>
      
  <script>
  $(document).ready(function(){
$('.image-popup-vertical-fit').magnificPopup({
  type: 'image',
  mainClass: 'mfp-with-zoom', 
  gallery:{
      enabled:true
    },

  zoom: {
    enabled: true, 

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});

});
</script>
<style>
.magnific-img img {
    width: 280px
    height:100px;
}
.mfp-bottom-bar,*{
   font-family: 'Abel', sans-serif;
}
.magnific-img {
    display: inline-block;
    width: 32.3%;
}
a.image-popup-vertical-fit {
    cursor: -webkit-zoom-in;
}
.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
  opacity: 0;
  -webkit-backface-visibility: hidden;
  /* ideally, transition speed should match zoom duration */
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
    opacity: 1;
}
.mfp-with-zoom.mfp-ready.mfp-bg {
    opacity: 0.98;
}

.mfp-with-zoom.mfp-removing .mfp-container,
.mfp-with-zoom.mfp-removing.mfp-bg {
  opacity: 0;
}
.mfp-arrow-left:before {
    border-right: none !important;
}
.mfp-arrow-right:before {
    border-left: none !important;
}
button.mfp-arrow, .mfp-counter {
    opacity: 0 !important;
    transition: opacity 200ms ease-in, opacity 2000ms ease-out;
}
.mfp-container:hover button.mfp-arrow, .mfp-container:hover .mfp-counter{
  opacity: 1 !important;
}


/* Magnific Popup CSS */
.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1042;
  overflow: hidden;
  position: fixed;
  background: #0b0b0b;
  opacity: 0.8; }

.mfp-wrap {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1043;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden; }

.mfp-container {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 8px;
  box-sizing: border-box; }

.mfp-container:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle; }

.mfp-align-top .mfp-container:before {
  display: none; }

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 1045; }

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto; }

.mfp-ajax-cur {
  cursor: progress; }

.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out; }

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-auto-cursor .mfp-content {
  cursor: auto; }

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none; }

.mfp-loading.mfp-figure {
  display: none; }

.mfp-hide {
  display: none !important; }

.mfp-preloader {
  color: #CCC;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 1044; }
  .mfp-preloader a {
    color: #CCC; }
    .mfp-preloader a:hover {
      color: #FFF; }

.mfp-s-ready .mfp-preloader {
  display: none; }

.mfp-s-error .mfp-content {
  display: none; }

button.mfp-close,
button.mfp-arrow {
  overflow: visible;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  display: block;
  outline: none;
  padding: 0;
  z-index: 1046;
  box-shadow: none;
  touch-action: manipulation; }

button::-moz-focus-inner {
  padding: 0;
  border: 0; }

.mfp-close {
  width: 44px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  right: 0;
  top: 0;
  text-decoration: none;
  text-align: center;
  opacity: 0.65;
  padding: 0 0 18px 10px;
  color: #FFF;
  font-style: normal;
  font-size: 28px;
  font-family: Arial, Baskerville, monospace; }
  .mfp-close:hover,
  .mfp-close:focus {
    opacity: 1; }
  .mfp-close:active {
    top: 1px; }

.mfp-close-btn-in .mfp-close {
  color: #333; }

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
  color: #FFF;
  right: -6px;
  text-align: right;
  padding-right: 6px;
  width: 100%; }

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #CCC;
  font-size: 12px;
  line-height: 18px;
  white-space: nowrap; }

.mfp-arrow {
  position: absolute;
  opacity: 0.65;
  margin: 0;
  top: 50%;
  margin-top: -55px;
  padding: 0;
  width: 90px;
  height: 110px;
  -webkit-tap-highlight-color: transparent; }
  .mfp-arrow:active {
    margin-top: -54px; }
  .mfp-arrow:hover,
  .mfp-arrow:focus {
    opacity: 1; }
  .mfp-arrow:before,
  .mfp-arrow:after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent; }
  .mfp-arrow:after {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px; }
  .mfp-arrow:before {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: 0.7; }

.mfp-arrow-left {
  left: 0; }
  .mfp-arrow-left:after {
    border-right: 17px solid #FFF;
    margin-left: 31px; }
  .mfp-arrow-left:before {
    margin-left: 25px;
    border-right: 27px solid #3F3F3F; }

.mfp-arrow-right {
  right: 0; }
  .mfp-arrow-right:after {
    border-left: 17px solid #FFF;
    margin-left: 39px; }
  .mfp-arrow-right:before {
    border-left: 27px solid #3F3F3F; }

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px; }
  .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px; }
  .mfp-iframe-holder .mfp-close {
    top: -40px; }

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%; }
  .mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #000; }

/* Main image in popup */
img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  box-sizing: border-box;
  padding: 40px 0 40px;
  margin: 0 auto; }

/* The shadow behind the image */
.mfp-figure {
  line-height: 0; }
  .mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #444; }
  .mfp-figure small {
    color: #BDBDBD;
    display: block;
    font-size: 12px;
    line-height: 14px; }
  .mfp-figure figure {
    margin: 0; }

.mfp-bottom-bar {
  margin-top: -36px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto; }

.mfp-title {
  text-align: left;
  line-height: 18px;
  color: #F3F3F3;
  word-wrap: break-word;
  padding-right: 36px; }

.mfp-image-holder .mfp-content {
  max-width: 100%; }

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer; }

@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  /**
       * Remove all paddings around the image on small screen
       */
  .mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0; }
  .mfp-img-mobile img.mfp-img {
    padding: 0; }
  .mfp-img-mobile .mfp-figure:after {
    top: 0;
    bottom: 0; }
  .mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px; }
  .mfp-img-mobile .mfp-bottom-bar {
    background: rgba(0, 0, 0, 0.6);
    bottom: 0;
    margin: 0;
    top: auto;
    padding: 3px 5px;
    position: fixed;
    box-sizing: border-box; }
    .mfp-img-mobile .mfp-bottom-bar:empty {
      padding: 0; }
  .mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px; }
  .mfp-img-mobile .mfp-close {
    top: 0;
    right: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    text-align: center;
    padding: 0; } }

@media all and (max-width: 900px) {
  .mfp-arrow {
    -webkit-transform: scale(0.75);
    transform: scale(0.75); }
  .mfp-arrow-left {
    -webkit-transform-origin: 0;
    transform-origin: 0; }
  .mfp-arrow-right {
    -webkit-transform-origin: 100%;
    transform-origin: 100%; }
  .mfp-container {
    padding-left: 6px;
    padding-right: 6px; } }
  
</style>



                         








