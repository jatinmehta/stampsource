<?php

class Content
{
	public $content_stream;
	public $trend = 0;
	public $mLinkToTopRated = '';
	public $stampFlag = 0;
	public $title = '';
	public $trend_name = '';
	
	private $resource_id;
	private $user_id;
	
	public function __construct()
	{
		if(isset($_GET['Feed']))
		{
			$this -> trend = $_GET['Feed'];
			$this -> trend_name = FeedManager::GetTrendName($this -> trend);
		}
		$this -> mLinkToTopRated = Link::Build('index.php?Feed=' . $this -> trend . '&Top=1');
	}
	
	public function init()
	{
		if(isset($_GET['Stamp']))
		{
			$this -> resource_id = $_GET['id'];
			$this -> user_id = $_GET['userid'];
			if(Feedmanager::CheckStamp($this -> resource_id, $_SESSION['UserId']))
			{
				if($_GET['Stamp'] == 1)
					Feedmanager::Upstamp($this -> resource_id, $_SESSION['UserId'], (int)$_SESSION['wt'], $this -> user_id);
				else
					Feedmanager::Downstamp($this -> resource_id, $_SESSION['UserId'], (int)$_SESSION['wt'], $this -> user_id);
			}
			else
				$this -> stampFlag = 1;
			header('Location:' . Link::toIndex());
		}
		
		if(isset($_GET['Top']))
			$this -> content_stream = FeedManager::GetStream($this -> trend, 1);
		else
			$this -> content_stream = FeedManager::GetStream($this -> trend, 0);
		
		for($i = 0; $i < count($this -> content_stream); $i++)
		{
			$this -> content_stream[$i]['upstamp_url'] = Link::Upstamp($this -> content_stream[$i]['resource_id'], $this -> content_stream[$i]['user_id'] );
			$this -> content_stream[$i]['downstamp_url'] = Link::Downstamp($this -> content_stream[$i]['resource_id'], $this -> content_stream[$i]['user_id']);
		}
		
		if(isset($_GET['Top']))
		{
			if(isset($_GET['Feed']) && $_GET['Feed'] != 0)
				$this -> title = 'Displaying Most <b> Recommended</b> resource for ' . $this -> trend_name[0]['tag_name'];
			else
				$this -> title = 'Displaying Most Popular resources for you';
		}
		else
		{
			if(isset($_GET['Feed'])  && $_GET['Feed'] != 0)
				$this -> title = 'Displaying Recently added resource for <i style="color:red">' . $this -> trend_name[0]['tag_name'] .'</i>';
			else
				$this -> title = 'Displaying Recently added resources';
		}
	}
};

?>