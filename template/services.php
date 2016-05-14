<!DOCTYPE HTML>
<html>
	<head>
		<title>Easy Flooring</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="css/slider.css" rel="stylesheet" type="text/css"  media="all" />
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		    <script type="text/javascript" src="js/camera.min.js"></script>
                    <script src="js/jquery.js" type="text/javascript"></script>
				<script type="text/javascript">
			   jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					height: '500px',
					pagination: false,
				});
			});
		  </script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
	</head>
	<body>
       <?php include_once "includes/connection.php";?>

	<!----start-wrap----->
	<div class="wrap">
		<!----start-header----->
		<div class="header"  id="top">
			<!----top-header----->
			<div class="top-header">
				<!----start-logo----->
				<div class="logo">
					
                    <?php 
					$querylogo = mysql_query("SELECT logo FROM about");
                    $row = mysql_fetch_array($querylogo);
			$inputstring=$row['logo'];
$str_explode=explode(",",$inputstring);
$string1 = $str_explode[0]; 
$string2 = $str_explode[1]; 

?>
<img src="../admin/ef/uploads/<?php echo $string1;?>">
				</div>
				<!----End-logo----->
				<!----start-social-icons----->
				<div class="social-icons">
					<ul>
						<li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
						<li><a href="#"><img src="images/twitter.png" title="twitter" /></a></li>
						<li><a href="#"><img src="images/google.png" title="google pluse" /></a></li>
                        <li><strong>    
						<?php 
						//include "includes/connection.php";
                    $queryc = mysql_query("SELECT cont FROM contact where id='1'");
                    $row = mysql_fetch_array($queryc);
					echo $row['cont'];
					?>		</strong> </li>
					</ul>
				</div>
				<div class="clear"> </div>
				<!----End-social-icons----->
			</div>
			<!----End-top-header----->
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
                                    <div id="">
                                    <ul class="list1">
					<li><a href="index.php">Home</a></li>
                    <?php 
						$queryi = mysql_query("SELECT * FROM headings");
						$i=1;
						$c=mysql_num_rows($queryi);
						while( $row = mysql_fetch_array($queryi))
						{
						$hstring[$i]=$row['head'];
						$lstring[$i]=$row['link'];
						$i++;
						}
					?>
                    <li><a href="<?php echo $lstring[1];?>"><?php echo $hstring[1]; ?></a>
					<?php 
						$queryc = mysql_query("SELECT * FROM maincategory");
						$i=1;
						$countcat=mysql_num_rows($queryc);
                    ?>
                        <ul>
                    <?php 
						while($row = mysql_fetch_array($queryc))
						{
							$cat[$i]=$row['mcatname'];
							$cati[$i]=$row['mcatid'];
                    ?>
                        <li><a href="serviceslink.php?id=<?php echo $cati[$i];?>"><?php echo $cat[$i];?></a>
                        <ul>
					<?php 
						$j=0;
						$subquery=mysql_query("select * from subcategory where mcatid='$cati[$i]'");
						while($subrow=mysql_fetch_array($subquery))
						{
						$subcati[$j]=$subrow['scatid'];
					?>
                    <li><a href="subserviceslink.php?id=<?php echo $subcati[$j];?>"><?php echo $subrow['scatname'];?></a></li>
                    <?php
					$j++;
                    }
					?>
                    </ul>
                    </li>
                    <?php
                    $i++;
                    }
                    ?>
                    </ul>
                    </li>
                    	<li><a href="<?php echo $lstring[2];?>"><?php echo $hstring[2]; ?></a></li>
                        <li><a href="<?php echo $lstring[3];?>"><?php echo $hstring[3]; ?></a></li>
                    	<li><a href="<?php echo $lstring[4];?>"><?php echo $hstring[4]; ?></a></li>
                    	<li><a href="<?php echo $lstring[5];?>"><?php echo $hstring[5]; ?></a></li>
                        <div class="clear"> </div>
					</ul>
                                    </div>
                                    </div>
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
		<!----End-header----->
	</div>
	<!----End-wrap----->
	<!---start-content---->
<div class="content">
        <div class="mid-grid">
        <div class="wrap">
        <h1 style="text-transform: uppercase; font-family: Tahoma, Geneva, sans-serif; font-weight:bold;">
        SERVICES AND CAPABILITIES
        </h1>
        
        <!--a class="button1" href="#">Read More</a-->
        </div>
        
        
        <!---start-gallery----->
        <div class="gallerys">
<div class="wrap">
                 <?php
                    $queryd = mysql_query("SELECT * FROM products");
					$i=1;
					$count=mysql_num_rows($queryd);
                    while($row = mysql_fetch_array($queryd))
					{
					$id[$i]=$row['proid'];
					$mid[$i]=$row['mcatid'];
					$sid[$i]=$row['scatid'];
					$name[$i]=$row['proname'];
					$desc[$i]=$row['prodesc'];
					$img[$i]=$row['img'];
					$str=explode(',',$img[$i]);
					$img[$i]=$str[0];
					$i++;
					}
					?>
