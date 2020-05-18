<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');

$id = $_POST['id'];  
$fullname=$_POST['fullname'];
$IcNo=$_POST['IcNo'];


check_login();

// if(isset($_POST['submit']))
// {$noreport=$_POST['noreport'];
// $fullname=$_POST['fullname'];
// $IcNo=$_POST['IcNo'];
// $sql=mysqli_query($con,"select * from doctors where id='$did'");
//                                 while($data=mysqli_fetch_array($sql))
// echo "<h1>$id</h1>";
                            
// {

// }

// }



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Genera Report</title>
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

<?php include('include/header.php');?>
<!-- end: TOP NAVBAR -->
<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
                      
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin  | Generate Report</h1>
																	</div>
                                                                    <ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Generate Report</span>
									</li>
								</ol>
							</div>
						</section>

<?php $ret=mysqli_query($con,"select * from usereport");
while($row=mysqli_fetch_array($ret))
{

}
?>
<div id="print">

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
                            <p style="right" font="red"> NO:</p><?php echo $row['noreport']; ?>
                            <p> __________________________________________________________________________________________________________________________________________________________________</p>
<br>

     <div>
	 <p> Nama Pesakit:<?php echo $fullname; ?></p>
	 <p> Kad Pengenalan:<?php echo $IcNo;?></p>
	 </div>
                            <p> Saya mengesahkan bahawa pesakit tersebut seperti nama dan kad pengenalan diatas telah
                               mendapatkan rawatan di klinik saya.</p>
                               <div> </div>

                               <p> Beliau:  </p>
                               <div></div>

                               <p>a) Dibenarkan cuti selama ___ hari mulai ________ hingga _______</p>
                               <div></div>
                               <p>b) Dikecualikan dari aktiviti jasmani selama _________ hari mulai _______ hingga ______</p>

                               
                               <br> </br>
                               <br> </br>
                              

                               <p> Saya yang menjalankan tugas,</p>
                               <br></br>
                               <p> Dr. Amirul Thaqif</p>


                              
                               <p><h7> Ini adalah cetakan komputer, tidak memerlukan tandatangan atau cop doktor/klinik</h7></p>


</div>
<br></br>
                               <button onClick="window.print(print)">Print this page</button>
                               <br>


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
		<!-- start: JAVASCRIPTS -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
	
		<!-- end: -->
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
    $("#table-1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
    </html>