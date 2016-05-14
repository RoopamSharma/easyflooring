<?php include("includes/connection.php") ?>
<?php
 $query = mysql_query("DELETE FROM `banners` WHERE `banner_id`='".$_GET['id']."'");
      if($query)
      {
        header("location: home.php");
      }
?>