<?php
/* Smarty version 3.1.29, created on 2016-07-13 23:14:46
  from "/home/greenkokan/public_html/default/templates/modules/home/corousal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57867e0eb229c8_86183655',
  'file_dependency' => 
  array (
    '28e27a8c44141410d6e887461ea5fa9e7cc54b88' => 
    array (
      0 => '/home/greenkokan/public_html/default/templates/modules/home/corousal.tpl',
      1 => 1467572515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57867e0eb229c8_86183655 ($_smarty_tpl) {
?>
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="default/assets/images/slider/slider1.jpg" alt="First slide">
          
        </div>
        <div class="item">
          <img class="second-slide" src="default/assets/images/slider/slider2.jpg" alt="Second slide">
          
        </div>
        <div class="item">
          <img class="third-slide" src="default/assets/images/slider/slider3.jpg" alt="Third slide">
          
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      </a>
    </div><!-- /.carousel --><?php }
}
