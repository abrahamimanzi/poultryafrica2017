<form method="post" class="form-horizontal">
<section class="reg-body open">
                <br>
                <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                    <div class="panel panel-reg">
                        <div class="reg-header">
                            <h2 class="text-center reg-title" style="text-transform: uppercase;">Success</h2>
                        </div>
                        
                        <div class="panel-body" style="padding: 5px 30px 15px 30px;">
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <br>
                                  <p class="fieldset-header text-center" style="line-height: 25px; font-size: 15px">
                                      <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, Thank you for your interest in <span class="ro_bold"><?=EVENT?></span>. <br>Your registration is now being processed.<br>
                                        An email notification will be sent to you shortly
                                  </p><br>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            <div class="form-group">
                                
                              <div class="col-sm-12 text-center">
                                  <span class=""><a href="<?=DN?>" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Done</a></span>
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
