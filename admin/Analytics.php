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
            <i class='bx bx-box' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
		<li>
          <a href="./fetch/fetch.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Form</span>
          </a>
        </li>
        <li>
          <a href="export.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Export</span>			
          </a>
        </li>
        <li>
          <a href="Analytics.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Analytics</span>			
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
        <span class="admin_name">Admin</span>
        
      </div>
    </nav>
   
    <div class="home-content">
      <div class="leaves-boxes">
        <div class="recent-leaves box">
          <div class="title">Analytics</div>
         
<link rel="stylesheet" type="text/css" href="style345.css">
<body><iframe class ="centered" title="DASH - HOME" width="1400" height="700" src="https://app.powerbi.com/reportEmbed?reportId=0cb53776-d358-4dba-aa17-78412a7b3284&autoAuth=true&ctid=2a35539e-79ab-40a1-8f85-0a15f009d821&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWFmcmljYS1ub3J0aC1hLXByaW1hcnktcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D" frameborder="0" allowFullScreen="false"></iframe>
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

