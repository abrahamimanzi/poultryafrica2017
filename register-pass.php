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
    <title>Register - Transform Africa Summit 2017</title>
    <link rel="stylesheet" href="<?=DN?>/intlTelInput/build/css/intlTelInput.css">
    <script src="<?=DN?>/intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php'?>
  <div id="wrapper" class="home">
        <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" src="<?=DN?>/img/register.jpg" style="width:100%"/>
          </div>
        </div>
        <section class="section-main bg-f0">
          <div class="container-fluid">
            <div class="container">
              <?php 
                   if (!isset($_GET['categ']) || empty($_GET['categ'])) {
                 ?>
                <div class="register_layout" id="other" >
                  <div class="text-center">   
                      <h2 class="title text-center text-uppercase">Get the pass that suits you</h2>
                  </div>
                  <!--    RIGHT-->
                  <div class="col-sm-12">
                    <p class="text-center text-default">Join over 4,000 visitors at the Transform Africa Summit and network with like minded industry players transforming the ICT sector in Africa. Engage with innovators, pioneers &amp; leaders from both the public &amp; private sector not only from Africa, but across the globe.</p>
                    <hr class="hr-book-layout" />
                    <div class="row">
                      <div class="col-md-4">
                        <div class="panel panel-silver">
                          <div class="panel-body">
                            <h4 class="text-left text-default1 h4-packs text-uppercase">Silver Package</h4>
                            <hr class="hr-packs-gold">
                            <p class="text-gold">Early Bird <strong>$150 | RWF 125,000</strong><br> 
<!--                                (valid till 25 April 2017)-->
                                 <strong>Early bird rates maintained!</strong>
<!--                            Normal Rate <strong>$200 | RWF 170,000</strong>-->
                              </p>
                            <div class="clearfix"></div>
                            <span class="text-default"><strong>Gives access to:</strong></span><hr class="hr-packs-gold" />
                            <ul class="text-gold">
                              <li>Smart Africa Exhibition</li>
                              <li>Smart Africa Conference</li>
                              <li>Smart Africa Leaders Summit Plenary</li>
                              <li>Smart Invest Program</li><br>
                              <br>
                            </ul>
                            <a href="<?=DN?>/register/silver" class="btn-gold pull-right"><span class="lnr lnr-chevron-right"></span>Register</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="panel panel-gold1">
                          <div class="panel-body">
                            <h4 class="text-left text-default1 h4-packs text-uppercase">Gold Package</h4>
                            <hr class="hr-packs-gold">
                            <p class="text-default">Early Bird <strong>$350 | RWF 290,000</strong> <br>
<!--                                (valid till 25 April 2017)<br>-->
                                <strong>Early bird rates maintained!</strong>
<!--                                <strong>$500 | RWF 425,000</strong>-->
                              </p>
                            <div class="clearfix"></div>
                            <span class="text-default"><strong>Gives access to:</strong></span><hr class="hr-packs-gold" />
                            <ul class="text-default">
                              <li>Smart Africa Exhibition</li>
                              <li>Smart Africa Conference</li>
                              <li>Smart Africa Leaders Summit Plenary</li>
                              <li>Smart Invest Program</li>
                              <li>Smart Africa Gala Dinner</li><br>
                            </ul>
                            <a class="btn-gold pull-right" href="<?=DN?>/register/gold"><span class="lnr lnr-chevron-right"></span>Register</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="panel panel-platinum1">
                          <div class="panel-body">
                            <h4 class="text-left text-default1 h4-packs text-uppercase">Platinum Package</h4>
                            <hr class="hr-packs-gold">
                            <p class="text-gold">Rate <strong>$750 | RWF 635,000</strong><br><br>
                              </p>
                            <div class="clearfix"></div>
                            <span class="text-default"><strong>Gives access to:</strong></span><hr class="hr-packs-gold" />
                            <ul class="text-gold">
                              <li>Unlimited Access to the Smart Networking Hub</li>
                              <li>Smart Africa Exhibition</li>
                              <li>Smart Africa Conference</li>
                              <li>Smart Africa Leaders Summit Plenary</li>
                              <li>Smart Invest Program</li>
                              <li>Smart Africa Gala Dinner</li>
                            </ul>
                            <a href="<?=DN?>/register/platinum" class="btn-gold pull-right"><span class="lnr lnr-chevron-right"></span>Register</a>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <!--    LEFT-->
                  <div class="col-sm-12">
<!--
                    <hr class="hr-clear" />
                    <h3 class="title text-left text-default">Other Participants</h3>
                      <div class="clearfix"></div>
-->
<!--
                      <div class="row" style="padding: 0; margin: 0;">
                        <div class="col-sm-3 notes">
                          <span>Government Officials:</span>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-left text-default" style="padding: 10px 0;">Government officials should use normal diplomatic channels to register for the summit.</p>
                        </div>
                      </div>
                      <div class="row" style="padding: 0; margin: 0;">
                        <div class="col-sm-3 notes">
                          <span>Media:&nbsp;</span>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-left text-default" style="padding: 10px 0;">If you are a member of the media and would like to attend the summit, <strong><a href="<?=DN?>/register/media">Click here to apply</a></strong></p>
                        </div>
                      </div>
-->
                      <div class="row" style="padding: 0; margin: 0;">
<!--
                        <div class="col-sm-3 notes">
                          <span>Visitors Exhibition Pass:</span>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-left text-default" style="padding: 10px 0;"> This free pass allows you access to the Smart Africa Exhibition only. <strong><a href="<?=DN?>/register/visitor">Click here to apply</a></strong></p>
                        </div><div class="clearfix"></div><br>
-->
<!--                        <p class=""><span><strong>Free exhibition passes are available to specific segments</strong> including students, academics, ICT related incubation hub tenants amongst others. Passes are given at the organisers discretion and are dependent on availability.</span></p>-->
                      </div>
                      <br />
                    <div class="container">
                        <div class="row">
                        <h4 class="title text-left text-uppercase" style="font-family:'Gotham Medium', sans-serif; ">
                        Registration &amp; Accreditation Deadline
                        </h4>
                        </div>
                      <hr class="hr-book-layout" style="margin-left: -15px; margin-right: 45px;" />
                    <div class="col-sm-6">
                      <h3 class="title text-left text-default">Local Delegates</h3>
                      <div class="clearfix"></div>
                      <ul>
                        <li>Registration opens: &nbsp;&nbsp;&nbsp; 10 October 2016</li>
                        <li>Registration closes: &nbsp;&nbsp;&nbsp; 30 April 2017</li>
                        <li>Accreditation opens: &nbsp; 23 April 2017</li>
                        <li>Accreditation closes: &nbsp; 4 May 2017</li>
                      </ul>
                      <br />
                    </div>
                    <div class="col-sm-6">
                      <h3 class="title text-left text-default">International Delegates</h3>
                      <div class="clearfix"></div>
                      <ul>
                        <li>Registration opens: &nbsp;&nbsp;&nbsp; 10 October 2016</li>
                        <li>Registration closes: &nbsp;&nbsp;&nbsp; 30 April 2017</li>
                        <li>Accreditation opens: &nbsp; 24 April 2017</li>
                        <li>Accreditation closes: &nbsp; 12 May 2017</li>
                      </ul>
                      <br />
                    </div>
                    </div>
                  </div>
                <div class="container">
                  <h4 class="text">Gala Dinner Supplementary Tickets</h4>
                  <p>Only registered Gold or Platinum delegates, Exhibitors &amp; Sponsors can purchase supplementary gala dinner tickets at $200 | RWF 170,000 once registration is complete.</p>
                </div>
                </div>
                <p class="note" style="margin: 0 15px;"><span class="lnr lnr-paperclip"></span> You will be notified by <strong>email</strong> where to collect your badge when accreditation opens</p>
                <?php  }?>
                
                <!--  SILVER PACK-->
                <?php 
                   if (isset($_GET['categ']) && !empty($_GET['categ'])) {
                       
                               $categ = $_GET['categ'];
                       switch($_GET['categ']){
                           case 'silver':
                               $unit_price = '200';
                               break;
                           case 'gold':
                               $unit_price = '500';
                               break;
                           case 'platinum':
                               $unit_price = '750';
                               break;
                       }
                 ?>
                <div class="register_layout" id="<?=$categ?>">
                  <a class="a-link pull-right" href="./register"><span class="lnr lnr-chevron-left"></span> Go Back</a>
                  <div class="text-center">   
                      <h2 class="title text-center text-uppercase">Registration Process
                       <span class="lnr lnr-chevron-right"></span> 
                       <span class="light"><small>Your chosen pack</small></span>
                     </h2>
                   <hr class="hr-clear">
                  </div>
                  <div class="col-sm-12">
                    <h3 class="title text-left text-success">Your booking Details</h3>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Choosen Package</th>
                          <th>Cost</th>
                          <th>No. of Tickets</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="text-transform: uppercase"> <?=$categ?></td>
                          <td>$ <?=$unit_price?></td>
                          <td>
                                <select name='tickets' type="text" id='number2' >
                                  <?php
                                    for ($x=1; $x<=12; $x++) {
                                          if($x==$_POST['tickets']){
                                            $selected = "selected";
                                              }else{
                                              $selected = "";
                                            }
                                      echo '<option value="' . $x . '"'.$selected .'>' . $x . '</option>' . PHP_EOL;
                                      }
                                      $tickets = (int)$_POST['tickets'];
                                    ?>
                              </select>
                          </td>
                         <td style="width: 100px"><span id="number3">$ <?=$unit_price?></span></td>
                        </tr>
                      </tbody>
                    </table>
                      
                        <script>
                              $("#number2").change(function(){
                                  var number_1 = <?=$unit_price?>;
                                  var number_2 = $("#number2").val();
                                  $("#tickets").val(number_2);
                                  var number_3 = number_2 * number_1;
                                  $('#number3').text('$ '+number_3);
                              });
                          </script>
                  </div>
                </div>
                <div class="clearfix"></div>
                <br>
                <br>
                  <form action="registration" method="get">
                      <input type="hidden" name="categ" value="<?=$categ?>">
                      <input type="hidden" name="tickets" id="tickets"  value="1">
                      <button type="submit" class="btn-gold pull-right">Continue to Registeration</button>
                  </form>
                <?php }?>
            </div>
          </div>
          <?php if($error !== false){?>
            <br>
            <div class="text-center" style="color: red">
                <?php echo $error;?>
            </div>
            <br>
            <?php }?>
            <?php if($success !== false){?>
            <br>
            <div class="text-center" style="color: green">
                <?php echo $success;?><br>
            </div>
            <br>
            <?php }?>

        </section>
        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
</body>
</html>