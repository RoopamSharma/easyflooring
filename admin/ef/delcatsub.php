<html>
<head>  
     
</head>
<body>
	<?php  
include "includes/connection.php";
$id = $_GET['id']; 
	$idquery=mysql_query("select * from products,subcategory where products.scatid=subcategory.scatid and subcategory.scatname='$id'");
	$i=1;
	$count=mysql_num_rows($idquery);
	while($row=mysql_fetch_array($idquery))
	{
	$delid[$i]=$row['proid'];
	$i++;
	}
     $delquery = mysql_query("delete from subcategory where scatname='$id'");
     for($i=1;$i<=$count;$i++)
	 {
	 $delpquery = mysql_query("delete from products where proid='$delid[$i]'");
	 echo "deleted <br/>";
	 }
	 ?>
     <script>
	 window.location.href="add_subcat.php";
	  </script>
     </body>

   </html>