<?php
/* Smarty version 3.1.29, created on 2016-05-20 21:45:35
  from "H:\My Programming Stuff\PHP Programming\htdocs\green-kokan\default\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573f3827428b64_34878713',
  'file_dependency' => 
  array (
    'f21afab5290b5c5bcf47bd5f629046abe9659581' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\green-kokan\\default\\templates\\index.tpl',
      1 => 1463735274,
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
function content_573f3827428b64_34878713 ($_smarty_tpl) {
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


   		<div class="container-fluid">
   			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9">
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/home/landing-text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="category-content">
						<div class="row">
							<div class="grid-item col-lg-8 col-md-6 col-sm-6"><img src="default/assets/images/categories/networking.jpg">
								<div class="despoverplay">
				    				<div class="catname">Hotels</div>
								</div>
							</div>
							<div class="grid-item col-lg-4 col-md-6 col-sm-6">
								<img src="default/assets/images/categories/music.jpg">
								<div class="despoverplay">
									<div class="catname">Medicals</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="grid-item col-lg-4 col-md-4 col-sm-6">
								<img src="default/assets/images/categories/classes.jpg">
								<div class="despoverplay">
				    				<div class="catname"> Lodging </div>
								</div>
							</div>
								
							<div class="grid-item col-lg-4 col-md-4 col-sm-6"><img src="default/assets/images/categories/arts.jpg">
								<div class="despoverplay">
				    				<div class="catname">Doctors</div>
								</div>
							</div>
								
							<div class="grid-item col-lg-4 col-md-4 col-sm-12"><img src="default/assets/images/categories/drink.jpg">
								<div class="despoverplay">
				    				<div class="catname">General Shops</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="grid-item col-lg-6 col-md-6 col-sm-6"><img src="default/assets/images/categories/parties.jpg">
								<div class="despoverplay">
				    				<div class="catname">Jewelors</div>
								</div>
							</div>
							<div class="grid-item col-lg-6 col-md-6 col-sm-6"><img src="default/assets/images/categories/parties.jpg">
								<div class="despoverplay">
				    				<div class="catname">Jewelors</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<aside class="ad-sidebar col-lg-3 col-md-3 col-sm-3">
					<div class="ad-sidebar-item">
						<div class="ad-sidebar-image">
							<img src="default/assets/images/categories/music.jpg">

							<div class="ad-sidebar-info">
								<a href="#">asa asa</a>
								<div class="ad-sidebar-overlay"></div>
							</div>
						</div>
						

					</div>
					
				</aside>	
			</div>
		</div>

		<div class="visted-place container-fluid margin-40">
			<div id="placeCarousel" class="row carousel slide" data-ride="carousel">
		      	<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#placeCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#placeCarousel" data-slide-to="1"></li>
					<li data-target="#placeCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active row">
					  	<div class="visited-item col-md-3">
							<div class="visited-sidebar-image">
								<img src="default/assets/images/categories/music.jpg">
							</div>
							<div class="visited-sidebar-info">
								<a href="#"></a>
								<div class="visited-sidebar-overlay"></div>
							</div>

						</div>
						
					</div>
					<div class="item row">
					 
					</div>
					<div class="item row">
					  

					</div>
				</div>
				<a class="left carousel-control" href="#placeCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#placeCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
		    </div>
		</div>
			
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}
