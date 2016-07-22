<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includefiles.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/green-konkan/default/source/workflow/services/services_calss.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/common/model/services.php');
//print_r($_REQUEST);

//Servicesgreen-konkan\default/source/workflow/services
$Services_Obj = new Services();
$varservices= $Services_Obj->getcontant($_REQUEST['category']);

$smarty->assign("display_services",$varservices); 
/* echo "<pre>";
print_r($varservices);
echo "</pre>"; */
//echo TEMPLATEDIR;
$smarty->assign('doct', $_REQUEST['category']);
$smarty->assign('moduleName', 'services');
$smarty->display(TEMPLATEDIR . '/modules/services/services.tpl');
?>