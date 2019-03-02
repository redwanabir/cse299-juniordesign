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
              
              $phone_no = $_POST['phone_no'];
              $price_type = $_POST['price_type'];
              $address= $_POST['address'];
             
              
              
              
                 }
     $r1 = "INSERT INTO car_repair(org_name,phone_no,price_type,address) VALUES('$org_name','$phone_no','$price_type','$address')";
              if ($conn->query($r1) === TRUE) {
                echo "Successfully done"
                  } else {
                  echo " Error:";
                   }
                        
    ?>
              