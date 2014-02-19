<?php

class FeedManager
{
	public static function AddFeed($heading, $content, $tag_id, $user_id)
	{
		$sql = 'INSERT INTO stampsource.resource (heading, content, tag_id, user_id, added_on) VALUES (:heading, :content, :tag_id, :user_id, NOW())';
		$params = array(':heading' => $heading, ':content' => $content, ':user_id' => $user_id, ':tag_id' => $tag_id);
		Databasehandler::Execute($sql, $params);
		return 1;
	}
	
	public static function GetTrends()
	{
		$sql = 'SELECT * FROM stampsource.tags ORDER BY added_on LIMIT 0, 20';
		return Databasehandler::GetAll($sql);
	}
	
	public static function GetStream($trend, $top)
	{
		if($top == 0)
		{
			if($trend == 0)
			{
				$sql = 'SELECT * FROM stampsource.resource ORDER BY added_on desc LIMIT 0, 30';
				return Databasehandler::GetAll($sql);
			}
			else
			{
				$sql = 'SELECT * FROM stampsource.resource WHERE tag_id = :tagId ORDER BY added_on desc LIMIT 0, 30';
				$params = array(':tagId' => $trend);
				return Databasehandler::GetAll($sql, $params);
			}
		}
		else
		{
			if($trend == 0)
			{
				$sql = 'SELECT * FROM stampsource.resource ORDER BY stamps desc LIMIT 0, 30';
				return Databasehandler::GetAll($sql);
			}
			else
			{
				$sql = 'SELECT * FROM stampsource.resource WHERE tag_id = :tagId ORDER BY stamps desc LIMIT 0, 30';
				$params = array(':tagId' => $trend);
				return Databasehandler::GetAll($sql, $params);
			}
		}
	}
	public static function CheckStamp($id, $userid)
	{
		$sql = 'SELECT * FROM stamps WHERE resource_id = :id AND user_id = :userid';
		$params = array(':id' => $id, ':userid' => $userid);
		$temp = Databasehandler::GetAll($sql, $params);
		if(count($temp) > 0)
			return 0;
		else
			return 1;
	}
	public static function Upstamp($id,$userid, $wt)
	{
		$sql='UPDATE stampsource.resource SET stamps=stamps+:wt WHERE resource_id=:id';	
		$params = array(':wt' => $wt, ':id' => $id);
		Databasehandler::Execute($sql, $params);
		
		$sql="INSERT INTO stamps (resource_id, user_id) VALUES (:id, :userid)";
		$params=array(':id' => $id, ':userid' => $userid);
		Databasehandler::Execute($sql, $params);
		return 1;
		
	}
	
	public static function Downstamp($id,$userid, $wt)
	{
		$sql='UPDATE stampsource.resource SET stamps=stamps-:wt/4 WHERE resource_id=:id';	
		$params = array(':wt' => $wt, ':id' => $id);
		Databasehandler::Execute($sql, $params);
		
		$sql="INSERT INTO stamps (resource_id, user_id) VALUES (:id, :userid)";
		$params=array(':id'=>$id, ':userid'=>$userid);
		Databasehandler::Execute($sql, $params);
		return 1;
	}
	
	public static function AddTrend($tag_name, $userid)
	{
		$sql='INSERT INTO tags (tag_name, user_id, added_on) VALUES (:tag_name, :userid, NOW())';
		$params=array(':tag_name' => $tag_name, 'userid' => $userid);
		Databasehandler::Execute($sql, $params);
		return 1;
	}
	public static function GetTrendName($trendid)
	{
		$sql = 'SELECT tag_name FROM tags WHERE tag_id = :tag_id';
		$params = array(':tag_id' => $trendid);
		return Databasehandler::GetAll($sql, $params);
	}
};

?>