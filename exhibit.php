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
    <title>Register - Transform Africa Summit 2017</title>	 
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
                      <h2 class="title text-center text-uppercase">EXHIBITION PACKAGES
                       <span class="lnr lnr-chevron-right"></span> 
                     </h2><hr class="hr-clear">
                    <p>Showcase your brand to over 4,000 visitors at the Transform Africa Summit and network with industry players transforming the ICT sector in Africa and across the globe.</p>
                   <hr class="hr-book-layout">
                  </div>
                  <!--    LEFT-->
                  <div class="col-sm-6">
                      <h4 class="text-left text-uppercase text-default"><strong>EXHIBITION DETAILS</strong></h4>
                      <hr class="hr-book-layout" />
                      <p style="line-height: 1.6">Transform Africa Summit is the premier global conference on shaping Africa’s digital transformation agenda.<br><br>The Transform Africa Smart Cities Exhibition 2017 is a unique opportunity to meet international experts and decision makers in the ICT and Telecommunication industries, enhance your company profile on the national, regional and international stage. The exhibition is also a launching pad for your new products and an opportunity to customer contact and seek business prospects.
                        <br><br>The highly interactive exhibtion will showcase cutting-edge technologies, real-world solutions and proven strategies government leaders need to build more livable, workable, sustainable cities.<br><br>It will feature different zones categorized by the pillars surrounding Smart Cities as well as a zone for those providing enabling services. The layout is designed to encourage visitors to visit all areas maximizing interaction &amp; visibility for exhibitors.<br><br>The exhibition will run from <strong>9am, Wednesday 10th May to 2pm, Friday 12th May 2017</strong>  and will be held in the Kigali Convention Center providing easy access to all summit participants.</p>
                      <br />
                    <p class="note"><span class="lnr lnr-paperclip"></span> For more information email exhibition@smartafrica.com</p>
                  </div>
                  <!--    RIGHT-->
                  <div class="col-sm-6 border-left">
                    <h4 class="text-left text-uppercase text-default"><strong>Exhibit at the Summit</strong></h4>
                    <hr class="hr-book-layout" />
                    <div class="panel panel-platinum">
                      <div class="panel-body"><br>
                        <h4 class="text-left text-platinum h4-packs text-uppercase">Single 9 square meter Booth</h4>
                        <hr class="hr-packs-plat">
                        <p class="text-platinum"> This booth in the unique Smart City Exhibition is a 3m x 3m space creating a blank canvas for your company exhibition. </p><br>
                        <h4 class="text-left text-platinum h4-packs text-uppercase"><strong>Double 18 square meter Booth</strong></h4>
                        <hr class="hr-packs-plat">
                        <p class="text-platinum">
							Display your company’s ambition &amp; culture with a customisable space. This space is ideal for demos, meetings rooms, informal social spaces and more.</p>
                        <hr>
						  <a href="<?=DN?>/register/exhibitor" class="btn-platinum pull-left"><span class="lnr lnr-chevron-right"></span>Download full pack</a>
<!--                        <a href="<?=DN?>/register/exhibitor"  class="btn-platinum pull-right"><span class="lnr lnr-chevron-right"></span>Click here</a>-->
						  <a class="btn btn-platinum pull-right" href="mailto:exhibition@smartafrica.com?subject=Exhibition&nbsp;Opportunity"><span class="lnr lnr-chevron-right"></span> Click here to apply</a>
                      </div>
                    </div>
                    <h3 class="title text-left text-default"><strong>SMART CITIES</strong> EXHIBITION LAYOUT</h3>
                    <img class="img img-responsive" src="img/layout.jpg" />
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

<!--
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <?php include 'views/register/new-delegate.php';?>
                </div>
                <div class="col-sm-2"></div>
            </div>
-->
        </section>
        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
</body>
</html>