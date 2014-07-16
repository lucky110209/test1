<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:42
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/modules/hsreview/custom-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2304453c5db9e9a05b0-38862525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d747a4591710b533e8ca5c9db30ac1d6324f496' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/modules/hsreview/custom-top.tpl',
      1 => 1405398721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2304453c5db9e9a05b0-38862525',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('list_reviews')->value)>0&&$_smarty_tpl->getVariable('list_reviews')->value){?>
    <div class="blog_reviews">
	<ul>
	    <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_reviews')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['review']->key;
?>
		<li class="clearfix">
		    <div class="rate">
			<span><?php echo $_smarty_tpl->tpl_vars['review']->value['num_star'];?>
/5</span>
			<span class="icon star star-<?php echo $_smarty_tpl->tpl_vars['review']->value['num_star'];?>
">&nbsp;</span>
		    </div>
		    <div class="content">
			<h5><a href="#"><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</a></h5>
			<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['review']->value['content'],100," ");?>
</p>
		    </div>
		</li>
	    <?php }} ?>
	</ul>
    </div>
<?php }?>