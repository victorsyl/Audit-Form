<?php 
session_start();
if(! $_SESSION['user']['email']){
  header("location: index.php"); 
}

$db = mysqli_connect('localhost', 'root', '', 'sel');

if (isset($_POST['branch'])) {
        
    $branchname    =  ($_POST['branchname']);
	$branchmanager =  ($_POST['branchmanager']);
	$opsmanager =  ($_POST['opsmanager']);

        $query = "INSERT INTO branch (branchname, branchmanager, opsmanager) 
                  VALUES('$branchname', '$branchmanager', '$opsmanager')";
        mysqli_query($db, $query);
        
        echo"<script>alert('Branch Added Successfully!');</script>";
        echo("<script>window.location = './Dashboard.php';</script>");
    }
    if (isset($_POST['update'])) {
        
      $branchname    =  ($_POST['branchname']);
    $branchmanager =  ($_POST['branchmanager']);
    $opsmanager =  ($_POST['opsmanager']);
  
          $query1 = "UPDATE branch SET branchname= '$branchname',  branchmanager= '$branchmanager', opsmanager= '$opsmanager' WHERE branchname='$branchname'";
                    
          mysqli_query($db, $query1);
          
          echo"<script>alert('Branch Updated Successfully!');</script>";
          echo("<script>window.location = './Dashboard.php';</script>");
      }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
	<title>Dashboard</title>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="./css/Dummy.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
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
          <a href="branch.php" class="active">
            <i class='bx bx-map' ></i>
            <span class="links_name">Branches</span>			
          </a>
        </li>
        <li>
          <a href="export.php">
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
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="../images/images.png" >
        <span class="admin_name"><?php echo $_SESSION['user']['username']; ?></span>
        
      </div>
    </nav>

    <div class="home-content">
    <head>
	<title>Branch</title>
	<style>

*{ 
	margin: 0px; 
	padding: 0px; 
}
body {
	font-size: 120%;
	background: #F8F8FF;
}
.header {
	width: 1000px;
	background-color: #00A7D1;
	margin: 0px auto 0px;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}

form {
	background-color: #f5f5f5;
	max-width: 1000px;
	margin: 0px auto;
	padding: 100px 50px;
	box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
}
.input-group {
	margin: 10px 0px 10px 0px;
    justify-content: left;
    align-items: left;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #00A7D1;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
.space {
  width: 600px;
  height: auto;
  display: inline-block;
}

</style>
</head>
<body>
	<div class="header">
		<h2>Add New Branch Details</h2>
	</div>
	<form method="post" action="branch.php">      	
		<div class="input-group">
			<label>Branch Name</label>
			<input type="text" name="branchname">
		</div>	
		<div class="input-group">
			<label>Branch Manager</label>
			<input type="text" name="branchmanager">
		</div>
        <div class="input-group">
			<label>Operations Manager</label>
			<input type="text" name="opsmanager">
		</div>
            <div class="input-group">
                <button type="submit" class="btn" name="branch">Add Branch</button>

                <div class="space"></div>
                <button type="submit" class="btn" name="update">Update Branch</button>
        </div>  
		<p> 
            <div class="input-group2">
            </div>
		</p>
	</form>
</body>
</div>        
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

