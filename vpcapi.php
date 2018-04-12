<?php
include 'admin/core/init.php';
if(empty($_POST) && empty($_POST)){
    Redirect::to(DN);
}else{
    $pageviewClass = new PageView();
    $page_type = 'API Return';
    $page_item_ID = 2;

    $grab_info = 'GET: '.print_r($_GET,true).' POST: '.print_r($_POST,true);

    $pageviewClass->insert(array('page_ID'=>$page_item_ID,
                         'type'=>$page_type,
                         'grabbed_info'=>$grab_info));
}
                         ?>