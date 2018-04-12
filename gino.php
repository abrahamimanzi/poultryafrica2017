<?php   
require_once 'admin/core/init.php'; 
require_once 'app/controller.php'; 
if(!$session_subscriber->isLoggedIn()){ 
	Redirect::to(DN.'/login');   
}
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
    <style>
        .modal-backdrop{
             background:rgba(243, 245, 250, 0.74);
            opacity: 1!important;
        }
        .modal-lg{
            width: 100%!important;
        }
        .modal-content{
            background-color: transparent;
            border: 1px solid transparent;
            box-shadow: none!important;
        }
        .modal{
            transform: scale(0);
            transition: transform 2s;
        }
        .modal.in{
            transform: scale(1);
            transition: transform 1s;
        }
    </style>
</head>
<body class="home page page-id-2"  style="overflow: hidden">
    <?php include 'views/header-common.php';?>
	<div id="wrapper" class="home"> 
        <section class="section-main " style="border-bottom: 1px solid #ddd; padding-bottom: 30px; background: rgba(180, 193, 224, 0.04">
            
            <style>
                .panel.panel-reg{
                    border: 0;
                    background: #fff;
                }
                .reg-body .reg-header h2{
                    margin: 0px;
                }              
                .reg-body .reg-header {
                    width: 100%;
                    padding-top: 10px;
                    padding-bottom: 10px;
                    background: #2a51a3;
                }
            </style>
            
            <section class="reg-body open bg5">
            <br/>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-reg" style="margin-bottom: 0px">
                                <div class="reg-header" style="padding: 0px">
                                    <ul class="nav nav-tabs" style="margin: 0px; background: transparent; border: 0px;">
                                        <li class="<?php if($url_struc['tree']==''){ echo 'active';}?>"><a  href="<?=DN?>/net"> <span>Dashboard</span></a></li>
                                        <!-- <li class="<?php if($url_struc['branch']=='addmore'){ echo 'active';}?>"><a  href="<?=DN?>/net/group/passes/addmore"> <span>Purchase passes</span></a></li> -->
                                        <li class="<?php if($url_struc['tree']=='invitee' && $url_struc['trunk']=='logout'){ echo 'active';}?>"><a href="<?=DN?>/net/logout">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php include 'views/routes'.PL;?>
                        </div>
                    </div>
                </div>
            </section>
            
        </section>
        
        <?php //include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php //include 'views/footer-common.php';?>
</body>
</html>