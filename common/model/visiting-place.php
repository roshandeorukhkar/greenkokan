<?php
/**************************************************/
## Class Name - Landingtext
/**************************************************/

class Place extends Database 
{	
	## Constructor
	function Place() {
		$this->gk_pack_ =gk_pack;
		$this->Database();
	}	

	
	## Get user First name And last Name by userid
	function getpackagename() {
		/* $fields=array('package_name','visiting_place_image');	
		$tables=array($this->gk_pack_);
		$where=array("status='1'");		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchAll($result1); 
		return $result; */	
		$query=mysql_query("select pi.image_name,mv.placename from gk_most_visited_place mv INNER join gk_place_images pi ON pi.p_id=mv.place_id group by pi.p_id");
	$count=mysql_num_rows($query);
	if($count > 0)
	{	
		 while($result_right=mysql_fetch_array($query))
		  {
			$results_right[] = $result_right;		
		  }
		  
		  return $results_right;
	}  
	}
	
}
?>
