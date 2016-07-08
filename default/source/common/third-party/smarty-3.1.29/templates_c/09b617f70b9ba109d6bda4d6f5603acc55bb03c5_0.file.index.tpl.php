<?php
/* Smarty version 3.1.29, created on 2016-04-20 22:22:11
  from "H:\My Programming Stuff\PHP Programming\htdocs\kokan\default\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5717e4f3a4adc0_82328938',
  'file_dependency' => 
  array (
    '09b617f70b9ba109d6bda4d6f5603acc55bb03c5' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\kokan\\default\\templates\\index.tpl',
      1 => 1461183727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:widgets/header.tpl' => 1,
    'file:widgets/nav-bar.tpl' => 1,
    'file:modules/home/corousal.tpl' => 1,
    'file:modules/home/landing-text.tpl' => 1,
    'file:widgets/footer.tpl' => 1,
    'file:widgets/scripts.tpl' => 1,
  ),
),false)) {
function content_5717e4f3a4adc0_82328938 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/nav-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'home'), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/home/corousal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/home/landing-text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
		<div class="row">
			<div class="ds-grid">
				<div class="grid-sizer"></div>
					<div class="grid-item grid-item--width1"><img src="default/assets/images/categories/networking.jpg">
					<div class="despoverplay">
        <div class="catname">Networking </div>
					</div>
					</div>
					<div class="grid-item grid-item--width2">
						<img src="default/assets/images/categories/music.jpg">
						<div class="despoverplay">
        <div class="catname">Music</div>
					</div>
					</div>
					<div class="grid-item grid-item--width3"><img src="default/assets/images/categories/classes.jpg">
					<div class="despoverplay">
        <div class="catname"> Food </div>
					</div></div>
					
					<div class="grid-item grid-item--width5"><img src="default/assets/images/categories/arts.jpg">
					<div class="despoverplay">
        <div class="catname">Arts</div>
					</div></div>
					
					<div class="grid-item grid-item--width6"><img src="default/assets/images/categories/drink.jpg">
					<div class="despoverplay">
        <div class="catname">Drink</div>
					</div></div>
					<div class="grid-item grid-item--width7"><img src="default/assets/images/categories/parties.jpg">
					<div class="despoverplay">
        <div class="catname">Parties</div>
					</div></div>
					<div class="grid-item grid-item--width4"><img src="default/assets/images/categories/sports-wellness.jpg">
					<div class="despoverplay">
        <div class="catname">Sport & Wellness</div>
					</div></div>
				</div>
		</div>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}
