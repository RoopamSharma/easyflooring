<body>

<?php
include('includes/connection.php');
require_once ("texteditor/richtexteditor/include_rte.php"); 
$q = intval($_GET['q']);


 $sql="SELECT * FROM products where proid = '".$q."'";
$result = mysql_query($sql);
 while ($row= mysql_fetch_assoc($result)) {
                      echo'  <label class="control-label">Product Name</label>';
                       echo' <div class="controls">';
                       echo' <input type="text" class="span6" name="pname" value="'.$row["proname"].'" >';
                     echo' </div></br>';

                      echo'  <label class="control-label">Description</label>';
                       echo' <div class="controls">';
  									$rte=new RichTextEditor();   
                                  $rte->Text= $row["prodesc"]; 
                                  // Set a unique ID to Editor   
                                $rte->ID="Editor2";    
                                 $rte->MvcInit();   
                                // Render Editor 
                              echo $rte->GetString();  
                            echo' </div></br>';  

                      echo'  <label class="control-label">Product Images</label>';
                       echo' <div class="controls">';
						$images = explode(",",$row['img'],-1);

						if(sizeof($images) > 0 ){
 						 foreach($images as $image){
						   echo $image.'  '.'<img src="uploads/'.$image.'" height="50" width="50">' ;
						   echo '<input type="checkbox" name="checkbox[]" value="'.$image.'">';
 						  echo "<br /></br>"; 
  							}
						}
                            echo' </div></br>'; 

}
					echo'	<label class="control-label">Upload Images</label></br>';
                    echo' <div class="controls">';
    echo'<input type="file" id="file" name="support_images[]" multiple="multiple" accept="image/*" />';
  echo'<input type="submit" name="psubmit" value="Upload" /></div></br>';
                   


                    
   



?>


</body>
</html>
