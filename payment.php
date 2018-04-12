<?php
include 'admin/core/init.php';

$_invitation_source = false;
$_group_payment = false;
$_bank_transfer = false;
$_group_owner = false;
$discount = 0;

$request = '';
    
if(Input::checkInput('id','get','1')){
    $_id = Input::get('id','get');
    if(Input::checkInput('request','get','1')){
        $request = Input::get('request','get');
    }
    switch($request){
        case 'group':
            if($session_subscriber->isLoggedIn() && $session_subscriber_ID == $_id){ // GROUPE PAYMENT
                $_group_payment = true;  
                $participantTable = new \Participant();
                
                $participantTable->selectQuery("SELECT `code`,`payment_rn`,`payment_method`,`residence_country`,`firstname`,`lastname`,`othername`,`email`,`amount`,`payment_state`,`category`,`pass_type`,`state`,`host_account_ID`,`invite_ID` FROM `events_participant` WHERE `host_account_ID`=? AND `payment_state`='Pending' ORDER BY `ID` DESC",array($_id));

                if($participantTable->count()){
                    
                }else{
                    Session::put('error','You do not have any pending payment.');
                    Redirect::to(DN.'/net/');
                }
                
            }else{
                Redirect::to(DN.'/404');
            }
        break;
        default:
            $participant_ID = $_id;
            $participantTable = new \Participant();
            $participantTable->selectQuery("SELECT `code`,`payment_rn`,`payment_method`,`firstname`,`lastname`,`othername`,`email`,`amount`,`payment_state`,`category`,`pass_type`,`state`,`invite_ID` FROM `events_participant` WHERE `code`=? ORDER BY `ID` DESC LIMIT 1",array($participant_ID));

            if($participantTable->count()){
                $participant_data = $participantTable->first();
                if($participant_data->payment_method == "Bank-Transfer"){
                    $_bank_transfer = true;
                }
                if($participant_data->payment_method == "Group owner"){
                    $_group_owner = true;
                }
                if($participant_data->code == $participant_ID){ 

                    //* IF INVITATION //
                    if($participant_data->invite_ID){
                        $subscategInviteTable = new \SubscriberCategoryInvite();
                        $subscategInviteTable->selectQuery("SELECT* FROM `subscriber_category_invite` WHERE `ID`=?",array($participant_data->invite_ID));

                        if($subscategInviteTable->count()){
                            $_invitation_source = true;
                            $invite_ID = $participant_data->invite_ID;
                            $subscateginvite_data = $subscategInviteTable->first(); 

                            $subscategory_ID = $subscateginvite_data->subscateg_ID;
                            $subscategTable = new \SubscriberCategory();
                            $subscategTable->selectQuery("SELECT* FROM `subscriber_category` WHERE `ID`='{$subscategory_ID}'");
                            $subscateg_data = $subscategTable->first();
                        }
                    }
                    //* END INVITATION //

                    if(!Validate::paidPass($participant_data->category)){
                        Redirect::to(DN.'/success/'.$participant_data->code.'/registered'); 
                    }

                    if($participant_data->payment_state == "Free"){
                         Redirect::to(DN.'/success/'.$participant_data->code.'/success'); 
                    }
                    if($participant_data->state == "Denied"){
                         Redirect::to(DN.'/success/'.$participant_data->code.'/denied'); 
                    }
                    if($participant_data->payment_state == "Confirmed"){
                         Redirect::to(DN.'/success/'.$participant_data->code.'/confirmed'); 
                    }
                }else{
                    Redirect::to(DN.'/404'); 
                }
            }else{
                Redirect::to(DN.'/404');
            }
        break;
    }
}else{
    Redirect::to(DN.'/404');
}

$form["ERRORS"] = false;
$form = (object)$form;
$message='';

