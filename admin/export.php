<?php
/* Database connection start */
session_start();
if(! $_SESSION['user']['email']){
  header("location: index.php"); 
}
include_once("../includes/db_connect.php");
include ("fetchBranches.php");

if(isset($_POST["dataExport"])) {	
	$branch_id=$_POST['branch_id'];
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
	$sqlQuery = "SELECT * FROM adminstaffing INNER JOIN branch ON branch.branch_id=adminstaffing.branch_id where adminstaffing.branch_id='$branch_id' AND TransactionDate BETWEEN '$date2' AND '$date1'";
	$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
	$developersData = array();
	while( $developer = mysqli_fetch_assoc($resultSet) ) {
		$developersData[] = $developer;
}	
	$fileName = "report_export_".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");	
	$showColoumn = false;
	if(!empty($developersData)) {
	  foreach($developersData as $developerInfo) {
		if(!$showColoumn) {		 
		  echo implode("\t", array_keys($developerInfo)) . "\n";
		  $showColoumn = true;
		}
		echo implode("\t", array_values($developerInfo)) . "\n";
	  }
	}

	exit;  
} 
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
	<title>Form</title>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="./css/Dummy.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>

/* Styling the Body element i.e. Color,
Font, Alignment */
body {
  background-color:#f5f5f5;
  font-family: serif;
  text-align: center;
}

/* Styling the Form (Color, Padding, Shadow) */
form {
  background-color: #fff;
  max-width: 1200px;
  margin: 0px auto;
  padding: 100px 50px;
  box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
}

/* Styling form-control Class */
.form-control {
  text-align: left;
  margin-bottom: 25px;
        
}
    .div-table {
display: table;         
border: 1px solid ;
border-spacing: 0 
  border-radius: 20px;
  font-family: inherit;
  padding-top: 10px;
padding-bottom: 10px;
padding-left: 10px;
padding-right: 10px;
  display: block;
  width: 95%;
        text-align: center;
}
.div-table-row {
display: table-row;
width: 500px;
clear: both;
}
.div-table-col {
float: left; /* fix for  buggy browsers */
display: table-column;         
width: 200px;         
background-color: #ccc;  
}
    .form-group{
margin-bottom:20px;
}
/* Styling Button */
.success {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
  }
  
  .success:hover {
    background-color: #081D45;
    color: white;
  }
  .success {
    background-color: #00A7D1;
    color: white;
  }
</style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
	 <img src="../images/logo.png" width="150" height="100">
     
    </div>
      <ul class="nav-links">
        <li>
          <a href="Dashboard.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Register.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="change-password.php">
            <i class='bx bx-reset' ></i>
            <span class="links_name">Password Reset</span>
          </a>
        </li>
        <li>
          <a href="branch.php">
            <i class='bx bx-map' ></i>
            <span class="links_name">Branches</span>			
          </a>
        </li>
        <li>
          <a href="export.php" class="active">
            <i class='bx bx-export' ></i>
            <span class="links_name">Export</span>			
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <img src="./images/images.png" >
        <span class="admin_name">User</span>
        
      </div>
    </nav>


<body>


<!-- Create Form -->
	<form id="form" action = "export.php" method = "post">
	<img src="../images/supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        <body>
	<div class="header">
		<h2>Export data your data here</h2>
	</div>
  <div class="input-group">
			<label>Branch Name</label>
      <select class="input-group" name ="branch_id" >
			<?php
        if($result = mysqli_query($link, $sql)){
          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
              echo "<option value=". $row['branch_id']."> ". $row['branchname']. "</option>";
            }
            mysqli_free_result($result);
          }
      }
        ?>
              </select>
				
				<label>Start Date:</label>
		<input type="date" name="date2" id="date1">	

		<label>End Date:</label>
		<input type="date" name="date1" id="date2">	
			</div>
      <br>
      <br>		
     <center>
		
        <div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="success">Export</button>
			</form>
		</div>
	</div> 
    </center>
</form>
</body>
<!DOCTYPE html>
<html>
<head>
  
</head>
<body>

</body>
</html>
        
      </div>
    </div>
  </section>


  </section>
<footer>
	<center>
        <span>Copyright © 2022 <a href="#">MiniManagement Services</a>All rights reserved
          
        </span></center>
  </footer>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>


