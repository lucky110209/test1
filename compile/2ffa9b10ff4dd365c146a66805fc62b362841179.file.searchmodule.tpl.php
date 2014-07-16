<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:52
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/themes/extensions-v2-2/./searchmodule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3165353c5dba8730949-95886983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ffa9b10ff4dd365c146a66805fc62b362841179' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/themes/extensions-v2-2/./searchmodule.tpl',
      1 => 1405398783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3165353c5dba8730949-95886983',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script>
   
       // array [a,b] a => raides, b => ondule's
   var cate_obj = [
			['38cm,46cm, 48cm,50cm,56cm','50cm'], // clips
			['41cm,46cm,56cm,61cm','50cm'], // anneaux
			['46cm,50cm,56cm','50cm'], // keratine
			['41cm,46cm,50cm,56cm,61cm,66cm','41cm,46cm,50cm,56cm,61cm,66cm'], //tissages
			['41cm,46cm,51cm,56cm,61cm'] // adhesives
		    ]
   
    var sub_sub_price = {'clips': {'38cm':'34,90€','46cm':'39,90€','50cm':'44,90€','56cm':'49,90€'},
		    'anneaux':{'41cm':'34,90€','46cm':'39,90€','50cm':'49,90€','56cm':'49,90€','61cm':'64,90€'},
		    'keratine':{'46cm':'39,90€','50cm':'44,90€','56cm':'49,90€'},
		    'tissages':{'46cm':'64,90€','50cm':'69,90€','56cm':'74,90€','61cm':'79,90€','66cm':'84,90€'},
		    'adhesives':{'41cm':'39,90€','46cm':'44,90€','50cm':'49,90€','56cm':'54,90€','61cm':'69,90€'}
		}
		
    
</script>
<div class="hidden">
	<div id="pp_search_content" class="cat-search small-input">
		<h3><span class="icon barrow-down"></span>
			TROUVEZ VOS EXTENSIONS <span class="gold">EN MOINS DE 10 secondes</span>
			<span class="icon barrow-down"></span>
		</h3>
		<div id="step1" class="pp-step" rel="1">
			<div class="step-line">
				<ul class="clearfix">
					<li class="active"><a href="javascript:void(0);" rel="1">Choisir votre<br>type d’EXTENSIONS</a></li>
					<li><a href="javascript:void(0);" rel="2">Choisir votre<br>type de cheveux</a></li>
					<li><a href="javascript:void(0);" rel="3">CHOISIR VOTRE<br>LONGUEUR DE CHEVEUX</a></li>
					<li><a href="javascript:void(0);" rel="4">CHOISIR VOTRE COULEUR</a></li>
				</ul>
			</div>
			<div class="step-ctn">
				<ul class="clearfix">
					<li>
						<input name="hair_cat" id="0" type="checkbox" value="clips" class="parent_cate">
						<label>EXTENSIONS À CLIPS</label>
						<img alt="EXTENSIONS À CLIPS" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
main/cat-bg/cat_round_6.png" />
					</li>
					<li>
						<input name="hair_cat" id="1" type="checkbox" value="anneaux" class="parent_cate">
						<label>EXTENSIONS ANNEAUX</label>
						<img alt="EXTENSIONS ANNEAUX" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
main/cat-bg/cat_round_7.png" />
					</li>
					<li class="even">
						<input name="hair_cat" id="2" type="checkbox" value="keratine" class="parent_cate">
						<label>EXTENSIONS KERATINE</label>
						<img alt="EXTENSIONS KERATINE" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
main/cat-bg/cat_round_8.png" />
					</li>
					<li class="new-line">
						<input name="hair_cat" id="3" type="checkbox" value="tissages" class="parent_cate">
						<label>TISSAGES</label>
						<img alt="TISSAGES" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
main/cat-bg/cat_round_9.png" />
					</li>
					<li class="even">
						<input name="hair_cat" id="4" type="checkbox" value="adhesives" class="parent_cate">
						<label>EXTENSIONS ADHESIVES</label>
						<img alt="EXTENSIONS ADHESIVES" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
