
<?php get_header(); ?>

<article class="containerr mt-100 ">
  <?php
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit2'])){
    // Get the submitted form data
    $postData = $_POST;
    $email = $_POST['email2'];
    $name = $_POST['name2'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name)){

        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
        }else{
            $uploadStatus = 1;

            // Upload attachment file
            if(!empty($_FILES["attachment"]["name"])){

                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["attachment"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF & DOC files are allowed to upload.';
                }
            }

            if($uploadStatus == 1){

                // Recipient
                $toEmail = 'akashyadav.iiita@gmail.com';

                // Sender
                $from = $_POST['email2'];
                $fromName = $_POST['name2'];

                // Subject
                $emailSubject = 'Join Request Submitted by '.$name;

                // Message
                $htmlContent = '<h2>Join Request Submitted</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Name:</b> '.$phone.'</p>
                    <p><b>Name:</b> '.$position.'</p>
                    <p><b>Email:</b> '.$email.'</p>';

                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";

                if(!empty($uploadedFile) && file_exists($uploadedFile)){

                    // Boundary
                    $semi_rand = md5(time());
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

                    // Headers for attachment
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

                    // Multipart boundary
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

                    // Preparing attachment
                    if(is_file($uploadedFile)){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" .
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" .
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }

                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;

                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);

                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";

                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);
                }

                // If mail sent
                if($mail){
                    $statusMsg = 'Your join request has been submitted successfully !';
                    $msgClass = 'succdiv';

                    $postData = '';
                }else{
                    $statusMsg = 'Your join request submission failed, please try again.';
                }
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
    }
}
?>


    <div class="row mx-0" style="margin-bottom:17px">


        <!-- Work content -->
        <div class="work-content col-sm-12 col-lg-5 pl-0 mx-auto">
			<!-- Display submission status -->
            <?php if(!empty($statusMsg)){ ?>
                <p style="color:green;" class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
            <?php } ?>

            <h1 class="work-title" style="color:#89a2e7;">Join Us</h1>
      <!-- Display contact form -->
			<form action="" method="post" id="form3" enctype="multipart/form-data">

                <label for="fieldEmail" class="email-title">Drop in your CVs.</label>

                <div class="">

                  <div class="email-div">
                    <input class="input-footer w-45" name="name2" type="text" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Full name" required="" autocomplete="off">
                  </div>
                  <div class="">
                    <input class="input-footer w-45" name="email2" type="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="" placeholder="Email address" >
                  </div>
                  <div class="">
                    <input class="input-footer w-45" name="phone2" type="number" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>" required="" placeholder="Phone number" >
                  </div>
                  <div class="">
                    <input class="input-footer w-45" name="position2" type="text" value="<?php echo !empty($postData['position'])?$postData['position']:''; ?>" required="" placeholder="Desired Position" >
                  </div>

                  <div class="custom-file w-45">
                    <input name="attachment" type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                  </div>

                  <div class="send">
                    <button type="submit" name="submit2" value="Submit" class="send-btn2">Submit</button>
                  </div>
                  <p class="p1"><?php echo $loginsuccess; ?></p>

                </div>
          </form>
        </div>
        <div class="col-sm-12 col-lg-6 bg-join">

        </div>

    </div>
</article>



<?php get_footer(); ?>
