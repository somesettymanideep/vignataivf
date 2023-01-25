<?php
error_reporting(0);
if(isset($_POST['appointmentbook']))
{
      $name = $_POST["fullname"]; 
      $email = $_POST["emailid"]; 
      $date = $_POST["dates"];  
      $time = $_POST["times"];
      $mobile = $_POST["mobileno"];
      $enquiry = $_POST["message"];

    
        $from = 'appointment@vignataivfcenter.com';
    
    $to = 'vignatafertilityandivfcentre@gmail.com';
    $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$from.''. "\r\n" .
          'Reply-To: '.$from.'' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
        $subjectmail = "Appointment Info From Vignata Fertility & IVF Center Website";
        $message = '<html>
                <head>
                <title>' . $subjectmail . '</title>
                </head>
                <body>
                <p style="text-align:left;">Hello Doctor,<br><br>Appointment Details are as follows :<br><br>
                <strong>Name : </strong>' . $name . '<br>
                <strong>EmailID : </strong>' . $email . '<br>
                <strong>Date : </strong>' . $date . '<br>
                <strong>Time : </strong>' . $time . '<br>
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
      header('refresh:0;url=book-an-appointment.php');
           ?>
                <script>
          alert('Thank you <?php error_reporting(0); echo $name; ?>. We will contact you soon.');
        </script>
                <?php
    }
    else 
    {
      header('refresh:0;url=book-an-appointment.php');
      ?>
              <script>
          alert('Something Went Wrong. Please Try Again Later. Thank you.');
        </script>
            <?php
    }
}

?>

<?php
$title= "Best IVF center in Guntur";
$metadescription = "✅Vignata IVF Center in Guntur, is one of the best ✅infertility or ✅IVF treatment clinics in India. ✅Call 093465 28327 & book an appointment now!";
include'header.php';
?>

<?php include 'innerpage-mobilebanner.php'; ?>
  <!--   <div class="breadcumb-area clearfix auto-init" style="background-image: url('img/book-an-appointment.jpg');">
       <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="title wow fadeInUp innerheadingspocketssing" data-wow-delay="0.2s">Appointment</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ##### Welcome Area End ##### -->

    


    <!-- ##### Contact Area Start ##### -->
    <section class="sectionclassing contact_us_area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <span>Contact With Us!</span>
                        <h2 class="fadeInUp d-blue" data-wow-delay="0.3s">Book an Appointment</h2>
                        <p class="fadeInUp" data-wow-delay="0.4s">For general inquiries or to book your first appointment, please complete the form below or call us on +91 9346528327.</p>
                    </div>
                </div>
            </div> 

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact_form">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div id="success_fail_info"></div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="fullname" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.3s">
                                        <input type="text" name="emailid" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.4s">
                                        <input type="date" name="dates" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                      <!--   <label>Mobile</label> -->
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.4s">
                                        <input type="time" name="times" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                       <!--  <label>Mobile</label> -->
                                    </div>
                                </div>
                                  <div class="col-12">
                                    <div class="group fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="mobileno" required>
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
                                    <button type="submit" name="appointmentbook" class="btn dream-btn">Send Message <i class="fa fa-paper-plane" aria-hidden="true" style="font-size:13px;color:#fff;"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="clearfix">&nbsp;</div>
  <div class="clearfix">&nbsp;</div>  
<?php include 'footer.php'; ?>