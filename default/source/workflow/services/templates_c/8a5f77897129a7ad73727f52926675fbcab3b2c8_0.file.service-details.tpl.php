<?php
/* Smarty version 3.1.29, created on 2016-07-16 15:06:33
  from "C:\xampp\htdocs\green-konkan\default\templates\modules\services\service-details.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a0021f22485_88424253',
  'file_dependency' => 
  array (
    '8a5f77897129a7ad73727f52926675fbcab3b2c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\green-konkan\\default\\templates\\modules\\services\\service-details.tpl',
      1 => 1468661545,
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
function content_578a0021f22485_88424253 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body class="homepage" cz-shortcut-listen="true">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/nav-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'services'), 0, false);
?>

		
		<section id="services" class="container">
			<div class="center">
				<h2><?php echo $_smarty_tpl->tpl_vars['serviceName']->value;?>
</h2>
				<p class="lead"><?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['client_name'];?>
</p>
			</div>
				<div class="services">
					<div class="row">
					<div class="col-md-8">
						<div class="services-item">
							<img class="img-responsive img-services" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
admin/<?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['banner_image'];?>
" width="100%" alt="">
							<div class="row">
							
							
							
								<div class="col-xs-12 col-sm-2 text-center">
									<div class="entry-meta">
										<span id="publish_date">See Here</span>
										<span><i class="fa fa-comment"></i> <a href="##comments"><?php echo $_smarty_tpl->tpl_vars['count']->value[0];?>
 Comments</a></span>
										<span><i class="fa fa-heart"></i><a href="javascript:void(0);" onclick="like(<?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['advertise_id'];?>
);"><span id="count_like"><?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['count_total'];?>
</span> Likes</a></span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-10 services-content">
									<h2>Consequat bibendum quam</h2>
									<p>DESCIPTION:<?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['decs'];?>
</p>
									<div class="post-tags">
										<strong>Tag:</strong> <a href="##"><?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['category_name'];?>
</a> / <a href="##"><?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['sub_category'];?>
</a> 
									</div>
								</div>
							</div>
						</div>
<?php ob_start();
echo $_smarty_tpl->tpl_vars['display_single_category']->value['category_name'];
$_tmp1=ob_get_clean();
if ($_tmp1 == "Hotel") {?>						
						
						<div class="col-xs-12">
							<ul class="portfolio-filter text-center">
								<li><a class="btn btn-default" href="#" data-filter=".bootstrap">Veg</a></li>
								<li><a class="btn btn-default" href="#" data-filter=".html">Non Veg</a></li>
								<li><a class="btn btn-default" href="#" data-filter=".wordpress">Dessert</a></li>
							</ul> 
							<div class="row">
								<div class="portfolio-items isotope">
									<div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 isotope-item isotope-hidden">
										<div class="recent-work-wrap">
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/item1.png" class="hotelMenu">
												<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/item1.png" alt="">
											</a>
										</div>
									</div> 
									<div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3 isotope-item isotope-hidden">
										<div class="recent-work-wrap">
										<a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/item2.png" class="hotelMenu">
											<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/item2.png" alt="">
											</a>
										</div>
									</div> 
									<div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 isotope-item isotope-hidden">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/item3.png" alt="">
											
										</div>
									</div> 
									<div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3 isotope-item isotope-hidden">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/item4.png" alt="">
										</div>
									</div> 
									<div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3 isotope-item">
										<div class="recent-work-wrap">
											<img class="img-responsive">
										</div>
									</div> 
									<div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3 isotope-item">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/item6.png" alt="">
										</div>
									</div> 
									<div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3 isotope-item">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/item7.png" alt="">
										</div>
									</div> 
									<div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3 isotope-item">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/item8.png" alt="">
										</div>
									</div> 
								</div>
							</div>
						</div>
	<?php }?>					
						<div id="contact-page clearfix">
							<div class="status alert alert-success" style="display: none"></div>
							<div class="message_heading">
								<h4>Leave your feedback</h4>
								<p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
							</div>
						<!--	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="#" role="form">-->
								<div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<label>Name *</label>
											<input type="text" name="name" id="name" class="form-control" required="required">
										</div>
										<div class="form-group">
											<label>Email *</label>
											<input type="email" name="email" id="email" class="form-control" required="required">
										</div>
										<div class="form-group">
											<label>Rate us *</label>
											<div class="rating give-rating">
												
												<span class="star " data-star="5"></span>
												<span class="star" data-star="4"></span>
												<span class="star" data-star="3"></span>
												<span class="star"  data-star="2"></span>
												<span class="star " data-star="1"></span>
												<input type="hidden" name="give-rating" id="user_rating">
											</div>
										</div>
									</div>
									<div class="col-sm-7">
										<div class="form-group">
											<label>Message *</label>
											<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-lg" onclick="review(<?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['advertise_id'];?>
)" required="required">Submit Review</button>
										</div>
									</div>
								</div>
							<!--</form>-->
						</div> 
	<?php echo '<script'; ?>
>
     function review(id)
	 {
	        var result = "<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
";
			//alert(result);
			        var name=$('#name').val();
					 var email=$('#email').val();
					  var message=$('#message').val();
					  var user_rating=$('#user_rating').val();
						if(name =="")
						{
                          document.getElementById("name").focus();
						}
						else if(email =="")
						{
                           document.getElementById("email").focus();
						}
						else if(user_rating =="")
						{
                           document.getElementById("user_rating").focus();
						}
						else if(message =="")
						{
                           document.getElementById("message").focus();
						}	
                        else
                       {					   
						   var  formData = "name="+name+"&email="+email+"&message="+message+"&adv_id="+id+"&user_rating="+user_rating;
							 $.ajax({
									url: result+"admin/delete_image.php?action=adv",
									type: "post",
									data: formData ,
									success: function (response) {
										alert(response);
										 var name=$('#name').val('');
										 var email=$('#email').val('');
										 var message=$('#message').val('');
									}
								}); 
					   }						
	 
	 
	 }
    <?php echo '</script'; ?>
>	
					</div> 
					<aside class="col-md-4">
						<div class="widget categories">
							<h3>Recent Reviews</h3>
							<div class="row">
								<div class="col-sm-12">
								<?php
$_from = $_smarty_tpl->tpl_vars['review']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_varreview_0_saved_item = isset($_smarty_tpl->tpl_vars['varreview']) ? $_smarty_tpl->tpl_vars['varreview'] : false;
$__foreach_varreview_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['varreview'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['varreview']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['varreview']->value) {
$_smarty_tpl->tpl_vars['varreview']->_loop = true;
$__foreach_varreview_0_saved_local_item = $_smarty_tpl->tpl_vars['varreview'];
?>
								
									<div class="single_comments clearfix">
										<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/avatar3.png" alt="">
										<p><?php echo $_smarty_tpl->tpl_vars['varreview']->value['message'];?>
 </p>
										<div class="entry-meta small muted">
											<span>By <a href="##"><?php echo $_smarty_tpl->tpl_vars['varreview']->value['name'];?>
</a></span> <!--On <a href="##">Creative</a>-->
										</div>
									</div>
								<?php
$_smarty_tpl->tpl_vars['varreview'] = $__foreach_varreview_0_saved_local_item;
}
if ($__foreach_varreview_0_saved_item) {
$_smarty_tpl->tpl_vars['varreview'] = $__foreach_varreview_0_saved_item;
}
if ($__foreach_varreview_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_varreview_0_saved_key;
}
?>	
	    							<!--<div class="single_comments clearfix">
	    								<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/avatar3.png" alt="">
	    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
	    								<div class="entry-meta small muted">
	                                        <span>By <a href="##">Alex</a></span>On <a href="##">Creative</a>
										</div>
									</div>
	    							<div class="single_comments clearfix">
	    								<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/avatar3.png" alt="">
	    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
	    								<div class="entry-meta small muted">
	                                        <span>By <a href="##">Alex</a></span>On <a href="##">Creative</a>
										</div>
									</div>-->
	    							
								</div>

							</div>                     
						</div><!--/.recent comments-->
						
						<div class="widget ratings">
	                        <h3>Our ratings</h3>
	                        <div class="row">
	                            <div class="col-sm-12">
	                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p> -->
	                                <div class="static-rating pull-left">
									<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
										<span class="star <?php ob_start();
echo ceil($_smarty_tpl->tpl_vars['display_single_category']->value['rating_total']);
$_tmp2=ob_get_clean();
if ($_smarty_tpl->tpl_vars['foo']->value <= $_tmp2) {?> filled <?php }?>" data-star="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"></span>
									<?php }
}
?>

										<!--<span class="star " data-star="2"></span>
										<span class="star" data-star="3"></span>
										<span class="star filled" data-star="4"></span>
										<span class="star filled"  data-star="5"></span>-->
									</div>
								</div>
							</div>      
							
						</div><!--/.categories-->

	                    <div class="widget address">
	                        <h3>Reach to us</h3>
	                        <div class="row">
	                            <div class="col-sm-12">
	                                <address>
										<h5>Address</h5>
										<p><?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['address'];?>
 <br>
										</p>
										<p>Phone:<?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['mobile'];?>
  <br>
										Email Address:<?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['email'];?>
 </p>
									</address>
								</div>
							</div>                     
						</div><!--/.categories-->
	    				
	    				<div class="widget map">
	                        <h3>Map</h3>
	                        <div class="row">
	                            <div class="col-sm-12">
	                                <div id="gmap"></div>
								</div>
							</div>                     
						</div><!--/.map-->
	    				
	                    
	    				
	    				<div class="widget services_gallery">
	                        <h3>Our Gallery</h3>
	                        <ul class="sidebar-gallery row">
							<?php
$_from = $_smarty_tpl->tpl_vars['photogallery']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v1_1_saved_item = isset($_smarty_tpl->tpl_vars['v1']) ? $_smarty_tpl->tpl_vars['v1'] : false;
$__foreach_v1_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
$__foreach_v1_1_saved_local_item = $_smarty_tpl->tpl_vars['v1'];
?>
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
admin/uploadifive/uploads/<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
" alt=""  height="63"></a></li>
							<?php
$_smarty_tpl->tpl_vars['v1'] = $__foreach_v1_1_saved_local_item;
}
if ($__foreach_v1_1_saved_item) {
$_smarty_tpl->tpl_vars['v1'] = $__foreach_v1_1_saved_item;
}
if ($__foreach_v1_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v1_1_saved_key;
}
?>
	                         <!-- <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/gallery2.png" alt="" width="108" height="63"></a></li>
	                              <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/gallery3.png" alt=""></a></li>
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/gallery4.png" alt=""></a></li>
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/gallery5.png" alt=""></a></li>
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
default/assets/images/themes/gallery6.png" alt=""></a></li>-->
							</ul>
						</div><!--/.blog_gallery-->
						
	    				
						</aside>     
					
					</div><!--/.row-->
			
			</div><!--/.blog-->
		
		</section><!--/#blog-->
			
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php echo '<script'; ?>
>
jQuery( document ).ready(function() {
    
	var longitude="<?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['longitude'];?>
";
	var latitude="<?php echo $_smarty_tpl->tpl_vars['display_single_category']->value['latitude'];?>
";
	initMap(longitude,latitude);
});
     function like(id)
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
										if(response=='Your already liked')
										{
										   alert("Your already liked");
										}
										else
										{
										   $("#count_like").html(response);
										}
									}
								});  					
	
	 
	 }
    <?php echo '</script'; ?>
>	
		<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpBrOu8dBJnnjyvkTtGsE8EFkCJRyvfmg&callback=initMap"
async defer><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
