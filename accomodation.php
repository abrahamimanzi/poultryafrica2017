<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;
?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
    <style>
        .fa-star{
            color: #cc0000!important;
/*            background:  #f78e20!important;*/
            font-size: 17px!important;
            padding: 1px;
        }
    </style>
<head>  
<?php include 'includes/head-common.php';?>
    <title>Accomodation - <?=EVENT?></title>   
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php'; ?>
  <a class="scroll-point" id="ideas"></a>

  <div class="sectiongrey">
      <section>
          <div class="separator"> 
              <div class="line"></div>
              <h2>ACCOMODATION</h2>
              <div class="line"></div>
          </div>
          <div class="grid2">

            <div class="container " style="width:100%; padding: 0px;">
                <div class="text-">
                    <!-- <h3 class="text-left text-gray"><strong>ACCOMODATION</strong></h3> -->
                    <p>Delegates will have access to preferential rates <strong>(breakfast inclusive)</strong> at partner hotels through this dedicated booking page till October 1st 2017. You are advised to book your accommodation upon receipt of your registration number once you have completed the registration process. This will allow you to use the promotional code given on your regsitration email. 

                    <!-- <a href="'.DN.'/accomodation" class="btn btn-platinum">Book Accomodation</a> -->
                    </p>
                  
                    <div class="container" style="width: 100%; padding: 0px;">
                    <div class="clearfix" style="margin: 2%;"></div> 
                      <h2 style="width:100%"><small><span class="lnr lnr-apartment"></span> HOTELS</small></h2>
                      <div class="panels">
                        <div class="row" style="margin-right: 2%">
                          
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <a href="https://www.radissonblu.com/en/hotel-kigali" target="_blank" title="Raddison Blu Hotel">
                                <img src="<?=DN?>/img/htl/blu.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                  <h3 class="text-default" style="margin: -10px; padding: 0">Radisson Blu Hotel</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>1 minute</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='radisson'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                      <!-- <a href="discover"class="btn btn-gold">Click here</a> -->
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <a href="http://www.serenahotels.com/serenakigali/default-en.html" target="_blank" title="Kigali Serena Hotel">
                                <img src="<?=DN?>/img/htl/serena.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Kigali Serena Hotel</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>15 minutes</strong> </small><br><hr class="hr-packs-gold"> 
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='serena'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <a href="http://www.marriott.com/hotels/travel/kglmc-kigali-marriott-hotel/" target="_blank" title="MARRIOT HOTEL KIGALI">
                                <img src="<?=DN?>/img/htl/marriot.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">MARRIOT HOTEL KIGALI</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>14 minutes</strong> </small><br><hr class="hr-packs-gold"> 
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='marriot'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <a href="https://www.millecollines.rw" target="_blank" title="Hotel Des Mille Collines">
                                <img src="<?=DN?>/img/htl/mille.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Hotel Des Mille Collines</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>14 minutes</strong> </small><br><hr class="hr-packs-gold"> 
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='collines'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div><hr class="clear"/>
                      </div>

                      <div class="clearfix" style="margin: 2%;"></div>

                      <div class="panels">
                        <div class="row" style="margin-right: 2%">
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.gorillashotels.com/?rubrique6" target="_blank" title="Gorillas Golf Hotel"> -->
                              <a href="<?=DN?>/register/accommodation/golf" target="_blank" title="Gorillas Golf Hotel">
                                <img src="<?=DN?>/img/htl/gorillas.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Gorillas Golf Hotel</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>5 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='golf'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.lemigohotel.com" target="_blank" title="Lemigo Hotel"> -->
                              <a href="<?=DN?>/register/accommodation/lemigo" target="_blank" title="Lemigo Hotel">
                                <img src="<?=DN?>/img/htl/lemigo.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                  <h3 class="text-default" style="margin: -10px; padding: 0">Lemigo Hotel</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>3 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='lemigo'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                      <!-- <a href="discover"class="btn btn-gold">Click here</a> -->
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://grandlegacy.rw" target="_blank" title="Grand Legacy Hotel"> -->
                              <a href="<?=DN?>/register/accommodation/legacy" target="_blank" title="Grand Legacy Hotel">
                                <img src="<?=DN?>/img/htl/grand.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Grand Legacy Hotel</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>7 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='legacy'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.ubumwegrandehotel.com" target="_blank" title="Ubumwe Grand Hotel"> -->
                              <a href="<?=DN?>/register/accommodation/ubumwe" target="_blank" title="Ubumwe Grand Hotel">
                                <img src="<?=DN?>/img/htl/ubumwe.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Ubumwe Grand Hotel</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>13 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='ubumwe'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div><hr class="clear"/>
                      </div>

                      <div class="clearfix" style="margin: 2%;"></div>

                      <div class="panels">
                        <div class="row" style="margin-right: 2%">
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.hotelvillaportofinokigali.com" target="_blank" title="Hotel Villa Portofino"> -->
                              <a href="<?=DN?>/register/accommodation/portofino" target="_blank" title="Hotel Villa Portofino">
                                <img src="<?=DN?>/img/htl/villa.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Hotel Villa Portofino</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>7 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='portofino'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>

                          <!-- <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/hillview" target="_blank" title="HILL VIEW APARTMENTS">
                                <img src="<?=DN?>/img/htl/hillview.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                  <h3 class="text-default" style="margin: -10px; padding: 0">HILL VIEW APARTMENTS</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>10 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='hillview'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div> -->

                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.legendhotel.co.rw/legendhotel/contact-2/" target="_blank" title="LEGEND HOTEL KIGALI"> -->
                              <a href="<?=DN?>/register/accommodation/legend" target="_blank" title="LEGEND HOTEL KIGALI">
                                <img src="<?=DN?>/img/htl/legend.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">LEGEND HOTEL KIGALI</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>7 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='legend'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.2000hotel.com" target="_blank" title="T2000 HOTEL KIGALI"> -->
                              <a href="<?=DN?>/register/accommodation/t2000" target="_blank" title="T2000 HOTEL KIGALI">
                                <img src="<?=DN?>/img/htl/t200.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                  <h3 class="text-default" style="margin: -10px; padding: 0">T2000 HOTEL KIGALI</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>7 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='t2000'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                      <!-- <a href="discover"class="btn btn-gold">Click here</a> -->
                                </div>
                              </a>
                            </div>
                          </div>

                          <!-- <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/elevate" target="_blank" title="ELEVATE SUITES KIGALI">
                                <img src="<?=DN?>/img/htl/elevatesuites.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                  <h3 class="text-default" style="margin: -10px; padding: 0">ELEVATE SUITES KIGALI</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>8 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='elevate'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div> -->

                        <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.themirrorwanda.com" target="_blank" title="THE MIRROR HOTEL"> -->
                              <a href="<?=DN?>/register/accommodation/mirror" target="_blank" title="THE MIRROR HOTEL">
                                <img src="<?=DN?>/img/htl/mirror.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">THE MIRROR HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>6 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='mirror'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div><hr class="clear"/>
                      </div>

                      <div class="clearfix" style="margin: 2%;"></div>

                      <div class="panels">
                        <div class="row" style="margin-right: 2%">
                          
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.themirrorwanda.com" target="_blank" title="Karisimbi Hotel"> -->
                              <a href="<?=DN?>/register/accommodation/karisimbi" target="_blank" title="Karisimbi Hotel">
                                <img src="<?=DN?>/img/htl/karisimbi.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Karisimbi Hotel</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>15 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='karisimbi'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.themirrorwanda.com" target="_blank" title="GALAXY HOTEL"> -->
                              <a href="<?=DN?>/register/accommodation/galaxy" target="_blank" title="GALAXY HOTEL">
                                <img src="<?=DN?>/img/htl/galaxy.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">GALAXY HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>15 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='galaxy'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.gorillashotels.com/?rubrique5" target="_blank" title="GORILLAS CITY CENTRE"> -->
                              <a href="<?=DN?>/register/accommodation/gorillas" target="_blank" title="GORILLAS CITY CENTRE">
                                <img src="<?=DN?>/img/htl/gorilla.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">GORILLAS CITY CENTRE</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>12 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='gorillas'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.hotelchezlando.com" target="_blank" title="CHEZ LANDO HOTEL"> -->
                              <a href="<?=DN?>/register/accommodation/lando" target="_blank" title="CHEZ LANDO HOTEL">
                                <img src="<?=DN?>/img/htl/chezlando.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                  <h3 class="text-default" style="margin: -10px; padding: 0">CHEZ LANDO HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>5 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='lando'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div><hr class="clear"/>
                      </div>

                      <div class="clearfix" style="margin: 2%;"></div>

                      <div class="panels">
                        <div class="row" style="margin-right: 2%">

                          <!-- <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/urban" target="_blank" title="Urban by City Blue Kigali">
                                <img src="<?=DN?>/img/htl/urban.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Urban by City Blue Kigali</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>14 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='urban'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div> -->

                          

                          <!-- <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/mirror" target="_blank" title="THE MIRROR HOTEL">
                                <img src="<?=DN?>/img/htl/mirror.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">THE MIRROR HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>6 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='mirror'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div> -->

                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://garrhotel.com" target="_blank" title="GARR HOTEL KIGALI"> -->
                              <a href="<?=DN?>/register/accommodation/garr" target="_blank" title="GARR HOTEL KIGALI">
                                <img src="<?=DN?>/img/htl/garr.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">GARR HOTEL KIGALI</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>8 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='garr'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="http://www.orient-park-hotel.com" target="_blank" title="Orient Park Hotel"> -->
                              <a href="<?=DN?>/register/accommodation/orient" target="_blank" title="Orient Park Hotel">
                                <img src="<?=DN?>/img/htl/parkin.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Orient Park Hotel</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>10 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='orient'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-hotel">
                              <!-- <a href="https://www.tripadvisor.co.uk/Hotel_Review-g293829-d8387529-Reviews-Hotel_Hilltop_Country_Club-Kigali_Kigali_Province.html" target="_blank" title="HILL TOP HOTEL"> -->
                              <a href="<?=DN?>/register/accommodation/hilltop" target="_blank" title="HILL TOP HOTEL">
                                <img src="<?=DN?>/img/htl/hilltop.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">HILL TOP HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>10 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='hilltop'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>

                          <!-- <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/beausejour" target="_blank" title="BEAUSEJOUR HOTEL">
                                <img src="<?=DN?>/img/htl/beausejour.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">BEAUSEJOUR HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>5 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='beausejour'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div> -->

                        
                        </div>
                        <!-- <hr class="clear"/> -->
                      </div>



                      <!-- <div class="clearfix" style="margin: 2%;"></div>

                      <div class="panels">
                        <div class="row" style="margin-right: 2%">
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/garr" target="_blank" title="GARR HOTEL KIGALI">
                                <img src="<?=DN?>/img/htl/garr.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">GARR HOTEL KIGALI</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>8 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='garr'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/manor" target="_blank" title="THE MANOR HOTEL">
                                <img src="<?=DN?>/img/htl/manor.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;"s>
                                    <h3 class="text-default" style="margin: -10px; padding: 0">THE MANOR HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>8 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='manor'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="#" target="_blank" title="ACCORD HOTEL">
                                <img src="<?=DN?>/img/htl/accord.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">ACCORD HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>3 minutes</strong> </small><br>
                                  <small class="small">Starting from: <strong>109 USD</strong> </small><br>
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/diplomat" target="_blank" title="DIPLOMAT HOTEL KIGALI">
                                <img src="<?=DN?>/img/htl/diplomat.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                  <h3 class="text-default" style="margin: -10px; padding: 0">DIPLOMAT HOTEL KIGALI</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>4 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='diplomat'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/cityblue" target="_blank" title="CITY BLUE HOTEL">
                                <img src="<?=DN?>/img/htl/cityblue.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">CITY BLUE HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>3 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='cityblue'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div><hr class="clear"/>
                      </div>


                      <div class="clearfix" style="margin: 2%;"></div> -->



                      <!-- <div class="panels">
                        <div class="row" style="margin-right: 2%">
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/parkinn" target="_blank" title="Park Inn by Radisson">
                                <img src="<?=DN?>/img/htl/parkin1.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Park Inn by Radisson</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>10 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='parkinn'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div> 
                           <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/orient" target="_blank" title="Orient Park Hotel">
                                <img src="<?=DN?>/img/htl/parkin.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">Orient Park Hotel</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>10 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='orient'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/ninzi" target="_blank" title="NINZI HILL HOTEL">
                                <img src="<?=DN?>/img/htl/ninzihill.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">NINZI HILL HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>2 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='ninzi'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
                            <div class="panel panel-gold text-center bg-panel">
                              <a href="<?=DN?>/register/accommodation/hilltop" target="_blank" title="HILL TOP HOTEL">
                                <img src="<?=DN?>/img/htl/hilltop.jpg" class="img img-respnsive" style="width: 100%">
                                <div class="panel-body" style="padding: 10px 5px;">
                                    <h3 class="text-default" style="margin: -10px; padding: 0">HILL TOP HOTEL</h3><br>
                                  <hr class="hr-packs-plat"> 
                                  <small class="small">Distance to the venue: <strong>10 minutes</strong> </small><br><hr class="hr-packs-gold">
                                  <small class="small">
                                      <ul class="htl">
                                          <?php $names='hilltop'; include'views/plist.php'; ?>
                                      </ul>
                                  </small><hr class="hr-packs-gold"> 
                                  <small class="small">Rating: <i class="fa fa-star"></i></span><i class="fa fa-star"></i></span> </small><br>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div><hr class="clear"/>
                      </div> -->



                  </div>
                  <!-- <hr class="hr-book-layout" /> -->
                  
                </div>
            </div>


          </div>
      </section>
          
    <?php include 'views/footer-common.php';?>
    
</body>
</html>