
<?php
session_start();
$user=$_SESSION['usr'];
if ($user=='')
{
  header("Location: logout.php");
}
else {
  ?>

<?php include("includes/connection.php") ?>
<?php
if (isset($_POST['isubmit'])) {
$result = mysql_query("select * from admin where usr = '$_POST[username]' and pass='$_POST[opassword]';");
	$row = mysql_fetch_array($result);
	 $row11 = mysql_num_rows($result);
	 	 $username=$row['usr'];
	if($row11 > 0) {
	$result1 = mysql_query("update admin set pass='$_POST[npassword]';");
		header("Location: ../index.php");
	}
		else { 
		?>
		<script>
		alert("Invalid Username or Password");
		window.location.href="resetpass.php";
		</script>
		<?php

}
}


?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Change Password</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.php">
				Easy Flooring Admin				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					
					<li class="">						
						<a href="index.php" class="">
							<i class="icon-chevron-left"></i>
							Back to Dashboard
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="resetpass.php" method="post">
		
			<h1>Change Password</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Old Password:</label>
					<input type="password" id="opassword" name="opassword" value="" placeholder="Old Password" class="login password-field"/>
				</div>				
				<div class="field">
					<label for="password">New Password:</label>
					<input type="password" id="npassword" name="npassword" value="" placeholder="New Password" class="login password-field"/>
				</div>				

				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				

                        <input name="isubmit" value="Commit" type="submit" id="submit" class="button btn btn-success btn-large"/>
									
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->






<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
<?php
}
?>