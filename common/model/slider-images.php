<?php
/**************************************************/
## Class Name - Slider
/**************************************************/

class Slider extends Database 
{	
	## Constructor
	function Slider() {
		// $this->gk_adv = gk_advertise;
		//$this->gk_adv_img = gk_adv_images;
		$this->Database();
	}	

	
	## slider banner
	function getslider() {
		/*$fields=array('title','heading');	
		$tables=array($this->landing);
		$where=array("status='1'");		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchRow($result1);  */
		$query=mysql_query("select ai.image_name from gk_advertise ad INNER join gk_adv_images ai ON ad.advertise_id=ai.adv_id where ad.feature='Y'");
	 while($result=mysql_fetch_array($query))
	  {
        $results[] = $result['image_name'];		
	  }
	  
	  return $results;
	}
	## Get user First name And last Name by userid
	function getadvright() {
		/*$fields=array('title','heading');	
		$tables=array($this->landing);
		$where=array("status='1'");		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchRow($result1);  */
		$query=mysql_query("select ai.image_name,ad.name from gk_advertise ad INNER join gk_adv_images ai ON ad.advertise_id=ai.adv_id where ad.package_id='4'");
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
