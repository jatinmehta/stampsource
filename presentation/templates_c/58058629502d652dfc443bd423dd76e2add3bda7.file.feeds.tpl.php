<?php /* Smarty version Smarty-3.0.8, created on 2012-10-03 07:33:57
         compiled from "C:\wamp\www\stampsource/presentation/templates\feeds.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23810506bea6589df09-36714182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58058629502d652dfc443bd423dd76e2add3bda7' => 
    array (
      0 => 'C:\\wamp\\www\\stampsource/presentation/templates\\feeds.tpl',
      1 => 1349249634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23810506bea6589df09-36714182',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\stampsource/presentation/smarty_plugins\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"feeds",'assign'=>"obj"),$_smarty_tpl);?>

<h3><b style='color:red;'>"<?php echo $_smarty_tpl->getVariable('obj')->value->mUsername;?>
" </b> Welcome to StampSource's Resource Locator... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="span3 search-query"   placeholder="Search "/><i class="icon-search"></i><a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToLogout;?>
"><button class="btn btn-inverse" style="float:right;">Logout </button></a> </h3>
<br/>
<div style="float:bottom; background:url('images/bg.jpg'); background-repeat:no-repeat;">
<br/>
</div><br/>
<br/>
<br/>

<div class="row">
	<div class="span2" >
		<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->navCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</div>

	<div class="span8">
		<div class="span8">
		<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->postCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>

		<div class="span8">
		<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->contentCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>
	</div>
</div>
