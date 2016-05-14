
<body>

<?php
include('includes/connection.php');
$q = intval($_GET['q']);


 $sql="SELECT * FROM products where scatid = '".$q."'";
$result = mysql_query($sql);
echo '<select name="pid" name="users1" onchange="showUser3(this.value)">';
echo '<option value="">Select Sub-Category</option>';
 while ($row= mysql_fetch_assoc($result)) {
  echo '<option value="'.$row["proid"] .'">'.$row["proname"] .'</option>';
   }
echo '</option>';
echo '</select>';
?>
</body>
</html>