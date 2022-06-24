<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
	<title>Form</title>
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
          <a href="../Dashboard.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../Register.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
		<li>
          <a href="fetch.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Form</span>			
          </a>
        </li>
		<li>
          <a href="../export.php">
            <i class='bx bx-box' ></i>
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
        <span class="admin_name">User</span>
        
      </div>
    </nav>
    <div class="home-content">
<head>
    <style>

        /* Styling the Body element i.e. Color,
        Font, Alignment */
        body {
            background-color: #f5f5f5;
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
        h3{
            color:midnightblue;
        }
        h4{
            color:darkblue;
            text-align: left;
        }
          
                .div-table {
          display: table;         
          border: 1px solid ;
          border-spacing: 0 
                    border-radius: 20px;
                    font-family: inherit;
                    padding-top: 10px;
          padding-bottom: 10px;
          padding-left: 50px;
          padding-right: 10px;
                    display: block;
                    width: 95%;
                    /*text-align: center;*/
        }
        .div-table-row {
          display: table-row;
          width: 500px;
          clear: both;
        }
        .div-table-col {
          float: left; /* fix for  buggy browsers */
          display: table-column;
            margin-top: 10px;         
          width: 300px;         
        }
        .div-table-col2 {
          float: left; /* fix for  buggy browsers */
          display: table-column;
           margin-top: 10px;         
          width: 180px;         
        }
                .form-group{
          margin-bottom:20px;
        }
        input{
           
        }
        .success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
    </style>
</head>

<body>
    <script>  
  function GetDetail(str) {
      if (str.length == 0) {
        document.getElementById("branchname").value = ""; 
        document.getElementById("branchmanager").value = "";  
        document.getElementById("opsmanager").value = "";
        document.getElementById("TransactionDate").value = "";
        document.getElementById("sweepcondition").value = ""; 
        document.getElementById("sweepremark").value = "";
        document.getElementById("washcondition").value = ""; 
        document.getElementById("washremark").value = "";  
        document.getElementById("tablecondition").value = "";
        document.getElementById("tableremark").value = ""; 
        document.getElementById("smellcondition").value = "";
        document.getElementById("smellremark").value = ""; 
        document.getElementById("floorcondition").value = "";  
        document.getElementById("floorremark").value = "";
        document.getElementById("garbagecondition").value = ""; 
        document.getElementById("garbageremark").value = "";
        document.getElementById("catchercondition").value = ""; 
        document.getElementById("catcherremark").value = "";  
        document.getElementById("fliescondition").value = "";
        document.getElementById("fliesremark").value = ""; 
        document.getElementById("roachescondition").value = "";
        document.getElementById("roachesremark").value = ""; 
        document.getElementById("ratscondition").value = "";  
        document.getElementById("ratsremark").value = "";
        document.getElementById("cratescondition").value = ""; 
        document.getElementById("cratesremark").value = "";
        document.getElementById("uniformcondition").value = ""; 
        document.getElementById("uniformremark").value = "";  
        document.getElementById("scoatcondition").value = "";
        document.getElementById("scoatremark").value = ""; 
        document.getElementById("ovenmancondition").value = "";
        document.getElementById("ovenmanremark").value = ""; 
        document.getElementById("suniformcondition").value = "";  
        document.getElementById("suniformremark").value = "";
        document.getElementById("m1mechanical").value = ""; 
        document.getElementById("m1layout").value = "";  
        document.getElementById("m1remark").value = "";
        document.getElementById("m2mechanical").value = ""; 
        document.getElementById("m2layout").value = "";
        document.getElementById("m2remark").value = ""; 
        document.getElementById("dmechanical").value = "";  
        document.getElementById("dlayout").value = "";
        document.getElementById("dremark").value = ""; 
        document.getElementById("p1mechanical").value = "";
        document.getElementById("p1layout").value = ""; 
        document.getElementById("p1remark").value = "";  
        document.getElementById("p2mechanical").value = "";
        document.getElementById("p2layout").value = ""; 
        document.getElementById("p2remark").value = "";
        document.getElementById("p3mechanical").value = ""; 
        document.getElementById("p3layout").value = "";  
        document.getElementById("p3remark").value = "";
        document.getElementById("o1mechanical").value = ""; 
        document.getElementById("o1layout").value = "";
        document.getElementById("o1remark").value = ""; 
        document.getElementById("o2mechanical").value = "";  
        document.getElementById("o2layout").value = "";
        document.getElementById("o2remark").value = ""; 
        document.getElementById("o3mechanical").value = "";
        document.getElementById("o3layout").value = ""; 
        document.getElementById("o3remark").value = "";  
        document.getElementById("slicermechanical").value = "";
        document.getElementById("slicerlayout").value = "";
        document.getElementById("slicerremark").value = ""; 
        document.getElementById("gmechanical").value = "";  
        document.getElementById("glayout").value = "";
        document.getElementById("gremark").value = "";  
        document.getElementById("edsmechanical").value = "";
        document.getElementById("edslayout").value = ""; 
        document.getElementById("edsremark").value = "";
        document.getElementById("scalemechanical").value = ""; 
        document.getElementById("scalelayout").value = "";  
        document.getElementById("scaleremark").value = "";
        document.getElementById("maintenanceoften").value = ""; 
        document.getElementById("maintenancestate").value = "";
        document.getElementById("maintenanceremark").value = ""; 
        document.getElementById("tinsmechanical").value = "";  
        document.getElementById("tinslayout").value = "";
        document.getElementById("tinsremark").value = ""; 
        document.getElementById("wiresmechanical").value = "";
        document.getElementById("wireslayout").value = ""; 
        document.getElementById("wiresremark").value = "";
        document.getElementById("tideness").value = ""; 
        document.getElementById("comment1").value = "";  
        document.getElementById("alterations").value = "";
        document.getElementById("comment2").value = ""; 
        document.getElementById("manager_checks").value = "";
        document.getElementById("comment3").value = ""; 
        document.getElementById("mixchart_cashflow").value = "";  
        document.getElementById("comment4").value = "";
        document.getElementById("mixchart_production").value = ""; 
        document.getElementById("comment5").value = "";
        document.getElementById("consumption").value = ""; 
        document.getElementById("comment6").value = "";  
        document.getElementById("sellbydate").value = "";
        document.getElementById("comment7").value = ""; 
        document.getElementById("breadreturns").value = "";
        document.getElementById("comment8").value = ""; 
        document.getElementById("damagepolybags").value = "";  
        document.getElementById("comment9").value = "";
        document.getElementById("processflow").value = ""; 
        document.getElementById("comment10").value = "";
        document.getElementById("slicing").value = ""; 
        document.getElementById("comment11").value = "";  
        document.getElementById("dividing_range").value = "";
        document.getElementById("comment12").value = ""; 
        document.getElementById("breadweight").value = "";
        document.getElementById("comment13").value = ""; 
        document.getElementById("bread_yield").value = "";  
        document.getElementById("comment14").value = "";
        document.getElementById("tapes").value = "";
        document.getElementById("comment15").value = ""; 
        document.getElementById("ingredients").value = "";  
        document.getElementById("comment16").value = "";
        document.getElementById("gunnybags").value = "";  
        document.getElementById("comment17").value = "";
        document.getElementById("flour").value = ""; 
        document.getElementById("comment18").value = "";
        document.getElementById("polybags").value = ""; 
        document.getElementById("comment19").value = "";  
        document.getElementById("damagedpolybags").value = "";
        document.getElementById("comment20").value = ""; 
        document.getElementById("mkt_returns").value = "";
        document.getElementById("comment21").value = ""; 
        document.getElementById("sell_by_date_returns").value = "";  
        document.getElementById("comment22").value = "";
        document.getElementById("return_goods").value = ""; 
        document.getElementById("comment23").value = "";
        document.getElementById("bread_color").value = ""; 
        document.getElementById("comment24").value = "";
        document.getElementById("shape_size").value = "";
        document.getElementById("comment25").value = ""; 
        document.getElementById("internal_texture").value = "";
        document.getElementById("comment26").value = ""; 
        document.getElementById("variety_by_varietyphysicalbalance").value = "";  
        document.getElementById("comment27").value = "";
        document.getElementById("stocklevels").value = ""; 
        document.getElementById("comment28").value = "";
        document.getElementById("rotationofstocks").value = ""; 
        document.getElementById("comment29").value = "";
        document.getElementById("multiple_sell").value = ""; 
        document.getElementById("comment30").value = "";
        document.getElementById("MngerLding_cond").value = ""; 
        document.getElementById("MngerLding_remrk").value = "";  
        document.getElementById("SupLding_cond").value = "";
        document.getElementById("SupLding_remrk").value = ""; 
        document.getElementById("Security_loading").value = "";
        document.getElementById("Securitylding_remrk").value = ""; 
        document.getElementById("Security_attendance").value = "";  
        document.getElementById("Securityatt_remrk").value = "";
        document.getElementById("Security_OB").value = ""; 
        document.getElementById("SecurityOB_remrk").value = "";
        document.getElementById("Reliability_loading").value = ""; 
        document.getElementById("Reliabiltylding_remrk").value = "";  
        document.getElementById("Reliability_Attendance").value = "";
        document.getElementById("Reliabiltyatt_remrk").value = ""; 
        document.getElementById("Reliability_OB").value = "";
        document.getElementById("Reliabiltyob_remrk").value = ""; 
        document.getElementById("Minishpneatness_cond").value = "";  
        document.getElementById("Minishpneatness_remrk").value = "";
         document.getElementById("OG_Cond").value = ""; 
        document.getElementById("OG_Remrk").value = "";  
        document.getElementById("Uniform_Cond").value = "";
        document.getElementById("Uniform_Remrk").value = ""; 
        document.getElementById("Shoes_Cond").value = "";
        document.getElementById("Shoes_Remrk").value = ""; 
        document.getElementById("GB_Cond").value = "";  
        document.getElementById("GB_Remrk").value = "";
        document.getElementById("CG_Cond").value = ""; 
        document.getElementById("CG_Remrk").value = "";
        document.getElementById("DM_Cond").value = ""; 
        document.getElementById("DM_Remrk").value = "";  
        document.getElementById("EK_Cond").value = "";
        document.getElementById("EK_Remrk").value = ""; 
        document.getElementById("FE_Cond").value = "";
        document.getElementById("FE_Renrk").value = ""; 
        document.getElementById("AS_Cond").value = "";  
        document.getElementById("AS_Remrk").value = "";
        document.getElementById("Mobile_Cond").value = ""; 
        document.getElementById("Mobile_Remrk").value = "";
        document.getElementById("Fixed_Cond").value = ""; 
        document.getElementById("Fixed_Remrk").value = "";  
        document.getElementById("DL_Cond").value = "";
        document.getElementById("DL_Remrk").value = ""; 
        document.getElementById("SL_Cond").value = "";
        document.getElementById("SL_Remrk").value = ""; 
        document.getElementById("MR_Cond").value = "";  
        document.getElementById("MR_Remrk").value = "";
        document.getElementById("SupV_Cond").value = ""; 
        document.getElementById("SupV_Remrk").value = "";
        document.getElementById("BakMng_Cond").value = ""; 
        document.getElementById("BakMng_Remrk").value = "";  
        document.getElementById("Discpline_Cond").value = "";
        document.getElementById("Discpline_Remrk").value = ""; 
        document.getElementById("Training_Cond").value = "";
        document.getElementById("Training_Remrk").value = ""; 
        document.getElementById("SCwrk_Cond").value = "";
        document.getElementById("SCwrk_Remrk").value = ""; 
        document.getElementById("SCdr_Cond").value = "";
        document.getElementById("SCdr_Remrk").value = ""; 
        document.getElementById("SCexced_Cond").value = "";  
        document.getElementById("SCexced_remrk").value = "";
        document.getElementById("SCCasual_Cond").value = ""; 
        document.getElementById("SCCasual_Remrk").value = "";
        document.getElementById("gen_repairs_cond").value  
        document.getElementById("gen_repairs_remarks").value = "";  
        document.getElementById("gen_repair_acc_condition").value = "";
        document.getElementById("gen_repairs_acc_remarks").value = ""; 
        document.getElementById("firstaid_ess_cond").value = "";
        document.getElementById("firstaid_ess_remarks").value = ""; 
        document.getElementById("firstaid_usagerec_cond").value = "";  
        document.getElementById("firstaid_usagerec_remarks").value = "";
        document.getElementById("gen_cond").value = ""; 
        document.getElementById("gen_remarks").value = "";
        document.getElementById("prod_cond").value = ""; 
        document.getElementById("prod_remarks").value = "";  
        document.getElementById("crate_rec_cond").value = "";
        document.getElementById("crat_remark").value = ""; 
        document.getElementById("station_book_cond").value = "";
        document.getElementById("station_book_remarks").value = ""; 
        document.getElementById("protect_cloth_book").value = "";  
        document.getElementById("protect_cloth_book_rem").value = "";
        document.getElementById("vehicle_mil_cond").value = ""; 
        document.getElementById("vehicle_mil_remarks").value = "";
        document.getElementById("weight_chart_line_cond").value = ""; 
        document.getElementById("weight_chart_file_remarks").value = "";  
        document.getElementById("underweight_chart_file_cond").value = "";
        document.getElementById("underweight_chart_line_remarks").value = ""; 
        document.getElementById("driver_allocation_cond").value = "";
        document.getElementById("driver_allocation_remarks").value = ""; 
        document.getElementById("mil_per_litre_veh_cond").value = "";  
        document.getElementById("mil_per_litre_veh_remar").value = "";
        document.getElementById("motor_veh_clean_cond").value = "";
        document.getElementById("motor_veh_clean_remarks").value = ""; 
        document.getElementById("cus_comp_cond").value = "";  
        document.getElementById("cus_comp_remarks").value = "";
        document.getElementById("imp_ass_cond").value = "";  
        document.getElementById("imp_ass_remarks").value = "";
        document.getElementById("comm_cond").value = ""; 
        document.getElementById("comm_remarks").value = "";
        document.getElementById("mon_load_trend_cond").value = ""; 
        document.getElementById("mon_load_trend_remarks").value = "";  
        document.getElementById("ver_cashflow_cond").value = "";
        document.getElementById("ver_cashflow_remarks").value = ""; 
        document.getElementById("ver_bak_stock_cond").value = "";
        document.getElementById("ver_bak_stock_remarks").value = ""; 
        document.getElementById("cash_ver_cashier_cond").value = "";  
        document.getElementById("cash_ver_cashier_remarks").value = "";
        document.getElementById("insuring_cont_debt_cred_cond").value = ""; 
        document.getElementById("insuring_cont_debt_cred_remarks").value = ""; 
          return;
      }
      else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {

              if (this.readyState == 4 && this.status == 200) {
                
                  var myObj = JSON.parse(this.responseText);
                  document.getElementById("branchname").value = myObj[0]; 
                  document.getElementById("branchmanager").value = myObj[1];  
                  document.getElementById("opsmanager").value = myObj[2];
                  document.getElementById("TransactionDate").value = myObj[3];
                  document.getElementById("sweepcondition").value = myObj[4]; 
                  document.getElementById("sweepremark").value = myObj[5];
                  document.getElementById("washcondition").value = myObj[6]; 
                  document.getElementById("washremark").value = myObj[7];  
                  document.getElementById("tablecondition").value = myObj[8];
                  document.getElementById("tableremark").value = myObj[9]; 
                  document.getElementById("smellcondition").value = myObj[10];
                  document.getElementById("smellremark").value = myObj[11]; 
                  document.getElementById("floorcondition").value = myObj[12];  
                  document.getElementById("floorremark").value = myObj[13];
                  document.getElementById("garbagecondition").value = myObj[14]; 
                  document.getElementById("garbageremark").value = myObj[15];
                  document.getElementById("catchercondition").value = myObj[16]; 
                  document.getElementById("catcherremark").value = myObj[17];  
                  document.getElementById("fliescondition").value = myObj[18];
                  document.getElementById("fliesremark").value = myObj[19]; 
                  document.getElementById("roachescondition").value = myObj[20];
                  document.getElementById("roachesremark").value = myObj[21]; 
                  document.getElementById("ratscondition").value = myObj[22];  
                  document.getElementById("ratsremark").value = myObj[23];
                  document.getElementById("cratescondition").value = myObj[24]; 
                  document.getElementById("cratesremark").value = myObj[25];
                  document.getElementById("uniformcondition").value = myObj[26]; 
                  document.getElementById("uniformremark").value = myObj[27];  
                  document.getElementById("scoatcondition").value = myObj[28];
                  document.getElementById("scoatremark").value = myObj[29]; 
                  document.getElementById("ovenmancondition").value = myObj[30];
                  document.getElementById("ovenmanremark").value = myObj[31]; 
                  document.getElementById("suniformcondition").value = myObj[32];  
                  document.getElementById("suniformremark").value = myObj[33];
                  document.getElementById("m1mechanical").value = myObj[34]; 
                  document.getElementById("m1layout").value = myObj[35];  
                  document.getElementById("m1remark").value = myObj[36];
                  document.getElementById("m2mechanical").value = myObj[37]; 
                  document.getElementById("m2layout").value = myObj[38];
                  document.getElementById("m2remark").value = myObj[39]; 
                  document.getElementById("dmechanical").value = myObj[40];  
                  document.getElementById("dlayout").value = myObj[41];
                  document.getElementById("dremark").value = myObj[42]; 
                  document.getElementById("p1mechanical").value = myObj[43];
                  document.getElementById("p1layout").value = myObj[44]; 
                  document.getElementById("p1remark").value = myObj[45];  
                  document.getElementById("p2mechanical").value = myObj[46];
                  document.getElementById("p2layout").value = myObj[47]; 
                  document.getElementById("p2remark").value = myObj[48];
                  document.getElementById("p3mechanical").value = myObj[49]; 
                  document.getElementById("p3layout").value = myObj[50];  
                  document.getElementById("p3remark").value = myObj[51];
                  document.getElementById("o1mechanical").value = myObj[52]; 
                  document.getElementById("o1layout").value = myObj[53];
                  document.getElementById("o1remark").value = myObj[54]; 
                  document.getElementById("o2mechanical").value = myObj[55];  
                  document.getElementById("o2layout").value = myObj[56];
                  document.getElementById("o2remark").value = myObj[57]; 
                  document.getElementById("o3mechanical").value = myObj[58];
                  document.getElementById("o3layout").value = myObj[59]; 
                  document.getElementById("o3remark").value = myObj[60];  
                  document.getElementById("slicermechanical").value = myObj[61];
                  document.getElementById("slicerlayout").value = myObj[62];
                  document.getElementById("slicerremark").value = myObj[63]; 
                  document.getElementById("gmechanical").value = myObj[64];  
                  document.getElementById("glayout").value = myObj[65];
                  document.getElementById("gremark").value = myObj[66];  
                  document.getElementById("edsmechanical").value = myObj[67];
                  document.getElementById("edslayout").value = myObj[68]; 
                  document.getElementById("edsremark").value = myObj[69];
                  document.getElementById("scalemechanical").value = myObj[70]; 
                  document.getElementById("scalelayout").value = myObj[71];  
                  document.getElementById("scaleremark").value = myObj[72];
                  document.getElementById("maintenanceoften").value = myObj[73]; 
                  document.getElementById("maintenancestate").value = myObj[74];
                  document.getElementById("maintenanceremark").value = myObj[75]; 
                  document.getElementById("tinsmechanical").value = myObj[76];  
                  document.getElementById("tinslayout").value = myObj[77];
                  document.getElementById("tinsremark").value = myObj[78]; 
                  document.getElementById("wiresmechanical").value = myObj[79];
                  document.getElementById("wireslayout").value = myObj[80]; 
                  document.getElementById("wiresremark").value = myObj[81];
                  document.getElementById("tideness").value = myObj[82];
                    document.getElementById("comment1").value = myObj[83];  
                    document.getElementById("alterations").value = myObj[84];
                    document.getElementById("comment2").value = myObj[85];
                    document.getElementById("manager_checks").value = myObj[86];
                    document.getElementById("comment3").value = myObj[87];
                    document.getElementById("mixchart_cashflow").value = myObj[88];
                    document.getElementById("comment4").value = myObj[89];
                    document.getElementById("mixchart_production").value =myObj[90]; 
                    document.getElementById("comment5").value = myObj[91];
                    document.getElementById("consumption").value = myObj[92]; 
                    document.getElementById("comment6").value = myObj[93];  
                    document.getElementById("sellbydate").value =myObj[94];
                    document.getElementById("comment7").value = myObj[95];
                    document.getElementById("breadreturns").value = myObj[96];
                    document.getElementById("comment8").value = myObj[97];
                    document.getElementById("damagepolybags").value = myObj[98];  
                    document.getElementById("comment9").value = myObj[99];
                    document.getElementById("processflow").value =myObj[100];
                    document.getElementById("comment10").value = myObj[101];
                    document.getElementById("slicing").value = myObj[102]; 
                    document.getElementById("comment11").value = myObj[103];  
                    document.getElementById("dividing_range").value = myObj[104];
                    document.getElementById("comment12").value = myObj[105]; 
                    document.getElementById("breadweight").value = myObj[106];
                    document.getElementById("comment13").value = myObj[107];
                    document.getElementById("bread_yield").value = myObj[108];
                    document.getElementById("comment14").value = myObj[109];
                    document.getElementById("tapes").value = myObj[110];
                    document.getElementById("comment15").value = myObj[111]; 
                    document.getElementById("ingredients").value = myObj[112];  
                    document.getElementById("comment16").value = myObj[113];
                    document.getElementById("gunnybags").value = myObj[114]; 
                    document.getElementById("comment17").value = myObj[115];
                    document.getElementById("flour").value = myObj[116];
                    document.getElementById("comment18").value =myObj[117];
                    document.getElementById("polybags").value = myObj[118];
                    document.getElementById("comment19").value = myObj[119]; 
                    document.getElementById("damagedpolybags").value = myObj[120];
                    document.getElementById("comment20").value = myObj[121];
                    document.getElementById("mkt_returns").value = myObj[122];
                    document.getElementById("comment21").value = myObj[123]; 
                    document.getElementById("sell_by_date_returns").value = myObj[124];  
                    document.getElementById("comment22").value = myObj[125];
                    document.getElementById("return_goods").value =myObj[126]; 
                    document.getElementById("comment23").value = myObj[127];
                    document.getElementById("bread_color").value = myObj[128]; 
                    document.getElementById("comment24").value = myObj[129];
                    document.getElementById("shape_size").value = myObj[130];
                    document.getElementById("comment25").value =myObj[131];
                    document.getElementById("internal_texture").value = myObj[132];
                    document.getElementById("comment26").value = myObj[133];
                    document.getElementById("variety_by_varietyphysicalbalance").value =myObj[134]; 
                    document.getElementById("comment27").value =myObj[135];
                    document.getElementById("stocklevels").value = myObj[136];
                    document.getElementById("comment28").value = myObj[137];
                    document.getElementById("rotationofstocks").value = myObj[138]; 
                    document.getElementById("comment29").value =myObj[139];
                    document.getElementById("multiple_sell").value =myObj[140]; 
                    document.getElementById("comment30").value = myObj[141];   
                  document.getElementById("MngerLding_cond").value = myObj[142];
                    document.getElementById("MngerLding_remrk").value = myObj[143];  
                    document.getElementById("SupLding_cond").value = myObj[144];
                    document.getElementById("SupLding_remrk").value = myObj[145]; 
                    document.getElementById("Security_loading").value = myObj[146];
                    document.getElementById("Securitylding_remrk").value = myObj[147]; 
                    document.getElementById("Security_attendance").value = myObj[148];  
                    document.getElementById("Securityatt_remrk").value = myObj[149];
                    document.getElementById("Security_OB").value = myObj[150];
                    document.getElementById("SecurityOB_remrk").value = myObj[151];
                    document.getElementById("Reliability_loading").value = myObj[152]; 
                    document.getElementById("Reliabiltylding_remrk").value = myObj[153];  
                    document.getElementById("Reliability_Attendance").value =myObj[154];
                    document.getElementById("Reliabiltyatt_remrk").value = myObj[155]; 
                    document.getElementById("Reliability_OB").value = myObj[156];
                    document.getElementById("Reliabiltyob_remrk").value = myObj[157]; 
                    document.getElementById("Minishpneatness_cond").value = myObj[158]; 
                    document.getElementById("Minishpneatness_remrk").value = myObj[159];
                    document.getElementById("OG_Cond").value = myObj[160]; 
                    document.getElementById("OG_Remrk").value = myObj[161];  
                    document.getElementById("Uniform_Cond").value = myObj[162];
                    document.getElementById("Uniform_Remrk").value = myObj[163]; 
                    document.getElementById("Shoes_Cond").value = myObj[164];
                    document.getElementById("Shoes_Remrk").value = myObj[165]; 
                    document.getElementById("GB_Cond").value = myObj[166];
                    document.getElementById("GB_Remrk").value = myObj[167];
                    document.getElementById("CG_Cond").value = myObj[168];
                    document.getElementById("CG_Remrk").value = myObj[169];
                    document.getElementById("DM_Cond").value = myObj[170];
                    document.getElementById("DM_Remrk").value = myObj[171];
                    document.getElementById("EK_Cond").value = myObj[172];
                    document.getElementById("EK_Remrk").value = myObj[173]; 
                    document.getElementById("FE_Cond").value = myObj[174];
                    document.getElementById("FE_Renrk").value = myObj[175]; 
                    document.getElementById("AS_Cond").value = myObj[176];  
                    document.getElementById("AS_Remrk").value = myObj[177];
                    document.getElementById("Mobile_Cond").value = myObj[178]; 
                    document.getElementById("Mobile_Remrk").value = myObj[179];
                    document.getElementById("Fixed_Cond").value = myObj[180]; 
                    document.getElementById("Fixed_Remrk").value = myObj[181];  
                    document.getElementById("DL_Cond").value = myObj[182];
                    document.getElementById("DL_Remrk").value = myObj[183]; 
                    document.getElementById("SL_Cond").value = myObj[184];
                    document.getElementById("SL_Remrk").value = myObj[185]; 
                    document.getElementById("MR_Cond").value = myObj[186];  
                    document.getElementById("MR_Remrk").value = myObj[187];
                    document.getElementById("SupV_Cond").value = myObj[188]; 
                    document.getElementById("SupV_Remrk").value = myObj[189];
                    document.getElementById("BakMng_Cond").value = myObj[190]; 
                    document.getElementById("BakMng_Remrk").value = myObj[191];  
                    document.getElementById("Discpline_Cond").value = myObj[192];
                    document.getElementById("Discpline_Remrk").value = myObj[193]; 
                    document.getElementById("Training_Cond").value = myObj[194];
                    document.getElementById("Training_Remrk").value = myObj[195]; 
                    document.getElementById("SCwrk_Cond").value = myObj[196];
                    document.getElementById("SCwrk_Remrk").value =myObj[197]; 
                    document.getElementById("SCdr_Cond").value = myObj[198];
                    document.getElementById("SCdr_Remrk").value = myObj[199]; 
                    document.getElementById("SCexced_Cond").value = myObj[200];  
                    document.getElementById("SCexced_remrk").value = myObj[201];
                    document.getElementById("SCCasual_Cond").value = myObj[202]; 
                    document.getElementById("SCCasual_Remrk").value = myObj[203];
                    document.getElementById("gen_repairs_cond").value  =  myObj[204];  
                    document.getElementById("gen_repairs_remarks").value = myObj[205];
                    document.getElementById("gen_repair_acc_condition").value = myObj[206];
                    document.getElementById("gen_repairs_acc_remarks").value = myObj[207]; 
                    document.getElementById("firstaid_ess_cond").value = myObj[208];
                    document.getElementById("firstaid_ess_remarks").value = myObj[209];
                    document.getElementById("firstaid_usagerec_cond").value = myObj[210]; 
                    document.getElementById("firstaid_usagerec_remarks").value = myObj[211]; 
                    document.getElementById("gen_cond").value = myObj[212];
                    document.getElementById("gen_remarks").value = myObj[213];
                    document.getElementById("prod_cond").value = myObj[214];
                    document.getElementById("prod_remarks").value = myObj[215];
                    document.getElementById("crate_rec_cond").value =myObj[216];
                    document.getElementById("crat_remark").value = myObj[217];
                    document.getElementById("station_book_cond").value = myObj[218];
                    document.getElementById("station_book_remarks").value = myObj[219];
                    document.getElementById("protect_cloth_book").value = myObj[220]; 
                    document.getElementById("protect_cloth_book_rem").value = myObj[221];
                    document.getElementById("vehicle_mil_cond").value = myObj[222];
                    document.getElementById("vehicle_mil_remarks").value = myObj[223];
                    document.getElementById("weight_chart_line_cond").value = myObj[224];
                    document.getElementById("weight_chart_file_remarks").value = myObj[225];
                    document.getElementById("underweight_chart_file_cond").value = myObj[226];
                    document.getElementById("underweight_chart_line_remarks").value = myObj[227]; 
                    document.getElementById("driver_allocation_cond").value = myObj[228];
                    document.getElementById("driver_allocation_remarks").value = myObj[229]; 
                    document.getElementById("mil_per_litre_veh_cond").value = myObj[230];  
                    document.getElementById("mil_per_litre_veh_remar").value = myObj[231];
                    document.getElementById("motor_veh_clean_cond").value = myObj[232];
                    document.getElementById("motor_veh_clean_remarks").value = myObj[233]; 
                    document.getElementById("cus_comp_cond").value = myObj[234];   
                    document.getElementById("cus_comp_remarks").value = myObj[235]; 
                    document.getElementById("imp_ass_cond").value = myObj[236];
                    document.getElementById("imp_ass_remarks").value = myObj[237]; 
                    document.getElementById("comm_cond").value = myObj[238];
                    document.getElementById("comm_remarks").value = myObj[239]; 
                    document.getElementById("mon_load_trend_cond").value = myObj[240];  
                    document.getElementById("mon_load_trend_remarks").value = myObj[241];   
                    document.getElementById("ver_cashflow_cond").value = myObj[242];
                    document.getElementById("ver_cashflow_remarks").value = myObj[243];  
                    document.getElementById("ver_bak_stock_cond").value = myObj[244];
                    document.getElementById("ver_bak_stock_remarks").value = myObj[245];  
                    document.getElementById("cash_ver_cashier_cond").value = myObj[246];   
                    document.getElementById("cash_ver_cashier_remarks").value = myObj[247]; 
                    document.getElementById("insuring_cont_debt_cred_cond").value = myObj[248];  
                    document.getElementById("insuring_cont_debt_cred_remarks").value = myObj[249];
              }
          };

          xmlhttp.open("GET", "test1.php?id=" + str, true);
            
          xmlhttp.send();
      }
  }
