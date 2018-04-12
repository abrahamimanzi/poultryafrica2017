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
<section class="reg-body open bg5" style="padding-top: 0px;padding-bottom: 0px;">
                <br>
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                    <div class="panel panel-reg" >
                        
                        <div class="reg-header" style="">
                            <h2 class="text-center reg-title" style="font-size: 18px; color: #cc0000;width: 100%;"> <?=EVENT?> <?=$passtype?></h2>
                        </div>
                        
                        <div class="panel-body" style="padding: 5px 30px 15px 30px;">
                          
                        <?php if($form->ERRORS && (@$form->ERRORS_SCRIPT['email'][0] == 'NOTUNIQUE' || @$form->ERRORS_SCRIPT['document_number'][0] == 'NOTUNIQUE')){
                            include 'email_used'.PL;
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
                            <label class="control-label" style="padding-top:20px">Our transportion team will help you book your particular car. Please fill in the form below and we will be in touch shortly.</label>
                            <label class="control-label" style="padding-top:20px"> All <span class="req" style="font-size: 16px;">*</span> fields are mandatory  </label>
                             
                            <br> 
                            
                             <div class="form-group">
                              <div class="col-sm-12"><?php $car = Input::get('passtype','get'); ?>
                                  <h4 class="fieldset-header">CONTACT INFORMATION <span class="req"></span> 
                                    <span class="pull-right text-uppercase text-success">
                                      <!--<?=$car?>-->
                                      <?php
                                        switch ($car) {
                                          case 'bmw-i700-2017':
                                            echo "BMW i700 - 2017";
                                            $car = 'BMW i700 - 2017';
                                            break;
                                          
                                          case 'toyota-land-cruiser-300-2017':
                                            echo "Toyota land cruiser 300 - 2017";
                                            $car = 'Toyota land cruiser 300 - 2017';
                                            break;
                                          
                                          case 'toyota-prado-2015':
                                            echo "Toyota prado 2015";
                                            $car = 'Toyota prado 2015';
                                            break;
                                          
                                          case 'mercedes-benz-m-series-2015':
                                            echo "Mercedes benz m-series 2015";
                                            $car = 'Mercedes benz m-series 2015';
                                            break;
                                          
                                          case 'toyota-rav-4':
                                            echo "Toyota RAV 4";
                                            $car = 'Toyota RAV 4';
                                            break;
                                          
                                          case 'toyota-hiace-12seater-van':
                                            echo "Toyota Hiace 12seater Van";
                                            $car = 'Toyota Hiace 12seater Van';
                                            break;
                                          
                                          default:
                                            echo $car;
                                            break;
                                        }
                                      ?>
                                    </span>
                                  </h4>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="title">Title
                                <span  class="req">*</span> 
                             </label>
                              <div class="col-sm-9">
                                <select name="register-title" id="title" class="form-control bordered" required="required">
                                    <option value="" <?php if($form->ERRORS && Input::get('register-title','post') == ''){ echo 'selected="selected"';}?>>[--Select--]</option>
                                    <?php
                                      $array = array("H.E.","Hon.","Prof.","Dr.","Mr.","Mrs.","Ms.")
                                      ?> 
                                    <?php 
                                        for($i=0;$i<count($array);$i++){?>
                                            <option value="<?=$array[$i];?>" <?php if($form->ERRORS && Input::get('register-title','post') == $array[$i]){ echo 'selected="selected"'; }?>><?=$array[$i];?> </option>
                                        <?php
                                        } 
                                      ?>
                                </select>
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
                                       <?php if($form->ERRORS && Input::get('register-firstname','post')){?> value="<?php echo Input::get('register-firstname','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->firstname?>"<?php }?>  required="required" maxlength="30">
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
                                       <?php if($form->ERRORS && Input::get('register-lastname','post')){?> value="<?php echo Input::get('register-lastname','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->lastname?>"<?php }?>  required="required" maxlength="30">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="othername">Other Name 
                                    <span class="details" style="color: #f68d29">As per your Passport/ID</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['othername'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-othername" id="othername" placeholder="Other Name (Optional)" 
                                       <?php if($form->ERRORS && Input::get('register-othername','post')){?> value="<?php echo Input::get('register-othername','post');?>" <?php }?> maxlength="30">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="code">Registration ID
                                    <span class="details" style="color: #f68d29">As per your TAS2017 Registration ID</span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['code'][0];}?> </span>
                              </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-code" id="code" placeholder="Registration id" 
                                       <?php if($form->ERRORS && Input::get('register-code','post')){?> value="<?php echo Input::get('register-code','post');?>" <?php }?> maxlength="30">
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
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">Reservation details <span class="req"></span></h4>
                                 <hr class="halfLine">
                              </div>
                            </div>
                             
                            <!-- <div class="form-group">
                              <label class="control-label col-sm-3" for="checkin">Check-in date 
                                <span  class="req">*</span> 
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['checkin'][0];}?> </span>
                              </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-checkin" id="checkin" placeholder="Enter checkin "
                                  <?php if($form->ERRORS && Input::get('register-checkin','post')){?> value="<?php echo Input::get('register-checkin','post');?>" <?php }?>  required="required" maxlength="40">
                              </div>
                            </div> -->

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="checkin">Check-in date
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['checkin'][0];}?> </span>
                                </label>
                                <div class="col-sm-9">
                                      <input type="text" class="datemask form-control" name="register-checkin" id="checkin" placeholder="dd/mm/yyyy"
                                       <?php if($form->ERRORS && Input::get('register-checkin','post')){?> value="<?php echo Input::get('register-checkin','post');?>" <?php }?> data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                </div>
                              <!-- <div class="col-sm-9">
                                  <div class="input-group">
                                      <label class="input-group-addon" for="checkin">
                                        <i class="fa fa-calendar"></i>
                                      </label>
                                      <input type="text" class="datemask form-control" name="register-checkin" id="checkin" placeholder="dd/mm/yyyy"
                                       <?php if($form->ERRORS && Input::get('register-checkin','post')){?> value="<?php echo Input::get('register-checkin','post');?>" <?php }?> data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                    </div>
                              </div> -->
                            </div> 

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="checkout">Check-out date
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['checkout'][0];}?> </span>
                                </label>
                                <div class="col-sm-9">
                                        <input type="text" class="datemask form-control" name="register-checkout" id="checkout" placeholder="dd/mm/yyyy"
                                         <?php if($form->ERRORS && Input::get('register-checkout','post')){?> value="<?php echo Input::get('register-checkout','post');?>" <?php }?> data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                </div>
                              <!-- <div class="col-sm-9">
                                  <div class="input-group">
                                      <label class="input-group-addon" for="checkout">
                                        <i class="fa fa-calendar"></i>
                                      </label>
                                      <input type="text" class="datemask form-control" name="register-checkout" id="checkout" placeholder="dd/mm/yyyy"
                                       <?php if($form->ERRORS && Input::get('register-checkout','post')){?> value="<?php echo Input::get('register-checkout','post');?>" <?php }?> data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                    </div>
                              </div> -->
                            </div> 
                             
                            <!-- <div class="form-group">
                              <label class="control-label col-sm-3" for="checkout">Check-out date 
                                <span  class="req">*</span> 
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['checkout'][0];}?> </span>
                              </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-checkout" id="checkout" placeholder="Enter checkout "
                                  <?php if($form->ERRORS && Input::get('register-checkout','post')){?> value="<?php echo Input::get('register-checkout','post');?>" <?php }?>  required="required" maxlength="40">
                              </div>
                            </div> -->

                             
                            <!-- <div class="form-group">
                              <label class="control-label col-sm-3" for="rooms">No. of rooms 
                                <span  class="req">*</span> 
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['rooms'][0];}?> </span>
                              </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-rooms" id="rooms" placeholder="Enter rooms "
                                  <?php if($form->ERRORS && Input::get('register-rooms','post')){?> value="<?php echo Input::get('register-rooms','post');?>" <?php }?>  required="required" maxlength="40">
                              </div>
                            </div> -->
                                 
                            <!-- <div class="form-group">
                                <label class="control-label col-sm-3" for="rooms">No. of rooms
                                    <span  class="req">*</span> 
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['rooms'][0];}?> </span>
                                </label>
                                <div class="col-sm-9">
                                    <select name="register-rooms" id="rooms" class="form-control bordered" onchange="Checkrooms1(this,'#rooms1');" required="required">
                                       
                                        <option value="" <?php if($form->ERRORS && Input::get('register-rooms','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                        
                                        <option value="1" <?php if($form->ERRORS && Input::get('register-rooms','post') == '1'){ echo 'selected="selected"';}?>>1</option>

                                        <option value="2" <?php if($form->ERRORS && Input::get('register-rooms','post') == '2'){ echo 'selected="selected"';}?>>2 </option>
                                        
                                        <option value="3" <?php if($form->ERRORS && Input::get('register-rooms','post') == '3'){ echo 'selected="selected"';}?>>3</option>

                                        <option value="4" <?php if($form->ERRORS && Input::get('register-rooms','post') == '4'){ echo 'selected="selected"';}?>>4 </option>
                                        
                                        <option value="5" <?php if($form->ERRORS && Input::get('register-rooms','post') == '5'){ echo 'selected="selected"';}?>>5</option>

                                    </select>
                                </div>
                            </div>

                            <div id="roomsdetails">
                              

                            </div> -->
                             
                            <!-- <div class="form-group">
                              <label class="control-label col-sm-3" for="adults">No. of adults 
                                <span  class="req">*</span> 
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['adults'][0];}?> </span>
                              </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-adults" id="adults" placeholder="Enter adults "
                                  <?php if($form->ERRORS && Input::get('register-adults','post')){?> value="<?php echo Input::get('register-adults','post');?>" <?php }?>  required="required" maxlength="40">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-3" for="children">No. of children 
                                <span  class="req">*</span> 
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['children'][0];}?> </span>
                              </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-children" id="children" placeholder="Enter children "
                                  <?php if($form->ERRORS && Input::get('register-children','post')){?> value="<?php echo Input::get('register-children','post');?>" <?php }?>  required="required" maxlength="40">
                              </div>
                            </div> -->

                            <div class="form-group">
                              <label class="control-label col-sm-3" for="promocode">Promocode 
                                <span  class="req"></span>
                                <span class="details" style="color: #f68d29">Refer to your registration email for the code</span> 
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['promocode'][0];}?> </span>
                              </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-promocode" id="promocode" placeholder="Enter promocode"
                                  <?php if($form->ERRORS && Input::get('register-promocode','post')){?> value="<?php echo Input::get('register-promocode','post');?>" <?php }?>  required="required" maxlength="40">
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="additional_info">Additional information <br><small>(Up to 1400 characters)</small> 
                                  <span  class="req"></span> 
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['register-additional_info'][0];}?> </span>
                                </label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-sm-12">
                                          <textarea name="register-additional_info" type="text" rows="3" cols="10" class="form-control rl_store" id="additional_info" maxlength="1400" placeholder="Your Text here" ><?php if($form->ERRORS && Input::get('register-additional_info','post')){ echo Input::get('register-additional_info','post'); }?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                 
                            <!-- <div class="form-group">
                                <label class="control-label col-sm-3" for="orgcategory">Organization Category
                                    <span  class="req">*</span> 
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['orgcategory'][0];}?> </span>
                                </label>
                                  <div class="col-sm-9">
                                      <div class="row">
                                        <div class="col-sm-6">
                                            <select name="register-orgcategory" id="orgcategory" class="form-control bordered" onchange="Checkother1(this,'#orgcategory1');" required="required">
                                               
                                                <option value="" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                                
                                                <option value="Academia" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Academia'){ echo 'selected="selected"';}?>>Academia</option>

                                                <option value="Civil Society" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Civil Society'){ echo 'selected="selected"';}?>>Civil Society </option>


                                                <option value="International Organization" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'International Organization'){ echo 'selected="selected"';}?>>International Organization</option>

                                                <option value="Non-Governmental Organization" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Non-Governmental Organization'){ echo 'selected="selected"';}?>>Non-Governmental Organization</option>

                                                <option value="Non-Profit Organization" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Non-Profit Organization'){ echo 'selected="selected"';}?>>Non-Profit Organization</option>

                                                <option value="Private/Corporation" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Private/Corporation'){ echo 'selected="selected"';}?>>Private/Corporation</option>

                                                <option value="Regional Organization" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Regional Organization'){ echo 'selected="selected"';}?>>Regional Organization </option>
                                                
                                                
                                                <option value="Other" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Other'){ echo 'selected="selected"';}?>>Other </option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                           <input type="text" class="form-control" name="register-orgcategory1" id="orgcategory1" placeholder="Please specify" 
                                                  <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Other'){?> 
                                                  value="<?php echo Input::get('register-orgcategory1','post');?>" <?php }?>
                                                  <?php if($form->ERRORS && Input::get('register-orgcategory','post') != 'Other'){?> disabled="disabled" <?php }?>
                                                  <?php if(!$form->ERRORS){?> disabled="disabled" <?php }?> maxlength="30" required="required">
                                        </div>
                                      </div>
                                  </div>
                            </div> -->
                            
                           
                            
                             
                            


                            
