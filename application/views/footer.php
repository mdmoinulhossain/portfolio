<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact Me</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p style="color: white;">You can contact with me any of below process. Just Click! Thank You. </p>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="post" action="<?php echo base_url('index.php/')?>Home/form_validation#contact-section" class="bg-light p-4 p-md-5 contact-form">
                <div class="form-group">
                <?php
                if($this->uri->segment(2) == "inserted") 
                {
                  echo '<span style="color:#0033cc;">Today is  ' . date("Y-M-d, l");
                  echo '<br/><span style="color:#009900;">Your Information has been received. I will contact you soon!</span>';

                  /*segment(2) = Home controller inserted function
                  segment(1) = Home controller*/
                  /*base url to redirect url*/
                }
              ?>
                <?php //echo "Today is " . date("Y-M-d, l"); ?>
                </div>              
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
                <span style="color:#ff0000;"><?php echo form_error("name"); ?></span>
              </div>              
              <div class="form-group">
                <input type="text" name="mail" class="form-control" placeholder="Your Email">
                <span style="color:#ff0000;"><?php echo form_error("mail"); ?></span>
              </div>              
              <div class="form-group">
                <input type="text" name="topic" class="form-control" placeholder="Topic">
                <span style="color:#ff0000;"><?php echo form_error("topic"); ?></span>
              </div>              
              <div class="form-group">
                <textarea type="text" name="msg" name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                <span style="color:#ff0000;"><?php echo form_error("msg"); ?></span>
              </div>              
              <div class="form-group">
                <input type="submit" name="insert" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>          
          </div>

          <div class="col-md-6 d-flex">
            <div class="img" style="background-image: url(<?php echo base_url(); ?>/assets/images/lake.jpg);"></div>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-github"></span>
          		</div>
          		<h3 class="mb-4">Github</h3>
	            <p><a href="https://github.com/mdmoinulhossain" target="_blank">Md. Moinul Hossain</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://+8801681894386" target="_blank">+880 168189-4386</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email</h3>
	            <p><a href="mailto:mdmoinulhossain100@gmail.com" target="_blank">MOINUL</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-linkedin"></span>
          		</div>
          		<h3 class="mb-4">Linkedin</h3>
	            <p><a href="https://www.linkedin.com/in/mdmoinulhossain100/" target="_blank">MD.MOINUL HOSSAIN</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>



<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Direction</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17369.957890216232!2d90.3609123919579!3d23.76221568639866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09f9ba3d447%3A0x1babce9f1c6c95a3!2z4Kau4KeL4Ka54Ka-4Kau4KeN4Kau4Kam4Kaq4KeB4KawLCDgpqLgpr7gppXgpr4!5e0!3m2!1sbn!2sbd!4v1604900522917!5m2!1sbn!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>              
            </div>
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="<?= base_url('index.php/'); ?>projects/"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                <li><a href="<?= base_url('index.php/'); ?>projects/"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Any Query?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Mohammadpur, Dkaha-1207.</span></li>
	                <li><a href="tel://+8801681894386" target="_blank"><span class="icon icon-phone"></span><span class="text">+880 168189 4386</span></a></li>
	                <li><a href="mailto:mdmoinulhossain100@gmail.com" target="_blank"><span class="icon icon-envelope"></span><span class="text">
	                mdmoinulhossain100@gmail.com</span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.linkedin.com/in/mdmoinulhossain100/" target="_blank"><span class="icon-linkedin"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/mmoinulh" target="_blank"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://twitter.com/Moinul_100" target="_blank"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://github.com/mdmoinulhossain" target="_blank"><span class="icon-github"></span></a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <?php echo "" . date("Y-M-d, l"); ?>
          </div>
          <div class="col-md-12 text-center">
              <?php
              echo "<p>Copyright  &copy; <a href='https://www.facebook.com/mmoinulh/' target='_blank'> Md.Moinul Hossain <a href='https://www.facebook.com/ges100/' target='_blank'> | GoldenEyes Ltd.  </a>   2020 - "   .date("Y") . "</p>";
              ?>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/aos.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/scrollax.min.js"></script>
  
  <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
    
  </body>
</html>