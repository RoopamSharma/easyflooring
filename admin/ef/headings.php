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

<?php   
                          if(isset($_POST['isubmit']))
                          {
						  
	$head1=$_POST['h1'];
	$head2=$_POST['h2'];
	$head3=$_POST['h3'];
	$head4=$_POST['h4'];
	$head5=$_POST['h5'];
	
	$link1=$_POST['l1'];
	$link2=$_POST['l2'];
	$link3=$_POST['l3'];
	$link4=$_POST['l4'];
	$link5=$_POST['l5'];
			
	$queryin1 = mysql_query("insert into headings values('1','$head1','$link1') on duplicate key update head='$head1', link='$link1'");
	$queryin1 = mysql_query("insert into headings values('2','$head2','$link2') on duplicate key update head='$head2', link='$link2'");
	$queryin1 = mysql_query("insert into headings values('3','$head3','$link3') on duplicate key update head='$head3', link='$link3'");
	$queryin1 = mysql_query("insert into headings values('4','$head4','$link4') on duplicate key update head='$head4', link='$link4'");
	$queryin1 = mysql_query("insert into headings values('5','$head5','$link5') on duplicate key update head='$head5', link='$link5'");
                    }
				unset($_POST);
							
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
<li class="active">
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
				<li>					
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
	
                <form id="edit-profile" class="form-horizontal"  action="headings.php" method="POST" enctype="multipart/form-data">
	      <div class="row">
	      	
	      	<div class="span8.5">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-group"></i>
						<h3>Headings</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
                          <?php $query=mysql_query("select * from headings where id='1'");
                          $row=mysql_fetch_array($query);?>
Heading 1	:	<textarea id ="h1" name="h1" > <?php echo $row['head'];?></textarea>	Link 1	:	<textarea id ="l1" name="l1" > <?php echo $row['link'];?></textarea>
</br>
                          <?php $query=mysql_query("select * from headings where id='2'");
						  $row=mysql_fetch_array($query);?>
Heading 2	:	<textarea id ="h2" name="h2" > <?php echo $row['head'];?></textarea>	Link 2	:	<textarea id ="l2" name="l2" > <?php echo $row['link'];?></textarea>
</br>
                          <?php $query=mysql_query("select * from headings where id='3'");
						  $row=mysql_fetch_array($query);?>
Heading 3	:	<textarea id ="h3" name="h3" > <?php echo $row['head'];?></textarea>	Link 3	:	<textarea id ="l3" name="l3" > <?php echo $row['link'];?></textarea>
</br>
                          <?php $query=mysql_query("select * from headings where id='4'");
						  $row=mysql_fetch_array($query);?>
Heading 4	:	<textarea id ="h4" name="h4" > <?php echo $row['head'];?></textarea>	Link 4	:	<textarea id ="l4" name="l4" > <?php echo $row['link'];?></textarea>
</br>
                          <?php $query=mysql_query("select * from headings where id='5'");
						  $row=mysql_fetch_array($query);?>
Heading 5	:	<textarea id ="h5" name="h5" > <?php echo $row['head'];?></textarea>	Link 5	:	<textarea id ="l5" name="l5" > <?php echo $row['link'];?></textarea>
</br>           
					</div> <!-- /widget-content -->
                    <br/>
	      	<input name="isubmit" value="Update" type="submit" id="submit" style="float: right;"/>
				</br>
						
				</div> <!-- /widget -->
				
	      		
	      		
	      		
		    </div> <!-- /span6 -->
	      	
	      	
		      </div> <!-- /span6 -->
	      </div> <!-- /row -->
	      
	      </form>
		      
	    </div> <!-- /container -->
	    
	</div>      
	      

          
          
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