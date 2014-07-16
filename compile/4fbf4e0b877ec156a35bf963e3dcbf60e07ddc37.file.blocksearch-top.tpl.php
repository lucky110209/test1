<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:43
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1072953c5db9f4bdac0-19055331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fbf4e0b877ec156a35bf963e3dcbf60e07ddc37' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/modules/blocksearch/blocksearch-top.tpl',
      1 => 1405398782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1072953c5db9f4bdac0-19055331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block search module TOP -->
<div id="search_block_top" class="mobile_hidden">
	<form method="get" action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('search.php');?>
" id="searchbox">
		<p>
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />

			<input class="search_query" type="text" id="search_query_top" name="search_query" value="Recherche" />
		</p>
	</form>
</div>
<div id="top_menu" class="clearfix mobile_hidden">
	<div id="overlaybg">&nbsp;</div>
	<ul class="clearfix menu">
		<li class="hasSub first" id="item1">
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('6');?>
">CLIPS</a>
			<div class="submenu clearfix" >
				<div class="clearfix submn-content">
					<div class="submenu-block">
						<h3><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides">RAIDES</a></h3>
						<a class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides/longueur-38cm">38 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides/longueur-46cm">46 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides/longueur-50cm">50 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides/longueur-56cm">56 cm</a>
					</div>
					<div class="submenu-block">
						<h3><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-ondules">ONDULéS</a></h3>
						<a class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-ondules/longueur-50cm">50 cm</a>
					</div>

					<div class="color-picker">
						<ul class="clearfix">
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-noir">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color1.jpg" alt="Noir" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-brun">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color2.jpg" alt="Brun" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-chocolat_fonce">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color3.jpg" alt="Chocolat foncé" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-marron_chocolat">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color4.jpg" alt="Marron chocolat" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-marron_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color5.jpg" alt="Marron clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-chatain_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color6.jpg" alt="Châtain clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-blond_fonce">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color7.jpg" alt="Blond foncé" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-blond_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color8.jpg" alt="Blond clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-blond">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color9.jpg" alt="Blond" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-auburn">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color10.jpg" alt="Auburn" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-blond_platine">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color11.jpg" alt="Blond platine" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/couleur-blond_tres_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color12.jpg" alt="Blond très clair" />
								</a>
							</li>

							<div class="mobile_hidden color-zoom" style="display: none;">
								<div class="color-label"></div>
								<div class="magnify">
									
								</div>
							</div>
						</ul>
					</div>
				</div>
				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./top-links.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

			</div>
		</li>
		<li class="hasSub" id="item2">
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('7');?>
">ANNEAUX</a>
			<div class="submenu clearfix" >
				<div class="clearfix submn-content">
					<div class="submenu-block">
						<h3><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-raides">RAIDES</a></h3>
						
						<a class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-raides/longueur-41cm">41 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-raides/longueur-46cm">46 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-raides/longueur-56cm">56 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-raides/longueur-61cm">61 cm</a>
					</div>
					<div class="submenu-block">
						<h3><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-ondules">ONDULéS</a></h3>
						
						<a class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-ondules/longueur-50cm">50 cm</a>
					</div>

					<div class="color-picker">
						<ul class="clearfix">
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/couleur-noir">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color1.jpg" alt="Noir" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/couleur-brun">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color2.jpg" alt="Brun" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/couleur-chocolat_fonce">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color3.jpg" alt="Chocolat foncé" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/couleur-marron_chocolat">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color4.jpg" alt="Marron chocolat" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/couleur-blond_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color8.jpg" alt="Blond clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/couleur-bBlond">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color9.jpg" alt="Blond" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/couleur-auburn">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color10.jpg" alt="Auburn" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/couleur-blond_tres_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color12.jpg" alt="Blond très clair" />
								</a>
							</li>

							<div class="color-zoom" style="display: none;">
								<div class="color-label"></div>
								<div class="magnify">

								</div>
							</div>
						</ul>
					</div>

				</div>

				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./top-links.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

			</div>
		</li>
		<li class="hasSub" id="item3">
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('8');?>
">KERATINE</a>
			<div class="submenu clearfix" >
				<div class="clearfix submn-content">
					<div class="submenu-block">
						<h3><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-raides">RAIDES</a></h3>
						
						<a class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-raides/longueur-46cm">46 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-raides/longueur-50cm">50 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-raides/longueur-56cm">56 cm</a>
					</div>
					<div class="submenu-block">
						<h3><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-ondules">ONDULéS</a></h3>
						
						<a class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-ondules/longueur-50cm">50 cm</a>
					</div>

					<div class="color-picker">
						<ul class="clearfix">
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-noir">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color1.jpg" alt="Noir" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-brun">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color2.jpg" alt="Brun" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-chocolat_fonce">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color3.jpg" alt="Chocolat foncé" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-marron_chocolat">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color4.jpg" alt="Marron chocolat" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-marron_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color5.jpg" alt="Marron clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-chatain_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color6.jpg" alt="Châtain clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-blond_fonce">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color7.jpg" alt="Blond foncé" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-blond_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color8.jpg" alt="Blond clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-blond">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color9.jpg" alt="Blond" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-auburn">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color10.jpg" alt="Auburn" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-blond_platine">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color11.jpg" alt="Blond platine" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/couleur-blond_tres_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color12.jpg" alt="Blond très clair" />
								</a>
							</li>

							<div class="color-zoom" style="display: none;">
								<div class="color-label"></div>
								<div class="magnify">

								</div>
							</div>
						</ul>
					</div>

				</div>

				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./top-links.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

			</div>
		</li>
		<li class="hasSub" id="item4">
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('9');?>
">TISSAGES</a>
			<div class="submenu clearfix" >
				<div class="clearfix submn-content">
					<div class="submenu-block">
						<h3><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides">RAIDES</a></h3>
						
						<a class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-46cm">46 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-50cm">50 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-56cm">56 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-61cm">61 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-66cm">66 cm</a>
					</div>
					<div class="submenu-block">
						<h3><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules">ONDULéS</a></h3>

						<a class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-46cm">46 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-50cm">50 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-56cm">56 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-61cm">61 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-66cm">66 cm</a>
					</div>

					<div class="color-picker">
						<ul class="clearfix">
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/couleur-noir">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color1.jpg" alt="Noir" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/couleur-brun">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color2.jpg" alt="Brun" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/couleur-chocolat_fonce">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color3.jpg" alt="Chocolat foncé" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/couleur-marron_chocolat">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color4.jpg" alt="Marron chocolat" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/couleur-marron_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color5.jpg" alt="Marron clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/couleur-chatain_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color6.jpg" alt="Châtain clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/couleur-blond_foncé">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color7.jpg" alt="Blond foncé" />
								</a>
							</li>
							
							<div class="color-zoom" style="display: none;">
								<div class="color-label"></div>
								<div class="magnify">

								</div>
							</div>
						</ul>
					</div>

				</div>

				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./top-links.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

			</div>
		</li>
		<li class="hasSub" id="item5">
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('51');?>
">ADHESIVES</a>
			<div class="submenu clearfix" >
				<div class="clearfix submn-content">
					<div class="submenu-block">
						<h3><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides">RAIDES</a></h3>
						<a class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-41cm">41 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-46cm">46 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-50cm">50 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-56cm">56 cm</a>
						<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-61cm">61 cm</a>
					</div>
					<div class="submenu-block">
					</div>

					<div class="color-picker">
						<ul class="clearfix">
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-noir">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color1.jpg" alt="Noir" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-brun">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color2.jpg" alt="Brun" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-chocolat_fonce">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color3.jpg" alt="Chocolat foncé" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-marron_chocolat">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color4.jpg" alt="Marron chocolat" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-marron_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color5.jpg" alt="Marron clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-chatain_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color6.jpg" alt="Châtain clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-blond_fonce">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color7.jpg" alt="Blond foncé" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-blond_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color8.jpg" alt="Blond clair" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-blond">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color9.jpg" alt="Blond" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-auburn">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color10.jpg" alt="Auburn" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-blond_platine">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color11.jpg" alt="Blond platine" />
								</a>
							</li>
							<li>
								<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/couleur-blond_tres_clair">
									<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/topmenucolors/color12.jpg" alt="Blond très clair" />
								</a>
							</li>

							<div class="color-zoom" style="display: none;">
								<div class="color-label"></div>
								<div class="magnify">

								</div>
							</div>
						</ul>
					</div>

				</div>

				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./top-links.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

			</div>
		</li>
		<li>
			<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-accessoires">ACCESSOIRES</a>
		</li>
		<li>
			<a class="gold" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
