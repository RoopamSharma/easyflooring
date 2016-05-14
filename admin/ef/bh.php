<html>
<?php
 
if($_POST['hero']=='Ajeet')
{
     @header('location:new.php');
     echo "Its Ajeet";
}
else if($_POST['hero']=='Mehtab')
{
     @header('location:new2.php');
     echo "Its Mehtab";
}
else if($_POST['hero']=='Manish')
{
     echo "Its Manish";
}
else if($_POST['hero']=='jitu')
{
     echo "Its jitu";
}
?>

     <form method="post" action="bh.php">
          <select name="hero">
               <option>Ajeet</option>
               <option>Mehtab</option>
               <optio<?php
 
if($_POST['hero']=='Ajeet')
{
     @header('location:new.php');
     echo "Its Ajeet";
}
else if($_POST['hero']=='Mehtab')
{
     @header('location:new2.php');
     echo "Its Mehtab";
}
else if($_POST['hero']=='Manish')
{
     echo "Its Manish";
}
else if($_POST['hero']=='jitu')
{
     echo "Its jitu";
}
?>n>Manish</option>
               <option>jitu</option>
          </select>
          <input type="submit">
     </form>
</html>
