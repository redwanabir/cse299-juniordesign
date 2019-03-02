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
              $split_price = $_POST['split_price'];
            $window_price = $_POST['window_price'];
              $phone_no = $_POST['phone_no'];
              $negotiable = $_POST['negotiable'];
              
              $address = $_POST['address'];
             
                 }
                 $r1 = "INSERT INTO ac(org_name,split_price,window_price,phone_no,negotiable,address) VALUES('$org_name','$split_price','$window_price','$phone_no','$negotiable','$address')";
              if ($conn->query($r1) === TRUE) {
               echo "Succesfully Done";
                  } else {
                  echo " Error:";
                   }
                        
    ?>
              