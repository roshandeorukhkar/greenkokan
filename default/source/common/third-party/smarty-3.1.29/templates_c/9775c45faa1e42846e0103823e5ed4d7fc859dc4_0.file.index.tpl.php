<?php
/* Smarty version 3.1.29, created on 2016-04-19 21:39:56
  from "H:\My Programming Stuff\PHP Programming\htdocs\kokan\default\source\common\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5716898c12f1c1_22970163',
  'file_dependency' => 
  array (
    '9775c45faa1e42846e0103823e5ed4d7fc859dc4' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\kokan\\default\\source\\common\\templates\\index.tpl',
      1 => 1461094790,
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
function content_5716898c12f1c1_22970163 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/nav-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/home/corousal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/home/landing-text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}
