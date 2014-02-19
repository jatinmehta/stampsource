{load_presentation_object filename="signup" assign="obj"}

<h1> Register Here </h1>

<div class='span11'>
<div class='span2'>
<br/>
<br/>
	<p>Username:</p><br/>
	<p>Password:</p><br/>
	<p>Retype Password:</p><br/>
	<p>Semester:</p><br/>
	<p>CGPA:</p><br/>
	<br/>
</div>
<form class="well form-inline" action="{$obj->mLinkToRegister}" method="post">
<br/>
	 <input type="text" class="input search-query" placeholder="" name="username" value=""><br/><br/>
		 <input type="password" class="input search-query" placeholder="" name="password" value=""><br/><br/>
		 <input type="password" class="input search-query" placeholder="" name="cpassword" value=""><br/><br/>
		 <input type="text" class="input search-query" placeholder="" name="semester" value=""><br/><br/>
		 <input type="text" class="input search-query" placeholder="" name="cgpa" value=""><br/><br/>
	
		<button type="submit" class="btn btn-primary" name="register">Register</button> 
		<button type="submit" class="btn" name="registered"><a href="{$obj->mLinkToIndex}">Already Registered</a></button>
		<p><a href=''>
		
		{if $obj->info eq 1}
			<h3> Your password didnt match. try again </h3>
		{/if}
		{if $obj->info eq 2}
			<h3> This username already exists. try again </h3>
		{/if}
</form>

</div>