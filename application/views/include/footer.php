   <!--  <div class="modal" id="modaltext" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> -->
        <!-- <h5 class="modal-title">Modal title</h5> -->
  <!--       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Thank you for your message !! We will contact you soon</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->





      <!-- Page Footer-->
      <a href="tel:+919585416000" class="call-us" target="_blank"><i class="fa fa-phone my-float1"></i></a>
      <a href="https://api.whatsapp.com/send?phone=919585416000&amp;text=Whatsapp%20enquiry%20from%20https://castlerealty.info.%20Pls%20share%20your%20project%20details%20in%20whatsapp.%20Thank%20you." class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>
      <!-- Pre footer section-->
      <section class="section section-md bg-gray-31 context-dark">
        <div class="container">
          <div class="row row-40 justify-content-lg-between">
            <div class="col-md-6 col-lg-4 col-xl-3">
              <h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>How To Reach</h3>
               <br>
               <iframe src="<?php echo $records100[0]['map'];?>" width="100%" height="270" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               
               
                           
               <!--- <a class="post-minimal" href="">
                <div class="post-minimal-image"><img src="" alt="" width="161" height="136"/>
                </div>
                <div class="post-minimal-body">
                  <div class="post-minimal-title"><span> </span></div>
                  <div class="post-minimal-text"><span>From </span></div>
                </div>
                </a>
                
                                --->
         
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 col-bordered">
              
              <div class="textwidget custom-html-widget"><h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>Contact Us</h3> 

<div class="link-with-icon heading-4 text-spacing-150 font-sec" data-item=".icon"><span class="icon icon-1 mdi mdi-phone"></span><a href="tel:+919585416000"><?php echo $records100[0]['phone_no'];?></a></div>
              <div class="link-with-icon text-spacing-100" data-item=".icon"><span class="icon icon-2 mdi mdi-email-outline"></span><a href="mailto:castlerealtyzone@gmail.com" target="_blank" rel="noopener noreferrer"><?php echo $records100[0]['email'];?></a></div>
              <div class="link-with-icon text-spacing-100" data-item=".icon"><span class="icon icon-3 mdi mdi-map-marker"></span><a href="#"><?php echo $records100[0]['address'];?></a></div></div>            </div>
           
            <div class="col-lg-4">
              
             
              <div class="textwidget custom-html-widget"><h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>CORPORATE AFFAIRS & INVESTMENTS</h3>
              <div class="link-with-icon heading-4 text-spacing-150 font-sec" data-item=".icon"><span class="icon icon-1 mdi mdi-phone"></span><a href="tel:+919585416000"><?php echo $records100[0]['phone_no'];?></a></div>
              <div class="link-with-icon heading-4 text-spacing-150 font-sec" data-item=".icon"><span class="icon icon-1 mdi mdi-phone"></span><a href="tel:+919585415000"><?php echo $records100[0]['whatsapp_no'];?></a></div>
              <div class="link-with-icon text-spacing-100" data-item=".icon"><span class="icon icon-2 mdi mdi-email-outline"></span><a href="mailto:castlerealtyzone@gmail.com" target="_blank" rel="noopener noreferrer"><?php echo $records100[0]['email'];?></a></div></div>            </div>
          </div>
        </div>
      </section>
      <!-- Page footer-->
      <footer class="section footer-classic context-dark bg-gray-21">
        <div class="container">
          <div class="row row-10 justify-content-sm-between">
            <div class="col-sm-6">
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved By <?php echo $records100[0]['site_name'];?></span> 
              </p>
            </div>
  
            <div class="col-sm-6 text-sm-right">
            <!-- <a href="">Crafted by </a> -->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

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

    duration: 300, 
    easing: 'ease-in-out', 

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});

});
</script>    

    <!-- Javascript-->
    <script src="<?php echo base_url();?>assets/js/core.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>

<!-- end wrapper -->
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/www.titlefreelancer.com\/castlereality\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/scripts.js?ver=5.1.3'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/skip-link-focus-fix.js?ver=20160412'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var screenReaderText = {"expand":"expand child menu","collapse":"collapse child menu"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/functions.js?ver=20160412'></script>
<script src="<?php echo base_url();?>adminassets/js/system.js"></script>




</body>
</html>