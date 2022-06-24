<?php 
session_start();
if(! $_SESSION['user']['email']){
  header("location: index.php"); 
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
          <a href="Dashboard.php" class="active">
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
      <div class="leaves-boxes">
        <div class="recent-leaves box">
          <div class="title">Audits</div>
         
          <?php
                    // Include config file
                    require_once "./includes/cfg.php";
                    
                    // Attempt select query execution
                    //$logged_in_user_branch = $_SESSION['user']['branchname'];
                    $sql = "SELECT * FROM `adminstaffing` INNER JOIN branch ON branch.branch_id=adminstaffing.branch_id";
                    //$sql = "SELECT * FROM adminstaffing where branch_id = '".$logged_in_user_branch."'";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";  
                                    echo "<th>S/N</th>";
                                    echo "<th>Branch Name</th>";
                                    echo "<th>Branch Manager</th>";
                                    echo "<th>Operations Manager</th>";
                                    echo "<th>Audited Date</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['branchname'] . "</td>";
                                    echo "<td>" . $row['branchmanager'] . "</td>";
                                    echo "<td>" . $row['opsmanager'] . "</td>";
                                    echo "<td>" . $row['TransactionDate'] . "</td>";
                                    echo "<td>";
                                        echo '<a href="./fetch/fetch.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="./fetch/Rpdf.php?id='. $row['id'] .'" class="mr-3" title="Download Record" data-toggle="tooltip"><span class="fa fa-download"></span></a>';
                                        echo '<a href="./fetch/pdf.php?id='. $row['id'] .'" class="mr-3" title="Print Record" data-toggle="tooltip"><span class="fa fa-print"></span></a>';
                                        echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close connection
                mysqli_close($link);
                ?>
     
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

