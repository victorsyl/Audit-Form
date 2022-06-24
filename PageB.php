<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
	<title>BAKERY VISIT CHECKLIST</title>

   
    <link rel="stylesheet" href="Dummy.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <img src="./images/logo.png" width="150" height="100">
     
    </div>
      <ul class="nav-links">
        <li>
          <a href="Dashboard.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
		<li>
          <a href="PageA.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Audit</span>
			
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

    <?php
session_start();
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 

?>

<head>
	
	<title>
		MINI BAKERIES
	</title>

	<style>

		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			font-family: serif;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #f5f5f5;
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
  border-spacing: 0 ;
    border-radius: 20px;
    font-family: inherit;
    padding-top: 10px;
  padding-bottom: 10px;
  /*padding-left: 5px;*/
  padding-right: 10px;
    display: block;
    width: 100%;
    text-align: center;
}
.div-table-row {
  display: table-row;
  width: 500px;
  clear: both;
}
/*.div-table-row1 {
  display: fixed;
  width: 800px;
  clear: both;
  background-color: darkblue;
}*/
.div-table-col {
  float: left; /* fix for  buggy browsers */
  display: table-column;         
  width: 200px;         
  /*background-color: #ccc;*/ 
}
.div-table-col2 {
  float: left; /* fix for  buggy browsers */
  display: table-column;         
  width: 265px;         
  /*background-color: #ccc;*/ 
}
.div-table-col1 {
  float: left; /* fix for  buggy browsers */
  display: table-column; 
  align-items: center;        
  width: 65px;         
  /*background-color: #ccc;*/ 
}
        .form-group{
  margin-bottom:20px;
}
		/* Styling Button */
		button {
			border: 1px solid;
            background-color: #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 10%;
			margin-top: 50px;
			margin-bottom: 20px;
            text-decoration-color: white;
            
		}
        h2{
            text-align: left;
        }
        h3{
            text-align: left;
        }
        h4{
            text-align: left;
            color: darkblue;
        }
        textarea{
    width: 150px;
}
	</style>
</head>

<body>


