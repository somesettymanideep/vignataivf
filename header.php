<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q85EJNSNMW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q85EJNSNMW');
</script>

<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "102990155085733");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <meta charset="UTF-8">
     <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $metadescription; ?>">
<meta name="keywords" content="Best IVF center in Guntur, Best IVF center in Prakasam, Best IVF treatment in Guntur, Best IVF treatment in Prakasam, Best IVF hospital in Guntur, Best IVF hospital in Prakasm, Best fertility specialist in Guntur, best fertility specialist in Prakasam, Best fertility medical center in Guntur, Best Fertility medical center in Prakasam, Best fertility doctor in Guntur, Best fertility doctor in Prakasam, Best fertility hospital in Guntur, Best fertility hospital in Prakasam, Best fertility clinic in Guntur, Best fertility clinic in Prakasam, Best IVF clinic in Guntur, Best IVF clinic in Prakasam, Top IVF Hospital in Guntur, Top IVF Hospital in Prakasam,Top fertility hospital in Guntur, Top fertility hospital in Prakasam, Top fertility doctor in Guntur,Fertility Service,Vignata fertility and IVF Center,IVF CenterVignata Fertility,Fertility Care,Leading Fertility Consultant,Fertility Consultant,Fertility Treatment,
Surrogacy,reproductive techniques,Test Tube Baby,IVF Treatment,fertilize eggs,women fertility,Intracytoplasmic Sperm Injection (ICSI),Intracytoplasmic Morphologically Selected Sperm Injection (IMSI),Ovulation Induction(OI),Timed Intercourse (TI),hysteroscopy,laparoscopy,DRUG THERAPY IN PREGNANCY,Donor Insemination Program,best ivf center in guntur,best ivf center in prakasam,Best IVF treatment in Guntur,Best IVF treatment in Prakasam,Best IVF hospital in Guntur,Best IVF hospital in Prakasm,Best fertility specialist in Guntur,Best fertility doctor in Guntur,Best fertility doctor in Prakasam,Best fertility hospital in Guntur,Best fertility hospital in Prakasam,Best fertility clinic in Guntur,Best fertility clinic in Prakasam,Best IVF clinic in Guntur,Best IVF clinic in Prakasam,Top IVF Hospital in Guntur,Top IVF Hospital in Prakasam,Top fertility hospital in Guntur,Best fertility medical center in Guntur,Best Fertility medical center in Prakasam,best fertility specialist in Prakasam">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="canonical" href="https://www.vignataivfcenter.com/">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/font-icons.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/animate.css">
</head>

   <style>

      .home-banner {
      background-image:url("img/innerbanner/background.jpg");
      background-repeat: no-repeat;
      background-size: contain;
      }

   </style>
 
    <style>

      .home-banner-mobile {
      background-image:url("img/innerbanner/bg_mob_inner-banner.jpg");
      background-repeat: no-repeat;
      background-size: contain;
      }

   </style>  

