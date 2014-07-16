<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:52
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:703453c5dba8e86fd2-26343328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c831728cb4a77e1efd8634c6ec77ae6d53f5d637' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/shopping-cart.tpl',
      1 => 1405398783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '703453c5dba8e86fd2-26343328',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'E:\hiennv\htdocs\hamsa\1001extensions\src\tools\smarty\plugins\modifier.escape.php';
?>
<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('summary', null, null);?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./order-steps.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1 id="cart_title">RECAPITULATIF COMMANDE
	<span id="summary_products_quantity"><?php echo $_smarty_tpl->getVariable('productNumber')->value;?>
 <?php if ($_smarty_tpl->getVariable('productNumber')->value==1){?><?php echo smartyTranslate(array('s'=>'Article'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Articles'),$_smarty_tpl);?>
<?php }?></span>
</h1>
<p style="display:none" id="emptyCartWarning" class="warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.'),$_smarty_tpl);?>
</p>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('empty',null,true,false)->value)){?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.'),$_smarty_tpl);?>
</p>
<?php }elseif($_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'This store has not accepted your new order.'),$_smarty_tpl);?>
</p>
<?php }else{ ?>
	<script type="text/javascript">
	// <![CDATA[
	var currencySign = '<?php echo html_entity_decode($_smarty_tpl->getVariable('currencySign')->value,2,"UTF-8");?>
';
	var currencyRate = '<?php echo floatval($_smarty_tpl->getVariable('currencyRate')->value);?>
';
	var currencyFormat = '<?php echo intval($_smarty_tpl->getVariable('currencyFormat')->value);?>
';
	var currencyBlank = '<?php echo intval($_smarty_tpl->getVariable('currencyBlank')->value);?>
';
	var txtProduct = "<?php echo smartyTranslate(array('s'=>'product'),$_smarty_tpl);?>
";
	var txtProducts = "<?php echo smartyTranslate(array('s'=>'products'),$_smarty_tpl);?>
";
	// ]]>
	</script>
	
<div id="order-detail-content" class="table_block">
	<?php if (!isset($_smarty_tpl->getVariable('is_mobile',null,true,false)->value)||!$_smarty_tpl->getVariable('is_mobile')->value){?>
	<table id="cart_summary" class="std">
		<thead>
			<tr>
				<th width="20%" class="cart_product first_item"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
				<th width="40%" class="cart_description item"><?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>
</th>
				<th width="15%" align="center" class="cart_unit item"><?php echo smartyTranslate(array('s'=>'Unit price'),$_smarty_tpl);?>
</th>
				<th width="10%" align="center" class="cart_quantity item"><?php echo smartyTranslate(array('s'=>'Qty'),$_smarty_tpl);?>
</th>
				<th width="10%" align="center" class="cart_total"><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</th>
				<th width="5%" class="cart_action"></th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
			<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, null);?>
			<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, null);?>
			<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, null);?>
			<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			<?php if (isset($_smarty_tpl->getVariable('customizedDatas',null,true,false)->value[$_smarty_tpl->getVariable('productId',null,true,false)->value][$_smarty_tpl->getVariable('productAttributeId',null,true,false)->value])){?>
				<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id_customization'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('customizedDatas')->value[$_smarty_tpl->getVariable('productId')->value][$_smarty_tpl->getVariable('productAttributeId')->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value){
 $_smarty_tpl->tpl_vars['id_customization']->value = $_smarty_tpl->tpl_vars['customization']->key;
?>
					<tr id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" class="alternate_item cart_item">
						<td colspan="3">
							<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->getVariable('CUSTOMIZE_FILE')->value){?>
									<div class="customizationUploaded">
										<ul class="customizationUploaded">
											<?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
?><li><img src="<?php echo $_smarty_tpl->getVariable('pic_dir')->value;?>
<?php echo $_smarty_tpl->tpl_vars['picture']->value['value'];?>
_small" alt="" class="customizationUploaded" /></li><?php }} ?>
										</ul>
									</div>
								<?php }elseif($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->getVariable('CUSTOMIZE_TEXTFIELD')->value){?>
									<ul class="typedText">
										<?php  $_smarty_tpl->tpl_vars['textField'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['typedText']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['textField']->key => $_smarty_tpl->tpl_vars['textField']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['typedText']['index']++;
?><li><?php if ($_smarty_tpl->tpl_vars['textField']->value['name']){?><?php echo $_smarty_tpl->tpl_vars['textField']->value['name'];?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Text #'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['typedText']['index']+1;?>
<?php }?><?php echo smartyTranslate(array('s'=>':'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['textField']->value['value'];?>
</li><?php }} ?>
									</ul>
								<?php }?>
							<?php }} ?>
						</td>
						<td class="cart_quantity">
							<div style="float:right">
								<a rel="nofollow" class="cart_quantity_delete" id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?delete&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;id_customization=<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
