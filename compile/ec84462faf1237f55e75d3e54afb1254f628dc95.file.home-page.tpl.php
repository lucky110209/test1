<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 04:14:50
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/modules/psblog/home-page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1535053c5e01a6cf202-94919658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec84462faf1237f55e75d3e54afb1254f628dc95' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/modules/psblog/home-page.tpl',
      1 => 1405398733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1535053c5e01a6cf202-94919658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="white-content clearfix">
<?php if (count($_smarty_tpl->getVariable('blog_list')->value)>0&&$_smarty_tpl->getVariable('blog_list')->value){?>
    <div id="blog_home" class="mobile_hidden">
	<h3><?php echo smartyTranslate(array('s'=>'BLOG','mod'=>'psblog'),$_smarty_tpl);?>
</h3>
	<p class="align_c scroll_actions">
		<a href="javascript:void(0);" class="icon arrow-up">&nbsp;</a>
	</p>
	<ul>
	    <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('blog_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
if ($_smarty_tpl->tpl_vars['blog']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog']['last'] = $_smarty_tpl->tpl_vars['blog']->last;
?>
		<li class="clearfix<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blog']['last']){?> last<?php }?>">
		    <a class="blog-img" href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
">
			<img src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
<?php echo $_smarty_tpl->getVariable('blog_conf')->value['img_save_path'];?>
timthumb.php?src=<?php echo $_smarty_tpl->getVariable('img_path')->value;?>
<?php echo $_smarty_tpl->tpl_vars['blog']->value['default_img_name'];?>
&w=<?php echo $_smarty_tpl->getVariable('blog_conf')->value['img_list_width'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
" />
		    </a>
		    <div class="blog-content">
			<p class="title"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</p>
			<p><?php echo $_smarty_tpl->tpl_vars['blog']->value['excerpt'];?>
</p>
			<p class="author"><?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
</p>
		    </div>
		</li>
	    <?php }} ?>
	</ul>
	<p class="align_c scroll_actions">
		<a href="javascript:void(0);" class="icon arrow-down">&nbsp;</a>
	</p>
	<p class="align_c no-padb"><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
/modules/psblog/content.php" class="button"><?php echo smartyTranslate(array('s'=>'VOIR TOUS LES ARTICLES','mod'=>'psblog'),$_smarty_tpl);?>
</a></p>
    </div>
<?php }?>


    <script type="text/javascript">
	$(document).ready(function() {
	    //Trigger Blog Post scroll effect
	    $('#blog_home ul').serialScroll({
			items: 'li',
			prev: '#blog_home a.arrow-up',
			next: '#blog_home a.arrow-down',
			duration: 1200,
			stop: true,
			force: false,
			axis: 'y',
			easing: 'linear',
			lazy: true,
			step: 2,
			cycle: true
	    });

	});
    </script>
