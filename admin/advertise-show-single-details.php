<?php
include_once('config.php');
include_once('header1.php');
?>
<?php
if(isset($_GET['advertise_id']) && $_GET['advertise_id'] !="")
{
    $advertise_id = $_GET['advertise_id'];
	$sql = "DELETE FROM `gk_advertise` WHERE advertise_id = '$advertise_id'";
	mysql_query($sql);
	setSessionMsg('Record deleted successfully');
			?>
				<script type="text/javascript">
				var newLocation = "<?php echo 'advertise-show-single-details.php?client_id='.$_REQUEST['client_id']; ?>";
				window.location = newLocation;   
				</script>
			<?php
			exit;
 
}	
?>
    
<?php
if(isset($success) && $success !="")
{
?>	
	<center><span id="error" style="color:red;">
	<?php
	echo $success;
	?>
	</span></center>
<?php
}
?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="page-header"><!--Tables--></h1>
						<?php
						 getSessionMsg();
						?>
						<script>
						    setTimeout(function(){document.getElementById('alert-success').style.display='none'}, 8000);
						</script></h6>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
			
        <!--  <a href="advertise-add.php">
	    <button style="float:right;" type="reset" class="btn btn-info"> Add New Advertise </button></a>-->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Show Advertise Details
			
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="">
                                         <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>description</th>
												<th>image</th>
                                                <th>Authar</th>
                                                <th>status</th>
                                                <th>Delete</th>
												<!--<th>Edit</th>-->
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
														<?php
														
														if(isset($_GET['active']) && $_GET['active'] !="")
														{
														    $active= $_GET['active'];
															
															
														     //$sql = "DELETE FROM `meta_keyword` WHERE id = '$active'";
															 $sql = "UPDATE `gk_advertise` SET status='".$_REQUEST['status']."' WHERE advertise_id = '$active'";
														     mysql_query($sql);

														}
														
													
													 
															$sql = "select * from gk_client_management cm INNER JOIN gk_advertise adv ON cm.client_id=adv.authar where cm.client_id='".$_REQUEST['client_id']."' and adv.advertise_id != 0 order by adv.advertise_id DESC";
															$result = mysql_query($sql);
															while($row = mysql_fetch_array($result))
															{ 
																?>   
																   
																	<td><?php 
$queryimages=mysql_query("select * from gk_adv_images where adv_id='".$row['advertise_id']."'");
$rowimages=mysql_fetch_array($queryimages);																	
																	echo $row['name'];?></td>	
																	<td><?php echo $row['decs'];?></td>
																	
																	<td><img src="<?php echo "uploadifive/uploads/".$rowimages['image_name'];?>" width="100" height="100" ></a></td>
																	<td><?php echo $row['client_name'];?></td>
																	<td>
																	<?php
																	if($row['status']=='1')
																	{                                                            
																	?>
																	<a href="advertise-show-single-details.php?client_id=<?php echo $_REQUEST['client_id'];?>&active=<?php echo $row['advertise_id']; ?>&status=0" class="glyphicon glyphicon-ok" onclick="return confirm('Are you sure you want Active this');"></a>
																					<!--<button class="btn btn-default">ACTIVE</button> -->
																	<?php //echo $row['status'];
																	}
																	else
																	{
																	?>
																	<a href="advertise-show-single-details.php?client_id=<?php echo $_REQUEST['client_id'];?>&active=<?php echo $row['advertise_id']; ?>&status=1"  class="glyphicon glyphicon-remove" onclick="return confirm('Are you sure you want DEACTIVE this');"></a>
																	<?php
																	}
																	?>
				
				                                                 </td>
																	
																	
																	<td><a class="glyphicon glyphicon-trash"  href="advertise-show-single-details.php?client_id=<?php echo $_REQUEST['client_id'];?>&advertise_id=<?php echo $row['advertise_id']; ?>"></a></td>
																<!--	<td><a class="glyphicon glyphicon-pencil"  href="advertise-edit.php?advertise_id=<?php echo $row['advertise_id'];?>"></a></td>-->
																</tr>
																<?php
															}
														?>								  
					                    </tbody>
                                    </table>
								<div style="margin-left:74%;">
									
                                </div>
                                </div>
                                <!-- /.table-responsive -->
                                
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
