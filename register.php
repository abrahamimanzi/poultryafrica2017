<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;

if(isset($_POST['register_submited'])){
    $prfx = 'register-';
    $get_str = "?webToken=1&request=register-new";
    foreach($_POST as $index=>$val){
        $ar = explode($prfx,$index);
        if(count($ar)){
            $_EDIT[end($ar)] = $val;
            if(!empty($ar[1])){
                $get_str .= '&participant-'.@$ar[1].'='.urlencode($val);
            }
        }
    }
//    echo $get_str;
    header("LOCATION: ".DNADMIN."/testapi.php".$get_str);
    exit();
  }
?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
<?php include 'includes/head-common.php';?>
    <title>Register - <?=EVENT?></title>
    <link rel="stylesheet" href="<?=DN?>/intlTelInput/build/css/intlTelInput.css">
    <script src="<?=DN?>/intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php';?>
  <a class="scroll-point" id="ideas"></a>

  <div class="sectiongrey">
      <section>
          <div class="separator"> 
              <div class="line"></div>
              <h2>Register</h2>
              <div class="line"></div>
          </div>
          <div class="grid3">
              <article class="col shadow">
                  <!-- <figure><img src="img/Green-03.jpg" alt="free-admin-template-psd"></figure><br> -->
                  <h3>WPSA conference</h3>
                  <p><b>USD 55</b><br>
                  - WPSA conference<br>
                  – Entrance to the Expo & Technical Seminars <br>

                  Dates: October 3 & 4<br>
                  <span style=" visibility: hidden;">Dates: October 3 & 4</span><br>
                  <span style=" visibility: hidden;">Dates: October 3 & 4</span><br>

                  </p>
                  <p><a href="<?=DN?>/register/silver"> Click here to register</a><br></p>
              </article>
              <article class="col shadow">
                  <!-- <figure><img src="img/Green-01.jpg" alt="free-html5-responsive-template"></figure><br> -->
                  <h3>Delegate</h3>
                  <p><b>USD 99</b><br>
                    - Entrance to Leadership Conference<br>
                    – Coffee breaks, lunches and Network Cocktail on October 4<br>
                    – Entrance to the Expo & Technical Seminars<br>
                    Dates: October 4 & 5
                  </p>
                  <p><a href="<?=DN?>/register/gold"> Click here to register</a></p>
              </article>
              <article class="col shadow">
                  <!-- <figure><img src="img/Green-03.jpg" alt="free-admin-template-psd"></figure><br> -->
                  <h3>Visitor</h3>
                  <p><b>Free admission</b><br>
                  – Entrance to the Expo & Technical Seminars <br>
                  Dates: October 4 & 5<br>
                  <span style=" visibility: hidden;">Dates: October 4 & 5</span><br>
                  <span style=" visibility: hidden;">Dates: October 4 & 5</span><br>
                  <span style=" visibility: hidden;">Dates: October 4 & 5</span><br>

                  </p>
                  <p><a href="<?=DN?>/register/visitor"> Click here to register</a><br></p>
              </article>
              <!-- <article class="col shadow">
                  <figure><img src="img/Green-02.jpg" alt="free-professional-html5-cv-resume-template"></figure><br>
                  <p>Various employee groups whom have their own internal funds also contribute a percentage of their fund.<br><br><br><br>

                  </p>
              </article> -->
          </div>
          <div class="clear"></div><br><br><br>
          <div class="clear"></div>
          <div class="grid3">
              <!-- <p>
                  Saving for our future generations has been made easy. The Rwanda Revenue Authority is committed to supporting the fund and has subsequently declared all contributions tax exempt & tax deductible.
              </p>
              <p>
                  You can contribute to the Agaciro Development Fund as a corporate or as an individual by committing either a certain percentage of the company’s turnover or a percentage of your salary.
              </p>
              <p>
                  Various employee groups whom have their own internal funds also contribute a percentage of their fund.
              </p> -->
              <!-- <p>
                  To find out more about how to contribute, email us on info@agaciro.rw and our team will meet with and assist you.
              </p>
              <p>
                  Click here to download our bank details (we need to put the bank details on their current website on a PDF file)
              </p>
              <p>
                  You can also Users of Rwanda mobile networks (MTN, Airtel and TIGO) can contribute to Agaciro Development Fund via SMS or USSD. To make your contribution, send Agaciro to 2020 or dial *202# and follow the steps.
              </p>
              <p>
                  Are you in Rwanda or elsewhere in the world and would like to contribute to Agaciro Development Fund? Click on Contribute online, use your MasterCard or VISA Credit Card and follow the steps.

              </p> -->
          </div>
          <div class="clear"></div>

      </section>
  </div>

  <a class="scroll-point" id="contact"></a>
  <div class="clear"></div>




  <?php /* ?>
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

                      <div class="row">
                        <div class="col-sm-12">
              <div class="container">
                <!-- <hr class="hr-clear" style="margin-right: 30px;" /> -->
                <!-- <h3 class="title text-left text-default">Other Participants</h3> -->
              </div>
              <div class="col-sm-12 col-md-12">
                <div class="thumbnail tile tile-medium tile-teal pointer">
                <a href="<?=DN?>/register-pass" >
                  <h4 class="text-left text-white h4-packs text-uppercase"> Delegate Pass Registration<br> 
                    <small>Private sector, Consultants, Analysts, Academia, Civil Society, Non governmental organisations (NGO), Development partners</small></h4>
                  <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                </a>
                </div>
                <div class="thumbnail tile tile-medium tile-teal pointer">
                <a href="<?=DN?>/register/government" >
                  <h4 class="text-left text-white h4-packs text-uppercase"> Government &amp; Diplomatic Officials registration</h4>
                  <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                </a>
                </div>
                <div class="thumbnail tile tile-medium tile-teal pointer">
                <a href="<?=DN?>/register/media" >
                  <h4 class="text-left text-white h4-packs text-uppercase"> Media Registration </h4>
                  <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                </a>
                </div>
                <div class="thumbnail tile tile-medium tile-teal pointer">
                <a href="<?=DN?>/register/visitor">
                  <h4 class="text-left text-white h4-packs text-uppercase"> Students &amp; incubation hub tenant passes</h4>
                  <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                </a>
                </div>
                <div class="thumbnail tile tile-medium tile-teal pointer" style="background:#89b3ab;">
                  <a href="<?=DN?>/register/group">
                    <h4 class="text-left text-white h4-packs text-uppercase"> Group booking<br>
                    <small>Click here if you're booking for more than one person.</small>
                    </h4>
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
              </div>
              <!-- <div class="col-md-4"> -->

              <!-- <div class="col-md-12">
                <div class="panel panel-default panel-platinum1">
                  <div class="panel-body">
                  <h4 class="text-left text-default1 h4-packs text-uppercase">Government Officials</h4>
                  <hr class="hr-packs-gold">
                  <p class="text-default">Government officials should use normal diplomatic channels to register </p>
                      <a class="btn-gold pull-right" href="#" style="width: 0; background: transparent; border: 0 none;">&nbsp;</a>
                  <div class="clearfix"></div><br>
                  </div>
                </div>
              </div> -->


              <!-- <div class="col-md-12">
                <div class="panel panel-default panel-platinum1">
                  <div class="panel-body">
                  <h4 class="text-left text-default1 h4-packs text-uppercase">Media</h4>
                  <hr class="hr-packs-gold">
                  <p class="text-default">If you are a member of the media and would like to attend the summit</p><br>
                  <div class="clearfix"></div>
                  <a class="btn-gold pull-right" href="<?=DN?>/register/media"><span class="lnr lnr-chevron-right"></span>Register</a>
                  </div>
                </div>
              </div> -->


              <!-- <div class="col-md-12">
                <div class="panel panel-platinum1">
                  <div class="panel-body">
                  <h4 class="text-left text-default1 h4-packs text-uppercase">Visitors Exhibition Pass</h4>
                  <hr class="hr-packs-gold">
                  <p class="text-default">This free pass allows you access to the Smart Africa Exhibition only</p><br>
                  <div class="clearfix"></div>
                  <a class="btn-gold pull-right" href="<?=DN?>/register/visitor"><span class="lnr lnr-chevron-right"></span>Register</a>
                  </div>
                </div>
              </div> -->

              <!-- </div> -->
                          <hr>
                        </div>

                        <!-- <hr>
                        <div class="col-sm-6">
                          <p class="text-uppercase"><strong><span class="lnr lnr-arrow-right"></span> To apply as speaker</strong> <a href="<?=DN?>/register/speaker" class="btn-link"><span class="lnr lnr-chevron-right"></span> Click here</a></p>
                        </div> -->

                      </div>
                    </div>
                  </div>
                  <!--    LEFT-->
                  <div class="col-sm-12">

                    <!-- <hr class="hr-clear" />
                    <h3 class="title text-left text-default">Other Participants</h3>
                      <div class="clearfix"></div> -->


                      <!-- <div class="row" style="padding: 0; margin: 0;">
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
                      </div> -->

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
                        <li>Registration closes: &nbsp;&nbsp;&nbsp; 25 April 2017</li>
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
                  <h4 class="title text-left text-uppercase" style="font-family:'Gotham Medium', sans-serif; ">Gala Dinner Supplementary Tickets</h4>
                  <p>Gold or Platinum delegates, Exhibitors &amp; Sponsors can purchase supplementary gala dinner tickets at $200 | RWF 170,000 once registration is complete. Instructions on how to do so will be emailed once registration is complete and attendance is confirmed.</p>
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
    <?php */ ?>
    <?php include 'views/footer-common.php';?>
</body>
</html>