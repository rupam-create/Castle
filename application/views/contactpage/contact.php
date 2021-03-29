      
<!-- Breadcrumbs-->
<?php
foreach($records1 as $r1)
{
?>
      <section class="breadcrumbs-custom bg-image context-dark" data-opacity="37" style="background-image: url(<?php echo base_url();?>upload/slider/<?php echo $r1->image;?>);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Contact Us</h2>
        </div>
      </section>
<?php
}
?>
 <section class="section-xs bg-white">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </section>
      <div class="divider-section"></div>
                      


  <section class="section section-lg bg-default">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered-aside">
              <div class="layout-bordered-aside-inner">
                <h2>Contact Details</h2>
                <p>If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit our office.</p>
                <div class="layout-bordered-aside-group">
                  <dl class="list-terms-1">
                    <dt>Client Support:</dt>
                    <dd><span class="icon mdi-phone mdi"></span><a class="list-terms-1-link-big" href="tel:(+91) 9585416000"><?php echo $records2[0]['phone_no'];?></a></dd>
                  </dl>
                  <dl class="list-terms-1">
                    <dt>E-mail:</dt>
                    <dd><span class="icon mdi mdi-email-outline"></span><a href="mailto:castlerealtyzone@gmail.com"><?php echo $records2[0]['email'];?></a></dd>
                  </dl>
                  <dl class="list-terms-1">
                    <dt>Main Office:</dt>
                    <dd><span class="icon mdi mdi-map-marker"></span><a href="#"><p><?php echo $records2[0]['address'];?></p>
</a></dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="layout-bordered-main">
                 <?php if($error = $this->session->flashdata('msg')){ ?>
                           <p style="color: green;"><strong><?php echo  $error; ?></strong><p></center>
                           <?php } ?>
              <div class="layout-bordered-main-inner">
                <h2>Get in Touch</h2>
                <!-- RD Mailform-->

<form action="<?php echo base_url();?>sendmail/" method="post">
<div class="rd-form rd-mailform" >
<div class="row row-20">
<div class="col-md-12">
<div class="form-wrap">
 <label for="contact-name">Your Name</label><br />
<span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input" aria-required="true" aria-invalid="false" placeholder="Your Name" /></span></div>
</div>
<div class="col-md-12">
<div class="form-wrap">
                        <label for="contact-email">E-mail</label><br />
<span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-input" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span>
                      </div>
</div>
<div class="col-md-12">
<div class="form-wrap">
                        <label for="contact-phone">Phone</label><br />
<span class="wpcf7-form-control-wrap phone"><input type="text" name="phone_number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input" aria-required="true" aria-invalid="false" placeholder="Your Phone" /></span>
                      </div>
</div>
<div class="col-12">
<div class="form-wrap">
                        <label for="contact-message">Message</label><br />
                        <span class="wpcf7-form-control-wrap message"><textarea name="details" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-input" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>
                      </div>
</div>
<div class="col-md-12">
<input type="submit" name="submit" value="Send message" class="wpcf7-form-control wpcf7-submit button button-sm button-primary" />
                    </div>
</div>
</div>
</form>            </div>
            </div>
          </div>
        </div>
      </section>
                         








