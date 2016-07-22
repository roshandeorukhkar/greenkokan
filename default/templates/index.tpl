<!doctype html>
<html>
	{include file='widgets/header.tpl'}
	<body class="homepage" cz-shortcut-listen="true">
		{include file='widgets/nav-bar.tpl' active='home'}
		{include file='modules/home/corousal.tpl'}
		{include file='modules/home/landing-text.tpl'}
		<div class="container main-categories-container">
			<div class="row">
				<div class="col-sm-9">
					<section id="recent-works">
						<div class="center wow fadeInDown animated">
							<h2>Popular categories</h2>
						</div>
						<div class="row">
						{foreach from=$catgory key=k item=v}
							<div class="col-xs-12 col-sm-4 col-md-3">
								<div class="recent-work-wrap">
									<img class="img-responsive" src="admin/{$v['category_image']}" alt="">
									<div class="overlay">
										<div class="recent-work-inner">
										<ul>
									{foreach from = $v['subcategories'] key=i item=j}
										<li>{$j['sub_category']} ,</li>
									{/foreach}
									<ul>	
											<h3><a href="{$siteroot}services/{$v['category_name']}/{$v['category_id']}">{$v['category_name']}</a> </h3>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
											<a class="preview" href="{$siteroot}services/doctors/10" ><i class="fa fa-eye"></i> View</a>
										</div>
									</div>
								</div>
							</div>
						{/foreach}	
						</div> 
					</section>
					<section id="services" class="service-item">
						<div class="center wow fadeInDown animated">
							<h2>Most visited places</h2>
						</div>
						<div class="row">
						{foreach from=$pack key=k item=v}
							<div class="col-sm-6 col-md-4">
								<div class="media services-wrap wow fadeInDown animated">
									<div class="pull-left">
										<img class="img-responsive" src="admin/uploadifive/uploads/most_visted_place/{$v['image_name']}">
									</div>
									<div class="media-body pull-left">
										<h3 class="media-heading">{$v['placename']}</h3>
										<p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
									</div>
								</div>
							</div>
						{/foreach}
						</div>
					</section>
				</div>
				<aside class="col-sm-3">
					<div class="ad-container">
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
						<div class="ad-wrap">
							<a href="#">
								<img class="img-responsive" src="default/assets/images/ad/ad-1.jpg" alt="">
							</a>
						</div>	
					</div>
				</aside>
			</div>
			
		</div>
		{include file='widgets/footer.tpl'}
		{include file='widgets/scripts.tpl'}
	</body>
</html>