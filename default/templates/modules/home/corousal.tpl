 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
	   {foreach from=$sliderimages_display key=k item=v}
        <li data-target="#{$v}" data-slide-to="{$k}" class="{if $k eq 0}
						    active
					     {/if}"></li>
		{/foreach}				 
        <!--<li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>-->
      </ol>
      <div class="carousel-inner" role="listbox">
	   {foreach from=$sliderimages_display key=k item=v}
        <div class="item {if $k eq 0}
						    active
					     {/if}">
          <img class="first-slide" src="admin/uploadifive/uploads/{$v}" alt="First slide">
          
        </div>
        <!--<div class="item">
          <img class="second-slide" src="default/assets/images/slider/slider2.jpg" alt="Second slide">
          
        </div>
        <div class="item">
          <img class="third-slide" src="default/assets/images/slider/slider3.jpg" alt="Third slide">
          
        </div>-->
		{/foreach}
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      </a>
    </div><!-- /.carousel -->