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
               $r_men = $_POST ['r_men'];
              $r_kid = $_POST['r_kid'];
                $r_woman = $_POST['r_woman'];
               $r_ass = $_POST ['r_ass'];

                $m_man = $_POST['m_man'];
               $m_kid = $_POST ['m_kid'];
              $m_woman = $_POST['m_woman'];
              $m_ass = $_POST['m_ass'];
                $phone_no = $_POST['phone_no'];
               $area = $_POST ['area'];
              
           
             
             
   }
   $r1 = "INSERT INTO laundry(org_name,r_men,r_kid,r_woman,r_ass,m_man,m_kid,m_woman,m_ass,phone_no,area)
   VALUES('$org_name','$r_men','$r_kid','$r_woman','$r_ass','$m_man','$m_kid','$m_woman','$m_ass','$phone_no','$area')";
             
           if ($conn->query($r1) === TRUE) {
               echo "Succesfully Done";
                  } else {
                  echo " Error:";
                   }
                        
    ?>
              