espace-pro.php">ESPACE PRO</a>
		</li>
	</ul>		
</div>

<div id="responsive_menu" class="hidden">
	<a id="responsive_menu_button" href="javascript:void(0);" class="icon filter"></a>
	
	<div class="menu">
	<ul class="tree clearfix dhtml">
		<li class="wrap">
			<div class="clearfix">
				<a class="title" href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('6');?>
">CLIPS</a>
				<a class="title" href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('7');?>
">ANNEAUX</a>
				<a class="title" href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('8');?>
">KERATINE</a>
				<a class="title" href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('9');?>
">TISSAGES</a>
				<a class="title" href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('51');?>
">ADHESIVES</a>
				<a class="title" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-accessoires">ACCESSOIRES</a>
				<a class="title gold" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
espace-pro.php">ESPACE PRO</a>

			</div>
			<ul>
				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('6');?>
">CLIPS</a>
					<ul>
						<li>
							<a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides">RAIDES</a>
							<ul>
								<li><a  class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides/longueur-38cm">38 cm</a></li>
								<li><a  class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides/longueur-46cm">46 cm</a></li>
								<li><a  class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides/longueur-50cm">50 cm</a></li>
								<li><a  class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-raides/longueur-56cm">56 cm</a></li>
							</ul>
						</li>
						<li>
							<a  class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-ondules">ONDULéS</a>
							<ul>
								<li><a  class="submenu_mobile" class="first" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-clips/type-ondules/longueur-50cm">50 cm</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('7');?>
