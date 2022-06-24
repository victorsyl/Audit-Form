<?php 
session_start();
if(! $_SESSION['user']['email']){
  header("location: index.php"); 
}
include ("fetchBranches.php");
?>
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
        <span class="admin_name"><?php echo $_SESSION['user']['username']; ?></span>
        
      </div>
    </nav>

 


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
            width: 150px;
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
  /*width: 500px;*/
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
textarea{
    width: 150px;
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
<span id="error">
 <!---- Initializing Session for errors --->
</span>
<!-- Create Form -->
	<form id="form" action="pageB.php" method="post">
        <img src="./images/supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h1>BAKERY VISIT CHECKLIST</h1>
        <label><b>Branch Name</b></label>
        <select name="branch_id" id="branch_id" onclick="GetDetail(this.value)">
        <?php
        if($result = mysqli_query($link, $sql)){
          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
              echo "<option value=". $row['branch_id']."> ". $row['branchname']. "</option>";
            }
            mysqli_free_result($result);
          }
      }
        ?>
    </select>
           <!-- <input type='text' name="branchname" 
                id='branchname' class='form-control'
                placeholder='branchname'
                onkeyup="GetDetail(this.value)" value=""> -->
            <br><br> 
            <label><b>Branch Manager:</b></label>
                <input type="text" name="branchmanager" 
                    id="branchmanager" class="form-control"
                    placeholder='branchmanager'
                value="" readonly>

                <label><b>Operations Manager:</b></label>
                    <input type="text" name="opsmanager" 
                        id="opsmanager" class="form-control"
                        placeholder='operationsmanager'
                        value="" readonly><br>
    
    <script>  
  // onkeyup event will occur when the user 
  // release the key and calls the function
  // assigned to this event
  function GetDetail(id) {
    console.log(id);
      if (id.length == 0) {
          document.getElementById("branchmanager").value = "";
          document.getElementById("opsmanager").value = "";
          return;
      }
      else {

          // Creates a new XMLHttpRequest object
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {

              // Defines a function to be called when
              // the readyState property changes
              if (this.readyState == 4 && this.status == 200) {
      
                  // Typical action to be performed
                  // when the document is ready
                  var myObj = JSON.parse(this.responseText);

                  // Returns the response data as a
                  // string and store this array in
                  // a variable assign the value 
                  // received to first name input field 
                  document.getElementById("branchmanager").value = myObj[0];  
                  // Assign the value received to
                  // last name input field
                  document.getElementById("opsmanager").value = myObj[1];
              }
          };

          // xhttp.open("GET", "filename", true);
          xmlhttp.open("GET", "trial3.php?id=" + id, true);
            
          // Sends the request to the server
          xmlhttp.send();
      }
  }
</script>
       
  <!--  <input type="date" name="formdate">Date</input>
        <p id="date" name="trxdate"></p> -->
      
   <LABEL name="trxdate">
