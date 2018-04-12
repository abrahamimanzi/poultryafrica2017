<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;

?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
<?php include 'includes/head-common.php';?>
    <title>Contact us - Transform Africa Summit 2017</title>	 
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php'?>
	<div id="wrapper" class="home"> 
        <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" src="<?=DN?>/img/header-1.jpg"/>
          </div>
        </div>
        <section class="section-main white-bg">
          <div class="home-section-text" style="padding: 10px 0;">
                <img class="img img-responsive" src="<?=DN?>/img/holder.jpg"/>
            </div>
          <div class="container-fluid bg">
            <div class="container white-bg">
                <div class="register_layout" id="other" >
                  <div class="text-center">   
                      <h2 class="title text-center text-uppercase">Contact Us
                       <span class="lnr lnr-chevron-right"></span> 
                     </h2>
                    <p>Join over 4,000 visitors at the Transform Africa Summit and network with like minded industry players transforming the ICT sector in Africa. Engage with innovators, pioneers &amp; leaders from both the pubic &amp; private sector not only from Africa, but across the globe.</p>
                   <hr class="hr-blue">
                    <ul class="unstyled" style="line-height: 2">
                      <li><strong>Smart Africa Secretariat</strong></li>
                      <li>09th Floor, Bloc C, Makuza Peace Plaza, </li>
                      <li>10 KN4 Avenue, Kigali, Rwanda</li>
                      <li>Telephone 1: +250 788-300-581</li>
                      <li>Telephone 2: +250 738-300-581</li>
                      <li>PO Box: 4913</li>
                      <li><img class="img img-responsive text-center" src="img/email.png" style="width: 280px; margin: auto; " /></strong></li>
                    </ul>
                  </div>
                </div>
            </div>
            <br>
          </div>
        </section>
        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
</body>
</html>