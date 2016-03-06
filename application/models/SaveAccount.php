
<?php


class SaveAccount extends Zend_Controller_Action{
	
	
	public function saveAccount($username, $password, $email){

		//Clean up user input data	
		$username = $this->_db->escape($username);
		$password = $this->_db->escape($passwod);
		$email = $this->_db->escape($email);
	
		//Use mysqli driver
		$dbconn = mysqli('localhost',
										 'loudbites',
										 'mtcrtx07');
		$dbconn->select_db('loubited');
		
		//sql insert
		$statement = "INSERT INTO accounts (username, passwor, email)";
		$statement .= " VALUES (".$username.",".$password.",".$email.")";
		$dbconn->query($statement);
		
		//close db connection
		$dbconn->close();
	}
	
	
	
}