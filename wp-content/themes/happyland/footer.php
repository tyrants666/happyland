<!--Footer....... -->

<footer class="footer">
    <?php
    if(isset($_POST['submit'])){
        $to = "akashyadav.iiita@gmail.com"; // this is your Email address
        $from = $_POST['email'];
        $subject = "Contact Us";
        $message = $from . " wrote the following:" . "\n\n" . $_POST['message'];
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
        $loginsuccess = "Mail Sent. Thank you :)";

        // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
    ?>

    <!-- <div class=" bordered"></div> -->

    <div class="row row2-foot padding-x mx-0">

        <form action="#subForm" method="post" id="subForm">

              <label for="fieldEmail" class="email-name">Contact Us</label>

              <div class="form-row">

                <div class="col-lg-3 email-div">
                  <input class="input-footer" name="email" type="email" required="" placeholder="Enter your email address" >
                </div>
                <div class="col-lg-2 message-div">
                  <input class="input-footer" name="message" type="text" required="" placeholder="Send us a message" autocomplete="off">
                </div>

                <div class="col-lg-1 mr-lg-5 send">
                  <button type="submit" name="submit" value="Submit" class="send-btn">Send</button>
                </div></br>
                <p class="p1"><?php echo $loginsuccess; ?></p>

              </div>
        </form>
      </div>
<div class="row mx-0 row3-foot padding-x">

        <!-- ********  Footer menu ******* -->
        <div class=" col-lg-2 p-0">
          <nav class="menu-bot">
            <span>Navigations</span>
            <?php wp_nav_menu( array('theme_location' => 'footer',
    				'depth'             => 2,
    				'container'         => '',
    				'container_class'   => '',
    				'container_id'      => '',
    				'menu_class'        => '',
    				) ); ?>
          </nav>
        </div>
        <!-- ********  Footer menu ******* -->
        <div class=" col-lg-2 p-0">
          <nav class="menu-bot">
            <span>Navigations</span>
            <?php wp_nav_menu( array('theme_location' => 'footer2',
    				'depth'             => 2,
    				'container'         => '',
    				'container_class'   => '',
    				'container_id'      => '',
    				'menu_class'        => '',
    				) ); ?>
          </nav>
        </div>
        <!-- *******  General Inquiry ****** -->
          <div class="col-lg-2 p-0 mr-5">
            <span>General inquiries</span>
            <a href="mailto:happylandsecondaryschool@gmail.com">happylandsecondaryschool@gmail.com</a>
          </div>
      <!-- ********  Logo Big ******* -->
          <div class=" logo-footer col-lg-2 col-sm-12">
            <a href=" <?php echo home_url(); ?>"> <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logo.png" class="footer-logo" alt="Logo"></a>
            <a href=" https://goo.gl/maps/8QE3g4h4tc1yH5JR7" target="_blank">
            <address class=" address ">
              Sarbodaya tole<br>
              Rajbiraj - 3,
              Saptari<br>
              State - 2,
              NEPAL
            </address>
          </a>
          </div>


    </div>

<!-- <div class=" bordered"></div> -->

    <div class="row foot_foot padding-x mx-0">

          <div class="col-sm-3 col-lg-4 p-0 social-icon ">
            <!-- <span>Social Icons</span> -->


            <a href="https://www.facebook.com/hlhss" target="_blank">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 width="20px" height="20px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
               <path id="facebook" fill="#a2b2bbf0" d="M17.252,11.106V8.65c0-0.922,0.611-1.138,1.041-1.138h2.643V3.459l-3.639-0.015
            	c-4.041,0-4.961,3.023-4.961,4.961v2.701H10v4.178h2.336v11.823h4.916V15.284h3.316l0.428-4.178H17.252z"/>
              </svg>
            </a>

            <a href="https://instagram.com/BigADCo/" target="_blank">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 width="20px" height="20px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
               <path id="instagram" fill="#a2b2bbf0" d="M22.107,3.415H7.893c-2.469,0-4.479,2.007-4.479,4.477v4.73v9.486c0,2.469,2.01,4.479,4.479,4.479h14.215
            	c2.469,0,4.479-2.01,4.479-4.479v-9.486v-4.73C26.586,5.421,24.576,3.415,22.107,3.415 M23.393,6.086l0.512-0.004v0.511v3.416
            	l-3.916,0.014l-0.012-3.928L23.393,6.086z M11.693,12.622c0.742-1.028,1.945-1.7,3.307-1.7s2.564,0.672,3.307,1.7
            	c0.484,0.67,0.771,1.49,0.771,2.379c0,2.248-1.828,4.078-4.078,4.078c-2.248,0-4.078-1.83-4.078-4.078
            	C10.922,14.112,11.211,13.292,11.693,12.622 M24.328,22.107c0,1.225-0.994,2.219-2.221,2.219H7.893
            	c-1.225,0-2.219-0.994-2.219-2.219v-9.486h3.459C8.832,13.356,8.664,14.159,8.664,15c0,3.494,2.842,6.335,6.336,6.335
            	s6.336-2.842,6.336-6.335c0-0.842-0.17-1.645-0.467-2.379h3.459V22.107z"/>
              </svg>
            </a>

            <a href="https://instagram.com/BigADCo/" target="_blank">
              <svg width="19px" height="19px" class="twitter" fill="#a2b2bbf0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" class="svg-icon"><path  d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"/></svg>
            </a>

          </div>
      <!-- ********  Footer menu ******* -->
          <div class="col-sm-12 col-lg-8 pl-lg-5 ml-auto copyright">
            © 2018-2019 Happyland. All rights reserved. Terms of use. Privacy policy.
          </div>
      <!-- ********  Footer menu Mobile ******* -->
          <div class="col-sm-12 col-lg-8 pl-lg-5 ml-auto copyright2">
            © 2018-2019 Bigadcompany. All rights reserved.<br> Terms of use. Privacy policy.
          </div>

    </div>
      <?php wp_footer(); ?>
</footer>


</div>
</body>
</html>