</script>
<label><b>Input Form Receipt No. to Download</b></label>
<center>
<button class="success" onclick="Convert_HTML_To_PDF();">Download</button>
</center>
<span id="error">
 <!---- Initializing Session for errors --->
</span>
<div id="contentToPrint">
<!-- Create Form -->
    <form id="form"  method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        <label>Form Receipt No:</label>
        <input type='text' name="id" id='id' placeholder='id' onkeyup="GetDetail(this.value)" value="">
        <!--<button type="submit" onclick="GetDetail(this.value)" value="">click me</button> -->
        <label>Branch Name:</label>
        <input type='text' name="branchname" id='branchname' placeholder='branchname' value=""><br><br>
        <label>Branch Manager:</label>
        <input type="text" name="branchmanager" id="branchmanager" placeholder='branchmanager' value="">
        <label>Opertions Manager:</label>
        <input type="text" name="opsmanager" id="opsmanager" placeholder="opsmanager"  value="">
        <label>Date:</label>
        <input type="date" name="TransactionDate" id="TransactionDate" placeholder="date"  value="">                  
        <h3>1) Bakery Hygiene</h3>
        <label for="role" id="label-role">
            <h4>* Floor cleanliness</h4>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><u>Description</u></div>
               <div  class="div-table-col"><u>Condition</u></div>
               <div  class="div-table-col"><u>Remarks</u></div>
            </div>
            <div class="div-table-row">
               <div class="div-table-col">Litter sweeping</div>
               <div class="div-table-col">
                    <input type="text" name="sweepcondition" id="sweepcondition" value="">
                </div>
               <div class="div-table-col">
                    <input type="text" name="sweepremark" id="sweepremark" value="">
                </div>
            </div>            
            <div class="div-table-row">
               <div class="div-table-col">Washing</div>
               <div class="div-table-col">
                    <input name="washcondition" id="washcondition" value="">   
                </div>
                <div class="div-table-col">
                   <input name="washremark" id="washremark" value="">
                </div>
            </div>
            <div class="div-table-row">
               <div  class="div-table-col">Dividing table cleanliness</div>
               <div class="div-table-col">
                <input name="tablecondition" id="tablecondition">
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                    <input name="tableremark" id="tableremark"  >
                </div>
           </div>
          </div>
            <label for="role" id="label-role">
                <h4>* Toilet cleanliness</h4>
            <div class="div-table">
                <div class="div-table-row">
                    <div class="div-table-col"><u>Description</u></div>
                    <div  class="div-table-col"><u>Condition</u></div>
                    <div  class="div-table-col"><u>Remarks</u></div>
                </div>
               <div class="div-table-row">
                    <div class="div-table-col">Foul Smell</div>
                    <div class="div-table-col">
                        <input name="smellcondition" id="smellcondition">

                    </div>
                   <div class="div-table-col">
                        <input name="smellremark" id="smellremark" >
                   </div>
               </div>
               <div class="div-table-row">
                   <div class="div-table-col">Mopping of Floor</div>
                    <div class="div-table-col">
                        <input name="floorcondition" id="floorcondition">

                    </div>
                    <div class="div-table-col">
                       <!-- multi-line text input control -->
                       <input name="floorremark" id="floorremark" >
                    </div>
                </div>
               <div class="div-table-row">
                   <div class="div-table-col">Disposal of Garbage</div>
                   <div class="div-table-col">
                    <input name="garbagecondition" id="garbagecondition">

                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                        <input name="garbageremark" id="garbageremark" >
                   </div>
               </div>
            </div>
                <label for="role" id="label-role">
                <h4>* Flies Inside Bakery</h4>
                <div class="div-table">
                    <div class="div-table-row">
                        <div class="div-table-col"><u>Description</u></div>
                        <div  class="div-table-col"><u>Condition</u></div>
                        <div  class="div-table-col"><u>Remarks</u></div>
                    </div>
                   <div class="div-table-row">
                         <div class="div-table-col">Fly Catchers</div>
                       <div class="div-table-col">
                            <input name="catchercondition" id="catchercondition">
                        </div>
                       <div class="div-table-col">
                           <!-- multi-line text input control -->
                            <input name="catcherremark" id="catcherremark" >
                       </div>
                   </div>
                   <div class="div-table-row">
                       <div class="div-table-col">Incidence of Flies</div>
                       <div class="div-table-col">
                            <input name="fliescondition" id="fliescondition">
                              
                        </div>
                        <div class="div-table-col">
                           <!-- multi-line text input control -->
                           <input name="fliesremark" id="fliesremark" >
                        </div>
                    </div>
                    <div class="div-table-row">
                       <div class="div-table-col">Cockroaches</div>
                       <div class="div-table-col">
                            <input name="roachescondition" id="roachescondition">
                             
                       </div>
                       <div class="div-table-col">   
                             <!-- multi-line text input control -->
                            <input name="roachesremark" id="roachesremark" >
                       </div>
                   </div>
                   <div class="div-table-row">
                        <div class="div-table-col">Rats Bating</div>
                        <div class="div-table-col">
                             <input name="ratscondition" id="ratscondition">
                                
                        </div>
                        <div class="div-table-col">   
                              <!-- multi-line text input control -->
                            <input name="ratsremark" id="ratsremark" >
                        </div>
                    </div>
                    <div class="div-table-row">
                       <div class="div-table-col">Cleaning crates</div>
                       <div class="div-table-col">
                            <input name="cratescondition" id="cratescondition">
              
                       </div>
                       <div class="div-table-col">   
                             <!-- multi-line text input control -->
                            <input name="cratesremark" id="cratesremark" >
                       </div>
                   </div>
                </div>  
                <label for="role" id="label-role">
                    <h4>II )Uniforms Worn by staff</h4>
                    <div class="div-table">
                        <div class="div-table-row">
                            <div class="div-table-col"><u>Description</u></div>
                            <div  class="div-table-col"><u>Condition</u></div>
                            <div  class="div-table-col"><u>Remarks</u></div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col">Uniforms available to all production persons </div>
                            <div class="div-table-col">
                                <input name="uniformcondition" id="uniformcondition">
                                    
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                                <input name="uniformremark" id="uniformremark" >
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col">Supervisor Overcoat Clean State</div>
                           <div class="div-table-col">
                                <input name="scoatcondition" id="scoatcondition">
                                    
                            </div>
                            <div><div class="div-table-row"></div>
                               <!-- multi-line text input control -->
                               <input name="scoatremark" id="scoatremark" >
                            </div>
                        </div>
                       <div class="div-table-row">
                           <div class="div-table-col">Oven Man Uniform Maintained Clean</div>
                           <div class="div-table-col">
                                <input name="ovenmancondition" id="ovenmancondition">
                                   
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                                <input name="ovenmanremark" id="ovenmanremark" >
                           </div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col">Slicer Uniform Maintained Clean</div>
                            <div class="div-table-col">
                                <input name="suniformcondition" id="suniformcondition">
                                   
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                                <input name="suniformremark" id="suniformremark" >
                            </div>
                        </div>  
                    </div>
         
    </b></form>
