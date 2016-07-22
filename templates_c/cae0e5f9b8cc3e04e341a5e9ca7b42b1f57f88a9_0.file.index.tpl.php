<?php
/* Smarty version 3.1.29, created on 2016-07-22 21:16:29
  from "H:\My Programming Stuff\PHP Programming\htdocs\gk\greenkokan\default\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57923fd5397801_46167238',
  'file_dependency' => 
  array (
    'cae0e5f9b8cc3e04e341a5e9ca7b42b1f57f88a9' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\gk\\greenkokan\\default\\templates\\index.tpl',
      1 => 1469200959,
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
function content_57923fd5397801_46167238 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body class="homepage" cz-shortcut-listen="true">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/nav-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'home'), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/home/corousal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/home/landing-text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="container main-categories-container">
			<div class="row">
				<div class="col-sm-9">
					<section id="recent-works">
						<div class="center wow fadeInDown animated">
							<h2>Popular categories</h2>
						</div>
						<div class="row">
						<?php
$_from = $_smarty_tpl->tpl_vars['catgory']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
							<div class="col-xs-12 col-sm-4 col-md-3">
								<div class="recent-work-wrap">
									<img class="img-responsive" src="admin/<?php echo $_smarty_tpl->tpl_vars['v']->value['category_image'];?>
" alt="">
									<div class="overlay">
										<div class="recent-work-inner">
										<ul>
									<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['subcategories'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_j_1_saved_item = isset($_smarty_tpl->tpl_vars['j']) ? $_smarty_tpl->tpl_vars['j'] : false;
$__foreach_j_1_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['j']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
$__foreach_j_1_saved_local_item = $_smarty_tpl->tpl_vars['j'];
?>
										<li><?php echo $_smarty_tpl->tpl_vars['j']->value['sub_category'];?>
 ,</li>
									<?php
$_smarty_tpl->tpl_vars['j'] = $__foreach_j_1_saved_local_item;
}
if ($__foreach_j_1_saved_item) {
$_smarty_tpl->tpl_vars['j'] = $__foreach_j_1_saved_item;
}
if ($__foreach_j_1_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_j_1_saved_key;
}
?>
									<ul>	
											<h3><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
services/<?php echo $_smarty_tpl->tpl_vars['v']->value['category_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['category_name'];?>
</a> </h3>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
											<a class="preview" href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
services/doctors/10" ><i class="fa fa-eye"></i> View</a>
										</div>
									</div>
								</div>
							</div>
						<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
if ($__foreach_v_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_0_saved_key;
}
?>	
						</div> 
					</section>
					<section id="services" class="service-item">
						<div class="center wow fadeInDown animated">
							<h2>Most visited places</h2>
						</div>
						<div class="row">
						<?php
$_from = $_smarty_tpl->tpl_vars['pack']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_2_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
							<div class="col-sm-6 col-md-4">
								<div class="media services-wrap wow fadeInDown animated">
									<div class="pull-left">
										<img class="img-responsive" src="admin/uploadifive/uploads/most_visted_place/<?php echo $_smarty_tpl->tpl_vars['v']->value['image_name'];?>
">
									</div>
									<div class="media-body pull-left">
										<h3 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['placename'];?>
</h3>
										<p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
									</div>
								</div>
							</div>
						<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
if ($__foreach_v_2_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_2_saved_key;
}
?>
						</div>
					</section>
				</div>
				<aside class="col-sm-3">
					<div class="ad-container">
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
					</div>
				</aside>
			</div>
			
		</div>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}
