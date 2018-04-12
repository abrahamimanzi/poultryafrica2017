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
    header("LOCATION: http://localhost/PMS/testapi.php".$get_str);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>
<?php include 'includes/head-common.php';?>
    <title>Participate - Transform Africa Summit 2017</title>
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php'?>
	<div id="wrapper" class="home">
        <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" src="<?=DN?>/img/header-1.jpg" style="width:100%"/>
          </div>
        </div>
        <section class="section-main">
          <div class="home-section-text" style="padding: 10px 0;">
              <img class="img img-responsive" src="<?=DN?>/img/holder.jpg" style="width:100%"/>
          </div>
          <div class="container-fluid bg">
            <div class="container white-bg">
              <?php
                   if (!isset($_GET['categ']) || empty($_GET['categ'])) {
                 ?>
                <div class="register_layout" id="other" >
                  <div class="text-center">
                      <h2 class="text-center text-uppercase"><strong>Align your brand with Africa's Digital Transformation</strong>
                       <span class="lnr lnr-chevron-right"></span>
                     </h2><hr class="hr-clear"><br>
<!--
                    <p>Showcase your brand to over 4,000 visitors at the Transform Africa Summit and network with industry players transforming the ICT sector in Africa and across the globe.</p>
                   <hr class="hr-book-layout">
-->
                  </div>
                  <!--    LEFT-->
                  <div class="col-sm-6">
<!--
                      <h4 class="text-left text-uppercase text-default"><strong>EXHIBITION DETAILS</strong></h4>
                      <hr class="hr-book-layout" />
                      <p style="line-height: 1.6">Transform Africa Summit is the premier global conference on shaping Africa’s digital transformation agenda.<br><br>The Transform Africa Smart Cities Exhibition 2017 is a unique opportunity to meet international experts and decision makers in the ICT and Telecommunication industries, enhance your company profile on the national, regional and international stage. The exhibition is also a launching pad for your new products and an opportunity to customer contact and seek business prospects.
                        <br><br>The highly interactive exhibtion will showcase cutting-edge technologies, real-world solutions and proven strategies government leaders need to build more livable, workable, sustainable cities.<br><br>It will feature different zones categorized by the pillars surrounding Smart Cities as well as a zone for those providing enabling services. The layout is designed to encourage visitors to visit all areas maximizing interaction &amp; visibility for exhibitors.<br><br>The exhibition will run from <strong>9am, Wednesday 10th May to 2pm, Friday 12th May 2017</strong>  and will be held in the Kigali Convention Center providing easy access to all summit participants.</p>
                      <br />
                    <p class="note"><span class="lnr lnr-paperclip"></span> You will be notified by email where to collect your badge when accreditation opens</p>
-->
					  <div class="row">
						  <div class="col-sm-12 col-md-12">
                              <img class="img img-responsive" src="<?=DN?>/img/part2.jpg" style="width:100%"/>
<!--
							<div class="thumbnail tile tile-medium tile-teal">
							<a href="<?=DN?>/register-pass" >
								<h4 class="text-left text-white h4-packs text-uppercase"> Heads of State &amp; Government from the Smart Africa Member States<br>
									<small>Private sector, Consultants, Analysts, Academia, Civil Society </small>
								</h4>
							</a>
							</div>
							<div class="thumbnail tile tile-medium tile-teal">
							<a href="<?=DN?>/register/government" >
								<h4 class="text-left text-white h4-packs text-uppercase"> Over 4,000 Delegates</h4>
							</a>
							</div>
							<div class="thumbnail tile tile-medium tile-teal">
							<a href="<?=DN?>/register/media" >
								<h4 class="text-left text-white h4-packs text-uppercase"> Over 300 Mayors </h4>
							</a>
							</div>
							<div class="thumbnail tile tile-medium tile-teal">
							<a href="<?=DN?>/register/visitor" >
								<h4 class="text-left text-white h4-packs text-uppercase"> 20 Smart Africa Flagship Projects unveiled</h4>
							</a>
							</div>
-->
							<hr>
                          <h3 class="text-left text-platinum">Sponsorship Opportunities <a class="btn btn-success pull-right" href="mailto:sponsorship@smartafrica.com?subject=Sponsorship&nbsp;Opportunity">Apply here to sponsor</a></h3>
                              <div class="clearfix"></div><hr>
                          <h3 class="text-left text-platinum">Exhibition Opportunities <a class="btn btn-success pull-right" href="<?=DN?>/exhibit">For more information </a></h3><hr>
						</div>
					</div>
                  </div>
                  <!--    RIGHT-->
                  <div class="col-sm-6 border-left">
<!--
                    <h4 class="text-left text-uppercase text-default"><strong>Exhibit at the Summit</strong></h4>
                    <hr class="hr-book-layout" />
                    <div class="panel panel-platinum">
                      <div class="panel-body">
                        <h4 class="text-left text-platinum h4-packs text-uppercase">Standard package</h4>
                        <hr class="hr-packs-plat">
                        <p class="text-platinum">3m x 3m shell scheme <br> Multiple booths can be booked.</p>
                        <h4 class="text-left text-platinum h4-packs text-uppercase">Premium package</h4>
                        <hr class="hr-packs-plat">
                        <p class="text-platinum">6m x 3m space for custom built stands <br>
														This space is provided without a shell scheme stand allowing the exhibitor to build their own customized stand.</p>
                        <hr>
                        <a href="<?=DN?>/register/exhibitor" class="btn-platinum pull-right"><span class="lnr lnr-chevron-right"></span>Click here</a>
                      </div>
                    </div>
                    <h3 class="title text-left text-default"><strong>SMART CITIES</strong> EXHIBITION LAYOUT</h3>
                    <img class="img img-responsive" src="img/layout.jpg" />
-->
        					  <div class="container-fluid">
        						  <div class="pull-left">
            							<div class="col-md-12">
            								<h3 class="text-left text-default"><strong>WHO WILL ATTEND</strong></h3>
            								 <ul class="text-default" style="padding-left: 15px;">
            									 <div style="clear: both; "></div>
            								   <li>Heads of State &amp; Government</li>
            								   <li>First Ladies</li>
            								   <li>Ministers and Government officials in ICT &amp; related sectors such as digital economy, infrastructure, finance, health, education, and energy</li>
            								   <li>Over 300 Mayors of African cities</li>
            								   <li>Telecom and Utilities Regulators</li>
            								   <li>Heads of International and Regional Organizations</li>
            								   <li>ICT Industry leaders, innovators and investors</li>
            								   <li>Young innovators, Girls and Women in STEM</li>
            								   <li>Small and medium businesses (SMEs), entrepreneurs and innovators seeking business opportunities</li>
            								   <li>Exhibitors from nations, companies and organizations around the world within the ICT Ecosystem</li>
            								   <li>Non-governmental organizations</li>
            								   <li>Academics, consultants, thought leaders and digital thinkers</li>
            								 </ul>
            							 </div>
        						   </div>

        						   <div class="pull-right">
            							 <div class="col-md-12">
            							   <h3 class="text-left text-default"><strong>WHY YOU SHOULD ATTEND</strong></h3>
            							   <hr class="hr-book-layout1" />
            							   <ul class="text-default" style="padding-left: 15px;">
            								   <div style="clear: both;"></div>
            								   <li>Be part of Africa’s leading forum on digital transformation in Africa.</li>
            								   <li>Support the Women and Girls in STEM through participation &amp; contribution towards the SMART Girls initiative.</li>
            								   <li>Broaden your reach and deepen your impact through collaborations with youth in Africa shaping the digital landscape.</li>
            								   <li>Participate in the new exciting SMART TALK session where a global business influencer will engage with delegates on issues shaping our world with a view to explore extraordinary ideas &amp; inspire powerful action.</li>
            								   <li>Get insight into country specific SMART AFRICA flagship projects in the Member States through the SMART INVEST PROGRAM at the Summit. Interact and network with key decision makers and deal makers.</li>
            								 </ul>
            								<div style="clear: both;"></div><hr>
            		<!--
            								<div class="information-comments">
            									<strong><a href="http://twitter.com/tasummit" target="_blank">Twitter</a> :</strong>@TASummit #TAS2017
            								</div>
            		-->
            							 </div>
        						   </div>
        						</div>
                  </div>
                </div>

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
            <div class="container">
                <div class="text-center"><br>
                </div>
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

            <!-- <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <?php include 'views/register/new-delegate.php';?>
                </div>
                <div class="col-sm-2"></div>
            </div> -->
        </section>
        <?php include 'views/social.php';?>
    </div><!--wrapper-->
    <?php include 'views/footer-common.php';?>
</body>
</html>
