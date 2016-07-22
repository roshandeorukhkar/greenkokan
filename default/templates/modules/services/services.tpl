<!doctype html>
<html>
	{include file='../../widgets/header.tpl'}
	<body class="homepage" cz-shortcut-listen="true">
		{include file='../../widgets/nav-bar.tpl' active='services'}
		
		<section id="services" class="container">
			<div class="row">
					
						<div class="block block-service-grid">
							<div class="col-sm-12 block-head text-center">{$doct}</div>
							<div class="col-sm-3">
								<div class="search-left-widget">
									<h3 class="search-left-widget-title">Select area</h3>
									<ul class="search-left-city">
										<li><input type="checkbox" name=""><label for="checkbox">Chiplun</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">Khed</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">Ratnagiri</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">Sangameshwar</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">Guhagar</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">Mandangad</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">Mahad</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">Poladpur (15)</label></li>
									</ul>
								</div>
								<div class="search-left-widget">
									<h3 class="search-left-widget-title">Select subcategories</h3>
									<ul class="search-left-city">
										<li><input type="checkbox" name=""><label for="checkbox">Gynacologist (15)</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">Orthopedic</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">Psychologist</label></li>
										<li><input type="checkbox" name=""><label for="checkbox">General surgen</label></li>
									</ul>
								</div>
							</div>
							<ul class="col-sm-9">
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
								
							</ul>
						</div>
						
					</div>
		</section>
			
		{include file='../../widgets/footer.tpl'}
		{include file='../../widgets/scripts.tpl'}
	</body>
</html>