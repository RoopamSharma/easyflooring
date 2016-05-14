<?php include("includes/connection.php") ?>
<?php
 $query = mysql_query("delete from project where id='".$_GET['id']."'");
      if($query)
      {
        header("location:all_projects.php");
      }
?>