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
    <title>Frequently asked Questions - Transform Africa Summit 2016</title>	 
    
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
                      <h2 class="title text-center text-uppercase">Frequently Asked Questions
                       <span class="lnr lnr-chevron-right"></span> 
                     </h2>
                    <p>Join over 4,000 visitors at the Transform Africa Summit and network with like minded industry players transforming the ICT sector in Africa. Engage with innovators, pioneers &amp; leaders from both the pubic &amp; private sector not only from Africa, but across the globe.</p>
                   <hr class="hr-blue">
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