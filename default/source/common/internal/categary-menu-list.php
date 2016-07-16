<?php
	//Category  landing
	include_once(DOC_ROOT . '/common/model/category-text.php');
	$categoryObj = new Category();
	$vargetcategory= $categoryObj->getcategory();
	for($kk=0;$kk < sizeOf($vargetcategory); $kk++){
		$vargetcategory[$kk]['subcategories'] = $categoryObj->getSubCategory($vargetcategory[$kk]['category_name']);
	}
	
	$smarty->assign("catgory",$vargetcategory);
	 
	$vargetallcategory= $categoryObj->getallcategory();
	$smarty->assign("allcatgory",$vargetallcategory);

	$vargetallcountcategory= $categoryObj->getallcountcategory();
	$smarty->assign("cont",$vargetallcountcategory);
?>