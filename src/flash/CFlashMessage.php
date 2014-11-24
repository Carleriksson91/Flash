<?php
namespace flash\flash;

class CFlashMessage
{
     
  use \Anax\DI\TInjectable; 
	
	 public function __construct($di) 
    {
        $this->di = $di;
    }
   public function insertMessage($message){ 
        $sos = "<div style='background-color: green;'>" . $message . "</div>"; 
	$this->session->set('message', $sos);
	

	} 
        

    public function printMessage()
    {
       $check = $this->session->has('message');
	   if($check){
		echo $this->session->get('message');
		
	   }
    }
}
