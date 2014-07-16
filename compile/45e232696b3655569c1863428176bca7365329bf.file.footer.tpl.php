<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:55
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2944753c5dbab211976-99663001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e232696b3655569c1863428176bca7365329bf' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/footer.tpl',
      1 => 1405398781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2944753c5dbab211976-99663001',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>

			<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./facebook.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
				</div>

<!-- Right -->
			</div>
			</div>

<!-- Footer -->
			<div id="footer">
				<div class="page clearfix">
					<?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>

					
					<br class="clear" />
					<?php if ($_smarty_tpl->getVariable('page_name')->value=='order'||$_smarty_tpl->getVariable('page_name')->value=='order-opc2'||$_smarty_tpl->getVariable('page_name')->value=='order-opc'){?> 
					    <?php $_smarty_tpl->tpl_vars["show_link"] = new Smarty_variable(0, null, null);?>
					<?php }else{ ?>    
					    <?php $_smarty_tpl->tpl_vars["show_link"] = new Smarty_variable(1, null, null);?>
					<?php }?> 
					<div id="footer_links" class="clearfix">
						<ul>
							<li class="first">
								<a href="<?php if ($_smarty_tpl->getVariable('show_link')->value==1){?><?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('15');?>
<?php }else{ ?>javascript:void(0);<?php }?>">
									<span class="icon delivery">&nbsp;</span>
									LIVRAISON GRATUITE À PARTIR DE <span class="gold">90€</span>
								</a>
							</li>
							<li>
								<a href="<?php if ($_smarty_tpl->getVariable('show_link')->value==1){?><?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('16');?>
<?php }else{ ?>javascript:void(0);<?php }?>">
									<span class="icon payment">&nbsp;</span>
									PAIEMENT SECURISÉ
								</a>
							</li>
							<li>
								<a href="<?php if ($_smarty_tpl->getVariable('show_link')->value==1){?><?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('20');?>
<?php }else{ ?>javascript:void(0);<?php }?>">
									<span class="icon heart">&nbsp;</span>
									SATISFAIT OU REMBOURSÉ
								</a>
							</li>
							<li class="last">
								<a href="<?php if ($_smarty_tpl->getVariable('show_link')->value==1){?><?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('21');?>
<?php }else{ ?>javascript:void(0);<?php }?>">
									REVENDEUR OFFICIEL
									<span class="icon logo-txt">&nbsp;</span>
								</a>
							</li>
						</ul>
					</div>

					<div id="cms_links" class="clearfix mobile_hidden">
						
						<div class="cms-block">
							<h3>SERVICE CONSOMATEUR</h3>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('15');?>
">Livraison</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('16');?>
">Paiement sécurisé</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php');?>
">Contact</a></li>
							</ul>
						</div>

						<span class="icon logo">&nbsp;</span>

						<div class="cms-block">
							<h3>TERMES & CONDITIONS</h3>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('18');?>
">Conditions d'utilisation</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('19');?>
">Aide</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('20');?>
">Satisfait ou remboursé</a></li>
							</ul>
						</div>
							
						<span class="icon logo">&nbsp;</span>

						<div class="cms-block">
							<h3>A PROPOS</h3>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink('13');?>
">A propos de nous</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php');?>
">Service clients</a></li>
							</ul>
						</div>

						<div class="social-block align_c">
							<p>
								<a class="icon facebook" href="http://www.facebook.com/1001Extensions" title="Facebook" target="_blank"></a>
								<a class="icon twitter" title="Twitter" href="https://twitter.com/1001Extensions" target="_blank"></a>
								<a class="icon pinterest" title="Pinterest" href="http://www.pinterest.com/1001extensions" target="_blank"></a>
								<a class="icon youtube" title="Youtube" href="https://www.youtube.com/1001extensions" target="_blank"></a>
							</p>
							<p class="payments mobile_hidden"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
main/karty.jpg?v=1" /></p>
						</div>

					</div>

					<div class="social-block hidden mobile_show align_c">
						<a class="icon facebook" href="http://www.facebook.com/1001Extensions" title="Facebook" target="_blank"></a>
						<a class="icon twitter" title="Twitter" href="https://twitter.com/1001Extensions" target="_blank"></a>
						<a class="icon pinterest" title="Pinterest" href="http://www.pinterest.com/1001extensions" target="_blank"></a>
						<a class="icon youtube" title="Youtube" href="https://www.youtube.com/1001extensions" target="_blank"></a>
					</div>
					
				</div>
			</div>
			
			</div>
			<?php if (isset($_smarty_tpl->getVariable('is_mobile',null,true,false)->value)&$_smarty_tpl->getVariable('is_mobile')->value){?></div><?php }?>
	<?php }?>

		<!-- Code Google de la balise de remarketing -->
		<!--------------------------------------------------
		Les balises de remarketing ne peuvent pas �tre associ�es aux informations personnelles ou plac�es sur des pages li�es aux cat�gories � caract�re sensible. Pour comprendre et savoir comment configurer la balise, rendez-vous sur la page http://google.com/ads/remarketingsetup.
		--------------------------------------------------->
		<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 995653695;
			var google_custom_params = window.google_tag_params;
			var google_remarketing_only = true;
			/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/995653695/?value=0&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
		<input type="hidden" id="search_param" value="" name="search_param"> 
		
	</body>
</html>
