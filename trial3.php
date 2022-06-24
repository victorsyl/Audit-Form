<?php
  
// Get the user id 
$id = $_REQUEST['id'];
  
// Database connection
$con = mysqli_connect("localhost", "root", "", "sel");
  
if ($id !== "") {
      
    // Get corresponding first name and 
    // last name for that user id    
    $query = mysqli_query($con, "SELECT branchmanager, 
    opsmanager FROM branch WHERE branch_id='$id'");
  
    $row = mysqli_fetch_array($query);
  
    // Get the first name
    $branchmanager = $row["branchmanager"];
  
    // Get the first name
    $opsmanager = $row["opsmanager"];
}
  
// Store it in a array
$result = array("$branchmanager", "$opsmanager");
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>