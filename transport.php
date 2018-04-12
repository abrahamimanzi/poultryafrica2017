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
    <title>Transport - <?=EVENT?></title>	 
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php';?>
               
	<div id="wrapper" class="home transport"> 
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
                  <span class="light"><small>Transport while in Kigali</small></span>
                
              </h4>
                <div class="grid3">
                      <div class="text-">
                          <!-- <h3 class="text-left text-gray"><strong>TRANSPORTATION</strong></h3>
                          <p>Delegates can use prepaid public transportation means provided by Transform Africa Summit. More information will be available on the website closer to the event date.
                          <br>
                            If you have already registered, an email notification will be sent you with transportation options, schedules and routes.  -->
                          <!-- <hr> -->
                          <!-- <a href="#" class="btn btn-platinum">Book Transport</a> -->
                          <!-- </p> -->

                          <h3 class="text-center text-gray"><strong>GETTING AROUND KIGALI</strong></h3>
                          <h3 class="text-center text-gray"><?=EVENT?> BUS SHUTTLE SERVICE</h3>
                          <p>Designated summit buses will transport you to and from the airport, 
                          the accreditation center, venue and affiliated hotels during the Summit 
                          via dedicated routes.</p>

                          <p>Transportation will also be provided to the official social events 
                          such as the Cultural soiree and Gala dinner.</p>
                          <?php /* ?>
                          <h3 class="text-center text-gray"><?=EVENT_SHORT?>2017 TRAVEL CARD</h3>
                          <p>You can buy your <?=EVENT_SHORT?>2017 Tap n Go card at airport in 
                          the reception lounge and at the inside Kigali Convention Center which 
                          you can use to access the <?=EVENT_SHORT?> Bus shuttle route.</p>
                          <?php */ ?>
                          <div class="col-xs-12 col-sm-12">

                          </div>
                      </div>
                </div>
                <div class="grid3">
                    <article class="col shadow">
                        <figure><img src="img/bmw-i700-2017.png" alt="bmw-i700-2017"></figure><br>
                        <h3>BMW i700 - 2017</h3>
                        <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Price: 400$ Daily</a><br></p>
                        <p><b>Exclusive Chauffered Vehicles Available</b><br>
                        for the exclusive use by our Client. <br>
                        The Cost includes: FUEL &amp; DRIVER within Kigali,<br>
                        not more than 10Hours daily.<br>
                        <b>Extra Hours are Invoiced at 30$/Hour</b>

                        </p>
                        <p><a href="<?=DN?>/register/transport/bmw-i700-2017"> Click here to book</a><br></p>
                    </article>
                    <article class="col shadow">
                        <figure><img src="img/toyota-land-cruiser-300-2017.png" alt="toyota-land-cruiser-300-2017"></figure><br>
                        <h3>Toyota land cruiser 300 - 2017</h3>
                        <p><a href="<?=DN?>/register/transport/toyota-land-cruiser-300-2017"> Price: 300$ Daily</a><br></p>
                        <p><b>Exclusive Chauffered Vehicles Available</b><br>
                        for the exclusive use by our Client. <br>
                        The Cost includes: FUEL &amp; DRIVER within Kigali,<br>
                        not more than 10Hours daily.<br>
                        <b>Extra Hours are Invoiced at 30$/Hour</b>
                        </p>
                        <p><a href="<?=DN?>/register/transport/toyota-land-cruiser-300-2017"> Click here to book</a></p>
                    </article>
                    <article class="col shadow">
                        <figure><img src="img/toyota-prado-2015.png" alt="toyota-prado-2015"></figure><br>
                        <h3>Toyota prado 2015</h3>
                        <p><a href="<?=DN?>/register/transport/toyota-prado-2015"> Price: 200$ Daily</a><br></p>
                        <p><b>Exclusive Chauffered Vehicles Available</b><br>
                        for the exclusive use by our Client. <br>
                        The Cost includes: FUEL &amp; DRIVER within Kigali,<br>
                        not more than 10Hours daily.<br>
                        <b>Extra Hours are Invoiced at 30$/Hour</b>

                        </p>
                        <p><a href="<?=DN?>/register/transport/toyota-prado-2015"> Click here to book</a><br></p>
                    </article>
                    <div class="clear"></div><br><br><br>
                    <article class="col shadow">
                        <figure><img src="img/mercedes-benz-m-series-2015.png" alt="mercedes-benz-m-series-2015"></figure><br>
                        <h3>Mercedes benz m-series 2015</h3>
                        <p><a href="<?=DN?>/register/transport/mercedes-benz-m-series-2015"> Price: 200$ Daily</a><br></p>
                        <p><b>Exclusive Chauffered Vehicles Available</b><br>
                        for the exclusive use by our Client. <br>
                        The Cost includes: FUEL &amp; DRIVER within Kigali,<br>
                        not more than 10Hours daily.<br>
                        <b>Extra Hours are Invoiced at 30$/Hour</b>

                        </p>
                        <p><a href="<?=DN?>/register/transport/mercedes-benz-m-series-2015"> Click here to book</a><br></p>
                    </article>
                    <article class="col shadow">
                        <figure><img src="img/toyota-rav-4.png" alt="toyota-rav-4"></figure><br>
                        <h3>Toyota RAV 4</h3>
                        <p><a href="<?=DN?>/register/transport/toyota-rav-4"> Price: 150$ Daily</a><br></p>
                        <p><b>Exclusive Chauffered Vehicles Available</b><br>
                        for the exclusive use by our Client. <br>
                        The Cost includes: FUEL &amp; DRIVER within Kigali,<br>
                        not more than 10Hours daily.<br>
                        <b>Extra Hours are Invoiced at 30$/Hour</b>
                        </p>
                        <p><a href="<?=DN?>/register/transport/toyota-rav-4"> Click here to book</a></p>
                    </article>
                    <article class="col shadow">
                        <figure><img src="img/toyota-hiace-12seater-van.png" alt="toyota-hiace-12seater-van"></figure><br>
                        <h3>Toyota Hiace 12seater Van</h3>
                        <p><a href="<?=DN?>/register/transport/toyota-hiace-12seater-van"> Price: 250$ Daily</a><br></p>
                        <p><b>Exclusive Chauffered Vehicles Available</b><br>
                        for the exclusive use by our Client. <br>
                        The Cost includes: FUEL &amp; DRIVER within Kigali,<br>
                        not more than 10Hours daily.<br>
                        <b>Extra Hours are Invoiced at 30$/Hour</b>

                        </p>
                        <p><a href="<?=DN?>/register/transport/toyota-hiace-12seater-van"> Click here to book</a><br></p>
                    </article>
                    <!-- <article class="col shadow">
                        <figure><img src="img/Green-02.jpg" alt="free-professional-html5-cv-resume-template"></figure><br>
                        <p>Various employee groups whom have their own internal funds also contribute a percentage of their fund.<br><br><br><br>

                        </p>
                    </article> -->
                </div>
                <div class="grid3">
                      <div class="text-">
                          <div class="col-xs-12 col-sm-12">
                            <br><br><br>
                            
                          </div>

                            
                          <p><strong>*Please be advised that the prices mentioned above are daily rates from 7am – 11pm.</strong></p>
                          <p>Please email the transport team at <?=TRANSPORT_EMAIL?> to reserve the car of your choice.</p>
                        <hr class="hr-book-layout" />
                        <p>
                        
                      </div>


                </div>

            </section>
        </div>
        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
    
</body>
</html>