<!-- Create Form -->
	<form id="form" action="PageC.php" method="post">
        
        <h4><b>Machine structural conditions and hygiene</b></h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b>Machines</b></div>
               <div  class="div-table-col"><b>Mechanical/Electrical</b>
                    <div class="div-table-row">
                        <div  class="div-table-col">
                            <div  class="div-table-col1"><i>Good</i></div>
                            <div  class="div-table-col1"><i>Fair</i></div>
                            <div  class="div-table-col1"><i>Poor</i></div>
                        </div>
                    </div>
                </div>
               <div  class="div-table-col"><b>Hygiene/Layout</b>
                    <div class="div-table-row">
                        <div  class="div-table-col">
                            <div  class="div-table-col1"><i>Good</i></div>
                            <div  class="div-table-col1"><i>Fair</i></div>
                            <div  class="div-table-col1"><i>Poor</i></div>
                        </div>
                    </div>
                </div>
               <div  class="div-table-col"><b>Remarks</b></div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col"><b>Mixer 1</b></div>
               <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="m1mechanical" id="m1mechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="m1mechanical" id="m1mechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="m1mechanical" id="m1mechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="m1layout" id="m1layout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="m1layout" id="m1layout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="m1layout" id="m1layout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="mixer1" id="mixer1" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
             <div class="div-table-row">
                <div class="div-table-col"><b>Mixer 2</b></div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="m2mechanical" id="m2mechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="m2mechanical" id="m2mechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="m2mechanical" id="m2mechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="m2layout" id="m2layout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="m2layout" id="m2layout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="m2layout" id="m2layout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="mixer2" id="mixer2" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col"><b>Dough Refiner</b></div>
                   <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="dough" id="dough" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="dough" id="dough" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="dough" id="dough" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="refiner" id="refiner" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="refiner" id="refiner" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="refiner" id="refiner" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="doughrefiner" value="" id="doughrefiner" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
             <div class="div-table-row">
                <div class="div-table-col"><b>Proover 1</b></div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="p1mechanical" id="p1mechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="p1mechanical" id="p1mechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="p1mechanical" id="p1mechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="p1layout" id="p1layout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="p1layout" id="p1layout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="p1layout" id="p1layout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="proover1" id="proover1" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col"><b>Proover 2</b></div>

                   <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="p2mechanical" id="p2mechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="p2mechanical" id="p2mechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="p2mechanical" id="p2mechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="p2layout" id="p2layout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="p2layout" id="p2layout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="p2layout" id="p2layout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="proover2" id="prover2" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col"><b>Proover 3</b></div>
              
                    <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="p3mechanical" id="p3mechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="p3mechanical" id="p3mechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="p3mechanical" id="p3mechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="p3layout" id="p3layout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="p3layout" id="p3layout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="p3layout" id="p3layout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="proover3" id="proover3" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col"><b>Oven 1</b></div>
               
                    <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="o1mechanical" id="o1mechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="o1mechanical" id="o1mechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="o1mechanical" id="o1mechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="o1layout" id="o1layout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="o1layout" id="o1layout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="o1layout" id="o1layout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="oven1" id="oven1" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col"><b>Oven 2</b></div>
                    <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="o2mechanical" id="o2mechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="o2mechanical" id="o2mechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="o2mechanical" id="o2mechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="o2layout" id="o2layout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="o2layout" id="o2layout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="o2layout" id="o2layout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="oven2" id="oven2" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col"><b>Oven 3</b></div>
              
                   <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="o3mechanical" id="o3mechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="o3mechanical" id="o3mechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="o3mechanical" id="o3mechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="o3layout" id="o3layout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="o3layout" id="o3layout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="o3layout" id="o3layout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="oven3" id="oven3" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col"><b>Slicer</b></div>
              
                   <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="smechanical" id="smechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="smechanical" id="smechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="smechanical" id="smechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="slayout" id="slayout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="slayout" id="slayout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="slayout" id="slayout" value="Poor"></div>
                </div>
                <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="slicer" id="slicer" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col"><b>Generator</b></div>
               
                    <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="gmechanical" id="gmechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="gmechanical" id="gmechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="gmechanical" id="gmechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="glayout" id="glayout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="glayout" id="glayout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="glayout" id="glayout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="generator"  value="" id="generator" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col"><b>Electronic Dough Scaler</b></div>
               
                    <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="edsmechanical" id="edsmechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="edsmechanical" id="edsmechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="edsmechanical" id="edsmechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="edslayout" id="edslayout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="edslayout" id="edslayout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="edslayout" id="edslayout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="edsremark" value="" id="scaler3" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col"><b>Slicing Scale</b></div>
               
                   <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="scalemechanical" id="scalemechanical" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="scalemechanical" id="scalemechanical" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="scalemechanical" id="scalemechanical" value="Poor"></div>
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="scalelayout" id="scalelayout" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="scalelayout" id="scalelayout" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="scalelayout" id="scalelayout" value="Poor"></div>
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="slicingscale" value="" id="slicingscale" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
        </div>

        <h4>Maintenance of Electronic Scales</h4>
            <div class="div-table">
                <div class="div-table-row"><b>
                   <div class="div-table-col2">How often</div>
                   <div  class="div-table-col2">State</div>
                   <div  class="div-table-col2">Remarks</div>
                </b></div>
               <div class="div-table-row">
                    <div class="div-table-col2">
                        <input type="radio" name="often" id="How often" value="Frequent">Frequent<br>
                        <input type="radio" name="often" id="How often" value="Rare Breakdown">Rare Breakdown      
                    </div>
                    <div class="div-table-col2">
                        <input type="radio" name="state" id="State" value="Clean">Clean<br>
                        <input type="radio" name="state" id="State" value="Untidy">Untidy  
                    </div>
                   <div class="div-table-col2"style="text-align:center">
                       <!-- multi-line text input control -->
                        <textarea name="comment" id="comment" value="" style="text-align:center"></textarea>
                   </div>
               </div>
    
            </div>
                 <h4>IV) Bakeware Structural Condition and Hygiene</h4>
                <div class="div-table">
                    <div class="div-table-row">
                   <div class="div-table-col"><b>Bakeware</b></div>
                   <div  class="div-table-col"><b>Mechanical/Electrical</b>
                        <div class="div-table-row">
                            <div  class="div-table-col">
                                <div  class="div-table-col1"><i>Good</i></div>
                                <div  class="div-table-col1"><i>Fair</i></div>
                                <div  class="div-table-col1"><i>Poor</i></div>
                            </div>
                        </div>
                    </div>
                   <div  class="div-table-col"><b>Hygiene/Layout</b>
                        <div class="div-table-row">
                            <div  class="div-table-col">
                                <div  class="div-table-col1"><i>Good</i></div>
                                <div  class="div-table-col1"><i>Fair</i></div>
                                <div  class="div-table-col1"><i>Poor</i></div>
                            </div>
                        </div>
                    </div>
                   <div  class="div-table-col"><b>Remarks</b></div>
                </div>
                     <div class="div-table-row">
                 <div class="div-table-col"><b>Baking Tins</b></div>
               <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="baking" id="baking" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="baking" id="baking" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="baking" id="baking" value="Poor"></div> 
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="tins" id="tins" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="tins" id="tins" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="tins" id="tins" value="Poor"></div> 
                     
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="bakingtins" id="bakingtins" value="" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col"><b>Cooling Wires</b></div>
               <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="cooling" id="cooling" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="cooling" id="cooling" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="cooling" id="cooling" value="Poor"></div> 
                    
                </div>
                <div class="div-table-col">
                    <div class="div-table-col1"><input type="radio" name="wires" id="wires" value="Good"></div>
                    <div class="div-table-col1"><input type="radio" name="wires" id="wires" value="Fair"></div>
                    <div class="div-table-col1"><input type="radio" name="wires" id="wires" value="Poor"></div>    
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="coolingwires" value="" id="coolingwires" placeholder="Enter your comment here"></textarea>
               </div>
            </div>
        </div>      
        <center>
		<br><button type="submit" name="submit">Next</button>
    </center>
    </div>
	</b></form>
</body>
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
