<?php
/**************************************************/
## Class Name - Landingtext
/**************************************************/

class Category extends Database 
{	
	## Constructor
	function Category() {
		$this->category =gk_cate;
		$this->category_sub =gk_sub_cate;
		$this->Database();
	}	

	
	## Get user First name And last Name by userid
	function getcategory() {
		$fields=array('category_name','category_image','category_id');	
		$tables=array($this->category);
		$where=array("status='1' AND severity='1' AND category_image !=''");		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchAll($result1); 
		return $result;
		//return $result['title'];		
	}
	
	function getSubCategory($name) {
		$fields=array('sub_category_id','sub_category');	
		$tables=array($this->category_sub);
		$where=array("category_name='". $name ."'");		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchAll($result1); 
		return $result;
	}
	## Get user First name And last Name by userid
	function getallcategory() {
		$fields=array('category_name','category_image','category_id');	
		$tables=array($this->category);
		$where=array("status='1' AND category_image !=''");	
		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchAll($result1);
		
		return $result;
		//return $result['title'];		
	}
	function getallcountcategory() {
		$fields=array('count(*) as cnt');	
		$tables=array($this->category);
		$where=array("status='1' AND category_image !=''");	
		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchAll($result1);
		
		return $result;
		//return $result['title'];		
	}
	
}
?>
