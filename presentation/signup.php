<?php

class Signup
{
	public $mLinkToRegister = '';
	public $mLinkToIndex = '';
	public $mUsername;
	public $info;
	
	private $mPassword;
	private $mCpassword;
	private $mSemester;
	private $mCgpa;
	private $wt;
	
	public function __construct()
	{
		$this -> mLinkToRegister = Link::Build(str_replace(VIRTUAL_LOCATION, '', getenv('REQUEST_URI')));
		$this -> mLinkToIndex = Link::toIndex();
	}
	
	public function init()
	{
		if(isset($_POST['register']))
		{
			$this -> mPassword = $_POST['password'];
			$this -> mCpassword = $_POST['cpassword'];
			$this -> mUsername = $_POST['username'];
			$this -> mSemester = $_POST['semester'];
			$this -> mCgpa = $_POST['cgpa'];
			
			if($this -> mPassword != $this -> mCpassword)
			{
				$this -> info = 1;
			}
			else if(Validate::ExistUser($this -> mUsername))
			{
				$this -> info = 2;
			}
			else
			{
				$this -> wt = ($this -> mSemester) + ($this -> mCgpa);
				Validate::Adduser($this -> mUsername, md5($this -> mPassword), $this -> mSemester, $this -> mCgpa, $this -> wt);
				header('Location:' . Link::toIndex());
			}
		}
		
	}

};

?>