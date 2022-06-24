<?php
    include('includes/functions.php');
    include('includes/db_connect.php');

    if(! $_SESSION['user']['email']){
        header("location: index.php"); 
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
          <a href="change-password.php" class="active">
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
      <div class="profile-details">
        <img src="../images/images.png" >
        <span class="admin_name"><?php echo $_SESSION['user']['username']; ?></span>
        
      </div>
    </nav>
    <div class="home-content">
    

<head>
	<title>Change Password</title>
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

</style>
</head>
<body>
	<div class="header">
		<h2>RESET PASSWORD</h2>
	</div>
	<form method="post" action="change-password.php">
        <div class="input-group">
			<label>Email</label>
			<input type="email" name="email" >
		</div>		
		<div class="input-group">
			<label>New Password</label>
			<input type="password" name="newpassword_1">
		</div>
        <div class="input-group">
			<label>Confirm New Password</label>
			<input type="password" name="newpassword_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="change_btn">Reset</button>
		</div>
		<p>
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

