<?php
/* Smarty version 3.1.29, created on 2016-07-06 01:47:54
  from "H:\My Programming Stuff\PHP Programming\htdocs\green-kokan\default\templates\modules\services\service-details.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577c15f2eba358_18755418',
  'file_dependency' => 
  array (
    '0bdcb094d675377df3202d9a2e8483f4c1ce34bc' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\green-kokan\\default\\templates\\modules\\services\\service-details.tpl',
      1 => 1467749782,
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
function content_577c15f2eba358_18755418 ($_smarty_tpl) {
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
				<h2>Dr. Thatte</h2>
				<p class="lead">Eye Specialist</p>
			</div>
				<div class="services">
					<div class="row">
					<div class="col-md-8">
						<div class="services-item">
							<img class="img-responsive img-services" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/blog1.jpg" width="100%" alt="">
							<div class="row">
								<div class="col-xs-12 col-sm-2 text-center">
									<div class="entry-meta">
										<span id="publish_date">See Here</span>
										<span><i class="fa fa-comment"></i> <a href="##comments">2 Comments</a></span>
										<span><i class="fa fa-heart"></i><a href="##">56 Likes</a></span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-10 services-content">
									<h2>Consequat bibendum quam</h2>
									<p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</p>
									<p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper.</p>
									<div class="post-tags">
										<strong>Tag:</strong> <a href="##">Cool</a> / <a href="##">Helping</a> / <a href="##">Doorstep</a>
									</div>
								</div>
							</div>
						</div> 
						
						<h1 id="comments_title">5 Comments</h1>
						<div class="media comment_section">
							<div class="pull-left post_comments">
								<a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/girl.png" class="img-circle" alt=""></a>
							</div>
							<div class="media-body post_reply_comments">
								<h3>Marsh</h3>
								<h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
								<a href="##">Reply</a>
							</div>
						</div>
						<div class="media comment_section">
							<div class="pull-left post_comments">
								<a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/boy2.png" class="img-circle" alt=""></a>
							</div>
							<div class="media-body post_reply_comments">
								<h3>Marsh</h3>
								<h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
								<a href="##">Reply</a>
							</div>
						</div>
						<div class="media comment_section">
							<div class="pull-left post_comments">
								<a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/boy3.png" class="img-circle" alt=""></a>
							</div>
							<div class="media-body post_reply_comments">
								<h3>Marsh</h3>
								<h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
								<a href="##">Reply</a>
							</div>
						</div>
						<div id="contact-page clearfix">
							<div class="status alert alert-success" style="display: none"></div>
							<div class="message_heading">
								<h4>Leave your feedback</h4>
								<p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
							</div>
							<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="#" role="form">
								<div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<label>Name *</label>
											<input type="text" class="form-control" required="required">
										</div>
										<div class="form-group">
											<label>Email *</label>
											<input type="email" class="form-control" required="required">
										</div>
										
									</div>
									<div class="col-sm-7">
										<div class="form-group">
											<label>Message *</label>
											<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-lg" required="required">Submit Review</button>
										</div>
									</div>
								</div>
							</form>
						</div> 
					</div> 
					<aside class="col-md-4">
						<div class="widget categories">
							<h3>Recent Reviews</h3>
							<div class="row">
								<div class="col-sm-12">
									<div class="single_comments">
										<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/avatar3.png" alt="">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
										<div class="entry-meta small muted">
											<span>By <a href="##">Alex</a></span>On <a href="##">Creative</a>
										</div>
									</div>
	    							<div class="single_comments">
	    								<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/avatar3.png" alt="">
	    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
	    								<div class="entry-meta small muted">
	                                        <span>By <a href="##">Alex</a></span>On <a href="##">Creative</a>
										</div>
									</div>
	    							<div class="single_comments">
	    								<img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/avatar3.png" alt="">
	    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
	    								<div class="entry-meta small muted">
	                                        <span>By <a href="##">Alex</a></span>On <a href="##">Creative</a>
										</div>
									</div>
	    							
								</div>
							</div>                     
						</div><!--/.recent comments-->
						
						
	                    <div class="widget address">
	                        <h3>Reach to us</h3>
	                        <div class="row">
	                            <div class="col-sm-12">
	                                <address>
										<h5>Thatte Clinic</h5>
										<p>1537 Flint Street <br>
										Tumon, MP 96911</p>
										<p>Phone:670-898-2847 <br>
										Email Address:info@domain.com</p>
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
	                        <ul class="sidebar-gallery">
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/gallery1.png" alt=""></a></li>
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/gallery2.png" alt=""></a></li>
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/gallery3.png" alt=""></a></li>
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/gallery4.png" alt=""></a></li>
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/gallery5.png" alt=""></a></li>
	                            <li><a href="##"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/default/assets/images/themes/gallery6.png" alt=""></a></li>
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

	</body>
</html><?php }
}
