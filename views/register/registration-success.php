<form method="post" class="form-horizontal">
<section class="reg-body open" style="padding-top: 0px;">
    <br>
    <br>
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <?php
                $process = Input::get('process');
                if($process != 'accommondation'){
                  ?>
                                      

                    <div class="panel panel-reg">
                        <div class="reg-header">
                            <h2 class="text-center reg-title" style="text-transform: uppercase;font-size: 1.5em;width: 100%;color: #cc0000;">
                            <?php

                                $process = Input::get('process');
                                if ($process == 'registered') {
                                  echo 'REGISTRATION SUCCESSFULL';
                                }elseif($process == 'accommondation'){
                                  echo 'ACCOMMODATION REGISTRATION SUCCESSFUL';
                                } else{
                                  echo 'REGISTERING AGAIN? ';
                                }

                                if ($category=='FTG') {
                                  $participate_in = "Face the gorillas,";
                                }elseif($category=='MSGSC'){
                                  $participate_in = "ms geek Africa,";
                                }else{
                                  $participate_in = "";
                                }

                                // if($transaction['message'] == 'Cancelled'){ 
                                //     echo 'PAYMENT CANCELLED';
                                // }elseif($transaction['message'] != 'Approved'){ 
                                //   echo 'PAYMENT DECLINE';
                                // } elseif(@$_GET['process'] != 'confirmed' && $participant_data->payment_state != "Confirmed"){ 
                                //   echo 'REGISTERING AGAIN? ';
                                // } else{ echo 'Decline';} ?>
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
                                                    echo 'The email confirmation will be sent to you shortly';
                                                break;
                                            }?>
                                          <?php
                                    }elseif($transaction['message'] != 'Approved'){ ?>

                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, Thank you for your interest in <?=$participate_in?><span class="ro_bold"> <?=EVENT?></span>. 
                                          <br>
                                          <!-- We will review your application and get back to you within 7 working days. <br> -->
                                          <?php 
                                            switch($participant_data->category){
                                                case 'Government':
                                                    echo '';
                                                    break;
                                                default:
                                                    echo 'The email confirmation will be sent to you shortly';
                                                break;
                                            }?>
                                          <?php
                                    } else{?>
                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, Thank you for your interest in <span class="ro_bold"><?=EVENT?></span>. <br>You seem to have cancelled your payment.<br>
                                          <!--<?=$transaction['message']?><?=$transaction['status']?>-->
                                          <?php 
                                            switch($participant_data->category){
                                                case 'Government':
                                                    echo '';
                                                    break;
                                                default:
                                                    echo 'The email confirmation will be sent to you shortly';
                                                break;
                                            }?>
                                          
                                    <?php }?>


                                    

                                  </p><br>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            <div class="form-group">
                                
                              <div class="col-sm-12 text-center">
                                  <span class=""><a href="http://www.poultryafrica2017.com/" class="btn btn-default"><!-- <i class="glyphicon glyphicon-remove"></i> --> Back to home</a></span>
                              </div>
                            </div>
                        </div>
                    </div>

                    <?php
                  }else{ ?>

                    <div class="panel panel-reg">
                        <div class="reg-header">
                            <h2 class="text-center reg-title" style="text-transform: uppercase;font-size: 1.5em;width: 100%;color: #cc0000;">
                            <?php
                                  echo 'ACCOMMODATION REGISTRATION SUCCESSFUL';
                                ?>
                            </h2>
                        </div>
                        
                        <div class="panel-body" style="padding: 5px 30px 15px 30px;">
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <br>
                                  <p class="fieldset-header text-center" style="line-height: 25px; font-size: 15px">
                                        

                                          <span class="ro_bold" style="font-size: 15px"> </span>Thank you for submitting your hotel reservation for <?=EVENT?><br> (Kigali, Rwanda).<br>
                                          
                                          We will review your reservation and an email notification will be sent to you shortly.

                                               


                                    

                                  </p><br>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            <div class="form-group">
                                
                              <div class="col-sm-12 text-center">
                                  <span class=""><a href="<?=DN?>/register" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Done</a></span>
                              </div>
                            </div>
                        </div>
                    </div>
                    <?php
                  }
                  ?>
                </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</section>
</form>
