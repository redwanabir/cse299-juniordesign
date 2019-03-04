<?php
//db connect 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cse327";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
<!DOCTYPE html>
<html>
<?php session_start();
if($_SESSION["username"]==true){
$id = $_SESSION['id'];
}

?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Profile</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Homepage.css" >
<link rel="stylesheet" type="text/css" href="css/profilestyle.css" >
        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

 <div class="header">
	<div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">HomeService.com</a>
          </div>
          <ul class="nav navbar-nav">
          
            <li ><a href="index.php"> Home</a></li> ?>
			
			<li class="active"><a href=profile.php?id=".$row['id']">Profile</a></li>
            

          </ul>
       
               <ul class="nav navbar-nav navbar">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Service<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="ac_view.php"><span class="glyphicon glyphicon-home">A/C Service</span></a></li>
          <li><a href="food_view.php"><span class="glyphicon glyphicon-home">Food Service</span> </a></li>
           <li><a href="laundry_view.php"><span class="glyphicon glyphicon-home">Laundry Service</span> </a></li>
             <li><a href="shifting_view.php"><span class="glyphicon glyphicon-home">Home Shift Service</span> </a></li>
               <li><a href="rent_view.php"><span class="glyphicon glyphicon-home">Car Rent Service</span> </a></li>
                  <li><a href="repair_view.php"><span class="glyphicon glyphicon-home">Car Repair Service</span> </a></li>
          
        </ul>
      </li>
  
   </ul>

          <!-- Dropdown Sign Up Menu -->
          <ul class="nav navbar-nav navbar-right">
            <li><a class="dropdown-toggle"  href="home.html?logout='1'">Logout<span ></span></a>
             
              
            </li>
                  </ul>
                  
           



        
        </div>
      </nav>
    </div>

 


  <div id="main">


    <center>
     
      <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['full_name'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

      
    	
    <?php endif ?>
</div>
		
     
     

    </center>


  </div>


	<div>
   <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="picture/robot.png" alt="user Profile"/>
                          <!--  <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       <?php echo $_SESSION['username'];?>
                                    </h5>
                                    <h6>
                                        <?php echo $_SESSION['profession']; ?>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                  <!--  <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div> -->
                </div>
				
				<div class="col-md-8">
				        
                        <?php
						
						$username = $_SESSION["username"];
						$sqlget = "SELECT * FROM registration WHERE username='$username'";
						$sqldata = mysqli_query($con, $sqlget) or die('error getting');
						
                        echo "<table>";
						
						while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
							   
							   echo "<tr><th>ID:</th></tr>";
							   echo "<tr><td>";
						       echo $row['id'];
							   echo "</td></tr>";
							   echo "<tr><th>NAME:</th></tr>";
							   echo "<tr><td>";
						       echo $row['full_name'];
							   echo "</td></tr>";
							   echo "<tr><th>USERNAME:</th></tr>";
							   echo "<tr><td>";
							   echo $row['username'];
							   echo "</td></tr>";
							   echo "<tr><th>PHONE:</th></tr>";
							   echo "<tr><td>";
							   echo $row['phone_no'];
							   echo "</td></tr>";
							   echo "<tr><th>EMAIL:</th></tr>";
							   echo "<tr><td>";
						       echo $row['email'];
							   echo "</td></tr>";
							   echo "<tr><th>GENDER:</th></tr>";
							   echo "<tr><td>";
						       echo $row['gender'];
							   echo "<tr><th>ID</th></tr>";
							   echo "</td></tr>";
							   echo "<tr><th>PROFESSION:</th></tr>";
							   echo "<tr><td>";
						       echo $row['profession'];
							   echo "</td></tr>";
						    
						}
				
						echo "</table>";
						 	
							
						?>
							
                                        </div>
										
					  </form>           
        </div>
 
  </div>

  </body>
  
  

</html>