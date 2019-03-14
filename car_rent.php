<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, "");
    // Check connection
    if ($conn==false) {
        die("Connection failed: " . $conn->connect_error);
    }
    $db = mysqli_select_db($conn, "cse327");
    					if(isset($_POST['Submit'])){

            $org_name = $_POST['org_name'];
              
              $start_location = $_POST['start_location'];
              $end_location = $_POST ['end_location'];
              $fare= $_POST['fare'];
              $car_type= $_POST['car_type'];
              
               $rent_preference = $_POST['rent_preference'];
			   
			   $pickup_time= $_POST['pickup_time'];
               $rent_type = $_POST['rent_type'];
              
              
              
                 }
     $r1 = "INSERT INTO car_rent(org_name,start_location,end_location,fare,car_type,rent_preference,pickup_time,rent_type) VALUES('$org_name',
                 '$start_location','$end_location','$fare','$car_type','$rent_preference','$pickup_time','$rent_type')";
              if ($conn->query($r1) === TRUE) {
               header( "Location: sp_index.php" );
                  } else {
                  echo " Error:";
                   }
                        
    ?>
              