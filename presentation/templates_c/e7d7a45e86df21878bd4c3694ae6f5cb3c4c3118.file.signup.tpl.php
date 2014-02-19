<?php /* Smarty version Smarty-3.0.8, created on 2012-10-03 00:40:08
         compiled from "C:\wamp\www\stampsource/presentation/templates\signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28867506b8968612411-74178173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d7a45e86df21878bd4c3694ae6f5cb3c4c3118' => 
    array (
      0 => 'C:\\wamp\\www\\stampsource/presentation/templates\\signup.tpl',
      1 => 1349213979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28867506b8968612411-74178173',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\stampsource/presentation/smarty_plugins\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"signup",'assign'=>"obj"),$_smarty_tpl);?>


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
<form class="well form-inline" action="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToRegister;?>
" method="post">
<br/>
	 <input type="text" class="input search-query" placeholder="" name="username" value=""><br/><br/>
		 <input type="password" class="input search-query" placeholder="" name="password" value=""><br/><br/>
		 <input type="password" class="input search-query" placeholder="" name="cpassword" value=""><br/><br/>
		 <input type="text" class="input search-query" placeholder="" name="semester" value=""><br/><br/>
		 <input type="text" class="input search-query" placeholder="" name="cgpa" value=""><br/><br/>
	
		<button type="submit" class="btn btn-primary" name="register">Register</button> 
		<button type="submit" class="btn" name="registered"><a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToIndex;?>
">Already Registered</a></button>
		<p><a href=''>
		
		<?php if ($_smarty_tpl->getVariable('obj')->value->info==1){?>
			<h3> Your password didnt match. try again </h3>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('obj')->value->info==2){?>
			<h3> This username already exists. try again </h3>
		<?php }?>
</form>

</div>