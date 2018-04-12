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
    }
}
?>
  


<?php       
		// USERS
if(Input::checkInput('webToken','post','1') && Input::checkInput('request','post','1')){
	$post_request = Input::get('request','post');
	switch($post_request){
		case 'participant_login':
			$form = SubscriberController::login();
			if($form->ERRORS == false){
				Redirect::to(DN.'/net');
			}else{
				//echo errors
			}
		break;
		case 'recover-subscriber_login':
            if(Input::checkInput('recover-email','post','1')){
                $subscriber_email = Input::get('recover-email','post');
                $subscriberTable = new User();
                $subscriberTable->selectQuery("SELECT * FROM `subscriber` WHERE `email`= ?",array($subscriber_email));
                if(!$subscriberTable->count()){
                    $form->ERRORS = true;
                }else{
                    $subscriber_data = $subscriberTable->first();
                    if($subscriber_data->email == $subscriber_email){
                        
                        $subscriber_ID = $subscriber_data->ID;

                        $form = SubscriberController::requestPasswordReset($subscriber_ID);

                        if($form->ERRORS == false){
                            Redirect::to(DN.'/login/forgotpassword/success');
                        }else{
                            //echo errors
                        }                   
                    }
                }
			}
            Redirect::to(DN.'/login/forgotpassword/errors');
		break;
            
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
	}
}

?>