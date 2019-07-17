<?php

 

  
if(!isset($_GET['page'])){
  $_GET['page'] = 'homepage';
}

switch ($_GET['page']){
  case 'homepage':
    require_once(dirname(__FILE__).'../homepage/homepage.php');
    break;
  case 'login':
    require_once(dirname(__FILE__).'../loginPage/login.php');
    break;
  case 'mail':
    require_once(dirname(__FILE__).'../pages/inbox.php');
    break;
  case 'register':
    require_once(dirname(__FILE__).'../register/register.php');
    break;
  case 'add':
    require_once(dirname(__FILE__).'../register/add.php');
    break;
  case 'newMessage':
    require_once(dirname(__FILE__).'../pages/newMessage.php');
    break;
  case 'Inbox':
    require_once(dirname(__FILE__).'../pages/Inbox.php');
    break;


}

?>