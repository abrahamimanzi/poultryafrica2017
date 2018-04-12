<?php include 'admin/core/init.php';?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<?php include 'includes/head-common.php';?>
<title><?=EVENT?></title>
<link rel='stylesheet' href="<?=DN?>/css/other.css"  />
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php';?>
    <a class="scroll-point" id="ideas"></a>

    <div class="sectiongrey">
        <section>
            <div class="separator"> 
                <div class="line"></div>
                <h2>404 error</h2>
                <div class="line"></div>
            </div>
            
            <div class="grid3">
                          <div class="col-sm-6 text-justify">
                            <h1 class="text-left text-default" style="font-size: 500%;"><strong>WHOOPS!</strong>
                            </h1>
                            <h1 class="text-left" style="font-size: 300%;"><strong>YOU JUST GOT 404'D</strong>
                            </h1>
                              <!-- <h1 class="text-left" style="font-size: 300%;"><strong>We can't seem to find the page you are looking for</strong></h1> -->
                            <hr class="hr-book-layout"/>
                            <hr class="clear">
                            <h4 class="text-left text-default" style="line-height: 1.8">The page you are trying to access does not exist. We have some nice places you can visit </h4>
                                  <p style="line-height: 2">
                                  <span class="lnr lnr-chevron-right"></span><a href="<?=DN?>/index"> Home page</a><br>
                                  <span class="lnr lnr-chevron-right"></span><a href="<?=DN?>/register"> Registeration page</a><br>
                                  <span class="lnr lnr-chevron-right"></span><a href="<?=DN?>/about"> About page</a><br>
                            <hr class="hr-book-layout"/>
                          </div>
                          <div class="col-sm-6">
                              <img class="img img-responsive mapafrica" src="<?=DN?>/img/logo.png" />
                          </div>
                              
                       <div style="clear: both;"></div>

            </div>
        </section>
    </div>


    </div><!--wrapper-->

    <?php include 'views/footer-common.php';?>

</body>
</html>