<!-- Create Form -->
    <form id="form" action="section_2.php" method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        
        <label for="role" id="label-role">
            <h4>* Machine structural conditions and hygiene</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col2">Machines</div>
               <div  class="div-table-col2">Mechanical/Electrical</div>
               <div  class="div-table-col2">Hygiene/Layout</div>
               <div  class="div-table-col2">Remarks</div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col2">Mixer 1</div>
               <div class="div-table-col2">
                    <input name="m1mechanical" id="m1mechanical" value="">      
                </div>
                <div class="div-table-col2">
                   <input name="m1layout" id="m1layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="mixer1" id="m1remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Mixer 2</div>
               <div class="div-table-col2">
                    <input name="m2mechanical" id="m2mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="m2layout" id="m2layout" value="">
                        
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="mixer2" id="m2remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Dough Refiner</div>
               <div class="div-table-col2">
                    <input name="dmechannical" id="dmechanical" value="">
                       
                </div>
                <div class="div-table-col2">
                   <input name="refiner" id="dlayout" value="">
                        
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="doughrefiner" value="" id="dremark" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Proover 1</div>
               <div class="div-table-col2">
                    <input name="p1mechanical" id="p1mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="p1layout" id="p1layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="proover1" id="p1remark" value="" ></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col2">Proover 2</div>
               <div class="div-table-col2">
                    <input name="p2mechanical" id="p2mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="p2layout" id="p2layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="proover2" id="p2remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Proover 3</div>
               <div class="div-table-col2">
                    <input name="p3mechanical" id="p3mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="p3layout" id="p3layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="proover3" id="p3remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Oven 1</div>
               <div class="div-table-col2">
                    <input name="o1mechanical" id="o1mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="o1layout" id="o1layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="oven1" id="o1remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Oven 2</div>
               <div class="div-table-col2">
                    <input name="o2mechanical" id="o2mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="o2layout" id="o2layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="oven2" id="o2remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Oven 3</div>
               <div class="div-table-col2">
                    <input name="o3mechanical" id="o3mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="o3layout" id="o3layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="oven3" id="o3remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Slicer</div>
               <div class="div-table-col2">
                    <input name="slicermechanical" id="slicermechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="slicerlayout" id="slicerlayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="slicerremark" id="slicerremark" value="" ></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col2">Generator</div>
               <div class="div-table-col2">
                    <input name="gmechanical" id="gmechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="glayout" id="glayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="gremark"  value="" id="gremark" ></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col2">Electronic Dough Scaler</div>
               <div class="div-table-col2">
                    <input name="edsmechanical" id="edsmechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="edslayout" id="edslayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="edsremark" value="" id="edsremark" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Slicing Scale</div>
               <div class="div-table-col2">
                    <input name="scalemechanical" id="scalemechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="scalelayout" id="scalelayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="scaleremark" value="" id="scaleremark" ></textarea>
               </div>
            </div>
        </div>
        <h4>Maintenance of Electronic Scales</h4>
            <div class="div-table">
                <div class="div-table-row">
                   
                </div>
                <div class="div-table-row">
                   <div class="div-table-col">How often</div>
                   <div  class="div-table-col">State</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                    <div class="div-table-col">
                        <input name="often" id="maintenanceoften" value="">
                            
                    </div>
                    <div class="div-table-col">
                        <input name="state" id="maintenancestate" value="">
                            
                    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                        <input name="comment" id="maintenanceremark" value="" ></textarea>
                   </div>
               </div>
    
            </div>
                <label for="role" id="label-role">
                <h4>* IV) Bakeware Structural Condition and Hygiene</h4>
                <div class="div-table">
                     <div class="div-table-row">
                 <div class="div-table-col2">Baking Tins</div>
               <div class="div-table-col2">
                    <input name="baking" id="tinsmechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="tins" id="tinslayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="bakingtins" id="tinsremark" value="" ></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col2">Cooling Wires</div>
               <div class="div-table-col2">
                    <input name="cooling" id="wiresmechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="wires" id="wireslayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="coolingwires" value="" id="wiresremark" ></textarea>
               </div>
            </div>
        </div>            
        
    
    </b></form>

