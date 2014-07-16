<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:55
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/./facebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1950853c5dbab55a7d6-22161042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b9a080c632054564dc50ef6b26489b79ed62f4e' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/./facebook.tpl',
      1 => 1405398781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1950853c5dbab55a7d6-22161042',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<a href="#facebook_tab_pp" id="facebook_tab" class="mobile_hidden">
	<img alt="-<?php echo $_smarty_tpl->getVariable('facebook_voucher_value')->value;?>
€ SUR VOTRE COMMANDE" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
main/facebook_tab.png" width="32" height="177" />
</a>

<div class="hidden">
	<div id="facebook_tab_pp">
		<div id="fb_tab_step" class="fb-tab-step">
			<a id="close_btn" class="clearfix" href="javascript:void(0);">
				<span class="icon fb-close left"></span><span class="left txt">FERMER</span>
			</a>

			<h3 class="heading"><span>-<?php echo $_smarty_tpl->getVariable('facebook_voucher_value')->value;?>
€</span> SUR VOTRE COMMANDE</h3>

			<div id="step1" class="pp-content">
				<p><strong><?php echo $_smarty_tpl->getVariable('facebook_voucher_value')->value;?>
€ de réduction immédiate</strong> sur votre commande <br />en cliquant sur <strong>"J'aime"</strong></p>
				<br /><br />
				<div id="likect" class="rewards_facebookbutton"> <fb:like href="<?php echo $_smarty_tpl->getVariable('facebook_page')->value;?>
" show_faces="false" data-show-faces="false" width="90" height="8" layout="button_count"></fb:like></div>
			</div>

			<div id="step2" class="pp-content hidden">
				<p class="msg-title">Félicitation !</p>
				<p class="msg">Un bon de réduction d'une valeur de <?php echo $_smarty_tpl->getVariable('facebook_voucher_value')->value;?>
€ vient de vous être offert.</p>

				<div class="clearfix">
					<div class="code-box">
						<p><?php echo smartyTranslate(array('s'=>'Code réduction :','mod'=>'allinone_rewards'),$_smarty_tpl);?>
 <span id="voucher_code"></span></p>
					</div>
					<div class="share-btn">
						<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
" title="Partage ta joie !">&nbsp;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fblike" style="display:block;opacity: 0;">
    <fb:like href="<?php echo $_smarty_tpl->getVariable('facebook_page')->value;?>
" data-show-faces="false" show_faces="false" width="90" height="8" layout="button_count"></fb:like>
</div>


	<script type="text/javascript">
		var facebook_url = '<?php echo $_smarty_tpl->getVariable('facebook_page')->value;?>
';
		
		var face_content = '<fb:like href='+facebook_url+' show_faces="false" layout="button_count"></fb:like>';
		$(document).ready(function() {
			$("a#facebook_tab").fancybox({
				'showCloseButton': false,
				'scrolling': 'no',
				'padding': 0
			});
			window.clicked= false;
			$("#facebook_tab").click(function(){
			    // only call on second click
			    if (window.clicked)
			    {
				$("#likect").html($("#fblike").html());
			    }
			    window.clicked = true;
			    $('#facebook_tab_pp #step1').show();
			    $('#facebook_tab_pp #step2').hide();
			});
			$('#facebook_tab_pp a.fb-btn').click(function(){
				$('#facebook_tab_pp #step1').hide();
				$('#facebook_tab_pp #step2').show();
			});
			$('#facebook_tab_pp #close_btn').click(function(){
				$.fancybox.close();
			});
		});
		
	</script>
