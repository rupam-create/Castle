<?php 

$page = basename($_SERVER['PHP_SELF']);
if($page == 'index.php')
{
 $page_title = "Castle Realty - Tomorrows Home Today !!"; 
}
elseif ($page == 'properties') {
  $page_title = "Properties - Castle Realty"; 
}
elseif ($page == 'about') {
  $page_title = "About - Castle Realty"; 
}
elseif ($page == 'gallerys') {
  $page_title = "Gallery - Castle Realty"; 
}
elseif ($page == 'contact') {
  $page_title = "Contact - Castle Realty"; 
}
elseif ($page == 'Home') {
  $page_title = "Castle Realty - Tomorrows Home Today !!"; 
}
elseif ($page) {
  $page_title = $page."- Castle Realty"; 
}


?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
<meta content="" name="description" />
<title><?php echo $page_title;?></title>
    <link rel="icon" href="<?php echo base_url();?>upload/logo/<?php echo $records100[0]['favicon'];?>" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CRoboto:300,400,500,700,900">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/gallery.css">
</head>
  <body>
   <!--  <div class="preloader">
      <div class="banter-loader">
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
      </div>
    </div> -->
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
              <!-- RD Navbar-->
              <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                  <div class="rd-navbar-aside-outer">
                    <div class="rd-navbar-aside">
                      <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                      <div class="textwidget custom-html-widget"><ul class="rd-navbar-aside-list rd-navbar-collapse">
                        <li>
                          <div class="block-inline unit unit-spacing-xs align-items-center">
                            <div class="unit-left"><span class="icon text-middle mdi mdi-phone"></span></div>
                            <div class="unit-body"><a href="tel:<?php echo $records100[0]['phone_no'];?>"><?php echo $records100[0]['phone_no'];?></a></div>
                          </div>
                        </li>
                        <li>
                          <div class="block-inline unit unit-spacing-xs align-items-center">
                            <div class="unit-left"><span class="icon text-middle mdi mdi-email-outline"></span></div>
                            <div class="unit-body"><a href="mailto:<?php echo $records100[0]['phone_no'];?>"><?php echo $records100[0]['email'];?></a></div>
                          </div>
                        </li>
                      </ul></div>                      <div class="rd-navbar-aside-item">
                        <div class="block-inline">
                       
                         <div class="textwidget custom-html-widget"><div class="button-group">
                        <?php
                        foreach($records200 as $r200)
                        {
                        ?>
                         <a class=" button-icon button-icon-only" href="<?php echo $r200->link;?>" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><span class="<?php echo $r200->icon;?>"></span></a>
                        <!--  <a class=" button-icon button-icon-only" href="https://www.instagram.com/castlerealtyweb/" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><span class="icon mdi mdi-instagram"></span></a> -->
                         <?php
                         }
                         ?>
                         </div></div>
                                                </div>
                        <div class="rd-navbar-popup bg-gray-12" id="navbar-login-register">
                          <!-- Bootstrap tabs-->
                          <div class="tabs-custom tabs-horizontal tabs-line" id="navbar-tabs">
                            <!-- Nav tabs-->
                            <!--<ul class="nav nav-tabs">
                              <li class="nav-item" role="presentation"><a class="nav-link active" href="#navbar-tabs-1" data-toggle="tab">Login</a></li>
                              <li class="nav-item" role="presentation"><a class="nav-link" href="#navbar-tabs-2" data-toggle="tab">Register</a></li>
                            </ul>-->
                            <!-- Tab panes-->
                          <!--  <div class="tab-content">
                              <div class="tab-pane fade show active" id="navbar-tabs-1">
                                <form class="rd-form form-1"> 
                                  <div class="form-wrap">
                                    <input class="form-input" id="navbar-login-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="navbar-login-email">E-mail</label>
                                  </div>
                                  <div class="form-wrap">
                                    <input class="form-input" id="navbar-login-password" type="password" name="password" data-constraints="@Required">
                                    <label class="form-label" for="navbar-login-password">Password</label>
                                  </div>
                                  <div class="form-wrap">
                                    <button class="button button-sm button-primary button-block" type="submit">Sign in</button>
                                  </div>
                                </form>
                              </div>
                              <div class="tab-pane fade" id="navbar-tabs-2">
                                <form class="rd-form form-1">
                                  <div class="form-wrap">
                                    <input class="form-input" id="register-name" type="text" name="username" data-constraints="@Required">
                                    <label class="form-label" for="register-name">Username</label>
                                  </div>
                                  <div class="form-wrap">
                                    <input class="form-input" id="register-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="register-email">E-mail</label>
                                  </div>
                                  <div class="form-wrap">
                                    <input class="form-input" id="register-password" type="password" name="password" data-constraints="@Required">
                                    <label class="form-label" for="register-password">Password</label>
                                  </div>
                                  <div class="form-wrap">
                                    <input class="form-input" id="register-password-confirm" type="password" name="password" data-constraints="@Required">
                                    <label class="form-label" for="register-password-confirm">Confirm Password</label>
                                  </div>
                                  <div class="form-wrap">
                                    <button class="button button-sm button-primary button-block" type="submit">Create an Account</button>
                                  </div>
                                  <div class="form-wrap">
                                    <div class="text-decoration-lines"><span class="text-decoration-lines-content">or enter with</span></div>
                                  </div>
                                  <div class="form-wrap">
                                    <div class="button-group"><a class="button button-facebook button-icon button-icon-only" href="#" aria-label="Facebook"><span class="icon mdi mdi mdi-facebook"></span></a><a class="button button-twitter button-icon button-icon-only" href="#" aria-label="Twitter"><span class="icon mdi mdi-twitter"></span></a><a class="button button-google button-icon button-icon-only" href="#" aria-label="Google+"><span class="icon mdi mdi-google"></span></a></div>
                                  </div>
                                </form>
                              </div>
                            </div>-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                      <!-- RD Navbar Panel-->
                      <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a class="brand" href="<?php echo base_url();?>"><img class="brand-logo-dark" src="<?php echo base_url();?>upload/logo/<?php echo $records100[0]['logo'];?>" alt=""  src="<?php echo base_url();?>upload/logo/<?php echo $records100[0]['logo'];?>"><img class="brand-logo-light" src="themes/uyaegyptimages/logo-inverse-121x61.png" alt=""  src="<?php echo base_url();?>upload/logo/<?php echo $records100[0]['logo'];?>"></a>
                        </div>
                      </div>
                      <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                          <li class="rd-nav-item active"><a class="rd-nav-link" href="<?php echo base_url();?>">Home</a>
                          </li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url();?>properties/">Properties</a>
                            <!-- RD Navbar Dropdown-->
                           
                          </li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url();?>about/">About Us</a>
                          </li>
                          <!--<li class="rd-nav-item"><a class="rd-nav-link" href="/blogs">Blog</a>
                          </li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>-->
                            <!-- RD Navbar Dropdown-->
                           <!-- <ul class="rd-menu rd-navbar-dropdown">
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="search-results.html">Search results</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="coming-soon.html">Coming Soon</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="404.html">404</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>-->
                          <!--</li>-->
                          <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url();?>gallerys/">Gallery</a>
                          </li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url();?>contact/">Contact Us</a>
                          </li>
                        </ul>
                        <!--<div class="rd-navbar-main-item"><a class="button button-sm button-primary" href="#">Submit property</a>
                        </div>-->
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
      </header>