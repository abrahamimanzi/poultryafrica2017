<style>
    .panel.panel-reg{
        border: 0;
        background: #fff;
    }
    .reg-body .reg-header h2{
        margin: 0px;
    }  
    .modal-body{
        position:relative;
     }
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
    
</style>
<div class="nav_fixedspace"></div>
<!--
<div class="guest_room_div">
	<img src="assets/img/home/default1.png" class="img img-responsive">
</div>
-->
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-6">
			  <br/>
<!--            <img class="img img-responsive" src="<?=DN?>/img/holder1.jpg"/>-->
			<hr style="border-top: 0.5px solid #000 height: 1px;">
			<ol class="glance text-default">
				<li><img class="li-icon img img-responsive" src="<?=DNADMIN?>/icon/more.png"> Find more of what you're looking for with <?=EVENT?> Search.</li>
				<li><img class="li-icon img img-responsive" src="<?=DNADMIN?>/icon/news.png"> See updates from the <?=EVENT?> News Feed.</li>
				<li><img class="li-icon img img-responsive" src="<?=DNADMIN?>/icon/share.png"> Share what's happening in your Timeline.</li>
			</ol>
			<!-- <img class="img img-responsive" src="<?=DNADMIN?>/icon/capcha.png"/> -->
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="signup_form_container">
				<!-- multistep form -->
				<form method="post" id="login_form" autocomplete="nope">
				  <!-- fieldsets -->
			      <br/>
				  <br/>
				  <br/>

				  	<fieldset id="login_personal_data">
				    <div class="panel login_panel">
                      
    					<!-- <div class="panel-heading">
                            <div class="app_logo">
                                <img src="<?=DNADMIN?>/icon/tas-logo.png" class="app_icon img" style="width: 135px;">
                            </div>
    					</div> -->
					   <div class="panel-body">
                           <hr style="margin-top: 0px;">
                           
                            <?php if($form->ERRORS == true ){?>
                                <h6 class="st-subtitle error bg-danger"><span class="">Username or Password don't match, Please retry.</span></h6>
                            <?php }else{?>
                                    <h6 id="error_message" style='display: none'><span id="error_lo"></span><span id="no_visible"> Username or Password don't match, Please retry.</span></h6>
                            <?php }?>
                            <div class="login_fieldset">
                                <div class="field">
                                    <div class="input-group ">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                                      <input id="login_username" class="data_in one required" name="login_username" type="text"  placeholder="Username" required aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <br>
                                <div class="field">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                      <input id="login_password" class="data_in two required" name="login_password" type="password" placeholder="Password" required  placeholder="Username" required aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="hidden" name="request" value="participant_login" />
                            <input type="hidden" class="hidden" name="webToken" value="true" />
                            
                            <div class="row">
                                <div class="col-sm-12 text-center submit_btn_div">
                                    <p class="text-default" style="font-size: 13px; text-align: left; padding: 0 20px">
                                By logging, you hereby confirm that you agree to our
                                        <span data-toggle="modal" data-target="#tcsModal_1" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" >Terms and Conditions</span> and 
                                        <span data-toggle="modal" data-target="#tcsModal_2" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" > Privacy Policy</span>
                                     <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['check'][0];}?> </span></p>
                                    <button id="loginValidBtn" data-fieldset="#login_form"  class="btn validation_btn login_btn submit action-button" name="loginValidBtn" type="submit"><span class="btn_icon glyphicon glyphicon-log-in"></span> <span class="btn_label">Login</span></button>
                                    <?php if(isset($form->ERRORS_SCRIPT['username'])){?>
                                        <script>
                                            $(document).ready(function(){
                                                $('#login_username').addClass('error');
                                            });
                                        </script>
                                    <?php }?>
                                    <?php if(isset($form->ERRORS_SCRIPT['password'])){?>
                                        <script>
                                            $(document).ready(function(){
                                                $('#login_password').addClass('error');
                                            });
                                        </script>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6">
<!--                                    <label class="remeber_label"><input type="checkbox" name="login_remember" value="on"> Remeber me</label>-->
                                </div>
                            </div>
                           
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="<?=DN?>/login/forgotpassword">Forgot Your Password? </a>
                                </div>
                            </div>
                        </div>
                    </div>
                        
					</fieldset>
				</form><br><br>
			</div>
			<div class="clearfix" style="margin: 0;"></div>
			
			
		</div>
		<br/>
		<br/>
		<br/>
		

	</div>
</div>

<style>
	.li-icon{
		display: inline;
		width: 35px;
		margin-right: 10px;
	}
	.glance{
		list-style-type: none;
		margin: 15px 0;
	}
	.glance li{
		margin: 15px 0;
	}
</style>
