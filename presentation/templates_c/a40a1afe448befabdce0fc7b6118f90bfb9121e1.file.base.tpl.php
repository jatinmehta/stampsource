<?php /* Smarty version Smarty-3.0.8, created on 2012-10-03 00:15:25
         compiled from "C:\wamp\www\stampsource/presentation/templates\base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28926506b839d8675f0-08152277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a40a1afe448befabdce0fc7b6118f90bfb9121e1' => 
    array (
      0 => 'C:\\wamp\\www\\stampsource/presentation/templates\\base.tpl',
      1 => 1349223242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28926506b839d8675f0-08152277',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\stampsource/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"base",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->getConfigVariable('site_title');?>
</title>
	
	<script src="styles/bootstrap/js/jquery.js"></script>
	
	<link href="styles/bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css" />
	<link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="styles/bootstrap/css/docs.css" rel="stylesheet" type="text/css" />
	<link href="styles/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="styles/navigation/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
	<link href="styles/style.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="styles/colorbox/css/colorbox.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="styles/colorbox/js/jquery.colorbox.js"></script>
	<script src="styles/bootstrap/js/bootstrap-dropdown.js"> </script>
	
	<style type="text/css">
		
	</style>
	
	
	
</head>

<body>
	
	<div class="page-header" id="banner" style="background-color:#ccc;background:url('images/bg_header.jpg'); height:55px;">
		<br/>
		<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->mHeader, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</div>
	
	<div class="container">
		
		<div class="span11">
			<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->mCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>	
	</div>

	
</body>

</html>