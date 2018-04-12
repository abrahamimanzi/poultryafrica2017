<form method="post" class="form-horizontal">
<section class="reg-body open">
                <br>
                <br>
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                    <div class="panel panel-reg" style="padding-top: 0px;">
                        <div class="reg-header">
                            <h2 class="text-center reg-title" style="text-transform: uppercase;width: 100%;">
                            <?php 
                                // if(@$_GET['process'] == 'success' && $participant_data->payment_state == "Confirmed"){ 
                                if($transaction['message'] == 'Approved'){ 
                                    echo 'PAYMENT SUCCESSFUL';
                                }elseif(@$_GET['process'] == 'confirmed' && $participant_data->payment_state == "Confirmed"){ echo 'REGISTERING AGAIN? ';} else{ echo 'Success';} ?>
                            </h2>
                        </div>
                        
                        <div class="panel-body" style="padding: 5px 30px 15px 30px;">
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <br>
                                  <p class="fieldset-header text-center" style="line-height: 25px; font-size: 15px">
                                      
                                    <?php 
                                    if($transaction['message'] == 'Approved'){?>
                                    <!-- if(@$_GET['process'] == 'success' && $participant_data->payment_state == "Confirmed"){ ?> -->
                                          <span class="ro_bold" style="font-size: 15px">
                                            <?=$participant_data->firstname.' '.$participant_data->lastname?>
                                          </span>, Thank you for your interest in <?=EVENT?>. <br> The transaction was completed successfully. Your payment confirmation and receipt will be sent to 
                                          <span class="ro_bold">
                                            <?php echo $participant_data->email;?>
                                          </span>, momentarily. Please contact <?=EMAIL1?> if you do not receive your  email within 12 hours.<br>
                                          Check your spam folder too.
                                          <?php
                                    }elseif(@$_GET['process'] == 'confirmed' && $participant_data->payment_state == "Confirmed"){ ?>

                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, you seem to have already registered for a pass for <?=EVENT?>.
                                          To upgrade your pass or get more information about your registration, contact us at <span class="ro_bold"><?=EMAIL1?></span>
                                          <br>
                                          <?php
                                    }else{?>
                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, Thank you for your interest in <span class="ro_bold"><?=EVENT?></span>. <br>Your registration is now being processed.<br>
                                          <?php 
                                            switch($participant_data->category){
                                                case 'Government':
                                                    echo '';
                                                    break;
                                                default:
                                                    echo 'An email notification will be sent to you shortly.';
                                                break;
                                            }?>
                                          
                                    <?php }?>
                                    

                                  </p><br>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            <div class="form-group">
                                
                              <div class="col-sm-12 text-center">
                                  <span class=""><a href="<?=DN?>/receipt-single/<?=$participant_data->token?>" target="_blank" class="btn btn-default"> View receipt</a></span>
                                  <!-- <span class=""><a href="<?=DN?>" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Close</a></span> -->
                                  <span class=""><a href="http://www.poultryafrica2017.com/" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Close</a></span>
                                  
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</section>
</form>
