<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includefiles.php');

$smarty->assign('moduleName', 'contact-us');
$smarty->display(TEMPLATEDIR . '/modules/contact-us/contact-us.tpl');
?>