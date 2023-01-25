<?php
error_reporting(0);
if(isset($_POST['buttonappoint']))
{
      $name = $_POST["name"]; 
      $email = $_POST["email"]; 
      $mobile = $_POST["mobile"];
      $date = $_POST["date"];  
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
                 <strong>Phone Number : </strong>' . $mobile . '<br>
                <strong>Date : </strong>' . $date . '<br>
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
      header('refresh:0;url=index.php');
           ?>
                <script>
          alert('Thank you <?php error_reporting(0); echo $name; ?>. We will contact you soon.');
        </script>
                <?php
    }
    else 
    {
      header('refresh:0;url=index.php');
      ?>
              <script>
          alert('Something Went Wrong. Please Try Again Later. Thank you.');
        </script>
            <?php
    }
}

?>

<div class="footer-content-area mt-0 hidden-xs" style="background-image: url('img/footer.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact_info_area footer-copywrite-info">
                       
                        <div class="contact_info copywrite_text fadeInUp" data-wow-delay="0.2s">
                              <h5>ABOUT</h5>
                            <p class="justify">Vignata Fertility & IVF Center creates families by providing leadership in the field of advanced reproductive technologies. Our commitment is to provide technology in a private and personal environment using intelligence, integrity, and innovation. Our passion is to encourage our patients to hold on to their dreams by creating miracles every day.</p>


                        </div>
               
                    </div>
                </div>


                 <div class="col-lg-1 col-md-6 col-sm-12"></div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                            <h5>LINKS</h5>
                        
                           <a href="services"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Our Services</p></a>
                            <a href="advanced-treatments"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Advanced Treatments</p></a>
                            <a href="other-treatments"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Other Treatments</p></a>
                             <a href="third-party-reproduction"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Third Party Reproduction</p></a>
                              <a href="andrology-laboratory"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Andrology Laboratory</p></a>
                             <a href="success-stories"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Success Stories</p></a>
                            <a href="blog"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Our Blog</p></a> 
                        </div>
                    </div>
                </div>
                  
      
                

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                            <h5>GET IN TOUCH</h5>
                            <p><i class="fa fa-map-marker" style="font-size:15px;color:#fff;"></i>&nbsp; <strong style="font-size: 18px;">Janardani Hospital</strong>