">ANNEAUX</a>
					<ul>
						<li>
							<a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-raides">RAIDES</a>
							<ul>
								<li><a class="first submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-ANNEAUX/type-raides/longueur-41cm">41 cm</a></li>
								<li><a  class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-raides/longueur-46cm">46 cm</a></li>
								<li><a  class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-raides/longueur-56cm">56 cm</a></li>
								<li><a  class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-raides/longueur-61cm">61 cm</a></li>
							</ul>
						</li>
						<li>
							<a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-ondules">ONDULéS</a>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-anneaux/type-ondules/longueur-50cm">50 cm</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('8');?>
">KERATINE</a>
					<ul>
						<li>
							<a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-raides">RAIDES</a>
							<ul>
								<li><a class="first submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-raides/longueur-46cm">46 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-raides/longueur-50cm">50 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-raides/longueur-56cm">56 cm</a></li>
							</ul>
						</li>
						<li>
							<a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-ondules">ONDULéS</a>
							<ul>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-keratine/type-ondules/longueur-50cm">50 cm</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('9');?>
">TISSAGES</a>
					<ul>
						<li>
							<a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides">RAIDES</a>
							<ul>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-46cm">46 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-51cm">51 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-56cm">56 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-61cm">61 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-raides/longueur-66cm">66 cm</a></li>
							</ul>
						</li>
						<li>
							<a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules">ONDULéS</a>
							<ul>
								<li><a  class="submenu_mobile"href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-46cm">46 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-51cm">51 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-56cm">56 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-61cm">61 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-tissages/type-ondules/longueur-66cm">66 cm</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink('51');?>
">ADHESIVES</a>
					<ul>
						<li>
							<a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides">RAIDES</a>
							<ul>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-41cm">41 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-46cm">46 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-50cm">50 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-56cm">56 cm</a></li>
								<li><a class="submenu_mobile" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-adhesives/type-raides/longueur-61cm">61 cm</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/categories-accessoires">ACCESSOIRES</a>
				</li>

				<li>
					<a class="gold" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
espace-pro.php">ESPACE PRO</a>
				</li>
			</ul>
		</li>
	</ul>
	</div>
</div>