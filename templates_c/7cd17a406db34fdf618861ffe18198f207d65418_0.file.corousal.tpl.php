<?php
/* Smarty version 3.1.29, created on 2016-07-16 15:14:48
  from "C:\xampp\htdocs\green-konkan\default\templates\modules\home\corousal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a0210d12555_94478106',
  'file_dependency' => 
  array (
    '7cd17a406db34fdf618861ffe18198f207d65418' => 
    array (
      0 => 'C:\\xampp\\htdocs\\green-konkan\\default\\templates\\modules\\home\\corousal.tpl',
      1 => 1468434513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578a0210d12555_94478106 ($_smarty_tpl) {
?>
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
	   <?php
$_from = $_smarty_tpl->tpl_vars['sliderimages_display']->value;
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
        <li data-target="#<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
						    active
					     <?php }?>"></li>
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
        <!--<li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>-->
      </ol>
      <div class="carousel-inner" role="listbox">
	   <?php
$_from = $_smarty_tpl->tpl_vars['sliderimages_display']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
        <div class="item <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
						    active
					     <?php }?>">
          <img class="first-slide" src="admin/uploadifive/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" alt="First slide">
          
        </div>
        <!--<div class="item">
          <img class="second-slide" src="default/assets/images/slider/slider2.jpg" alt="Second slide">
          
        </div>
        <div class="item">
          <img class="third-slide" src="default/assets/images/slider/slider3.jpg" alt="Third slide">
          
        </div>-->
		<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
if ($__foreach_v_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_1_saved_key;
}
?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      </a>
    </div><!-- /.carousel --><?php }
}
