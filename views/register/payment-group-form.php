<form method="post" class="form-horizontal" id="pay-form" autocomplete="nope">
<section class="reg-body open bg1" style="padding-top: 0px;background:#f5f6f7;">
                <br>
                <br>
    <div class="container" style="width:100%;">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                    <div class="panel panel-reg" style="background: #fff;">
                        <div class="reg-header">
                            <h2 class="text-center reg-title" style="text-transform: uppercase;font-size: 1.5em;width: 100%;color: #cc0000;"><i class="fa fa-angle-double-right"></i> Group Payment details</h2>
                        </div>
                        
                        <div class="panel-body" style="padding: 25px 30px 15px 30px;">
                        
                            <table class="table table-bordered">
                                <tr> 
                                    <td>Registration ID</td>  
                                    <td>Full name</td>  
                                    <td>Pass Type</td>  
                                    <td>Amount</td>  
                                </tr>
                            <?php
                                
                            $net_total = 0;
                                
                            $participantTable = new \Participant();
                            $participantTable->selectQuery("SELECT `ID`,`code`,`payment_rn`,`payment_method`,`residence_country`,`firstname`,`lastname`,`othername`,`email`,`amount`,`payment_state`,`category`,`pass_type`,`state`,`host_account_ID`,`invite_ID` FROM `events_participant` WHERE `host_account_ID`=? AND `payment_state`='Pending' ORDER BY `ID` DESC",array($_id));
                            $i = 0;
                            foreach($participantTable->data() as $participant_data){
                                $i++;
                                $discount = false;
                                if(Input::checkInput('currency','get',1)){
                                    $get_currency = Input::get('currency','get');
                                    $currency = $get_currency == "rwf" ? "Local" : "Other";
                                }
                                
                                $currency_str = $currency == "Local" ? "RWF" : "USD";
                                $gross = Functions::passPrice($participant_data->pass_type,$currency);
                                $net = $gross;
                                
                                //* START COMPUTE INVITATION //
                                if($participant_data->invite_ID){
                                    $subscategInviteTable = new \SubscriberCategoryInvite();
                                    $subscategInviteTable->selectQuery("SELECT* FROM `subscriber_category_invite` WHERE `ID`=?",array($participant_data->invite_ID));

                                    if($subscategInviteTable->count()){
                                        $invite_ID = $participant_data->invite_ID;
                                        $subscateginvite_data = $subscategInviteTable->first(); 

                                        $subscategory_ID = $subscateginvite_data->subscateg_ID;
                                        $subscategTable = new \SubscriberCategory();
                                        $subscategTable->selectQuery("SELECT* FROM `subscriber_category` WHERE `ID`='{$subscategory_ID}'");
                                        $subscateg_data = $subscategTable->first();
                                    }
                                }
                                if($subscateg_data->discount){
                                    $discount = $subscateg_data->discount;
                                    $net = Functions::discount($gross,$discount);
                                }
                                $net_total += $net; 
                                //* END COMPUTE INVITATION //
                                ?>
                                <tr> 
                                    <td><?=$participant_data->code?></td>  
                                    <td><?=$participant_data->firstname.' '.$participant_data->lastname?></td>  
                                    <td>
                                        <?=$participant_data->pass_type?>
                                        <?php
                                        if($discount){?>
                                        <span style="color: #18ab86"> | <?=$discount?>% discount</span>
                                        <?php }?>
                                    </td>  
                                    <td><?=$currency_str.' '.$net?></td>  
                                </tr>
                            <?php
                                    
                            }?>
                            <tr>
                                <td colspan="5">Total: <?=$currency_str.' '.$net_total?></td>  
                            </tr>
                            </table>
                            
                            <?php if($message){?>
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <br>
                                  <label class="control-label col-sm-12" style="text-align: center!important">
                                    <span style="display: inline-block; font-size: 13px; color: red;  border-radius: 10px; padding: 5px 30px; "> The transaction could not be completed. Please re-enter your payment details and ensure that it is correct.
                                        <br>
                                        <b>STATUS</b>: <?php echo $message;?>
                                        <hr class="halfLine">
                                    </span>
                                    
                                  </label>
                                  <br>
                              </div>
                            </div>
                            <?php }else{?>
                            
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <br>
                                  <p class=" text-center"><span class="ro_bold"><?php echo $session_subscriber_data->firstname;?> <?php echo $session_subscriber_data->lastname;?></span>, You are one step away from completing the payments for your group member passes. Please enter your card details below.

                                    <hr class="halfLine">
                                  </p>
                              </div>
                            </div>
                            <?php }?>

                            <?php /* ?>
                            <div class="form-group">
                              <label class="control-label col-sm-4" for="location">Debit/Credit Card number</label>
                              <div class="col-sm-8">
                                  <div class="row">
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control " name="payment-vpc_CardNum" placeholder="Enter your card number" maxlength="50" required="required" id="vpc_CardNum" autocomplete="off">
                                      </div>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="payment-vpc_CardSecurityCode" placeholder="VCC" maxlength="3">
                                          <div class="log"></div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        
                            <div class="form-group">
                              <label class="control-label col-sm-4" for="location">Expiry date  
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['card_expiry'][0];}?> </span>
                                </label>
                              <div class="col-sm-8">
                                  <div class="row">
                                      <div class="col-xs-4">
                                          <input type="text" class="form-control" name="payment-card_expiry_month" placeholder="MM" maxlength="2" autocomplete="off">
                                      </div>
                                      <div class="col-xs-4">
                                          <input type="text" class="form-control" name="payment-card_expiry_year" placeholder="YY" maxlength="2" autocomplete="off">
                                      </div>
                                      <div class="col-sm-4">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            
                            <?php */ ?>
                            <hr class="halfLine">

                              <input type="hidden" id="vpc_MerchTxnRef" name="vpc_MerchTxnRef" value="170217GPRAXTUU260A1CDUI9SA9L9I9YT4NS">
                              <input type="hidden" id="vpc_OrderInfo" name="vpc_OrderInfo" value="170217043620" size="20">
                              <input type="hidden" id="vpc_Amount" name="vpc_Amount" value="500">
                              <input type="submit" name="SubButL" value="Pay Now!" style="display:none">
                            
                            <div class="form-group">
                                <input type="hidden" name="request" value="payment-new">
                                <input type="hidden" name="refnumber" value="<?=$ref_number;?>">
                                <input type="hidden" name="webToken" value="<?=Config::get('time/seconds');?>">
                                <input type="hidden" name="register_submited" value="1">
                                <input type="hidden" name="register-next_url" value="<?=DN?>/registration">
                                <input type="hidden" name="register-event_token" value="de220168957bd2ccff08f88e9939b95f">
                                <div class="col-sm-12">
