<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:56:00
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/modules/blockcart/blockcart-json.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3132553c5dbb05cd853-22942452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '817d86e6e2ae818a44cd15da6366efc87ab6d138' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/modules/blockcart/blockcart-json.tpl',
      1 => 1405409192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3132553c5dbb05cd853-22942452',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include 'E:\hiennv\htdocs\hamsa\1001extensions\src\tools\smarty\plugins\modifier.replace.php';
if (!is_callable('smarty_modifier_escape')) include 'E:\hiennv\htdocs\hamsa\1001extensions\src\tools\smarty\plugins\modifier.escape.php';
?>{"products": [<?php if ($_smarty_tpl->getVariable('products')->value){?><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
if ($_smarty_tpl->tpl_vars['product']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['product']->key;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?><?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, null);?><?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, null);?><?php $_smarty_tpl->tpl_vars['productName'] = new Smarty_variable(explode("-",$_smarty_tpl->tpl_vars['product']->value['name']), null, null);?>	{		"id":            <?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
,		"key": "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
",		"link":          "<?php echo smarty_modifier_replace(addslashes($_smarty_tpl->getVariable('link')->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'])),'\\\'','\'');?>
",		"imageLink":   " <?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small');?>
",		"quantity":      <?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity'];?>
,		"priceByLine":   "<?php if ($_smarty_tpl->getVariable('priceDisplay')->value==@PS_TAX_EXC){?><?php ob_start();?><?php echo Product::displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl);?>
<?php echo html_entity_decode(ob_get_clean(),2,'UTF-8')?><?php }else{ ?><?php ob_start();?><?php echo Product::displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl);?>
<?php echo html_entity_decode(ob_get_clean(),2,'UTF-8')?><?php }?>",		"name":          "<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('productName')->value[0],'htmlall','UTF-8');?>
",		"name2":	"<?php if ($_smarty_tpl->getVariable('productName')->value[2]){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('productName')->value[2],'htmlall','UTF-8');?>
 <?php }else{ ?> <?php }?>",		"price":         "<?php if ($_smarty_tpl->getVariable('priceDisplay')->value==@PS_TAX_EXC){?><?php ob_start();?><?php echo Product::displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl);?>
