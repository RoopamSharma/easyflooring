<html>
<head>
 <script type="application/javascript">
   window.location.href="project.php";
    </script>
    </head>
    <body>
	<?php   
include "includes/connection.php";
                                                    if(isset($_POST['isubmit']))
                          {
                            $getuploadfiles="";
                                $validExtensions = array(".gif", ".jpeg", ".jpg", ".png",".GIF",".JPEG",".JPG",".PNG", ".SWF", ".swf");
                                for($i=0;$i<=count($_FILES["file"]["name"])-1;$i++)
                                {
                                    $filename=$_FILES["file"]["tmp_name"][$i];
                                    $fileExtension = strrchr($_FILES['file']['name'][$i], ".");
                                    if (in_array($fileExtension, $validExtensions)) 
                                    {
                                            $newName = time() . '_' . $_FILES['file']['name'][$i];
                                         $destination = 'uploads/' . $newName;
                                          if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $destination)) 
                                        {
                                                $getuploadfiles=$getuploadfiles.$newName.',';
                                            }
                                       } 
                                }
								
		                   }
			$title=$_POST['name'];	
			$desc=$_POST['editor1'];	
			$query=mysql_query("select * from project");
			$count=mysql_num_rows($query);
			$index=$count+1;
			echo $index;
			echo $title;
			echo $desc;
	$query2 = mysql_query("insert into project values ('$index','$title','$desc','$getuploadfiles')");       
								unset($_POST);
	 ?>
						  </body>
                          </html>