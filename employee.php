<?php

include("functions.php");
?>

<!DOCTYPE html>
<body lang="en">
<head>

<?php

$link = mysqli_connect("localhost", "root", "", "cse327");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);

 
// attempt insert query execution
$sql = "INSERT INTO employee (name, email, address, phone) VALUES ('$name', '$email', '$address', '$phone' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>



</head>
<body>
    
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							
						</th>
                        <th>Name</th>
                        <th>Email</th>
						<th>Address</th>
                        <th>Phone</th>
        
                    </tr>
                </thead>

			
        </div>
    </div>
	<!-- Edit Modal HTML -->
						
						
                            <form method="post" action="employee.php">
							   <table width="100%">
							    <tr>
							    <td>
                                <h2> name </h2>
								</td>
                                <td><input type='text' name="name"</td><br>
						        </tr>
						        <tr>
								<td>
                                <h2> email </h2>
								</td>
                                <td><input type='text' name="email"</td><br>
						        </tr>
						        <tr>
								<td>
                                <h2> address </h2>
								</td>
                                <td><input type='text' name="address"</td><br>
						        </tr>
								<tr>
						        <td>
                                <h2> phone </h2>
								</td>
                                <td><input type='text' name="phone"</td><br>
								</tr>
							   </table>
								
								 <button type="submit" value="submit" class="ui-btn ui-shadow">Submit</button>
							</form>
											
	
	<!-- Delete Modal HTML -->
	
</body>
</html>                                		                            