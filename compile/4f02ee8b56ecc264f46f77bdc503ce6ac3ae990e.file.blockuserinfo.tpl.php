<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:43
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:472053c5db9f1bd759-59884469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f02ee8b56ecc264f46f77bdc503ce6ac3ae990e' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1405398782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '472053c5db9f1bd759-59884469',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


    <script type="text/javascript">
		$(document).ready(function() {
			$(function(){
				var note = $('#timer_txt'),
				mobileNote = $('#short_timer_txt'),
				ts = new Date(2012, 0, 1),
				newYear = true;
				
				var today = new Date();
				var sunday = new Date(today.getFullYear(),today.getMonth(),today.getDate()+(7-today.getDay()));

				var ts = new Date();
				ts.setMonth(sunday.getMonth());
				ts.setDate(sunday.getDate());
				ts.setHours(0);
				ts.setMinutes(0);
				ts.setSeconds(0);

				if((new Date()) > ts){
					// The new year is here! Count towards something else.
					// Notice the *1000 at the end - time must be in milliseconds
					ts = (new Date()).getTime() + 10*24*60*60*1000;
					newYear = false;
				}

				$('#counter').countdown({
					timestamp	: ts,
					callback	: function(days, hours, minutes, seconds){

						var message = "";

						message += days + " Jour" + ( days==1 ? '':'s' ) + " : ";
						message += hours + " Heure" + ( hours==1 ? '':'s' ) + " : ";
						message += minutes + " Minute" + ( minutes==1 ? '':'s' ) + " : ";
						message += seconds + " Seconde" + ( seconds==1 ? '':'s' );

						note.html(message);

						var shortMsg = "";
						shortMsg += days + " J" + " : ";
						shortMsg += hours + " H" + " : ";
						shortMsg += minutes + " M" + " : ";
						shortMsg += seconds + " S";

						mobileNote.html(shortMsg);
					}
				});
				
			});
		});
    </script>

      

<!-- Block user information module HEADER -->
<div id="top_info">
	<div class="top_counter align_c">
		<span class="sale-txt"><?php echo smartyTranslate(array('s'=>'-80% sur toute la boutique','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
		<span class="icon logo mobile_hidden">&nbsp;</span>

		<span id="counter" class="hidden"></span>
		<span class="mobile_hidden"><?php echo smartyTranslate(array('s'=>'Temps restant','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span><span class="mobile_hidden" id="timer_txt"></span>
		<span class="hidden" id="short_timer_txt"></span>
	</div>
		
	<div class="left phone-info mobile_hidden">
		<span class="icon phone">&nbsp;</span><?php echo smartyTranslate(array('s'=>'01 84 07 43 44 du Lundi au vendredi de 14h à 18h ','mod'=>'blockuserinfo'),$_smarty_tpl);?>

	</div>

	<div class="header-user right">
		<?php if ($_smarty_tpl->getVariable('cookie')->value->isLogged()){?>
			<a class="first" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">(<?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
)</a>
		<?php }else{ ?>
			<a class="first" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'Log in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>

		<?php if (!$_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?>

			<a class="shopping_cart" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink("order.php",true);?>
" title="<?php echo smartyTranslate(array('s'=>'Your Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Cart:','mod'=>'blockuserinfo'),$_smarty_tpl);?>

				<span class="ajax_cart_quantity<?php if ($_smarty_tpl->getVariable('cart_qties')->value==0){?> hidden<?php }?>">(<?php echo $_smarty_tpl->getVariable('cart_qties')->value;?>
)</span>
				<span class="ajax_cart_no_product<?php if ($_smarty_tpl->getVariable('cart_qties')->value>0){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'(0)','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			</a>
		<?php }?>
	</div>

	<br class="clear" />
</div>
<!-- /Block user information module HEADER -->
