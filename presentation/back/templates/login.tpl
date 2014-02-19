{load_presentation_object filename="login" assign="obj"}

<h1> Login Page </h1>
<center>
<div class='span11'>
<form class="well form-inline" action="{$obj->mLinkToLogin}" method="post">
		<br/><br/><br/><br/><br/>
		<input type="text" class="input search-query" placeholder=" Enter Roll Num" name="username" value="{$obj->mUsername}"> <br/><br/>
		<input type="password" class="input search-query" placeholder="Password" name="password" value=""><br/><br/>
		<button type="submit" class="btn btn-primary" name="login">Sign in</button> 
		<button type="submit" class="btn" name="register" > <a href="{$obj->mLinkToSignUp}">Register</a></button> 
		<br/><br/><br/><br/><br/>
</form>
</center>
</div>