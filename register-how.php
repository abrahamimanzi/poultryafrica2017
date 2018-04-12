<?php
$success = false;
$error = false;
?> 

<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>  
<?php include 'includes/head-common.php';?>
    <title>Register - Transform Africa Summit 2016</title>	 
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common.php'?>
               
	<div id="wrapper" class="home"> 
        <div class="top_padding" style="padding-top: 0px; height: 400px"></div>
        
        <section class="section-main ">
            <div class="container-fluid">
                
                <div class="">
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

                    <div class="row">
                        <div class="col-sm-8" style="padding-right: 35px;">
                            <div class="page-container">
                                <div class="page-header">
                                    <h1 class="title">Delegates<small style="font-size: 20px;"></small></h1>
                                </div>
                                <div class="page-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, ipsum lorem nibh neque tortor, morbi id dictum habitant quisque purus, vitae sed nunc aenean, vulputate libero lacinia scelerisque in aliquam. lacinia scelerisque in aliquam. 
                                        <br>
                                        <a href="register-delegate" class="orange-color">Register now</a>
                                    </p>
                                </div>
                                <br>
                                <br>
                                <div class="page-header">
                                    <h1 class="title">Exhibitors<small style="font-size: 20px;"></small></h1>
                                </div>
                                <div class="page-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, ipsum lorem nibh neque tortor, morbi id dictum habitant quisque purus, vitae sed nunc aenean, vulputate libero lacinia scelerisque in aliquam. lacinia scelerisque in aliquam.
                                        <br>
                                        <a href="#" class="orange-color">Register now</a>
                                    </p>
                                </div>
                                <br>
                                <br>
                                <div class="page-header">
                                    <h1 class="title">Sponsors<small style="font-size: 20px;"></small></h1>
                                </div>
                                <div class="page-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, ipsum lorem nibh neque tortor, morbi id dictum habitant quisque purus, vitae sed nunc aenean, vulputate libero lacinia scelerisque in aliquam. lacinia scelerisque in aliquam.
                                        <br>
                                        <a href="#" class="orange-color">Register now</a>
                                    </p>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="col-sm-4" style="padding: 0px;">
                            <div class="content">
                                <div class="box no-overflow">
                                    <a href="register" target="" class="half-height tgreen-bg">
                                        <h2 class="">Exhibitors <small style="font-size: 20px;"></small></h2>
                                        <h3 class="">Registration form </h3>
                                        <span class="round-arrow"></span>
                                    </a>
                                    <a href="register-delegate" target="" class="half-height orange-bg">
                                        <h2 class="">Delegates <small style="font-size: 20px;"></small></h2>
                                        <h3 class="">Registration form </h3>
                                        <span class="round-arrow"></span>
                                    </a>
                                </div>                          
                                <div class="box no-overflow" style="width: 100%">
                                    <a href="register" target="" class="half-height blue-bg">
                                        <h2 class="">Sponsors <small style="font-size: 20px;"></small></h2>
                                        <h3 class="">Registration form </h3>
                                        <span class="round-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>           
    </div><!--wrapper--> 
	
    <?php include 'views/footer-common.php';?>
    
</body>
</html>