if(Input::checkInput('webToken','post','1') && Input::checkInput('request','post','1')){
	$task = Input::get('request','post');
	switch($task){
            
		case 'payment-new':
            
            switch($request){
                case 'group':
                    
                    $prfx = 'payment-';
                    foreach($_POST as $index=>$val){
                        $ar = explode($prfx,$index);
                        if(count($ar)){
                            $_POST[end($ar)] = $val;
                            unset($_POST[$index]);
                        }
                    }
                    $validate = new \Validate();
                    
                    $payment_host_ID = $session_subscriber_data->group_ID;
                    $payment_Ref = $validate->autoUniqueMaker('events_participant_item','payment_rn',$payment_host_ID,'-');
                    
                    $net_total = 0;
                    $seconds = \Config::get('time/seconds');   
                    $participantTable = new \Participant();
                    $participantTable->selectQuery("SELECT `ID`,`code`,`payment_rn`,`payment_method`,`residence_country`,`firstname`,`lastname`,`othername`,`email`,`amount`,`payment_state`,`category`,`pass_type`,`state`,`host_account_ID`,`invite_ID` FROM `events_participant` WHERE `host_account_ID`=? AND `payment_state`='Pending' ORDER BY `ID` DESC",array($_id));
                    $memberIDs = array();
                    foreach($participantTable->data() as $participant_data){
                        
                        $memberIDs[] = $participant_data->ID;
                        $memberDatas[$participant_data->ID] = $participant_data;
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
                        
                        $memberOtherDatas[$participant_data->ID] = (object)array('unit_price'=>$gross,'amount'=>$net,'discount'=>$discount);
                    }
                    
                    if($net_total){
                        
                    // submit payment 3 party

                    /**
                     * The following are the variables passed from the checkout process
                     */
                    $amount = $net_total;
                    // $currency = $currency_str;
                    // $orderInfo = 'ORDER34525';
                    $orderInfo = $participant_data->payment_rn;// Order Info
                    $MerchTxnRef = $orderInfo.'-'.(Payment::generateMerchTxnRef()); // See functions.php file


                    $accountData = array(
                        // 'merchant_id' => 'TESTBOK000012', // for test card
                        // 'access_code' => '50FCA8A5', // for test card
                        // 'secret'      => 'BC401C3D6FC5543520214035DF2D4E07' // for test card

                        'merchant_id' => 'BOK000012',
                        'access_code' => '3C0E3AD5',
                        'secret'      => '1B9E304F9DE0EBA10596AB23C6BE09D5'
                    );
                    // multi currency

                    if($currency_str=="RWF"){
                        // $_PDT['vpc_Currency']=646;
                        $mult = 1;
                    }elseif($currency_str=="USD"){
                        // $_PDT['vpc_Currency']=840;
                        $mult = 100;
                    }

                    /**
                     * Query data..
                     */
                    $queryData = array(
                        'vpc_AccessCode' => $accountData['access_code'],
                        'vpc_Merchant' => $accountData['merchant_id'],

                        'vpc_Amount' => ($amount * $mult), // Multiplying by 100 to convert to the smallest unit
                        'vpc_OrderInfo' => $orderInfo,

                        // 'vpc_MerchTxnRef' => Payment::generateMerchTxnRef(), // See functions.php file
                        'vpc_MerchTxnRef' => $MerchTxnRef,
                        'vpc_Command' => 'pay',
                        'vpc_Currency' => $currency_str,
                        'vpc_Locale' => 'en',
                        'vpc_Version' => 1,
                        // 'vpc_ReturnURL' => 'http://127.0.0.1/bk-payment/return_url.php',
                        'vpc_ReturnURL' => (DN.'/success/'.$participant_data->code.'/success'),

                        'vpc_SecureHashType' => 'SHA256'
                    );

                    // Add secure secret after hashing
                    $queryData['vpc_SecureHash'] = Payment::generateSecureHash($accountData['secret'], $queryData); // See functions.php file

                    // 
                    $migsUrl = 'https://migs.mastercard.com.au/vpcpay?'.http_build_query($queryData);

                    // Redirect to the bank website to continue the 
                    header("Location: " . $migsUrl);

                    // end payment 3 party

                        
                        /*
                        $yy = $_POST['card_expiry_year'];
                        $mm = $_POST['card_expiry_month'];
                        
                        $paymentDetails['cardNum'] = $_POST['vpc_CardNum'];
                        $paymentDetails['csc'] = $_POST['vpc_CardSecurityCode'];

                        $paymentDetails['cardExp'] = $yy.$mm;
                        $paymentDetails['currency'] = $currency_str;
                        $paymentDetails['amount'] = $net_total;
                        $paymentDetails['paymentRn'] = $payment_Ref;
                        $paymentDetails['order'] = 'Group-Pay';
                        
                        $paymentResult = Payment::pay($paymentDetails);
                        
                        if($paymentResult['state']===true){
                            
                            $participantTable = new \Participant();
                            
                            foreach($memberIDs as $member_reg_ID){
                                $member_reg_data = $memberDatas[$member_reg_ID];
                                $member_other_data = $memberOtherDatas[$member_reg_ID];
                                $member_payment_data = $paymentResult['payment_data'];
                                $participantTable->update(array(
                                    'host_ID'=>$payment_host_ID, 
                                    'unit_price'=>$member_other_data->unit_price,
                                    'amount'=>$member_other_data->amount,
                                    'discount'=>$member_other_data->discount,
                                    'currency'=>$member_payment_data->currency,
                                    'payment_state'=>'Confirmed',
                                    'payment_date'=>$seconds,
                                    'payment_rn'=>$payment_Ref,
                                    'status'=>$member_payment_data->txnResponseCode,
                                    'receipt_string'=>$member_payment_data->receipt_string,
                                    'receipt_number'=>$member_payment_data->receiptNo,
                                    'transaction_number'=>$member_payment_data->transactionNo
                                ),$member_reg_ID);
                            }
                            
                            $payment_log_token = md5($payment_Ref.$seconds);
                            
                            $participantItemTable = new ParticipantItem();
                            $participantItemTable->insert(array(
                                'host_ID'=>$payment_host_ID, 
                                'command'=>$member_payment_data->command,
                                'amount'=>$net_total,
                                'currency'=>$member_payment_data->currency,
                                'order_info'=>$member_payment_data->orderInfo,
                                'receipt_string'=>$member_payment_data->receipt_string,
                                'receipt_number'=>$member_payment_data->receiptNo,
                                'transaction_number'=>$member_payment_data->transactionNo,
                                'payment_rn'=>$payment_Ref,
                                'payment_date'=>$seconds,
                                'payment_state'=>'Confirmed',
                                'type'=>'Group',
                                'token'=>$payment_log_token
                            ));

                            $email_status = Payment::paymentConfirmedEmail($memberIDs);

                            Session::put('success','Transaction Successful');
                            Redirect::to(DN.'/net'); 
                        }else{
                            unset($_POST);
                           $message = $paymentResult['message'];
                        }
                        */

                    }
                    
                    break;
                default:







                    $participant_code = Input::get('id','get');
                    $discount = 0;
                    $participantTable = new \Participant();
                    $participantTable->selectQuery("SELECT `ID`,`code`,`payment_rn`,`payment_method`,`firstname`,`lastname`,`othername`,`email`,`package_type`,`category`,`pass_type`,`state`,`residence_country`,`token` FROM `events_participant` WHERE `code`=? AND `payment_state`='Pending' OR `payment_state`='Cancelled' ORDER BY `ID` DESC LIMIT 1",array($participant_code));

                    if(!$participantTable->count()){
                        Redirect::to(DN.'/404');
                    }else{
                        $participant_data = $participantTable->first(); 
                    }
                    
                    $payment_host_data = $participant_data;

                    $prfx = 'payment-';
                    foreach($_POST as $index=>$val){
                        $ar = explode($prfx,$index);
                        if(count($ar)){
                            $_POST[end($ar)] = $val;
                            unset($_POST[$index]);
                        }
                    }

                    if($participant_data->residence_country=="Rwanda"){
                        $currency_str = 'RWF';
                    }else{
                        $currency_str = 'USD';
                    }
                    
                    $currency = $currency_str == "RWF" ? "Local" : "Other";

                    $seconds = \Config::get('time/seconds');  
                    
                    $net_total="0";

                    switch($participant_data->category){
                        case 'Silver':
                        case 'Gold':
                        case 'Platinum':
                        case 'Silver-complimentary':
                        case 'Gold-complimentary':
                        case 'Platinum-complimentary':
                        case 'Silver-discounted':
                        case 'Gold-discounted':
                        case 'Platinum-discounted':

                        case 'Individual-Silver':
                        case 'Individual-Gold':
                        case 'Individual-Platinum':
                        case 'Individual-Silver-Discounted':
                        case 'Individual-Gold-Discounted':
                        case 'Individual-Platinum-Discounted':
                        case 'Group-Silver':
                        case 'Group-Gold':
                        case 'Group-Platinum':
                        case 'Group-Silver-Discounted':
                        case 'Group-Gold-Discounted':
                        case 'Group-Platinum-Discounted':
                        case 'Exhibitor-Silver-Discounted':
                        case 'Exhibitor-Gold-Discounted':
                        case 'Exhibitor-Platinum-Discounted':
                        case 'Sponsor-Silver-Discounted':
                        case 'Sponsor-Gold-Discounted':
                        case 'Sponsor-Platinum-Discounted':
                        case 'Smart-Africa-Member-Silver-Discounted':
                        case 'Smart-Africa-Member-Gold-Discounted':
                        case 'Smart-Africa-Member-Platinum-Discounted':
                        case 'Face-the-Gorillas-Silver-Discounted':
                        case 'Face-the-Gorillas-Gold-Discounted':
                        case 'Face-the-Gorillas-Platinum-Discounted':
                        case 'Ms-Geek-2017-Silver-Discounted':
                        case 'Ms-Geek-2017-Gold-Discounted':
                        case 'Ms-Geek-2017-Platinum-Discounted':
                            $net_total=Functions::passPrice($participant_data->pass_type,$currency);
                        break;
                        case 'Exhibitor':
                            $p_type = $participant_data->package_type;
                            $net_total=Functions::passPrice($p_type,$currency);
                        break;
                    }
                    $gross = $net_total;

                    //* IF INVITATION //

                    if($_invitation_source){
                        if($subscateg_data->discount){
                            $discount = $subscateg_data->discount;
                            $net_total = Functions::discount($gross,$discount);
                        }
                    }
                    //* END INVITATION //
                    
                    $memberOtherDatas = (object)array('unit_price'=>$gross,'amount'=>$net_total,'discount'=>$discount);
                    // Update participant table payment filds

                    $member_reg_data = $participant_data;
                    $member_other_data = $memberOtherDatas;
                    $member_payment_data = $paymentResult['payment_data'];

                    $participantTable->update(array(
                        'unit_price'=>$member_other_data->unit_price,
                        'amount'=>$member_other_data->amount,
                        'discount'=>$member_other_data->discount,
                        'currency'=>$currency_str,
                    ),$participant_data->ID);

                    // End Update participant table payment filds
                    // submit payment 3 party

                    /**
                     * The following are the variables passed from the checkout process
                     */
                    $amount = $net_total;
                    // $currency = $currency_str;
                    // $orderInfo = 'ORDER34525';
                    $orderInfo = $participant_data->payment_rn;// Order Info
                    $MerchTxnRef = $orderInfo.'-'.(Payment::generateMerchTxnRef()); // See functions.php file


                    $accountData = array(
                        // 'merchant_id' => 'TESTBOK000012', // for test card
                        // 'access_code' => '50FCA8A5', // for test card
                        // 'secret'      => 'BC401C3D6FC5543520214035DF2D4E07' // for test card

                        'merchant_id' => 'BOK000012',
                        'access_code' => '3C0E3AD5',
                        'secret'      => '1B9E304F9DE0EBA10596AB23C6BE09D5'
                    );
                    // multi currency

                    if($currency_str=="RWF"){
                        // $_PDT['vpc_Currency']=646;
                        $mult = 1;
                    }elseif($currency_str=="USD"){
                        // $_PDT['vpc_Currency']=840;
                        $mult = 100;
                    }

                    /**
                     * Query data..
                     */
                    $queryData = array(
                        'vpc_AccessCode' => $accountData['access_code'],
                        'vpc_Merchant' => $accountData['merchant_id'],

                        'vpc_Amount' => ($amount * $mult), // Multiplying by 100 to convert to the smallest unit
                        'vpc_OrderInfo' => $orderInfo,

                        // 'vpc_MerchTxnRef' => Payment::generateMerchTxnRef(), // See functions.php file
                        'vpc_MerchTxnRef' => $MerchTxnRef,
                        'vpc_Command' => 'pay',
                        'vpc_Currency' => $currency_str,
                        'vpc_Locale' => 'en',
                        'vpc_Version' => 1,
                        // 'vpc_ReturnURL' => 'http://127.0.0.1/bk-payment/return_url.php',
                        'vpc_ReturnURL' => (DN.'/success/'.$participant_data->code.'/success'),

                        'vpc_SecureHashType' => 'SHA256'
                    );

                    // Add secure secret after hashing
                    $queryData['vpc_SecureHash'] = Payment::generateSecureHash($accountData['secret'], $queryData); // See functions.php file

                    // 
                    $migsUrl = 'https://migs.mastercard.com.au/vpcpay?'.http_build_query($queryData);

                    // Redirect to the bank website to continue the 
                    header("Location: " . $migsUrl);

                    // end payment 3 party

                    // submit payment 2 party
                    /*
                    $yy = $_POST['card_expiry_year'];
                    $mm = $_POST['card_expiry_month'];

                    $paymentDetails['cardNum'] = $_POST['vpc_CardNum'];
                    $paymentDetails['csc'] = $_POST['vpc_CardSecurityCode'];
                    $paymentDetails['cardExp'] = $yy.$mm;
                    $paymentDetails['currency'] = $currency_str;
                    $paymentDetails['amount'] = $net_total;
                    $paymentDetails['paymentRn'] = $participant_data->payment_rn;
                    $paymentDetails['order'] = $participant_data->category."-".$participant_data->pass_type;// Order Info

                    $paymentResult = Payment::pay($paymentDetails);

                    if($paymentResult['state']===true){
                        
                        $member_reg_data = $participant_data;
                        $member_other_data = $memberOtherDatas;
                        $member_payment_data = $paymentResult['payment_data'];
                        
                        $participantTable->update(array(
                            'unit_price'=>$member_other_data->unit_price,
                            'amount'=>$member_other_data->amount,
                            'discount'=>$member_other_data->discount,
                            'currency'=>$member_payment_data->currency,
                            'payment_state'=>'Confirmed',
                            'payment_date'=>$seconds,
                            'payment_rn'=>$payment_host_data->code,
                            'status'=>$member_payment_data->txnResponseCode,
                            'receipt_string'=>$member_payment_data->receipt_string,
                            'receipt_number'=>$member_payment_data->receiptNo,
                            'transaction_number'=>$member_payment_data->transactionNo
                        ),$participant_data->ID);

                        $payment_log_token = md5($payment_host_data->code.$seconds);
                        
                        $participantItemTable = new ParticipantItem();
                        $participantItemTable->insert(array( 
                            'host_ID'=>$payment_host_data->code, 
                            'command'=>$member_payment_data->command,
                            'amount'=>$net_total,
                            'currency'=>$member_payment_data->currency,
                            'order_info'=>$member_payment_data->orderInfo,
                            'receipt_string'=>$member_payment_data->receipt_string,
                            'receipt_number'=>$member_payment_data->receiptNo,
                            'transaction_number'=>$member_payment_data->transactionNo,
                            'payment_rn'=>$payment_host_data->code,
                            'payment_date'=>$seconds,
                            'payment_state'=>'Confirmed',
                            'type'=>'Single',
                            'token'=>$payment_log_token
                        ));

                        $email_status = Payment::paymentConfirmedEmail(array($participant_data->ID));
                        
                        Redirect::to(DN.'/success/'.$participant_data->code.'/success'); 
                    }else{
                       $message = $paymentResult['message'];
                        unset($_POST);
                    }
                    */
                    // end payment 2 party

                    /*********************
                    * END OF MAIN PROGRAM
                    *********************/
            
                break;
            }
        break;
    }
}


