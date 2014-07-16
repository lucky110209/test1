<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:44
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/modules/blockcart/blockcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2894353c5dba06dffc2-94444169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d868cb28c3e0888ef0e02e9fdc3f176f47b3e91' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/modules/blockcart/blockcart.tpl',
      1 => 1405398782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2894353c5dba06dffc2-94444169',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'E:\hiennv\htdocs\hamsa\1001extensions\src\tools\smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_modifier_replace')) include 'E:\hiennv\htdocs\hamsa\1001extensions\src\tools\smarty\plugins\modifier.replace.php';
?>
<?php if ($_smarty_tpl->getVariable('ajax_allowed')->value){?>
<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = <?php echo $_smarty_tpl->getVariable('CUSTOMIZE_TEXTFIELD')->value;?>
;
var customizationIdMessage = '<?php echo smartyTranslate(array('s'=>'Customization #','mod'=>'blockcart','js'=>1),$_smarty_tpl);?>
';
var removingLinkText = '<?php echo smartyTranslate(array('s'=>'remove this product from my cart','mod'=>'blockcart','js'=>1),$_smarty_tpl);?>
';
</script>
<?php }?>

<!-- MODULE Block cart -->
<div id="dim_screen" style="display: none;">&nbsp;</div>
<div id="cart_block" class="block exclusive hidden">
	<div class="cart-block-wrapper">
		<div class="top_arrow">&nbsp;</div>
		<div class="block_content">
		<!-- block summary -->
		<div id="cart_block_summary" class="">
			<span class="ajax_cart_quantity" <?php if ($_smarty_tpl->getVariable('cart_qties')->value<=0){?>style="display:none;"<?php }?>><?php echo $_smarty_tpl->getVariable('cart_qties')->value;?>
</span>
			<span class="ajax_cart_product_txt" <?php if ($_smarty_tpl->getVariable('cart_qties')->value<=1){?>style="display:none"<?php }?>><?php echo smartyTranslate(array('s'=>'article ajouté','mod'=>'blockcart'),$_smarty_tpl);?>
</span>
			<span class="ajax_cart_product_txt_s" <?php if ($_smarty_tpl->getVariable('cart_qties')->value>1){?>style="display:none"<?php }?>><?php echo smartyTranslate(array('s'=>'articles ajoutés','mod'=>'blockcart'),$_smarty_tpl);?>
</span>
			<span class="ajax_cart_no_product" <?php if ($_smarty_tpl->getVariable('cart_qties')->value!=0){?>style="display:none"<?php }?>><?php echo smartyTranslate(array('s'=>'(empty)','mod'=>'blockcart'),$_smarty_tpl);?>
</span>
		</div>
		<!-- block list of products -->
		<div id="cart_block_list" class="<?php if (isset($_smarty_tpl->getVariable('colapseExpandStatus',null,true,false)->value)&&$_smarty_tpl->getVariable('colapseExpandStatus')->value=='expanded'||!$_smarty_tpl->getVariable('ajax_allowed')->value||!isset($_smarty_tpl->getVariable('colapseExpandStatus',null,true,false)->value)){?>expanded<?php }else{ ?>collapsed<?php }?>">
		<?php if ($_smarty_tpl->getVariable('products')->value){?>
			<dl class="products">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
if ($_smarty_tpl->tpl_vars['product']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, null);?>
				<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, null);?>
				<dt id="cart_block_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']){?>_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
<?php }?>" class="clearfix <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?>">
					<img class="item-img" src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'],'htmlall','UTF-8');?>
" />
					
					<div class="item-content">
						<?php $_smarty_tpl->tpl_vars['productName'] = new Smarty_variable(explode("-",$_smarty_tpl->tpl_vars['product']->value['name']), null, null);?>
						<a class="cart_block_product_name" href="<?php echo $_smarty_tpl->getVariable('link')->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
">
							<strong><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('productName')->value[0],'htmlall','UTF-8');?>
</strong>
						</a>
						<span class="item-attr gold"><?php if ($_smarty_tpl->getVariable('productName')->value[2]){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('productName')->value[2],'htmlall','UTF-8');?>
 <?php }?></span>

						<p class="qty-wrap">
							<span>Quantité: &nbsp;&nbsp;&nbsp;</span>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product']!=$_smarty_tpl->getVariable('id_free_gift_product')->value){?>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->getVariable('quantityDisplayed')->value)||$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1){?>
									<a rel="nofollow" class="cart_block_quantity_down icon minus" id="cart_block_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?add&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;op=down&amp;token=<?php echo $_smarty_tpl->getVariable('token')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
"></a>
								<?php }else{ ?>
									<a class="cart_block_quantity_down icon minus" style="opacity: 0.3;" href="#" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" title="<?php echo smartyTranslate(array('s'=>'You must purchase a minimum of '),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'];?>
<?php echo smartyTranslate(array('s'=>' of this product.'),$_smarty_tpl);?>
"></a>
								<?php }?>
							<?php }?>
							<span class="quantity gold">&nbsp;<?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->getVariable('quantityDisplayed')->value;?>
&nbsp;</span>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product']!=$_smarty_tpl->getVariable('id_free_gift_product')->value){?>
								<a rel="nofollow" class="cart_block_quantity_up icon plus" id="cart_block_quantity_up_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?add&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;token=<?php echo $_smarty_tpl->getVariable('token')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
