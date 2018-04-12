
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
                             <h2 class="text-center reg-title" style="font-size: 20px; color: #fff">Exhibitor application form</h2>
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
                                             
                                            
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">EXHIBITION <span class="req"></span></h4>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            
                            <label class="control-label" style="padding-top:20px"> All <span class="req" style="font-size: 16px;">*</span> fields are mandatory  </label>
                             
                            <br> 
                            <br> 
                            
                            
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="exhibition_type">Exhibition Type
                                <span  class="req">*</span> 
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['exhibition_type'][0];}?> </span>
                             </label>
                              <div class="col-sm-9">
                                <select name="register-exhibition_type" id="exhibition_type" class="form-control bordered" required="required">
                                    <option value="" selected="selected" <?php if($form->ERRORS && Input::get('register-exhibition_type','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                    <option value="Smart Experience Area" <?php if($form->ERRORS && Input::get('register-exhibition_type','post') == 'Smart Experience Area'){ echo 'selected="selected"';}?>>Smart City Experience</option>
                                    <option value="General Area" <?php if($form->ERRORS && Input::get('register-exhibition_type','post') == 'General Area'){ echo 'selected="selected"';}?>>General exhibition Area</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="exhibition_rownum"> Row Number
                                <span  class="req">*</span> 
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['exhibition_rownum'][0];}?> </span>
                             </label>
                              <div class="col-sm-9">
                                <select name="register-exhibition_rownum" id="exhibition_rownum" class="form-control bordered" required="required">
                                    <option value="" <?php if($form->ERRORS && Input::get('register-exhibition_rownum','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                    <option value="Standard" <?php if($form->ERRORS && Input::get('register-exhibition_rownum','post') == 'Standard'){ echo 'selected="selected"';}?>>Standard Package</option>
                                    <option value="Premium" <?php if($form->ERRORS && Input::get('register-exhibition_rownum','post') == 'Premium'){ echo 'selected="selected"';}?>>Premium Package</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="exhibition_numbooth">Number of Booth
                                <span  class="req">*</span> 
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['exhibition_numbooth'][0];}?> </span>
                             </label>
                              <div class="col-sm-9">
                                <select name="register-exhibition_numbooth" id="exhibition_numbooth" class="form-control bordered" required="required">
                                        <option value="" <?php if($form->ERRORS && Input::get('register-exhibition_numbooth','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                    <?php for($i=1;$i<11;$i++){?>
                                        <option value="<?=$i?>" <?php if($form->ERRORS && Input::get('register-exhibition_numbooth','post') == $i){ echo 'selected="selected"';}?>><?=$i?></option>
                                    <?php }?>
                                    </select>
                                </div>
                            </div>
                            
                             <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">CONTACT INFORMATION <span class="req"></span></h4>
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
                                    <option value="H.E." <?php if($form->ERRORS && Input::get('register-title','post') == 'H.E.'){ echo 'selected="selected"';}?>>H.E.</option>
                                    <option value="Hon." <?php if($form->ERRORS && Input::get('register-title','post') == 'Hon.'){ echo 'selected="selected"';}?>>Hon.</option>
                                    <option value="Amb." <?php if($form->ERRORS && Input::get('register-title','post') == 'Amb.'){ echo 'selected="selected"';}?>>Amb.</option>
                                    <option value="Prof." <?php if($form->ERRORS && Input::get('register-title','post') == 'Prof.'){ echo 'selected="selected"';}?>>Prof.</option>
                                    <option value="Dr." <?php if($form->ERRORS && Input::get('register-title','post') == 'Dr.'){ echo 'selected="selected"';}?>>Dr.</option>
                                    <option value="Mr." <?php if($form->ERRORS && Input::get('register-title','post') == 'Mr.'){ echo 'selected="selected"';}?>>Mr.</option>
                                    <option value="Mrs." <?php if($form->ERRORS && Input::get('register-title','post') == 'Mrs.'){ echo 'selected="selected"';}?>>Mrs.</option>
                                    <option value="Ms." <?php if($form->ERRORS && Input::get('register-title','post') == 'Ms.'){ echo 'selected="selected"';}?>>Ms.</option>

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
                                <input type="text" class="form-control" name="register-othername" id="othername" placeholder="Other Name (Optional)" 
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
                                          <input type="tel" class="form-control field-telephone" name="register-telephone" id="tel1"
                                                 <?php if($form->ERRORS && Input::get('register-telephone','post')){?> value="<?php echo Input::get('register-telephone','post');?>" <?php }?> required="required" maxlength="20">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="tel2">Office  telephone </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <input type="tel" class="form-control field-telephone" name="register-telephone_office" id="tel2"
                                                 <?php if($form->ERRORS && Input::get('register-telephone_office','post')){?> value="<?php echo Input::get('register-telephone_office','post');?>" <?php }?> maxlength="20">
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
                                        <option value="" <?php if($form->ERRORS && Input::get('register-gender','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                        <option value="Female" <?php if($form->ERRORS && Input::get('register-gender','post') == 'Female'){ echo 'selected="selected"';}?>>Female</option>
                                        <option value="Male" <?php if($form->ERRORS && Input::get('register-gender','post') == 'Male'){ echo 'selected="selected"';}?>>Male</option>
                                  </select>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">ORGANIZATION <span class="req"></span></h4>
                                 <hr class="halfLine">
                              </div>
                            </div>
                             
                            <div class="form-group">
                            <label class="control-label col-sm-3" for="company"><?php if($categ=="Media"){ echo 'Media House';}else{ echo 'Organization Name';}?> 
                                <span  class="req">*</span> 
                                <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['company'][0];}?> </span>
                            </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-company" id="company" placeholder="Enter <?php if($categ=="Media"){ echo 'Media House';}else{ echo 'Organization Name';}?> "
                                       <?php if($form->ERRORS && Input::get('register-company','post')){?> value="<?php echo Input::get('register-company','post');?>" <?php }?>  required="required" maxlength="40">
                              </div>
                            </div>
                                 
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="orgcategory"><?php if($categ=="Media"){ echo 'Media Category ';}else{ echo 'Organization Category ';}?> 
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
                            </div>
                                            
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="jobtitle"><?php if($categ=="Media"){ echo 'Position';}else{ echo 'Job Title';}?>
                                <span  class="req">*</span> 
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['jobtitle'][0];}?> </span>
                             </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-6">
                                        <select name="register-jobtitle" id="jobtitle" class="form-control bordered" onchange="Checkother1(this,'#jobtitle1');" required="required">
                                            <?php  Functions::getJobTitles($form->ERRORS,Input::get('register-jobtitle','post'),$categ);?>
                                        </select>
                                      </div>
                                      <div class="col-sm-6">
                                           <input type="text" class="form-control" name="register-jobtitle1" id="jobtitle1" placeholder="Please specify"
                                                  <?php if($form->ERRORS && Input::get('register-jobtitle','post') == 'Other'){?> 
                                                  value="<?php echo Input::get('register-jobtitle1','post');?>" 
                                                  <?php }?>
                                                  <?php if($form->ERRORS && Input::get('register-jobtitle','post') != 'Other'){?> disabled="disabled" <?php }?> 
                                                  <?php if(!$form->ERRORS){?> disabled="disabled" <?php }?>  maxlength="30" required="required">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="industry">Industry
                                <span  class="req">*</span> 
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['industry'][0];}?> </span>
                             </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <select name="register-industry" id="industry" class="form-control bordered" onchange="Checkother1(this,'#industry1');" required="required">
                                              
                                                <option value="" <?php if($form->ERRORS && Input::get('register-industry','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                              
                                                <option value="Academics/ Education" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Academics/ Education'){ echo 'selected="selected"';}?>>Academics/ Education</option>
                                              
                                                <option value="Advertising/Public Relations" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Advertising/Public Relations'){ echo 'selected="selected"';}?>>Advertising/Public Relations</option>
                                              
                                                <option value="Agricultural Services &amp; Products" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Agricultural Services &amp; Products'){ echo 'selected="selected"';}?>>Agricultural Services &amp; Products</option>
                                              
                                                <option value="Attorneys and law" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Attorneys and law'){ echo 'selected="selected"';}?>>Attorneys and law</option>
                                              
                                                <option value="Clergy &amp; Religious Organizations" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Clergy &amp; Religious Organizations'){ echo 'selected="selected"';}?>>Clergy &amp; Religious Organizations </option>
                                              
                                                <option value="Clothing and Textiles" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Clothing and Textiles'){ echo 'selected="selected"';}?>>Clothing and Textiles</option>
                                              
                                                <option value="Defence and security" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Defence and security'){ echo 'selected="selected"';}?>>Defence and security</option>
                                              
                                                <option value="Energy and Natural Resources and Environment" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Energy and Natural Resources and Environment'){ echo 'selected="selected"';}?>>Energy and Natural Resources and Environment</option>
                                              
                                                <option value="Entertainment Industry" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Entertainment Industry'){ echo 'selected="selected"';}?>>Entertainment Industry</option>
                                              
                                                <option value="Financial and Commercial Services" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Financial and Commercial Services'){ echo 'selected="selected"';}?>>Financial and Commercial Services</option>
                                              
                                                <option value="Hospitality and Tourism" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Hospitality and Tourism'){ echo 'selected="selected"';}?>>Hospitality and Tourism</option>
                                              
                                                <option value="Healthcare services" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Healthcare services'){ echo 'selected="selected"';}?>>Healthcare services</option>
                                              
                                                <option value="ICT" <?php if($form->ERRORS && Input::get('register-industry','post') == 'ICT'){ echo 'selected="selected"';}?>>ICT</option>
                                              
                                                <option value="Infrastructure" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Infrastructure'){ echo 'selected="selected"';}?>>Infrastructure</option>
                                              
                                                <option value="Logistics and Transportation" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Logistics and Transportation'){ echo 'selected="selected"';}?>>Logistics and Transportation</option>
                                              
                                                <option value="Manufacturing" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Manufacturing'){ echo 'selected="selected"';}?>>Manufacturing</option>
                                              
                                                <option value="Mining" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Mining'){ echo 'selected="selected"';}?>>Mining</option>
                                              
                                                <option value="Media" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Media'){ echo 'selected="selected"';}?>>Media </option>
                                              
                                                <option value="Non-profits, Foundations &amp; Philanthropists" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Non-profits, Foundations &amp; Philanthropists'){ echo 'selected="selected"';}?>>Non-profits, Foundations &amp; Philanthropists</option>
                                              
                                                <option value="Printing &amp; Publishing" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Printing &amp; Publishing'){ echo 'selected="selected"';}?>>Printing &amp; Publishing</option>
                                              
                                                <option value="Private Equity &amp; Investment Firms" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Private Equity &amp; Investment Firms'){ echo 'selected="selected"';}?>>Private Equity &amp; Investment Firms</option>
                                              
                                                <option value="Real Estate" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Real Estate'){ echo 'selected="selected"';}?>>Real Estate</option>
                                              
                                                <option value="Religious Organizations/Clergy" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Religious Organizations/Clergy'){ echo 'selected="selected"';}?>>Religious Organizations/Clergy</option>
                                              
                                                <option value="Sports, Professional" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Sports, Professional'){ echo 'selected="selected"';}?>>Sports, Professional</option>
                                                
                                              <option value="Telecommunications" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Telecommunications'){ echo 'selected="selected"';}?>>Telecommunications </option>
                                                
                                              <option value="Other" <?php if($form->ERRORS && Input::get('register-industry','post') == 'Other'){ echo 'selected="selected"';}?>>Other </option>
                                            </select>
                                      </div>
                                      <div class="col-sm-6">
                                           <input type="text" class="form-control" name="register-industry1" id="industry1" placeholder="Please specify"
                                                  <?php if($form->ERRORS && Input::get('register-industry','post') == 'Other'){?> 
                                                  value="<?php echo Input::get('register-industry1','post');?>" <?php }?>
                                                  <?php if($form->ERRORS && Input::get('register-industry','post') != 'Other'){?> disabled="disabled" <?php }?> 
                                                  <?php if(!$form->ERRORS){?> disabled="disabled" <?php }?>  maxlength="30" required="required">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="orgaddress">Physical Address:
                                    <span  class="req">*</span> 
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['orgaddress'][0];}?> </span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['org_country'][0];}?> </span>
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['org_city'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <input type="text" class="form-control" name="register-orgaddress" id="orgaddress" placeholder="Enter your organization physical address"
                                       <?php if($form->ERRORS && Input::get('register-orgaddress','post')){?> value="<?php echo Input::get('register-orgaddress','post');?>" <?php }?> maxlength="100" required="required" style="margin-bottom: 15px;">
                                      </div>
                                      <div class="col-sm-6">
                                          <select class="select2-country js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="register-org_country" id="org-country" placeholder="Country" required="required">
                                            <option value="" <?php if($form->ERRORS && Input::get('register-org_country','post') == ''){ echo 'selected="selected"';}?>>[--Select Country--]</option>
                                            <?php 
                                            $countryArray =Country::getArrays();
                                            foreach($countryArray as $country_ID=>$country_data){
                                                $country_data = (object)$country_data;?>
                                                <option value="<?php echo $country_data->name; ?>" id="<?php echo $country_data->icon; ?>" 
                                                        
                                                        <?php if($form->ERRORS && Input::get('register-org_country','post')==$country_data->name){ echo 'selected';}?>
                                                        
                                                        <?php if(!$form->ERRORS && $country_data->code == ""){ echo 'selected';}?>>
                                                        <span></span>
                                                    <?php echo $country_data->name; ?></option>
                                                <?php
                                            }?>
                                          </select>
                                      </div>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="register-org_city" id="org-city" placeholder="City" <?php if($form->ERRORS && Input::get('register-org_city','post')){?> value="<?php echo Input::get('register-org_city','post');?>" <?php }?> required="required" maxlength="30">
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="website">Website:</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="register-website" id="website" placeholder="Enter your Website"
                                       <?php if($form->ERRORS && Input::get('register-website','post')){?> value="<?php echo Input::get('register-website','post');?>" <?php }?> maxlength="100">
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
                                        <input type="text" class="form-control" name="register-residence_city" id="address-city" placeholder="City of residence" <?php if($form->ERRORS && Input::get('register-residence_city','post')){?> value="<?php echo Input::get('register-residence_city','post');?>" <?php }?> required="required" maxlength="30">
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
                                              
                                        </select>
                                      </div>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="register-document_number" id="town" placeholder="Document number"
                                               <?php if($form->ERRORS && Input::get('register-document_number','post')){?> value="<?php echo Input::get('register-document_number','post');?>" <?php }?> required="required" maxlength="20">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            
<!--
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">RESIZED PHOTO <span class="req"></span></h4>
                                 <hr class="halfLine">
                              </div>
                            </div>
-->
                                         
                            <?php // include 'photo_field'.PL;?>  
                            <br>  

<!--
                             <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">OTHER INFORMATION <span class="req"></span></h4>
                                 <hr class="halfLine">
                              </div>
                            </div>
-->
                            
                             
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
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="special_request">Short summary on topics of interest or speciality, <small>(Up to 500 characters)</small> 
                                <span  class="req">*</span> 
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['special_request'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <textarea name="register-special_request" type="text" rows="3" cols="10" class="form-control" id="special_request" maxlength="500" placeholder="<?php if($categ == "Media"){ echo 'eg. Mayors Interviews, sessions cover,...';}?> <?php if($categ == "Speaker"){ echo 'Proposal Summary';}?>" required="required"><?php if($form->ERRORS && Input::get('register-special_request','post')){ echo Input::get('register-special_request','post'); }?></textarea>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="register-file">Upload your Full proposal and paper on topic <small>(PDF file only)</small>
                                <span  class="req">*</span> 
                                  <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo 'Re-Choose the attachment';}?> </span>
                                </label>
                                  <div class="col-sm-9">
                                      <div class="row">
                                          <div class="col-sm-12">
                                              <input type="file" name="register-file" placeholder="Proposal" required="required">
                                          </div>
                                      </div>
                                  </div>
                            </div>

                            <br> 
                            
                              <?php 
                                $discount = 0;
                                if($_invitation_source && $subscateg_data->discount){
                                    $discount = $subscateg_data->discount;
                                }

                                $gross_local = Functions::passPrice($passtype,'Local');
                                $net_local = Functions::discount($gross_local,$discount);
                                $gross_other = Functions::passPrice($passtype,'Other');
                                $net_other = Functions::discount($gross_other,$discount);
                              ?>

                            <div class="form-group">
                              <div class="col-sm-12">
                                  <h4 class="fieldset-header">PACKAGE 
                                      <span class="req"><span style="color: green"><?php if($discount){?> | <?=$discount?>% discount <?php }?></span></span>
                                  </h4>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            
                            <div class="form-group" >
                                <label class="control-label col-sm-3" for="location">Pass type 
                                <span  class="req">*</span> 
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['package_type'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-6"> 
                                           <input type="hidden" name="register-package_type" class="form-control bordered" value="<?=$passtype?>">
                                          <span type="text" class="form-control" style="background-color: #eee;"><?=$passtype?></span>
                                      </div>
                                      <div class="col-sm-6">
                                          <input type="hidden" class="form-control" name="register-pass_price" id="town" placeholder="Document number"  value="$ 200" readonly="readonly" >
                                          
                                          <?php if(!$form->ERRORS){?>
                                                <span type="text" class="form-control showInternationalPrice" style="display: none; background-color: #eee;">$ <?=$net_other;?></span>
                                                <span type="text" class="form-control showLocalPrice" style="background-color: #eee;">Rwf <?=$net_local;?> </span>
                                          <?php }?>
                                          <?php if($form->ERRORS && Input::get('register-residence_country','post') == 'Rwanda'){
                                          ?>
                                                <span type="text" class="form-control showInternationalPrice" style="display: none; background-color: #eee;">$ <?=$net_other;?></span>
                                                <span type="text" class="form-control showLocalPrice" style="background-color: #eee;">Rwf <?=$net_local;?> </span>
                                            <?php }?>
                                          
                                          <?php if($form->ERRORS && Input::get('register-residence_country','post') != 'Rwanda'){?>
                                                <span type="text" class="form-control showInternationalPrice" style="background-color: #eee;">Usd <?=$net_other;?></span>
                                                <span type="text" class="form-control showLocalPrice" style="display: none; background-color: #eee;">Rwf <?=$net_local;?> </span>
                                          <?php }?>

                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group" >
                                <label class="control-label col-sm-3" for="payment_method">Payment Method 
                                <span  class="req">*</span> 
                                    <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['payment_method'][0];}?> </span>
                                </label>
                              <div class="col-sm-9">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <select name="register-payment_method" id="payment_method" class="form-control bordered" required="required">
                                            <?php
                                              $prfx = explode("-", $categ);
                                              $prfx = $prfx[0];
                                              if($_invitation_source && $subscateg_data->plan=='Free'){?>
                                            <option value="Complimentary" <?php if($form->ERRORS && Input::get('register-payment_method','post') == 'Complimentary'){ echo 'selected="selected"';}?>> Complimentary </option>
                                               <?php }elseif($prfx=='Group'){?>
                                                <option value="Group owner" <?php if($form->ERRORS && Input::get('register-payment_method','post') == 'Group owner'){ echo 'selected="selected"';}?>> Payment will be arranged by group owner</option>
                                               <?php }else{?>
                                            <!-- <option value="" <?php if($form->ERRORS && Input::get('register-payment_method','post') == ''){ echo 'selected="selected"';}?>> [choose yours] </option> -->
                                            <option value="Group owner" <?php if($form->ERRORS && Input::get('register-payment_method','post') == 'Group owner'){ echo 'selected="selected"';}?>> Payment will be arranged by group owner</option>
                                            <!-- <option value="Debit/Credit Card" <?php if($form->ERRORS && Input::get('register-payment_method','post') == 'Debit/Credit Card'){ echo 'selected="selected"';}?>> Debit/Credit Card (Online)</option>
                                            <option value="Bank-Transfer" <?php if($form->ERRORS && Input::get('register-payment_method','post') == 'Bank Transfer'){ echo 'selected="selected"';}?>> Bank Transfer or direct deposit</option> -->
                                               <?php }?>

                                          </select>
                                      </div>
                                  </div>
                              </div>
                            </div>
                                    <!-- <div class="form-group" >
                                        <label class="control-label col-sm-3" for="payment_method">Payment Method 
                                        <span  class="req">*</span> 
                                            <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['payment_method'][0];}?> </span>
                                        </label>
                                      <div class="col-sm-9">
                                          <div class="row">
                                              <div class="col-sm-12">
                                                   <select name="register-payment_method" id="payment_method" class="form-control bordered" required="required">
                                                     <?php if($_invitation_source && $subscateg_data->plan=='Free'){?>
                                                    <option value="Complementary" <?php if($form->ERRORS && Input::get('register-payment_method','post') == 'Complementary'){ echo 'selected="selected"';}?>> Complementary </option>
                                                       <?php }else{?>
                                                    <option value="" <?php if($form->ERRORS && Input::get('register-payment_method','post') == ''){ echo 'selected="selected"';}?>> [choose yours] </option>
                                                    <option value="Debit/Credit Card" <?php if($form->ERRORS && Input::get('register-payment_method','post') == 'Debit/Credit Card'){ echo 'selected="selected"';}?>> Debit/Credit Card (Online)</option>
                                                    <option value="Bank-Transfer" <?php if($form->ERRORS && Input::get('register-payment_method','post') == 'Bank Transfer'){ echo 'selected="selected"';}?>> Bank Transfer or direct deposit</option>
                                                       <?php }?>
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                    </div> -->
                           
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
                                          <div class="col-sm-4 col-sm-offset-1">
                                              <br>
                                                <a class="text-default" href="#" data-toggle="tooltip" title="For your security, please type the words above into the entry box"><span class="fa fa-long-arrow-left"></span> What's This ?</a>
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
                                <input type="hidden" name="register-pass_type" value="<?=$categ?>">
                                <input type="hidden" id="category-select" name="register-category" class="form-control bordered" value="<?=$categ?>" readonly="readonly" required>
                                <input type="hidden" name="request" value="register-new">
                                <input type="hidden" name="webToken" value="<?=Config::get('time/seconds');?>">
                                <input type="hidden" name="register_submited" value="1">
                                <input type="hidden" name="register-next_url" value="<?=DN?>/register">
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
//        preferredCountries: [ "rw","ug","ke","ss","bi","tz","cd","ng",'us'],
        preferredCountries: [ ''],
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
