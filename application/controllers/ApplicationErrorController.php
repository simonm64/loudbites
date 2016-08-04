<?php

class ApplicationErrorController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        //get the controller's errors
				$errors = $this->_getParam('error_handler');
				$exception = $errors->exception;
				
				//view variables
				$this->view->exception = $exception;
    }


}

