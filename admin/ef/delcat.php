<html>
<head>  
     
</head>
<body>
	<?php  
include "includes/connection.php";
$id = $_GET['id']; 
     $delquery = mysql_query("delete from maincategory where mcatid=$id");
	 $delsquery=mysql_query("delete from subcategory where mcatid=$id");
	 $delpquery=mysql_query("delete from products where mcatid=$id");
	 ?>
     <script>
	 window.location.href="add_category.php";
	  </script>
     </body>

   </html>