<?php
/**************************************************/
## Class Name - Slider
/**************************************************/

class Services extends Database 
{	
	## Constructor
	function Services() {
		//$this->adv_model_table = adv_table;
		$this->Database();
	}	

	
	## Get all category
	function getcontant($name) {
		/* $fields=array('advertise_id','name','decs');	
		$tables=array($this->adv_model_table);
		$where=array("status='1' AND category_name='".$name."'");		
		$result1 = $this->SelectData($fields,$tables, $where, $order = array(), $group=array(),$limit = "",0,0); 
		$result= $this->FetchAll($result1); 
		return $result;  */
		/* $dbHost = "localhost";
		$dbUser = "root";
		$dbPass = "";
		$dbname = "green_konkan";

		$dbC = @mysql_connect("$dbHost", "$dbUser", "$dbPass");
		mysql_select_db($dbname , $dbC); */
// 	 
		 $query=mysql_query("select gk_cm.client_name,gk_a.decs,gk_a.advertise_id,gk_a.name,gk_ai.image_name ,(select count(*) as count from gk_likes where adv_id=gk_a.advertise_id) as count from  gk_advertise gk_a LEFT JOIN gk_client_management gk_cm ON gk_a.authar=gk_cm.client_id LEFT JOIN gk_adv_images gk_ai ON gk_a.advertise_id=gk_ai.adv_id where gk_a.status='1' AND gk_a.category_name='".$name."' group by gk_ai.adv_id");
		 while($result=mysql_fetch_array($query))
		  {
			$results[] = $result;	
            			
		  } 
	  
	  return $results;
		//return $result['title'];		
	}
	## Get single category
	function getcategorysingle($name) {
		/* $dbHost = "localhost";
		$dbUser = "root";
		$dbPass = "";
		$dbname = "green_konkan"; 

		$dbC = @mysql_connect("$dbHost", "$dbUser", "$dbPass");
		mysql_select_db($dbname , $dbC);  */
// 	 
		 $query=mysql_query("select gk_a.longitude,gk_a.latitude,gk_a.banner_image,gk_a.advertise_id,gk_subca_name.sub_category,gk_a.category_name,gk_cm.client_name,gk_ai.image_name,gk_a.decs,gk_a.address,gk_a.email,gk_a.mobile,(select AVG(rating) from gk_review where adv_id=gk_a.advertise_id and gk_review.status='1') as rating_total,(select count(*) as count from gk_likes where adv_id=gk_a.advertise_id) as count_total from  gk_advertise gk_a LEFT JOIN gk_client_management gk_cm ON gk_a.authar=gk_cm.client_id LEFT JOIN gk_adv_images gk_ai ON gk_a.advertise_id=gk_ai.adv_id LEFT JOIN gk_sub_category gk_subca_name ON gk_subca_name.sub_category_id 	=gk_a.sub_category_id where gk_a.status='1' AND gk_a.name='".$name."' group by gk_ai.adv_id");
		$result=mysql_fetch_array($query);
			$results = $result;
	  return $results;
		//return $result['title'];		
	}
	//photo gallery images
	function getphotogallery($serviceId) {
		$query=mysql_query("select ai.image_name from gk_advertise ad INNER join gk_adv_images ai ON ad.advertise_id=ai.adv_id where ad.advertise_id='".$serviceId."'");
	 while($result=mysql_fetch_array($query))
	  {
        $results[] = $result['image_name'];		
	  }
	  
	  return $results;
	}
	//comment count
	function getcomment($advId) {
				$query=mysql_query("select count(*) as counts1 from gk_review where adv_id='".$advId."' and status='1'");
				$result=mysql_fetch_array($query);
				
				$results[] = $result['counts1'];		
				

				return $results;
	}
	//comment count
	function getall_review($advId) {
				$query=mysql_query("select name,email,message from gk_review where adv_id='".$advId."' AND status='1'");
				 while($result=mysql_fetch_array($query))
				  {
					$results[] = $result;		
				  }
				return $results;
	}
	
 }
?>
