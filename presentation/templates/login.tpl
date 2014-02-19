{load_presentation_object filename="login" assign="obj"}

<h2> Login Page </h2>
<center>
<div class="well span11" >
<form class="form-inline" action="{$obj->mLinkToLogin}" method="post">
		<br/><br/><br/><br/><br/>
		<input type="text" class="input search-query" placeholder=" Enter Roll Num" name="username" value="{$obj->mUsername}"> <br/><br/>
		<input type="password" class="input search-query" placeholder="Password" name="password" value=""><br/><br/>
		<button type="submit" class="btn btn-primary" name="login">Sign in</button> 
		 <button type="submit" class="btn" name="register" ><a href="{$obj->mLinkToSignUp}">Register</a></button>
		<br/><br/><br/><br/><br/>
</form>
</center>
</div>