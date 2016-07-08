<?php
include_once('../../common/internal/inner-header.php');
$smarty->assign('siteTitle', 'Konkan tour');
$smarty->assign('siteName', 'kokan');
$smarty->assign('moduleName', 'About us');
$smarty->display('modules/about-us/about-us.tpl');
?>