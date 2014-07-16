<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 04:14:49
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/modules/categorybanner/categorybanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2231453c5e01958d9e9-66058894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f0ebd6b8da01743d41805c21a35d9549b49b135' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/modules/categorybanner/categorybanner.tpl',
      1 => 1405404891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2231453c5e01958d9e9-66058894',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div id="main_cats_home" class="category_image clearfix mobile_hidden">
	<ul>
	    <?php  $_smarty_tpl->tpl_vars['home_link'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('xml')->value->link; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['home_link']->key => $_smarty_tpl->tpl_vars['home_link']->value){
?>
		<li>
			<a href="<?php echo $_smarty_tpl->getVariable('home_link')->value->url;?>
"><img src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
modules/categorybanner/slides/<?php echo $_smarty_tpl->getVariable('home_link')->value->img;?>
" alt="<?php echo $_smarty_tpl->getVariable('home_link')->value->alt;?>
" title="<?php echo $_smarty_tpl->getVariable('home_link')->value->alt;?>
" /></a>
			<a class="button" href="<?php echo $_smarty_tpl->getVariable('home_link')->value->url;?>
">Découvrir </a>
		</li>
	    <?php }} ?>
	</ul>
</div>