<?php

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', 'simsim');
define('DB_DATABASE', 'Login');

define('PROJECT_NAME', 'Simple Login System - Moussa Zraidi');




class Connection
{
	public function dbConnect()
	{
		try {
  			$DB = new PDO(DB_DRIVER.':host='.DB_SERVER.';dbname='.DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD);
  			$DB->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  			$DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  			$DB->setAttribute( PDO::ATTR_PERSISTENT,false );
		} catch (Exception $ex) {
  			echo $ex->getMessage();
  			die;
		}
		return $DB;
	}
}


?>