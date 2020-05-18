<?php
ob_start();
require_once 'admin/include/dbcontroller.php';
    if(isset($_POST["forget-password"])){
        if(!empty($_POST["user-email"])){
            $email = trim($_POST["user-email"]);
        } else {
            $error_message = "<li>Email is required</li>";
        }
        if(empty($error_message)){
            $query = $db->prepare("SELECT fullname, email FROM users WHERE email =?");
            $query->execute(array($email));
            $user = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        if(!empty($user)){
//            $msg='yes';
//            echo "<script type='text/javascript'>alert('$msg');</script>";
            require_once ("forget-password-mail.php");
        } else {
            $error_message = 'No Email Found';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Forgot Password</title>
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
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
    <body class="login">
    <div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"><h2> Poliklinik An-Nisa' Cyberjaya | Forget Your Password??</h2></a>
				</div>
        <div id="wrapper">
            <div id="loginContainer">
                <form id="frmForget" name="frmForget" method="post">
                    <h3>Forget Password ? </h3>
                    <?php if(!empty($success_message)) { ?>
                    <div class="success_message"><?php echo $success_message ?>
                    <?php } ?>
                    <?php if(isset($error_message)) { ?> 
                    <div class="error_message"><?php echo $error_message; ?></div>
                    <?php } ?>
                    <input type="email" name="user-email" placeholder="Enter a valid email" required>
                    <input type="submit" value="submit" name="forget-password" id="forget-password">
                </form>
            </div>
        </div>
    </body>
</html>
