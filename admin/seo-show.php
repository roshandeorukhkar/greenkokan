<?php
include_once('config.php');
include_once('header1.php');
?>
<script>

</script>
 
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="page-header"><?php
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
		
                    <div class="col-lg-12">
                        <div class="panel panel-default">
							
          <a href="add-seo.php">
	    <button style="float:right;margin-right: 3px;margin-top: 3px;" type="reset" class="btn btn-info">Add New Seo</button></a>
                            <div class="panel-heading">
                                SEO Details
			
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
							
						
						
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="">
                                         <thead>
                                            <tr>
                                                <th>keyword</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                               
                                               <center><th colspan="2">Action</th></center>
                                                
                                                
												
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
														<?php
														if(isset($_GET['id']) && $_GET['id'] !="")
														{
														    $id = $_GET['id'];
														     $sql = "DELETE FROM `gk_seo` WHERE id = '$id'";
														     mysql_query($sql);
														     setSessionMsg('Record Deleted Successfully');
																?>
																<script type="text/javascript">
																	var newLocation = "<?php echo 'seo-show.php'; ?>";
																	window.location = newLocation;   
																</script>
																<?php
																exit;

														}
														if(isset($_GET['active']) && $_GET['active'] !="")
														{
														    $active= $_GET['active'];
															
															
														     //$sql = "DELETE FROM `gk_seo` WHERE id = '$active'";
															 $sql = "UPDATE `gk_seo` SET status='".$_REQUEST['status']."' WHERE id = '$active'";
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
													 
													 
															 $sql = "SELECT * FROM `gk_seo`  order by id DESC limit $start_from, 10";
															$result = mysql_query($sql);
															while($row = mysql_fetch_array($result))
															{ 
																?>   
																   
																	<td><?php echo $row['keyword'];?></td>	
																	<td><?php echo $row['title'];?></td>	
																	<td><?php echo $row['descending'];?></td>	
																	<td>
				<?php
				if($row['status']=='1')
				{                                                            
				?>
<a href="seo-show.php?active=<?php echo $row['id']; ?>&status=0" class="glyphicon glyphicon-ok" onclick="return confirm('Are you sure you want Active this');"></a>
				<!--<button class="btn btn-default">ACTIVE</button> -->
				<?php //echo $row['status'];
				}
				else
				{
				?>
				<a href="seo-show.php?active=<?php echo $row['id']; ?>&status=1" class="glyphicon glyphicon-remove" onclick="return confirm('Are you sure you want DEACTIVE this');"></a>
				<?php
				}
				?>
				
				</td>
                                                                    																	
																
																	<td><a class="glyphicon glyphicon-trash" href="seo-show.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want Delete meta');"></a></td>
																	<td><a class="glyphicon glyphicon-pencil" href="seo-edit.php?id=<?php echo $row['id'];?>"></a></td>
																</tr>
																<?php
															}
														?>								  
					                    </tbody>
                                    </table>
									<div style="margin-left:74%;">
									<?php 	
										$sql2 = "SELECT COUNT(id) FROM gk_seo"; 
										$rs_result = mysql_query($sql2); 
										$row = mysql_fetch_row($rs_result); 
										$total_records = $row[0]; 
										$total_pages = ceil($total_records / 10); 
										//echo $total_pages;
								if($total_records > 10)
								{		
										if($page != 1)
										{
											echo	"<a href='seo-show.php?page=1'class='pagifirst'>FIRST</a> ";
										}	
										if($page>1)
										{
											echo "<a href='seo-show.php?page=".($page-1)."'class='pagiprivi'>PREVIOUS</a>";
										}
										for ($i=1; $i<=$total_pages; $i++) 
										{
											if($i == ($page + 1) or $i == ($page + 2) or $i == ($page))
											{
												echo "<a href='seo-show.php?page=".$i."'class='paginobr'>".$i."</a> ";
											}
											elseif($i == ($page - 1) or $i == ($page - 2) )
											{
												echo "<a href='seo-show.php?page=".$i."'class='paginobr'>".$i."</a> ";
											}
										} 
										if($page != $total_pages)
										{
											echo "<a href='seo-show.php?page=".($page+1)."' class='paginext'>Next</a>";
										}
										if($page != $total_pages)
										{
										echo "<a href='seo-show.php?page=".($total_pages)."' class='pagilast'>Last</a>";
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

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

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