<!-- Create Form -->
    <form id="form" action="salesrecords.php" method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        <h3>2) Production</h3>
        <h4>  I) Record Keeping - Mixing Chart Maintenance</h4>
        <h4><center>* Neatness</center></h4>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b>Description</b></div>
               <div  class="div-table-col"><b>Condition</b></div>
               <div  class="div-table-col"><b>Remarks</b></div>
            </div>
         
           <div class="div-table-row">
                 <div class="div-table-col">* Tideness</div>
               <div class="div-table-col">
                <input name="tideness" id="tideness">      
               </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="comment1" id="comment1">
               </div>
               <div class="div-table-col">* Alterations</div>
               <div class="div-table-col">
                <input name="alterations" id="alterations">
                </div>
                <div class="div-table-col">

                <!-- multi-line text input control -->
                <input name="comment2" id="comment2">

                </div>
               <div  class="div-table-col">* Surprise Checks by manager</div>
               <div class="div-table-col">
                <input name="manager_checks" id="manager_checks">
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment3" id="comment3">
               </div>
               <div  class="div-table-col">* Mixing Chart and Cash Flow yield</div>
               <div class="div-table-col">
                <input name="mixchart_cashflow" id="mixchart_cashflow">                    
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment4" id="comment4">            
               </div>
               <div  class="div-table-col">* Mixing Chart / Cash Flow Production</div>
               <div class="div-table-col">
                <input name="mixchart_production" id="mixchart_production">                    
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment5" id="comment5">            
               </div>
          </div>
        </div>
            <label for="role" id="label-role">
               <h4>  II) Production and Process cost Control</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col"><b>Description</b></div>
                   <div  class="div-table-col"><b>Condition</b></div>
                   <div  class="div-table-col"><b>Remarks</b></div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">* Utto Consumption</div>
                   <div class="div-table-col">
                    <input name="consumption" id="consumption">
                       
                    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="comment6" id="comment6">
                   </div>
                   <div class="div-table-col">* Sell By Date</div>
                   <div class="div-table-col">
                    <input name="sellbydate" id="sellbydate">
                    </div>
                    <div class="div-table-col">
                    <!-- multi-line text input control -->
                    <input name="comment7" id="comment7">
                    </div>

                   <div class="div-table-col">* Bread Returns</div>
                   <div class="div-table-col">
                    <input name="breadreturns" id="breadreturns">
                        
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="comment8" id="comment8">
                
                   </div>
                   <div class="div-table-col">* Damage Polybags</div>
                   <div class="div-table-col">
                    <input name="damagepolybags" id="damagepolybags">
                       
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="comment9" id="comment9">
                
                   </div>
                   <div class="div-table-col">* Process Flow</div>
                   <div class="div-table-col">
                    <input name="processflow" id="processflow">
                       
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="comment10" id="comment10">
                
                   </div>
                   <div class="div-table-col">* Efficiency of Slicing</div>
                   <div class="div-table-col">
                    <input name="slicing" id="slicing">
                        
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="comment11" id="comment11">
                
                   </div>
    
                   </div>
               </div>
    
                <h3>3) Bread / Dough Weight</h3>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b>Description</b></div>
               <div  class="div-table-col"><b>Condition</b></div>
               <div  class="div-table-col"><b>Remarks</b></div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col">* Dividing Range</div>
               <div class="div-table-col">
                <input name="dividing_range" id="dividing_range">
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="comment12" id="comment12">
               </div>
               <div class="div-table-col">* Bread Weight</div>
               <div class="div-table-col">
                <input name="breadweight" id="breadweight">
                </div>
                <div class="div-table-col">

                <!-- multi-line text input control -->
                <input name="comment13" id="comment13">

                </div>
                </div>
                </div>
