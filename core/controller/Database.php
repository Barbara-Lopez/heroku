<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b7ac844602adb7";$this->pass="bcc8c135";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_477a1ea3203d0d6";
	}

	function connect(){
		$this->user="b7ac844602adb7";$this->pass="bcc8c135";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_477a1ea3203d0d6";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>

