<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:54
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/./order-steps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:388353c5dbaa287749-29670062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc871fa7805b74fb6022ab30cdb46fb7d676521' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/./order-steps.tpl',
      1 => 1405398783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '388353c5dbaa287749-29670062',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
<!-- Steps -->
<ul class="step clearfix" id="order_step">
	<li class="<?php if ($_smarty_tpl->getVariable('current_step')->value=='summary'){?>step_current<?php }else{ ?><?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'||$_smarty_tpl->getVariable('current_step')->value=='address'||$_smarty_tpl->getVariable('current_step')->value=='login'){?>step_done<?php }else{ ?>step_todo<?php }?><?php }?>">
		<?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'||$_smarty_tpl->getVariable('current_step')->value=='address'||$_smarty_tpl->getVariable('current_step')->value=='login'){?>
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
<?php if (isset($_smarty_tpl->getVariable('back',null,true,false)->value)&&$_smarty_tpl->getVariable('back')->value){?>?back=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>">
			<span class="step-num">1</span>
			<span class="arrow-icon"></span>
			<span class="step-name"><span class="cart icon">&nbsp;</span>PANIER</span>
		</a>
		<?php }else{ ?>
			<span class="step-num">1</span>
			<span class="arrow-icon"></span>
			<span class="step-name"><span class="cart icon">&nbsp;</span>PANIER</span>
		<?php }?>
	</li>
	<li class="<?php if ($_smarty_tpl->getVariable('current_step')->value=='address'){?>step_current<?php }else{ ?><?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'){?>step_done<?php }else{ ?>step_todo<?php }?><?php }?>">
		<?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'){?>
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
?step=1<?php if (isset($_smarty_tpl->getVariable('back',null,true,false)->value)&&$_smarty_tpl->getVariable('back')->value){?>&amp;back=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>">
			<span class="step-num">2</span>
			<span class="arrow-icon"></span>
			<span class="step-name"><span class="co-identity icon">&nbsp;</span>IDENTIFICATION</span>
		</a>
		<?php }else{ ?>
			<span class="step-num">2</span>
			<span class="arrow-icon"></span>
			<span class="step-name"><span class="co-identity icon">&nbsp;</span>IDENTIFICATION</span>
		<?php }?>
	</li>
	<li id="step_end" class="<?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'){?>step_current<?php }else{ ?>step_todo<?php }?>">
		<span class="step-num">3</span>
		<span class="arrow-icon"></span>
		<span class="step-name"><span class="co-payment icon">&nbsp;</span><?php echo smartyTranslate(array('s'=>'Payment'),$_smarty_tpl);?>
</span>
	</li>
</ul>
<!-- /Steps -->
<?php }?>