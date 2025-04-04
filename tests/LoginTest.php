<?php

use PHPUnit\Framework\TestCase;

// name Login is gekoppeld aan de directory '/src' via composer.json
// Alle submappen worden geautoload.
	/*
			"autoload": {
				  "psr-4": {
						"Login\\": "src/"
				  }
	*/

use Login\classes\User;


// Filename moet gelijk zijn aan de classname LoginTest
class LoginTest extends TestCase{
    
	 // Methods moeten starten met de naam test....
    public function testPassword(){
      $user = new User;
		
      // Object vullen
		$user->SetPassword("Wigmans");	
      $this->assertEquals("Wigmans", $user->GetPassword());
	}
	
	public function testValidateUser(){
		$errors = [];
		$user = new User;
		//$user->username="";
		$errors = $user->ValidateUser();
		$this->assertEquals("Please enter a valid username.", $errors[0] );
		
	}

	public function testLoginSuccess(){
		$user = new User;
		$user->SetUsername("test");
		$user->SetPassword("test");
		$status = $user->LoginUser();
		$this->assertTrue( $status );
	}

	public function testLoginFail(){
		$user = new User;
		$user->SetUsername("test");
		$user->SetPassword("test");
		$status = $user->LoginUser();
		$this->assertFalse( $status );
	}

	public function testIsLoggedIn(){
		$user = new User;
		$user->SetUsername("test");
		$user->SetPassword("test");
		$user->LoginUser();
	}

	public function testGetUser(){
		$user = new User;
		$user->SetUsername("test");
		$user->SetPassword("test");
		$user->LoginUser();
		$status = $user->GetUser();
		$this ->assertEquals("test", $status );
		$this->assertEquals("test", $user->GetUsername() );

	}
}
?>