<h3>4) Yield </h3>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b>Description</b></div>
               <div  class="div-table-col"><b>Condition</b></div>
               <div  class="div-table-col"><b>Remarks</b></div>
            </div>
                 <div class="div-table-col">* Bread Yield</div>
               <div class="div-table-col">
                <input name="bread_yield" id="bread_yield">
               </div>
               <div class="div-table-row">
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="comment14" id="comment14">
               </div>
            </div>
         </div>
                <label for="role" id="label-role">
                    <h3>5) Control Stock - Store arrangement</h3>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col"><b>Description</b></div>
                           <div  class="div-table-col"><b>Condition</b></div>
                           <div  class="div-table-col"><b>Remarks</b></div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col">* Sell By Tapes</div>
                            <div class="div-table-col">
                            <input name="tapes" id="tapes">    
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                                <input name="comment15" id="comment15">
                           </div>
                           <div class="div-table-col">* Ingredients</div>
                           <div class="div-table-col">
                            <input name="ingredients" id="ingredients">                  
                            </div>
                            <div class="div-table-col">
                               <!-- multi-line text input control -->
                               <input name="comment16" id="comment16">
                              </div>
                           <div class="div-table-col">*  Gunny Bags</div>
                           <div class="div-table-col">
                            <input name="gunnybags" id="gunnybags">
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                            <input name="comment17" id="comment17">
                           </div>
                            <div class="div-table-col">* Flour</div>
                            <div class="div-table-col">
                             <input name="flour" id="flour">
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="comment18" id="comment18">
                            </div>
                            <div class="div-table-col">* Polybags</div>
                            <div class="div-table-col">
                             <input name="polybags" id="polybags">
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="comment19" id="comment19">
                            </div>
                            <div class="div-table-col">*Damaged Polybags</div>
                            <div class="div-table-col">
                             <input name="damagedpolybags" id="damagedpolybags">                                  
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="comment20" id="comment20">                         
                            </div>
                       </div>  
                    </div>
                        <label for="role" id="label-role">
                    <h3>6) Bread Quality</h3>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col"><b>Description</b></div>
                           <div  class="div-table-col"><b>Condition</b></div>
                           <div  class="div-table-col"><b>Remarks</b></div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col">* Market Returns</div>
                           <div class="div-table-col">
                            <input name="mkt_returns" id="mkt_returns">
                            </div>
                           <div class="div-table-col" style="text-align:center">
                               <!-- multi-line text input control -->
                            <input name="comment21" id="comment21">                        
                           </div>
                           <div class="div-table-col">* Sell by Date Returns</div>
                           <div class="div-table-col">
                            <input name="sell_by_date_returns" id="sell_by_date_returns">                               
                            </div>
                            <div class="div-table-col" style="text-align:center">
                            <!-- multi-line text input control -->
                            <input name="comment22" id="comment22">
                            </div>
                           <div class="div-table-col">*Return Classified Gds & Damages</div>
                           <div class="div-table-col">
                            <input name="return_goods" id="return_goods">                               
                           </div>
                           <div class="div-table-col" style="text-align:center">   
                                 <!-- multi-line text input control -->
                            <input name="comment23" id="comment23">
                           </div>
                            <div class="div-table-col">*Bread Color Generally</div>
                            <div class="div-table-col">
                             <input name="bread_color" id="bread_color">                               
                            </div>
                            <div class="div-table-col" style="text-align:center">   
                                  <!-- multi-line text input control -->
                             <input name="comment24" id="comment24">                         
                            </div>
                            <div class="div-table-col">*Shape and size</div>
                            <div class="div-table-col">
                             <input name="shape_size" id="shape_size">                                
                            </div>
                            <div class="div-table-col" style="text-align:center">   
                                  <!-- multi-line text input control -->
                             <input name="comment25" id="comment25">                         
                            </div>
                            <div class="div-table-col">*Internal Texture</div>
                            <div class="div-table-col">
                             <input name="internal_texture" id="internal_texture">                                
                            </div>
                            <div class="div-table-col" style="text-align:center">   
                                  <!-- multi-line text input control -->
                             <input name="comment26" id="comment26">                         
                            </div>
                        </div>
                       </div>  
