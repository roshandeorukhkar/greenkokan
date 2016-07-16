<?php
/**************************************************/
## Class Name - Landingtext
/**************************************************/

class SEO_class extends Database 
{	
	## Constructor
	function SEO_class() {
		$this->SEO_display =SEO;
		$this->Database();
	}	

	
	## Get user First name And last Name by userid
	function getseo() {
		$fields=array('keyword','title','descending');	
		$tables=array($this->SEO_display);
		$where=array("status='1' ORDER BY rand() LIMIT 1");		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchRow($result1); 
		return $result;
		//return $result['title'];		
	}
	
}
?>
