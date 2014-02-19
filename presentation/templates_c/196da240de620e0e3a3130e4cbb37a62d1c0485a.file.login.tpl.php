<?php /* Smarty version Smarty-3.0.8, created on 2012-10-03 00:07:32
         compiled from "C:\wamp\www\stampsource/presentation/templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24393506b81c4f29f99-27659870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '196da240de620e0e3a3130e4cbb37a62d1c0485a' => 
    array (
      0 => 'C:\\wamp\\www\\stampsource/presentation/templates\\login.tpl',
      1 => 1349214036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24393506b81c4f29f99-27659870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\stampsource/presentation/smarty_plugins\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"login",'assign'=>"obj"),$_smarty_tpl);?>


<h2> Login Page </h2>
<center>
<div class="well span11" >
<form class="form-inline" action="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToLogin;?>
" method="post">
		<br/><br/><br/><br/><br/>
		<input type="text" class="input search-query" placeholder=" Enter Roll Num" name="username" value="<?php echo $_smarty_tpl->getVariable('obj')->value->mUsername;?>
"> <br/><br/>
		<input type="password" class="input search-query" placeholder="Password" name="password" value=""><br/><br/>
		<button type="submit" class="btn btn-primary" name="login">Sign in</button> 
		 <button type="submit" class="btn" name="register" ><a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToSignUp;?>
">Register</a></button>
		<br/><br/><br/><br/><br/>
</form>
</center>
</div>