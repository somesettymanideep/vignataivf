<?php
error_reporting(0);
if(isset($_POST['contactbutton']))
{
      $name = $_POST["name"]; 
      $email = $_POST["email"]; 
      $mobile = $_POST["mobile"];  
      $enquiry = $_POST["message"];
    
        $from = 'contact@vignataivfcenter.com';
    
    $to = 'vignatafertilityandivfcentre@gmail.com';
    $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$from.''. "\r\n" .
          'Reply-To: '.$from.'' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
        $subjectmail = "Contact Info From Vignata Fertility & IVF Center Website";
        $message = '<html>
                <head>
                <title>' . $subjectmail . '</title>
                </head>
                <body>
                <p style="text-align:left;">Hello Doctor,<br><br>Contact Details are as follows :<br><br>
                <strong>Name : </strong>' . $name . '<br>
                <strong>EmailID : </strong>' . $email . '<br>
                <strong>Phone Number : </strong>' . $mobile . '<br>
                <strong>Message : </strong>' . $enquiry . '<br>
                <br><br>
                
                Thanks and Regards,<br>
                <strong>Web Administrator,</strong><br>
                Vignata Fertility & IVF Center.<br>
                URL: https://www.vignataivfcenter.com/
                </p></body></html>';

        
        if(mail($to, $subjectmail, $message, $headers))
    {
            //we show the good guy only in one case and the bad one for the rest.
      header('refresh:0;url=contact.php');
           ?>
                <script>
          alert('Thank you <?php error_reporting(0); echo $name; ?>. We will contact you soon.');
        </script>
                <?php
    }
    else 
    {
      header('refresh:0;url=contact.php');
      ?>
              <script>
          alert('Something Went Wrong. Please Try Again Later. Thank you.');
        </script>
            <?php
    }
}

?>

<?php
$page="contact";
$title= "Top fertility doctor in Guntur|Vignata IVF Center";
$metadescription = "✅Vignata IVF Center in Guntur, is one of the best ✅infertility or ✅IVF treatment clinics in India. ✅Call 093465 28327 & book an appointment now!";
include 'header.php';
?>
<?php include 'innerpage-mobilebanner.php'; ?>


    <section class="sectionpadding90">
        <div class="container">
            <div class="row">
           
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="article special blue-bg box-shadow" style="background-color: #049fb3 !important;">
                        <div class="form-head">
                            <div class="form-head-icon"><img src="img/icons/info2.png" alt=""></div>
                            <div class="form-head-info">
                                <h6 class="w-text">Email Us</h6>
                                <p class="g-text">vignatafertilityandivfcentre@gmail.com</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="article special blue-bg box-shadow" style="background-color: #d7437a !important;">
                        <div class="form-head mb-0">
                            <div class="form-head-icon"><img src="img/icons/info3.png" alt=""></div>
                            <div class="form-head-info">
                                <h6 class="w-text">Call Us</h6>
                                <p class="g-text">+91 9346528327</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                     <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="article special blue-bg box-shadow" style="background-color: #049fb3 !important;">
                        <div class="form-head">
                            <div class="form-head-icon"><img src="img/icons/info1.png" alt=""></div>
                            <div class="form-head-info">
                               <!--  <h6 class="w-text">9:00 a.m to 9:00 p.m.</h6> -->
                <p class="g-text"><strong style="font-size: 18px;">Janardani Hospital</strong> opp.to vijaya talkies, kothapet, Guntur- 522001.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ##### Contact Area Start ##### -->
    <section class="sectionclassing contact_us_area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <span>Contact With Us!</span>
                        <h2 class="fadeInUp d-blue" data-wow-delay="0.3s">Need help? Talk to the fertility experts</h2>
                        <p class="fadeInUp" data-wow-delay="0.4s">For general inquiries or to book your first appointment, please complete the form below or call us on +91 9346528327.</p>
                    </div>
                </div>
            </div> 

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact_form">

                        <form action="contact.php" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div id="success_fail_info"></div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.3s">
                                        <input type="text" name="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="mobile" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Mobile</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" name="contactbutton" class="btn dream-btn">Send Message <i class="fa fa-paper-plane" aria-hidden="true" style="font-size:13px;color:#fff;"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

     <section class="section-padding-70-100">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7659.055070317393!2d80.44478933488769!3d16.295967800000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a754a08a61637%3A0x7ff4b3001a46d70c!2sJanardhani%20Hospital!5e0!3m2!1sen!2sin!4v1605084966031!5m2!1sen!2sin" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            </div>
        </div>
    </section>
    
<?php include 'footer.php'; ?>