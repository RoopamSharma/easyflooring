<?php
session_start();
$user=$_SESSION['usr'];
if ($user=='')
{
  header("Location: logout.php");
}
else {
  ?>
<!DOCTYPE html>

<?php
include ("includes/connection.php"); 
?>
                   
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    
    <link href="css/pages/reports.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
  

<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.php">
				Easy Flooring Admin				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">

			
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							Spark Infosystem
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
              				<li><a href="logout.php">Logout</a></li>
              				<li><a href="resetpass.php">Change Password</a></li>
						</ul>						
					</li>
				</ul>
			
	
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    



    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
			
				<li><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
<li>
					<a href="headings.php">
						<i class="icon-list-alt"></i>
						<span>Tabs</span>
					</a>	    				
				</li>
        <li>
					<a href="home.php">
						<i class="icon-home"></i>
						<span>Home</span>
					</a>	    				
				</li>
				<li class="active">					
					<a href="sliderimages.php">
						<i class="icon-code"></i>
						<span>Slideshow Images</span>
					</a>  									
				</li>
        <li><a href="all_pro.php"><i class="icon-code"></i><span>Products</span> </a> </li>
        <li><a href="all_projects.php"><i class="icon-code"></i><span>Projects</span> </a> </li>
        <li><a href="about.php"><i class="icon-list-alt"></i><span>About</span> </a> </li>
        <li><a href="testimonial.php"><i class="icon-retweet"></i><span>Testimonials</span></a></li>
        <li><a href="contact.php"><i class="icon-comments"></i><span>Contatct</span> </a> </li>
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    

    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	    	
   	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-pencil"></i>
						<h3>Edit Section</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">  
	      	
	  	  <!-- /row -->
	
                <form id="edit-profile" class="form-horizontal"  action="slideraction.php" method="POST" enctype="multipart/form-data">
	      <div class="row">
	      	
	      	<div class="span8.5">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-group"></i>
						<h3>Slider Images</h3>
					</div> <!-- /widget-header -->
					<?php 
                    $queryi = mysql_query("SELECT * FROM images");
					$i=1;
					$total=mysql_num_rows($queryi);
                    while( $i<=$total)
					{
					$row = mysql_fetch_array($queryi);
					$string[$i]=$row['img'];
					$index[$i]=$row['id'];
					$i++;
					}
					echo "<div>";
					echo "<form method='POST' action='sliderimages.php'>";
					for($i=1;$i<=$total;$i++)
					{
					$delid=$index[$i];
					echo "<figure>";
					echo "<img src='uploads/slider/$string[$i]' width='25%' height='50%'></img>";
					?>
                    <a href="delimg.php?id=<?php echo $delid ?>">delete</a>
                    <?php
					//echo "<button name='delete' value='delete' onclick='myFunction($string[$i])'>Delete</button>";
					//echo "<a onclick=\"return confirm('Delete this image from slideshow?')\" href=\"delimg.php?id="$row['id']"\">delete</a>";
					echo "<figcaption>";
					echo $string[$i];
					echo "</figcaption>";
					echo "</figure>"; 
					}
					echo "<br/>";
					echo "</form>";	   
					echo "</div>";
				   ?>
					<div class="widget-content">
						<p><a href="#" id="addupload">Add More Images</a></p>
                          <label></label> <input type="file" name="file[]" class="imageupload">

                          <input name="isubmit" value="Update" type="submit" id="submit" style="float: right;"/>
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
						
		      </div> <!-- /span6 -->
	      	
	      </div> <!-- /row -->
	      
	      </form>
		      
	    </div> <!-- /container -->
	    
	</div>      
	      
		<?php            
		/*$querycheck=mysql_query("select * from images");
		$row_count=mysql_num_rows($querycheck);
		echo $row_count;
	 	if(!(empty($getuploadfiles)))
		{
		$inputstring=$getuploadfiles;
		$str_explode=explode(",",$inputstring);
		$count=count($str_explode);
		$i=1;
		for($j=0;$j<=$count;$j++)
		{
		$index=$row_count+$j;
		$queryin1 = mysql_query("insert into images values('$index','$str_explode[$j]')");	
		$i++;
		}
	}	*/
	 ?>
	      
          <?php 
		  /*if(isset($_POST['isubmit']))
		  {
		  $checkquery=mysql_query("select * from images");
		  $rows=mysql_num_rows($checkquery);
		  $inputstring=$getuploadfiles;
		  $imgnames=explode(',',$inputstring);
		  $countimg=count($imgnames);
		  for($i=0;$i<=$countimg;$i++)
		  {
		  //echo $imgnames[$i];
		  $index=$rows+$i+1;
		  $insertquery=mysql_query("insert into images values('$index','$imgnames[$i]')");
		  }
		  }*/
		  ?>
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
    
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; 2013 <a href="">Spark Infosystem.</a>
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/chart.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
/*function myFunction(x)
{
var r=confirm("Do you want to delete this image from the slideshow?");
if (r==true)
  {
  window.location.href:delimg.php;
  }
else
  {
  }
}*/
</script>

<script>
    var pieData = [
	
	
				{
				    value: 30,
				    color: "#F38630"
				},
				{
				    value: 50,
				    color: "#E0E4CC"
				},
				{
				    value: 100,
				    color: "#69D2E7"
				}

			];

    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

    }

    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);
	
	</script>
<script>
$(function(){
    $('#addupload').click(function(){
        var addControl = '<label>Upload an image:</label>';
        addControl += ' <input type="file" name="file[]" class="imageupload">';
        $('#submit').before(addControl); 
    });
})
</script>

  </body>

</html>
<?php
}
?>