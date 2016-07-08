<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/green-kokan/includefiles.php');

$smarty->assign('moduleName', 'gallery');
$smarty->display(TEMPLATEDIR . '/modules/gallery/gallery.tpl');
?>