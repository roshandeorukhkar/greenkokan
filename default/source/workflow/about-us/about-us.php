<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/green-kokan/includefiles.php');

$smarty->assign('moduleName', 'about-us');
$smarty->display(TEMPLATEDIR . '/modules/about-us/about-us.tpl');
?>