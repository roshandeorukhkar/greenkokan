<?php
/* Smarty version 3.1.29, created on 2016-05-20 21:45:35
  from "H:\My Programming Stuff\PHP Programming\htdocs\green-kokan\default\templates\modules\home\corousal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573f382751f5d9_81416682',
  'file_dependency' => 
  array (
    '5849346dd337d3718d94fccb5376b19fa2a18c4b' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\green-kokan\\default\\templates\\modules\\home\\corousal.tpl',
      1 => 1463682339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573f382751f5d9_81416682 ($_smarty_tpl) {
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
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel --><?php }
}