?>

<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
    <?php include 'includes/head-common.php';?>
    <title>Payment - <?=EVENT?></title>
    <script type='text/javascript' src="<?=DN?>/js/jquery.creditCardValidator.js"></script>
    <style>
    .taget{
        width: 70%
    }
    .taget tr{
        border-bottom: 1px solid #f5f5f5
    }
    .taget tr td{
        width: 50%;
        padding: 5px 10px;
        font-size: 13px;
    }
    .taget tr td:first-child{
        width: 50%;
        text-align: right;
        font-family: 'Roboto-Bold', sans-serif;
    }
        
        
form #vpc_CardNum {
    background-image: url(<?=DN?>/css/img/cards.png),url(<?=DN?>/css/img/cards.png);
    background-position: 2px -121px,260px -61px;
    background-size: 120px 361px,120px 361px;
    background-repeat: no-repeat;
    padding-left: 54px;
}
form #vpc_CardNum.visa {
    background-position: 2px -163px,260px -61px;
}
form #vpc_CardNum.valid.visa {
    background-position: 2px -163px,260px -87px;
}
form #vpc_CardNum.mastercard {
    background-position: 2px -247px,260px -61px;
}
form #vpc_CardNum.valid.mastercard {
    background-position: 2px -247px,260px -87px;
}
</style>
</head>
<body class="home page page-id-2" style="overflow: hidden">
    <?php include 'views/header-common.php';?>
    <a class="scroll-point" id="ideas"></a>

    <div class="sectiongrey">
        <section>
            <div class="separator"> 
                <!-- <div class="line"></div>
                <h2>Register</h2>
                <div class="line"></div> -->
            </div>
            <div class="grid2">
            <section class="section-main " style="border-bottom: 1px solid #ddd; padding-bottom:0px;padding-top: 0px;border: 0;">
                  
             <?php 
                switch($request){
                    case 'group':
                        include 'views/register/payment-group-form.php';
                        break;
                    default:
                        include 'views/register/payment-form.php';
                        break;
                }?>
            </section>


            </div>
        </section>
    </div>







    <?php include 'views/footer-common.php';?>
</body>
</html>