<?php include("includes/connection.php") ?>
<?php
 $query = mysql_query("delete from products where proid='".$_GET['id']."'");
      if($query)
      {
        header("location:all_pro.php");
      }
?>