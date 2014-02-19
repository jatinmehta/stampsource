<?php

class Feeds
{
	public $mLinkToLogout = '';
	public $navCell = 'trends.tpl';
	public $contentCell = 'content.tpl';
	public $postCell = 'post.tpl';
	public $mUsername='';

	
	public function __construct()
	{
		$this -> mUsername = strtoupper($_SESSION['Username']);
		$this -> mLinkToLogout = Link::toLogout();
	}
	
	public function init()
	{
	}
	
	
}
?>