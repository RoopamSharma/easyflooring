<html>
<head>
 <script type="application/javascript">
    window.location.href="home.php";
    </script>
    </head>
    <body>
	<?php   
include "includes/connection.php";
                          if(isset($_POST["isubmit"]))
                          {
			$heading=$_POST{"h"};	
			$content=$_POST{"editor1"};	
	$query2 = mysql_query("insert into home(id,heading,content) values ('1','$heading','$content') on duplicate key update heading='$heading',content='$content'");       
								unset($_POST);
								 }

	 ?>
						  </body>
                          </html>