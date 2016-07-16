<!doctype html>
<html>
	{include file='../../widgets/header.tpl'}
	<body class="homepage" cz-shortcut-listen="true">
		{include file='../../widgets/nav-bar.tpl' active='services'}
		
		<section id="services" class="container">
			<div class="row">
					
						<div class="block block-service-grid">
							<div class="col-sm-12 block-head">{$doct}</div>
							<ul>
								{foreach from=$display_services key=k item=v}
								<li class="col-sm-4">
									<div class="pic">
										<img src="{$siteroot}admin/uploadifive/uploads/{$v['image_name']}" width="370" height="200" alt="">
										<a href="{$siteroot}service-details/{$v['name']}/{$v['advertise_id']}" class="link"></a>
										<div class="date"><div>{$v['count']}<span>likes</span></div></div>
										<a href="{$siteroot}service-details/{$v['name']}/{$v['advertise_id']}" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="{$siteroot}service-details/{$v['name']}/{$v['advertise_id']}">{$v['name']}</a></h3>
									<div class="author">by {$v['client_name']} </div>
									<p>{$v['decs']|substr:0:40}</p>
									<div class="rating"><div style="width:60%"></div></div>
								</li>
								{/foreach}
								<!--<li class="col-sm-4">
									<div class="pic">
										<img src="{$siteroot}default/assets/images/themes/list//item-8.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="{$siteroot}default/assets/images/themes/list//item-8.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
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
										<img src="{$siteroot}default/assets/images/themes/list//item-9.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="{$siteroot}default/assets/images/themes/list//item-9.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="#">ABC Clinic</a></h3>
									<div class="author">by Roshan D</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
									<div class="rating"><div style="width:90%"></div></div>
								</li>
							    <li class="col-sm-4">
									<div class="pic">
										<img src="{$siteroot}default/assets/images/themes/list//item-10.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="{$siteroot}default/assets/images/themes/list//item-10.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="#">ABC Clinic</a></h3>
									<div class="author">by Roshan D</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
									<div class="rating"><div style="width:70%"></div></div>
								</li>
								<li class="col-sm-4">
									<div class="pic">
										<img src="{$siteroot}default/assets/images/themes/list//item-11.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="{$siteroot}default/assets/images/themes/list//item-11.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
									</div>
									<h3><a href="#">ABC Clinic</a></h3>
									<div class="author">by Roshan D</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
									<div class="rating"><div style="width:80%"></div></div>
								</li>
								<li class="col-sm-4">
									<div class="pic">
										<img src="{$siteroot}default/assets/images/themes/list//item-12.jpg" width="370" height="200" alt="">
										<a href="#" class="link"></a>
										<div class="date"><div>15<span>likes</span></div></div>
										<a href="{$siteroot}default/assets/images/themes/list//item-12.jpg" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
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
			
		{include file='../../widgets/footer.tpl'}
		{include file='../../widgets/scripts.tpl'}
	</body>
</html>