<!--
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">RESIZED PHOTO <span class="req"></span></h4>
                                 <hr class="halfLine">
                              </div>
                            </div>
-->
                                         
                            <?php // include 'photo_field'.PL;?>  
<!--                            <br>  -->

<!--
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="registration_type"  style="padding-right: 5px">Registration Type    <span  class="req">*</span> 
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['registration_type'][0];}?> </span>
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['group_size'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <select name="register-registration_type" id="registration_type" class="form-control bordered" onchange="CheckBookType(this,'#group_size');"  required="required">
                                              <option value="Single" <?php if($form->ERRORS && Input::get('register-booking_type','post') == 'Single'){ echo 'selected="selected"';}?>>Single</option>
                                              
                                            <?php if(!$session_subscriber->isLoggedIn()){?> 
                                              <option value="Group" <?php if($form->ERRORS && Input::get('register-document_type','post') == 'Group'){ echo 'selected="selected"';}?>>Group</option>
                                            <?php }?>
                                        </select>
                                      </div>
                                      <div class="col-sm-6">
                                        <input type="number" class="form-control" id="group_size" name="register-group_size" placeholder="Group Size"
                                               <?php if($form->ERRORS && Input::get('register-group_size','post')){?> value="<?php echo Input::get('register-group_size','post');?>" <?php }else{ echo 'value="1"';}?> required="required" maxlength="3" disabled="disabled">
                                      </div>
                                  </div>
                              </div>
                            </div>
-->
                            
                            <div class="form-group" >
                              <hr class="halfLine"/>
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
                                              <input type="text" class="form-control" name="register-check_capcha" id="Captcha" placeholder="Type the above text" required="required" maxlength="4"><span style="color: red; font-size: 12px; display: block"> </span>
                                          </div>
                                      </div>
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
                                <!-- <hr class="halfLine">
                                <label class="control-label" style="display: inline-block; cursor: pointer;color: #000; font-weight: 600; font-size: 13px; padding-left: 15px;" for="check" >
                                <input type="hidden" name="register-check">
                                <input onclick="agreeTcs('toggle')" type="checkbox" id="check" name="register-check" value="check"> 
                                    By clicking submit you agree to the 
                                </label>
                                <span data-toggle="modal" data-target="#tcsModal_1" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 13px" >Terms and Conditions</span>
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['check'][0];}?> </span>
                              -->
                            </div>
                            <?php }?>
                            <div class="form-group">
                                <label class="control-label col-sm-12" style="color: #000; font-weight: 600; font-size: 13px;">Thank you. Kindly check over the information you have provided above to ensure it is correct. </label><br><br>
                            </div>
                            
                            <div class="form-group">
                                <br>
                                <input type="hidden" name="register-car" value="<?=$car?>">
                                <input type="hidden" name="register-pass_type" value="<?=$categ?>">
                                <input type="hidden" id="category-select" name="register-category" class="form-control bordered" value="<?=$categ?>" readonly="readonly" required>
                                <input type="hidden" name="request" value="register-new">
                                <!-- <input type="hidden" name="request" value="register-accommodation"> -->
                                <input type="hidden" name="webToken" value="<?=Config::get('time/seconds');?>">
                                <input type="hidden" name="register_submited" value="1">
                                <input type="hidden" name="register-next_url" value="<?=DN?>/register/accommadation">
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
  function Checkrooms1 (field,field1) {
    var value = $(field).val();
    var name = $(field).attr('name');
    var name1 = $(field1).attr('name');
    if(value=="1"){
      $( "#roomsdetails" ).load( "<?=DN?>/views/rooms/room-01.php" );
      // $( "#roomsdetails" ).replaceWith( "<p id='roomsdetails'>Test</p>" );
    } else if(value=="2") {
      $( "#roomsdetails" ).load( "<?=DN?>/views/rooms/room-02.php" );
    } else if(value=="3") {
      $( "#roomsdetails" ).load( "<?=DN?>/views/rooms/room-03.php" );
    } else if(value=="4") {
      $( "#roomsdetails" ).load( "<?=DN?>/views/rooms/room-04.php" );
    } else if(value=="5") {
      $( "#roomsdetails" ).load( "<?=DN?>/views/rooms/room-05.php" );
    } else{
      $( "#roomsdetails" ).replaceWith( "<div id='roomsdetails'></div>" );
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
        preferredCountries: [ "rw","ug","ke","ss","bi","tz","cd","ng",'us'],
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
</script>


