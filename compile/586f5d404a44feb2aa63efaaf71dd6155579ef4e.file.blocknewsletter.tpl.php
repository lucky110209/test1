<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:55
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/modules/blocknewsletter/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3002253c5dbab02a825-55840320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586f5d404a44feb2aa63efaaf71dd6155579ef4e' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/modules/blocknewsletter/blocknewsletter.tpl',
      1 => 1405398782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3002253c5dbab02a825-55840320',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="clearfix mobile_hidden">
	<div class="block-txt">
		<h4>INSCRIVEZ -VOUS À LA NEWSLETTER DÈS MAINTENANT</h4>
		<p>Recevez des bons de réduction et des offres exceptionnelles tout au long de l'année</p>
	</div>
	<div class="block_content">
	<?php if (isset($_smarty_tpl->getVariable('msg',null,true,false)->value)&&$_smarty_tpl->getVariable('msg')->value){?>
		<script>
		    
		      $(document).ready(function(){
			    goToByScroll('newsletter_block_left');
		      });		    
		</script>    
		<p class="<?php if ($_smarty_tpl->getVariable('nw_error')->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</p>
	<?php }?>
		<form action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
" method="post">
			<p>
				<input type="text"  class="nlinput" name="email" size="18" value="<?php if (isset($_smarty_tpl->getVariable('value',null,true,false)->value)&&$_smarty_tpl->getVariable('value')->value){?><?php echo $_smarty_tpl->getVariable('value')->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
')this.value='';" onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
';" />
				<select name="action" style="display:none;">
					<option value="0"<?php if (isset($_smarty_tpl->getVariable('action',null,true,false)->value)&&$_smarty_tpl->getVariable('action')->value==0){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
					<option value="1"<?php if (isset($_smarty_tpl->getVariable('action',null,true,false)->value)&&$_smarty_tpl->getVariable('action')->value==1){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Unsubscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
				</select>
				<input type="submit" value="je m’inscris" class="button_mini" name="submitNewsletter" />
			</p>
		</form>
	</div>
</div>

<!-- /Block Newsletter module-->
