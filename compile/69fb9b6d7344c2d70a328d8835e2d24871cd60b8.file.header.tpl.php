<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:52
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2601253c5dba82e2fa2-55365879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fb9b6d7344c2d70a328d8835e2d24871cd60b8' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/header.tpl',
      1 => 1405398781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2601253c5dba82e2fa2-55365879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'E:\hiennv\htdocs\hamsa\1001extensions\src\tools\smarty\plugins\modifier.escape.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->getVariable('lang_iso')->value;?>
">
	<head>
		<title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_title')->value,'htmlall','UTF-8');?>
</title>
		
<?php if (isset($_smarty_tpl->getVariable('meta_description',null,true,false)->value)&&$_smarty_tpl->getVariable('meta_description')->value){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_description')->value,'html','UTF-8');?>
" />
<?php }else{ ?>
		<meta content='This Article will Guide us How to Avoid Facebook Wrong Thumbnail Image Issue while Sharing post on Facebook. Resolve wrong picture show in Facebook.' name='description'/>
<?php }?>
<?php if (isset($_smarty_tpl->getVariable('meta_keywords',null,true,false)->value)&&$_smarty_tpl->getVariable('meta_keywords')->value){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_keywords')->value,'html','UTF-8');?>
" />
<?php }?>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->getVariable('nobots',null,true,false)->value)){?>no<?php }?>index,follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
favicon.ico?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
favicon.ico?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" />
		<?php if (isset($_smarty_tpl->getVariable('is_mobile',null,true,false)->value)&&$_smarty_tpl->getVariable('is_mobile')->value){?>
		    <meta http-equiv="x-ua-compatible" content="IE=edge" />
		    <meta name="apple-mobile-web-app-capable" content="yes">
		    <meta name="apple-touch-fullscreen" content="yes">
		<?php }?>
		<?php if (isset($_smarty_tpl->getVariable('enable_responsive',null,true,false)->value)&&$_smarty_tpl->getVariable('enable_responsive')->value){?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php }?>
		<script type="text/javascript">
			var baseDir = '<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
';
			var static_token = '<?php echo $_smarty_tpl->getVariable('static_token')->value;?>
';
			var token = '<?php echo $_smarty_tpl->getVariable('token')->value;?>
';
			var priceDisplayPrecision = <?php echo $_smarty_tpl->getVariable('priceDisplayPrecision')->value*$_smarty_tpl->getVariable('currency')->value->decimals;?>
;
			var priceDisplayMethod = <?php echo $_smarty_tpl->getVariable('priceDisplay')->value;?>
;
			var roundMode = <?php echo $_smarty_tpl->getVariable('roundMode')->value;?>
;
			var currentPage = '<?php echo $_smarty_tpl->getVariable('page_name')->value;?>
';
			var is_mobile = '<?php echo $_smarty_tpl->getVariable('is_mobile')->value;?>
';
		</script>
<?php if (isset($_smarty_tpl->getVariable('css_files',null,true,false)->value)){?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('css_files')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php }} ?>
<?php }?>

<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('css_dir')->value;?>
ie8.css" />
<![endif]-->

<?php if (isset($_smarty_tpl->getVariable('js_files',null,true,false)->value)){?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('js_files')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php }} ?>
<?php }?>
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
themes/prestashop/js/countdown.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('js_dir')->value;?>
/behavior.js"></script>
	
	<script type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
/themes/prestashop/js/jQuery.styledSelect.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
/js/jquery.optionTree.js"></script>
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:500,700' rel='stylesheet' type='text/css' />
	<?php if ($_smarty_tpl->getVariable('page_name')->value=='index'){?><link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css' /><?php }?>
	
		<?php echo $_smarty_tpl->getVariable('HOOK_HEADER')->value;?>

	</head>
	<body <?php if ($_smarty_tpl->getVariable('page_name')->value){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page_name')->value,'htmlall','UTF-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->getVariable('is_mobile',null,true,false)->value)&&$_smarty_tpl->getVariable('is_mobile')->value){?>mobile<?php }else{ ?>large-view<?php }?><?php if (isset($_smarty_tpl->getVariable('id_category',null,true,false)->value)){?> landing-<?php echo $_smarty_tpl->getVariable('id_category')->value;?>
<?php }?><?php if (isset($_smarty_tpl->getVariable('total_collect',null,true,false)->value)){?> hscontest<?php }?>">
	<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
		<?php if (isset($_smarty_tpl->getVariable('restricted_country_mode',null,true,false)->value)&&$_smarty_tpl->getVariable('restricted_country_mode')->value){?>
		<div id="restricted-country">
			<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->getVariable('geolocation_country')->value;?>
</span></p>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('is_mobile')->value){?>
		    
		    <?php echo $_smarty_tpl->getVariable('HOOK_LEFT_COLUMN')->value;?>

		<?php }?>
		<div id="wrapper">
			<div id="top_banner" class="mobile_hidden">&nbsp;</div>

			<!-- Header -->
			<div id="header">
				<div id="top"></div>
				<div id="header_overlay">
					<div id="line"></div>
				</div>

				<div class="page clearfix">
					<?php if ($_smarty_tpl->getVariable('page_name')->value=='order'||$_smarty_tpl->getVariable('page_name')->value=='order-opc2'||$_smarty_tpl->getVariable('page_name')->value=='order-opc'||$_smarty_tpl->getVariable('page_name')->value=='authentication'){?> 
					    <?php $_smarty_tpl->tpl_vars["show_link"] = new Smarty_variable(0, null, null);?>
					<?php }else{ ?>    
					    <?php $_smarty_tpl->tpl_vars["show_link"] = new Smarty_variable(1, null, null);?>
					<?php }?> 
					<a id="header_logo" href="<?php if ($_smarty_tpl->getVariable('show_link')->value==1){?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
<?php }else{ ?>javascript:void(0);<?php }?>" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
">
						<img class="logo" src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
logo.jpg?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
" <?php if ($_smarty_tpl->getVariable('logo_image_width')->value){?>width="<?php echo $_smarty_tpl->getVariable('logo_image_width')->value;?>
"<?php }?> <?php if ($_smarty_tpl->getVariable('logo_image_height')->value){?>height="<?php echo $_smarty_tpl->getVariable('logo_image_height')->value;?>
" <?php }?> />
					</a>
					<div id="header_right">
						<?php echo $_smarty_tpl->getVariable('HOOK_TOP')->value;?>

					</div>
					<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./top-links.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
					
					<div class="hoverSearch" style="display:none">
						<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./searchmodule.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
					</div>

				</div>
			</div>

			<div id="columns">
				<div  class="page clearfix">
				<!-- Left -->
				<?php if (!$_smarty_tpl->getVariable('is_mobile')->value){?>
				<div id="left_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_LEFT_COLUMN')->value;?>

				</div>
				<?php }?>
				<!-- Center -->
				<div id="center_column">				    

	<?php }?>
