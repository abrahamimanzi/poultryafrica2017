    
<style>  
    .custom_div th{
        font-size: 13px;
    }
    .custom_div tr{
        font-size: 13px;
    }
    .custom_div .modal{
        padding-top: 100px;
    }
    .custom_input{
        border-color: transparent;
    }
    .p_free{
        border-left: 3px solid red!important;
    }
    .td_span{
        border-bottom-color: transparent!important;
        border-left-color: transparent!important
    }
    .table>tbody>tr>td{
        vertical-align: inherit!important;
    }
</style>

<?php 
    $payment_pending = false;
    $total_net_rwf = 0;
    $total_net_usd = 0;
?>

<div class="panel panel-reg" >
    <form method="post" id="reg-form" class="form-horizontal" enctype="multipart/form-data">

        <div class="reg-header" style="background: #fff; border-bottom: 1px solid #ddd; padding: 15px 30px;">
            <h2 style="font-size: 18px">Group Registration Invite</h2>
        </div>

        <div class="panel-body" style="padding: 30px 30px 15px 30px;">
            
            <?php if($form->ERRORS){?>
                <p style="border-left: 4px solid red; padding-left: 10px">
                    <span style="display: inline-block; font-size: 13px; color: red;  border-radius: 10px; padding: 5px 0px; "> 
                        <b>ERROR</b>: Invitation could not be sent.<br>
                        <?php if(@$form->ERRORS_SCRIPT['firstname'][0]){ echo @$form->ERRORS_SCRIPT['firstname'][0].'<br>'; }?>
                        <?php if(@$form->ERRORS_SCRIPT['lastname'][0]){ echo @$form->ERRORS_SCRIPT['lastname'][0].'<br>'; }?>
                        <?php if(@$form->ERRORS_SCRIPT['email'][0]=='NOTUNIQUE'){ echo 'Entered email is already used'; }?>
                    </span>
                </p>
            <?php }else{?>
                <!-- <p>
                    To invite a group member to register, enter first name, last name, email address, and click on "Send".
                    Each group member needs to register individually.
                    When they register, they receive a confirmation email allowing them to go to the fast track registration desk onsite and collect their badge.
                    All passes must be collected personally as a photo will be taken at the registration desk for access control/security requirements.
                </p> -->
                <p>Welcome to your Transform Africa Summit group booking portal designed to make it easier for your group to register and attend Africa’s largest ICT summit. </p>

                <p>Invite group members below by filling in their first name, last name & email address along with the appropriate pass type for the individual and then press send. </p>

                <p>An invite will be sent to the individual to complete their registration. </p>

                <p>Please note that the attendance column will appear as pending after they are invited whilst registration is processed. </p>

                <p>Once confirmed, this field will read ‘Confirmed’  
                </p>

                <p>
                    <b>Please note:</b><br>
                    •   The Status column will appear as pending after they are invited whilst registration is processed.<br> 
                    •   For purchased tickets, invitees will not be asked to pay for their passes when booking as a group. The payment is due from the group administrator. <br>
                    •   An invoice can be downloaded from the summary table below at any time when your group registration is complete.<br>
                    •   Please note that closing your group and processing an invoice for payment will not allow further registrations under your group.<br>
                    •   A new group account can be created for you for additional registrations by sending an email to enquiries@smartafrica.org.<br>

                </p>

                <p>
                    <b>Status Explained</b><br>
                    1.  Not registered – The invitee has not registered <br>
                    2.  Registered / Pending Confirmation – The invitee has registered and the registration is being processed <br>
                    3.  Confirmed – The invitees registration has been approved to attend the summit <br>
                    4.  Not approved – The invitees registration has not been approved to attend the summit <br>

                </p>
            <?php }?>
            
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed no-margin" style="margin-bottom: 65px">
                            <thead class="tb_head">
                                <tr>
                                    <th>ID</th>
                                    <th>Pass type</th>
                                    <th>Status</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <!-- <th>Payment</th> -->
                                    <th>Attendance</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                  
                                    $subscategTable = new \SubscriberCategory();
                                    $subscategTable->selectQuery("SELECT* FROM `subscriber_category` WHERE `subscriber_ID`=?",array($session_subscriber_ID));
                                  

                                    if($subscategTable->count()){
                                        foreach($subscategTable->data() as $subscateg_data){
                                            $subscateg_ID = $subscateg_data->ID;
                                            $categTable = new ParticipantCategory();
                                            $categTable->selectQuery("SELECT * FROM `events_participant_category` WHERE `ID`='{$subscateg_data->category_ID}'");
                                            $categ_data = $categTable->first();
                                            $not_seen = $subscateg_data->size-$subscateg_data->seen;
                                            
                                            $subscategInviteTable = new \SubscriberCategoryInvite();
                                            $subscategInviteTable->selectQuery("SELECT* FROM `subscriber_category_invite` WHERE `subscateg_ID`='{$subscateg_ID}'");

                                            if(!$subscategInviteTable->count() || $subscateg_data->size>$subscateg_data->seen){
                                                
                                                for($f=0;$f<$not_seen;$f++){
                                                    
                                                    $subscategInviteTable->insert(
                                                        array(
                                                            'subscriber_ID'=>$session_subscriber_ID,
                                                            'subscateg_ID'=>$subscateg_ID,
                                                            'category_ID'=>$categ_data->ID,
                                                            'status'=>'Available'
                                                    ));
                                                    SubscriberCategoryController::logAction('ticketSeen',$subscateg_ID); 
                                                }
                                                $subscategInviteTable = new \SubscriberCategoryInvite();
                                                $subscategInviteTable->selectQuery("SELECT* FROM `subscriber_category_invite` WHERE `subscateg_ID`='{$subscateg_ID}'");
                                            }
                                            
                                            if($subscategInviteTable->count()){
                                                foreach($subscategInviteTable->data() as $subscateginvite_data){ 
                                                    $invite_ID = $subscateginvite_data->ID;
                                                    if($subscateginvite_data->status == 'Registered'){
                                                        $participant_ID = $subscateginvite_data->participant_ID;
                                                        $participantTable = new Participant();
                                                        $participantTable->selectQuery("SELECT * FROM `events_participant` WHERE `ID`='{$participant_ID}'");
                                                        $participant_data = $participantTable->first(); 
                                                    }
                                                    ?>
                                  
                                                    <?php if($subscateginvite_data->status == 'Invited' || $subscateginvite_data->status == 'Registered'){?>
                                                        <tr style="font-size: 14px">
                                                            <td><?=$subscateginvite_data->ID?></td>
                                                            <td><?=$categ_data->name?> <span style="color: #21ab82; font-size: 10px"><?php if($subscateg_data->discount){?> | <?=$subscateg_data->discount?>% discount <?php }?></span></td>
                                                            <td><?=$subscateginvite_data->status?></td>
                                                            <?php if($subscateginvite_data->status == 'Registered'){?>
                                                                <td><?=$participant_data->firstname?></td>
                                                                <td><?=$participant_data->lastname?></td>
                                                            <?php }else{?>
                                                                <td><?=$subscateginvite_data->firstname?></td>
                                                                <td><?=$subscateginvite_data->lastname?></td>
                                                            <?php }?>
                                                            <td><?=$subscateginvite_data->email?></td>

                                                            <!-- <td>
                                                                <?php if($subscateginvite_data->status == 'Registered'){?>
                                                                    <?php echo $participant_data->payment_state?>
                                                                <?php }else{?>
                                                                    <?=$subscateg_data->plan?>
                                                                <?php }?>
                                                            </td> -->

                                                            <td>
                                                                <?php if($subscateginvite_data->status == 'Registered'){?>
                                                                    <?php echo $participant_data->state?>
                                                                <?php }?>
                                                            </td>
                                                            <td class="text-center">
                                                                <form method="post" id="reg-form" class="form-horizontal">
                                                                    <input type="hidden" name="webToken" value="1482407981">
                                                                    <input type="hidden" name="invite_submited" value="1">
                                                                    <input type="hidden" name="invite-id" value="<?=$subscateginvite_data->ID?>">
                                                                    <input type="hidden" name="request" value="invite-actions">
                                                                    <input type="hidden" name="invite-event_token" value="de220168957bd2ccff08f88e9939b95f">
                                                                    
                                                                    <?php if($subscateginvite_data->status == 'Invited'){?>
                                                                    <!-- <button type="submit" name="inviteCancelBtn" class="btn green-bg dark-color btn-default btn-xs pull-right"> Cancel </button> -->
                                                                    <?php }?>
                                                                    
                                                                    <?php if($subscateginvite_data->status == 'Registered' && $participant_data->payment_state=='Pending'){
                                                        
                                                                        $this_discount = $subscateg_data->discount;
                                                                        $gross_rwf = Functions::passPrice($participant_data->pass_type,"Local");
                                                                        $gross_usd = Functions::passPrice($participant_data->pass_type,"Other");
                                                        
                                                                        
                                                                        
                                                                        $net_rwf = Functions::discount($gross_rwf,$this_discount);
                                                                        $net_usd = Functions::discount($gross_usd,$this_discount);
                                                        
                                                                        $total_net_rwf += $net_rwf;
                                                                        $total_net_usd += $net_usd;
                                                        
                                                                        $payment_pending = true;?>
                                                                    <?php }?>
                                                                    
                                                                </form>
                                                                <form method="post" id="reg-form" class="form-horizontal">
                                                                    <input value="<?=$subscateginvite_data->firstname?>" name="invite-firstname" type="hidden" class="form-control rl_store custom_input input-md" placeholder="First name">
                                                                    <input value="<?=$subscateginvite_data->lastname?>" type="hidden" name="invite-lastname" class="form-control rl_store custom_input input-md" placeholder="Last name">
                                                                    <input value="<?=$subscateginvite_data->email?>" type="hidden" name="invite-email" class="form-control rl_store custom_input input-md" placeholder="Email">
                                                                    <input type="hidden" name="webToken" value="1482407981">
                                                                    <input type="hidden" name="invite_submited" value="1">
                                                                    <input type="hidden" name="invite-id" value="<?=$subscateginvite_data->ID?>">
                                                                    <input type="hidden" name="request" value="invite-actions">
                                                                    <input type="hidden" name="invite-event_token" value="de220168957bd2ccff08f88e9939b95f">
                                                                    
                                                                    <?php if($subscateginvite_data->status == 'Invited'){?>
                                                                    <button type="submit" name="inviteReminderBtn" class="btn green-bg dark-color btn-success btn-xs pull-right"> Reminder </button>
                                                                    <?php }?>
                                                                    
                                                                    <?php if($subscateginvite_data->status == 'Registered' && $participant_data->payment_state=='Pending'){
                                                        
                                                                        $this_discount = $subscateg_data->discount;
                                                                        $gross_rwf = Functions::passPrice($participant_data->pass_type,"Local");
                                                                        $gross_usd = Functions::passPrice($participant_data->pass_type,"Other");
                                                        
                                                                        
                                                                        
                                                                        $net_rwf = Functions::discount($gross_rwf,$this_discount);
                                                                        $net_usd = Functions::discount($gross_usd,$this_discount);
                                                        
                                                                        // $total_net_rwf += $net_rwf;
                                                                        // $total_net_usd += $net_usd;
                                                        
                                                                        $payment_pending = true;?>
                                                                    <?php }?>
                                                                    
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php }else{?>
                                                        <tr style="font-size: 14px;">
                                                            <form method="post" id="reg-form" class="form-horizontal">
                                                                <td><?=$subscateginvite_data->ID?></td>
                                                                <td>
                                                                    <?=$categ_data->name?> 
                                                                    <span style="color: #21ab82; font-size: 10px">
                                                                        <?php 
                                                                        if($subscateg_data->discount){?> 
                                                                        | <?=$subscateg_data->discount?>% discount 
                                                                        <?php }?>
                                                                    </span>
                                                                </td>
                                                                <td><?=$subscateginvite_data->status?></td>
                                                                <td>
                                                                    <input id="<?=$invite_ID?>_invite-firstname" name="invite-firstname" class="form-control rl_store custom_input input-md" placeholder="First name">
                                                                </td>
                                                                <td>
                                                                    <input id="<?=$invite_ID?>_invite-lastname" name="invite-lastname" class="form-control rl_store custom_input input-md" placeholder="Last name">
                                                                </td>
                                                                <td>
                                                                    <input id="<?=$invite_ID?>_invite-email" name="invite-email" class="form-control rl_store custom_input input-md" placeholder="Email">
                                                                </td>

                                                                <!-- <td>
                                                                <?php if($subscateginvite_data->status == 'Registered'){?>
                                                                    <?php echo $participant_data->payment_state?>
                                                                <?php }else{?>
                                                                    <?=$subscateg_data->plan?>
                                                                <?php }?>
                                                                </td> -->

                                                                <td></td>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="webToken" value="1482407981">
                                                                    <input type="hidden" name="invite_submited" value="1">
                                                                    <input type="hidden" name="invite-id" value="<?=$subscateginvite_data->ID?>">
                                                                    <input type="hidden" name="request" value="invite-actions">
                                                                    <input type="hidden" name="invite-event_token" value="de220168957bd2ccff08f88e9939b95f">

                                                                    <button type="submit" name="inviteSendBtn" class="submit_btn btn orange-bg white-color btn-default btn-xs pull-right"> Send <i class="fa fa-share-square-o"></i>
                                                                    </button>
                                                                </td>
                                                             </form>
                                                        </tr>
                                                    <?php }?>
                                                <?php                                                             
                                                }
                                            }
                                        }?>
                                  
                                        <?php if($payment_pending){?>
                                            <tr style="font-size: 14px;">
                                                <td colspan="4" class="td_span"></td>
                                                <td colspan="1">Total in USD: <?=$total_net_usd?></td>
                                                <td colspan="1">Total in RWF: <?=$total_net_rwf?></td>
                                                <td colspan="4">
                                                    <div class="btn-group pull-right">
                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fa fa-shopping-cart"></i>  Pay now <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu" style="padding: 10px 10px; border-radius: 0px">
                                                        <li><a href="<?=DN?>/payment-rwf/group/<?=$session_subscriber_data->ID?>">Pay in RWF</a></li>
                                                        <li><a href="<?=DN?>/payment-usd/group/<?=$session_subscriber_data->ID?>">Pay in USD</a></li>
                                                      </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }?>
                                  
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="reg-header" style="background: #fff; padding: 15px 0px;">
                        <h2 style="font-size: 15px"><i class="fa fa-angle-double-right"></i> Payment history</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed no-margin">
                          <thead class="tb_head">
                              <tr>
                                <th style="width: 200px">Date</th>
                                <th style="width: 190px">Paid Amount</th>
                                <th style="width: 200px">Payment Ref</th>
                                <th style="width: 160px">Transaction N.</th>
                                <th></th>
                                <th style="width: 140px">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $participantItemTable = new \ParticipantItem();
                                $participantItemTable->selectQuery("SELECT* FROM `events_participant_item` WHERE `host_ID`=? ORDER BY `ID` DESC",array($session_subscriber_data->group_ID));
                                if($participantItemTable->count()){
                                    foreach($participantItemTable->data() as $participant_item_data){?>
                                    <tr>
                                        <td><?=Dates::get('D, d-m-Y, H:i:s',$participant_item_data->payment_date);?></td>
                                        <td><?=$participant_item_data->currency?> <?=$participant_item_data->amount?></td>
                                        <td><?=$participant_item_data->payment_rn?></td>
                                        <td><?=$participant_item_data->transaction_number?></td>
                                        <td></td>
                                        <td>
                                            <a href="<?=DN?>/receipt-group/<?=$participant_item_data->token?>" type="button" class="btn btn-default btn-xs pull-right" target="_blank">
                                              <i class="fa fa-print"></i>  Receipt
                                              </a>
                                        </td>
                                    </tr>
                                  <?php }?>
                              <?php }?>
                           </tbody>
                        </table>
                    </div>
                    
                </div>
                <br>
            </div>
        </div>
    </form>
</div>

<script>
$(document).ready(function(){
	$('.rl_store').on('keyup change', function(e) {
		if($('.rl_store').hasClass('error')){
			if(this.id){
				$('#'+this.id).removeClass('error');
			}
		}
		if (localStorage) {
			var el = this.id;
			var value = $('#'+this.id).val();
			localStorage.setItem('#'+el,value);
		}
	});
});

$(document).ready(function(){
	if (localStorage) {
		$('.rl_store').each(function(index,el){
			var el = this.id;
			$('#'+this.id).val(localStorage.getItem('#'+el));
		});
	}
});
</script>