&amp;token=<?php echo $_smarty_tpl->getVariable('token_cart')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Delete this customization'),$_smarty_tpl);?>
" width="11" height="13" class="icon" /></a>
							</div>
							<div id="cart_quantity_button" style="float:left">
							<a rel="nofollow" class="cart_quantity_up" id="cart_quantity_up_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?add&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;id_customization=<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
&amp;token=<?php echo $_smarty_tpl->getVariable('token_cart')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/quantity_up.gif" alt="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
" width="14" height="9" /></a><br />
							<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<($_smarty_tpl->tpl_vars['customization']->value['quantity']-$_smarty_tpl->getVariable('quantityDisplayed')->value)||$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1){?>
							<a rel="nofollow" class="cart_quantity_down" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?add&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;id_customization=<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
&amp;op=down&amp;token=<?php echo $_smarty_tpl->getVariable('token_cart')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
">
								<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/quantity_down.gif" alt="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
" width="14" height="9" />
							</a>
							<?php }else{ ?>
							<a class="cart_quantity_down" style="opacity: 0.3;" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" href="#" title="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
">
								<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/quantity_down.gif" alt="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
" width="14" height="9" />
							</a>
							<?php }?>
							</div>
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
" name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_hidden"/>
							<input size="2" type="text" value="<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
" class="cart_quantity_input" name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
"/>
						</td>
						<td class="cart_total"></td>
						<td></td>
					</tr>
					<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable($_smarty_tpl->getVariable('quantityDisplayed')->value+$_smarty_tpl->tpl_vars['customization']->value['quantity'], null, null);?>
				<?php }} ?>
				<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']-$_smarty_tpl->getVariable('quantityDisplayed')->value>0){?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
			<?php }?>
		<?php }} ?>
		</tbody>
	<?php if (sizeof($_smarty_tpl->getVariable('discounts')->value)){?>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('discounts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['discount']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['discount']->iteration=0;
 $_smarty_tpl->tpl_vars['discount']->index=-1;
if ($_smarty_tpl->tpl_vars['discount']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value){
 $_smarty_tpl->tpl_vars['discount']->iteration++;
 $_smarty_tpl->tpl_vars['discount']->index++;
 $_smarty_tpl->tpl_vars['discount']->first = $_smarty_tpl->tpl_vars['discount']->index === 0;
 $_smarty_tpl->tpl_vars['discount']->last = $_smarty_tpl->tpl_vars['discount']->iteration === $_smarty_tpl->tpl_vars['discount']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['discountLoop']['first'] = $_smarty_tpl->tpl_vars['discount']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['discountLoop']['last'] = $_smarty_tpl->tpl_vars['discount']->last;
?>
			<tr class="cart_discount <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['discountLoop']['last']){?>last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['discountLoop']['first']){?>first_item<?php }else{ ?>item<?php }?>" id="cart_discount_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">
				<td class="cart_discount_name"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</td>
				<td class="cart_discount_description" colspan="3"><?php echo $_smarty_tpl->tpl_vars['discount']->value['description'];?>
</td>
				<td class="cart_discount_price"><span class="price-discount">
					<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real']>0){?>
						<?php if (!$_smarty_tpl->getVariable('priceDisplay')->value){?><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl);?>
<?php }else{ ?><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl);?>
<?php }?>
					<?php }?>
				</span></td>
				<td class="cart_discount_delete"><a class="cart-delete icon" href="<?php if ($_smarty_tpl->getVariable('opc')->value){?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-opc.php',true);?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
