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
                          if(isset($_POST["isubmit"]))
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
                          ?>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Testimonials</title>
    
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
				<li>					
					<a href="sliderimages.php">
						<i class="icon-code"></i>
						<span>Slideshow Images</span>
					</a>  									
				</li>
        <li><a href="all_pro.php"><i class="icon-code"></i><span>Products</span> </a> </li>
        <li><a href="all_projects.php"><i class="icon-code"></i><span>Projects</span> </a> </li>
        <li><a href="about.php"><i class="icon-list-alt"></i><span>About</span> </a> </li>
        <li class="active"><a href="testimonial.php"><i class="icon-retweet"></i><span>Testimonials</span></a></li>
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
	
                <form id="edit-profile" class="form-horizontal"  action="testimonial.php" method="POST" enctype="multipart/form-data">
	      <div class="row">
	      	
	      	<div class="span8.5">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-group"></i>
						<h3>Testimonials</h3>
					</div> <!-- /widget-header -->
					<div class="widget-content">
     	Title	:	<textarea id ="title" name="title"></textarea>

					</div> <!-- /widget-content -->
                    
					<div class="widget-content">
     	Description	:	<textarea class="ckeditor" id ="editor1" name="editor1"></textarea>

					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
				
	      		
	      		
	      		
		    </div> <!-- /span6 -->
	      	
	      	
	      	<div class="span3">
	      		
	      		<div class="widget">
							
					<div class="widget-header">
						<i class="icon-picture"></i>
						<h3>Upload Pictures</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<p><a href="#" id="addupload">Add More Images</a></p>
                          <label></label> <input type="file" name="file[]" class="imageupload">

                          <input name="isubmit" value="Update" type="submit" id="submit" style="float: right;"/>
					</div> <!-- /widget-content -->
						</br>
				</div> <!-- /widget -->
									
		      </div> <!-- /span6 -->
	      	
	      </div> <!-- /row -->
	      
	      </form>
		      
	    </div> <!-- /container -->
	    
	</div>      
	      
				<?php 
				if(isset($_POST['isubmit']))
				{
				$title=$_POST['title'];
				$test=$_POST["editor1"];
				$q=mysql_query("select * from testimonials");
				$c=mysql_num_rows($q);
				$index=$c+1;
				if(!(empty($test)))	
		 {
		 $query2 = mysql_query("insert into testimonials values ('$index','$title','$test','$getuploadfiles')");       
		 }
		 }
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