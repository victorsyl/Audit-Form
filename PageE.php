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
        border-spacing: 0; 
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
	<form id="form" action="PageF.php" method="post">
        <h2>9) Administration and Staffing</h2>
        <label for="role" id="label-role">
            <h4>(i) Protection, Safety & Security</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b><u>Description</u></b></div>
               <div  class="div-table-col"><b><u>Condition</u></b></div>
               <div  class="div-table-col"><b><u>Remarks</u></b></div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col"><b>Oven Gloves</b></div>
               <div class="div-table-col">
                    <input type="radio" name="OG_Cond" id="OG_Cond" value="Available">Available
                    <input type="radio" name="OG_Cond" id="OG_Cond" value="Not Available">Not Available
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="OG_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div>
               <div class="div-table-col"><b>Uniforms</b></div>
               <div class="div-table-col">
                    <input type="radio" name="Uniform_Cond" id="Uniform_Cond" value="Available">Available
                    <input type="radio" name="Uniform_Cond" id="Uniform_Cond" value="Not Available">Not Available
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="Uniform_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div> 
                 <div class="div-table-col"><b>Shoes</b></div>
               <div class="div-table-col">
                    <input type="radio" name="Shoes_Cond" id="Shoes_Cond" value="Available">Available
                    <input type="radio" name="Shoes_Cond" id="Shoes_Cond" value="Not Available">Not Available
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="Shoes_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div> 
               <div class="div-table-col"><b>Gum Boots</b></div>
               <div class="div-table-col">
                    <input type="radio" name="GB_Cond" id="GB_Cond" value="Cleaner Has">Cleaner Has
                    <input type="radio" name="GB_Cond" id="GB_Cond" value="Does Not Have">Does Not Have
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="GB_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div>
               <div class="div-table-col"><b>Cleaning Gloves</b></div>
               <div class="div-table-col">
                    <input type="radio" name="CG_Cond" id="CG_Cond" value="Cleaner Has">Cleaner Has
                    <input type="radio" name="CG_Cond" id="CG_Cond" value="Does not have">Does not have
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="CG_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div>
               <div class="div-table-col"><b>Dust Mask / Facemask</b></div>
               <div class="div-table-col">
                    <input type="radio" name="DM_Cond" id="DM_Cond" value="In Use">In Use
                    <input type="radio" name="DM_Cond" id="DM_Cond" value="Not In Use">Not In Use
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="DM_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div> 
               
               <div class="div-table-col"><b>Emergency key</b></div>
               <div class="div-table-col">
                    <input type="radio" name="EK_Cond" id="EK_Cond" value="Available">Available
                    <input type="radio" name="EK_Cond" id="EK_Cond" value="Not Available">Not Available
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="EK_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div> 
                 <div class="div-table-col"><b>Fire Extinguishers</b></div>
               <div class="div-table-col">
                    <input type="radio" name="FE_Cond" id="FE_Cond" value="Intact">Intact
                    <input type="radio" name="FE_Cond" id="FE_Cond" value="Not Intact">Not Intact
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="FE_Renrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div> 
                 <div class="div-table-col"><b>Alarm System</b></div>
               <div class="div-table-col">
                    <input type="radio" name="AS_Cond" id="AS_Cond" value="Checked">Checked
                    <input type="radio" name="AS_Cond" id="AS_Cond" value="Not Checked">Not Checked
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="AS_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               
               </div> 
                 <div class="div-table-col"><b>Panic Button - Mobile</b></div>
               <div class="div-table-col">
                    <input type="radio" name="Mobile_Cond" id="Mobile_Cond" value="Working">Working
                    <input type="radio" name="Mobile_Cond" id="Mobile_Cond" value="Not Working">Not Working
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="Mobile_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div> 

               
                 <div class="div-table-col"><b>Panic Button - Fixed</b></div>
               <div class="div-table-col">
                    <input type="radio" name="Fixed_Cond" id="Fixed_Cond" value="Working">Working
                    <input type="radio" name="Fixed_Cond" id="Fixed_Cond" value="Not Working">Not Working
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="Fixed_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div>
                 <div class="div-table-col"><b>Doors and Locking</b></div>
               <div class="div-table-col">
                    <input type="radio" name="DL_Cond" id="DL_Cond" value="Alert">Alert
                    <input type="radio" name="DL_Cond" id="DL_Cond" value="Laxity Observed">Laxity Observed
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="DL_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div>

              
                 <div class="div-table-col"><b>Security Lights</b></div>
               <div class="div-table-col">
                    <input type="radio" name="SL_Cond" id="SL_Cond" value="Working">Working
                    <input type="radio" name="SL_Cond" id="SL_Cond" value="Not Working">Not Working
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="SL_Remrk" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div>
            </div>
        </div>
        </div>
        <label for="role" id="label-role">
                <h4>(ii) Records</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col"><b><u>Description</u></b></div>
                   <div  class="div-table-col"><b><u>Condition</u></b></div>
                   <div  class="div-table-col"><b><u>Remarks</u></b></div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col"><b>Muster Rolls updating</b></div>
                   <div class="div-table-col">
                        <input type="radio" name="MR_Cond" id="MR_Cond" value="Updating">Updating
                    <input type="radio" name="MR_Cond" id="MR_Cond" value="Not Updating">Not Updating
                         
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="MR_Remrk" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
                   <div class="div-table-col"><b>Supervisor</b></div>
                   <div class="div-table-col">
                        <input type="radio" name="SupV_Cond" id="SupV_Cond" value="Before">Before
                    <input type="radio" name="SupV_Cond" id="SupV_Cond" value="After Payment">After Payment
                         
    </div>
    <div class="div-table-col"style="text-align:center">
       <!-- multi-line text input control -->
       <textarea name="SupV_Remrk" id="comment"style="text-align:center"
       placeholder="Enter your comment here">
    </textarea>
      </div>
                   <div class="div-table-col"><b>Bakery Manager</b></div>
                   <div class="div-table-col">
                       <input type="radio" name="BakMng_Cond" id="BakMng_Cond" value="Before">Before
                    <input type="radio" name="BakMng_Cond" id="BakMng_Cond" value="After Payment">After Payment
                         
                   </div>
                   <div class="div-table-col"style="text-align:center">   
                         <!-- multi-line text input control -->
                    <textarea name="BakMng_Remrk" id="comment"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
    
                   </div>
               </div>
    
                </div>
                        
                <label for="role" id="label-role">
                <h4>(iii) Discipline</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col"><b><u>Description</u></b></div>
                   <div  class="div-table-col"><b><u>Condition</u></b></div>
                   <div  class="div-table-col"><b><u>Remarks</u></b></div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col"><b>Punctuality & General Conduct</b></div>
                   <div class="div-table-col">
                        <input type="radio" name="Discpline_Cond" id="Discpline_Cond" value="Excellent">Excellent
                    <input type="radio" name="Discpline_Cond" id="Discpline_Cond" value="Poor">Poor
                         
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="Discpline_Remrk" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
            </div> 
        </div>
     </div>
     <label for="role" id="label-role">
                <h4>(iv) Training</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col"><b><u>Description</u></b></div>
                   <div  class="div-table-col"><b><u>Condition</u></b></div>
                   <div  class="div-table-col"><b><u>Remarks</u></b></div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col"><b>Educating Subordinates</b></div>
                   <div class="div-table-col">
                        <input type="radio" name="Training_Cond" id="Training_Cond" value="Satisfactoy">Satisfactoy
                    <input type="radio" name="Training_Cond" id="Training_Cond" value="Not Satisfactoy">Not Satisfactoy
                         
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="Training_Remrk" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
            </div> 
        </div>
     </div>
                <label for="role" id="label-role"style="text-align:right">
                    <h4>v)Staff Control</h4>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col"style="text-align:center"><b><u>Description</u></b></div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Condition</u></b></div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Remarks</u></b></div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col"><b>Continous 7 days working for casuals</b></div>
                           <div class="div-table-col">
                                <input type="radio" name="SCwrk_Cond" id="SCwrk_Cond" value="Controlled">Controlled
                    <input type="radio" name="SCwrk_Cond" id="SCwrk_Cond" value="Not Controlled">Not Controlled
                                 
            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <textarea name="SCwrk_Remrk" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
                           <div class="div-table-col"><b>Duty Roaster</b></div>
                           <div class="div-table-col">
                                <input type="radio" name="SCdr_Cond" id="SCdr_Cond" value="Displayed">Displayed
                    <input type="radio" name="SCdr_Cond" id="SCdr_Cond" value="Not Displayed">Not Displayed
                                 
            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <textarea name="SCdr_Remrk" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
                           <div class="div-table-col"><b>Exceeding 22 working days by casuals</b></div>
                           <div class="div-table-col">
                                <input type="radio" name="SCexced_Cond" id="SCexced_Cond" value="Allowed">Allowed
                    <input type="radio" name="SCexced_Cond" id="SCexced_Cond" value="Not Allowed">Not Allowed
                                 
            </div>
                           <div class="div-table-col"style="text-align:center">
                               <!-- multi-line text input control -->
                            <textarea name="SCexced_remrk" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div><div class="div-table-col"><b>Standard list of casual employees</b></div>
                           <div class="div-table-col">
                                <input type="radio" name="SCCasual_Cond" id="SCCasual_Cond" value="Updated">Updated
                    <input type="radio" name="SCCasual_Cond" id="SCCasual_Cond" value="Not Updated">Not Updated
                                 
            </div>
                           <div class="div-table-col"style="text-align:center">
                               <!-- multi-line text input control -->
                            <textarea name="SCCasual_Remrk" id="comment"
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