<?php }?>?deleteDiscount=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
"></a></td>
			</tr>
		<?php }} ?>
		</tbody>
	<?php }?>
	</table>
	<?php }else{ ?>
	<table id="cart_summary" class="std">
		<thead>
			<tr>
				<th width="33%" class="cart_product first_item"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
				<th width="67%" class="cart_description item"><?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
			<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, null);?>
			<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, null);?>
			<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, null);?>
			<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./shopping-cart-product-line-mb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			<?php if (isset($_smarty_tpl->getVariable('customizedDatas',null,true,false)->value[$_smarty_tpl->getVariable('productId',null,true,false)->value][$_smarty_tpl->getVariable('productAttributeId',null,true,false)->value])){?>
				<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id_customization'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('customizedDatas')->value[$_smarty_tpl->getVariable('productId')->value][$_smarty_tpl->getVariable('productAttributeId')->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value){
 $_smarty_tpl->tpl_vars['id_customization']->value = $_smarty_tpl->tpl_vars['customization']->key;
?>
					<tr id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" class="alternate_item cart_item">
						<td>
							<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->getVariable('CUSTOMIZE_FILE')->value){?>
									<div class="customizationUploaded">
										<ul class="customizationUploaded">
											<?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
?><li><img src="<?php echo $_smarty_tpl->getVariable('pic_dir')->value;?>
<?php echo $_smarty_tpl->tpl_vars['picture']->value['value'];?>
_small" alt="" class="customizationUploaded" /></li><?php }} ?>
										</ul>
									</div>
								<?php }elseif($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->getVariable('CUSTOMIZE_TEXTFIELD')->value){?>
									<ul class="typedText">
										<?php  $_smarty_tpl->tpl_vars['textField'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['typedText']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['textField']->key => $_smarty_tpl->tpl_vars['textField']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['typedText']['index']++;
?><li><?php if ($_smarty_tpl->tpl_vars['textField']->value['name']){?><?php echo $_smarty_tpl->tpl_vars['textField']->value['name'];?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Text #'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['typedText']['index']+1;?>
<?php }?><?php echo smartyTranslate(array('s'=>':'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['textField']->value['value'];?>
</li><?php }} ?>
									</ul>
								<?php }?>
							<?php }} ?>
						</td>
						<td class="cart_quantity">
							<div style="float:right">
								<a rel="nofollow" class="cart_quantity_delete" id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?delete&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;id_customization=<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
&amp;token=<?php echo $_smarty_tpl->getVariable('token_cart')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Delete this customization'),$_smarty_tpl);?>
" width="11" height="13" class="icon" /></a>
							</div>
							<div id="cart_quantity_button" style="float:left">
							<a rel="nofollow" class="cart_quantity_up" id="cart_quantity_up_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?add&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;id_customization=<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
&amp;token=<?php echo $_smarty_tpl->getVariable('token_cart')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/quantity_up.gif" alt="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
" width="14" height="9" /></a><br />
							<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<($_smarty_tpl->tpl_vars['customization']->value['quantity']-$_smarty_tpl->getVariable('quantityDisplayed')->value)||$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1){?>
							<a rel="nofollow" class="cart_quantity_down" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php',true);?>
?add&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
&amp;id_customization=<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
&amp;op=down&amp;token=<?php echo $_smarty_tpl->getVariable('token_cart')->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
">
								<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/quantity_down.gif" alt="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
" width="14" height="9" />
							</a>
							<?php }else{ ?>
							<a class="cart_quantity_down" style="opacity: 0.3;" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" href="#" title="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
">
								<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/quantity_down.gif" alt="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
" width="14" height="9" />
							</a>
							<?php }?>
							</div>
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
" name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_hidden"/>
							<input size="2" type="text" value="<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