</div>
                    <h3>7)Finished Product</h3>
                    <h4>* Balance Maintenance</h4>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b>Description</b></div>
               <div  class="div-table-col"><b>Condition</b></div>
               <div  class="div-table-col"><b>Remarks</b></div>
            </div>
          
           <div class="div-table-row">
               <div  class="div-table-col">*Variety by variety physical balance</div>
               <div class="div-table-col">
                <input name="variety_by_varietyphysicalbalance" id="variety_by_varietyphysicalbalance">
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment27" id="comment27">
               </div>
          </div>
           <div class="div-table-row">
               <div  class="div-table-col">* Stock Levels</div>
               <div class="div-table-col">
                <input name="stocklevels" id="stocklevels">
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment28" id="comment28">
               </div>
            </div>
               <div class="div-table-row">
               <div  class="div-table-col">* Rotation of Stocks</div>
               <div class="div-table-col">
                <input name="rotationofstocks" id="rotationofstocks"> 
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment29" id="comment29">
               </div>
               </div>
               <div class="div-table-row">
               <div  class="div-table-col">* Multiple sell by dates Packing</div>
               <div class="div-table-col">
                <input name="multiple_sell" id="multiple_sell">
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment30" id="comment30">
               </div>
               </div>
            </div>
        
      </form>
          
    </b></form>
    ... content in page 3 ...
<p style="page-break-after: always;">&nbsp;</p>
<p style="page-break-before: always;">&nbsp;</p>
... content in page 4 ...

<!-- Create Form -->
    <form id="form" action="adminstaffing.php" method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        <h3>8) Sales Records</h3>
       
        <label for="role" id="label-role">
            <h4>* Loading Books</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col">Description</div>
               <div  class="div-table-col">Condition</div>
               <div  class="div-table-col">Remarks</div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col">Manager's Loading Book</div>
               <div class="div-table-col">
                <input name="MngerLding_cond" id="MngerLding_cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="MngerLding_remrk" id="MngerLding_remrk"
                >
            
               </div>
           <div class="div-table-row">
               <div class="div-table-col">Supervisor's Loading Book</div>
               <div class="div-table-col">
                <input name="SupLding_cond" id="SupLding_cond">
                    
                     
</div>
<div class="div-table-col">

   <!-- multi-line text input control -->
   <input name="SupLding_remrk" id="SupLding_remrk"
   >

  </div>
           
          </div>
        </div>
        </div>
            <label for="role" id="label-role">
                <h4>* Security Books</h4>
                <h4><center>(a) Neatness - Overwriting & wite outs</center></h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">Loading Book</div>
                   <div class="div-table-col">
                    <input name="Security_loading" id="Security_loading">
                    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="Securitylding_remrk" id="Securitylding_remrk">
                </div>
                   <div class="div-table-col">Attendance</div>
                   <div class="div-table-col">
                    <input name="Security_attendance" id="Security_attendance">
                </div>
                <div class="div-table-col">
                <!-- multi-line text input control -->
                <input name="Securityatt_remrk" id="Securityatt_remrk">
                </div>
                   <div class="div-table-col">O.B</div>
                   <div class="div-table-col">
                    <input name="Security_OB" id="Security_OB">
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="SecurityOB_remrk" id="SecurityOB_remrk">
                   </div>
                /div>
            </div>
            </div>
                <label for="role" id="label-role">
                <h4><center>(b) Reliability & Accuracy</center></h4>
                <div class="div-table">
                    <div class="div-table-row">
                       <div class="div-table-col">Description</div>
                       <div  class="div-table-col">Condition</div>
                       <div  class="div-table-col">Remarks</div>
                    </div>
                    <div class="div-table-row">
                     <div class="div-table-col">Loading Book</div>
                   <div class="div-table-col">
                    <input name="Reliability_loading" id="Reliability_loading">
                </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="Reliabiltylding_remrk" id="Reliabiltylding_remrk">
                   </div>
                   <div class="div-table-col">Attendance</div>
                   <div class="div-table-col">
                    <input name="Reliability_Attendance" id="Reliability_Attendance">
                    </div>
                    <div class="div-table-col">
                    <!-- multi-line text input control -->
                    <input name="Reliabiltyatt_remrk" id="Reliabiltyatt_remrk">
                    </div>
                        <div class="div-table-col">O.B</div>
                            <div class="div-table-col">
                                <input name="Reliability_OB" id="Reliability_OB">                                    
                            </div>
                        <div class="div-table-col">   
                                        <!-- multi-line text input control -->
                            <input name="Reliabiltyob_remrk" id="Reliabiltyob_remrk">
                        </div>
                    </div>
                 </div>
                <label for="role" id="label-role">
                    <h4>III )Mini Shop Loading Book</h4>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col">Description</div>
                           <div  class="div-table-col">Condition</div>
                           <div  class="div-table-col">Remarks</div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col">Neatness - Overwriting & wite outs </div>
                           <div class="div-table-col">
                            <input name="Minishpneatness_cond" id="Minishpneatness_cond">
                               
                                 
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="Minishpneatness_remrk" id="Minishpneatness_remrk"
                            >
                        
                           </div>
                        </div>
                    </div>
                   
    </b></form>
    ... content in page 4 ...
