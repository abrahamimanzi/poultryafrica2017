<?php
include 'admin/core/init.php';

$form["ERRORS"] = false;
$form = (object)$form;
if(Input::checkInput('webToken','post','1') && Input::checkInput('request','post','1')){
    
	$task = Input::get('request','post');
	switch($task){
            
        // API NEW PARTICIPANT
		case 'ftgreg-new':
            if(Input::checkInput('ftgreg-event_token','post','1')){
                $event_token = sanAsID(Input::get('ftgreg-event_token','post'));
                $next_url = Input::get('ftgreg-next_url','post');
                $eventDb = DB::getInstance();
                $event_select = $eventDb->get(array('ID','company_ID','token'),'events',array('token','=',$event_token));
                if($event_select->count() && $event_select->first()->token == $event_token){
                    $event_data = $event_select->first();
                    $event_ID = $event_data->ID;
                    $company_ID = $event_data->company_ID;
                    $_POST['ftgreg-company_id'] = $company_ID;
                    $_POST['ftgreg-event_id'] = $event_ID;
                    $form = FaceGorillaController::add('API');
                    
                    if($form->ERRORS == false){
                        
                    }else{
                        
                    }
                }
            }
		break;
    }
}

$success = false;
$error = false;
$nosubNav = true;

$categ = firstUC(@$_GET['categ']);
$passtype = firstUC(@$_GET['passtype']);

//if(!isset($_GET['categ']) || empty($_GET['categ'])){
//   header("LOCATION: ".DN."/register");
//}else{
//    
//    if($categ!='Delegate' && 
//       $categ!='Exhibitor' && 
//       $categ!='Visitor' && 
//       $categ!='Media' && 
//       $categ!='Government' && 
//       $categ!='Speaker'){
//        header("LOCATION: ".DN."/register");
//    }
//    if($categ=='Delegate' && ($passtype!='Silver' && $passtype!='Gold' && $passtype!='Platinum')){
//        header("LOCATION: ".DN."/register");
//    }
//    if($categ!='Delegate' && !empty($passtype)){
//        header("LOCATION: ".DN."/register");
//    }
//    
//}

?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
    <link rel="stylesheet" href="<?=DN?>/intlTelInput/build/css/intlTelInput.css">
    <link rel="stylesheet" href="<?=DNADMIN?>/plugins/select2/css/select2.min.css">
    <?php include 'includes/head-common.php';?>
    <title>Register - Transform Africa Summit 2016</title>	 
    
    <script src="<?=DN?>/intlTelInput/build/js/intlTelInput.js"></script>
    <script src="<?=DNADMIN?>/plugins/select2/js/select2.min.js"></script>
    <script src="<?=DNADMIN?>/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>    
    <script src="<?=DNADMIN?>/plugins/jquery.cropit/jquery.cropit.js"></script>
    <script src="<?=DNADMIN?>/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?=DNADMIN?>/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
</head>
<body class="home page page-id-2"  style="overflow: hidden">
    <?php include 'views/header-common.php';?>
	<div id="wrapper" class="home"> 
        <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" src="<?=DN?>/img/header-1.jpg"/>
          </div>
        </div>
        <section class="section-main " style="border-bottom: 1px solid #ddd; padding-bottom: 30px; background: rgba(180, 193, 224, 0.04">
              
             <?php include 'views/register/ftg-form.php';?>
          
        </section>
        
        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
</body>
</html>