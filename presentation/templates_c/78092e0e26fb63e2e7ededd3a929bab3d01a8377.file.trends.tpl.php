<?php /* Smarty version Smarty-3.0.8, created on 2012-10-03 07:09:36
         compiled from "C:\wamp\www\stampsource/presentation/templates\trends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8187506be4b0d97781-65600316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78092e0e26fb63e2e7ededd3a929bab3d01a8377' => 
    array (
      0 => 'C:\\wamp\\www\\stampsource/presentation/templates\\trends.tpl',
      1 => 1349248174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8187506be4b0d97781-65600316',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\stampsource/presentation/smarty_plugins\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"trends",'assign'=>"obj"),$_smarty_tpl);?>

<h3>Trends..</h3><br/>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('obj')->value->trend_list) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
	<div class="span2">
		<?php if ($_smarty_tpl->getVariable('obj')->value->trend_list[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user_flag']==1){?>
		<a href=""title="Remove Your Trend"><i class="icon-trash" style="float:right;"></i></a>
		<?php }?>
	<h4> <a href="<?php echo $_smarty_tpl->getVariable('obj')->value->trend_list[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['feed_url'];?>
"> <?php echo $_smarty_tpl->getVariable('obj')->value->trend_list[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tag_name'];?>
 </a> </h4>
	<img src="images/box.jpg" style="float:bottom;" />
	</div>
<?php endfor; endif; ?>

<h4>Add New  Trend</h4>
<form class="span2" action="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToAddTrend;?>
" method="post">
<br/>
<input type="text" class="search-query" name="trend" placeholder="Add a New Trend..." style="width:100px;"/><br/><br/>
<button name="add" class="btn  btn-primary" style="float:left; font-size:13px; ">Add</button>
</form>