<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/green-kokan/includefiles.php');

$smarty->assign('moduleName', 'Contact us');
$smarty->display(TEMPLATEDIR . '/modules/contact-us/contact-us.tpl');
?>