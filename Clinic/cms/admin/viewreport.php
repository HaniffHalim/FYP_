<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from userreport where noreport = '".$_GET['noreport']."'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | View Consultation Report</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<form action="generatereport.php" metho="post">
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
			<center><h3>Search Report</h3></center>
</form>
				
		<?php include('include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
	<div class="main-content" >
		<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
	<section id="page-title">
	<div class="row">
	<div class="col-sm-8">
			<h1 class="mainTitle">Admin | View Consultation Report</h1>
	</div>
			<ol class="breadcrumb">
			<li>
			<span>Admin</span>
		</li>
		<li class="active">
			<span>CMS</span>
		</li>
		</ol>
		</div>
</section>
<center><table>
<tr>
	<td>Search</td>
	<td><input id="my-input" type="text" name="fullname" size="100"></td>

</tr>
</table></center>
						<!-- end: PAGE TITLE -->
						<!-- start: -->
<div class="container-fluid container-fullw bg-white">
						

<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">List of <span class="text-bold">Consultation Report</span></h5>
<p style="color:red;">
    <?php echo htmlentities($_SESSION['msg']);?>
<?php echo htmlentities($_SESSION['msg']="");?></p>	
<table class="table table-hover" id="table-1">
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
        <th class="center">#</th>
        <th class="hidden-xs">Patient Name</th>
			<th> Ic</th>
			<th> Address </th>
			<th> Gender</th>
			<th> Type of Treatment</th>
			<th> Medicine</th>
		    <th> Action</th>			
		</tr>
	</thead>
		<tbody>
<?php
$sql=mysqli_query($con,"select * from userreport");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
											<form action="generatereport.php" method="post">
											
										<td class="center"><?php echo $cnt;?>.</td>
										<td class="hidden-xs"><input name="fullname" type="hidden" value="<?php echo $row['fullname'];?>"
										<td><?php echo $row['fullname'];?>
										<td class="hidden-xs"><input name="IcNo" type="hidden" 
										value="<?php echo $row['IcNo'];?>"
										<td><?php echo $row['IcNo'];?>	
										<td class="hidden-xs"><input name="address" type="hidden" 
										value="<?php echo $row['address'];?>"
										<td><?php echo $row['address'];?>
										<td class="hidden-xs"><input name="gender" type="hidden" 
										value="<?php echo $row['gender'];?>"
										<td><?php echo $row['gender'];?>
										<td class="hidden-xs"><input name="treament" type="hidden" 
										value="<?php echo $row['treatment'];?>"	
										<td><?php echo $row['treatment'];?>
										<td class="hidden-xs"><input name="medtype" type="hidden" 
										value="<?php echo $row['medtype'];?>"	
										<td><?php echo $row['medtype'];?>
												
											
                                            
                                       			</td>
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">

<input name="id" type="hidden" value="<?php echo $row['noreport']; ?>"/>
<button type="submit" style="background:none;border:0px;color:blue;" class="fa fa-pencil"></button>

</form>													
	<a href="generatereport.php?noreport=<?php echo $row['noreport']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group" dropdown is-open="status.isopen">
														<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
															<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
														</button>
														<ul class="dropdown-menu pull-right dropdown-light" role="menu">
															<li>
																<a href="#">
																	Edit
																</a>
															</li>
															<li>
																<a href="#">
																	Share
																</a>
															</li>
															<li>
																<a href="#">
																	Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											
											<?php 
$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
							</div>
						</div>
											</form>
						<!-- end:  -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS  -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS  -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
				<script>
$(document).ready(function(){
  $("#my-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#resultTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