<!--                                  <span class="close pull-left"><a href="<?=DN?>/register" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Cancel</a></span>-->
                                </div>
                              <div class="col-sm-12 text-center">
                                  <br>
                                        <span class="font-size: 12px; color: 999;">Click here</span>
                                        <button type="submit" class="submit_btn btn orange-bg white-color btn-default btn-md"><img class="loading_icon" src="<?=DN?>/img/loading.gif" style="width: 14px; display: none"> <i class="glyphicon glyphicon-share"></i> Continue to pay</button>
                                  <!-- <i class="font-size: 12px; color: 999;">Click here</i>
                                  <button type="submit" class="submit_btn btn orange-bg white-color btn-default btn-md" disabled="disabled"><img class="loading_icon" src="<?=DN?>/img/loading.gif" style="width: 14px; display: none"> <i class="glyphicon glyphicon-share"></i> Submit</button> -->
                                  
                                  
                              </div>
                            </div>
                                
                            <script>

                                $(document).ready(function() {
                                    $('#vpc_CardNum').keyup(function(el) {
                                        if($('#vpc_CardNum').val().length == 0){
                                            $('#vpc_CardNum').removeClass('visa');
                                            $('#vpc_CardNum').removeClass('mastercard');
                                        }
                                    });
                                    $('#vpc_CardNum').validateCreditCard(function(result) {

                                        if(result.card_type==null){
                                            $('#vpc_CardNum').removeClass('visa');
                                            $('#vpc_CardNum').removeClass('mastercard');
                                            $('#vpc_CardNum').removeClass('valid');
                                        }else{
                                            if(result.card_type.name=='visa'){
                                                $('#vpc_CardNum').removeClass('mastercard');
                                                $('#vpc_CardNum').addClass('visa');
                                            }else if(result.card_type.name=='mastercard'){
                                                $('#vpc_CardNum').removeClass('visa');
                                                $('#vpc_CardNum').addClass('mastercard');
                                            }
                                            if(result.valid==true){
                                                $('#vpc_CardNum').addClass('valid');
                                                $('.submit_btn').prop('disabled',false);
                                            }else{
                                                $('#vpc_CardNum').removeClass('valid');
                                                $('.submit_btn').prop('disabled',true);
                                            }
                                        }
                                    });
                                });

                                $(document).ready(function() {

                                    var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
                                    var is_explorer = navigator.userAgent.indexOf('MSIE') > -1;
                                    var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;
                                    var is_safari = navigator.userAgent.indexOf("Safari") > -1;
                                    var is_opera = navigator.userAgent.toLowerCase().indexOf("op") > -1;
                                    if ((is_chrome)&&(is_safari)) {is_safari=false;}
                                    if ((is_chrome)&&(is_opera)) {is_chrome=false;}

                                    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
                                        $('#pay-form .submit_btn').on('click', function(e){
                                             $('.submit_btn .loading_icon').css({'display': 'inline-block'});
                                             $('.submit_btn .glyphicon').css({'display': 'none'});
                                        });
                                    }else{
                                        $('#pay-form').on('submit', function(e){
                                             $('.submit_btn .loading_icon').css({'display': 'inline-block'});
                                             $('.submit_btn .glyphicon').css({'display': 'none'});
                                        });
                                    } 
                                });
                            </script>
                            
                        </div>
                    </div>
                </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</section>
</form>

