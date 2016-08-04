<?php
	
/*Routing Info*/
	/*Artist*/
	$FrontController = Zend_Controller_Front::getInstance();
	$Router = $FrontController->getRouter();
	
	$Router->addRoute('artistprofile',
										new Zend_Controller_Router_Route(
												'artist/:artistname',
												array(
													'artistname' => 'Stefanie Heinzmann',
													'controller' => 'artist',
													'action' => 'profile',
												)
											)
									);
	
	$Router->addRoute('artiststore',
										new Zend_Controller_Router_Route(
												'artist/store',
												array(
													'controller' => 'artist',
													'action' => 'artistaffiliatecontent',
												)
											)
									);
	
	
