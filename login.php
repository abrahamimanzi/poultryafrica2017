<?php   
require_once 'admin/core/init.php'; 
require_once 'app/controller-login.php'; 
if($session_subscriber->isLoggedIn()){ 
	Redirect::to(DN.'/net');   
}?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <?php include 'includes/head-common.php';?>
    <title>Smart Africa - Transform Africa Summit 2017</title>
    <link rel='stylesheet' href="<?=DN?>/css/other.css"  />
    <link rel='stylesheet' href="<?=DNADMIN?>/css/app.css"  />
    <link rel='stylesheet' href="<?=DNADMIN?>/css/app_login_form.css"  />
    <script src="<?=DNADMIN?>/js/app_signup_form.js"></script>
</head>
<body class="home page page-id-2">
    
    <?php include 'views/header-common.php';?>
    
	<div id="wrapper" class="home" style="height: 100%">
        <div class="content-wrapper">
            <div class="app_guest_room" >

                <br>
                <br>
                <?php 
                    if(Input::checkInput('request','get','1')){
                        $post_request = Input::get('request','get');
                        switch($post_request){
                            case 'resetpassword':
				                include 'views/login/login-resetpassword'.P;
                                break; 
                            case 'forgotpassword':
                                include 'views/login/login-forgotpassword'.P;
                                break;   
                            default:
                                include 'views/login/login-form'.P;
                            break;
                        }
                    }?>

                <br>
                <br>
                <br>
                <br>
                <br>
            </div>

            <div class="text-center" style="font-size: 12px;;padding: 20px 10px 15px 10px; background: #fff; color: #888">
            All rights reserved | Copyright <?=date('Y'); ?>
            </div>

        </div>
    </div><!--wrapper-->
    <div class="modal" id="tcsModal_1" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg container-fluid" role="document" >
        <div class="modal-content" style="margin-top: 100px;">
            <div class="container">
              <div class="modal-body">
                 <?php include 'tcs.html';?>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="modal" id="tcsModal_2" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg container-fluid" role="document" >
        <div class="modal-content" style="margin-top: 100px;">
            <div class="container">
              <div class="modal-body">
                 <?php include 'privacy.html';?>
              </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>  

