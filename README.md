Flash
============

### Begin by 
adding the following lines in your CDIFActoryDefault located in src/DI

    $this->setShared('flashmessage', function() {
            $message = new \flash\flash\CFlashMessage($this);
            return $message;
        });

### Followed by 
adding the following lines in your desired function 
  
    $app->flashmessage->insertMessage('Some MEssage');
    
### The last step 
is to show the message in the view
    
    
     $app->flashmessage->printMessage(); 
