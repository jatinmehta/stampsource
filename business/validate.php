<?php

class Validate
{
	public static function Authenticate($username, $password)
	{
		$password = md5($password);
		$sql = 'SELECT user_id FROM stampsource.profile WHERE username = :user_name AND password = :password';
		$params = array(':user_name' => $username , ':password' => $password);
		$temp = Databasehandler::GetAll($sql, $params);
		if(count($temp) > 0)
			return 1;
		else
			return 0;
	}
	
	public static function Adduser($username, $password, $semester, $cgpa, $wt)
	{
		$sql = 'INSERT INTO stampsource.profile (username, password, semester, cgpa, wt) VALUES(:user_name, :password, :semester, :cgpa, :wt)';
		$params = array(':user_name' => $username , ':password' => $password, ':semester' => $semester, ':cgpa' => $cgpa, ':wt' => $wt);
		Databasehandler::Execute($sql, $params);
		return 1;
	}
	
	public static function ExistUser($username)
	{
		$sql = 'SELECT user_id FROM stampsource.profile WHERE username = :username';
		$params = array(':username' => $username);
		$temp = Databasehandler::GetAll($sql, $params);
		if(count($temp) > 0)
			return 1;
		else
			return 0;
	}
	
	public static function GetUserId($username)
	{
		$sql = 'SELECT user_id FROM stampsource.profile WHERE username = :user_name';
		$params = array(':user_name' => $username);
		$temp = Databasehandler::GetAll($sql, $params);
		return $temp[0]['user_id'];
	}
	
	public static function GetWt($username)
	{
		$sql = 'SELECT wt FROM stampsource.profile WHERE username = :user_name';
		$params = array(':user_name' => $username);
		$temp = Databasehandler::GetAll($sql, $params);
		return $temp[0]['wt'];
	}
}
?>