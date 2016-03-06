<?php

class ArtistController extends Zend_Controller_Action
{

  public function init()
  {
    /* Initialize action controller here */
  }

  public function indexAction()
  {
    // action body
  }

  public function artistaffiliatecontentAction()
  {
    // action body
  }

    public function profileAction()
  {
    // action body
  }
  
  public function newAction(){
    
    $genres = array("Electronic",
                    "Country",
                    "Rock",
                    "R&B",
                    "Hip-Hop",
                    "Heavy Metal",
                    "Alternative Rock",
                    "Gospel",
                    "Jazz",
                    "Pop");
    
    //Set the view variable
    $this->view->genres = $genres;
    
  }
  
  public function saveArtistAction(){
    
    $sArtistName = $this->_request->getPost('artistName');
    $sGenre = $this->_request->getPost("genre");
    $sRating = $this->_request->getPost("rating");
    $sIsFav = $this->_request->getPost("isfav");
    
    //validate
    
    //insert
    
  }

}





