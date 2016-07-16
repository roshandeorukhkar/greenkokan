<?php
include_once('config.php');
include_once('header1.php');
?>

			<?php
													
					$error ="";
						if(isset($_POST['submit']) && $_POST['submit'] !="")
						{
						 $client_name = $_POST['client_name'];
						 $contact_no= $_POST['contact_no'];
						 $email= $_POST['email'];
						
						 
							if($_POST['client_name']=='')
							{
								$error= "Client Name can not be empty";
							}
							
							else if($_POST['contact_no']=='')
							{
								$error= "Contact No can not be empty";
							}
							else if($_POST['email']=='')
							{
									$error= "Email can not be empty";
							}
							else
							{
								
								if($error == "")
								{
								
								$query="INSERT INTO `gk_client_management` (`client_name`,`contact_no`,`email`) VALUES ('".$client_name."','".$contact_no."','".$email."')";
								
									mysql_query($query);
									
									?>
									<script type="text/javascript">
										var newLocation = "<?php echo 'client_management_list.php'; ?>";
										window.location = newLocation;   
									</script>
									<?php
								}
							}
							
						}
							
					?>
					
		<div>
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
						<div class="panel panel-default">
							<div class="panel-heading">
								Add Client Management
							</div>
							<center><div style="color:red;">
											<?php 
												if(isset($error)) 
												{ 
													echo $error; 
												} 
											?>
											</div></center>
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
																client_name: "Please enter your Client name",
																contact_no: "Please enter Contact No",
																email: "Please enter a email",
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
										 
                                            <div class="form-group">
                                                <label>  client Name</label>
                                                <input class="form-control" name="client_name" id="client_name" placeholder="Client Name" value="<?php if(isset($_POST['client_name']) && $_POST['client_name'] !="") { echo $_POST['client_name']; }?>"required>
												
                                            </div>
											<div class="form-group">
                                                <label>Contact No </label>
                                                <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Contact No" value="<?php if(isset($_POST['contact_no']) && $_POST['contact_no'] !="") { echo $_POST['contact_no']; }?>"required>
                                            </div>
											
											<div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" name="email" id="email" placeholder="Email" value="<?php if(isset($_POST['email']) && $_POST['email'] !="") { echo $_POST['email']; }?>"required>
                                            </div>
											<!--<div class="form-group">
                                                <label>Numbar of Advertise</label>
                                                <input type="text" class="form-control" name="no_advertise" id="no_advertise" placeholder="Numbar" value="<?php if(isset($_POST['no_advertise']) && $_POST['no_advertise'] !="") { echo $_POST['no_advertise']; }?>"required>
                                            </div>-->
											
											
											<input type="submit" class="btn btn-info" name="submit" id="submit" value="submit">
                                            
                                        </form>
                                    </div>
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
