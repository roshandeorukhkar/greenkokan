<?php
include_once('includefiles.php');


$smarty->assign('siteTitle', 'Green Konkan');
$smarty->assign('siteName', 'green-kokan');

//landing text
include_once('common/model/landing-text.php');
$userObj = new Landingtext();
$pqr= $userObj->getcontant();
//print_r($pqr);
$smarty->assign("landing",$pqr); 


//slider
include_once('common/model/slider-images.php');
$sliderObj = new Slider();
$varslider= $sliderObj->getslider();
//print_r($varslider);
$smarty->assign("sliderimages_display",$varslider); 

//adv right side
include_once('common/model/slider-images.php');
$adv_right_Obj = new Slider();
$varadv_right= $adv_right_Obj->getadvright();

$smarty->assign("display_right_adv",$varadv_right); 

/*echo "<pre>";
print_r($vargetallcountcategory);
echo "</pre>"; */
/*echo "<pre>";
print_r($vargetallcategory);
echo "</pre>"; */
//visiting place
include_once('common/model/visiting-place.php');
$placeObj = new Place();
$vargetpakage= $placeObj->getpackagename();

$smarty->assign("pack",$vargetpakage);

//SEO
include_once('common/model/seo.php');
$seoObj = new SEO_class();
$vargetseo= $seoObj->getseo();
$smarty->assign("seo",$vargetseo);

$smarty->display(TEMPLATEDIR . '/index.tpl');


/*
{foreach from=$abc key=k item=v}
   <li>{$k}: {$v}</li>
{/foreach}

*/
?>


