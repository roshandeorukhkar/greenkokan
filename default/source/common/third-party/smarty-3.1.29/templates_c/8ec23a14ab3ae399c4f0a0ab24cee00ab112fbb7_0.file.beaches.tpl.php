<?php
/* Smarty version 3.1.29, created on 2016-04-20 21:58:15
  from "H:\My Programming Stuff\PHP Programming\htdocs\kokan\default\templates\modules\beaches\beaches.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5717df57e15376_26284065',
  'file_dependency' => 
  array (
    '8ec23a14ab3ae399c4f0a0ab24cee00ab112fbb7' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\kokan\\default\\templates\\modules\\beaches\\beaches.tpl',
      1 => 1461181576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../widgets/header.tpl' => 1,
    'file:../../widgets/nav-bar.tpl' => 1,
    'file:../../widgets/footer.tpl' => 1,
    'file:../../widgets/scripts.tpl' => 1,
  ),
),false)) {
function content_5717df57e15376_26284065 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/nav-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'beaches'), 0, false);
?>

		
		<div class="row inner-content container center-align">
			<?php echo $_smarty_tpl->tpl_vars['moduleName']->value;?>

		</div>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}
