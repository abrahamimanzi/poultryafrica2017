<form method="post" class="form-horizontal">
<section class="reg-body open" style="padding-top: 0px;">
                <br>
                <br>
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                    <div class="panel panel-reg">
                        <div class="reg-header">
                            <h2 class="text-center reg-title" style="text-transform: uppercase;font-size: 1.5em;width: 100%;color: #cc0000;">
                            <?php 
                                // if(@$_GET['process'] == 'success' && $participant_data->payment_state == "Confirmed"){ 
                                if($transaction['message'] == 'Cancelled'){ 
                                    echo 'PAYMENT CANCELLED';
                                }elseif($transaction['message'] != 'Approved'){ 
                                  // $email_status = Payment::paymentConfirmedEmail(array($participant_data->ID));
                                  echo 'PAYMENT DECLINE';
                                } elseif(@$_GET['process'] != 'confirmed' && $participant_data->payment_state != "Confirmed"){ 
                                  echo 'REGISTERING AGAIN? ';
                                } else{ echo 'Decline';} ?>
                            </h2>
                        </div>
                        
                        <div class="panel-body" style="padding: 5px 30px 15px 30px;">
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <br>
                                  <p class="fieldset-header text-center" style="line-height: 25px; font-size: 15px">
                                        
                                    <?php 
                                    if($transaction['message'] == 'Cancelled'){ ?>

                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, Thank you for your interest in <span class="ro_bold"><?=EVENT?></span>. <br>You seem to have cancelled your payment.<br>
                                          <?php 
                                            switch($participant_data->category){
                                                case 'Government':
                                                    echo '';
                                                    break;
                                                default:
                                                    echo 'An email notification will be sent to you shortly.';
                                                break;
                                            }?>
                                          <?php
                                    }elseif($transaction['message'] != 'Approved'){ ?>

                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, Thank you for your interest in <span class="ro_bold"><?=EVENT?></span>. <br>You seem to entered an incorrect card details, please try again.<br>
                                          <?php 
                                            switch($participant_data->category){
                                                case 'Government':
                                                    echo '';
                                                    break;
                                                default:
                                                    echo 'An email notification will be sent to you shortly.';
                                                break;
                                            }?>
                                          <?php
                                    }else{?>
                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, Thank you for your interest in <span class="ro_bold"><?=EVENT?></span>. <br>You seem to have cancelled your payment.<br>
                                          <!--<?=$transaction['message']?><?=$transaction['status']?>-->
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
                                  <span class=""><a href="<?=DN?>/payment/<?=$participant_data->code?>" class="btn btn-default"><i class="glyphicon glyphicon-repeat"></i> Try again</a></span>
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
