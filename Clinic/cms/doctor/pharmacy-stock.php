<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Pharmacy</title>
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
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
		<?php include('include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
	<div class="main-content" >
		<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
	<section id="page-title">
	<div class="row">
	<div class="col-sm-8">
			<h1 class="mainTitle">Admin | Pharmacy</h1>
	</div>
			<ol class="breadcrumb">
			<li>
			<span>Admin</span>
		</li>
		<li class="active">
			<span>Pharmacy</span>
		</li>
		</ol>
		</div>
</section>
						<!-- end: PAGE TITLE -->
						<!-- start: -->
<div class="container-fluid container-fullw bg-white">
						

	</div>
<div id="main">
<div id="tabbed_box" class="tabbed_box">  
    <h4>Manage Stock</h4> 
<hr/>	
    <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View Stock</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Add Medicine</a></li>  
             
        </ul>  
          
        <div id="content_1" class="content">  
		 <?php echo $message;
			  echo $message1;
			  ?>
      
		<?php
		/* 
		View
        Displays all data from 'Stock' table
		*/
    {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                 echo '<td>' . $row['stock_id'] . '</td>';               
                echo '<td>' . $row['drug_name'] . '</td>';
				echo '<td>' . $row['category'] . '</td>';
				echo '<td>' . $row['description'] . '</td>';
				echo '<td>' . $row['status'] . '</td>';
				echo '<td>' . $row['date_supplied'] . '</td>';?>
				<td><a href="delete_stock.php?stock_id=<?php echo $row['stock_id']?>"><img src="images/delete-icon.jpg" width="24" height="24" border="0" /></a></td>
				<?php
		 } 
        // close table>
        echo "</table>";
?> 
        </div>  
        <div id="content_2" class="content">  
         <!--Add Drug-->
		 <?php echo $message;
			  echo $message1;
			  ?>
			<form name="myform" onsubmit="return validateForm(this);" action="stock.php" method="post" >
			<table width="420" height="106" border="0" >	
				<tr><td align="center"><input name="drug_name" type="text" style="width:170px" placeholder="Drug Name" required="required" id="drug_name" /></td></tr>
				<tr><td align="center"><input name="category" type="text" style="width:170px" placeholder="Category" required="required" id="category"/></td></tr>
				<tr><td align="center"><input name="description" type="text" style="width:170px" placeholder="Description" required="required" id="description" /></td></tr>
				<tr><td align="center"><input name="company" type="text" style="width:170px" placeholder="Manufacturing Company"  required="required" id="company" /></td></tr>  
				<tr><td align="center"><input name="supplier" type="text" style="width:170px" placeholder="Supplier" required="required" id="supplier" /></td></tr>  
				<tr><td align="center"><input name="quantity" type="text" style="width:170px" placeholder="Quantity" required="required" id="quantity" /></td></tr>  
				<tr><td align="center"><input name="cost" type="text" style="width:170px" placeholder="Unit Cost" required="required" id="cost" /></td></tr>  
				<tr><td align="center"><input name="submit" type="submit" value="Submit" id="submit"/></td></tr>
            </table>
		</form>
        </div>  
											
											<?php 

        ?>
											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
							</div>
						</div>
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
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