" class="cart_quantity_input" name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
"/>
						</td>
					</tr>
					<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable($_smarty_tpl->getVariable('quantityDisplayed')->value+$_smarty_tpl->tpl_vars['customization']->value['quantity'], null, null);?>
				<?php }} ?>
				<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']-$_smarty_tpl->getVariable('quantityDisplayed')->value>0){?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
			<?php }?>
		<?php }} ?>
		</tbody>
	<?php if (sizeof($_smarty_tpl->getVariable('discounts')->value)){?>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('discounts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['discount']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['discount']->iteration=0;
 $_smarty_tpl->tpl_vars['discount']->index=-1;
if ($_smarty_tpl->tpl_vars['discount']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value){
 $_smarty_tpl->tpl_vars['discount']->iteration++;
 $_smarty_tpl->tpl_vars['discount']->index++;
 $_smarty_tpl->tpl_vars['discount']->first = $_smarty_tpl->tpl_vars['discount']->index === 0;
 $_smarty_tpl->tpl_vars['discount']->last = $_smarty_tpl->tpl_vars['discount']->iteration === $_smarty_tpl->tpl_vars['discount']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['discountLoop']['first'] = $_smarty_tpl->tpl_vars['discount']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['discountLoop']['last'] = $_smarty_tpl->tpl_vars['discount']->last;
?>
			<tr class="cart_discount <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['discountLoop']['last']){?>last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['discountLoop']['first']){?>first_item<?php }else{ ?>item<?php }?>" id="cart_discount_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">
				<td class="cart_discount_name"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</td>
				<td class="cart_discount_description cart_description bold">
					
					<a class="cart-delete icon right" href="<?php if ($_smarty_tpl->getVariable('opc')->value){?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-opc.php',true);?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
<?php }?>?deleteDiscount=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
"></a>
					<p><?php echo $_smarty_tpl->tpl_vars['discount']->value['description'];?>
</p>
					
					<p>
						<span class="gold sub-title">PRIX U.</span>
						<span class="price-discount">
						<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real']>0){?>
							<?php if (!$_smarty_tpl->getVariable('priceDisplay')->value){?><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl);?>
<?php }else{ ?><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl);?>
<?php }?>
						<?php }?>
					</span>
					</p>
				</td>
			</tr>
		<?php }} ?>
		</tbody>
	<?php }?>
	</table>
	<?php }?>
</div>


