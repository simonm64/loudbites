<?php

class AccountController extends Zend_Controller_Action
{

  public function init()
  {
    /* Initialize action controller here */
  }

  public function indexAction()
  {
    // action body
  }

  public function successAction()
  {
    if($this->_request->isPost()){ //could be isGet() for url queries or isXmlHttpRequest() for async ajax
      $email = $this->request->getPost('email');
      $username = $this->request->getPost('username');
      $password = $this->request->getPost('password');
      
      //saveAccount Model only when required
      require_once ("SaveAccount.php");
      $SaveAccount = new SaveAccount;
      $SaveAccount->saveAccount($username, $password, $email);
      
    }else{
      throw new Exception("Attention: Wrong way of submitting information");
    }
    //do the insert in model
  }
  
  /*Display de form*/
  public function newAction(){
    // action body
  }

  /*confirmation email url i guess*/
  public function activateAction(){
    $emailToActivate = $this->_request->getQuery('email');
      
    //validation of email in db
    //activate
  }
  
  public function updateAction(){
    
    //check for session
    
    //get user id
    
    //get user informarion
    
    //create Zend_view object
    
    $oView = new Zend_View();
    
    //assign variables
    $oView->setScriptPath(APPLICATION_PATH . '/views/scripts');
    $oView->render("account/update.phtml");
    
  }

}







