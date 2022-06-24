<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sel";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
        
        
 session_start();
 error_reporting(0);
 /*if (isset($_POST['gen_repairs_cond'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['gen_repair_acc_condition'])
 || empty($_POST['gen_repair_acc_remarks'])
 || empty($_POST['gen_repair_acc_remarks'])
 || empty($_POST['firstaid_ess_cond'])
 || empty($_POST['firstaid_ess_remarks'])
 || empty($_POST['firstaid_usagerec_cond'])
 || empty($_POST['firstaid_usagerec_remarks'])
 || empty($_POST['gen_cond'])
 || empty($_POST['gen_remarks'])
 || empty($_POST['prod_cond'])
 || empty($_POST['prod_remarks'])
 || empty($_POST['crate_rec_cond'])
 || empty($_POST['crat_remark'])
 || empty($_POST['station_book_cond'])
 || empty($_POST['station_book_remarks'])
 || empty($_POST['protect_cloth_book'])
 || empty($_POST['protect_cloth_book_rem'])
 || empty($_POST['vehicle_mil_cond'])
 || empty($_POST['vehicle_mil_remarks'])
 || empty($_POST['weight_chart_line_cond'])
 || empty($_POST['weight_chart_file_remarks'])
 || empty($_POST['underweight_chart_file_cond'])
 || empty($_POST['underweight_chart_line_remarks'])
 || empty($_POST['driver_allocation_cond'])
 || empty($_POST['driver_allocation_remarks'])
 || empty($_POST['mil_per_litre_veh_cond'])
 || empty($_POST['mil_per_litre_veh_remar'])
 || empty($_POST['motor_veh_clean_cond'])
 || empty($_POST['motor_veh_clean_remarks'])
 || empty($_POST['cus_comp_cond'])
 || empty($_POST['cus_comp_remarks'])
 || empty($_POST['imp_ass_cond'])
 || empty($_POST['imp_ass_remarks'])
 || empty($_POST['comm_cond'])
 || empty($_POST['comm_remarks'])
 || empty($_POST['mon_load_trend_cond'])
 || empty($_POST['mon_load_trend_remarks'])
 || empty($_POST['ver_cashflow_cond'])
 || empty($_POST['ver_cashflow_remarks'])
 || empty($_POST['ver_bak_stock_cond'])
 || empty($_POST['ver_bak_stock_remarks'])
 || empty($_POST['cash_ver_cashier_cond'])
 || empty($_POST['cash_ver_cashier_remarks'])
 || empty($_POST['insuring_cont_debt_cred_cond'])
 || empty($_POST['insuring_cont_debt_cred_remarks'])){ */
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }  
 extract($_SESSION['post']); // Function to extract array.
  // Storing values in database.
 $sql ="INSERT into adminstaffing  values('id','$branch_id','$branchmanager','$opsmanager',now(),'$sweepcondition','$sweepremark','$washcondition','$washremark','$tablecondition','$tableremark','$smellcondition','$smellremark','$floorcondition','$floorremark','$garbagecondition','$garbageremark','$catchercondition','$catcherremark','$fliescondition','$fliesremark','$roachescondition','$roachesremark','$ratscondition','$ratsremark','$cratescondition','$cratesremark','$uniformcondition','$uniformremark','$scoatcondition',
