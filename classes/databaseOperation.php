<?php

  function __autoload($class){
  	require('classes/' . strtolower($class) . '.php');
  }

  class DBOperations {
    private $host = "loclhost";
  	private $user = "developer";
  	private $password = "dev!mje01";
  	private $dbname = "phpCodeSample";
    private $pdo = null;

    // Constructor
  	public function __constructor(){
  		$pdo = new DBConnection($host, $user, $password, $dbname);
  	}

    public function saveEmail(){
      try{
        $ss = "INSERT INTO email(email, subject, body) VALUES(?, ?, ?)";
        $stmt = $this->pdo->prepare($ss);
        $stmt->execute(array($_POST['email'], $_POST['subject'], $_POST['body']));
        $sendEmail = new sendEmail;
        sendEmail->email($_POST['email'], $_POST['subject'], $_POST['body']);
      }catch(PDOException $e){
        echo e->getMessage();
      }
    }
  }


?>