<body class="light-version">
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index"><span><img src="img/logo.png" alt="logo" class="logosticks"></span></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">

                        <?php
                                            if($page=="home")
                                            {
                                                ?>
                                             <li class="nav-item"><a class="nav-link current" href="index">Home</a></li>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                   <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                 
                                                <?php
                                            }
                                        ?>           
  

                            <?php
                                            if($page=="about")
                                            {
                                                ?>
                                                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle current" href="about-us" onclick="window.location.href='about-us'" data-toggle="dropdown">About</a>
                        <div class="dropdown-menu">
                             <a class="dropdown-item" href="about-us">About Us</a>
                           <a class="dropdown-item" href="about-dr-vignata">About Dr. Vignata</a>
                               
                              
                        </div>
                    </li>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="about-us" onclick="window.location.href='about-us'" data-toggle="dropdown">About</a>
                        <div class="dropdown-menu">
                             <a class="dropdown-item" href="about-us">About Us</a>
                           <a class="dropdown-item" href="about-dr-vignata">About Dr. Vignata</a>
                               
                              
                        </div>
                    </li>
                 
                                                <?php
                                            }
                                        ?> 
                 

       <?php
                            if($page=="services")
                                            {
                                                ?>
                                                         <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle current" href="services" onclick="window.location.href='services'" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                             <a class="dropdown-item" href="fertility-work-up-for-couple">Fertility Work-Up For Couple</a>
                              <a class="dropdown-item" href="3D-4D-ultrasonography-obstetrics-and-gynaecology">3D/4D Ultrasonography (Obstetrics & Gynaecology)</a>
                               <a class="dropdown-item" href="endoscopy-laparoscopy-and-hysteroscopy">Endoscopy (Laparoscopy & Hysteroscopy)</a>
                                <a class="dropdown-item" href="ovulation-induction-timed-intercourse">Ovulation Induction - Timed Intercourse (OI-TI)</a>
                                 <a class="dropdown-item" href="intrauterine-insemination">Intrauterine Insemination (IUI)</a>
                                  <a class="dropdown-item" href="in-vitro-maturation-of-oocytes">In-vitro Maturation Of Oocytes (IVM)</a>
                            <a class="dropdown-item" href="in-vitro-fertilisation">In Vitro Fertilisation (IVF)</a>
                            <a class="dropdown-item" href="intracytoplasmic-sperm-injection">Intracytoplasmic Sperm Injection (ICSI)</a>
                            <a class="dropdown-item" href="intracytoplasmic-morphologically-selected-sperm-injection">Intracytoplasmic Morphologically Selected Sperm Injection (IMSI)</a>
                            <a class="dropdown-item" href="surgical-sperm-retrieval">Surgical Sperm Retrieval</a>
                             <a class="dropdown-item" href="vitrification-and-embryo-transfer">Vitrification And Embryo Transfer</a>
                              
                        </div>
                    </li>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                             <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services" onclick="window.location.href='services'" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                             <a class="dropdown-item" href="fertility-work-up-for-couple">Fertility Work-Up For Couple</a>
                              <a class="dropdown-item" href="3D-4D-ultrasonography-obstetrics-and-gynaecology">3D/4D Ultrasonography (Obstetrics & Gynaecology)</a>
                               <a class="dropdown-item" href="endoscopy-laparoscopy-and-hysteroscopy">Endoscopy (Laparoscopy & Hysteroscopy)</a>
                                <a class="dropdown-item" href="ovulation-induction-timed-intercourse">Ovulation Induction - Timed Intercourse (OI-TI)</a>
                                 <a class="dropdown-item" href="intrauterine-insemination">Intrauterine Insemination (IUI)</a>
                                  <a class="dropdown-item" href="in-vitro-maturation-of-oocytes">In-vitro Maturation Of Oocytes (IVM)</a>
                            <a class="dropdown-item" href="in-vitro-fertilisation">In Vitro Fertilisation (IVF)</a>
                            <a class="dropdown-item" href="intracytoplasmic-sperm-injection">Intracytoplasmic Sperm Injection (ICSI)</a>
                            <a class="dropdown-item" href="intracytoplasmic-morphologically-selected-sperm-injection">Intracytoplasmic Morphologically Selected Sperm Injection (IMSI)</a>
                            <a class="dropdown-item" href="surgical-sperm-retrieval">Surgical Sperm Retrieval</a>
                             <a class="dropdown-item" href="vitrification-and-embryo-transfer">Vitrification And Embryo Transfer</a>
                              
                        </div>
                    </li>
                 
                                                <?php
                                            }
                                        ?>


             
        <?php
                                            if($page=="treatments")
                                            {
                                                ?>
                                                 <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle current" href="#" id="navbardrop" data-toggle="dropdown">Treatments</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="advanced-treatments">Advanced Treatments</a>
                            <a class="dropdown-item" href="other-treatments">Other Treatments</a>
                             <a class="dropdown-item" href="third-party-reproduction">Third Party Reproduction</a>
                              <a class="dropdown-item" href="andrology-laboratory">Andrology Laboratory </a>
                          
                        </div>
                    </li>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                       <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Treatments</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="advanced-treatments">Advanced Treatments</a>
                            <a class="dropdown-item" href="other-treatments">Other Treatments</a>
                             <a class="dropdown-item" href="third-party-reproduction">Third Party Reproduction</a>
                              <a class="dropdown-item" href="andrology-laboratory">Andrology Laboratory </a>
                          
                        </div>
                    </li>
                 
                                                <?php
                                            }
                                        ?> 

                
                       <?php
                                            if($page=="portfolio")
                                            {
                                                ?>
                                                 <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle current" href="#" id="navbardrop" data-toggle="dropdown">Portfolio</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="success-stories">Success Stories</a>
                            <a class="dropdown-item" href="blog">Blog</a>
                            <a class="dropdown-item" href="frequently-asked-questions">FAQ'S</a>
                            <a class="dropdown-item" href="videos">Videos</a>
                           <!--<a class="dropdown-item" href="gallery">Gallery</a>-->
                           
                        </div>
                    </li>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Portfolio</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="success-stories">Success Stories</a>
                            <a class="dropdown-item" href="blog">Blog</a>
                            <a class="dropdown-item" href="frequently-asked-questions">FAQ'S</a>
                            <a class="dropdown-item" href="videos">Videos</a>
                           <!--  <a class="dropdown-item" href="gallery">Gallery</a> -->
                        </div>
                    </li>
                 
                                                <?php
                                            }
                                        ?> 
                    
                   
                          <?php
                                            if($page=="contact")
                                            {
                                                ?>
                                              <li class="nav-item">
                        <a class="nav-link current" href="contact">Contact</a>
                    </li>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                   <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                 
                                                <?php
                                            }
                                        ?> 
                  
                   
                    <li class="lh-55px"><a href="" class="btn login-btn ml-50" data-toggle="modal" data-target="#myModal"><i class="fa fa-calendar"></i> Request an Appointment</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ##### Header Area End ##### -->