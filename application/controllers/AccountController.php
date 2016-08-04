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
			if($this->_request->isPost()){
        $email = $this->_request->getPost("email");
				$username = $this->_request->getPost("username");
				$password = $this->_request->getPost("password");
			}else{
				throw new Exception("Bad request");
			}
		}
		
    public function newAction()
    {
        // action body
    }

    public function activateAction()
    {
			if($this->_request->isGet())
        $emailToActivate = $this->_request->getQuery("email");
			else
				throw new Exception("Bad request");
				//Check if email exist
				//Activate account
    }


}







