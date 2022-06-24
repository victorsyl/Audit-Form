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
   
<!DOCTYPE html>
<html lang="en">

<head>
	
	
    <style>

        /* Styling the Body element i.e. Color,
        Font, Alignment */
        body {
            background-image:url("index3.png");
            background-repeat: no-repeat;
            background-position:top ;
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
        padding-left: 10px;
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
        .div-table-col {
        float: left; /* fix for  buggy browsers */
        display: table-column;         
        width: 265px;         
        /*background-color: #ccc;*/ 
        }
        .div-table-col1 {
        float: left; /* fix for  buggy browsers */
        display: table-column; 
        align-items: center;        
        width: 100px;         
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
        </style>
</head>

<body>


<!-- Create Form -->
	<form id="form" action="PageE.php" method="post">
       
        <h2>8) Sales Records</h2>
        <label for="role" id="label-role">
            <h4>Loading Books</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b><u>Description</u></b></div>
               <div  class="div-table-col"><b><u>Condition</u></b>
                <div class="div-table-row">
                    <div  class="div-table-col">
                        <div class="div-table-col1"><i>Well Kept</i></div>
                        <div class="div-table-col1"><i>Unkept</i></div>
                    </div>
                </div>
               </div>
               <div  class="div-table-col"><b><u>Remarks</u></b></div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col"><b>Manager's Loading Book</b></div>
               <div class="div-table-col">
                
                    <div class="div-table-col1"><input type="radio" name="MngerLding_cond" id="MngerLding_cond" value="Well Kept"></div>
                    <div class="div-table-col1"><input type="radio" name="MngerLding_cond" id="MngerLding_cond" value="Unkempt"></div>
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="MngerLding_remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div>
               </div>
                <div class="div-table-row">
               <div style="text-align:center"class="div-table-col"><b>Supervisor's Loading Book</b></div>
               <div class="div-table-col">
                
                    <div class="div-table-col1"><input type="radio" name="SupLding_cond" id="SupLding_cond" value="Well Kept"></div>
                    <div class="div-table-col1"><input type="radio" name="SupLding_cond" id="SupLding_cond" value="Unkempt"></div>
                     
                </div>
                <div class="div-table-col">
            <!-- multi-line text input control -->
            <textarea name="SupLding_remrk" id="comment"style="text-align:center"
            placeholder="Enter your comment here">
            </textarea>
            </div>  
          </div>
        </div>
            <label for="role" id="label-role">
                <h3>Security Books</h3>
                <h4>(a) Neatness - Overwriting & white outs</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col"><b><u>Description</u></b></div>
                   <div  class="div-table-col"><b><u>Condition</u></b>
                    <div class="div-table-row">
                        <div  class="div-table-col">
                            <div class="div-table-col1"><i>No Alterations</i></div>
                            <div class="div-table-col1"><i>Alterations Noted</i></div>
                        </div>
                    </div>
                   </div>
                   <div  class="div-table-col"><b><u>Remarks</u></b></div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col"><b>Loading Book</b></div>
                   <div class="div-table-col">
                        <div class="div-table-col1"><input type="radio" name="Security_loading" id="Security_loading" value="No Alterations"></div>
                        <div class="div-table-col1"><input type="radio" name="Security_loading" id="Security_loading" value="Alterations Noted"></div>
                         
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="Securitylding_remrk" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
               </div>
               <div class="div-table-row"style="text-align:center">
                   <div class="div-table-col"><b>Attendance</b></div>
                   <div class="div-table-col">
                    
                    <div class="div-table-col1"><input type="radio" name="Security_attendance" id="Security_attendance" value="No Alterations"></div>
                    <div class="div-table-col1"><input type="radio" name="Security_attendance" id="Security_attendance" value="Alterations Noted"></div>
                         
    </div>
    <div class="div-table-col"style="text-align:center">
       <!-- multi-line text input control -->
       <textarea name="Securityatt_remrk" id="comment"style="text-align:center"
       placeholder="Enter your comment here">
    </textarea>
      </div>
      </div>
               <div class="div-table-row"style="text-align:center">
                   <div class="div-table-col"><b>O.B</b></div>
                   <div class="div-table-col">
                    
                        <div class="div-table-col1"><input type="radio" name="Security_OB" id="Security_OB" value="No Alterations"></div>
                        <div class="div-table-col1"><input type="radio" name="Security_OB" id="Security_OB" value="Alterations Noted"></div>
                         
                   </div>
                   <div class="div-table-col"style="text-align:center">   
                         <!-- multi-line text input control -->
                    <textarea name="SecurityOB_remrk" id="comment"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
    
                   </div>
               </div>
    
                </div>
                <label for="role" id="label-role"style="text-align:center">
                <h4>(b) Reliability & Accuracy</h4>
                <div class="div-table"style="text-align:center">
                    <div class="div-table-row">
                       <div class="div-table-col"><b><u>Description</u></b></div>
                       <div  class="div-table-col"><b><u>Condition</u></b>
                        <div class="div-table-row">
                            <div  class="div-table-col">
                                <div class="div-table-col1"><i>No Alterations</i></div>
                                <div class="div-table-col1"><i>Alterations Noted</i></div>
                            </div>
                        </div>
                       </div>
                       <div  class="div-table-col"><b><u>Remarks</u></b></div>
                    </div>
                    <div class="div-table-row">
                     <div class="div-table-col"><b>Loading Book</b></div>
                   <div class="div-table-col">
                    
                        <div class="div-table-col1"><input type="radio" name="Reliability_loading" id="Reliability_loading" value="No Alterations"></div>
                        <div class="div-table-col1"><input type="radio" name="Reliability_loading" id="Reliability_loading" value="Alterations Noted"></div>
                         
    </div>

                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="Reliabiltylding_remrk" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
               </div>
               <div class="div-table-row"style="text-align:center">
                   <div class="div-table-col"><b>Attendance</b></div>
                   <div class="div-table-col">
                    
                        <div class="div-table-col1"><input type="radio" name="Reliability_Attendance" id="Reliability_Attendance" value="No Alterations"></div>
                        <div class="div-table-col1"><input type="radio" name="Reliability_Attendance" id="Reliability_Attendance" value="Alterations Noted"></div>
                         
    </div>
    <div class="div-table-col"style="text-align:center">
       <!-- multi-line text input control -->
       <textarea name="Reliabiltyatt_remrk" id="comment"style="text-align:center"
       placeholder="Enter your comment here">
    </textarea>
      </div>
      </div>
    <div class="div-table-row"style="text-align:center">
        <div class="div-table-col"><b>O.B</b></div>
            <div class="div-table-col">
               
                    <div class="div-table-col1"><input type="radio" name="Reliability_OB" id="Reliability_OB" value="No Alterations"></div>
                    <div class="div-table-col1"><input type="radio" name="Reliability_OB" id="Reliability_OB" value="Alterations Noted"></div>
                 
            </div>
        <div class="div-table-col"style="text-align:center">   
                         <!-- multi-line text input control -->
            <textarea name="Reliabiltyob_remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
        </div>
         
            </div>
         
                </div>
        </div>
    </div>
                        
                <label for="role" id="label-role">
                    <h4>C)Mini Shop Loading Book</h4>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col"style="text-align:center"><b><u>Description</u></b></div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Condition</u></b>
                                <div class="div-table-row">
                                    <div  class="div-table-col">
                                        <div class="div-table-col1"><i>No Alterations</i></div>
                                        <div class="div-table-col1"><i>Alterations Noted</i></div>
                                    </div>
                                </div>
                           </div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Remarks</u></b></div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col"><b>Neatness - Overwriting & wite outs</b></div>
                           <div class="div-table-col">
                            
                                <div class="div-table-col1"><input type="radio" name="Minishpneatness_cond" id="Minishpneatness_cond" value="No Alterations"></div>
                                <div class="div-table-col1"><input type="radio" name="Minishpneatness_cond" id="Minishpneatness_cond" value="Alterations Noted"></div>
                                 
                          </div>
                           <div class="div-table-col"style="text-align:center">
                               <!-- multi-line text input control -->
                            <textarea name="Minishpneatness_remrk" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
                       </div>
                    </div>
        <center>
		<button type="submit" value="submit" name="submit">
			Next
		</button>
    </center>
    </div>
	</form>
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
