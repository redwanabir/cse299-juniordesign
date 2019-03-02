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
    $db = mysqli_select_db($conn, "homeservice");
    					if(isset($_POST['Submit'])){

            
              $org_name = $_POST['org_name'];
              $home = $_POST ['home'];
              $office = $_POST['office'];
              $phone_no = $_POST['phone_no'];
               $area = $_POST['area'];
              
                 }
                 $r1 = "INSERT INTO shifting(org_name,home,office,phone_no,area) VALUES
				 ('$org_name','$home','$office','$phone_no','$area')";
         if ($conn->query($r1) === TRUE) {
               echo "Succesfully Done";
                  } else {
                  echo " Error:";
                   }
    ?>
              