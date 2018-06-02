 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Saratov - Kindergarten HTML Template | Contact</title>
<!-- Stylesheets -->
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\style.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images\favicon.ico" type="image/x-icon">
<link rel="icon" href="images\favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css\responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <?php include 'header.php'; ?> 
    <!--End Main Header -->
    
   
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<!--Info Section-->
        	<div class="info-section">
            	<div class="row clearfix">
                	<!--Contact Info Block-->
                	<div class="contact-info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box wow fadeIn" data-wow-delay="0ms">
                            	<span class="icon flaticon-location-pin"></span>
                            </div>
                            <div class="text"> Ghss Kamta Chitrakoot, Paldev, Satna, Madhya Pradesh </div>
                        </div>
                    </div>
                    
                    <!--Contact Info Block-->
                	<div class="contact-info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box wow fadeIn" data-wow-delay="300ms">
                            	<span class="icon flaticon-web"></span>
                            </div>
                            <div class="text">contact@ghsspaldev.com<br> yogeshallahabad.001@gmail.com</div>
                        </div>
                    </div>
                    
                    <!--Contact Info Block-->
                	<div class="contact-info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box wow fadeIn" data-wow-delay="600ms">
                            	<span class="icon flaticon-smartphone"></span>
                            </div>
                            <div class="text">+91-9425924238<br> +91-9425123689</div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!--Form Section-->
            <div class="form-section">
            	<div class="row clearfix">
                	<!--Form Column-->
                	<div class="form-column col-md-8 col-sm-12 col-xs-12">
                    	<!-- contact Form -->
                        <div class="contact-form">
                            <!--contact Form-->
                            <form method="post" action="sendemail.php" id="contact-form">
                                
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Name *" required="">
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email *" required="">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject *">
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Message</button>
                                </div>
                                    
                            </form>
                                
                        </div>
                        <!--End Contact Form -->
                    </div>
                    <!--Time Column-->
                    <div class="time-column col-md-4 col-sm-12 col-xs-12">
                    	<div class="inner-box">
                        	<h3>School hours</h3>
                            <ul class="time-info">
                            	<li class="clearfix">
                            		<div class="day-box">Monday</div><div class="time-box">8am to 5pm</div>
                                </li>
                                <li class="clearfix">
                            		<div class="day-box">tuesday</div><div class="time-box">8am to 5pm</div>
                                </li>
                                <li class="clearfix">
                            		<div class="day-box">wednesday </div><div class="time-box">8am to 5pm</div>
                                </li>
                                <li class="clearfix">
                            		<div class="day-box">thursday </div><div class="time-box">8am to 5pm</div>
                                </li>
                                <li class="clearfix">
                            		<div class="day-box">friday </div><div class="time-box">8am to 5pm</div>
                                </li>
                                <li class="clearfix">
                            		<div class="day-box">Saturday </div><div class="time-box">8am to 5pm</div>
                                </li>
                                <li class="clearfix">
                            		<div class="day-box">Sunday </div><div class="time-box">Closed</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Contact Section-->
    
    
    <!--Involved Section-->
    <section class="involved-section">
    	<div class="auto-container">
        	<div class="involved-inner wow fadeInUp" style="background-image:url(images/background/pattern-3.png);">
            	<div class="row clearfix">
                	<div class="column col-md-8 col-sm-12 col-xs-12">
                    	<h2>See Our Kindergarten Special Features & Activities!</h2>
                    </div>
                    <div class="btn-column col-md-4 col-sm-12 col-xs-12">
                    	<a href="#" class="theme-btn btn-style-one">Get Involved</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Involved Section-->
     <?php include 'footer.php'; ?>  
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

<script src="js\jquery.js"></script>
<script src="js\bootstrap.min.js"></script>
<script src="js\jquery.fancybox.pack.js"></script>
<script src="js\jquery.fancybox-media.js"></script>
<script src="js\appear.js"></script>
<script src="js\wow.js"></script>
<script src="js\validate.js"></script>
<script src="js\script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js\map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>