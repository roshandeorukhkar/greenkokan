<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/green-konkan/includefiles.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/green-konkan/default/source/workflow/services/services_calss.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/green-konkan/common/model/services.php');
//print_r($_REQUEST);

//Adv detail
$Services_single_Obj = new Services();
$var_single_services= $Services_single_Obj->getcategorysingle($_REQUEST['serviceName']);

$smarty->assign("display_single_category",$var_single_services);



//gallery photo
$varphotogallery= $Services_single_Obj->getphotogallery($_REQUEST['serviceId']);
$smarty->assign("photogallery",$varphotogallery); 

$varcomment= $Services_single_Obj->getcomment($_REQUEST['serviceId']);
$smarty->assign("count",$varcomment);

$varreview= $Services_single_Obj->getall_review($_REQUEST['serviceId']);
$smarty->assign("review",$varreview); 
 /*
echo "<pre>";
print_r($varreview);
echo "</pre>";  */


$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$hostname;
$REMOTE_ADDR=$hostname;
$ip= $REMOTE_ADDR;
$IP_ADDRESS = GetHostByName($ip);
$smarty->assign('IP_ADDRESS', $IP_ADDRESS);



$smarty->assign('moduleName', 'services');
$smarty->assign('serviceName', $_REQUEST['serviceName']);
$smarty->display(TEMPLATEDIR . '/modules/services/service-details.tpl');
?>