<?php 
echo date("d/m/Y");
?>
</LABEL>     

        
        <h2>1) Bakery Hygiene</h2>
        <label for="role" id="label-role">
            <h4> Floor cleanliness </h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><u><b>Description</b></u></div>
               <div  class="div-table-col"><u><b>Condition</b></u></div>
               <div  class="div-table-col"><u><b>Remarks</b></u></div>
            </div>
            <div class="div-table-row">
               <div class="div-table-col" style="font-weight:bold;">Litter sweeping</div>
               <div class="div-table-col">
                    <input type ="radio" value="Excessive" name="sweepcondition" id="role">Excessive
                    <input type ="radio" value="Litter Present" name="sweepcondition" id="role">Litter Present
                   
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <textarea name="sweepremark" id="comment" placeholder="Enter your comment here"></textarea>
                </div>
            </div>
            <div class="div-table-row">
               <div style="font-weight:bold;" class="div-table-col">Washing</div>
               <div class="div-table-col">
               	 <input type ="radio" value="As Per Std" name="washcondition" id="role">As Per Std
                    <input type ="radio" value="Excessive" name="washcondition" id="role">Excessive
                </div>
                <div class="div-table-col">
                   <!-- multi-line text input control -->
                   <textarea name="washremark" id="comment"style="text-align:center" placeholder="Enter your comment here"></textarea>
                </div>
            </div>
            <div class="div-table-row">
               <div style="font-weight:bold;" class="div-table-col">Dividing table cleanliness</div>
               <div class="div-table-col">
               	<input type ="radio" value="Cleaned" name="tablecondition" id="role">Cleaned
                    <input type ="radio" value="Not Cleaned" name="tablecondition" id="role">Not Cleaned
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                    <textarea name="tableremark" id="comment" style="text-align:center" placeholder="Enter your comment here"></textarea>
                </div>
           </div>
          </div>
            <label for="role" id="label-role">
                <h4>Toilet cleanliness</h4>
            <div class="div-table">
                <div class="div-table-row">
                    <div class="div-table-col"><u><b>Description</b></u></div>
                    <div  class="div-table-col"><u><b>Condition</b></u></div>
                    <div  class="div-table-col"><u><b>Remarks</b></u></div>
                </div>
               <div class="div-table-row">
                    <div class="div-table-col" style="font-weight:bold;">Foul Smell</div>
                    <div class="div-table-col">
                    	<input type ="radio" value="Smelly" name="smellcondition" id="role">Smelly
                        <input type ="radio" value="Not Smelly" name="smellcondition" id="role">Not Smelly
                    </div>
                   <div class="div-table-col">
                        <textarea name="smellremark" id="comment"style="text-align:center" placeholder="Enter your comment here"></textarea>
                   </div>
               </div>
               <div class="div-table-row">
                   <div class="div-table-col" style="font-weight:bold;">Mopping of Floor</div>
                    <div class="div-table-col">
                    	<input type ="radio" value="Excellent" name="floorcondition" id="role">Excellent
                    <input type ="radio" value="Poor" name="floorcondition" id="role">Poor
                      
                    </div>
                    <div class="div-table-col">
                       <!-- multi-line text input control -->
                       <textarea name="floorremark" id="comment"style="text-align:center" placeholder="Enter your comment here"></textarea>
                    </div>
                </div>
               <div class="div-table-row">
                   <div class="div-table-col" style="font-weight:bold;">Disposal of Garbage</div>
                   <div class="div-table-col">
                   	<input type ="radio" value="On Time" name="garbagecondition" id="role">On Time
                    <input type ="radio" value="Delayed" name="garbagecondition" id="role">Delayed
                   
                   </div>
                   <div class="div-table-col"style="text-align:center">   
                         <!-- multi-line text input control -->
                        <textarea name="garbageremark" id="comment" placeholder="Enter your comment here"></textarea>
                   </div>
               </div>
            </div>
                <label for="role" id="label-role"style="text-align:center">
                <h4>Flies Inside Bakery</h4>
                <div class="div-table">
                    <div class="div-table-row">
                        <div class="div-table-col"><u><b>Description</b></u></div>
                        <div  class="div-table-col"><u><b>Condition</b></u></div>
                        <div  class="div-table-col"><u><b>Remarks</b></u></div>
                    </div>
                   <div class="div-table-row">
                         <div class="div-table-col" style="font-weight:bold;">Fly Catchers</div>
                       <div class="div-table-col">
                       		<input type ="radio" value="All working" name="catchercondition" id="role">All working
                    <input type ="radio" value="Some Broken" name="catchercondition" id="role">Some Broken
                        </div>
                       <div class="div-table-col"style="text-align:center">
                           <!-- multi-line text input control -->
                            <textarea name="catcherremark" id="comment" placeholder="Enter your comment here"></textarea>
                       </div>
                   </div>
                   <div class="div-table-row">
                       <div class="div-table-col" style="font-weight:bold;">Incidence of Flies</div>
                       <div class="div-table-col">
                       	<input type ="radio" value="Abundant" name="fliescondition" id="role">Abundant
                    <input type ="radio" value="Scanty" name="fliescondition" id="role">Scanty
                        </div>
                        <div class="div-table-col">
                           <!-- multi-line text input control -->
                           <textarea name="fliesremark" id="comment"style="text-align:center" placeholder="Enter your comment here"></textarea>
                        </div>
                    </div>
                    <div class="div-table-row">
                       <div class="div-table-col" style="font-weight:bold;">Cockroaches</div>
                       <div class="div-table-col">
                       	<input type ="radio" value="Abundant" name="roachescondition" id="role">Abundant
                    <input type ="radio" value="Scanty" name="roachescondition" id="role">Scanty
            
                       </div>
                       <div class="div-table-col">   
                             <!-- multi-line text input control -->
                            <textarea name="roachesremark" id="comment"style="text-align:center" placeholder="Enter your comment here"></textarea>
                       </div>
                   </div>
                   <div class="div-table-row">
                        <div class="div-table-col" style="font-weight:bold;">Rats Bating</div>
                        <div class="div-table-col">
                        	<input type ="radio" value="Upto Date" name="ratscondition" id="role">Upto Date
                    <input type ="radio" value="Not Upto Date" name="ratscondition" id="role">Not Upto Date
                            
                        </div>
                        <div class="div-table-col">   
                              <!-- multi-line text input control -->
                            <textarea name="ratsremark" id="comment"style="text-align:center" placeholder="Enter your comment here"></textarea>
                        </div>
                    </div>
                    <div class="div-table-row">
                       <div class="div-table-col" style="font-weight:bold;">Cleaning crates</div>
                       <div class="div-table-col">
                       	<input type ="radio" value="Satisfactory" name="cratescondition" id="role">Satisfactory
                    <input type ="radio" value="Not Satisfactory" name="cratescondition" id="role">Not Satisfactory
                     
                       </div>
                       <div class="div-table-col">   
                             <!-- multi-line text input control -->
                            <textarea name="cratesremark" id="comment"style="text-align:center" placeholder="Enter your comment here"></textarea>
                       </div>
                   </div>
                </div>  
                <label for="role" id="label-role"style="text-align:center">
                    <h4>II )Uniforms Worn by staff</h4>
                    <div class="div-table">
                        <div class="div-table-row">
                            <div class="div-table-col"><u><b>Description</b></u></div>
                            <div  class="div-table-col"><u><b>Condition</b></u></div>
                            <div  class="div-table-col"><u><b>Remarks</b></u></div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col" style="font-weight:bold;">Uniforms available to all production persons </div>
                            <div class="div-table-col">
                            		<input type ="radio" value="Provided" name="uniformcondition" id="role">Provided
                    <input type ="radio" value="Not Provided" name="uniformcondition" id="role">Not Provided
                               
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                                <textarea name="uniformremark" id="comment" placeholder="Enter your comment here"></textarea>
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col" style="font-weight:bold;">Supervisor Overcoat Clean State</div>
                           <div class="div-table-col">
                           	<input type ="radio" value="Satisfactory" name="scoatcondition" id="role">Satisfactory
                            <input type ="radio" value="Not Satisfactory" name="scoatcondition" id="role">Not Satisfactory
                               
                            </div>
                            
                                <div class="div-table-col">
                               <!-- multi-line text input control -->
                               <textarea name="scoatremark" id="comment" placeholder="Enter your comment here"></textarea>
                            </div>
                        </div>
                       <div class="div-table-row">
                           <div class="div-table-col" style="font-weight:bold;">Oven Man Uniform Maintained Clean</div>
                           <div class="div-table-col">
                           	<input type ="radio" value="Satisfactory" name="ovenmancondition" id="role">Satisfactory
                    <input type ="radio" value="Not Satisfactory" name="ovenmancondition" id="role">Not Satisfactory
                          
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                                <textarea name="ovenmanremark" id="comment" placeholder="Enter your comment here"></textarea>
                           </div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col" style="font-weight:bold;">Slicer Uniform Maintained Clean</div>
                            <div class="div-table-col">
                        		<input type ="radio" value="Satisfactory" name="suniformcondition" id="role">Satisfactory
                                <input type ="radio" value="Not Satisfactory" name="suniformcondition" id="role">Not Satisfactory  
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                                <textarea name="suniformremark" id="comment" placeholder="Enter your comment here"></textarea>
                            </div>
                        </div>  
                    </div>
                
                    <center>
            		  <br><button type="submit" name="submit">Next</button> 
                    </center>
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

