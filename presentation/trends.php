<?php

class Trends
{
	public $trend_list;
	public $mLinkToAddTrend;
	private $trend;
	public function __construct()
	{
		$this -> mLinkToAddTrend = Link::Build(str_replace(VIRTUAL_LOCATION, '', getenv('REQUEST_URI')));
	}
	
	public function init()
	{
		$this -> trend_list = FeedManager::GetTrends();
		
		for($i = 0; $i < count($this -> trend_list); $i++)
		{
			$this -> trend_list[$i]['feed_url'] = Link::GetFeedUrl($this -> trend_list[$i]['tag_id']);
			if($this -> trend_list[$i]['user_id'] == $_SESSION['UserId'])
				$this -> trend_list[$i]['user_flag'] = 1;
			else
				$this -> trend_list[$i]['user_flag'] = 0;
		}
		if(isset($_POST['add']))
		{
			$this -> trend = $_POST['trend'];
			FeedManager::AddTrend($this -> trend, $_SESSION['UserId']);
			header('Location:'.Link::toIndex());
		}
	}
	
}

?>