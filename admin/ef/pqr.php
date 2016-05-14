<?php include("includes/connection.php") ?>
<?php 
$q =$_GET['q'];		 
		  $catquery=mysql_query("select * from `subcategory` INNER JOIN `maincategory` where `subcategory`.`mcatid`=`maincategory`.`mcatid` AND `subcategory`.`mcatid`='".$q."'");

		  $i=1;
		$total=mysql_num_rows($catquery);
        while( $i<=$total)
		{
		$catrow = mysql_fetch_array($catquery);
		$string[$i]=$catrow['scatname'];
		$index[$i]=$catrow['scatid'];
		$i++;
		}
		
		for($i=1;$i<=$total;$i++)
			{
			$delid=$index[$i];
			
   			 echo $string[$i];		
		      
            if($string[$i]){  
          echo "<a href='delcatsub.php?id=";
		  echo $string[$i];
		  echo "'>Delete Category</a>";
		  echo "<br/>";
			}
			  
			}
echo "<br/>";echo "<br/>";			  ?>
          
		  