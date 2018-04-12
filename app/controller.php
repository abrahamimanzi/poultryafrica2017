<?php

$error_message = '';
$form_error = false;
$form = (object)['ERRORS' => false];

$request = Input::get('request','get');
$url_struc['tree'] = Input::get('request','get');
$url_struc['trunk'] = Input::get('trunk','get');
$url_struc['branch'] = Input::get('branch','get');
$var_branch = array();

if(Input::checkInput('branch','get','1')){
    $var_branch = explode('-',Input::get('branch','get'));
    $url_struc['branch'] = $var_branch[0];
}

$url_struc['branch-sub1'] = @$var_branch[1];
$url_struc['branch-sub2'] = @$var_branch[2];


if($url_struc['tree'] =='app'){
    $url_struc['app-idname'] = Input::get('idname','get');
}
if($url_struc['branch-sub2'] =='export'){
    
    $event_ID = Input::get('id','get');
    Redirect::to(DN.'/export/'.$event_ID);
}


//********************//
//    GET DETECTS    //
//******************//

if(Input::checkInput('request','get','1')){
	$post_request = Input::get('request','get');
	switch($post_request){
            
       // Logout
            
		case 'logout':
            
			$db = DB::getInstance();
            $sessionName = Config::get('session/subscriber');
            $cookieName = Config::get('remember/subscriber');
            $temp = Config::get('time/seconds');
            if(isset($_SESSION[$sessionName])){
                $user_ID = Session::get($sessionName);
                
                $db->update('subscriber',$user_ID,array('account_session'=>'0','last_access'=>$temp));
                Cookie::delete($cookieName);
                
                session_destroy();
                session_unset();
                session_regenerate_id(true);

                $sessionName = Config::get('session/subscriber');
                $cookieName = Config::get('remember/subscriber');

                if(isset($_COOKIE["$sessionName"])){
                    unset($_COOKIE["$sessionName"]);
                    setcookie($sessionName, null, -1, '/');
                    Cookie::delete($cookieName);
                } 
            }
            Redirect::to(DN.'/login');
		break;
            
		case 'resetpassword':
            if(Input::checkInput('id','get','1')){
               $generated_string = Input::get('code','get');

                $subscriber_id = Input::get('id','get');
                $subscriberTable = new Subscriber();
                $subscriberTable->selectQuery("SELECT * FROM `subscriber` WHERE `ID`= ? AND `recovery_string`!=''",array($subscriber_id));
                if(!$subscriberTable->count()){
                    Redirect::to(DN.'/login/forgotpassword');
                }else{

                    $subscriber_data = $subscriberTable->first();
                    $secret_key = $subscriber_data->password;
                    $recovery_string = strtoupper(hash_hmac('SHA256', $generated_string, pack('H*',$secret_key)));
                    if($recovery_string == $subscriber_data->recovery_string){
                        $subscriber_id = $subscriber_data->ID;                 
                    }else{
                        Redirect::to(DN.'/login/forgotpassword');
                    }
                } 
            }else{
                if(Input::get('response','get') != 'success'){
                    Redirect::to(DN.'/login/forgotpassword');
                }
            }
		break;
                 
        case 'group':
            if(count($url_struc['trunk'])){
                switch($url_struc['trunk']){
                    case 'new':
                        if(Input::get('id','get')){
                            $category_ID = Str::sanAsID(Input::get('id','get'));
                            $subscategTable = new \SubscriberCategory();
                            $subscategTable->selectQuery("SELECT* FROM `subscriber_category` WHERE `subscriber_ID`=? AND `category_ID`=?",array($session_subscriber_ID,$category_ID));
                            if($subscategTable->count()){
                        
                                $subscateg_data = $subscategTable->first();
                                $categoryTable = new ParticipantCategory();
                                $categoryTable->selectQuery("SELECT * FROM `events_participant_category` WHERE `ID`=?",array($subscateg_data->category_ID));
                                $category_data = $categoryTable->first();
                                $category_ID = $category_data->ID;
                                if(!($subscateg_data->size_used < $subscateg_data->size)){
                                    Redirect::to(DN.'/net');
                                }
                            }
                        }
                    break;
                }
            }
		break;
    }
}
?>
  


<?php       
		// USERS