main/cat-bg/cat_round_51.png" />
					</li>
				</ul>
			</div>
		</div>
		<div id="step2" class="pp-step hidden" rel="2">
			<div class="step-line">
				<ul class="clearfix">
					<li class="active"><a href="javascript:void(0);" rel="1">Choisir votre<br>type d’EXTENSIONS</a></li>
					<li class="active"><a href="javascript:void(0);" rel="2">Choisir votre<br>type de cheveux</a></li>
					<li><a href="javascript:void(0);" rel="3">CHOISIR VOTRE<br>LONGUEUR DE CHEVEUX</a></li>
					<li><a href="javascript:void(0);" rel="4">CHOISIR VOTRE COULEUR</a></li>
				</ul>
			</div>
			<ul class="align_c step-ctn clearfix">
				<li class="raides">
					<input id="raides" name="hair_type" type="checkbox" value="raides">
					<label>raides</label>
				</li>
				<li class="ondules">
					<input id="ondules" name="hair_type" type="checkbox" value="ondules">
					<label>ONDULÉS</label>
				</li>
			</ul>
			
		</div>
		<div id="step3" class="pp-step hidden" rel="3">
			<div class="step-line">
				<ul class="clearfix">
					<li class="active"><a href="javascript:void(0);" rel="1">Choisir votre<br>type d’EXTENSIONS</a></li>
					<li class="active"><a href="javascript:void(0);" rel="2">Choisir votre<br>type de cheveux</a></li>
					<li class="active"><a href="javascript:void(0);" rel="3">CHOISIR VOTRE<br>LONGUEUR DE CHEVEUX</a></li>
					<li><a href="javascript:void(0);" rel="4">CHOISIR VOTRE COULEUR</a></li>
				</ul>
			</div>
			<div class="align_c step-ctn">
				<ul class="hair_length">
					<li id="38cm" class="even">
						<label>38 cm <span class="top_cate_price">- 34,90€</span></label>
						<input name="hair_length" type="checkbox" value="38cm">
					</li>
					<li id="41cm">
						<label>41 cm <span class="top_cate_price">- 36,90€</span></label>
						<input name="hair_length" type="checkbox" value="41cm">
					</li>
					<li id="46cm" class="even">
						<label>46 cm <span class="top_cate_price">- 40,90€</span></label>
						<input name="hair_length" type="checkbox" value="46cm">
					</li>
					<li id="50cm">
						<label>50 cm <span class="top_cate_price">- 45,90€</span></label>
						<input name="hair_length" type="checkbox" value="50cm">
					</li>
					<li id="56cm" class="even">
						<label>56 cm <span class="top_cate_price">- 50,90€</span></label>
						<input name="hair_length" type="checkbox" value="56cm">
					</li>
					<li id="61cm">
						<label>61 cm <span class="top_cate_price">- 55,90€</span></label>
						<input name="hair_length" type="checkbox" value="61cm">
					</li>
					<li id="66cm" class="even">
						<label>66 cm <span class="top_cate_price">- 60,90€</span></label>
						<input name="hair_length" type="checkbox" value="66cm">
					</li>
				</ul>
			</div>
		</div>
		<div id="step4" class="pp-step hidden" rel="4">
			<div class="step-line">
				<ul class="clearfix">
					<li class="active"><a href="javascript:void(0);" rel="1">Choisir votre<br>type d’EXTENSIONS</a></li>
					<li class="active"><a href="javascript:void(0);" rel="2">Choisir votre<br>type de cheveux</a></li>
					<li class="active"><a href="javascript:void(0);" rel="3">CHOISIR VOTRE<br>LONGUEUR DE CHEVEUX</a></li>
					<li><a href="javascript:void(0);" rel="4">CHOISIR VOTRE COULEUR</a></li>
				</ul>
			</div>

			<div class="align_c step-ctn">
				<div class="color-picker">
					<ul class="clearfix">
						<li>
							<a rel="Noir" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-noir">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color1.jpg" alt="Noir" />
							</a>
						</li>
						<li>
							<a rel="Brun" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-brun">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color2.jpg" alt="Brun" />
							</a>
						</li>
						<li>
							<a rel="Chocolat fonce" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-chocolat_fonce">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color3.jpg" alt="Chocolat foncé" />
							</a>
						</li>
						<li>
							<a rel="Marron chocolat" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-marron_chocolat">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color4.jpg" alt="Marron chocolat" />
							</a>
						</li>
						<li>
							<a rel="Marron clair" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-marron_clair">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color5.jpg" alt="Marron clair" />
							</a>
						</li>
						<li>
							<a rel="Chatain clair"  href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-chatain_clair">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color6.jpg" alt="Châtain clair" />
							</a>
						</li>
						<li>
							<a rel="Blond fonce" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-blond_fonce">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color7.jpg" alt="Blond foncé" />
							</a>
						</li>
						<li>
							<a rel="Blond clair" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-blond_clair">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color8.jpg" alt="Blond clair" />
							</a>
						</li>
						<li>
							<a rel="Blond" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-blond">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color9.jpg" alt="Blond" />
							</a>
						</li>
						<li>
							<a rel="Auburn" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-auburn">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color10.jpg" alt="Auburn" />
							</a>
						</li>
						<li>
							<a rel="Blond platine" href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-blond_platine">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color11.jpg" alt="Blond platine" />
							</a>
						</li>
						<li>
							<a rel="Blond tres clair"  href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
recherche#/couleur-blond_tres_clair">
								<span class="select color-checked"></span>
								<img src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
colors/homecolors/color12.jpg" alt="Blond très clair" />
							</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
		<div id="step5" class="pp-step hidden">
			<div class="step-line">
				<ul class="clearfix">
					<li class="active"><a href="javascript:void(0);" rel="1">Choisir votre<br>type d’EXTENSIONS</a></li>
					<li class="active"><a href="javascript:void(0);" rel="2">Choisir votre<br>type de cheveux</a></li>
					<li class="active"><a href="javascript:void(0);" rel="3">CHOISIR VOTRE<br>LONGUEUR DE CHEVEUX</a></li>
					<li class="active"><a href="javascript:void(0);" rel="4">CHOISIR VOTRE COULEUR</a></li>
				</ul>
			</div>

			<div class="step-ctn align_c">
				<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
main/loading.gif" alt="<?php echo smartyTranslate(array('s'=>'searching'),$_smarty_tpl);?>
" />
				<p>RecherCHE EN COURS</p>
			</div>
		</div>
	</div>
</div>