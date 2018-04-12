<?php
include 'admin/core/init.php';

if(Input::checkInput('id','get','1')){
    $participant_ID = Input::get('id','get');
    $participantTable = new \FaceGorilla();
    $participantTable->selectQuery("SELECT `code`,`firstname`,`lastname`,`othername`,`email`,`status`,`state` FROM `facegorilla_form` WHERE `code`=? ORDER BY `ID` DESC LIMIT 1",array($participant_ID));
    
    if($participantTable->count()){
        $participant_data = $participantTable->first(); 
    }else{
      // Redirect::to(DN); 
    }
}

$form["ERRORS"] = false;
$form = (object)$form;

?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
    <?php include 'includes/head-common.php';?>
    <title>Success - Transform Africa Summit 2016</title>
</head>
<body class="home page page-id-2" style="overflow: hidden">
    <?php include 'views/header-common.php'?>
	<div id="wrapper" class="home"> 
        
        <section class="section-main " style="border-bottom: 1px solid #ddd; padding-bottom: 30px; background: rgba(180, 193, 224, 0.04"> 
             <?php include 'views/register/ftg-success.php';?>
        </section>
        
        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
</body>
</html>