if(Input::checkInput('webToken','post','1') && Input::checkInput('request','post','1')){
	$post_request = Input::get('request','post');
	switch($post_request){
            
		case 'reset-password':
            if(Input::checkInput('id','get','1')){
                $subscriber_ID = Input::get('id','get');
                $subscriberTable = new Subscriber();
                $subscriberTable->selectQuery("SELECT * FROM `subscriber` WHERE `ID`= ?",array($subscriber_ID));
                if(!$subscriberTable->count()){
                   // Redirect::to(DNADMIN.'/404');
                }else{
                    $subscriber_data = $subscriberTable->first();
                    $subscriber_ID = $subscriber_data->ID;
                
                    $form = SubscriberController::resetPassword($subscriber_ID);
                    
                    if($form->ERRORS == false){
				        Session::put('success','Password changed successfully');
                        Redirect::to(DN.'/login/resetpassword/success');
                    }else{
                        //echo errors
                    }
                }
			}else{
                Redirect::to(DN.'/404');
			}
		break;
		case 'subscriber-update':
            if($session_subscriber->isLoggedIn()){
                
                if($url_struc['branch-sub1'] == 'password'){
                    $form = SubscriberController::updatePassword($session_subscriber_ID);
                }else{
                    $form = SubscriberController::update($session_subscriber_ID);
                }

                if($form->ERRORS == false){
                    Session::put('success','Subscriber account updated successfully');
                    Redirect::to(DN.'/net/account/profile/edit-password');
                }else{
                    //echo errors
                }
			}else{
				Session::put('errors','Bad request! Please, contact the Admin'); 
                Redirect::to(DN);
			}
		break;
		case 'invite-send':
            if(Input::checkInput('invite-id','post','1')){
                $invite_ID = Input::get('invite-id','post'); 
                
                $subscategInviteTable = new \SubscriberCategoryInvite();
                $subscategInviteTable->selectQuery("SELECT* FROM `subscriber_category_invite` WHERE `subscriber_ID`='{$session_subscriber_ID}' AND `ID`=?",array($invite_ID));
                
                if(!$subscategInviteTable->count()){
                    $form->ERRORS = true;
                }else{
                    $invite_data = $subscategInviteTable->first();
                    
                    $firstname = Input::get('invite-firstname','post');
                    $lastname = Input::get('invite-lastname','post');
                    $lastname = Input::get('invite-lastname','post');
                    $email = Input::get('invite-email','post');

                    $sec_string = md5($invite_ID.$session_subscriber_ID);

                    $salt = Hash::salt(32);
                    $rand_string = $email.rand(99,9999999999).$firstname;
                    $shared_string = Hash::make($rand_string,$salt);

                    $hash_string = hash_hmac('SHA256', $shared_string, pack('H*',$sec_string));
                
                    if($invite_data->ID == $invite_ID){

                        $form = SubscriberCategoryInviteController::addInvite();
                        
                        if($form->ERRORS == false){
                            Redirect::to(DN.'/net');
                        }else{
                            //echo errors
                        }                   
                    }
                }
			}
		break;
		case 'invite-actions':
            if(Input::checkInput('invite-id','post','1')){
                $invite_ID = Input::get('invite-id','post');
                switch(true){
                    case Input::checkInput('inviteSendBtn','post','0'):
                        $form = SubscriberCategoryInviteController::addInvite();
                        if($form->ERRORS == false){
                            Session::put("success","Invite was sent successfully");
                            Redirect::to(DN.'/net');
                        }else{
                            Session::put("errors","Some errors are preventing the submission of your invite");
                        }  
                    break;
                    case Input::checkInput('inviteCancelBtn','post','0'):
                        $form = SubscriberCategoryInviteController::cancelInvite();
                        if($form->ERRORS == false){
                            Session::put("success","Invite was canceled successfully");
                            Redirect::to(DN.'/net');
                        }else{
                            Session::put("errors","Some errors are preventing the cancellation of your invite");
                        }  
                    break;
                    case Input::checkInput('inviteReminderBtn','post','0'):
                        $form = SubscriberCategoryInviteController::reminderInvite();
                        if($form->ERRORS == false){
                            Session::put("success","Reminder sended successfully");
                            Redirect::to(DN.'/net');
                        }else{
                            Session::put("errors","Some errors are preventing the cancellation of your invite");
                        }  
                    break;
                }
            }
		break;
		case 'passes-addmore':
            $form = SubscriberCategoryController::allocatePasses(); 
            if($form->ERRORS == false){ 
                Session::put("success","Pass added successfully");
                Redirect::to(DN.'/net');
            }else{
                Session::put("errors","Some errors has been found, Please try again");
                Redirect::to(DN.'/net');
            } 
		break;
	}
}

?>