'$scoatremark','$ovenmancondition','$ovenmanremark','$suniformcondition','$suniformremark','$m1mechanical','$m1layout','$mixer1','$m2mechanical','$m2layout','$mixer2','$dough','$refiner','$doughrefiner','$p1mechanical','$p1layout','$proover1','$p2mechanical','$p2layout','$proover2','$p3mechanical','$p3layout','$proover3','$o1mechanical','$o1layout','$oven1','$o2mechanical','$o2layout','$oven2','$o3mechanical','$o3layout','$oven3','$smechanical','$slayout','$slicer','$gmechanical','$glayout','$generator','$edsmechanical',
'$edslayout','$edsremark','$scalemechanical','$scalelayout','$slicingscale','$often','$state','$comment','$baking','$tins','$bakingtins','$cooling','$wires','$coolingwires','$tideness','$comment1','$alterations', '$comment2' , '$manager_checks','$comment3','$mixchart_cashflow', '$comment4', '$mixchart_production','$comment5','$consumption', '$comment6' ,'$sellbydate','$comment7','$breadreturns', '$comment8' , '$damagepolybags','$comment9','$processflow', '$comment10', '$slicing','$comment11','$dividing_range', '$comment12',
'$breadweight','$comment13','$bread_yield', '$comment14' , '$tapes','$comment15','$ingredients', '$comment16', '$gunnybags','$comment17','$flour', '$comment18' ,'$polybags ','$comment19','$damagedpolybags', '$comment20' , '$mkt_returns','$comment21','$sell_by_date_returns', '$comment22', '$return_goods','$comment23','$bread_color', '$comment24','$shape_size','$comment25','$internal_texture', '$comment26','$variety_by_varietyphysicalbalance','$comment27','$stocklevels','$comment28','$rotationofstocks','$comment29','$multiple_sell','$comment30', '$MngerLding_cond', '$MngerLding_remrk', '$SupLding_cond', '$SupLding_remrk', '$Security_loading', '$Securitylding_remrk', 
'$Security_attendance', '$Securityatt_remrk', '$Security_OB', '$SecurityOB_remrk', '$Reliability_loading', '$Reliabiltylding_remrk', '$Reliabiltyatt_remrk', '$Reliability_Attendance', '$Reliabiltyob_remrk', '$Reliability_OB','$Minishpneatness_cond', '$Minishpneatness_remrk', '$OG_Cond', '$OG_Remrk', '$Uniform_Cond', '$Uniform_Remrk', '$Shoes_Cond', '$Shoes_Remrk', '$GB_Cond', '$GB_Remrk', '$CG_Cond', '$CG_Remrk', '$DM_Cond', '$DM_Remrk', '$EK_Cond', '$EK_Remrk', '$FE_Cond', '$FE_Renrk','$AS_Cond', '$AS_Remrk', '$Mobile_Cond', 
'$Mobile_Remrk', '$Fixed_Cond', '$Fixed_Remrk', '$DL_Cond', '$DL_Remrk', '$SL_Cond', '$SL_Remrk', '$MR_Cond', '$MR_Remrk', '$SupV_Cond', '$SupV_Remrk', '$BakMng_Cond', '$BakMng_Remrk', '$Discpline_Cond', '$Discpline_Remrk', '$Training_Cond', '$Training_Remrk','$SCwrk_Cond', '$SCwrk_Remrk','$SCdr_Cond', '$SCdr_Remrk', '$SCexced_Cond', '$SCexced_remrk', '$SCCasual_Cond', '$SCCasual_Remrk', '$gen_repairs_cond', '$gen_repairs_remarks', '$gen_repair_acc_condition', '$gen_repairs_acc_remarks' , '$firstaid_ess_cond', '$firstaid_ess_remarks', 
'$firstaid_usagerec_cond', '$firstaid_usagerec_remarks', '$gen_cond', '$gen_remarks', '$prod_cond', '$prod_remarks', '$crate_rec_cond', '$crat_remark', '$station_book_cond', '$station_book_remarks', '$protect_cloth_book', '$protect_cloth_book_rem', '$vehicle_mil_cond', '$vehicle_mil_remarks', '$weight_chart_line_cond', '$weight_chart_file_remarks', '$underweight_chart_file_cond', '$underweight_chart_line_remarks', '$driver_allocation_cond','$driver_allocation_remarks','$mil_per_litre_veh_cond', '$mil_per_litre_veh_remar' , '$motor_veh_clean_cond',
'$motor_veh_clean_remarks','$cus_comp_cond','$cus_comp_remarks','$imp_ass_cond', '$imp_ass_remarks' , '$comm_cond','$comm_remarks','$mon_load_trend_cond', '$mon_load_trend_remarks', '$ver_cashflow_cond', '$ver_cashflow_remarks', '$ver_bak_stock_cond', '$ver_bak_stock_remarks', '$cash_ver_cashier_cond', '$cash_ver_cashier_remarks', '$insuring_cont_debt_cred_cond', '$insuring_cont_debt_cred_remarks')";
  if (mysqli_query($conn, $sql)) {
        //echo"<script>('New record created successfully');</script>";
        echo "<script>alert('Record Created Successfully');</script>";
          echo("<script>window.location = 'Dashboard.php';</script>");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
 ?>
 </div>
 </div>
 </body>
</html>

