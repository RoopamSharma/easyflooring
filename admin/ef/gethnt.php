
<body>

<?php
include('includes/connection.php');
$q = intval($_GET['q']);


 $sql="SELECT * FROM subcategory where mcatid = '".$q."'";
$result = mysql_query($sql);
echo '<select name="sid">';
 while ($row= mysql_fetch_assoc($result)) {
                                                            echo '<option value="'.$row["scatid"] .'">'.$row["scatname"] .'</option>';
                                                          }
echo '</select>';
?>
</body>
</html>
