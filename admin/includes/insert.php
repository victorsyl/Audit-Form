<?php

include_once("../includes/db_connect.php");
$sqlQuery = "INSERT INTO adminstaffing VALUES ('$branchname','$branchmanager','$opsmanager','$sweepcondition','$sweepremark','$washcondition','$washremark','$tablecondition','$tableremark','$smellcondition','$smellremark','$floorcondition','$floorremark','$garbagecondition','$garbageremark','$catchercondition','$catcherremark','$fliescondition','$fliesremark','$roachescondition','$roachesremark','$ratscondition','$ratsremark','$cratescondition','$cratesremark','$uniformcondition','$uniformremark','$scoatcondition',
'$scoatremark','$ovenmancondition','$ovenmanremark','$suniformcondition','$suniformremark','$'$sweepcondition','$sweepremark','$washcondition','$washremark','$tablecondition','$tableremark','$smellcondition','$smellremark','$floorcondition','$floorremark','$garbagecondition','$garbageremark','$catchercondition','$catcherremark','$fliescondition','$fliesremark','$roachescondition','$roachesremark','$ratscondition','$ratsremark','$cratescondition','$cratesremark','$uniformcondition','$uniformremark','$scoatcondition',
'$scoatremark','$ovenmancondition','$ovenmanremark','$suniformcondition','$suniformremark,'$m1mechanical','$m1layout','$mixer1','$m2mechanical','$m2layout','$mixer2','$dough','$refiner','$doughrefiner','$p1mechanical','$p1layout','$proover1','$p2mechanical','$p2layout','$proover2','$p3mechanical','$p3layout','$proover3','$o1mechanical','$o1layout','$oven1','$o2mechanical','$o2layout','$oven2','$o3mechanical','$o3layout','$oven3','$smechanical','$slayout','$slicer','$gmechanical','$glayout','$generator','$edsmechanical',
'$edslayout','$edsremark','$scalemechanical','$scalelayout','$slicingscale','$often','$state','$comment','$baking','$tins','$bakingtins','$cooling','$wires','$coolingwires','$tideness','$comment1','$alterations', '$comment2' , '$manager_checks','$comment3','$mixchart_cashflow', '$comment4', '$mixchart_production','$comment5','$consumption', '$comment6' ,'$sellbydate','$comment7','$breadreturns', '$comment8' , '$damagepolybags','$comment9','$processflow', '$comment10', '$slicing','$comment11','$dividing_range', '$comment12',
'$breadweight','$comment13','$bread_yield', '$comment14' , '$tapes','$comment15','$ingredients', '$comment16', '$gunnybags','$comment17','$flour', '$comment18' ,'$polybags ','$comment19','$damagedpolybags', '$comment20' , '$mkt_returns','$comment21','$sell_by_date_returns', '$comment22', '$return_goods','$comment23','$bread_color', '$comment24','$shape_size','$comment25','$internal_texture', '$comment26', '$MngerLding_cond', '$MngerLding_remrk', '$SupLding_cond', '$SupLding_remrk', '$Security_loading', '$Securitylding_remrk', 
'$Security_attendance', '$Securityatt_remrk', '$Security_OB', '$SecurityOB_remrk', '$Reliability_loading', '$Reliabiltylding_remrk', '$Reliabiltyatt_remrk', '$Reliability_Attendance', '$Reliabiltyob_remrk', '$Reliability_OB','$Minishpneatness_cond', '$Minishpneatness_remrk', '$OG_Cond', '$OG_Remrk', '$Uniform_Cond', '$Uniform_Remrk', '$Shoes_Cond', '$Shoes_Remrk', '$GB_Cond', '$GB_Remrk', '$CG_Cond', '$CG_Remrk', '$DM_Cond', '$DM_Remrk', '$EK_Cond', '$EK_Remrk', '$FE_Cond', '$FE_Renrk','$AS_Cond', '$AS_Remrk', '$Mobile_Cond', 
'$Mobile_Remrk', '$Fixed_Cond', '$Fixed_Remrk', '$DL_Cond', '$DL_Remrk', '$SL_Cond', '$SL_Remrk', '$MR_Cond', '$MR_Remrk', '$SupV_Cond', '$SupV_Remrk', '$BakMng_Cond', '$BakMng_Remrk', '$Discpline_Cond', '$Discpline_Remrk', '$Training_Cond', '$Training_Remrk','$SCwrk_Cond', '$SCwrk_Remrk','$SCdr_Cond', '$SCdr_Remrk', '$SCexced_Cond', '$SCexced_remrk', '$SCCasual_Cond', '$SCCasual_Remrk', '$gen_repairs_cond', '$gen_repairs_remarks', '$gen_repair_acc_condition', '$gen_repairs_acc_remarks' , '$firstaid_ess_cond', '$firstaid_ess_remarks', 
'$firstaid_usagerec_cond', '$firstaid_usagerec_remarks', '$gen_cond', '$gen_remarks', '$prod_cond', '$prod_remarks', '$crate_rec_cond', '$crat_remark', '$station_book_cond', '$station_book_remarks', '$protect_cloth_book', '$protect_cloth_book_rem', '$vehicle_mil_cond', '$vehicle_mil_remarks', '$weight_chart_line_cond', '$weight_chart_file_remarks', '$underweight_chart_file_cond', '$underweight_chart_line_remarks', '$driver_allocation_cond','$driver_allocation_remarks','$mil_per_litre_veh_cond', '$mil_per_litre_veh_remar' , '$motor_veh_clean_cond',
'$motor_veh_clean_remarks','$cus_comp_cond','$cus_comp_remarks','$imp_ass_cond', '$imp_ass_remarks' , '$comm_cond','$comm_remarks','$mon_load_trend_cond', '$mon_load_trend_remarks', '$ver_cashflow_cond', '$ver_cashflow_remarks', '$ver_bak_stock_cond', '$ver_bak_stock_remarks', '$cash_ver_cashier_cond', '$cash_ver_cashier_remarks', '$insuring_cont_debt_cred_cond', '$insuring_cont_debt_cred_remarks')";

$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
$developersData = array();
while( $developer = mysqli_fetch_assoc($resultSet) ) {
	$developersData[] = $developer;
}	
if(isset($_POST["dataExport"])) {	
	$fileName = "report_export_".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");	
	$showColoumn = false;
	if(!empty($developersData)) {
	  foreach($developersData as $developerInfo) {
		if(!$showColoumn) {		 
		  echo implode("\t", array_keys($developerInfo)) . "\n";
		  $showColoumn = true;
		}
		echo implode("\t", array_values($developerInfo)) . "\n";
	  }
	}
	exit;  
}
?>