<?php echo html_entity_decode(ob_get_clean(),2,'UTF-8')?><?php }else{ ?><?php ob_start();?><?php echo Product::displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl);?>
<?php echo html_entity_decode(ob_get_clean(),2,'UTF-8')?><?php }?>",		"subLink": "<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['id_product']!=$_smarty_tpl->getVariable('id_free_gift_product')->value){?><a class='cart_block_quantity_down icon minus' id='cart_block_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
' href='<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?add&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;op=down&amp;token=<?php echo $_smarty_tpl->getVariable('token')->value;?>
'></a><?php }else{ ?>		    <a class='cart_block_quantity_down icon minus' style='opacity: 0.3;' href='#' id='cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
'></a>		<?php }?>",		"addLink": "<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product']!=$_smarty_tpl->getVariable('id_free_gift_product')->value){?><a rel='nofollow' class='cart_block_quantity_up icon plus' id='cart_block_quantity_up_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
' href='<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?add&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;token=<?php echo $_smarty_tpl->getVariable('token')->value;?>
' ></a><?php }?>",		"idCombination": <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?><?php echo $_smarty_tpl->getVariable('productAttributeId')->value;?>
<?php }else{ ?>0<?php }?>,<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?>		"hasAttributes": true,		"attributes":    "<?php echo smarty_modifier_replace(addslashes($_smarty_tpl->tpl_vars['product']->value['attributes_small']),'\\\'','\'');?>
",<?php }else{ ?>		"hasAttributes": false,<?php }?>		"hasCustomizedDatas": <?php if (isset($_smarty_tpl->getVariable('customizedDatas',null,true,false)->value[$_smarty_tpl->getVariable('productId',null,true,false)->value][$_smarty_tpl->getVariable('productAttributeId',null,true,false)->value])){?>true<?php }else{ ?>false<?php }?>,		"customizedDatas":[		<?php if (isset($_smarty_tpl->getVariable('customizedDatas',null,true,false)->value[$_smarty_tpl->getVariable('productId',null,true,false)->value][$_smarty_tpl->getVariable('productAttributeId',null,true,false)->value])){?>		<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id_customization'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('customizedDatas')->value[$_smarty_tpl->getVariable('productId')->value][$_smarty_tpl->getVariable('productAttributeId')->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['customization']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['customization']->iteration=0;
if ($_smarty_tpl->tpl_vars['customization']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value){
 $_smarty_tpl->tpl_vars['id_customization']->value = $_smarty_tpl->tpl_vars['customization']->key;
 $_smarty_tpl->tpl_vars['customization']->iteration++;
 $_smarty_tpl->tpl_vars['customization']->last = $_smarty_tpl->tpl_vars['customization']->iteration === $_smarty_tpl->tpl_vars['customization']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['customizedDatas']['last'] = $_smarty_tpl->tpl_vars['customization']->last;
?>{			"customizationId":	<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
,			"quantity":			"<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
",			"datas": [				<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['datas']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['datas']->iteration=0;
if ($_smarty_tpl->tpl_vars['datas']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['datas']->key;
 $_smarty_tpl->tpl_vars['datas']->iteration++;
 $_smarty_tpl->tpl_vars['datas']->last = $_smarty_tpl->tpl_vars['datas']->iteration === $_smarty_tpl->tpl_vars['datas']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['customization']['last'] = $_smarty_tpl->tpl_vars['datas']->last;
?>				{					"type":	"<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
",					"datas":					[					<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['data']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['data']->iteration=0;
if ($_smarty_tpl->tpl_vars['data']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['data']->key;
 $_smarty_tpl->tpl_vars['data']->iteration++;
 $_smarty_tpl->tpl_vars['data']->last = $_smarty_tpl->tpl_vars['data']->iteration === $_smarty_tpl->tpl_vars['data']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['datas']['last'] = $_smarty_tpl->tpl_vars['data']->last;
?>						{						"index":			<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
,						"value":			"<?php echo smarty_modifier_replace(addslashes($_smarty_tpl->tpl_vars['data']->value['value']),'\\\'','\'');?>
",						"truncatedValue":	"<?php echo smarty_modifier_replace(addslashes(smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['value'],28,'...')),'\\\'','\'');?>
"						}<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['datas']['last']){?>,<?php }?>					<?php }} ?>]				}<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['customization']['last']){?>,<?php }?>				<?php }} ?>			]		}<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['customizedDatas']['last']){?>,<?php }?>		<?php }} ?>		<?php }?>		]	}<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']){?>,<?php }?><?php }} ?><?php }?>],"discounts": [<?php if ($_smarty_tpl->getVariable('discounts')->value){?><?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('discounts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['discount']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['discount']->iteration=0;
if ($_smarty_tpl->tpl_vars['discount']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value){
 $_smarty_tpl->tpl_vars['discount']->iteration++;
 $_smarty_tpl->tpl_vars['discount']->last = $_smarty_tpl->tpl_vars['discount']->iteration === $_smarty_tpl->tpl_vars['discount']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['discounts']['last'] = $_smarty_tpl->tpl_vars['discount']->last;
?>	{		"id":              "<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
",		"name":            "<?php echo smarty_modifier_replace(addslashes(smarty_modifier_truncate((($_smarty_tpl->tpl_vars['discount']->value['name']).(' : ')).($_smarty_tpl->tpl_vars['discount']->value['description']),18,'...')),'\\\'','\'');?>
",		"description":     "<?php echo smarty_modifier_replace(addslashes($_smarty_tpl->tpl_vars['discount']->value['description']),'\\\'','\'');?>
",		"nameDescription": "<?php echo smarty_modifier_replace(addslashes(smarty_modifier_truncate((($_smarty_tpl->tpl_vars['discount']->value['name']).(' : ')).($_smarty_tpl->tpl_vars['discount']->value['description']),18,'...')),'\\\'','\'');?>
",		"link":            "<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
?deleteDiscount=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
",		"price":           "-<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real']!='!'){?><?php if ($_smarty_tpl->getVariable('priceDisplay')->value==1){?><?php ob_start();?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']),$_smarty_tpl);?>
<?php echo html_entity_decode(ob_get_clean(),2,'UTF-8')?><?php }else{ ?><?php ob_start();?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']),$_smarty_tpl);?>
<?php echo html_entity_decode(ob_get_clean(),2,'UTF-8')?><?php }?><?php }?>"	}	<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['discounts']['last']){?>,<?php }?><?php }} ?><?php }?>],"shippingCost": "<?php echo html_entity_decode($_smarty_tpl->getVariable('shipping_cost')->value,2,'UTF-8');?>
",<?php if (isset($_smarty_tpl->getVariable('tax_cost',null,true,false)->value)){?>"taxCost": "<?php echo html_entity_decode($_smarty_tpl->getVariable('tax_cost')->value,2,'UTF-8');?>
",<?php }?>"wrappingCost": "<?php echo html_entity_decode($_smarty_tpl->getVariable('wrapping_cost')->value,2,'UTF-8');?>
","nbTotalProducts": "<?php echo $_smarty_tpl->getVariable('nb_total_products')->value;?>
","total": "<?php echo html_entity_decode($_smarty_tpl->getVariable('total')->value,2,'UTF-8');?>
","totalProducts": "<?php echo count($_smarty_tpl->getVariable('products')->value);?>
","productTotal": "<?php echo html_entity_decode($_smarty_tpl->getVariable('product_total')->value,2,'UTF-8');?>
","refrest_total_discount": "<?php echo $_smarty_tpl->getVariable('refrest_total_discount')->value;?>
",<?php if (isset($_smarty_tpl->getVariable('errors',null,true,false)->value)&&$_smarty_tpl->getVariable('errors')->value){?>"hasError" : true,"errors" : [<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['error']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['error']->iteration=0;
if ($_smarty_tpl->tpl_vars['error']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
 $_smarty_tpl->tpl_vars['error']->iteration++;
 $_smarty_tpl->tpl_vars['error']->last = $_smarty_tpl->tpl_vars['error']->iteration === $_smarty_tpl->tpl_vars['error']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['errors']['last'] = $_smarty_tpl->tpl_vars['error']->last;
?>	"<?php echo html_entity_decode(addslashes($_smarty_tpl->tpl_vars['error']->value),2,'UTF-8');?>
"	<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['errors']['last']){?>,<?php }?><?php }} ?>]<?php }else{ ?>"hasError" : false<?php }?>}