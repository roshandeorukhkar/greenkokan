<?php
session_start();
include_once('config.php');
if($_REQUEST['action']=="like")
{
     $query=mysql_query("select count(*) as counts from gk_likes where ip_address='".$_REQUEST['ip_address']."' and adv_id='".$_REQUEST['id']."'");
	 $count=mysql_fetch_array($query);
	 if($count['counts'] > 0)
	 {
		echo "Your already liked";
	 }
	 else
	 {
				mysql_query("insert into gk_likes(ip_address,adv_id) values ('".$_REQUEST['ip_address']."','".$_REQUEST['id']."')");
				
				$query=mysql_query("select count(*) as counts from gk_likes where adv_id='".$_REQUEST['id']."'");
				$count=mysql_fetch_array($query);
				echo $count['counts'];
	}
	 
}
else if($_REQUEST['action']=="adv")
{
  mysql_query("insert into gk_review(name,email,message,adv_id,rating) values ('".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['message']."','".$_REQUEST['adv_id']."','".$_REQUEST['user_rating']."')");
 echo "Successfully added";
  
}
else if($_REQUEST['action']=="category")
{
?>

			<div class="form-group ">
				<label>Sub Category</label>
				<select  class="form-control"  name="subcategory_name" id="subcategory_name">
				<option value="">please select</option>
				<?php 
				$sqlr = "SELECT * from  gk_sub_category where category_name='".$_REQUEST['name']."'";
				$result = mysql_query($sqlr);
				while($row3 = mysql_fetch_array($result))
				{
				?>
				<option <?php if(isset($_REQUEST['subcat']) && $row3['sub_category_id']==$_REQUEST['subcat']) echo "selected";?>
				value="<?php echo $row3['sub_category_id'];?>">
				<?php echo $row3['sub_category'];?>
				</option>
				<?php
				}
				?>
				</select>
			</div>
				<?php
}
else if($_REQUEST['action']=="visited")
{
mysql_query("delete from gk_place_images where id='".$_REQUEST['id']."'");
}
else
{
mysql_query("delete from gk_adv_images where id='".$_REQUEST['id']."'");
}
 //unlink('http://localhost/realestat/uploadifive/uploads/'.$_REQUEST['name']);
?>