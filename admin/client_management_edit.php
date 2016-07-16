<?php
include_once('header1.php');
					//include_once('config.php');
					$client_id = $_GET['client_id'];
				
						if(isset($_POST['submit']) && $_POST['submit'] !="")
						{
						if(isset($_POST['client_name']) && $_POST['client_name'] !="")
						{
							$client_name=$_POST['client_name'];
						}
						else
						{
							 $client_name="";
						}
						  if(isset($_POST['contact_no']) && $_POST['contact_no'] !="")
						{
							$contact_no=$_POST['contact_no'];
						}
						else
						{
							 $contact_no="";
						}
						if(isset($_POST['email']) && $_POST['email'] !="")
						{
							$email=$_POST['email'];
						}
						else
						{
							 $email="";
						}
						
						
						 $status=$_POST['status'];
						 /* $query="update `tbl_faq` set `question`='".$question."',`answer`='".$answer."' where faq_id='$faq_id'"; */
						 $query="update `gk_client_management` set `client_name`='".$client_name."',`contact_no`='".$contact_no."',`email`='".$email."' where client_id='$client_id'";
				        $result=mysql_query($query);
				        ?>
						<script type="text/javascript">
						 var newLocation = "<?php echo 'client_management_list.php'?>";
						 window.location = newLocation;   
						</script>				
			           <?php		
				        }
				        ?>
                                        
		<div>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Client Edit</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Form Elements
                            </div>
							
                            <div class="panel-body">
                                <div class="row">
													<!-- jquery validation start -->  									
			            <script>
							$.validator.setDefaults({
							submitHandler: function() {
								//alert("submitted!");
								document.getElementById("client_from").submit();
							}
							});

							$().ready(function() {

							// validate signup form on keyup and submit
							$("#client_from").validate({
							rules: {
								client_name: "required",
								contact_no: "required",
								email: "required",
							},
							
										   
							messages: {
								client_name: "Please enter your  Client Name",
								contact_no: "Please enter a Contact NO",
								email: "Please enter a Email"
							}
						});




						});
						</script>
						<style>
						.error{
						color:red;
						}
						</style>
                                    <div class="col-lg-6">
                                        <form role="form" name="submit" id="client_from" METHOD="POST" action="">
										<?php
										
										     $query_select4="SELECT * FROM `gk_client_management` WHERE client_id ='".$client_id."'";			
											 $result4=mysql_query($query_select4);
											 $row4 =mysql_fetch_array($result4);
										
										?>
										 
                                            <div class="form-group">
                                                <label>Client Name</label>
                                                <input class="form-control" name="client_name" id="client_name" placeholder="Client" value="<?php echo $row4['client_name'];?>">
												
                                            </div>
											<div class="form-group">
                                                <label>Contact No</label>
                                                <input class="form-control" name="contact_no" id="contact_no" placeholder="Description" value="<?php echo $row4['contact_no'];?>">
                                            </div>
											<div class="form-group">
                                                <label>email</label>
                                                <input class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $row4['email'];?>">
                                            </div>
											
											
										
											
                                           
                                            
											<input type="submit" class="btn btn-info" name="submit" id="submit" value="submit">
                                            <button type="reset" class="btn btn-default" onclick="goBack()">Cancel</button>
                                        </form>
                                    </div>
									<script>
											function goBack() {
												window.history.back();
											}
										</script>	
                                    <!-- /.col-lg-6 (nested) -->
                                    
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery 
        <script src="js/jquery.min.js"></script>
-->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