<p style="page-break-after: always;">&nbsp;</p>
<p style="page-break-before: always;">&nbsp;</p>
... content in page 5 ...

<!-- Create Form -->
    <form id="form" action="trial2.php" method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
       
        <h3>9) Administration and Staffing</h3>
        <label for="role" id="label-role">
            <h4>* Protection, Safety & Security</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col">Description</div>
               <div  class="div-table-col">Condition</div>
               <div  class="div-table-col">Remarks</div>
            </div>
           <div class="div-table-row">
                <div class="div-table-col">Oven Gloves</div>
                <div class="div-table-col">
                    <input name="OG_Cond" id="OG_Cond" >
                </div>  
                     
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <input name="OG_Remrk" id="OG_Remrk" >
               </div>
               <div class="div-table-col">Uniforms</div>
               <div class="div-table-col">
                    <input name="Uniform_Cond" id="Uniform_Cond" >                   
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="Uniform_Remrk" id="Uniform_Remrk"
                >
            
               </div> 
                 <div class="div-table-col">Shoes</div>
               <div class="div-table-col">
                <input name="Shoes_Cond" id="Shoes_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="Shoes_Remrk" id="Shoes_Remrk"
                >
            
               </div> 
               <div class="div-table-col">Gum Boots</div>
               <div class="div-table-col">
                <input name="GB_Cond" id="GB_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="GB_Remrk" id="GB_Remrk"
                >
            
               </div>
               <div class="div-table-col">Cleaning Gloves</div>
               <div class="div-table-col">
                <input name="CG_Cond" id="CG_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="CG_Remrk" id="CG_Remrk"
                >
            
               </div>
               <div class="div-table-col">Dust Mask / Facemask</div>
               <div class="div-table-col">
                <input name="DM_Cond" id="DM_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="DM_Remrk" id="DM_Remrk"
                >
            
               </div> 
               
               <div class="div-table-col">Emergency key</div>
               <div class="div-table-col">
                <input name="EK_Cond" id="EK_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="EK_Remrk" id="EK_Remrk"
                >
            
               </div> 
                 <div class="div-table-col">Fire Extinguishers</div>
               <div class="div-table-col">
                <input name="FE_Cond" id="FE_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="FE_Renrk" id="FE_Renrk"
                >
            
               </div> 
                 <div class="div-table-col">Alarm System</div>
               <div class="div-table-col">
                <input name="AS_Cond" id="AS_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="AS_Remrk" id="AS_Remrk"
                >
            
               
               </div> 
                 <div class="div-table-col">Panic Button - Mobile</div>
               <div class="div-table-col">
                <input name="Mobile_Cond" id="Mobile_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="Mobile_Remrk" id="Mobile_Remrk"
                >
            
               </div> 

               
                 <div class="div-table-col">Panic Button - Fixed</div>
               <div class="div-table-col">
                <input name="Fixed_Cond" id="Fixed_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="Fixed_Remrk" id="Fixed_Remrk"
                >
            
               </div>
                 <div class="div-table-col">Doors and Locking</div>
               <div class="div-table-col">
                <input name="DL_Cond" id="DL_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="DL_Remrk" id="DL_Remrk"
                >
            
               </div>

              
                 <div class="div-table-col">Security Lights</div>
               <div class="div-table-col">
                <input name="SL_Cond" id="SL_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="SL_Remrk" id="SL_Remrk"
                >
            
               </div>
            </div>
        </div>
        <label for="role" id="label-role">
                <h4><p>(ii) Records</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">Muster Rolls updating</div>
                   <div class="div-table-col">
                    <input name="MR_Cond" id="MR_Cond"  >
                        
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="MR_Remrk" id="MR_Remrk"
                    >
                
                   </div>
                   <div class="div-table-col">* Supervisor</div>
                   <div class="div-table-col">
                    <input name="SupV_Cond" id="SupV_Cond">
                        
    </div>
    <div class="div-table-col">
       <!-- multi-line text input control -->
       <input name="SupV_Remrk" id="SupV_Remrk"
       >
    
      </div>
                   <div class="div-table-col">* Bakery Manager</div>
                   <div class="div-table-col">
                    <input name="BakMng_Cond" id="BakMng_Cond">
                        
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="BakMng_Remrk" id="BakMng_Remrk"
                    >
                
                   </div>
    
                   </div>
               </div>
    
                        
                <label for="role" id="label-role">
                <h4><p>(iii) Discipline</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">* Punctuality & General Conduct</div>
                   <div class="div-table-col">
                    <input name="Discpline_Cond" id="Discpline_Cond"  >
                        
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="Discpline_Remrk" id="Discpline_Remrk"
                    >
                
                   </div>
            </div> 
        </div>
     <label for="role" id="label-role">
                <h4><p>(iv) Training</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">* Educating Subordinates</div>
                   <div class="div-table-col">
                    <input name="Training_Cond" id="Training_Cond"  >
                        
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="Training_Remrk" id="Training_Remrk"
                    >
                
                   </div>
            </div> 
        </div>
                <label for="role" id="label-role">
                    <h4>v)Staff Control</h4>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col">Description</div>
                           <div  class="div-table-col">Condition</div>
                           <div  class="div-table-col">Remarks</div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col">Continous 7 days working for casuals </div>
                            <div class="div-table-col">
                                <input name="SCwrk_Cond" id="SCwrk_Cond">    
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                                <input name="SCwrk_Remrk" id="SCwrk_Remrk" >
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col">Duty Roaster </div>
                           <div class="div-table-col">
                                <input name="SCdr_Cond" id="SCdr_Cond">              
                           </div>
                           <div class="div-table-col">
                               
                            <input name="SCdr_Remrk" id="SCdr_Remrk" >
                           
                        
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col">Exceeding 22 working days by casuals </div>
                            <div class="div-table-col">
                                <input name="SCexced_Cond" id="SCexced_Cond">    
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="SCexced_remrk" id="SCexced_remrk"
                            >
                        
                           </div>
                       </div>
                           <div class="div-table-row">
                           <div class="div-table-col">Standard list of casual employees </div>
                           <div class="div-table-col">
                                <input name="SCCasual_Cond" id="SCCasual_Cond">
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="SCCasual_Remrk" id="SCCasual_Remrk"
                            >
                        
                           </div>
                
        
    
    </div>
</div>

    </b></form>
    ... content in page 5 ...
<p style="page-break-after: always;">&nbsp;</p>
<p style="page-break-before: always;">&nbsp;</p>
... content in page 6 ...
<!-- Create Form -->
    <form id="form" action = "final.php" method = "post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
       
        <label for="role" id="label-role">
        <p><h3>10) .Maintenance of all Books</p></h3>
        
        <h4>i)General Repairs</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col">Description</div>
               <div  class="div-table-col">Condition</div>
               <div  class="div-table-col">Remarks</div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col">*Repairs</div>
               <div class="div-table-col">
                <input name="gen_repairs_cond" id="gen_repairs_cond">
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="gen_repairs_remarks" id="gen_repairs_remarks"
                >
            
               </div>
           <div class="div-table-row">
               <div class="div-table-col">*Accidents</div>
               <div class="div-table-col">
                <input name="gen_repair_acc_condition" id="gen_repair_acc_condition">
                     
                     
</div>
<div class="div-table-col">

   <!-- multi-line text input control -->
   <input name="gen_repairs_acc_remarks" id="gen_repairs_acc_remarks"
   >

  </div>
           

               </div>
          
        </div>
        </div>
        
        
        <h4>ii) First Aid Kit</h4>
        
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col">Description</div>
               <div  class="div-table-col">Condition</div>
               <div  class="div-table-col">Remarks</div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col">*Essentials</div>
               <div class="div-table-col">
                <input name="firstaid_ess_cond" id="firstaid_ess_cond">
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="firstaid_ess_remarks" id="firstaid_ess_remarks"
                >
            
               </div>
           <div class="div-table-row">
               <div class="div-table-col">*Using  Record</div>
               <div class="div-table-col">
                <input name="firstaid_usagerec_cond" id="firstaid_usagerec_cond">
                   
                     
