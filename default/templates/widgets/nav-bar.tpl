<header id="header">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-4">
						<div class="top-number"><p><i class="fa fa-phone-square"></i> 8378989159</p></div>
					</div>
					<div class="col-sm-6 col-xs-8">
						<div class="social">
							<ul class="social-share">
								<li><a href="##"><i class="fa fa-facebook"></i></a></li>
								<li><a href="##"><i class="fa fa-twitter"></i></a></li>
								<li><a href="##"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="##"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="##"><i class="fa fa-skype"></i></a></li>
							</ul>
							<div class="search">
								<form role="form">
									<input type="text" class="search-form" autocomplete="off" placeholder="Search">
									<i class="fa fa-search"></i>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
		<nav class="navbar navbar-inverse" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{$siteroot}"><img src="{$siteroot}default/assets/images/themes/logo.png" alt="logo"></a>
				</div>
				<div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="{if $active eq 'home'}active{/if}"><a href="{$siteroot}">Home</a></li>
						<li class="{if $active eq 'about-us'}active{/if}"><a href="{$siteroot}about-us">About Us</a></li>
						<li class="dropdown {if $active eq 'services'}active{/if}">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
							
						
	<ul class="dropdown-menu service-list-menu row">
	{foreach from=$allcatgory key=k item=cat}
	
								<li class="col-md-3">
									<div class="list-group">
									  <a href="{$siteroot}services/{$cat['category_name']}/{$cat['category_id']}" class="ctrl-standard typ-subhed fx-sliderIn  list-group-item ">
									     {$cat['category_name']}
									  </a>
									</div>
								</li>
							{/foreach}	
								
							  </ul>

						</li>
						<li class="{if $active eq 'contact-us'}active{/if}"><a href="{$siteroot}contact-us" >Contact</a></li>
					</ul>
				</div>
			</div> 
		</nav> 
	</header> 