<div id="cart_total">
	<table>
		<?php if ($_smarty_tpl->getVariable('use_taxes')->value){?>
			<?php if ($_smarty_tpl->getVariable('priceDisplay')->value){?>
				<tr class="cart_product-total">
					<td><?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('display_tax_label')->value){?> <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>
<?php }?></td>
					<td class="price" id="total_product"><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_products')->value),$_smarty_tpl);?>
</td>
				</tr>
			<?php }else{ ?>
				<tr class="cart_product-total">
					<td><?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('display_tax_label')->value){?> <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?></td>
					<td class="price" id="total_product"><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_products_wt')->value),$_smarty_tpl);?>
</td>
				</tr>
			<?php }?>
		<?php }else{ ?>
			<tr class="cart_product-total">
				<td><?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
</td>
				<td class="price" id="total_product"><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_products')->value),$_smarty_tpl);?>
</td>
			</tr>
		<?php }?>
		<tr class="cart_total_voucher" <?php if ($_smarty_tpl->getVariable('total_discounts')->value==0){?>style="display: none;"<?php }?>>
			<td>
			<?php if ($_smarty_tpl->getVariable('use_taxes')->value){?>
				<?php if ($_smarty_tpl->getVariable('priceDisplay')->value){?>
					<?php echo smartyTranslate(array('s'=>'Total vouchers'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('display_tax_label')->value){?> <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>
<?php }?>
				<?php }else{ ?>
					<?php echo smartyTranslate(array('s'=>'Total vouchers'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('display_tax_label')->value){?> <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?>
				<?php }?>
			<?php }else{ ?>
				<?php echo smartyTranslate(array('s'=>'Total vouchers'),$_smarty_tpl);?>

			<?php }?>
			</td>
			<td class="price-discount" id="total_discount">
			<?php if ($_smarty_tpl->getVariable('use_taxes')->value){?>
				<?php if ($_smarty_tpl->getVariable('priceDisplay')->value){?>
					<?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_discounts_tax_exc')->value),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_discounts')->value),$_smarty_tpl);?>

				<?php }?>
			<?php }else{ ?>
				<?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_discounts_tax_exc')->value),$_smarty_tpl);?>

			<?php }?>
			</td>
		</tr>
		<tr class="cart_total_voucher" <?php if ($_smarty_tpl->getVariable('total_wrapping')->value==0){?>style="display: none;"<?php }?>>
			<td>
			<?php if ($_smarty_tpl->getVariable('use_taxes')->value){?>
				<?php if ($_smarty_tpl->getVariable('priceDisplay')->value){?>
					<?php echo smartyTranslate(array('s'=>'Total gift-wrapping'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('display_tax_label')->value){?> <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>
<?php }?>
				<?php }else{ ?>
					<?php echo smartyTranslate(array('s'=>'Total gift-wrapping'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('display_tax_label')->value){?> <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?>
				<?php }?>
			<?php }else{ ?>
				<?php echo smartyTranslate(array('s'=>'Total gift-wrapping'),$_smarty_tpl);?>

			<?php }?>
			</td>
			<td class="price-discount" id="total_wrapping">
			<?php if ($_smarty_tpl->getVariable('use_taxes')->value){?>
				<?php if ($_smarty_tpl->getVariable('priceDisplay')->value){?>
					<?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_wrapping_tax_exc')->value),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_wrapping')->value),$_smarty_tpl);?>

				<?php }?>
			<?php }else{ ?>
				<?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_wrapping_tax_exc')->value),$_smarty_tpl);?>

			<?php }?>
			</td>
		</tr>
		<?php if ($_smarty_tpl->getVariable('use_taxes')->value){?>
			<?php if ($_smarty_tpl->getVariable('priceDisplay')->value){?>
				<tr class="cart_total_delivery" <?php if ($_smarty_tpl->getVariable('shippingCost')->value<=0){?> style="display:none;"<?php }?>>
					<td><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('display_tax_label')->value){?> <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>
<?php }?></td>
					<td class="price" id="total_shipping"><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('shippingCostTaxExc')->value),$_smarty_tpl);?>
</td>
				</tr>
			<?php }else{ ?>
				<tr class="cart_total_delivery"<?php if ($_smarty_tpl->getVariable('shippingCost')->value<=0){?> style="display:none;"<?php }?>>
					<td><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('display_tax_label')->value){?> <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?></td>
					<td class="price" id="total_shipping" ><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('shippingCost')->value),$_smarty_tpl);?>
</td>
				</tr>
			<?php }?>
		<?php }else{ ?>
			<tr class="cart_total_delivery"<?php if ($_smarty_tpl->getVariable('shippingCost')->value<=0){?> style="display:none;"<?php }?>>
				<td><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
</td>
				<td class="price" id="total_shipping" ><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('shippingCostTaxExc')->value),$_smarty_tpl);?>
</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->getVariable('use_taxes')->value){?>
		<tr class="cart_total_price">
			<td>
				<?php if ($_smarty_tpl->getVariable('display_tax_label')->value){?>
					<?php echo smartyTranslate(array('s'=>'Total (tax incl.):'),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo smartyTranslate(array('s'=>'Total:'),$_smarty_tpl);?>

				<?php }?>
			</td>
			<td class="price" id="total_price"><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_price')->value),$_smarty_tpl);?>
</td>
		</tr>
		<?php }else{ ?>
		<tr class="cart_total_price">
			<td><?php echo smartyTranslate(array('s'=>'Total:'),$_smarty_tpl);?>
</td>
			<td class="price" id="total_price"><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('total_price_without_tax')->value),$_smarty_tpl);?>
</td>
		</tr>
		<?php }?>
	</table>
</div>

