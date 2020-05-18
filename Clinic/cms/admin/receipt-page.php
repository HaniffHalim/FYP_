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
		<title>Admin | Receipt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
        <link rel="stylesheet" href="css/style.css" />
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

                    		<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
				<div class="wrap-content container" id="container">
				<!-- start: PAGE TITLE -->
				<section id="page-title">
			    <div class="row">
				<div class="col-sm-8">
				
			</div>
            <div id="wrap"><div>
        <h1>Receipt</h1>
        <form method="post" action="create-receipt.php">
            <fieldset>
                <legend>User Details</legend>
                <div class="col">
                    <p>
                        <label for="name">Name</label>
                        <input type="text" name="name" value="Patient Name" />
                    </p>
                    <p>
                        <label for="IcNo">Ic No</label>
                        <input type="text" name="IcNo" value="" />
                    </p>
                </div>
                <div class="col">
                    <p>
                        <label for="address">Address</label>
                        <input type="text" name="address" value="" />
                    </p>
                    <p>
                        <label for="city">City</label>
                        <input type="text" name="city" value="" />
                    </p>
                   
                    <p>
                        <label for="postal_code">Postal Code</label>
                        <input type="text" name="postal_code" value="" />
                    </p>
                    <p>
                        <label for="country">Country</label><input type="text" name="country" value="" />
                    </p>
                </div>
            </fieldset>
            <fieldset>
                <legend> Medicine</legend>
                <table>
                    <thead>
                    <tr><td>Medicine</td><td>Price</td></tr>
                    <thead>
                    <tbody>
                    <tr>
                        <td><input type='text' value='Medicine 1' name='product[]' /></td>
                        <td>RM<input type='text' value='00.00' name='price[]' /></td>
                    </tr>
                    <tr>
                        <td><input type='text' value='Medicine 2' name='product[]' /></td>
                        <td>RM<input type='text' value='00.00' name='price[]' /></td>
                    </tr>
                    <tr>
                        <td><input type='text' value='Medicine 3' name='product[]' /></td>
                        <td>RM<input type='text' value='00.00' name='price[]' /></td>
                    </tr>
                    <tr>
                        <td><input type='text' value='Medicine 4' name='product[]' /></td>
                        <td>RM<input type='text' value='00.00' name='price[]' /></td>
                    </tr>
                    </tbody>
                </table>
            </fieldset>
            <button type="submit">Submit </button>
        </form>
    </div>
    </div>

    <!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			<>
			<!-- end: SETTINGS -->
		</div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<script type="text/javascript">
    $('button').click(function () {
        $.post('create-receipt.php', $('form').serialize(), function () {
            $('div#wrap div').fadeOut( function () {
                $(this).empty().html("<h2>Thank you!</h2><p> Please <a href='receipt.pdf'>download the receipt</a>. </p>").fadeIn();
            });
        });
        return false;
    });
</script>
</html>