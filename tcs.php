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
    <title>Terms &amp; Conditions - Transform Africa Summit 2017</title>	 
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php';?>
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
                  <div class="text-left">   
                      <h2 class="title text-center text-uppercase">Terms &amp; conditions
                       <span class="lnr lnr-chevron-right"></span> 
                     </h2>
                    <p style="line-height: 1.8; font-weight: 600">These terms and conditions apply between the person, firm, company or other entity specified on your registration form ("you" or "your") and Smart Africa Secretariat, a non-governmental organisation registered under number RGB: No. 81/RGB/NGO/2016 whose registered address is 9th Floor, Makuza Peace Plaza, Kigali, Rwanda ("Organisation") for delegate registrations for the conference specified on your registration form ("Conference"). Please read them carefully as they contain important information. By submitting your registration to attend the Conference ("your registration") you agree to be bound by these terms to the exclusion of all other terms. If you do not agree to be bound by these terms, Organisation will be unable to accept your registration.</p><hr>
					  <ol class="" style="line-height: 1.6;">
						  <li>Your registration is an offer from the Organisation to attend a Conference which is subject to the Organisation's acceptance in writing (which may include (without limitation) email). A binding contract between the Organisation and you will only be formed when written confirmation of acceptance ("Confirmation" or "Confirmed") is sent by Organisation to you (whether or not it is received) using the contact details you provided at the time of registration. You should contact the Organisation if you have not received a confirmation within 7 days of your registration, but in any event if Confirmation is not sent within 28 days of Organisation receiving your registration, your registration will be deemed to be accepted unless the Organisation notify you otherwise. The Organisation reserves the right in its sole discretion to refuse to accept your registration.</li><br>
						  <li>You will pay the Organisation the fees specified in your booking form for the Conference ("your fees"). Payment of your fees must be received in full and in cleared funds by the Organisation from you in accordance with Organisation's payment terms but in any event no later than the registration closing dates. If payment of your fees in full is not received before the Conference, the Organisation may (at its sole discretion) either require such payment as a condition of your entry to the Conference or refuse you entry to the Conference. No refunds of any proportion of your fees already paid (if any) will be made and any balance of your fees will remain due and payable where entry to a Conference is refused under this Condition 2.</li><br>
						  <li>All discounts can only be applied at the time of registration and discounts cannot be combined. All discounts are subject to the Organisation's approval. Discounts for group registrations are only valid for the number of delegates approved through the group booking team with the Organisation. If the number of delegates that actually attends the Conferences is (for any reason) less than the number specified in the your group booking form, then the Organisation may (at its sole discretion) change the fees charged to reflect the number of delegates that actually attend the Conference in line with Organisation's published prices then in force. Any additional sums payable to us as a result shall be paid in line with Condition 2.</li><br>
						  <li>Prices for each Conference are correct at the time of publication. The Organisation reserves the right to change the prices at any time but changes will not affect registrations which have already been confirmed by the Organisation. The applicable sales tax of the country where the event is taking place is also subject to change and will be included in the price at the time you make your booking.</li><br>
						  <li>You may cancel your registration in accordance with this Condition 5. You will receive a refund of your fees paid to Organisation (if any): 
							  <ul style="list-style-type: lower-alpha">
								  <li>If you cancel your registration 28 days or more before the Conference, subject to an administration charge equivalent to 25% of the total amount of your fee, which includes VAT &amp; other administration charges.</li>
								  <li>if you cancel your registration less than 28 days, but more than 14 days before the Conference, subject to an administration charge equivalent to 50% which includes VAT & administration charges. </li>
								  <li>Organisation regrets that the full amount of your fee remains payable in the event that your cancellation is 14 days or less before the Conference or if you fail to attend the Conference. All cancellations must be sent by email to cancellations@smartafrica.org marked for the attention of Customer Services and must be received by the Organisation. You acknowledge that the refund of your fees in accordance with Condition 5 is your sole remedy in respect of any cancellation of your registration by you and all other liability is expressly excluded.</li>
							  </ul>
						  </li><br>
						  <li>Substitutions with employees from your organisation or any other personnel are not possible. </li><br>
						  <li>You may not purchase registrations as an agent for any third party or sell or otherwise transfer your registration to others, or exploit the registration commercially or non-commercially in any way.</li><br>
						  <li>Organisation may (at its sole discretion) change the format, speakers, participants, content, venue location and programme or any other aspect of the Conference at any time and for any reason, whether or not due to a Force Majeure Event, in each case without liability.</li><br>
						  <li>Organisation may (at its sole discretion) change the date or cancel a Conference at any time for any reason. Where Organisation changes the date or cancels the Conference for any reason except due to a Force Majeure Event (in which case the terms of Condition 10 shall apply) Organisation shall offer you the option of attending any rearranged Conference that Organisation chooses to organise (acting in its sole discretion). If you promptly notify Organisation in writing before the date of the Conference that you do not wish to attend the rearranged Conference or if Organisation elects not to rearrange the Conference then you will (as your sole remedy) be entitled, at your discretion, to receive either a credit note or a refund in respect of your fees received by Organisation.</li><br>
						  <li>Where a Force Majeure Event has or may have (in Organisation's sole discretion) an adverse impact on: 
						  	<ol>
							  <li>the ability of the Organisation to hold the Conference at the planned venue or on the planned date; or </li>
								<li>the Conference generally, then the Organisation shall be entitled but not obliged (in its sole discretion) to either: 
									<ul style="list-style-type: lower-alpha">
										<li>provide alternative facilities or venue for the Conference; and/or </li>
										<li>reschedule the Conference. </li>
									</ul>
								</li>
							</ol>
							 Any of your fees received by the Organisation shall be applied to any rearranged or rescheduled Conference held pursuant to this Condition 10 and you shall not be entitled to object to such rearranged or rescheduled Conference or have any right to claim any compensation in respect thereof. 
							  If the Organisation is unable or elects not to rearrange or reschedule the Conference pursuant to this Condition 10, then you will (as its sole remedy) be entitled, in your sole discretion, to receive either a refund or credit note in respect of your fees received by the Organisation in each case less an administration charge equivalent to 25% per cent of the total amount of your fees (which the Organisation may (in its sole discretion) either deduct from any refund or credit note or invoice the you separately). For the purpose of this Condition 10 "Force Majeure Event" means any event arising that is beyond the reasonable control of the Organisation including (without limitation) to speaker or participant cancellation or withdrawal, supplier or contractor failure, venue damage or cancellation, health scares, industrial dispute, governmental regulations or action, military action, fire, flood, disaster, civil riot, acts of terrorism or war. These terms and conditions shall apply in respect of any rearranged or rescheduled Conference organised by the Organisation pursuant to this Condition 10.

						  </li><br>
						  <li>To the fullest extent permitted by the applicable law, the Organisation shall not be liable to you for any loss, delay, damage or other liability incurred resulting from or arising in connection with the cancellation or date change of the Conference howsoever arising or any venue change. You acknowledge and agree that the provisions of conditions 9 and 10 set out your sole remedy should the Conference date be changed or cancelled and all other liability of the Organisation is expressly excluded.</li><br>
						  <li>The Organisation may (at its sole discretion) refuse admission to, or eject from the Conference, any person in its absolute discretion, including (without limitation) any person who fails to comply with these terms and conditions or who in the opinion of the Organisation represents a security risk, nuisance or annoyance to the running of the Conference. You agree to comply with all reasonable instructions issued by the Organisation or the venue owners at the Conference.</li><br>
						  <li>All unauthorised photography and the recording or transmitting of audio or visual material, data or information is expressly prohibited. You consent to filming and sound recording and photography of the Conference as a delegate and you consent to the use by the Organisation of any such recording or photography anywhere in the world for promotional, marketing and other purposes.</li><br>
						  <li>The personal information which you provide to us will be held by us on a database. You agree that the Organisation may share this information with selected partners for analytical purposes. For more information about how the Organisation may use the information you provide please see our <strong>privacy policy</strong>.</li><br>
						  <li>To the fullest extent permitted by the applicable law, the Organisation excludes
						  	  <ul style="list-style-type: lower-roman">
								  <li>all liability for loss, injury or damage to persons or property at the Conference; </li>
								  <li>all indemnities, warranties, representations, terms and conditions (whether express or implied); and </li>
								  <li>any actual or alleged indirect loss or consequential loss howsoever arising suffered by you or any loss of profits, anticipated profits, savings, loss of business revenue, loss of business, loss of opportunity, loss of goodwill, or any other type of economic loss (whether direct or indirect). </li>
							  </ul>
							  If the Organisation is liable to you for any reason, the Organisation's total liability to you in relation to the Conference (whether under these terms or conditions or otherwise) is limited to the amount of your fees received by the Organisation.
						  </li><br>
						  <li>If, by reason of any Force Majeure Event, the Organisation is delayed in or prevented from performing any of its obligations under this Agreement, then such delay or non-performance shall not be deemed to be a breach of this Agreement and no loss or damage shall be claimed by you by reason thereof. The Organisation's obligations shall be suspended during the period of the delay or non-performance and the Organisation and you shall each use reasonable endeavours to mitigate the effect of the Force Majeure Event. The provisions of this Condition 16 are subject to the provision of Condition 10</li><br>
						  <li>The Organisation reserves the right to amend these terms and conditions from time to time. However, you will be subject to the terms and conditions in force at the time you submit your registration. </li><br>
						  <li>No person other than you and the Organisation shall have the right to enforce these terms and conditions between us without the prior written agreement of you and Organisation.</li><br>
						  <li>This Agreement is governed by laws of the Republic of Rwanda and you submit to the exclusive jurisdiction of the Rwandan courts. Nothing in this Condition 19 shall prevent or restrict Organisation from pursuing any action against you in any court of competent jurisdiction.</li>
					  </ol>
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