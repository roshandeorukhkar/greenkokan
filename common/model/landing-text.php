<?php
/**************************************************/
## Class Name - Landingtext
/**************************************************/

class Landingtext extends Database 
{	
	## Constructor
	function Landingtext() {
		$this->landing_ = landing;
		$this->Database();
	}	

	
	## Get user First name And last Name by userid
	function getcontant() {
		$fields=array('title','heading');	
		$tables=array($this->landing_);
		$where=array("status='1'");		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchRow($result1); 
		return $result;
		//return $result['title'];		
	}
	
}
?>
