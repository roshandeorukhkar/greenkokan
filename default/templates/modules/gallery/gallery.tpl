<!doctype html>
<html>
	{include file='../../widgets/header.tpl'}
	<body>
		{include file='../../widgets/nav-bar.tpl' active='gallery'}
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
								    <span>Doctors</span>
								  </a>
								</li>
								<li>
								  <a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">
								    <span>Beaches</span>
								  </a>
							</li>
						</ul>
			        </li>
			       
			      </ul>

			      <div id="galleryTabContent" class="tab-content">
			        <div role="tabpanel" class="tab-pane fade in active" id="hotel" aria-labelledby="hotel-tab">
			         	<div class="gallery-hotel">	
							<a href="default/assets/images/gallery/image1.jpg" class="col-md-3"><img src="default/assets/images/gallery/image1.jpg" alt="" title="Beautiful Image" /></a>
							<a href="default/assets/images/gallery/image2.jpg" class="col-md-3"><img src="default/assets/images/gallery/image2.jpg" alt="" title=""/></a>
							<a href="default/assets/images/gallery/image3.jpg" class="col-md-3"><img src="default/assets/images/gallery/image3.jpg" alt="" title="Beautiful Image"/></a>
							<a href="default/assets/images/gallery/image4.jpg" class="col-md-3"><img src="default/assets/images/gallery/image4.jpg" alt="" title=""/></a>
							<div class="clear"></div>
							
							<a href="default/assets/images/gallery/image5.jpg" class="col-md-3"><img src="default/assets/images/gallery/image5.jpg" alt="" title=""/></a>
							<a href="default/assets/images/gallery/image6.jpg" class="col-md-3"><img src="default/assets/images/gallery/image6.jpg" alt="" title=""/></a>
							<a href="default/assets/images/gallery/image7.jpg" class="col-md-3"><img src="default/assets/images/gallery/image7.jpg" alt="" title=""/></a>
							<a href="default/assets/images/gallery/image8.jpg" class="col-md-3"><img src="default/assets/images/gallery/image8.jpg" alt="" title=""/></a>
							<div class="clear"></div>
							
							<a href="default/assets/images/gallery/image9.jpg" class="col-md-3"><img src="default/assets/images/gallery/image9.jpg" alt="" title=""/></a>
							<a href="default/assets/images/gallery/image10.jpg" class="col-md-3"><img src="default/assets/images/gallery/image10.jpg" alt="" title=""/></a>
							<a href="default/assets/images/gallery/image11.jpg" class="col-md-3"><img src="default/assets/images/gallery/image11.jpg" alt="" title=""/></a>
							<a href="default/assets/images/gallery/image12.jpg" class="col-md-3"><img src="default/assets/images/gallery/image12.jpg" alt="" title=""/></a>
							<div class="clear"></div>
							
						</div>
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
		{include file='../../widgets/footer.tpl'}
		{include file='../../widgets/scripts.tpl'}
		<script type="text/javascript" src="{$siteroot}/default/assets/js/simple-lightbox.js"></script>
		<script type="text/javascript">
			/*$(document).ready(function(){
				$('.filtr-container').filterizr();
			});*/
			(function($) {

				'use strict';
				var $gallery = $('.gallery-hotel a').simpleLightbox();
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
		</script>
	</body>
</html>