</div>
<div class="div-table-col">

   <!-- multi-line text input control -->
   <input name="firstaid_usagerec_remarks" id="firstaid_usagerec_remarks"
   >

  </div>
           

               </div>
          
        </div>
        </div>
            <label for="role" id="label-role">
                <h4>iii) Miscellaneous Record</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">*Generator</div>
                   <div class="div-table-col">
                    <input name="gen_cond" id="gen_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="gen_remarks" id="gen_remarks"
                    >
                
                   </div>
               <div class="div-table-row">
                   <div class="div-table-col">*Production</div>
                   <div class="div-table-col">
                    <input name="prod_cond" id="prod_cond">
                        
                         
    </div>
    <div class="div-table-col">
       <!-- multi-line text input control -->
       <input name="prod_remarks" id="prod_remarks"
       >
    
      </div>
      </div>
               <div class="div-table-row">
                   <div class="div-table-col">*Crates records</div>
                   <div class="div-table-col">
                    <input name="crate_rec_cond" id="crate_rec_cond">
                       
                         
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="crat_remark" id="crat_remark"
                    >
                
                   </div>
    
                   </div>
                    <div class="div-table-row">
                     <div class="div-table-col">*Stationary book</div>
                   <div class="div-table-col">
                    <input name="station_book_cond" id="station_book_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="station_book_remarks" id="station_book_remarks"
                    >
                
                   </div>
                   </div>

                     <div class="div-table-row">
                     <div class="div-table-col">*Protective clothig book</div>
                   <div class="div-table-col">
                    <input name="protect_cloth_book" id="protect_cloth_book">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="protect_cloth_book_rem" id="protect_cloth_book_rem"
                    >
                
                   </div>
                   </div>
                   
                    <div class="div-table-row">
                     <div class="div-table-col">*Vehicle mileage book</div>
                   <div class="div-table-col">
                    <input name="vehicle_mil_cond" id="vehicle_mil_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="vehicle_mil_remarks" id="vehicle_mil_remarks"
                    >
                
                   </div>
                   </div>
                   
                    <div class="div-table-row">
                     <div class="div-table-col">*Weight chart file</div>
                   <div class="div-table-col">
                    <input name="weight_chart_line_cond" id="weight_chart_line_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="weight_chart_file_remarks" id="weight_chart_file_remarks"
                    >
                
                   </div>
                   </div>
                   
                    <div class="div-table-row">
                     <div class="div-table-col">*Underweight chart file</div>
                   <div class="div-table-col">
                    <input name="underweight_chart_file_cond" id="underweight_chart_file_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="underweight_chart_line_remarks" id="underweight_chart_line_remarks"
                    >
                
                   </div>
                   </div>

               </div>
                    
                </div>
               
                <h3><p>11) .Motor Vehicles</p></h3>
    
                <div class="div-table">
                    <div class="div-table-row">
                       <div class="div-table-col">Description</div>
                       <div  class="div-table-col">Condition</div>
                       <div  class="div-table-col">Remarks</div>
                    </div>
                   <div class="div-table-row">
                         <div class="div-table-col">*Driver allocated one vehicle constant</div>
                       <div class="div-table-col">
                        <input name="driver_allocation_cond" id="driver_allocation_cond">
                            
        </div>
                       <div class="div-table-col">
                           <!-- multi-line text input control -->
                        <input name="driver_allocation_remarks" id="driver_allocation_remarks"
                        >
                    
                       </div>
                   </div>
                   <div class="div-table-row">
                       <div class="div-table-col">* Millege per litre of fuel vehicle</div>
                       <div class="div-table-col">
                        <input name="mil_per_litre_veh_cond" id="mil_per_litre_veh_cond">
                            
        </div>
        <div class="div-table-col">
           <!-- multi-line text input control -->
           <input name="mil_per_litre_veh_remar" id="mil_per_litre_veh_remar"
           >
        
          </div>
          </div>
                   <div class="div-table-row">
                       <div class="div-table-col">*Motor vehicles cleanliness</div>
                       <div class="div-table-col">
                        <input name="motor_veh_clean_cond" id="motor_veh_clean_cond">
                            
                       </div>
                       <div class="div-table-col">   
                             <!-- multi-line text input control -->
                        <input name="motor_veh_clean_remarks" id="motor_veh_clean_remarks"
                        >
                    
                       </div>
        
                       </div>                
                        </div>
                        
                <label for="role" id="label-role">
                   <b><h3><p> 12 )Customer Service and Communication</p></h3></b>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col">Description</div>
                           <div  class="div-table-col">Condition</div>
                           <div  class="div-table-col">Remarks</div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col">*Customer Complain </div>
                           <div class="div-table-col">
                            <input name="cus_comp_cond" id="cus_comp_cond">
                               
            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="cus_comp_remarks" id="cus_comp_remarks"
                            >
                        
                           </div>
                       <div class="div-table-row">
                           <div class="div-table-col">*Implementation of assignments</div>
                           <div class="div-table-col">
                            <input name="imp_ass_cond" id="imp_ass_cond">
                                
            </div>
            <div><div class="div-table-col"></div>
               <!-- multi-line text input control -->
               <input name="imp_ass_remarks" id="imp_ass_remarks"
               >
            
              </div>
              </div>
                       <div class="div-table-row">
                           <div class="div-table-col">*Communication</div>
                           <div class="div-table-col">
                            <input name="comm_cond" id="comm_cond">
                                
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                            <input name="comm_remarks" id="comm_remarks"
                            >
                        
                           </div>
            
                           </div>
                           
                  
                       </div>  
                    </div>
                    
            <label for="role" id="label-role">
                   <b><h3><p> Accounts</p></h3></b>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col">Description</div>
                           <div  class="div-table-col">Condition</div>
                           <div  class="div-table-col">Remarks</div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col">13) .Monitor loading trend so as to plan production accordingly</div>
                           <div class="div-table-col">
                            <input name="mon_load_trend_cond" id="mon_load_trend_cond">
                               
            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="mon_load_trend_remarks" id="mon_load_trend_remarks"
                            >
                        
                           </div>
                           </div>
                           
                       <div class="div-table-row">
                           <div class="div-table-col">14) .Verification of cashflow</div>
                           <div class="div-table-col">
                            <input name="ver_cashflow_cond" id="ver_cashflow_cond">
                               
            </div>
            <div><div class="div-table-col"></div>
               <!-- multi-line text input control -->
               <input name="ver_cashflow_remarks" id="ver_cashflow_remarks"
               >
            
              </div>
              </div>
                       <div class="div-table-row">
                           <div class="div-table-col">15) .Verification of bakery stock as per cashflow balances</div>
                           <div class="div-table-col">
                            <input name="ver_bak_stock_cond" id="ver_bak_stock_cond">
                               
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                            <input name="ver_bak_stock_remarks" id="ver_bak_stock_remarks"
                            >
                        
                           </div>
            
                           </div>
                           <div class="div-table-row">
                            <div class="div-table-col">16) .Cash verification for cashiers as per cashflow balances</div>
                            <div class="div-table-col">
                             <input name="cash_ver_cashier_cond" id="cash_ver_cashier_cond">
                                
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="cash_ver_cashier_remarks" id="cash_ver_cashier_remarks"
                             >
                         
                            </div>
             
    
                        </div>
                        <div class="div-table-row">
                            <div class="div-table-col">17) .Insuring control of debtors and credit limits</div>
                            <div class="div-table-col">
                             <input name="insuring_cont_debt_cred_cond" id="insuring_cont_debt_cred_cond">
                                
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="insuring_cont_debt_cred_remarks" id="insuring_cont_debt_cred_remarks"
                             >
                         
                            </div>
             
    
                        </div>
                  
                       </div> 

                        
                       
                    </div>
        
    </div>
    </b></form> 
    </div><script src="js/html2canvas.min.js"></script>

<!-- jsPDF library -->
<script src="js/jsPDF/dist/jspdf.min.js"></script>

<script>
   function Convert_HTML_To_PDF() {
var elementHTML = document.getElementById('contentToPrint');

html2canvas(elementHTML, {
useCORS: true,
onrendered: function(canvas) {
var pdf = new jsPDF('p', 'pt', 'A4');

var pageHeight = 1300;
var pageWidth = 1500;
for (var i = 0; i <= elementHTML.clientHeight / pageHeight; i++) {
var srcImg = canvas;
var sX = 0;
var sY = pageHeight * i; // start 1 pageHeight down for every new page
var sWidth = pageWidth;
var sHeight = pageHeight;
var dX = 0;
var dY = 0;
var dWidth = pageWidth;
var dHeight = pageHeight;

window.onePageCanvas = document.createElement("canvas");
onePageCanvas.setAttribute('width', pageWidth);
onePageCanvas.setAttribute('height', pageHeight);
var ctx = onePageCanvas.getContext('2d');
ctx.drawImage(srcImg, sX, sY, sWidth, sHeight, dX, dY, dWidth, dHeight);

var canvasDataURL = onePageCanvas.toDataURL("image/png", 1.0);
var width = onePageCanvas.width;
var height = onePageCanvas.clientHeight;

if (i > 0) // if we're on anything other than the first page, add another page
pdf.addPage(612, 864); // 8.5" x 12" in pts (inches*72)

pdf.setPage(i + 1); // now we declare that we're working on that page
pdf.addImage(canvasDataURL, 'PNG', 20, 50, (width * .42), (height * .72)); // add content to the page
}

// Save the PDF
pdf.save('document.pdf');
}
});
}
</script>

    ... content in page 6 (End) ...
<p style="page-break-after: always;">&nbsp;</p>
<p style="page-break-before: always;">&nbsp;</p>

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

