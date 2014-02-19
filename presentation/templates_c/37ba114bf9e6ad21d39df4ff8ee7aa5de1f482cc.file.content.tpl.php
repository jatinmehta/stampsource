<?php /* Smarty version Smarty-3.0.8, created on 2012-10-03 07:04:17
         compiled from "C:\wamp\www\stampsource/presentation/templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21390506be371730961-29750010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ba114bf9e6ad21d39df4ff8ee7aa5de1f482cc' => 
    array (
      0 => 'C:\\wamp\\www\\stampsource/presentation/templates\\content.tpl',
      1 => 1349247856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21390506be371730961-29750010',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\stampsource/presentation/smarty_plugins\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"content",'assign'=>"obj"),$_smarty_tpl);?>



<div class="span8">
<h3 style="color:orange;"> <?php echo $_smarty_tpl->getVariable('obj')->value->title;?>
 </h3>
<a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToTopRated;?>
"><button class="btn" style="float:right;" >Show Top Rated</button></a><br/><br/>
</div>

<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('obj')->value->content_stream) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

<br/>	
<div class="row">
	<div class="span1 " style="text-align:center; background-image:url('images/stamp.jpg'); background-repeat:no-repeat;">
		<br/>	

		<p style="color:red; font-size:15px; font-weight:bold;">&nbsp;<?php echo $_smarty_tpl->getVariable('obj')->value->content_stream[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['stamps'];?>
&nbsp;</p>
			<br/>	
	</div>
	<div class="span6">
	<div class="span6 search-query" style="background-color: #ccc;">
	<h4><?php echo $_smarty_tpl->getVariable('obj')->value->content_stream[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['heading'];?>
</h4>
	</div>
	
	<div class="span6 search-query" style="background-color: #eee;">
	<br/>
	<p><?php echo $_smarty_tpl->getVariable('obj')->value->content_stream[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>
</p>
	<p><?php echo $_smarty_tpl->getVariable('obj')->value->content_stream[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['added_on'];?>
</p>
	</div>
	</div>
	<br/>
	<div class="span1" style="float:right;">
		<br/>
		<a href="<?php echo $_smarty_tpl->getVariable('obj')->value->content_stream[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['upstamp_url'];?>
" ><i class="icon-chevron-up"></i></a><br/><br/>
		<a href="<?php echo $_smarty_tpl->getVariable('obj')->value->content_stream[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['downstamp_url'];?>
"><i class="icon-chevron-down"></i></a>
	</div>
	
</div>
<br/>
<?php endfor; endif; ?>