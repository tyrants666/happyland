
<?php get_header(); ?>

<article class="containerr mb-3 mb-lg-5">

  <h2 class="contact-title"><?php the_title();?></h2>

    <div class="row mx-0 mt-3 mb-4 mt-lg-5 mb-lg-5 row-contact">

          <div class="col-cont col-lg-2 d-inline-flex p-0">
            <i class="material-icons" style="color:#904fb1e6">call </i>
            <a href="tel:+9773120160">
                <p>+977 - 31520160</p>
            </a>
          </div>

          <div class="col-cont col-lg-3 d-inline-flex p-0 ml-lg-5 mr-lg-2 mr-lg-3">
            <i class="material-icons" style="color:#e43d3b">place</i>
            <a href=" https://goo.gl/maps/8QE3g4h4tc1yH5JR7" target="_blank">
                <p class="address-p">
                  Sarbodaya tole ,
                  Rajbiraj - 3,
                   Saptari ,
                  NEPAL
                </p>
          </a>

          </div>
          <div class="col-cont col-lg-3 d-inline-flex p-0 mx-auto">
            <i class="material-icons" style="color:#19ce19">alternate_email</i>
            <!-- <a href="mailto:happylandsecondaryschool@gmail.com"><p class="email-p long-email">happylandsecondaryschool@gmail.com</p></a> -->
            <a href="mailto:happylandsecondaryschool@gmail.com"><p class="email-p">happylandsecondaryschool @gmail.com</p></a>
          </div>

          <div class="col-cont col-lg-3 d-inline-flex p-0 mx-auto">
            <i class="material-icons" style="color:">access_time</i>
            <p> Sun-Thu : &nbsp; <?php the_field('sun-thu'); ?></br>
              Friday :&emsp;&nbsp; <?php the_field('fri'); ?></p>
            </div>


    </div>

    <!-- MAP -->
    <div class="row mx-0 ">

        <div class="col-12 p-0">
          <h3 class="mb-2 mt-3 mt-lg-0 " style="color:#516894;">Find us on map</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1784.6384725367798!2d86.75054010070902!3d26.54336954737803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eefa99c32cf5a5%3A0x3fdfc85bc957c8b4!2sHappyland+H.+S.+School!5e0!3m2!1sen!2snp!4v1557031131658!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div>

</article>


<?php get_footer(); ?>
