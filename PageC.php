<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <!--<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">*/-->
	<title>BAKERY VISIT CHECKLIST</title>
   
   
    <link rel="stylesheet" href="Dummy.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     
<body>
  <div class="sidebar" >
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
        border-radius: 10px;
        font-family: inherit;
        padding-top: 10px;
        padding-bottom: 10px;
        /*padding-left: 10px;*/
        padding-right: 10px;
        display: block;
        width: 100%;
        text-align: center;
        }
        .div-table-row {
        display: table-row;
        /*width: 500px;*/
        clear: both;
        }
        .div-table-col {
          float: left; /* fix for  buggy browsers */
          display: table-column;         
          width: 268px;         
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
        textarea{
            width: 150px;
        }
        </style>
</head>

<body>


<!-- Create Form -->
	<form id="form" action="PageD.php" method="post">
               
        <h2>2) Production</h2>
        <h3>I) Record Keeping - Mixing Chart Maintenance</h3>
        
        <h4><i>Neatness</i></h4>

        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b><u>Description</u></b></div>
               <div  class="div-table-col"><b><u>Condition</u></b></div>
               <div  class="div-table-col"><b><u>Remarks</u></b></div>
            </div>
      
    
           <div class="div-table-row">
             <div class="div-table-col" style="font-weight:bold;">Tideness</div>
               <div class="div-table-col">
                <input type ="radio" value="No overwriting" name="tideness" id="role">No overwriting
                    <input type ="radio" value="overwriting" name="tideness" id="role">overwriting
                                
            </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="comment1" id="comment"
                placeholder="Enter your comment here">
            </textarea>
            </div>
        </div>
        <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Alterations</div>
               <div class="div-table-col">
                <input type ="radio" value="Figures Altered" name="alterations" id="role">Figures Altered
                    <input type ="radio" value="No Alterations" name="alterations" id="role">No Alterations
                                
                
            </div>
            <div class="div-table-col">
            <!-- multi-line text input control -->
            <textarea name="comment2" id="comment">
            </textarea>
            </div>
        </div>
        <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Surprise Checks by manager</div>
               <div class="div-table-col">
                 <input type ="radio" value="Regular" name="manager_checks" id="role">Regular
                    <input type ="radio" value="Never Done" name="manager_checks" id="role">Never Done
               
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <textarea name="comment3" id="comment"style="text-align:center"
                placeholder="Enter your comment here">
            </textarea>
               </div>
           </div>
           <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Mixing Chart and Cash Flow yield</div>
               <div class="div-table-col">
                 <input type ="radio" value="Same figure" name="mixchart_cashflow" id="role">Same figure
                    <input type ="radio" value="Different Figure" name="mixchart_cashflow" id="role">Different Figure 
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <textarea name="comment4" id="comment"style="text-align:center"
                placeholder="Enter your comment here">
            </textarea>
               </div>
           </div>
           <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Mixing Chart / Cash Flow Production</div>
               <div class="div-table-col">
                <input type ="radio" value="Same figure" name="mixchart_production" id="role">Same figure
                    <input type ="radio" value="Different Figure" name="mixchart_production" id="role">Different Figure 
               
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <textarea name="comment5" id="comment"style="text-align:center"
                placeholder="Enter your comment here">
            </textarea>
               </div>
            </div>
        </div>
            
               <h4>  II) Production and Process cost Control</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col"><b><u>Description</u></b></div>
                   <div  class="div-table-col"><b><u>Condition</u></b></div>
                   <div  class="div-table-col"><b><u>Remarks</u></b></div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col" style="font-weight:bold;">Utto Consumption</div>
                   <div class="div-table-col">
                     <input type ="radio" value="As Per Std " name="consumption" id="role">As Per Std 
                    <input type ="radio" value="Excessive" name="consumption" id="role">Excessive 
    </div>
                   <div class="div-table-col"style="text-align:center">
                       <!-- multi-line text input control -->
                    <textarea name="comment6" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                </textarea>
               </div>
           </div>
           <div class="div-table-row">
                   <div class="div-table-col" style="font-weight:bold;">Sell By Date</div>
                   <div class="div-table-col">
                    <input type ="radio" value="As Per Std " name="sellbydate" id="role">As Per Std 
                    <input type ="radio" value="Excessive" name="sellbydate" id="role">Excessive 
                    
                </div>
                    <div class="div-table-col" style="text-align:center">
                    <!-- multi-line text input control -->
                    <textarea name="comment7" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                    </textarea>
                    </div>
                </div>
                <div class="div-table-row">
                   <div class="div-table-col" style="font-weight:bold;">Bread Returns</div>
                   <div class="div-table-col">
                    <input type ="radio" value="Controlled" name="breadreturns" id="role">Controlled
                    <input type ="radio" value="Uncontrolled" name="breadreturns" id="role">Uncontrolled
             
                   </div>
                   <div class="div-table-col"style="text-align:center">   
                         <!-- multi-line text input control -->
                    <textarea name="comment8" id="comment"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
               </div>
               <div class="div-table-row">
                   <div class="div-table-col" style="font-weight:bold;">Damage Polybags</div>
                   <div class="div-table-col">
                    <input type ="radio" value="Controlled" name="damagepolybags" id="role">Controlled
                    <input type ="radio" value="Uncontrolled" name="damagepolybags" id="role">Uncontrolled
                   
                   </div>
                   <div class="div-table-col"style="text-align:center">   
                         <!-- multi-line text input control -->
                    <textarea name="comment9" id="comment"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
               </div>
               <div class="div-table-row">
                   <div class="div-table-col" style="font-weight:bold;">Process Flow</div>
                   <div class="div-table-col">
                    <input type ="radio" value="smooth" name="processflow" id="role">Smooth
                    <input type ="radio" value="Delayed" name="processflow" id="role">Delayed
            
                   </div>
                   <div class="div-table-col"style="text-align:center">   
                         <!-- multi-line text input control -->
                    <textarea name="comment10" id="comment"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
               </div>
               <div class="div-table-row">
                   <div class="div-table-col" style="font-weight:bold;">Efficiency of Slicing</div>
                   <div class="div-table-col">
                    <input type ="radio" value="As Per Std " name="slicing" id="role">As Per Std 
                    <input type ="radio" value="Excessive" name="slicing" id="role">Excessive 
                    
                   </div>
                   <div class="div-table-col"style="text-align:center">   
                         <!-- multi-line text input control -->
                    <textarea name="comment11" id="comment"
                    placeholder="Enter your comment here">
                </textarea>
                   </div>
                </div>
              </div>
                <h2>3) Bread / Dough Weight</h2>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b><u>Description</u></b></div>
               <div class="div-table-col"><b><u>Condition</u></b>
                    <div class="div-table-row">
                        <div  class="div-table-col">
                            <div class="div-table-col1"><i>Correct</i></div>
                            <div class="div-table-col1"><i>Incorrect</i></div>
                        </div>
                    </div>
               </div>
               <div class="div-table-col"><b><u>Remarks</u></b></div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col" style="font-weight:bold;">Dividing Range</div>
                <div class="div-table-col">
                <div class="div-table-col1"><input type ="radio" value="correct" name="dividing_range" id="role"></div> 
                <div class="div-table-col1"><input type ="radio" value="incorrect" name="dividing_range" id="role"></div>
               
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <textarea name="comment12" id="comment"
                placeholder="Enter your comment here">
                </textarea>
               </div>
           </div>
           <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Bread Weight</div>
               <div class="div-table-col">
                <div class="div-table-col1"><input type ="radio" value="correct" name="breadweight" id="role"></div> 
                <div class="div-table-col1"><input type ="radio" value="incorrect" name="breadweight" id="role"></div>
                </div>
                <div class="div-table-col">
                <!-- multi-line text input control -->
                    <textarea name="comment13" id="comment">
                    </textarea>
                </div>
            </div>
        </div>
        <h2>4.Yield</h2>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b><u>Description</u></b></div>
               <div class="div-table-col"><b><u>Condition</u></b></div>
               <div class="div-table-col"><b><u>Remarks</u></b></div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col" style="font-weight:bold;">Bread Yield</div>
               <div class="div-table-col">
                 <input type ="radio" value="attained" name="bread_yield" id="role">Attained 
                    <input type ="radio" value="Not Attained" name="bread_yield" id="role">Not Attained
                
               </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="comment14" id="comment"
                    placeholder="Enter your comment here">
                    </textarea>
               </div>
             </div>
            </div>
         
                    <h2>5) Control Stock - Store arrangement</h2>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col" style="text-align:center"><b><u>Description</u></b></div>
                           <div class="div-table-col" style="text-align:center"><b><u>Condition</u></b>
                               <div class="div-table-row">
                                    <div  class="div-table-col">
                                        <div class="div-table-col1"><i>Well Arranged</i></div>
                                        <div class="div-table-col1"><i>Poorly Arranged</i></div>
                                    </div>
                                </div>
                            </div> 
                           <div class="div-table-col" style="text-align:center"><b><u>Remarks</u></b></div>
                           </div>                       
                        <div class="div-table-row">
                          <div class="div-table-col" style="font-weight:bold;">Sell By Tapes</div>
                           <div class="div-table-col">
                            <div class="div-table-col1"><input type ="radio" value="well arranged" name="tapes" id="role"></div>
                            <div class="div-table-col1"><input type ="radio" value="Poorly Arranged" name="tapes" id="role"></div>
                          
                            </div>
                           <div class="div-table-col"style="text-align:center">
                               <!-- multi-line text input control -->
                            <textarea name="comment15" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col" style="font-weight:bold;">Ingredients</div>
                           <div class="div-table-col">
                            <div class="div-table-col1"><input type ="radio" value="well arranged" name="ingredients" id="role"></div> 
                            <div class="div-table-col1"><input type ="radio" value="Poorly Arranged" name="ingredients" id="role"></div>
                            </div>
                        <div class="div-table-col"style="text-align:center">
                            <!-- multi-line text input control -->
                            <textarea name="comment16" id="comment"
                            placeholder="Enter your comment here">
                            </textarea>
                        </div>
                        </div>
                        <div class="div-table-row">
                           <div class="div-table-col" style="font-weight:bold;"> Gunny Bags</div>
                           <div class="div-table-col">
                            <div class="div-table-col1"><input type ="radio" value="well arranged" name="gunnybags" id="role"></div> 
                            <div class="div-table-col1"><input type ="radio" value="Poorly Arranged" name="gunnybags" id="role"></div>
                           
                           </div>
                           <div class="div-table-col"style="text-align:center">   
                                 <!-- multi-line text input control -->
                            <textarea name="comment17" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
                       </div>
                       <div class="div-table-row">
                            <div class="div-table-col" style="font-weight:bold;">Flour</div>
                            <div class="div-table-col">
                              <div class="div-table-col1"><input type ="radio" value="well arranged" name="flour" id="role"></div>
                            <div class="div-table-col1"><input type ="radio" value="Poorly Arranged" name="flour" id="role"></div>
                              
                            </div>
                            <div class="div-table-col"style="text-align:center">   
                                  <!-- multi-line text input control -->
                             <textarea name="comment18" id="comment"
                             placeholder="Enter your comment here">
                             </textarea>
                            </div>
                        </div>
                        <div class="div-table-row">
                            <div class="div-table-col" style="font-weight:bold;">Polybags</div>
                            <div class="div-table-col">
                               <div class="div-table-col1"><input type ="radio" value="well arranged" name="polybags" id="role"></div>
                                <div class="div-table-col1"><input type ="radio" value="Poorly Arranged" name="polybags" id="role"></div>
                              
                            
                            </div>
                            <div class="div-table-col"style="text-align:center">   
                                  <!-- multi-line text input control -->
                             <textarea name="comment19" id="comment"
                             placeholder="Enter your comment here">
                             </textarea>
                            </div>
                        </div>
                        <div class="div-table-row">
                            <div class="div-table-col" style="font-weight:bold;">Damaged Polybags</div>
                            <div class="div-table-col">
                            <div class="div-table-col1"><input type ="radio" value="well arranged" name="damagedpolybags" id="role"></div>
                            <div class="div-table-col1"><input type ="radio" value="Poorly Arranged" name="damagedpolybags" id="role"></div>
                             
                            </div>
                            <div class="div-table-col"style="text-align:center">   
                                  <!-- multi-line text input control -->
                                <textarea name="comment20" id="comment"
                                placeholder="Enter your comment here">
                                </textarea>
                            </div>
                        </div>
                       </div>  
                
                    <h2>6) Bread Quality</h2>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col"style="text-align:center"><b><u>Description</u></b></div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Condition</u></b></div>
                           <div  class="div-table-col"style="text-align:center"><b><u>Remarks</u></b></div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col" style="font-weight:bold;">Market Returns</div>
                                <div class="div-table-col">
                                   
                                        <input type ="radio" value="high" name="mkt_returns" id="mkt_returns">high 
                                        <input type ="radio" value="low" name="mkt_returns" id="mkt_returns">low
                                 
                                </div>
                           <div class="div-table-col"style="text-align:center">
                               <!-- multi-line text input control -->
                            <textarea name="comment21" id="comment"
                            placeholder="Enter your comment here">
                            </textarea>
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col" style="font-weight:bold;">Sell by Date Returns</div>
                           <div class="div-table-col">
                              <input type ="radio" value="2 Days" name="sell_by_date_returns" id="role">2 Days
                    <input type ="radio" value="More than 2" name="sell_by_date_returns" id="role">More than 2 
                           </div>
                        <div class="div-table-col"style="text-align:center">
                        <!-- multi-line text input control -->
                        <textarea name="comment22" id="comment"style="text-align:center"
                        placeholder="Enter your comment here">
                        </textarea>
                        </div>
                    </div>
                    <div class="div-table-row">
                           <div class="div-table-col" style="font-weight:bold;">Return Classified goods and damages</div>
                           <div class="div-table-col">
                            
                               <input type ="radio" value="Segregated" name="return_goods" id="role">Segregated
                    <input type ="radio" value="Not Segregated" name="return_goods" id="role">Not Segregated 
                                 
                           </div>
                           <div class="div-table-col"style="text-align:center">   
                                 <!-- multi-line text input control -->
                            <textarea name="comment23" id="comment"
                            placeholder="Enter your comment here">
                        </textarea>
                           </div>
                       </div>
                       <div class="div-table-row">
                            <div class="div-table-col" style="font-weight:bold;">Bread Color Generally</div>
                            <div class="div-table-col">
                           
                               
                               <input type ="radio" value="Segregated" name="bread_color" id="role">Segregated
                    <input type ="radio" value="Not Segregated" name="bread_color" id="role">Not Segregated 
                                 
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <textarea name="comment24" id="comment"
                             placeholder="Enter your comment here">
                             </textarea>
                            </div>
                        </div>
                        <div class="div-table-row">
                            <div class="div-table-col" style="font-weight:bold;">Shape and size</div>
                            <div class="div-table-col">

                               
                               <input type ="radio" value="okay" name="shape_size" id="role">Okay
                    <input type ="radio" value="Not Okay" name="shape_size" id="role">Not Okay 
                           
                            </div>
                            <div class="div-table-col"style="text-align:center">   
                                  <!-- multi-line text input control -->
                                    <textarea name="comment25" id="comment"
                                    placeholder="Enter your comment here">
                                    </textarea>
                            </div>
                        </div>
                        <div class="div-table-row">
                            <div class="div-table-col" style="font-weight:bold;">Internal Texture</div>
                            <div class="div-table-col">

                               <input type ="radio" value="okay" name="internal_texture" id="role">Okay
                    <input type ="radio" value="Not Okay" name="internal_texture" id="role">Not Okay 
                            
                            </div>
                            <div class="div-table-col"style="text-align:center">   
                                  <!-- multi-line text input control -->
                                <textarea name="comment26" id="comment"
                                placeholder="Enter your comment here">
                                </textarea>
                            </div>
                        </div>
                       </div>  

                    <h2>7)Finished Product</h2>
                    <label for="role" id="label-role">
                        <h4>Balance Maintenance</h4>
                    </label>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b><u>Description</u></b></div>
               <div  class="div-table-col"><b><u>Condition</u></b></div>
               <div  class="div-table-col"><b><u>Remarks</u></b></div>
            </div>
        
           <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Variety by variety physical balance</div>
               <div class="div-table-col">

                               <input type ="radio" value="agrees" name="variety_by_varietyphysicalbalance" id="role">Agrees
                    <input type ="radio" value="Differs" name="variety_by_varietyphysicalbalance" id="role">Differs
               
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <textarea name="comment27" id="comment"style="text-align:center"
                placeholder="Enter your comment here">
            </textarea>
               </div>
           </div>
           <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Stock Levels</div>
               <div class="div-table-col">
                 <input type ="radio" value="high" name="stocklevels" id="role">High
                    <input type ="radio" value="low" name="stocklevels" id="role">Low
                    
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                    <textarea name="comment28" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                    </textarea>
               </div>
           </div>
           <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Rotation of Stocks</div>
               <div class="div-table-col">
                 <input type ="radio" value="first in first out" name="rotationofstocks" id="role"> Fisrt In First Out
                    <input type ="radio" value="haphazard" name="rotationofstocks" id="role">haphazard
                    
             
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <textarea name="comment29" id="comment"style="text-align:center"
                placeholder="Enter your comment here">
            </textarea>
               </div>
           </div>
           <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Multiple sell by dates Packing</div>
               <div class="div-table-col">
                <input type ="radio" value="allowed" name="multiple_sell" id="role"> Allowed
                    <input type ="radio" value="not allowed" name="multiple_sell" id="role">Not Allowed
              
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                    <textarea name="comment30" id="comment"style="text-align:center"
                    placeholder="Enter your comment here">
                    </textarea>
               </div>
            </div>
          </div>
       
        <center>
        	<button type="submit" name="submit">Next</button>
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

