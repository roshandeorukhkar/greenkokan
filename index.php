<?php
include_once('includefiles.php');

$smarty->assign('siteTitle', 'Green Konkan');
$smarty->assign('siteName', 'green-kokan');

$smarty->display(TEMPLATEDIR . '/index.tpl');
?>