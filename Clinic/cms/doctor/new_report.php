<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['save']))
{
$noreport=$_POST['noreport'];
$fname=$_POST['fullname'];
$icno=$_POST['IcNo'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$treatment=$_POST['treatment'];
$medtype=$_POST['medtype'];
$medtype2=$_POST['medtype2'];
$medtype3=$_POST['medtype3'];
$query=mysqli_query($con,"insert into userreport(noreport,fullname,IcNo,address,gender,treatment,medtype, medtype2, medtype3) values('$noreport','$fname','$icno','$address','$gender','$treatment','$medtype','$medtype2','$medtype3')");
if($query)
{
	echo "<script>alert('Successfully Saved.');</script>";
	header('location:new_report.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Admin | New Consultation Report</title>
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
<script type="text/javascript">

</script>

	</head>

	<body >
    <div id="app">	
    <?php include('include/sidebar.php');?>
			<div class="app-content">
				
	<?php include('include/header.php');?>
		<!-- start: REGISTRATION -->
		
				<!-- start: REGISTER BOX -->
                <div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | New Consultation Report</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>New Consultation Report</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
					
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">	
					<form name="consultation" id="consultation"  method="post">
						<fieldset>
							<legend>
								Consultation Report
							</legend>
							<p class="center">
								POLIKLINIK AN-NISA' CYBERJAYA
							</p>
                            <p class="center"> 42 g, Biz Avenue Neocyber, Lingkaran Cyberpoint,
                            </p>
                            <p class="center"> 63000, Cyberjaya, Selangor Darul Ehsan.
                            </p>
                            <p class="center"> Tel: 03-83222785 Fax:03-83323045
                            </p>
                            <p> ________________________________________________________________________________________________</p>
							<div class="form-group">
								No. Report<input type="text" class="form-control" name="noreport" placeholder="No Report" required>
							</div>
							<div class="form-group">
								Patient Name<input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
							</div>
							<div class="form-group">
								IC Number<input type="text" class="form-control" name="IcNo" placeholder="IC Number" required>
							</div>
							<div class="form-group">
								Address<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>
						    <div class="form-group">
								<label class="block">
									Gender
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" >
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male">
									<label for="rg-male">
									Male
									</label>
								</div>

                                      	<div class="form-group">
								Type of Treatment:<select name="treatment" class="form-control" onChange="getspecilization(this.value);" required="required">
																<option value=""></option>
<?php $ret=mysqli_query($con,"select specilization from doctors");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>
																
															</select>
							</div>

		

	
		 
		

		 
							<div class="form-group">
								
								<select name="medtype" class="form-control" onChange="getproduct(this.value);" >
																<option value="">Medicine 1</option>
<?php $ret=mysqli_query($con,"select * from medicine");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['description']);?>">
																	<?php echo htmlentities($row['description']);?>
																</option>
																<?php } ?>
																
															</select>
							</div>
							<div class="form-group">
								
								<select name="medtype2" class="form-control" onChange="getproduct(this.value);">
																<option value="">Medicine 2</option>
<?php $ret=mysqli_query($con,"select * from medicine");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['description']);?>">
																	<?php echo htmlentities($row['description']);?>
																</option>
																<?php } ?>
																
															</select>
															</div>
															
															<div class="form-group">
								
								<select name="medtype3" class="form-control" onChange="getproduct(this.value);">
																<option value="">Medicine 3</option>
<?php $ret=mysqli_query($con,"select * from medicine");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['description']);?>">
																	<?php echo htmlentities($row['description']);?>
																</option>
																<?php } ?>
																
															</select>
							  </div>

							
							<div>					
								<button type="submit" class="btn btn-primary pull-right" id="save" name="save">
									Save <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> CMS</span>. <span>All rights reserved</span>
					</div>

				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
	<!-- end: BODY -->
</html>