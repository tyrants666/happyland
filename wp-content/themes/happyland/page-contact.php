
<?php get_header(); ?>

<article class="containerr">

  <?php
        if(isset($_POST['submit1'])){

          $to = "bigadcompany@gmail.com"; // this is your Email address
          $from = $_POST['name1'];
          $subject = "Contacts";
          $message =" Enquiry Details:" . "\n\n" .
                    " Name: " . $_POST['name1'] . "\n" .
                    " Email: " . $_POST['email1'] . "\n" .
                    " Phone: " . $_POST['phone1'] . "\n" .
                    " City: " . $_POST['city1'] . "\n" .
                    " Country: " . $_POST['country1'] . "\n" .
                    " Job: " . $_POST['job1'] . "\n" .
                    " Company: " . $_POST['company1'] . "\n" .
                    " Message: " . $_POST['message1'] . "\n" ;
          $headers = "From: " . $from;
          mail($to,$subject,$message,$headers);
          $loginsuccess = "Mail Sent. Thank you , we will contact you shortly.";
        }
    ?>

    <div class="row mx-0">

        <div class="col-12 p-0">
          <h1 class="contact-title">Let’s connect</h1>
        </div>

        <div class="col-12 p-0">
          <h2 class="contact-subtitle" >What can we do for your business?</h2>
        </div>

        <div class="col-12 p-0">

          <form action="#form2" method="post" id="form2">

                <div class="col-sm-12 col-lg-8 p-0">

                  <div class=" input-div form-group">
                    <label class="contact-label">Full name*</label>
                    <input class="input1" name="name1" type="text" autocomplete="off" required>
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">Email*</label>
                    <input class="input1" name="email1" type="email" autocomplete="off" required>
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">Phone</label>
                    <input class="input1" name="phone1" type="number" autocomplete="off">
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">City</label>
                    <input class="input1" name="city1" type="text" autocomplete="off">
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">Country</label>
                    <input class="input1" name="country1" type="text" autocomplete="off">
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">Job title</label>
                    <input class="input1" name="job1" type="text" autocomplete="off">
                  </div>

                  <div class=" input-div form-group">
                    <label class="contact-label">Company</label>
                    <input class="input1" name="company1" type="text" autocomplete="off">
                  </div>

                  <div class="input-div form-group">
                      <label class="contact-label">How can we help you?</label>
                      <textarea class="" name="message1" rows="3"></textarea>
                  </div>

                  <div class=" send">
                    <button type="submit" name="submit1" value="Submitt" class="send-btn">Submit</button>
                  </div>
                  <p class="p1"><?php echo $loginsuccess; ?></p>

                </div>
          </form>

        </div>


</article>


<?php get_footer(); ?>
