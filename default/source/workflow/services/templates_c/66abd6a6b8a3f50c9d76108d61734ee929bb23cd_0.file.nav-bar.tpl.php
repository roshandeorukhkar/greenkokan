<?php
/* Smarty version 3.1.29, created on 2016-07-16 15:06:34
  from "C:\xampp\htdocs\green-konkan\default\templates\widgets\nav-bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a00220b4335_67858088',
  'file_dependency' => 
  array (
    '66abd6a6b8a3f50c9d76108d61734ee929bb23cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\green-konkan\\default\\templates\\widgets\\nav-bar.tpl',
      1 => 1468626743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578a00220b4335_67858088 ($_smarty_tpl) {
?>
<header id="header">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-4">
						<div class="top-number"><p><i class="fa fa-phone-square"></i> 8378989159</p></div>
					</div>
					<div class="col-sm-6 col-xs-8">
						<div class="social">
							<ul class="social-share">
								<li><a href="##"><i class="fa fa-facebook"></i></a></li>
								<li><a href="##"><i class="fa fa-twitter"></i></a></li>
								<li><a href="##"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="##"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="##"><i class="fa fa-skype"></i></a></li>
							</ul>
							<div class="search">
								<form role="form">
									<input type="text" class="search-form" autocomplete="off" placeholder="Search">
									<i class="fa fa-search"></i>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
		<nav class="navbar navbar-inverse" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/logo.png" alt="logo"></a>
				</div>
				<div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'home') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
">Home</a></li>
						<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'about-us') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
about-us">About Us</a></li>
						<li class="dropdown <?php if ($_smarty_tpl->tpl_vars['active']->value == 'services') {?>active<?php }?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
							
						<!--<?php
$_from = $_smarty_tpl->tpl_vars['cont']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_vv_0_saved_item = isset($_smarty_tpl->tpl_vars['vv']) ? $_smarty_tpl->tpl_vars['vv'] : false;
$__foreach_vv_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['vv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
$__foreach_vv_0_saved_local_item = $_smarty_tpl->tpl_vars['vv'];
?>
								<?php echo $_smarty_tpl->tpl_vars['vv']->value['cnt'];?>

						<?php
$_smarty_tpl->tpl_vars['vv'] = $__foreach_vv_0_saved_local_item;
}
if ($__foreach_vv_0_saved_item) {
$_smarty_tpl->tpl_vars['vv'] = $__foreach_vv_0_saved_item;
}
if ($__foreach_vv_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_vv_0_saved_key;
}
?> -->
	<ul class="dropdown-menu service-list-menu row">
	<?php
$_from = $_smarty_tpl->tpl_vars['allcatgory']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_1_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$__foreach_cat_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$__foreach_cat_1_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
?>
	
								<li class="col-md-3">
									<div class="list-group">
									  <a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
services/<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
" class="ctrl-standard typ-subhed fx-sliderIn  list-group-item ">
									     <?php echo $_smarty_tpl->tpl_vars['cat']->value['category_name'];?>

									  </a>
									</div>
								</li>
							<?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_1_saved_local_item;
}
if ($__foreach_cat_1_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_1_saved_item;
}
if ($__foreach_cat_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_cat_1_saved_key;
}
?>	
								<!--<li class="col-md-3">
									<div class="list-group">
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn  list-group-item ">
									    Cras justo odio
									  </a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Dapibus ac facilisis in</a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Morbi leo risus</a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Porta ac consectetur ac</a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Vestibulum at eros</a>
									</div>
								</li>
								
								<li class="col-md-3">
									<div class="list-group">
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn  list-group-item ">
									    Cras justo odio
									  </a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Dapibus ac facilisis in</a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Morbi leo risus</a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Porta ac consectetur ac</a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Vestibulum at eros</a>
									</div>
								</li>
								
								<li class="col-md-3">
									<div class="list-group">
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn  list-group-item 
									  ">
									    Cras justo odio
									  </a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Dapibus ac facilisis in</a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Morbi leo risus</a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Porta ac consectetur ac</a>
									  <a href="#" class="ctrl-standard typ-subhed fx-sliderIn list-group-item">Vestibulum at eros<span class="badge">12</span></a>
									</div>
								</li>-->
							  </ul>

						</li>
						<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'contact-us') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
contact-us" >Contact</a></li>
					</ul>
				</div>
			</div> 
		</nav> 
	</header> <?php }
}
