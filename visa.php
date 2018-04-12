<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;
?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
<?php include 'includes/head-common.php';?>
    <title>Visa Requirements - <?=EVENT?></title>	 
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common.php';?>
               
	<div id="wrapper" class="home"> 
        <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" style="width: 100%" src="<?=DN?>/img/plan.jpg"/>
          </div>
        </div>
        <div class="sectiongrey">
            <section>
                <div class="separator"> 
                    <div class="line"></div>
                    <h2>Plan your trip</h2>
                    <div class="line"></div>

                </div>
                <h4>
                    <span class="lnr lnr-chevron-right"></span> 
                    <span class="light"><small>Visa Requirements</small></span>
                  
                </h4>
                <div class="col-sm-12 col-md-12">
                  <h3 class="text-left text-gray"><strong>Passport / Travel Document validity</strong></h3>
                  <p>A valid passport or another acceptable travel document is required for all delegates attending from outside of Rwanda. The document must have a validity of at least 6 months on the day of entry in Rwanda</p>
                  <h3 class="text-left text-gray"><strong>Yellow Fever vaccination requirements</strong></h3>
                  <p>To enter Rwanda, <strong>a valid Yellow Fever vaccination certificate is mandatory</strong> for travelers (Residents/ Non-Residents). The certificate must be issued at least 10 days before arrival to Rwanda for people coming from the following countries: <br><br>
                    <span style="color: ">Angola, Argentina, Benin, Bolivia Plurinational, Brazil, Burkina Faso, Burundi, Cameroon, Central African Republic, Chad, Colombia, Congo, Côte d’Ivoire, Democratic Republic of the Congo, Ecuador, Equatorial Guinea, Ethiopia, French Guiana, Gabon, Gambia, Ghana, Guinea, Guinea-Bissau, Kenya, Liberia, Mali, Mauritania, Niger, Nigeria, Panama, Paraguay, Peru, Senegal, Sierra Leone, South Sudan, Sudan, Suriname, Togo, Trinidad and Tobago, Uganda and Venezuela.</span><br><br>
                  Vaccinations are available at the airport on arrival for USD 40 if you are not from one of the countries listed above and do not have a yellow fever vaccination certificate. 
                    </p>
                    
                    <h4 class="text-left text-uppercase"><strong>Visa Requirements</strong></h4>
                     <hr class="hr-book-layout">
                    <h3 class="text-left text-gray"><strong>Diplomatic Passport Holders</strong></h3>
                    <br>
                    <p>Delegates with a Diplomatic Passport, Service/Offcial Passport or AU/UN Laissez-passer traveling for official duty are exempted from visa fees. </p>
                    <h3 class="text-left text-gray"><strong>Ordinary Passport Holders</strong></h3>
                    <table class="table table-bordered text-default">
                      <thead>
                        <tr class="info">
                          <th>Visiting Delegate Country</th>
                          <th>Visa Type</th>
                          <th>Prior Application required(Yes or No)</th>
                          <th>Fee</th>
                          <th>Validity</th>
                          <th>Visa</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Hong Kong, Philippines, Mauritius, Singapore and the Democratic Republic of Congo</td>
                          <td>Tourist (T1) visa <br>Multiple entry</td>
                          <td>No</td>
                          <td>None</td>
                          <td>90 days</td>
                          <td>Upon arrival</td>
                        </tr>
                        <tr>
                          <td>Citizens of the East African Community <br>(Burundi, Kenya, Tanzania and Uganda)</td>
                          <td>Visitor's pass <br>Multiple entry</td>
                          <td>No</td>
                          <td>None</td>
                          <td>6 months</td>
                          <td>Upon arrival</td>
                        </tr>
                        <tr>
                          <td>Nationals of Australia, Germany, Israel, New Zealand, Republic of South Africa, Sweden, United Kingdom and the United States of America</td>
                          <td>Single entry visa</td>
                          <td>No</td>
                          <td>$30</td>
                          <td>30 days</td>
                          <td>Upon arrival</td>
                        </tr>
                        <tr>
                          <td rowspan="4">Nationals of all countries not listed above</td>
                          <td>Single entry visa</td>
                          <td>Yes <br>(Available online)</td>
                          <td>$30</td>
                          <td>30 days</td>
                          <td>Headquarters and Rwandan Embassies</td>
                        </tr>
                        <tr>
                          <td>Tourist visa (T2) <br>Multiple entry</td>
                          <td>Yes <br>(Available online)</td>
                          <td>$50</td>
                          <td>90 days</td>
                          <td>Headquarters and Rwandan Embassies</td>
                        </tr>
                        <tr>
                          <td>Conference pass (T6-1) <br>Single entry</td>
                          <td>Yes <br>(Available online)</td>
                          <td>$30</td>
                          <td>30 days</td>
                          <td>Headquarters and Rwandan Embassies</td>
                        </tr>
                        <tr>
                          <td>Conference pass (T6-2) <br>Multiple entry</td>
                          <td>Yes <br>(Available online)</td>
                          <td>$50</td>
                          <td>6 days</td>
                          <td>Headquarters and Rwandan Embassies</td>
                        </tr>
                      </tbody>
                    </table>
                  <hr class="hr-book-layout" />
                  <p class="notes">Those wishing to stay for longer than 30 days and/or enter more than once should contact the Directorate General of Immigration and Emigration or a Rwandan Embassy or Diplomatic Mission. <span class="lnr lnr-chevron-right"></span><span class="lnr lnr-chevron-right"></span> For further information on visas for Rwanda, visit <a class="btn btn-platinum" href="http://migration.gov.rw" target="_blank">www.migration.gov.rw</a></p><br>

                </div>
            </section>
        </div>


        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
    
</body>
</html>