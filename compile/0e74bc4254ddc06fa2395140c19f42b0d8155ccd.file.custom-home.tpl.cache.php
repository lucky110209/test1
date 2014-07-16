<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:42
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/modules/hsreview/custom-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2203953c5db9e7ddfd5-52509304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e74bc4254ddc06fa2395140c19f42b0d8155ccd' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/modules/hsreview/custom-home.tpl',
      1 => 1405398721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2203953c5db9e7ddfd5-52509304',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('list_reviews')->value)>0&&$_smarty_tpl->getVariable('list_reviews')->value){?>
<div class="blog_reviews">
    <h3><?php echo smartyTranslate(array('s'=>'LES','mod'=>'hsreview'),$_smarty_tpl);?>
 <strong><?php echo smartyTranslate(array('s'=>'AVIS','mod'=>'hsreview'),$_smarty_tpl);?>
</strong></h3>    
	<p class="align_c scroll_actions">
		<a href="javascript:void(0);" class="icon arrow-up">&nbsp;</a>
	</p>
	<ul>
	    <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_reviews')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['review']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['review']->iteration=0;
if ($_smarty_tpl->tpl_vars['review']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
 $_smarty_tpl->tpl_vars['review']->iteration++;
 $_smarty_tpl->tpl_vars['review']->last = $_smarty_tpl->tpl_vars['review']->iteration === $_smarty_tpl->tpl_vars['review']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['review']['last'] = $_smarty_tpl->tpl_vars['review']->last;
?>
		<li class="clearfix<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['review']['last']){?> last<?php }?>">
		    <div class="rate">
			<span><?php echo $_smarty_tpl->tpl_vars['review']->value['num_star'];?>
/5</span>
			<span class="icon star star-<?php echo $_smarty_tpl->tpl_vars['review']->value['num_star'];?>
">&nbsp;</span>
		    </div>
		    <div class="content">
			<h5><a href="#"><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</a></h5>
			<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['review']->value['content'],80," (..)");?>
</p>
		    </div>
		</li>
	    <?php }} ?>
	</ul>		
	<p class="align_c scroll_actions">
		<a href="javascript:void(0);" class="icon arrow-down">&nbsp;</a>
	</p>
</div>
<?php }?>	


    <script type="text/javascript">
	$(document).ready(function() {
	    //Trigger Review blog scroll effect
	    $('#home_right_block .blog_reviews ul').serialScroll({
			items: 'li',
			next: '.blog_reviews a.arrow-down',
			prev: '.blog_reviews a.arrow-up',
			duration: 1200,
			stop: true,
			force: false,
			axis: 'y',
			easing: 'linear',
			lazy: true,
			step: 3,
			cycle: true
		});
	});
	</script>
