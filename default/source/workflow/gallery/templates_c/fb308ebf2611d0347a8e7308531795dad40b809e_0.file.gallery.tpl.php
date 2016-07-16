<?php
/* Smarty version 3.1.29, created on 2016-05-25 23:29:27
  from "H:\My Programming Stuff\PHP Programming\htdocs\green-kokan\default\templates\modules\gallery\gallery.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5745e7ff6264a8_71669493',
  'file_dependency' => 
  array (
    'fb308ebf2611d0347a8e7308531795dad40b809e' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\green-kokan\\default\\templates\\modules\\gallery\\gallery.tpl',
      1 => 1464189266,
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
function content_5745e7ff6264a8_71669493 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/nav-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'contact-us'), 0, false);
?>

		<div class="row inner-content container center-align gallery">
			<div class="wrapper">
			 <div class="container">
			 	<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			      <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
			        <li role="presentation" class="active">
			          <a href="#hotel" id="hotel-tab" role="tab" data-toggle="tab" aria-controls="hotel" aria-expanded="true">
			            <span class="text">Hotel</span>
			          </a>
			        </li>
			        
			        <li role="presentation" class="dropdown">
						<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
							<span class="text">More</span>
							<span class="caret">
							</span>
						</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
							<li>
								  <a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
								    <span>@fat</span>
								  </a>
								</li>
								<li>
								  <a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">
								    <span>@mdo</span>
								  </a>
							</li>
						</ul>
			        </li>
			       
			      </ul>

			      <div id="galleryTabContent" class="tab-content">
			        <div role="tabpanel" class="tab-pane fade in active" id="hotel" aria-labelledby="hotel-tab">
			          <p>
			            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater
			            eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
			          </p>
			        </div>
			        
			        <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
			          <p>
			            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
			            hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard
			            of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
			          </p>
			        </div>
			        <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
			          <p>
			            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred
			            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park
			            vegan.
			          </p>
			        </div>
			        
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!-- <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/js/jquery.filterizr.js"><?php echo '</script'; ?>
> -->
		<?php echo '<script'; ?>
 type="text/javascript">
			/*$(document).ready(function(){
				$('.filtr-container').filterizr();
			});*/
			(function($) {

				'use strict';

				$(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function(e) {
				    var $target = $(e.target);
				    var $tabs = $target.closest('.nav-tabs-responsive');
				    var $current = $target.closest('li');
				    var $parent = $current.closest('li.dropdown');
						$current = $parent.length > 0 ? $parent : $current;
				    var $next = $current.next();
				    var $prev = $current.prev();
				    var updateDropdownMenu = function($el, position){
				      $el
				      	.find('.dropdown-menu')
				        .removeClass('pull-xs-left pull-xs-center pull-xs-right')
				      	.addClass( 'pull-xs-' + position );
				    };

				    $tabs.find('>li').removeClass('next prev');
				    $prev.addClass('prev');
				    $next.addClass('next');
				    
				    updateDropdownMenu( $prev, 'left' );
				    updateDropdownMenu( $current, 'center' );
				    updateDropdownMenu( $next, 'right' );
				});

			})(jQuery);
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