<?php for($i=1;$i<=$count;)
{
?>
						<div class="gallery-grids" style="float:right; width:1000px;" >
						<div class="gallery-grid">
<?php if ($img[$i]!="")
						 {
						 ?>
						<a href="../admin/ef/uploads/<?php echo $img[$i];?>"><img src="../admin/ef/uploads/<?php echo $img[$i]; ?>" alt=""></a>
                        <?php 
						}
						else 
						echo "";
						?>							<h4><?php 
							$mquery=mysql_query("select mcatname from maincategory where mcatid='$mid[$i]'");
							$row1=mysql_fetch_array($mquery);
							$squery=mysql_query("select scatname from subcategory where scatid='$sid[$i]'");
							$row2=mysql_fetch_array($squery);
							echo $row1['mcatname'].">".$row2['scatname'].">".$name[$i];?></h4>
							<div id="wrapper"><p><?php echo $desc[$i];?></p></div>
                            
							<!--div class="gallery-button"><a href="#">Read More</a></div-->
						</div>
                        <?php 
						$i++;
						if(!empty($id[$i]))
						{
						?>
						<div class="gallery-grid grid2">
<?php if ($img[$i]!="")
						 {
						 ?>
						<a href="../admin/ef/uploads/<?php echo $img[$i];?>"><img src="../admin/ef/uploads/<?php echo $img[$i]; ?>" alt=""></a>
                        <?php 
						}
						else 
						echo "";
						?>							<h4>
							<?php 
							$mquery=mysql_query("select mcatname from maincategory where mcatid='$mid[$i]'");
							$row1=mysql_fetch_array($mquery);
							$squery=mysql_query("select scatname from subcategory where scatid='$sid[$i]'");
							$row2=mysql_fetch_array($squery);
							echo $row1['mcatname'].">".$row2['scatname'].">".$name[$i];?></h4>
							<div id="wrapper"><p><?php echo $desc[$i];?></p></div>
							<!--div class="gallery-button"><a href="#">Read More</a></div-->
						</div>
                        <?php 
						}
						$i++;
						if(!empty($id[$i]))
						{
						?>
						<div class="gallery-grid">
<?php if ($img[$i]!="")
						 {
						 ?>
						<a href="../admin/ef/uploads/<?php echo $img[$i];?>"><img src="../admin/ef/uploads/<?php echo $img[$i]; ?>" alt=""></a>
                        <?php 
						}
						else 
						echo "";
						?>							<h4>
							<?php 
							$mquery=mysql_query("select mcatname from maincategory where mcatid='$mid[$i]'");
							$row1=mysql_fetch_array($mquery);
							$squery=mysql_query("select scatname from subcategory where scatid='$sid[$i]'");
							$row2=mysql_fetch_array($squery);
							echo $row1['mcatname'].">".$row2['scatname'].">".$name[$i];?></h4>
							<div id="wrapper"><p><?php echo $desc[$i];?></p></div>
							<!--div class="gallery-button"><a href="#">Read More</a></div-->
						</div>
                        <?php 
						}
						$i++;
						?>
						<div class="clear"> </div>
                    </div>
					<div class="clear"> </div>
                    <?php }?>
				    <div class="clear"> </div>

				    <!--div class="projects-bottom-paination">
						<ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
						</ul>
					</div-->
				</div>
                </div>
		 	<!---End-gallery----->
            </div>
            </div>
		 <!---End-content---->
		 		 <!---start-footer---->
		 <div class="footer">
		<div class="wrap">
			<div class="footer-grid">
				<h3>About us</h3>
				<p>
                <?php include "includes/connection.php";
                    $querya = mysql_query("SELECT abt FROM about where id='1'");
                    $row = mysql_fetch_array($querya);
echo $row['abt'];
?>				
			</div>
			<div class="footer-grid center-grid">
				<h3>Recent posts</h3>
				<ul>
					<li><a href="#">eiusmod tempor incididunt</a></li>
					<li><a href="#">adipisicing elit, sed</a></li>
					
				</ul>
			</div>
			<div class="footer-grid twitts">
				<h3>Latest Tweets</h3>
				<p><label>@Lorem ipsum</label>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				
			</div>
			<div class="footer-grid">
				<h3>TESTIMONIALS</h3>
				<p>		
                <?php include "includes/connection.php";
                    $queryt = mysql_query("SELECT test FROM testimonials");
$i=2;
while ($i) 
{
$row = mysql_fetch_array($queryt);
echo $row['test'];
$i--;
}
?>		
                	
			</div>
			<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
	</div>
	<div class="copy-right">
		<div class="top-to-page">
						<a href="#top" class="scroll"> </a>
						<div class="clear"> </div>
					</div>
		<p>Design by <a href="http://www.sparkinfosystems.com/"> Sparkinfo Systems</a></p>
	</div>
		 <!---End-footer---->
	</body>
    <script type="text/javascript" src="js/jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.gallery-grid a').lightBox();
				    });
				    </script>
</html>

