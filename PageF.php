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
 }?>


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
        .div-table-col1 {
        float: left; /* fix for  buggy browsers */
        display: table-column; 
        align-items: center;        
        width: 130px;         
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
	<form id="form" action = "final.php" method = "post">
       
        <label for="role" id="label-role" style = "text-align: left">
        <h2>10)Maintenance of all Books</h2>
		
		<h4>i)General Repairs</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b><u>Description</u></b></div>
               <div  class="div-table-col"><b><u>Condition</u></b>
                   <div class="div-table-row">
                        <div  class="div-table-col">
                            <div class="div-table-col1"><i>Updated</i></div>
                            <div class="div-table-col1"><i>Not Updated</i></div>
                        </div>
                    </div>
                </div>
               <div  class="div-table-col"><b><u>Remarks</u></b></div>
            </div>
            <div class="div-table-row">
                <div class="div-table-col"><b>Repairs</b></div>
                <div class="div-table-col">
               
                    <div class="div-table-col1"><input type="radio" name="gen_repairs_cond" id="gen_repairs_cond" value="Updated"></div>
                    <div class="div-table-col1"><input type="radio" name="gen_repairs_cond" id="gen_repairs_cond" value="Not Updated"></div>
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input controgen_repairs_condl -->
                <textarea name="gen_repairs_remarks" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div>
           </div>
               <div class="div-table-row">
               <div class="div-table-col"><b>Accidents</b></div>
               <div class="div-table-col">
               
                    <div class="div-table-col1"><input type="radio" name="gen_repair_acc_condition" id="gen_repair_acc_condition" value="Updated"></div>
                   <div class="div-table-col1"><input type="radio" name="gen_repair_acc_condition" id="gen_repair_acc_condition" value="Not Updated"></div>
                     
            </div>
            <div class="div-table-col">
   <!-- multi-line text input control -->
            <textarea name="gen_repairs_acc_remarks" id="comment"style="text-align:center"
            placeholder="Enter your comment here">
            </textarea>
            </div>
        </div>
       </div>
		
		<label for="role" id="label-role">
        <h4>ii) First Aid Kit</h4>
		
		<div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b><u>Description</u></b></div>
               <div  class="div-table-col"><b><u>Condition</u></b></div>
               <div  class="div-table-col"><b><u>Remarks</u></b></div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col"><b>Essentials</b></div>
               <div class="div-table-col">
                
                    <input type="radio" name="firstaid_ess_cond" id="firstaid_ess_cond" value="Sufficient">Sufficient
                    <input type="radio" name="firstaid_ess_cond" id="firstaid_ess_cond" value="Missing">Missing
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="firstaid_ess_remarks" id="comment"
                placeholder="Enter your comment here">
            </textarea>
               </div>
           </div>
                <div class="div-table-row">
               <div class="div-table-col"><b>Using  Record</b></div>
               <div class="div-table-col">
                
                   <input type="radio" name="firstaid_usagerec_cond" id="firstaid_usagerec_cond" value="Updated">Updated
                    <input type="radio" name="firstaid_usagerec_cond" id="firstaid_usagerec_cond" value="Not Updated">Not Updated
                     
                </div>
                <div class="div-table-col">
            <!-- multi-line text input control -->
            <textarea name="firstaid_usagerec_remarks" id="comment"style="text-align:center"
            placeholder="Enter your comment here">
            </textarea>
            </div>
          </div>
         </div>
  
            <label for="role" id="label-role">
                <h4>iii) Miscellaneous Record</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col"><b><u>Description</u></b></div>
                   <div  class="div-table-col"><b><u>Condition</u></b>
                   <div class="div-table-row">
                        <div  class="div-table-col">
                            <div class="div-table-col1"><i>Maintained</i></div>
                            <div class="div-table-col1"><i>Not Maintained</i></div>
                        </div>
                    </div>
                    </div>
                   <div  class="div-table-col"><b><u>Remarks</u></b></div>
               </div>
                <div class="div-table-row">
                     <div class="div-table-col"><b>Generator</b></div>
                   <div class="div-table-col">
                    
                    <div class="div-table-col1"><input type="radio" name="gen_cond" id="gen_cond" value="Maintained"></div>
                    <div class="div-table-col1"><input type="radio" name="gen_cond" id="gen_cond" value="Not Maintained"></div>
                         
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="gen_remarks" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
               </div>
               <div class="div-table-row">
                   <div class="div-table-col"><b>Production</b></div>
                   <div class="div-table-col">
                    
                    <div class="div-table-col1"><input type="radio" name="prod_cond" id="prod_cond" value="Maintained"></div>
                    <div class="div-table-col1"><input type="radio" name="prod_cond" id="prod_cond" value="Not Maintained"></div>
                         
    </div>
    <div class="div-table-col"style="text-align:center">
       <!-- multi-line text input control -->
       <textarea name="prod_remarks" id="comment"style="text-align:center"
       placeholder="Enter your comment here">
    </textarea>
      </div>
  </div>
                   <div class="div-table-row">
                   <div class="div-table-col"><b>Crates records</b></div>
                   <div class="div-table-col">
                   
                   <div class="div-table-col1"><input type="radio" name="crate_rec_cond" id="crate_rec_cond" value="Maintained"></div>
                    <div class="div-table-col1"><input type="radio" name="crate_rec_cond" id="crate_rec_cond" value="Not Maintained"></div>
                         
                   </div>
                   <div class="div-table-col"style="text-align:center">   
                         <!-- multi-line text input control -->
                    <textarea name="crat_remark" id="comment"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
                    </div>
                    <div class="div-table-row">
                     <div class="div-table-col"><b>Stationary book</b></div>
                   <div class="div-table-col">
                 
                    <div class="div-table-col1"><input type="radio" name="station_book_cond" id="station_book_cond" value="Maintained"></div>
                    <div class="div-table-col1"><input type="radio" name="station_book_cond" id="station_book_cond" value="Not Maintained"></div>
                         
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="station_book_remarks" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
               </div>
               <div class="div-table-row">
                     <div class="div-table-col"><b>Protective clothig book</b></div>
                   <div class="div-table-col">
                    
                    <div class="div-table-col1"><input type="radio" name="protect_cloth_book" id="protect_cloth_book" value="Maintained"></div>
                    <div class="div-table-col1"><input type="radio" name="protect_cloth_book" id="protect_cloth_book" value="Not Maintained"></div>
                         
                   </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="protect_cloth_book_rem" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
				   </div>
                   <div class="div-table-row">
                     <div class="div-table-col"><b>Vehicle mileage book</b></div>
                   <div class="div-table-col">
                   
                    <div class="div-table-col1"><input type="radio" name="vehicle_mil_cond" id="vehicle_mil_cond" value="Maintained"></div>
                    <div class="div-table-col1"><input type="radio" name="vehicle_mil_cond" id="vehicle_mil_cond" value="Not Maintained"></div>
                         
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="vehicle_mil_remarks" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
				   </div>
                   <div class="div-table-row">
                     <div class="div-table-col"><b>Weight chart file</b></div>
                   <div class="div-table-col">
                
                    <div class="div-table-col1"><input type="radio" name="weight_chart_line_cond" id="weight_chart_line_cond" value="Maintained"></div>
                    <div class="div-table-col1"><input type="radio" name="weight_chart_line_cond" id="weight_chart_line_cond" value="Not Maintained"></div>
                         
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="weight_chart_file_remarks" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
				   </div>
                   <div class="div-table-row">
                     <div class="div-table-col"><b>Underweight chart file</b></div>
                   <div class="div-table-col">
                
                    <div class="div-table-col1"><input type="radio" name="MngerLding_cond" id="MngerLding_cond" value="Maintained"></div>
                    <div class="div-table-col1"><input type="radio" name="MngerLding_cond" id="MngerLding_cond" value="Not Maintained"></div>
                         
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="underweight_chart_line_remarks" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
                </div>
             </div>

                <label for="role" id="label-role">
                <h2>11)Motor Vehicles</h2>
	
                <div class="div-table">
                    <div class="div-table-row">
                       <div class="div-table-col"><b><u>Description</u></b></div>
                       <div  class="div-table-col"><b><u>Condition</u></b></div>
                       <div  class="div-table-col"><b><u>Remarks</u></b></div>
                    </div>
                   <div class="div-table-row">
                         <div class="div-table-col"><b>Driver allocated one vehicle constant</b></div>
                       <div class="div-table-col">
                    
                           <input type="radio" name="driver_allocation_cond" id="driver_allocation_cond" value="Yes">Yes
                    <input type="radio" name="driver_allocation_cond" id="driver_allocation_cond" value="No">No
                             
        </div>
                       <div class="div-table-col">
                           <!-- multi-line text input control -->
                        <textarea name="driver_allocation_remarks" id="comment"
                        placeholder="Enter your comment here">
                    </textarea>
                       </div>
                   </div>
                    <div class="div-table-row">
                       <div class="div-table-col"><b>Millege per litre of fuel vehicle</b></div>
                       <div class="div-table-col">
                        
                           <input type="radio" name="mil_per_litre_veh_cond" id="mil_per_litre_veh_cond" value="Above Average">Above Average
                    <input type="radio" name="mil_per_litre_veh_cond" id="mil_per_litre_veh_cond" value="Below Average">Below Average
                             
                        </div>
                        <div class="div-table-col">
                        <!-- multi-line text input control -->
                        <textarea name="mil_per_litre_veh_remar" id="comment"
                        placeholder="Enter your comment here">
                        </textarea>
                        </div>
        
                 </div>
                  <div class="div-table-row">
                       <div class="div-table-col"><b>Motor vehicles cleanliness</b></div>
                       <div class="div-table-col">
                       
                            <input type="radio" name="motor_veh_clean_cond" id="motor_veh_clean_cond" value="Satisfactory">Satisfactory
                    <input type="radio" name="motor_veh_clean_cond" id="motor_veh_clean_cond" value="Not Satisfactory">Not Satisfactory
                             
                       </div>
                       <div class="div-table-col">   
                             <!-- multi-line text input control -->
                        <textarea name="motor_veh_clean_remarks" id="comment"style="text-align:center"
                        placeholder="Enter your comment here">
                    </textarea>
                       </div>
                      </div>  
                    </div>
                        
                <label for="role" id="label-role">
                   <h2> 12 )Customer Service and Communication</h2>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col"style="text-align:center"><b><u>Description</u></b></div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Condition</u></b></div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Remarks</u></b></div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col"><b>Customer Complain</b></div>
                           <div class="div-table-col">
                                <input type="radio" name="cus_comp_cond" id="cus_comp_cond" value="High">High
                    <input type="radio" name="cus_comp_cond" id="cus_comp_cond" value="Low">Low
                                 
            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <textarea name="cus_comp_remarks" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
                       </div>
                        <div class="div-table-row">
                           <div class="div-table-col"><b>Implementation of assignments</b></div>
                           <div class="div-table-col">

                                <input type="radio" name="imp_ass_cond" id="imp_ass_cond" value="Satisfactory">Satisfactory
                    <input type="radio" name="imp_ass_cond" id="imp_ass_cond" value="Not Satisfactory">Not Satisfactory
                                 
                        </div>
                            <div class="div-table-col"style="text-align:center">
                            <!-- multi-line text input control -->
                            <textarea name="imp_ass_remarks" id="comment"style="text-align:center"
                            placeholder="Enter your comment here">
                            </textarea>
                            </div>
                        </div>
                         <div class="div-table-row">
                           <div class="div-table-col"><b>Communication</b></div>
                           <div class="div-table-col">
                                <input type="radio" name="comm_cond" id="comm_cond" value="Satisfactory">Satisfactory
                    <input type="radio" name="comm_cond" id="comm_cond" value="Not Satisfactory">Not Satisfactory
                                 
                           </div>
                           <div class="div-table-col"style="text-align:center">   
                                 <!-- multi-line text input control -->
                            <textarea name="comm_remarks" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
                        </div>
                      </div>  
                    </div>
					
			<label for="role" id="label-role">
                   <h2> Accounts</h2>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col"style="text-align:center"><b><u>Description</u></b></div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Condition</u></b></div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Remarks</u></b></div>
                        </div>
                       <div class="div-table-row">
                        <div class="div-table-col"><b>13) .Monitor loading trend so as to plan production accordingly</b></div>
                           <div class="div-table-col">
                                <input type="radio" name="mon_load_trend_cond" id="mon_load_trend_cond" value="Monitor">Monitor
                    <input type="radio" name="mon_load_trend_cond" id="mon_load_trend_cond" value="Not Monitor">Not Monitor
                                 
                        </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <textarea name="mon_load_trend_remarks" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
						   </div>
                            <div class="div-table-row">
                           <div class="div-table-col"><b>14) .Verification of cashflow</b></div>
                           <div class="div-table-col">
                                <input type="radio" name="ver_cashflow_cond" id="ver_cashflow_cond" value="Verified">Verified
                    <input type="radio" name="ver_cashflow_cond" id="ver_cashflow_cond" value="Not Verified">Not Verified
                                 
                            </div>
                            <div class="div-table-col">
                            <!-- multi-line text input control -->
                            <textarea name="ver_cashflow_remarks" id="comment"
                            placeholder="Enter your comment here">
                            </textarea>
                            </div>
                        </div>
                             <div class="div-table-row">             
                           <div class="div-table-col"><b>15) .Verification of bakery stock as per cashflow balances</b></div>
                           <div class="div-table-col">
                                <input type="radio" name="ver_bak_stock_cond" id="ver_bak_stock_cond" value="Verified">Verified
                    <input type="radio" name="ver_bak_stock_cond" id="ver_bak_stock_cond" value="Not Verified">Not Verified
                                 
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                            <textarea name="ver_bak_stock_remarks" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
                       </div>
                            <div class="div-table-row">
                            <div class="div-table-col"><b>16) .Cash verification for cashiers as per cashflow balances</b></div>
                            <div class="div-table-col">
                                <input type="radio" name="cash_ver_cashier_cond" id="cash_ver_cashier_cond" value="Verified">Verified
                    <input type="radio" name="cash_ver_cashier_cond" id="cash_ver_cashier_cond" value="Not Verified">Not Verified
                                  
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <textarea name="cash_ver_cashier_remarks" id="comment"
                             placeholder="Enter your comment here">
                         </textarea>
                            </div>
                        </div>
                             <div class="div-table-row">
                            <div class="div-table-col"><b>17) .Insuring control of debtors and credit limits</b></div>
                            <div class="div-table-col">
                                <input type="radio" name="insuring_cont_debt_cred_cond" id="insuring_cont_debt_cred_cond" value="Monitor">Monitor
                    <input type="radio" name="insuring_cont_debt_cred_cond" id="insuring_cont_debt_cred_cond" value="Not Monitor">Not Monitor
                                  
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <textarea name="insuring_cont_debt_cred_remarks" id="comment"
                             placeholder="Enter your comment here">
                         </textarea>
                            </div>
                        </div>
                       </div> 
                    </div>
        <center>
		<button type="submit" name = "submit" value="submit">
			Submit
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

