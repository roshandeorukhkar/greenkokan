<?php
/* Smarty version 3.1.29, created on 2016-07-06 01:47:55
  from "H:\My Programming Stuff\PHP Programming\htdocs\green-kokan\default\templates\widgets\nav-bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577c15f30c33c6_41599879',
  'file_dependency' => 
  array (
    '3ffd7484fa0ca6a11ac7208a29cee45126848573' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\green-kokan\\default\\templates\\widgets\\nav-bar.tpl',
      1 => 1467748990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577c15f30c33c6_41599879 ($_smarty_tpl) {
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
/default/assets/images/themes/logo.png" alt="logo"></a>
				</div>
				<div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'home') {?>active<?php }?>"><a href="#">Home</a></li>
						<li><a href="/about-us.html">About Us</a></li>
						<li class="dropdown <?php if ($_smarty_tpl->tpl_vars['active']->value == 'services') {?>active<?php }?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu service-list-menu row">
								<li class="col-md-3">
									<div class="list-group">
									  <a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/services/doctors/10" class="ctrl-standard typ-subhed fx-sliderIn  list-group-item ">
									    Doctors
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
								</li>
							  </ul>
						</li>
						<li><a href="/contact-us.html">Contact</a></li>
					</ul>
				</div>
			</div> 
		</nav> 
	</header> <?php }
}
