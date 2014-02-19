<?php

Class post
{
	public $mLinkToPost = '';
	public $trend_list;
	private $mHeading;
	private $mResource;
	private $mTrend;
	
	public function __construct()
	{
		$this -> mLinkToPost = Link::Build(str_replace(VIRTUAL_LOCATION, '', getenv('REQUEST_URI')));
		$this -> trend_list = FeedManager::GetTrends();
	}
	
	public function init()
	{
		if(isset($_POST['post']))
		{
			$this -> mResource = strip_tags($_POST['resource']);
			$this -> mTrend = (int)$_POST['trend'];
			$this -> mHeading = strip_tags($_POST['heading']);
			
			Feedmanager::AddFeed($this -> mHeading, $this -> mResource, $this -> mTrend, $_SESSION['UserId']);
		}
	}
};

?>