opp.to vijaya talkies, kothapet
Guntur 522001, Andhra Pradesh, India.</p>
                           
                            <p><i class="fa fa-phone" style="font-size:15px;color:#fff;margin-top: 20px;"></i>&nbsp; +91 9346528327</p>
                            <p><i class="fa fa-envelope" style="font-size:15px;color:#fff;margin-top: 20px;"></i>&nbsp; vignatafertilityandivfcentre@gmail.com</p><br>

                                <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                            <a href="https://www.facebook.com/VignataFertilityCenter/" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="color:#1e4d9b;"></i></a>
                             <a href="https://www.instagram.com/vignataivfcenter/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="background: -webkit-gradient(linear, left top, left bottom, from(#515ed1), to(#ee713c));-webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i></a>
                           <!--  <a href="#"><i class="fa fa-linkedin" aria-hidden="true" style="color:#01649b;"></i></a> -->
                            <a href="https://www.youtube.com/channel/UCEcSXKL5RNnCOqPsPcASodA" target="_blank"> <i class="fa fa-youtube" aria-hidden="true" style="color:#fe0000;"></i></a>
                            
                           
                        </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
            
    </div>



<div class="footer-content-area mt-0 visible-xs" style="background-image: url('img/footer_mob.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact_info_area footer-copywrite-info">
                       
                        <div class="contact_info copywrite_text fadeInUp" data-wow-delay="0.2s">
                              <h5>ABOUT</h5>
                            <p class="justify">Vignata Fertility & IVF Center creates families by providing leadership in the field of advanced reproductive technologies. Our commitment is to provide technology in a private and personal environment using intelligence, integrity, and innovation. Our passion is to encourage our patients to hold on to their dreams by creating miracles every day.</p>
                        </div>
                  
                    </div>
                </div>


                
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                            <h5>LINKS</h5>
                        
                           <a href="services"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Our Services</p></a>
                            <a href="advanced-treatments"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Advanced Treatments</p></a>
                            <a href="other-treatments"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Other Treatments</p></a>
                             <a href="third-party-reproduction"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Third Party Reproduction</p></a>
                              <a href="andrology-laboratory"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Andrology Laboratory</p></a>
                             <a href="success-stories"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Success Stories</p></a>
                              <a href="blog"><p style="line-height: 2.4;"><i class="fa fa-angle-double-right" style="font-size:15px;color:#fff;"></i>&nbsp; Our Blog</p></a>
                        </div>
                    </div>
                </div>
                  
      
                

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                            <h5>CONTACT US</h5>
                            <p><i class="fa fa-map-marker" style="font-size:15px;color:#fff;"></i>&nbsp; <strong style="font-size: 18px;">Janardani Hospital</strong>
opp.to vijaya talkies, kothapet
Guntur 522001, Andhra Pradesh, India.</p>
                           
                            <p><i class="fa fa-phone" style="font-size:15px;color:#fff;margin-top: 20px;"></i>&nbsp; +91 9346528327</p>
                            <p><i class="fa fa-envelope" style="font-size:15px;color:#fff;margin-top: 20px;"></i>&nbsp; vignatafertilityandivfcentre@gmail.com</p><br>

                               <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                            <a href="https://www.facebook.com/VignataFertilityCenter/"><i class="fa fa-facebook" aria-hidden="true" style="color:#1e4d9b;"></i></a>
                             <a href="https://www.instagram.com/vignataivfcenter/?hl=en"><i class="fa fa-instagram" aria-hidden="true" style="background: -webkit-gradient(linear, left top, left bottom, from(#515ed1), to(#ee713c));-webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i></a>
                            <!--   <a href="#"><i class="fa fa-linkedin" aria-hidden="true" style="color:#01649b;"></i></a> -->
                            <a href="https://www.youtube.com/channel/UCEcSXKL5RNnCOqPsPcASodA"> <i class="fa fa-youtube" aria-hidden="true" style="color:#fe0000;"></i></a>
                            
                           
                           
                        </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
            
    </div>


<div class="footer-bottom centred">
            <div class="auto-container">
                <div class="copyright">
                    <p>Copyright © 2020 Vignata Fertility & IVF Center. <span style="color:#f3045d;font-weight: 700;">Developed by <a href="https://vouchsolutions.com/" target="_blank" style="color:#f3045d;font-weight: 700;">VOUCHSOLUTIONS</a></span></p>
                </div>
            </div>
        </div>


<div class="chat stylegifsiconsing">
     <p style="">+91 9346528327</p>
    <a href="https://api.whatsapp.com/send?phone=+91 9346528327&amp;text=Hello" target="_blank"><img src="img/whatsapp.png" style="width:50px;"></a>
</div>

<div class="stylegifsiconsing">
          <a href="https://www.google.com/search?authuser=1&sxsrf=ALeKk00Lt_KDd8nGdzJhUfrIXuXfCEQsnA%3A1610362967932&source=hp&ei=VzD8X-70NKeC4-EPoa694A4&q=vignata+fertility+center&oq=vignata+fertility+center&gs_lcp=CgZwc3ktYWIQAzoQCC4QxwEQrwEQ6gIQJxCTAjoHCCMQ6gIQJzoECCMQJzoICAAQsQMQyQM6BQgAELEDOgIIADoFCC4QsQM6CAgAELEDEIMBOgIILjoICC4QsQMQkwI6BQgAEMkDOgoIABCxAxCxAxAKOgcIABCxAxAKOgQIABAKOgoIABCxAxDJAxAKOgcIABDJAxAKOgsILhCxAxDHARCjAjoLCC4QsQMQyQMQkwI6CAguEMcBEK8BOgQILhAKOg0ILhCxAxDJAxAKEJMCOgoIABCxAxCDARAKOgoILhDHARCvARAKOgoILhDJAxAKEJMCOgoILhCxAxCDARAKOgUIIRCgAToHCCEQChCgAToECCEQFVDnC1iRX2DKYGgIcAB4AIABwQGIAacbkgEEOS4yMpgBAKABAaoBB2d3cy13aXqwAQo&sclient=psy-ab&ved=0ahUKEwiu_KLF3ZPuAhUnwTgGHSFXD-wQ4dUDCAc&uact=5#lrd=0x3a4a7584418661bb:0x5f27a95dd116332c,1,,," target="_blank">  
           <img src="img/google.png" alt="" style="width:8%;" class="watsapp"></a>
        </div>

<a href="#" class="float">
  <img src="img/vignatagif.gif" alt="" class="img-responsive">
</a>

<div class="visible-xs footer-icons">

  <div class="container">
          <div class="row">
           <div class="col-md-2" style="width: 25%;">
             
              <a href="" data-toggle="modal" data-target="#myModal">
                <img src="img/appointment.png" style="width: 40px;float: left;" data-toggle="tooltip" data-placement="right" title="Book An Appointment" aria-describedby="tooltip259801"></a>
           </div>
              <div class="col-md-2" style="width: 25%;">
               <a href="https://api.whatsapp.com/send?phone=+91 9346528327&amp;text=Hello">
                <img src="img/whatsapp.png" style="width: 40px;float: left;" data-toggle="tooltip" data-placement="right" title="Send a Message" aria-describedby="tooltip259801"></a>
            </div>

   
  

            <div class="col-md-2" style="width: 25%;">
         <a href="https://www.google.com/search?authuser=1&sxsrf=ALeKk00Lt_KDd8nGdzJhUfrIXuXfCEQsnA%3A1610362967932&source=hp&ei=VzD8X-70NKeC4-EPoa694A4&q=vignata+fertility+center&oq=vignata+fertility+center&gs_lcp=CgZwc3ktYWIQAzoQCC4QxwEQrwEQ6gIQJxCTAjoHCCMQ6gIQJzoECCMQJzoICAAQsQMQyQM6BQgAELEDOgIIADoFCC4QsQM6CAgAELEDEIMBOgIILjoICC4QsQMQkwI6BQgAEMkDOgoIABCxAxCxAxAKOgcIABCxAxAKOgQIABAKOgoIABCxAxDJAxAKOgcIABDJAxAKOgsILhCxAxDHARCjAjoLCC4QsQMQyQMQkwI6CAguEMcBEK8BOgQILhAKOg0ILhCxAxDJAxAKEJMCOgoIABCxAxCDARAKOgoILhDHARCvARAKOgoILhDJAxAKEJMCOgoILhCxAxCDARAKOgUIIRCgAToHCCEQChCgAToECCEQFVDnC1iRX2DKYGgIcAB4AIABwQGIAacbkgEEOS4yMpgBAKABAaoBB2d3cy13aXqwAQo&sclient=psy-ab&ved=0ahUKEwiu_KLF3ZPuAhUnwTgGHSFXD-wQ4dUDCAc&uact=5#lrd=0x3a4a7584418661bb:0x5f27a95dd116332c,1,,,">
            <img src="img/review.png" style=" width: 40px; float: left;" data-toggle="tooltip" data-placement="right" title="Review Us" aria-describedby="tooltip259801"></a>
            </div>
            
            <div class="col-md-2" style="width: 25%;">
        <a href="tel:+91 9346528327">
            <img src="img/callus.png" style="width: 40px;" data-toggle="tooltip" data-placement="right" title="Call Us" aria-describedby="tooltip259801"></a>
            </div>
          
             
          </div>
        </div>
       </div>

 <div class="modal fade" id="myModal" role="dialog" style="margin-top: 40px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        
        <center>  <h4 class="modal-title" style="color:#fff;font-size: 1.3rem;">Book An Appointment</h4></center>
            <button type="button" class="close" data-dismiss="modal" style="color:#fff;">&times;</button>
        </div>
        <div class="modal-body">
          <section class="contact-section" style="padding: 0px 0px 0px 0px;">
        <div class="auto-container">
            <div class="row clearfix">
                
                    <div class="form-inner">

                   <div class="contact_form">
                        <form action="" method="post">
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
                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="mobile" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Mobile</label>
                                    </div>
                                </div>
                                  <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.4s">
                                        <input type="date" name="date" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                       <!--  <label>Date</label> -->
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
                                    <button type="submit" name="buttonappoint" class="btn dream-btn">Send Message <i class="fa fa-paper-plane" aria-hidden="true" style="font-size:13px;color:#fff;"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
             
                
            </div>
        </div>
    </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
<style>
.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
    background-color: #049fb3;
    /* color: #fff; */
}



</style>



    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.html"></script>

    <script src="js/jquery.syotimer.min.html"></script>

    <!-- script js -->
    <script src="js/script.js"></script>

<!-- <script>
$(document).ready(function(){
   runslide();
      function runslide() {
         $('#pic1').fadeIn(3000).delay(1500).fadeOut(3000, function() {
            $('#pic2').fadeIn(3000).delay(1500).fadeOut(3000, function() {
               $('#pic3').fadeIn(3000).delay(3500).fadeOut(3000, function() {
                $('#pic4').fadeIn(3000).delay(3500).fadeOut(3000, function() {
                  runslide();
               });
            });
         });

         });
      }
});

</script> -->

<!-- <script>
$(document).ready(function(){
   runslide();
      function runslide() {
         $('#pics1').fadeIn(3000).delay(1500).fadeOut(3000, function() {
            $('#pics2').fadeIn(3000).delay(1500).fadeOut(3000, function() {
               $('#pics3').fadeIn(3000).delay(3500).fadeOut(3000, function() {
                $('#pics4').fadeIn(3000).delay(3500).fadeOut(3000, function() {
                  runslide();
               });
            });
         });

         });
      }
});

</script> -->



</body>
</html>