<?php

class Link
{
	public static function Build($link, $type = 'http')
	{
		$base = ( ($type == 'http' || USE_SSL =='no')? 'http://' : 'https://') . getenv('SERVER_NAME');
		
		if(defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != 80 && strpos($base, 'https') == false )
			$base = $base . ':' .HTTP_SERVER_PORT;
			
		$link = $base . VIRTUAL_LOCATION . $link;
		return $link;
	}
	
	
	public static function toLogin($x)
	{
		$link = $x;
		return self::Build($link);
	}
	
	public static function toIndex()
	{
		$link = 'index.php';
		return self::Build($link);
	}
	
	public static function toRNF()
	{
		$link = 'index.php?Page=RNF';
		return self::Build($link);
	}
	
	public static function toSignUp()
	{
		$link = 'index.php?Page=SignUp';
		return self::Build($link);
	}
	
	public static function toLogout()
	{
		$link = 'index.php?Page=Logout';
		return self::Build($link);
	}
	public static function GetFeedUrl($id)
	{
		$link = 'index.php?Feed=' . $id;
		return self::Build($link);
	}
	public static function Upstamp($id)
	{
		$link = 'index.php?Stamp=1&id='. $id;
		return self::Build($link);
	}
	
	public static function Downstamp($id)
	{
		$link = 'index.php?Stamp=2&id='. $id;
		return self::Build($link);
	}
	
	
}
?>