<?php if ($_smarty_tpl->getVariable('voucherAllowed')->value){?>
<div id="cart_voucher" class="table_block">
	<?php if (isset($_smarty_tpl->getVariable('errors_discount',null,true,false)->value)&&$_smarty_tpl->getVariable('errors_discount')->value){?>
		<ul class="error">
		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors_discount')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
			<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['error']->value,'htmlall','UTF-8');?>
</li>
		<?php }} ?>
		</ul>
	<?php }?>
	<form action="<?php if ($_smarty_tpl->getVariable('opc')->value){?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-opc.php',true);?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
<?php }?>" method="post" id="voucher">
		<fieldset>
			<h4>J'ai un code de réduction</h4>
			<p class="no-padb">
				<input type="text" id="discount_name" name="discount_name" value="<?php if (isset($_smarty_tpl->getVariable('discount_name',null,true,false)->value)&&$_smarty_tpl->getVariable('discount_name')->value){?><?php echo $_smarty_tpl->getVariable('discount_name')->value;?>
<?php }?>" />


				<input type="hidden" name="submitDiscount" />
				<input type="submit" name="submitAddDiscount" value="Utiliser" class="voucher_button" />
			</p>
		<?php if ($_smarty_tpl->getVariable('displayVouchers')->value){?>
			<h4><?php echo smartyTranslate(array('s'=>'Take advantage of our offers:'),$_smarty_tpl);?>
</h4>
			<div id="display_cart_vouchers">
			<?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('displayVouchers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value){
?>
				<span onclick="$('#discount_name').val('<?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
');return false;" class="voucher_name"><?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
</span> - <?php echo $_smarty_tpl->tpl_vars['voucher']->value['description'];?>
 <br />
			<?php }} ?>
			</div>
		<?php }?>
		</fieldset>
	</form>
</div>
<?php }?>

<div id="HOOK_SHOPPING_CART"><?php echo $_smarty_tpl->getVariable('HOOK_SHOPPING_CART')->value;?>
</div>
<div class="clear"></div>
<div id="delivery_note" class="mobile_hidden">
	<span class="left icon delivery">&nbsp;</span>
	<p class="uppercase">
		Pour obtenir la gratuité des frais de port, vous devez encore commander pour <span class="gold"><?php if ($_smarty_tpl->getVariable('free_ship')->value<=0||$_smarty_tpl->getVariable('isVirtualCart')->value){?>0€<?php }else{ ?><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('free_ship')->value),$_smarty_tpl);?>
<?php }?></span>
	</p>
</div>
<p class="cart_navigation clearfix">
	<a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
" class="left exclusive_back small_hidden" title="<?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>
"><span class="icon btn-arrow-l"></span> <?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>
</a>
	<a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
" class="left exclusive_back hidden" title="<?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>
"><span class="icon btn-arrow-l"></span></a>
	<?php if (!$_smarty_tpl->getVariable('opc')->value){?><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
?step=1<?php if ($_smarty_tpl->getVariable('back')->value){?>&amp;back=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>" class="exclusive_next right" title="<?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>
"><span class="icon btn-arrow-r"></span>JE VALIDE MON PANIER</a><?php }?>
</p>
<p class="cart_navigation_extra">
	<span id="HOOK_SHOPPING_CART_EXTRA"><?php echo $_smarty_tpl->getVariable('HOOK_SHOPPING_CART_EXTRA')->value;?>
</span>
</p>
<?php }?>

<div id="delivery_note" class="hidden mobile_show">
	<span class="left icon delivery">&nbsp;</span>
	<p class="uppercase">
		Pour obtenir la gratuité des frais de port, vous devez encore commander pour <span class="gold"><?php if ($_smarty_tpl->getVariable('free_ship')->value<=0||$_smarty_tpl->getVariable('isVirtualCart')->value){?>0€<?php }else{ ?><?php echo Tools::displayPriceSmarty(array('price'=>$_smarty_tpl->getVariable('free_ship')->value),$_smarty_tpl);?>
<?php }?></span>
	</p>
</div>
<div class="clear"></div>