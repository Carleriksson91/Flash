<?php
namespace flash\flash;

class CFlashMessage
{
     
  use \Anax\DI\TInjectable; 

   public function insertMessage($message){ 
     $_SESSION['notificationMessage'] = "<div style='background-color: green;'>" . $message . "</div>"; 
	} 
        

    public function printMessage()
    {
        if(!is_null($_SESSION['notificationMessage'])) {
            echo $_SESSION['notificationMessage'];
                    $_SESSION['notificationMessage'] = null;
        }
    }
}