"></a>
							<?php }?>
						</p>
					</div>
					
					<div class="item-action align_c">
						<span class="price">
							<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product']!=$_smarty_tpl->getVariable('id_free_gift_product')->value){?>
								<?php if ($_smarty_tpl->getVariable('priceDisplay')->value==@PS_TAX_EXC){?><?php echo Product::displayWtPrice(array('p'=>($_smarty_tpl->tpl_vars['product']->value['total'])),$_smarty_tpl);?>
<?php }else{ ?><?php echo Product::displayWtPrice(array('p'=>($_smarty_tpl->tpl_vars['product']->value['total_wt'])),$_smarty_tpl);?>
<?php }?>
							<?php }else{ ?>
								<?php echo smartyTranslate(array('s'=>'GRATUIT','mod'=>'blockcart'),$_smarty_tpl);?>

							<?php }?>
						</span>

						<?php if (!isset($_smarty_tpl->getVariable('customizedDatas',null,true,false)->value[$_smarty_tpl->getVariable('productId',null,true,false)->value][$_smarty_tpl->getVariable('productAttributeId',null,true,false)->value])){?>
							<a rel="nofollow" class="ajax_cart_block_remove_link icon cart-delete" id="ajax_cart_block_remove_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php');?>
?delete&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;ipa=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
&amp;token=<?php echo $_smarty_tpl->getVariable('static_token')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'remove this product from my cart','mod'=>'blockcart'),$_smarty_tpl);?>
"></a>
					    <?php }?>
					</div>
				</dt>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?>
				<dd id="cart_block_combination_of_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']){?>_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
<?php }?>" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?>">
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category']);?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['attributes_small'];?>
</a>
				<?php }?>

				<!-- Customizable datas -->
				<?php if (isset($_smarty_tpl->getVariable('customizedDatas',null,true,false)->value[$_smarty_tpl->getVariable('productId',null,true,false)->value][$_smarty_tpl->getVariable('productAttributeId',null,true,false)->value])){?>
					<?php if (!isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?><dd id="cart_block_combination_of_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']){?>_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
<?php }?>" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?>"><?php }?>
					<ul class="cart_block_customizations" id="customization_<?php echo $_smarty_tpl->getVariable('productId')->value;?>
_<?php echo $_smarty_tpl->getVariable('productAttributeId')->value;?>
">
						<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id_customization'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('customizedDatas')->value[$_smarty_tpl->getVariable('productId')->value][$_smarty_tpl->getVariable('productAttributeId')->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value){
 $_smarty_tpl->tpl_vars['id_customization']->value = $_smarty_tpl->tpl_vars['customization']->key;
?>
							<li name="customization">
								<div class="deleteCustomizableProduct" id="deleteCustomizableProduct_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
"><a class="ajax_cart_block_remove_link" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php');?>
?delete&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;id_customization=<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
&amp;token=<?php echo $_smarty_tpl->getVariable('static_token')->value;?>
"> </a></div>
								<span class="quantity-formated"><span class="quantity"><?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
</span>x</span><?php if (isset($_smarty_tpl->tpl_vars['customization']->value['datas'][$_smarty_tpl->getVariable('CUSTOMIZE_TEXTFIELD',null,true,false)->value][0])){?>
								<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_escape($_smarty_tpl->tpl_vars['customization']->value['datas'][$_smarty_tpl->getVariable('CUSTOMIZE_TEXTFIELD')->value][0]['value'],'html','UTF-8'),"<br />"," "),28);?>

								<?php }else{ ?>
								<?php echo smartyTranslate(array('s'=>'Customization #','mod'=>'blockcart'),$_smarty_tpl);?>
<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
<?php echo smartyTranslate(array('s'=>':','mod'=>'blockcart'),$_smarty_tpl);?>

								<?php }?>
							</li>
						<?php }} ?>
					</ul>
					<?php if (!isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?></dd><?php }?>
				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?></dd><?php }?>

			<?php }} ?>
			</dl>
		<?php }?>
			<p <?php if ($_smarty_tpl->getVariable('products')->value){?>class="hidden"<?php }?> id="cart_block_no_products"><?php echo smartyTranslate(array('s'=>'No products','mod'=>'blockcart'),$_smarty_tpl);?>
</p>

			<?php if (count($_smarty_tpl->getVariable('discounts')->value)>0){?><table id="vouchers">
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('discounts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value){
?>
					<tr class="bloc_cart_voucher" id="bloc_cart_voucher_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">
						<td class="name" title="<?php echo $_smarty_tpl->tpl_vars['discount']->value['description'];?>
">
							<strong><?php echo (($_smarty_tpl->tpl_vars['discount']->value['name']).(' : '));?>
</strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['discount']->value['description'],'htmlall','UTF-8');?>

						</td>
						<td class="delete item-action align_c">
							<span class="price">
								-<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real']!='!'){?><?php if ($_smarty_tpl->getVariable('priceDisplay')->value==1){?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']),$_smarty_tpl);?>
<?php }else{ ?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']),$_smarty_tpl);?>
<?php }?><?php }?>
							</span>
							<a id="voucher-<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
" class="icon cart-delete voucher-detele" href="javascript:void(0);" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
"></a>
						</td>
					</tr>
				<?php }} ?>
				</tbody>
			</table>
			<?php }?>
			
			<div class="cart-total-wrap">
			<p id="cart-prices" class="clearfix">
				<span class="left"><?php echo smartyTranslate(array('s'=>'Total','mod'=>'blockcart'),$_smarty_tpl);?>
</span>
				<span id="cart_block_total" class="price ajax_block_cart_total right"><?php echo $_smarty_tpl->getVariable('total')->value-$_smarty_tpl->getVariable('shipping_cost')->value;?>
</span>
			</p>
			</div>
			<div class="align_c">
				<p id="cart-buttons">
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink("order.php",true);?>
" id="button_order_cart" class="exclusive<?php if ($_smarty_tpl->getVariable('order_process')->value=='order-opc'){?>_large<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Passer ma commande','mod'=>'blockcart'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Passer ma commande','mod'=>'blockcart'),$_smarty_tpl);?>
</a>
				</p>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- /MODULE Block cart -->

