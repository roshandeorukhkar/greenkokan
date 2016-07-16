<?php
include_once('config.php');
include_once('header1.php');
?>



            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
			
                    <div class="col-lg-12">
					
          <a href="client_management.php">
	    <button style="float:right;margin-right: 3px;margin-top: 3px;" type="reset" class="btn btn-info"> Add New client MGNT</button></a>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Client Management Details
			
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="">
                                         <thead>
                                            <tr>
                                                <th>client Management</th>
                                                <th>Contact No</th>
												<th>email</th>
												<th>No Advertise</th>
                                                <th>status</th>
												<th>Edit</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
														<?php
														
														if(isset($_GET['active']) && $_GET['active'] !="")
														{
														    $active= $_GET['active'];
															
															
														     //$sql = "DELETE FROM `meta_keyword` WHERE id = '$active'";
															 $sql = "UPDATE `gk_client_management` SET status='".$_REQUEST['status']."' WHERE client_id = '$active'";
														     mysql_query($sql);

														}
														
														
													if (isset($_GET["page"])) 
													{ 
														$page  = $_GET["page"];
													} 
													else 
													{ 
														$page=1; 
														
													}; 
													 $start_from = ($page-1) * 10; 
													 
															 $sql = "SELECT * FROM `gk_client_management` where client_id != 0 order by client_id DESC limit $start_from, 10 ";
															$result = mysql_query($sql);
															while($row = mysql_fetch_array($result))
															{ 
																?>   
																   
																	<td><?php echo $row['client_name'];?></td>	
																	<td><?php echo $row['contact_no'];?></td>
																	
																	
																	<td><?php echo $row['email'];?></td>
																	<td><?php 
																	$queryforcount="select count(*) as conts from gk_client_management cm INNER JOIN gk_advertise adv ON cm.client_id=adv.authar where client_id='".$row['client_id']."'";
																	$resultforcount=mysql_query($queryforcount);
																	$rowcount=mysql_fetch_array($resultforcount);
																	if($rowcount['conts'] !="0")
																	{
																	?>
																	<a href="advertise-show-single-details.php?client_id=<?php echo $row['client_id'];?>">
																	<?php
																	echo $rowcount['conts'];?>
																	</a>
																	<?php
																	}
																	else
																	{
																	echo $rowcount['conts'];
																	}
																	?>
																	</td>
																	
																	<td>
																	<?php
																	if($row['status']=='1')
																	{                                                            
																	?>
																	<a href="client_management_list.php?active=<?php echo $row['client_id']; ?>&status=0" class="glyphicon glyphicon-ok" onclick="return confirm('Are you sure you want Active this');"></a>
																					<!--<button class="btn btn-default">ACTIVE</button> -->
																	<?php //echo $row['status'];
																	}
																	else
																	{
																	?>
																	<a href="client_management_list.php?active=<?php echo $row['client_id']; ?>&status=1" class="glyphicon glyphicon-remove" onclick="return confirm('Are you sure you want DEACTIVE this');"></a>
																	<?php
																	}
																	?>
				
				                                                 </td>
																	
																	
																	
																	<td><a href="client_management_edit.php?client_id=<?php echo $row['client_id'];?>">Edit</a></td>
																</tr>
																<?php
															}
														?>								  
					                    </tbody>
                                    </table>
								<div style="margin-left:74%;">
									<?php 	
										$sql2 = "SELECT COUNT(client_id) FROM gk_client_management"; 
										$rs_result = mysql_query($sql2); 
										$row = mysql_fetch_row($rs_result); 
										$total_records = $row[0]; 
										$total_pages = ceil($total_records / 10);
if($total_records > 10)
{										
												//echo $total_pages;
												if($page != 1)
												{
													echo	"<a href='client_management_list.php?page=1'class='pagifirst'>FIRST</a> ";
												}	
												if($page>1)
												{
													echo "<a href='client_management_list.php?page=".($page-1)."'class='pagiprivi'>PREVIOUS</a>";
												}
												for ($i=1; $i<=$total_pages; $i++) 
												{
													if($i == ($page + 1) or $i == ($page + 2) or $i == ($page))
													{
														echo "<a href='client_management_list.php?page=".$i."'class='paginobr'>".$i."</a> ";
													}
													elseif($i == ($page - 1) or $i == ($page - 2) )
													{
														echo "<a href='client_management_list.php?page=".$i."'class='paginobr'>".$i."</a> ";
													}
												} 
												if($page != $total_pages)
												{
													echo "<a href='client_management_list.php?page=".($page+1)."' class='paginext'>Next</a>";
												}
												if($page != $total_pages)
												{
												echo "<a href='client_management_list.php?page=".($total_pages)."' class='pagilast'>Last</a>";
												}
												echo "</br>";
												echo "</br>";
												echo "<p><hr></p>\n";
}									
										 ?>
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
