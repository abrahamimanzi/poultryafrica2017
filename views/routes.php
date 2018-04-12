<?php
if(empty($url_struc['tree']) || $url_struc['tree'] == '/'){
    $request = "group";
    $url_struc['tree'] = $request;
    $url_struc['trunk'] = 'member';
}

if(!empty($url_struc['tree'])){
	switch($url_struc['tree']){
        // Event
        case 'group':
            if(count($url_struc['trunk'])){
                switch($url_struc['trunk']){
                    case 'member':
                        switch($url_struc['branch']){
                            case 'addpass':
                                if(empty($url_struc['branch-sub1'])){
                                    Functions::flashMsg();
                                    include 'views/net/booking/pass_summary'.PL;
                                    include 'views/net/booking/member/list'.PL;
                                }
                            break;
                            default:
                                if(empty($url_struc['branch-sub1'])){
                                    Functions::flashMsg();
                                    include 'views/net/booking/member/list'.PL;
                                    include 'views/net/booking/pass_summary'.PL;
                                }
                            break;
                        }
                    break;
                    case 'passes':
                        switch($url_struc['branch']){
                            case 'addmore':
                                if(empty($url_struc['branch-sub1'])){
                                    Functions::flashMsg();
                                    include 'views/net/booking/addpass'.PL;
                                }
                            break;
                            default:
                                if(empty($url_struc['branch-sub1'])){
                                    Functions::flashMsg();
                                }
                            break;
                        }
                    break;
                }
            }
		break;
            
        case 'account':
			Functions::flashMsg();
            if(count($url_struc['trunk'])){
                switch($url_struc['trunk']){
                    case 'profile':
                        switch($url_struc['branch']){    
                            case 'edit':
                                switch($url_struc['branch-sub1']){
                                    case 'password':
                                        include 'views/net/account/subscriber-edit-password'.PL;
                                    break;
                                }
                            break;
                         }
                        Functions::flashMsg();
                    break;
                    default:
                        include 'views/errors/404'.P;
                    break;
                }
            }else{
                include 'views/errors/404'.P;
            }
		break;
		
		default:	
			Functions::flashMsg();
			include 'views/errors/404'.P;
			$_GET['request'] = '404';
			$request = "404";
		break;
	}	
}
?>