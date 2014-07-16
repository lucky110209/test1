<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 04:14:49
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/modules/categorybanner1/categorybanner1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:642753c5e0197628b4-26955658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f36c3733d55089577995b70ae8a25260b49647' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/modules/categorybanner1/categorybanner1.tpl',
      1 => 1405404891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '642753c5e0197628b4-26955658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="left_column_cats" class="mobile_hidden"> 	
	<ul>
	    <?php  $_smarty_tpl->tpl_vars['home_link'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('xml')->value->link; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['links']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['home_link']->key => $_smarty_tpl->tpl_vars['home_link']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['links']['iteration']++;
?>
		<li>
		    <a href="<?php echo $_smarty_tpl->getVariable('home_link')->value->url;?>
"><img src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
modules/categorybanner1/slides/<?php echo $_smarty_tpl->getVariable('home_link')->value->img;?>
" alt="<?php echo $_smarty_tpl->getVariable('home_link')->value->alt;?>
" title="<?php echo $_smarty_tpl->getVariable('home_link')->value->alt;?>
" /></a>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['links']['iteration']==2){?>
				<a class="button special-font" href="<?php echo $_smarty_tpl->getVariable('home_link')->value->url;?>
">Nouveau</a>
			<?php }else{ ?>
				<a class="button" href="<?php echo $_smarty_tpl->getVariable('home_link')->value->url;?>
">Découvrir </a>
			<?php }?>
		</li>
	    <?php }} ?>
	</ul>
</div>