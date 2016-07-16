<?php
/* Smarty version 3.1.29, created on 2016-05-25 23:29:27
  from "H:\My Programming Stuff\PHP Programming\htdocs\green-kokan\default\templates\widgets\nav-bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5745e7ff84e430_85905539',
  'file_dependency' => 
  array (
    '3ffd7484fa0ca6a11ac7208a29cee45126848573' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\green-kokan\\default\\templates\\widgets\\nav-bar.tpl',
      1 => 1463515820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5745e7ff84e430_85905539 ($_smarty_tpl) {
?>
<div class="navbar-wrapper">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="/green-kokan" title="Green konkan">
		  	<span class="sub-logo logo-first">Green</span>
		  	<span class="sub-logo logo-last">konkan</span>
		  </a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav pull-right">
			
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'home') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
">Home</a></li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'services') {?>active<?php }?>"><a href="services">Service</a></li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'gallery') {?>active<?php }?>"><a href="gallery">Gallery</a></li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'about-us') {?>active<?php }?>"><a href="about-us">About us</a></li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'contact-us') {?>active<?php }?>"><a href="contact-us">Contact us</a></li>
			
		  </ul>
			 
		</div>
		
	  </div>
	  <button type="button" class="btn btn-info search-btn">
			  <span class="glyphicon glyphicon-search"></span> <span class="mobile pull-right">Search</span>
			</button>
	</nav>
	
 </div>
<?php }
}
