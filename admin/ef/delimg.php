<html>
<head>  
     
</head>
<body>
	<?php  
include "includes/connection.php";
$id = $_GET['id']; 
     $delquery = mysql_query("delete from images where id=$id");
	 ?>
     <script>
	 window.location.href="sliderimages.php";
	  </script>
     </body>

   </html>