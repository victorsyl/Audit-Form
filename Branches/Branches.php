
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
	<title>Sign In</title>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="../css/Dummy.css">
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
          <a href="./admin/index.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Branches</span>
          </a>
        </li> 
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Select Your Branch</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Central</div>
            <div class="number">0</div>
            <div class="indicator">
             
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Nairobi</div>
            <div class="number">0</div>
            <div class="indicator">
             
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Western</div>
            <div class="number">0</div>
            <div class="indicator">
              
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Eastern</div>
            <div class="number">0</div>
            <div class="indicator">
              
            </div>
          </div>
          
        </div>
      </div>
      <div class="home-content">
      <div class="overview-boxes">
      <div class="box">
          <div class="right-side">
            <div class="box-topic">Coast</div>
            <div class="number">0</div>
            <div class="indicator">
              
            </div>
          </div>
          
        </div>
      </div>
</div></div>

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

