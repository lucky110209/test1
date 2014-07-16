<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 04:14:50
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/modules/hsyoutube/hsyoutube.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1125553c5e01a970449-02319335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38be0f45dfb2fe2a28168d252331ed6cf8cbf71e' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/modules/hsyoutube/hsyoutube.tpl',
      1 => 1405398721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1125553c5e01a970449-02319335',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('youtube_videos')->value)>0&&$_smarty_tpl->getVariable('youtube_videos')->value){?>
<div id="home_video" class="mobile_fullwidth">
	<h3><?php echo smartyTranslate(array('s'=>'TUTORIAUX','mod'=>'hsyoutube'),$_smarty_tpl);?>

	<span class="icon logo">&nbsp;</span>
	<span><?php echo smartyTranslate(array('s'=>'Comment bien poser vos extensions ?','mod'=>'hsyoutube'),$_smarty_tpl);?>
</span></h3>

	<ul class="title clearfix">
	    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youtube_videos')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
		<li <?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>class="selected"<?php }?>><a rel="#video<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" href="javascrip:void(0);"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a></li>
	    <?php }} ?>
	</ul>

	<ul class="content clearfix">
	    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youtube_videos')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
		<li id="video<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>class="active"<?php }?>>
		    <iframe width="525" height="295" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
?wmode=transparent" frameborder="0" allowfullscreen></iframe>
		</li>
	    <?php }} ?>		
	</ul>
</div>
<?php }?>
</div>


    <script type="text/javascript">
	$(document).ready(function() {
	    //Handle video behavior
	    $('#home_video .title a').click(function(e) {
			e.preventDefault();

			if (!$(this).parent().hasClass('selected')) {
				$('#home_video .title li').removeClass('selected');
				$(this).parent().addClass('selected');

				var videoID = $(this).attr('rel');

				$('#home_video .content li').hide();
				$('#home_video .content li' + videoID).show();
			}
	    });
	});
    </script>
