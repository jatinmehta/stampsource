<?php

Class Login
{
	public $mLinkToLogin = '';
	public $mUsername = '';
	public $mLinkToSignUp = '';
	public $mAuthenticate = 0;
	
	private $mPassword;
	
	public function __construct()
	{
		$this -> mLinkToLogin = Link::Build(str_replace(VIRTUAL_LOCATION, '', getenv('REQUEST_URI')));
		$this -> mLinkToSignUp = Link::toSignUp();
	}
	
	public function init()
	{
		
		if(!isset($_SESSION['LoginStatus']) || $_SESSION['LoginStatus'] == false)
		{
			if(isset($_POST['login']))
			{
				$this -> mUsername = strtolower($_POST['username']);
				$this -> mPassword = $_POST['password'];
				
				if( Validate::Authenticate($this -> mUsername, $this -> mPassword) ) // check for authentication 
				{
					$this -> mAuthenticate = 1;
					$_SESSION['LoginStatus'] = true;
					$_SESSION['Username'] = $this -> mUsername;
					$_SESSION['UserId'] = Validate::GetUserid($this -> mUsername);
					$_SESSION['wt'] = Validate::GetWt($this -> mUsername);
					header('Location:' . Link::toIndex());	
				}
			}
		}
		if(isset($_GET['Page']) && $_GET['Page'] == 'Logout')
		{
			$_SESSION['LoginStatus'] = false;
			$_SESSION['UserId'] = '';
			$_SESSION['Username'] = '';
			session_unset();
			session_destroy();
			header('Location:' . Link::toIndex());
		}
	}
};
?>