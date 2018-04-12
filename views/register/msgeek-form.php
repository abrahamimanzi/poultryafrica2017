<style>
    .panel.panel-reg{
        border: 0;
        background: #fff;
    }
    .reg-body .reg-header h2{
        margin: 0px;
    }
<?php
  if($session_subscriber->isLoggedIn()){?>
    .reg-body .reg-header {
        width: 100%;
        padding-top: 10px;
        padding-bottom: 10px;
        background: #2a51a3;
    }
<?php }?>
</style>
<form method="post" id="reg-form" class="form-horizontal" enctype="multipart/form-data" autocomplete="nope">
<section class="reg-body open bg5">
                <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                    <div class="panel panel-reg" >

                        <div class="reg-header" style="">
                                <h2 class="text-center reg-title" style="font-size: 20px; color: #fff">Ms geek Africa Application Form</h2>
                        </div>

                        <div class="panel-body" style="padding: 5px 30px 15px 30px;">

                        <?php if($form->ERRORS && (@$form->ERRORS_SCRIPT['email'][0] == 'NOTUNIQUE' || @$form->ERRORS_SCRIPT['document_number'][0] == 'NOTUNIQUE')){
                            include 'ftg_email_used'.PL;
                        }else{ ?>

                            <?php if($form->ERRORS){?><br>
                            <div class="form-group" >
                                <label class="control-label col-sm-12">
                                    <div style="border-left: 10px solid red">
                                    <span style="display: inline-block; font-size: 13px; font-weight: 600; color: red; padding: 0px 30px 0px 10px; ">Sorry, Some errors prevented your registration from being submitted. Please correct any errors indicated below and try again.</span>
                                    </div>
                                </label>
                            </div>
                            <?php }?>
                            <label class="control-label col-sm-12">
                                <div class="text-center">
                                <?=EVENT?> under the theme of smart cities, fast forward aims to explore how the continent can address the challenges faced by her people using technology.  Identify a specific issue related to water management, energy, transport, housing, sustainable environments and public safety. <br>Design a technology solution to solve the specific issue or challenge you have identified.
                                </div>
                            </label>
                            <label class="control-label" style="padding-top:20px"> All <span class="req" style="font-size: 16px;">*</span> fields are mandatory  </label>

                            <br>

                             <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">CONTACT INFORMATION <span class="req"></span></h4>
                                 <hr class="halfLine">
                              </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-sm-3" for="firstname">First Name
                                    <span  class="req">*</span>
                                    <span class="details" style="color: #f68d29">As per your Passport/ID</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['firstname'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-firstname" id="firstname" placeholder="First Name"
                                       <?php if($form->ERRORS && Input::get('register-firstname','post')){?> value="<?php echo Input::get('register-firstname','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->firstname?>"<?php }?> required="required" maxlength="30">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="lastname">Last Name
                                  <span  class="req">*</span>
                                    <span class="details" style="color: #f68d29">As per your Passport/ID</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['lastname'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-lastname" id="lastname" placeholder="Last Name"
                                       <?php if($form->ERRORS && Input::get('register-lastname','post')){?> value="<?php echo Input::get('register-lastname','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->lastname?>"<?php }?> required="required" maxlength="30">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="othername">Other Name
                                    <span class="details" style="color: #f68d29">As per your Passport/ID</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['othername'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control rl_store" name="register-othername" id="othername" placeholder="Other Name (Optional)"
                                       <?php if($form->ERRORS && Input::get('register-othername','post')){?> value="<?php echo Input::get('register-othername','post');?>" <?php }?> maxlength="30">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-3" for="tel1">Mobile/ Cell phone
                                <span  class="req">*</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['telephone'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <input type="tel" class="form-control field-telephone rl_store" name="register-telephone" id="tel1"
                                            <?php if($form->ERRORS && Input::get('register-telephone','post')){?> value="<?php echo Input::get('register-telephone','post');?>" <?php }?> required="required" maxlength="20">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="email">Email
                                <span  class="req">*</span>
                                    <?php if($form->ERRORS && @$form->ERRORS_SCRIPT['email'][0] == 'NOTUNIQUE'){?>
                                         <span id="errors_email" style="color: red; font-size: 12px; display: block">  <?php echo Input::get('register-email','post');?> is already used</span>
                                    <?php }else{?>
                                    <span id="errors_email" style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS && @$form->ERRORS_SCRIPT['email'][0] != 'NOTUNIQUE'){ echo @$form->ERRORS_SCRIPT['email'][0];}?> </span>
                                  <?php }?>
                                </label>
                              <div class="col-sm-9">
                                <input type="email" class="form-control val_email" data-result="#errors_email" name="register-email" id="email" placeholder="Enter email"
                                  <?php if($form->ERRORS && Input::get('register-email','post')){?> value="<?php echo Input::get('register-email','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->email?>"<?php }?> required="required" maxlength="100">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="confirm_email">Confirm Email
                                <span  class="req">*</span>
                                    <span id="errors_confirm_email" style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['confirm_email'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                <input data-field="#email" data-field1="#confirm_email" data-result="#errors_confirm_email" type="email" class="compare_onkeyup compare_onchange form-control" name="register-confirm_email" id="confirm_email" placeholder="Confirm email"
                                    <?php if($form->ERRORS && Input::get('register-confirm_email','post')){?> value="<?php echo Input::get('register-confirm_email','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->email?>"<?php }?> required="required" maxlength="100">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="gender">Gender
                                <span  class="req">*</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['gender'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <select name="register-gender" id="gender" class="form-control bordered" required="required">
                                      <option value="Female" selected="selected">Female</option>
<!--
                                        <option value="" <?php if($form->ERRORS && Input::get('register-gender','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                        <option value="Female" <?php if($form->ERRORS && Input::get('register-gender','post') == 'Female'){ echo 'selected="selected"';}?>>Female</option>
                                        <option value="Male" <?php if($form->ERRORS && Input::get('register-gender','post') == 'Male'){ echo 'selected="selected"';}?>>Male</option>
-->
                                  </select>
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="dateOfbirth">Date Of birth
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['dateOfbirth'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="input-group">
                                      <label class="input-group-addon" for="dateOfbirth">
                                        <i class="fa fa-calendar"></i>
                                      </label>
                                      <input type="text" class="datemask form-control" name="register-dateOfbirth" id="dateOfbirth" placeholder="dd/mm/yyyy"
                                       <?php if($form->ERRORS && Input::get('register-dateOfbirth','post')){?> value="<?php echo Input::get('register-dateOfbirth','post');?>" <?php }?> data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                    </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">IDENTIFICATION <span class="req"></span></h4>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="residence-country" style="padding-right: 5px">Country of Residence
                                <span  class="req">*</span>
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['residence_country'][0];}?> </span>
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['residence_city'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <select class="select2-country js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="register-residence_country" id="residence-country" placeholder="Country of residence" required="required" onchange="changePrice(this,'<?=$categ?>')">
                                            <option value="" <?php if($form->ERRORS && Input::get('register-residence_country','post') == ''){ echo 'selected="selected"';}?>>[--Select Country--]</option>
                                            <?php
                                            $countryArray =Country::getArrays();
                                            foreach($countryArray as $country_ID=>$country_data){
                                                $country_data = (object)$country_data;?>
                                                <option value="<?php echo $country_data->name; ?>" id="<?php echo $country_data->icon; ?>"

                                                        <?php if($form->ERRORS && Input::get('register-residence_country','post')==$country_data->name){ echo 'selected';}?>

                                                        <?php if(!$form->ERRORS && $country_data->code == ""){ echo 'selected';}?>>
                                                        <span></span>
                                                    <?php echo $country_data->name; ?></option>
                                                <?php
                                            }?>
                                          </select>
                                      </div>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control rl_store" name="register-residence_city" id="address-city" placeholder="City of residence" <?php if($form->ERRORS && Input::get('register-residence_city','post')){?> value="<?php echo Input::get('register-residence_city','post');?>" <?php }?> required="required" maxlength="30">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="citizenship-country">Citizenship
                                <span  class="req">*</span>
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['citizenship_country'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <select class="select2-country js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="register-citizenship_country" id="citizenship-country" placeholder="Citizenship Country" onchange="citizenshipDoc(this)" required="required">
                                    <option value="" <?php if($form->ERRORS && Input::get('register-citizenship_country','post') == ''){ echo 'selected="selected"';}?>>[--Select Country--]</option>
                                    <?php
                                    $countryArray =Country::getArrays();
                                    foreach($countryArray as $country_ID=>$country_data){
                                        $country_data = (object)$country_data;?>
                                        <option value="<?php echo $country_data->name; ?>" id="<?php echo $country_data->icon; ?>"

                                                <?php if($form->ERRORS && Input::get('register-citizenship_country','post')==$country_data->name){ echo 'selected';}?>

                                                <?php if(!$form->ERRORS && $country_data->code == ""){ echo 'selected';}?>>
                                                <span></span>
                                            <?php echo $country_data->name; ?></option>
                                        <?php
                                    }?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="document_type"  style="padding-right: 5px">Type of ID document
                                    <span  class="req">*</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['document_type'][0];}?> </span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['document_number'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <select name="register-document_type" id="document_type" class="form-control bordered" required="required">

                                              <option value="" <?php if($form->ERRORS && Input::get('register-document_type','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>

                                              <option value="Passport" <?php if($form->ERRORS && Input::get('register-document_type','post') == 'Passport'){ echo 'selected="selected"';}?>>Passport</option>

                                              <option class="idcard" value="ID card" id="notrwanda" <?php if($form->ERRORS && Input::get('register-document_type','post') == 'ID card'){ echo 'selected="selected"';}?>>ID card</option>
                                              <option class="idcard" value="No ID Card" id="nodocument" <?php if($form->ERRORS && Input::get('register-document_type','post') == 'No ID Card'){ echo 'selected="selected"';}?>>No ID Card</option>

                                        </select>
                                      </div>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control rl_store" name="register-document_number" id="document_id" placeholder="Document number"
                                               <?php if($form->ERRORS && Input::get('register-document_number','post')){?> value="<?php echo Input::get('register-document_number','post');?>" <?php }?> maxlength="20">

                                      </div>

                                  </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">SOLUTION INFO <span class="req"></span></h4>
                                 <hr class="halfLine">
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="company_name">Solution name
                                    <span  class="req">*</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['company'][0];}?></span>
                                </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control rl_store" name="register-company_name" id="company_name" placeholder="Enter Solution Name"
                                       <?php if($form->ERRORS && Input::get('register-company_name','post')){?> value="<?php echo Input::get('register-company_name','post');?>" <?php }?>  required="required" maxlength="50">
                              </div>
                            </div>



<!--
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="org_country">Country:
                                    <span  class="req">*</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['org_country'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">

                                  <div class="row">
                                      <div class="col-sm-12">
                                          <select class="select2-country js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="register-org_country" id="org_country" placeholder="Country" required="required">
                                            <?php
                                            $countryArray =Country::getArrays();
                                            foreach($countryArray as $country_ID=>$country_data){
                                                $country_data = (object)$country_data;?>
                                                <option value="<?php echo $country_data->name; ?>" id="<?php echo $country_data->icon; ?>"

                                                        <?php if($form->ERRORS && Input::get('register-org_country','post')==$country_data->name){ echo 'selected';}?>

                                                        <?php if(!$form->ERRORS && $country_data->code == "RW"){ echo 'selected';}?>>
                                                        <span></span>
                                                    <?php echo $country_data->name; ?></option>
                                                <?php
                                            }?>
                                          </select>
                                      </div>
                                  </div>

                              </div>
                            </div>
-->

<!--
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="website">Website:</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control rl_store" name="register-website" id="website" placeholder="Enter your Website"
                                       <?php if($form->ERRORS && Input::get('register-website','post')){?> value="<?php echo Input::get('register-website','post');?>" <?php }?> maxlength="100">
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="date_founded">Year founded
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['date_founded'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="input-group">
                                      <select name="register-date_founded" id="date_founded" class="form-control bordered">
                                          <option value="" <?php if($form->ERRORS && Input::get('register-date_founded','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                          <?php
                                            for($i=2017;$i>2004;$i--){?>
                                                <option value="<?=$i;?>"
                                                    <?php if($form->ERRORS && Input::get('register-date_founded','post') == $i){ echo 'selected="selected"'; }?>><?=$i;?> </option>
                                            <?php
                                            }
                                          ?>
                                        </select>
                                    </div>
                              </div>
                            </div>
-->

<!--
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="org_stage">How would you describe the stage of your product?
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['org_stage'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <select name="register-org_stage" id="org_stage" class="form-control bordered"  required="required">
                                          <?php
                                      $array = array("Prototype/demo or pilot in development","Working prototype/demo available/pilot complete","Ready for launch (pre-revenue)","Early stage revenue")
                                      ?>
                                      <option value="" <?php if($form->ERRORS && Input::get('register-org_stage','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                      <?php
                                        for($i=0;$i<count($array);$i++){?>
                                            <option value="<?=$array[$i];?>"
                                                    <?php if($form->ERRORS && Input::get('register-org_stage','post') == $array[$i]){ echo 'selected="selected"'; }?>><?=$array[$i];?> </option>
                                        <?php
                                        }
                                      ?>
                                    </select>
                              </div>
                            </div>
-->

<!--
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="business_model">What is the business model of your product
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['business_model'][0];}?> </span>
                                </label>
                                <div class="col-sm-9">

                                  <div class="row">
                                      <div class="col-sm-12">
-->
                                        <?php /* ?><select name="register-business_model[]" multiple size="4" id="business_model" class="form-control bordered"  required="required">
                                              <?php
                                          $array = array("Busines to Business","Busines to Client","Busines to Government","Other")
                                          ?>
                                          <?php
                                            for($i=0;$i<count($array);$i++){?>
                                                <option value="<?=$array[$i];?>"
                                                        <?php if($form->ERRORS && @in_array($array[$i],Input::get('register-business_model','post'))){ echo 'selected="selected"'; }?>><?=$array[$i];?> </option>
                                            <?php
                                            }
                                          ?>
                                        </select><?php */ ?>
<!--
                                        <?php
                                          $array = array("Busines to Business","Busines to Client","Busines to Government","Other")
                                          ?>
                                          <?php
                                            for($i=0;$i<count($array);$i++){?>
                                            <input type="checkbox" name="register-business_model[]" id="business_model" value="<?=$array[$i];?>" <?php if($form->ERRORS && @in_array($array[$i],Input::get('register-business_model','post'))){ echo 'checked'; }?>>&nbsp;<?=$array[$i];?><br>
                                            <?php
                                            }
                                          ?>
                                      </div>
                                  </div>
                              </div>
                            </div>
-->
                            <hr class="halfLine">
                            <!--  Alternative email girlsinict.rw@gmail.com-->

                            <div class="form-group">
                                <label class="control-label col-sm-12" for="business_tweet">How would you introduce yourself to the First Lady of your country? <br><small>(Up to 50 words)</small>
                                <span  class="req">*</span>
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['business_tweet'][0];}?> </span>
                                </label>
                              <div class="col-sm-12">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <textarea name="register-business_tweet" type="text" rows="3" cols="10" class="form-control rl_store" id="business_tweet" maxlength="" placeholder="Your text here" ><?php if($form->ERRORS && Input::get('register-business_tweet','post')){ echo Input::get('register-business_tweet','post'); }?></textarea>
                                          <div class="words">Total words: <span id="display_count">0</span> words. Words left: <span id="word_left">50</span></div>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-12" for="business_impact">What issue or challenge have you identified? <br><small>(Up to 50 words)</small>
                                <span  class="req">*</span>
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['business_impact'][0];}?> </span>
                                </label>
                              <div class="col-sm-12">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <textarea name="register-business_impact" type="text" rows="3" cols="10" class="form-control rl_store" id="business_impact" maxlength="" placeholder="Your text here" required="required"><?php if($form->ERRORS && Input::get('register-business_impact','post')){ echo Input::get('register-business_impact','post'); }?></textarea>
                                          <div class="words1">Total words: <span id="display_count1">0</span> words. Words left: <span id="word_left1">50</span></div>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-12" for="business_products">What is your solution to the identified challenge/issue? <br><small>(Up to 200 words)</small>
                                <span  class="req">*</span>
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['business_products'][0];}?> </span>
                                </label>
                              <div class="col-sm-12">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <textarea name="register-business_products" type="text" rows="3" cols="10" class="form-control rl_store" id="business_products" maxlength="" placeholder="Your text here.." ><?php if($form->ERRORS && Input::get('register-business_products','post')){ echo Input::get('register-business_products','post'); }?></textarea>
                                          <div class="words2">Total words: <span id="display_count2">0</span> words. Words left: <span id="word_left2">200</span></div>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-12" for="business_client">Who are your potential customers and partners? <br><small>(Up to 50 words)</small>
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['business_client'][0];}?> </span>
                                </label>
                              <div class="col-sm-12">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <textarea name="register-business_client" type="text" rows="3" cols="10" class="form-control rl_store" id="business_client" maxlength="200" placeholder="Your text here.." ><?php if($form->ERRORS && Input::get('register-business_client','post')){ echo Input::get('register-business_client','post'); }?></textarea>
                                          <div class="words3">Total words: <span id="display_count3">0</span> words. Words left: <span id="word_left3">50</span></div>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="business_sectors">Sectors - tick all that apply
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['business_sectors'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-12">
                                        <?php
                                          $array = array("Water Management","Energy","Transport","Housing","Sustainable Environments","Public Safety")
                                          ?>
                                          <?php
                                            for($i=0;$i<count($array);$i++){?>
                                            <input type="checkbox" name="register-business_sectors[]" id="business_sectors" value="<?=$array[$i];?>" <?php if($form->ERRORS && @in_array($array[$i],Input::get('register-business_sectors','post'))){ echo 'checked'; }?>>&nbsp;<?=$array[$i];?><br>
                                            <?php
                                            }
                                          ?>
                                      </div>
                                  </div>
                              </div>
                            </div>

<!--
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="target_markets">Target Markets - tick all that apply
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['target_markets'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
-->
<!--
                                  <div class="row">
                                      <div class="col-sm-12">
-->
                                        <?php /* ?>  <select name="register-target_markets[]" multiple size="6" id="target_markets" class="form-control bordered">
                                          <?php
                                      $array = array("Rwanda","Uganda","Kenya","Tanzania","Gabon","Chad","South Sudan","Senegal","Mali","CÔte d’Ivoire","Burkina Faso","Angola","Djibouti","Guinea","Benin","Continental");
                                        asort($array);
                                      ?>

                                      <?php
                                        foreach($array as $k=>$v){?>
                                            <option value="<?=$array[$i];?>"
                                                    <?php if($form->ERRORS && @in_array($v,Input::get('register-target_markets','post'))){ echo 'selected="selected"'; }?>><?=$v;?> </option>
                                        <?php
                                        }
                                      ?>
                                    </select><?php */ ?>
<!--
                                        <?php
                                          $array = array("Rwanda","Uganda","Kenya","Tanzania","Gabon","Chad","South Sudan","Senegal","Mali","CÔte d’Ivoire","Burkina Faso","Angola","Djibouti","Guinea","Benin","Continental");
                                          asort($array);
                                          ?>
                                          <?php
                                            foreach($array as $k=>$v){?>
                                            <input type="checkbox" name="register-target_markets[]" id="target_markets" value="<?=$v;?>" <?php if($form->ERRORS && @in_array($v,Input::get('register-target_markets','post'))){ echo 'checked'; }?>>&nbsp;<?=$v;?><br>
                                            <?php
                                            }
                                          ?>
                                      </div>
                                  </div>
                              </div>
                            </div>
-->

                            <div class="form-group">
                                <label class="control-label col-sm-12" for="tas_referrence">
                                    How did you hear about Ms Geek Africa 2017?
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['tas_referrence'][0];}?> </span>
                                </label>
                              <div class="col-sm-12">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <textarea name="register-tas_referrence" type="text" rows="3" cols="10" class="form-control rl_store" id="tas_referrence" maxlength="450" placeholder="Your text here.." ><?php if($form->ERRORS && Input::get('register-tas_referrence','post')){ echo Input::get('register-tas_referrence','post'); }?></textarea>
                                      </div>
                                  </div>
                              </div>
                            </div>

<!--
                            <div class="form-group">
                                <label class="control-label col-sm-12" for="tas_referrence">
                                    Any additional information you wish to add?
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['tas_referrence'][0];}?> </span>
                                </label>
                              <div class="col-sm-12">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <textarea name="register-tas_referrence" type="text" rows="3" cols="10" class="form-control rl_store" id="tas_referrence" maxlength="450" placeholder="Your text here.." ><?php if($form->ERRORS && Input::get('register-tas_referrence','post')){ echo Input::get('register-tas_referrence','post'); }?></textarea>
                                      </div>
                                  </div>
                              </div>
                            </div>
-->

                            <div class="form-group">
                              <div class="col-sm-12">
                                 <hr class="halfLine">
                              </div>
                            </div>
                            <?php if(!$session_subscriber->isLoggedIn()){?>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Captcha">Captcha
                                <span  class="req">*</span>
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ if(@$form->ERRORS_SCRIPT['check_capcha'][0] == 'MISMATCH'){ echo "Captcha doesn't match" ;}else{ echo @$form->ERRORS_SCRIPT['check_capcha'][0];}}?> </span>
                                </label>
                                  <div class="col-sm-9">
                                      <div class="row">
                                          <div class="col-sm-5">
                                                <div style="margin-bottom: 5px"><?=Functions::makeCapcha('register-capcha');?></div>
                                              <input type="text" class="form-control rl_store" name="register-check_capcha" id="Captcha" placeholder="Type the above text" required="required" maxlength="4"><span style="color: red; font-size: 12px; display: block"> </span>
                                          </div>
                                          <div class="col-sm-4 col-sm-offset-1">
                                              <br>
                                                <a class="text-default" href="#" data-toggle="tooltip" title="For your security, please type the words above into the entry box">What is Captcha ?</a>
                                              <script>
                                                $(document).ready(function(){
                                                    $('[data-toggle="tooltip"]').tooltip({
                                                        tooltipClass: "info-tooltip"
                                                    }); 
                                                });
                                              </script>
                                          </div>
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                 <hr class="halfLine">
                              </div>
                            </div>
                            <div class="form-group">
                                <hr class="halfLine">
                                <label class="control-label col-sm-12" style="color: #000; font-weight: 600; font-size: 13px;">Thank you. Kindly check over the information you have provided above to ensure it is correct. </label><br>
                                <label class="control-label" style="display: inline-block; cursor: pointer;color: #000; font-weight: 600; font-size: 13px; padding-left: 15px;" for="check" >
<!--
                                <input type="hidden" name="register-check">
                                <input onclick="agreeTcs('toggle')" type="checkbox" id="check" name="register-check" value="check"> 
-->
                                    By clicking submit, you hereby confirm that you agree to our 
                                </label>
                                <span data-toggle="modal" data-target="#tcsModal_1" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" >Terms and Conditions</span> and <br>&nbsp;&nbsp;&nbsp;
                                <span data-toggle="modal" data-target="#tcsModal_2" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" > Privacy Policy</span>
                                     <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['check'][0];}?> </span>
                             
                            </div>
                            <?php }?>

                            <div class="form-group">
                                <br>
                                <?php if($categ == "Delegate"){?>
                                <input type="hidden" name="register-pass_type" value="<?=$passtype?>">
                                <?php }else{?>
                                <input type="hidden" name="register-pass_type" value="<?=$categ?>">
                                <?php }?>
                                <input type="hidden" id="category-select" name="register-category" class="form-control bordered" value="<?=$categ?>" readonly="readonly" required>
                                <input type="hidden" name="request" value="register-new">
                                <input type="hidden" name="webToken" value="<?=Config::get('time/seconds');?>">
                                <input type="hidden" name="ftgreg_submited" value="1">
                                <input type="hidden" name="register-next_url" value="<?=DN?>/register/facethegorillas">
                                <input type="hidden" name="register-event_token" value="de220168957bd2ccff08f88e9939b95f">
                                <div class="col-sm-3">
                                    <span class="close pull-left">
                                        <?php if($session_subscriber->isLoggedIn()){?>
                                            <a href="<?=DN?>/net/group/member/category" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
                                        <?php }else{?>
                                            <a href="<?=DN?>/register" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
                                        <?php }?>
                                    </span>
                                </div>
                              <div class="col-sm-9">
                                  <button type="submit" class="submit_btn btn orange-bg white-color btn-default btn-md pull-right"> <img class="loading_icon" src="<?=DN?>/img/loading.gif" style="width: 14px; display: none"> <i class="glyphicon glyphicon-share"></i> Submit</button>
                              </div>

                                <script>

                                    var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
                                    var is_explorer = navigator.userAgent.indexOf('MSIE') > -1;
                                    var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;
                                    var is_safari = navigator.userAgent.indexOf("Safari") > -1;
                                    var is_opera = navigator.userAgent.toLowerCase().indexOf("op") > -1;
                                    if ((is_chrome)&&(is_safari)) {is_safari=false;}
                                    if ((is_chrome)&&(is_opera)) {is_chrome=false;}

                                    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
                                        $('.submit_btn').on('click', function(e){
                                             $('.submit_btn .loading_icon').css({'display': 'inline-block'});
                                             $('.submit_btn .glyphicon').css({'display': 'none'});
                                        });
                                    }else{
                                        $('#reg-form').on('submit', function(e){
                                             $('.submit_btn .loading_icon').css({'display': 'inline-block'});
                                             $('.submit_btn .glyphicon').css({'display': 'none'});
                                        });
                                    }

                                </script>

                            </div>


                            <?php }?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</section>
</form>
<div class="modal" id="tcsModal_1" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg container-fluid" role="document" >
    <div class="modal-content" style="margin-top: 100px;">
        <div class="container">
          <div class="modal-body">
             <?php include 'tcs.html';?>
          </div>
        </div>
    </div>
  </div>
</div>


<div class="modal" id="photoSpecModal_1" tabindex="1" role="dialog" aria-labelledby="photoSpecModal_1">
  <div class="modal-dialog modal-lg container-fluid" role="document" >
    <div class="modal-content" style="margin-top: 100px;">
        <div class="container">
          <div class="modal-body">
             <?php include 'photo_specs.html';?>
          </div>
        </div>
    </div>
  </div>
</div>

<script>

    $(function () {
        //Datemask dd/mm/yyyy
        $(".datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
     });

    $(function () {
        if($('#check').prop('checked')){
            agreeTcs('agree');
        }
     });

    $('.val_email').keyup(function (el) {
        var el_id='#'+this.id;
        var email = $(el_id).val();
        var result = $(el_id).data('result')
        if(!isEmail(email)){
            $(result).html("Invalid email");
        }else{
            $(result).html("");
        }
     });
    $('.val_email').change(function (el) {
        var el_id='#'+this.id;
        var email = $(el_id).val();
        var result = $(el_id).data('result')
        if(!isEmail(email)){
            $(result).html("Invalid email");
        }else{
            $(result).html("");
        }
     });
    $('.compare_onkeyup').change(function (el) {
        var el_id='#'+this.id;
        var field = $(el_id).data('field')
        var field1 = $(el_id).data('field1')
        var result = $(el_id).data('result')
        checkMatch(field,field1,result)
     });

    $('.compare_onkeyup').keyup(function (el) {
        var el_id='#'+this.id;
        var field = $(el_id).data('field')
        var field1 = $(el_id).data('field1')
        var result = $(el_id).data('result')
        checkMatch(field,field1,result)
     });
    $('.compare_onkeyup').change(function (el) {
        var el_id='#'+this.id;
        var field = $(el_id).data('field')
        var field1 = $(el_id).data('field1')
        var result = $(el_id).data('result')
        checkMatch(field,field1,result)
     });

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

  function agreeTcs(act){
      if(act == 'toggle'){
          if($(".submit_btn").hasClass('activated')){
              $(".submit_btn").removeClass('activated');
              $(".submit_btn").prop('disabled', true);
              $('#check').prop('checked',false)
          }else{
              $(".submit_btn").addClass('activated');
              $(".submit_btn").prop('disabled', false);
              $('#check').prop('checked',true)
          }
      }else if(act == 'agree'){
          $(".submit_btn").addClass('activated');
          $(".submit_btn").prop('disabled', false);
          $('#check').prop('checked',true)
      }
  }

  function checkMatch(field,field1,result){
      var value = $(field).val();
      var value1 = $(field1).val();
      if(value!=value1){
          $(result).html("Email doesn't match");
      }else{
          $(result).html("");
      }
  }
  function changePrice(field,field1){
      var value = $(field).val();
      if(value=="Rwanda"){
          $('.showLocalPrice').show();
          $('.showInternationalPrice').hide();
      }else{
          $('.showLocalPrice').hide();
          $('.showInternationalPrice').show();
      }
  }
  function Checkother1(field,field1){
      var value = $(field).val();
      var name = $(field).attr('name');
      var name1 = $(field1).attr('name');
    if(value=="Other"){
        if(!$(field).hasClass('swapped')){
            $(field).addClass('swapped');
            $(field1).prop('disabled', false);
            var input =$(field1);
            input[0].selectionStart = input[0].selectionEnd = input.val().length;
        }
    }else{
        if($(field).hasClass('swapped')){
            $(field1).val("");
            $(field).removeClass('swapped');
            $(field1).prop('disabled', true);
        }else{
            $(field1).val("");
            $(field1).prop('disabled', true);
        }
    }
  }
  function CheckBookType(field,field1){
      var value = $(field).val();
      var name = $(field).attr('name');
      var name1 = $(field1).attr('name');
    if(value=="Group"){
        if(!$(field).hasClass('swapped')){
            $(field).addClass('swapped');
            $(field1).val("2");
            $(field1).prop('disabled', false);
            var input =$(field1);
            input[0].selectionStart = input[0].selectionEnd = input.val().length;
        }
    }else{
        if($(field).hasClass('swapped')){
            $(field1).val("1");
            $(field).removeClass('swapped');
            $(field1).prop('disabled', true);
        }else{
            $(field1).val("1");
            $(field1).prop('disabled', true);
        }
    }
  }
  function citizenshipDoc(field){
      var value = $(field).val();
     if(value == "Rwanda"){
         $('#document_type option[value="ID card"]').show();
     }else{
         $('#document_type option[value="ID card"]').hide();
     }
  }


    $(".field-telephone").intlTelInput({
        defaultCountry: '',
        preferredCountries: [ ''],
//        preferredCountries: [ "rw","ug","ke","ss","bi","tz","cd","ng",'us'],
        utilsScript: "<?=DNADMIN?>/plugins/intlTelInput/build/js/utils.js"

    });

    // Country flags
    $(document).ready(function(){
        //var DN = $('#appdata').data('dn');
        $('.select2-country').select2();
        function formatCountry (country) {
            if (!country.id) { return country.text; }
            var $country = $(
                '<span><img src="<?=DNADMIN?>/plugins/country_flags/16/' + country.element.id.toString() + '" class="img-flag" /> ' + country.text + '</span>'
            );
            return $country;
        };

        $(".select2-country").select2({
            templateResult: formatCountry,
            templateSelection: formatCountry
        });
    });


// sdsd
$(document).ready(function(){
  $('.rl_store').on('keyup change', function(e) {
    if($('.rl_store').hasClass('error')){
      if(this.id){
        $('#'+this.id).removeClass('error');
      }
    }
    if (localStorage) {
      var el = $(this).attr("name");
      var value = $("[name='"+el+"']" ).val();
      localStorage.setItem(el,value);
    }
  });
});

$(document).ready(function(){
  if (localStorage) {
    $('.rl_store').each(function(index,el){
      var el = $(this).attr("name");
      $("[name='"+el+"']" ).val(localStorage.getItem(el));
    });
  }
});

<?=include'words.js';?>
</script>

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
    .words, .words1, .words2, .words3{
        display: none;
    }
    .display-none{
        display: none;
    }
    .words, .words1, .words2, .words3{
        color: #c10b43;
        font-size: 12px;
        float: right;
        padding: 6px 0;
    /*    display:none;*/
    }
</style>
