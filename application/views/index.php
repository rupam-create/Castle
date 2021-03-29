

        <!-- Start Navbar Area -->


        <!-- Start Home Banner Three Area -->
      
        <div class="home-banner-three home-banner-four">
            <div class="home-slides-four owl-carousel owl-theme">
                <?php
                foreach($records as $r)
                {
                ?>
                <div class="home-item"  style="background: url('<?php echo base_url()?>upload/homesliderimages/<?php echo $r->image;?>') no-repeat center;">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="main-banner-content main-banner-content-four text-center">
                                    
                                    <h1><?php echo $r->title;?></h1>
                                    <p><?php echo $r->subtitle;?></p>
                                    <div class="banner-btn">
                                        <a href="<?php echo base_url();?>contact/" class="default-btn">
                                            Contact Us
                                            
                                           
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
      
        <!-- End Home Banner Three Area -->

        <!-- Start Top Feature Area -->
        <section class="feature-section">
            <div class="container">
                
                    <div class="section-title">
                    
                    <h2>Our Services</h2>
                    </div>
               
                 <div class="row">
                    
                    <div class="col-lg-4 col-md-12 col-sm-6 ">
                        <div class="services">
                            <img src="<?php echo base_url();?>assets/img/blog/1.jpg" class="responsive">
                            <div class="service-content">
                                <h3>
                                    <a href="#">
                                        Family Law
                                    </a>
                                </h3>
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-6 ">
                        <div class="services">
                            <img src="<?php echo base_url();?>assets/img/blog/1.jpg" class="responsive">
                            <div class="service-content">
                                <h3>
                                    <a href="#">
                                        Criminal Law
                                    </a>
                                </h3>
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-6 ">
                        <div class="services">
                            <img src="<?php echo base_url();?>assets/img/blog/1.jpg" class="responsive">
                            <div class="service-content">
                                <h3>
                                    <a href="#">
                                        Personla Injury Law
                                    </a>
                                </h3>
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                            </div>
                        </div>
                    </div>

                   

                    
                </div>
            </div>
        </section>
        <!-- End Top Feature Area -->

        <section class="Request-call">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="section-title">
                          <h2>Request A Call Back</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel lorem odio. Suspendisse venenatis dapibus velit, vel vestibulum augue semper ut.</p>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <form action="/action_page.php">
                       
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                       
                        <input type="text" id="number" name="number" placeholder="Phone Number">
                        <input type="text" id="subject" name="subject" placeholder="Subjet">

                        <button type="button" class="btn btn-default">Submit Now</button>
                      </form>
                    </div>
                </div>
            </div>
        </section>

      

       

        <!-- Start Causes Area -->
        <section class="causes-section">
            <div class="container">
                <div class="section-title">
                    
                    <h2>Featured Areas of Practice</h2>
                   
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="single-causes">
                            <img src="<?php echo base_url();?>assets/img/blog/4.jpg" alt="image">
                           

                            <div class="causes-content">
                                
                                <h3>Bankruptcy</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget nisl id felis tempor tempus in et tortor. Praesent id eros augue. Vestibulum feugiat ex lorem.</p>

                                
                                
                                <a href="#" class="causes-btn-one">
                                    Read More
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-12">
                        <div class="single-causes">
                            <img src="<?php echo base_url();?>assets/img/blog/2.jpg" alt="image">
                           

                            <div class="causes-content">
                                
                                <h3>Bankruptcy</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget nisl id felis tempor tempus in et tortor. Praesent id eros augue. Vestibulum feugiat ex lorem.</p>

                                
                                
                                <a href="#" class="causes-btn-one">
                                    Read More
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-12">
                        <div class="single-causes">
                            <img src="<?php echo base_url();?>assets/img/blog/3.jpg" alt="image">
                           

                            <div class="causes-content">
                                
                                <h3>Bankruptcy</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget nisl id felis tempor tempus in et tortor. Praesent id eros augue. Vestibulum feugiat ex lorem.</p>

                                
                                
                                <a href="#" class="causes-btn-one">
                                    Read More
                                    
                                </a>
                            </div>
                        </div>
                    </div>


                    
                </div>
            </div>
        </section>
        <!-- End Causes Area -->


         <!-- Start Fun Facts Area -->
        <section class="fun-facts-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="1000">1000</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Qualified Lawyers</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-6">
                        <div class="single-fun-fact">
                            
                            <h3>
                                <span class="odometer" data-count="32154">32154</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Trusted Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-6">
                        <div class="single-fun-fact">
                           
                            <h3>
                                <span class="odometer" data-count="114586">114586</span>
                                <span class="sign-icon">+</span>
                            </h3>
                             <p>Successful Cases</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Fun Facts Area -->
         <!-- Start Blog Area -->
        <section class="blog-section pd-50">
            <div class="container">
                <div class="section-title">
                   
                    <h2>Latest Form solve-section pd-50</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-6">
                        <div class="single-blog">
                            <img src="<?php echo base_url();?>assets/img/blog/6.jpg" alt="image">

                            <div class="content">
                                 <h4><a href="#">Pellentesque rutrum, diam quis ultrici...</a> </h4>
                                 <span><i class="fa fa-calendar" aria-hidden="true"></i>Sep 20,2020</span>
                                 <span><i class="fa fa-user" aria-hidden="true"></i>Don Smith</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget nisl id felis tempor tempus in et tortor. Praesent id eros augue. Vestibulum feugiat</p>
                                <a href="#" class="blog-btn">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-6">
                        <div class="single-blog">
                            <img src="<?php echo base_url();?>assets/img/blog/2.jpg" alt="image">

                           <div class="content">
                                 <h4><a href="#">Pellentesque rutrum, diam quis ultrici...</a> </h4>
                                 <span><i class="fa fa-calendar" aria-hidden="true"></i>Sep 20,2020</span>
                                 <span><i class="fa fa-user" aria-hidden="true"></i>Don Smith</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget nisl id felis tempor tempus in et tortor. Praesent id eros augue. Vestibulum feugiat</p>
                                <a href="#" class="blog-btn">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-6 ">
                        <div class="single-blog">
                            <img src="<?php echo base_url();?>assets/img/blog/3.jpg" alt="image">

                            <div class="content">
                                 <h4><a href="#">Pellentesque rutrum, diam quis ultrici...</a> </h4>
                                 <span><i class="fa fa-calendar" aria-hidden="true"></i>Sep 20,2020</span>
                                 <span><i class="fa fa-user" aria-hidden="true"></i>Don Smith</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget nisl id felis tempor tempus in et tortor. Praesent id eros augue. Vestibulum feugiat</p>
                                <a href="#" class="blog-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

       

        <!-- Start Solve Area -->
        <section class="solve-section pd-50">
            <div class="container">
                <div class="section-title">
                    
                    <h2>Our Clints</h2>
                    
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-6">
                        <div class="solve-item">
                           
                                <img src="<?php echo base_url();?>assets/img/client/BB.png" alt="image">
                           
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-6">
                        <div class="solve-item">
                           
                                <img src="<?php echo base_url();?>assets/img/client/EG.png" alt="image">
                           
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-6">
                        <div class="solve-item">
                           
                                <img src="<?php echo base_url();?>assets/img/client/sg.png" alt="image">
                           
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-6">
                        <div class="solve-item">
                           
                                <img src="<?php echo base_url();?>assets/img/client/su.png" alt="image">
                           
                           
                        </div>
                    </div>

                   

                   

                   
                </div>
            </div>
        </section>
        <!-- End Solve Area -->
          <!-- Start Testimonials Area -->
        <section class="testimonials-section pd-50">
            <div class="container">
                <div class="section-title">
                    
                    <h2>Client Testimonial</h2>
                </div>
                <div class="testimonials-slider owl-carousel owl-theme">
                    <div class="testimonials-item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="testimonials-info">
                                    <img src="<?php echo base_url();?>assets/img/testimonials/1.jpg" alt="image">
                                    
                                    
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <h3>Juhan Luis</h3>
                                 <span>Charity Bingo <b>Uk</b></span>
                                                               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, autem totam. Et ipsam similique consequatur! Numquam, inventore delectus sequi, ullam, placeat molestias.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="row">
                            
                            <div class="col-lg-8">
                                <h3>juhon Dew</h3>
                                    <span>Charity Bingo <b>Canada</b></span>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, autem totam. Et ipsam similique consequatur! Numquam, inventore delectus sequi, ullam, placeat molestias.</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials-info">
                                    <img src="<?php echo base_url();?>assets/img/testimonials/2.jpg" alt="image">
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="testimonials-info">
                                    <img src="<?php echo base_url();?>assets/img/testimonials/1.jpg" alt="image">
                                    
                                    
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <h3>Juhan Luis</h3>
                                 <span>Charity Bingo <b>Uk</b></span>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, autem totam. Et ipsam similique consequatur! Numquam, inventore delectus sequi, ullam, placeat molestias.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="row">
                            
                            <div class="col-lg-8">
                                <h3>juhon Dew</h3>
                                    <span>Charity Bingo <b>Canada</b></span>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, autem totam. Et ipsam similique consequatur! Numquam, inventore delectus sequi, ullam, placeat molestias.</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials-info">
                                    <img src="<?php echo base_url();?>assets/img/testimonials/2.jpg" alt="image">
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
        </section>
        <!-- End Testimonials Area -->

       

     

       

      

        <!-- Start Donate Area -->
        <section class="donate-section pd-50">
            <div class="container">
                <div class="section-title">
                    <h2>Sign up for Newsletter</h2>
                    <p>Nulla accumsan aliquet suscipit. Phasellus massa elit, egestas ac finibus nec, aliquet et dui.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                 </div>
                 <div class="text-center Newsletter">
                  <input type="text" placeholder="email@example.com" name="mail" required><span>SUBSCRIBE NOW</span>
              </div>
            </div>

          
        </section>
        <!-- End Donate Area -->

       

        <!-- Start Footer Area -->
