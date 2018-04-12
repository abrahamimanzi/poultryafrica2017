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
    <title>Plan your trip - <?=EVENT?></title>	 
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php';?>
               
	<div id="wrapper" class="home"> 
        <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" style="width: 100%" src="<?=DN?>/img/plan.jpg"/>
          </div>
        </div>
        <div class="sectiongrey">
            <section>
                <div class="separator"> 
                    <div class="line"></div>
                    <h2>Plan your trip</h2>
                    <div class="line"></div>

                </div>
                <h4>
                    <span class="lnr lnr-chevron-right"></span> 
                    <span class="light"><small>Getting to <?=EVENT_SHORT?> 2017</small></span>
                  
                </h4>
                <div class="col-sm-12 col-md-12">
                    <p class="text-center text-default">Get all the information you need regarding visas, lodging, travel and tourism while here in Kigali for <?=EVENT?>. </p>
                    <hr class="hr-book-layout" />
                    <div class="thumbnail tile tile-medium tile-teal pointer">
                      <a href="<?=DN?>/visa" >
                        <h4 class="text-left text-white h4-packs text-uppercase"> Visa Requirements</h4>
                        <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                      </a>
                    </div>
                    <div class="thumbnail tile tile-medium tile-teal pointer">
                      <a href="<?=DN?>/accomodation" >
                        <h4 class="text-left text-white h4-packs text-uppercase"> Accommodation<br> 
                          <!-- <small>Private sector, Consultants, Analysts, Academia, Civil Society </small> -->
                        </h4>
                        <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                      </a>
                    </div>
                    <div class="thumbnail tile tile-medium tile-teal pointer">
                      <a href="<?=DN?>/transport" >
                        <h4 class="text-left text-white h4-packs text-uppercase"> Transport While in KIgali</h4>
                        <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                      </a>
                    </div>
                    <div class="thumbnail tile tile-medium tile-teal pointer">
                      <a href="<?=DN?>/discover" >
                        <h4 class="text-left text-white h4-packs text-uppercase"> Discover Rwanda</h4>
                        <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                      </a>
                    </div>
                    <hr>
                    <script>
                        $(".tile-teal").click(function() {
                          window.location = $(this).find("a").attr("href"); 
                          return false;
                        });
                    </script>
                    <style>
                        .pointer {
                          cursor: pointer!important;
                        }
                    </style>
                    <p class="text-center text-default">Join over 4,000 visitors at the <?=EVENT?> and network with like minded industry players transforming the ICT sector in Africa. Engage with innovators, pioneers &amp; leaders from both the pubic &amp; private sector not only from Africa, but across the globe.</p>
                    <hr class="hr-book-layout" />
                </div>
            </section>
        </div>

        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
    
</body>
</html>