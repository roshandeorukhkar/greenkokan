<!doctype html>
<html>
	{include file='../../widgets/header.tpl'}
	<body class="homepage" cz-shortcut-listen="true">
		{include file='../../widgets/nav-bar.tpl' active='services'}
		
		<section id="services" class="container">
			<div class="center">
				<h2>{$serviceName}</h2>
				<p class="lead">{$display_single_category['client_name']}</p>
			</div>
				<div class="services">
					<div class="row">
					<div class="col-md-8">
						<div class="services-item">
							<img class="img-responsive img-services" src="{$siteroot}admin/{$display_single_category['banner_image']}" width="100%" alt="">
							<div class="row">
							
							
							
								<div class="col-xs-12 col-sm-2 text-center">
									<div class="entry-meta">
										<span id="publish_date">See Here</span>
										<span><i class="fa fa-comment"></i> <a href="##comments">{$count[0]} Comments</a></span>
										<span><i class="fa fa-heart"></i><a href="javascript:void(0);" onclick="like({$display_single_category['advertise_id']});"><span id="count_like">{$display_single_category['count_total']}</span> Likes</a></span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-10 services-content">
									<h2>Consequat bibendum quam</h2>
									<p>DESCIPTION:{$display_single_category['decs']}</p>
									<div class="post-tags">
										<strong>Tag:</strong> <a href="##">{$display_single_category['category_name']}</a> / <a href="##">{$display_single_category['sub_category']}</a> 
									</div>
								</div>
							</div>
						</div>
{if {$display_single_category['category_name']} eq "Hotel"}						
						
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
											<a href="{$siteroot}default/assets/images/themes/item1.png" class="hotelMenu">
												<img class="img-responsive" src="{$siteroot}default/assets/images/themes/item1.png" alt="">
											</a>
										</div>
									</div> 
									<div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3 isotope-item isotope-hidden">
										<div class="recent-work-wrap">
										<a href="{$siteroot}default/assets/images/themes/item2.png" class="hotelMenu">
											<img class="img-responsive" src="{$siteroot}default/assets/images/themes/item2.png" alt="">
											</a>
										</div>
									</div> 
									<div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 isotope-item isotope-hidden">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="{$siteroot}default/assets/images/themes/item3.png" alt="">
											
										</div>
									</div> 
									<div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3 isotope-item isotope-hidden">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="{$siteroot}default/assets/images/themes/item4.png" alt="">
										</div>
									</div> 
									<div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3 isotope-item">
										<div class="recent-work-wrap">
											<img class="img-responsive">
										</div>
									</div> 
									<div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3 isotope-item">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="{$siteroot}default/assets/images/themes/item6.png" alt="">
										</div>
									</div> 
									<div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3 isotope-item">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="{$siteroot}default/assets/images/themes/item7.png" alt="">
										</div>
									</div> 
									<div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3 isotope-item">
										<div class="recent-work-wrap">
											<img class="img-responsive" src="{$siteroot}default/assets/images/themes/item8.png" alt="">
										</div>
									</div> 
								</div>
							</div>
						</div>
	{/if}					
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
											<button type="submit" class="btn btn-primary btn-lg" onclick="review({$display_single_category['advertise_id']})" required="required">Submit Review</button>
										</div>
									</div>
								</div>
							<!--</form>-->
						</div> 
	<script>
     function review(id)
	 {
	        var result = "{$siteroot}";
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
    </script>	
					</div> 
					<aside class="col-md-4">
						<div class="widget categories">
							<h3>Recent Reviews</h3>
							<div class="row">
								<div class="col-sm-12">
								{foreach from=$review key=k item=varreview}
								
									<div class="single_comments clearfix">
										<img src="{$siteroot}default/assets/images/themes/avatar3.png" alt="">
										<p>{$varreview['message']} </p>
										<div class="entry-meta small muted">
											<span>By <a href="##">{$varreview['name']}</a></span> <!--On <a href="##">Creative</a>-->
										</div>
									</div>
								{/foreach}	
	    							<!--<div class="single_comments clearfix">
	    								<img src="{$siteroot}default/assets/images/themes/avatar3.png" alt="">
	    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
	    								<div class="entry-meta small muted">
	                                        <span>By <a href="##">Alex</a></span>On <a href="##">Creative</a>
										</div>
									</div>
	    							<div class="single_comments clearfix">
	    								<img src="{$siteroot}default/assets/images/themes/avatar3.png" alt="">
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
									{for $foo=1 to 5}
										<span class="star {if $foo le {$display_single_category['rating_total']|ceil} } filled {/if}" data-star="{$foo}"></span>
									{/for}
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
										<p>{$display_single_category['address']} <br>
										</p>
										<p>Phone:{$display_single_category['mobile']}  <br>
										Email Address:{$display_single_category['email']} </p>
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
							{foreach from=$photogallery key=k item=v1}
	                            <li><a href="##"><img src="{$siteroot}admin/uploadifive/uploads/{$v1}" alt=""  height="63"></a></li>
							{/foreach}
	                         <!-- <li><a href="##"><img src="{$siteroot}default/assets/images/themes/gallery2.png" alt="" width="108" height="63"></a></li>
	                              <li><a href="##"><img src="{$siteroot}default/assets/images/themes/gallery3.png" alt=""></a></li>
	                            <li><a href="##"><img src="{$siteroot}default/assets/images/themes/gallery4.png" alt=""></a></li>
	                            <li><a href="##"><img src="{$siteroot}default/assets/images/themes/gallery5.png" alt=""></a></li>
	                            <li><a href="##"><img src="{$siteroot}default/assets/images/themes/gallery6.png" alt=""></a></li>-->
							</ul>
						</div><!--/.blog_gallery-->
						
	    				
						</aside>     
					
					</div><!--/.row-->
			
			</div><!--/.blog-->
		
		</section><!--/#blog-->
			
		{include file='../../widgets/footer.tpl'}
		{include file='../../widgets/scripts.tpl'}
		<script>
jQuery( document ).ready(function() {
    
	var longitude="{$display_single_category['longitude']}";
	var latitude="{$display_single_category['latitude']}";
	initMap(longitude,latitude);
});
     function like(id)
	 {
	     var ip_address= "{$IP_ADDRESS}";
	        var result = "{$siteroot}";						
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
    </script>	
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpBrOu8dBJnnjyvkTtGsE8EFkCJRyvfmg&callback=initMap"
async defer></script>
	</body>
</html>