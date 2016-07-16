<?php
/* Smarty version 3.1.29, created on 2016-07-16 13:08:32
  from "C:\xampp\htdocs\green-konkan\default\templates\modules\services\services.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5789e47829e890_55218764',
  'file_dependency' => 
  array (
    'cac32639e06bddf971396cf28f78a9d9ea5eaee3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\green-konkan\\default\\templates\\modules\\services\\services.tpl',
      1 => 1468623329,
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
function content_5789e47829e890_55218764 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body class="homepage" cz-shortcut-listen="true">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/nav-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'services'), 0, false);
?>

		
		<section id="services" class="container">
			<div class="row">
						<?php echo '<script'; ?>
>
     function like(id,IP_A)
	 {
	    var ip_address= "<?php echo $_smarty_tpl->tpl_vars['IP_ADDRESS']->value;?>
";
	        var result = "<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
";						
						   var  formData = "id="+id+"&ip_address="+ip_address;
							 $.ajax({
									url: result+"admin/delete_image.php?action=like",
									type: "post",
									data: formData ,
									success: function (response) {
										alert(response);
									}
								});  					
	 
	 
	 }
    <?php echo '</script'; ?>
>
						<div class="block block-service-grid">
							<div class="col-sm-12 block-head"><?php echo $_smarty_tpl->tpl_vars['doct']->value;?>
</div>
							<ul>
								<?php
$_from = $_smarty_tpl->tpl_vars['display_services']->value;
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
								<li class="col-sm-4">
									<div class="pic">
										<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
admin/uploadifive/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['image_name'];?>
" width="370" height="200" alt="">
										<a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
service-details/<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['advertise_id'];?>
" class="link"></a>
										<div class="date"><div onclick="like(<?php echo $_smarty_tpl->tpl_vars['v']->value['advertise_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
<span>likes</span></div></div>
										<a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
service-details/<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['advertise_id'];?>
" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
service-details/<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['advertise_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></h3>
									<div class="author">by <?php echo $_smarty_tpl->tpl_vars['v']->value['client_name'];?>
 </div>
									<p><?php echo substr($_smarty_tpl->tpl_vars['v']->value['decs'],0,40);?>
</p>
									<div class="rating"><div style="width:60%"></div></div>
								</li>
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
								<!--<li class="col-sm-4">
									<div class="pic">
										<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-8.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-8.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="#">ABC Clinic</a></h3>
									<div class="author">by Roshan D</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
										<div class="rating">
											<span class="star "></span>
											<span class="star "></span>
											<span class="star"></span>
											<span class="star filled"></span>
											<span class="star filled"></span>
										</div>
								</li>
								<li class="col-sm-4">
									<div class="pic">
										<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-9.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-9.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="#">ABC Clinic</a></h3>
									<div class="author">by Roshan D</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
									<div class="rating"><div style="width:90%"></div></div>
								</li>
							    <li class="col-sm-4">
									<div class="pic">
										<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-10.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-10.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="#">ABC Clinic</a></h3>
									<div class="author">by Roshan D</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
									<div class="rating"><div style="width:70%"></div></div>
								</li>
								<li class="col-sm-4">
									<div class="pic">
										<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-11.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-11.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="#">ABC Clinic</a></h3>
									<div class="author">by Roshan D</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
									<div class="rating"><div style="width:80%"></div></div>
								</li>
								<li class="col-sm-4">
									<div class="pic">
										<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-12.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/list//item-12.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="#">ABC Clinic</a></h3>
									<div class="author">by Roshan D</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
									<div class="rating"><div style="width:100%"></div></div>
								</li>-->
							</ul>
						</div>
						
					</div>
		</section><!--/#blog-->
			
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}
