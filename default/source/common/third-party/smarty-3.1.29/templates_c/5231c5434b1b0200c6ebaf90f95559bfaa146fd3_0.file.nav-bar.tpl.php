<?php
/* Smarty version 3.1.29, created on 2016-05-06 20:46:35
  from "H:\My Programming Stuff\PHP Programming\htdocs\kokan\default\templates\widgets\nav-bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572ce68b60de72_15482503',
  'file_dependency' => 
  array (
    '5231c5434b1b0200c6ebaf90f95559bfaa146fd3' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\kokan\\default\\templates\\widgets\\nav-bar.tpl',
      1 => 1462560391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572ce68b60de72_15482503 ($_smarty_tpl) {
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
		  <a class="navbar-brand" href="/kokan" title="Tour d Konkan">Tour de konkan<!-- <img src="default/assets/images/logo.png"> --></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
			
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'beaches') {?>active<?php }?>"><a href="beaches">Beaches</a></li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'forts') {?>active<?php }?>"><a href="forts">Forts</a></li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'temples') {?>active<?php }?>"><a href="temples">Temples / Spirituals</a></li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'waterfalls') {?>active<?php }?>"><a href="waterfalls">Waterfalls</a></li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'hotels') {?>active<?php }?>"><a href="hotels">Hotels</a></li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 'tours-travels') {?>active<?php }?>"><a href="tours-travels">Tours and Travels</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle <?php if ($_smarty_tpl->tpl_vars['active']->value == 'maps') {?>active<?php }?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Maps <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="maps/goa">Goa</a></li>
				<li><a href="maps/sindhudurg">Sindhudurg</a></li>
				<li><a href="maps/ratnagiri">Ratnagiri</a></li>
				<li><a href="maps/raigad">Raigad</a></li>
			  </ul>
			</li>
		  </ul>
			 
		</div>
		
	  </div>
	  <button type="button" class="btn btn-info search-btn">
			  <span class="glyphicon glyphicon-search"></span> Search
			</button>
	</nav>
	
 </div>
<?php }
}
