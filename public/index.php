<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

$FrontController = Zend_Controller_Front::getInstance();
$Router = $FrontController->getRouter();

$Router->addRoute('accountnew',
                  new Zend_Controller_Router_Route("account/new",
                                                   array(
                                                    'controller'=>'account',
                                                    'action'=>'new'
                                                    )
                                                  )
                  );

$Router->addRoute('accountupdate',
                  new Zend_Controller_Router_Route("account/update",
                                                   array(
                                                    'controller'=>'account',
                                                    'action'=>'update'
                                                    )
                                                  )
                  );
                  
$Router->addRoute('artistprofile',
                  new Zend_Controller_Router_Route("artist/profile/:artistname",
                                                   array(
                                                    'artistname'=>'Stefanie Heinzmann',
                                                    'controller'=>'artist',
                                                    'action'=>'profile'
                                                   )
                    
                  )
                );

//$FrontController = Zend_Controller_Front::getInstance();
//$Router = $FrontController->getRouter();

$Router->addRoute('artiststore',
                  new Zend_Controller_Router_Route(
                    'artist/store',
                    array(
                      'controller'=>'artist',
                      'action'=>'artistaffiliatecontent'
                    )
                  ));

$Router->addRoute('artistnew',
                  new Zend_Controller_Router_Route(
                    'artist/new',
                    array(
                      'controller'=>'artist',
                      'action'=>'new'
                    )
                  ));

//Error Handler
$FrontController = Zend_Controller_Front::getInstance();
$plugin = new Zend_Controller_Plugin_ErrorHandler();
$plugin->setErrorHandler(array('controller'=>'ApplicationError',
                               'action'=>'index'
                               ));
$FrontController->registerPlugin($plugin);

$application->bootstrap()
            ->run();