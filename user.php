<?php
include_once('connection.php');
/**
* 
*/
class User 
{
	private $db;
	
	public function __construct()
	{
		$this->db = new connection();
		$this->db= $this->db->dbConnect();
	}

	public function Login($name, $password){
		if(!empty($name) && !empty($password)){
			$st=$this->db->prepare("select * from users where name=? and password=?");
			$st->bindParam(1,$name);
			$st->bindParam(2,$password);
			$st->execute();

			if($st->rowCount() == 1){
				echo "valid login. you're in!";
			}else{
				echo "name or password are invalid";
			}
		}else{
			echo "please enter your name and password!";
		}
	}
}