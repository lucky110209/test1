<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:44
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/./top-links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164653c5dba0284d12-49792402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6192292fdb9236588628bab46a8b0a776e713940' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/./top-links.tpl',
      1 => 1405404891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164653c5dba0284d12-49792402',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div id="top_links" class="clearfix mobile_hidden">
	<div id="custom_search" class="block">
		<a href="#pp_search_content" class="searchPlugin"></a>
	</div>
	<div class="block second-block">
		<span class="icon scissors">&nbsp;</span>
		<div class="content">
			CHEVEUX 100% NATUREL
			<span class="small-txt">Qualité Remy Hair</span>
		</div>
	</div>
	
	<?php if (isset($_smarty_tpl->getVariable('total_collect',null,true,false)->value)){?>
		<div id="contest_link">
			<a class="contest_btn" href="<?php if ($_smarty_tpl->getVariable('total_collect')->value>0){?><?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
modules/hscontestchristmas/contestchristmas.php?step=2 <?php }else{ ?> <?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
modules/hscontestchristmas/contestchristmas.php <?php }?>" class="contest_btn">JEUX CONCOURS</a>
		</div>
	<?php }else{ ?>
		<?php echo $_smarty_tpl->getVariable('HOOK_CUSTOM_TOP')->value;?>

	<?php }?>
</div>
