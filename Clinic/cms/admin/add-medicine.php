
<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{$product_id=$_POST['product_id'];
$product_code=$_POST['product_code'];
$gen_name=$_POST['gen_name'];
$product_name=$_POST['product_name'];
$date_arrival= date('d-m-Y', strtotime($_POST['date_arrival']));
$expiry_date= date('d-m-Y', strtotime($_POST['expiry_date']));
$price=$_POST['price'];
$qty=$_POST['qty'];
$sql=mysqli_query($con,"insert into products(product_id,product_code,gen_name,product_name,date_arrival,expiry_date,price,qty)
 values('$product_id','$product_code','$gen_name','$product_name','$date_arrival','$expiry_date',$price','$qty')");
if($sql)
{
echo "<script>alert('Medicines info added Successfully');</script>";
header('location:pharmacy-stock.php');

}
}
?>

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Add Medicine</title>
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

    <body>
    <div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>  
                        <div class="main-content" >
					<div class="wrap-content container" id="container">

<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">	
					<center><h4><i class="icon-plus-sign icon-large"></i> Add Medicine</h4></center>
<form role="form" name="addmed" method="post" onSubmit="return valid();">


<span>Product ID : </span><input type="text" style="width:200px; height:30px;" name="product_id" ><br>
<span>Brand Name : </span><input type="text" style="width:200px; height:30px;" name="product_code" ><br>
<span>Generic Name : </span><input type="text" style="width:200px; height:30px;" name="gen_name" Required/><br>
<span>Category / Description : </span><textarea style="width:200px; height:50px;" name="product_name"> </textarea><br>
<span>Date Arrival: </span><input type="date" style="width:200px; height:30px;" name="date_arrival" /><br>
<span>Expiry Date : </span><input type="date" value="<?php echo date ('M-d-Y'); ?>" style="width:200px; height:30px;" name="expiry_date" /><br>
<span>Selling Price : </span><input type="text" id="txt1" style="width:200px; height:30px;" name="price" onkeyup="sum();" Required><br>
<span>Quantity : </span><input type="number" style="width:200px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty" Required ><br>
<div style="float:right; margin-right:10px;"></div>
<button type="submit" class="btn btn-success btn-block btn-large" name="submit" style="width:267px;">Save</button>
</form>

</div>


	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			<>
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
		<!-- start: JAVASCRIPTS REQUIRED -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED  -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
	
	</body>
</html>

