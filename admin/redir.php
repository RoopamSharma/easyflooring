<?php 
session_start();
include("includes/connection.php");
$message=" ";
if(isset($_POST['Submit'])){
	//echo "select * from admin where usr = '$_POST[usr]' and pass='$_POST[pass]'";
	 $result = mysql_query("select * from admin where usr = '$_POST[usr]' and pass='$_POST[pass]';");
	$row = mysql_fetch_array($result);
	 $row11 = mysql_num_rows($result);
	 $username=$row['usr'];
	if($row11 > 0) {
		 $_SESSION["usr"] = $row['usr'];
		 $_SESSION['pass'] = $row['pass'];
		//header("Location: ef/index.php");
	?>
    <script type="application/javascript">
    window.location.href="ef/index.php";
    </script>
    <?php
	}
	else { 
		$_SESSION['message']= "Invalid Username or Password";
		?>
		<script>
		alert("Invalid Username or Password");
		window.location.href="index.php";
		</script>
		<?php

}

}
?>