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
             $s_name = $_POST['s_name'];
            $delivery_available = $_POST['delivery_available'];
              $delivery_charge = $_POST['delivery_charge'];
              $area = $_POST['area'];
               $phone_no = $_POST['phone_no'];
                 }
                 $r1 = "INSERT INTO medicine(s_name,delivery_available,delivery_charge,area,phone_no) VALUES('$s_name','$delivery_available','$delivery_charge','$area','$phone_no')";
              if ($conn->query($r1) === TRUE) {
               echo "Succesfully Done";
                  } else {
                  echo " Error:";
                   }
                        
                        
    ?>