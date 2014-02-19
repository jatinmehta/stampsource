<?php
class Base
{
	public $mCell = 'login.tpl';
	public $mHeader = 'header.tpl';
	
	public function init()
	{
		if(isset($_SESSION['LoginStatus']) && $_SESSION['LoginStatus'] == true)
		{
			$this -> mCell = 'feeds.tpl';
			if(isset($_GET['Feed']))
			{
				$this -> mCell = 'feeds.tpl';
			}
			if(isset($_GET['Stamp']))
			{
				$this -> mCell = 'feeds.tpl';
			}
		}

		if(isset($_GET['Page']))
		{
			if($_GET['Page'] == 'SignUp')
				$this -> mCell = 'signup.tpl';
			if($_GET['Page'] == 'Logout')
				$this -> mCell = 'login.tpl';
		}
	}
};
?>