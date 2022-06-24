<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "../includes/cfg.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM adminstaffing INNER JOIN branch ON branch.branch_id=adminstaffing.branch_id WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $branchname = $row["branchname"];
    $branchmanager = $row["branchmanager"];
    $opsmanager = $row["opsmanager"];
    $TransactionDate= $row["TransactionDate"];
    $sweepcondition = $row["sweepcondition"];
    $sweepremark = $row["sweepremark"];
    $washcondition = $row["washcondition"];
    $washremark = $row["washremark"];
    $tablecondition = $row["tablecondition"];
    $tableremark = $row["tableremark"];
    $smellcondition = $row["smellcondition"];
    $smellremark = $row["smellremark"];
    $floorcondition = $row["floorcondition"];
    $floorremark = $row["floorremark"];
    $garbagecondition = $row["garbagecondition"];
    $garbageremark = $row["garbageremark"];
    $catchercondition = $row["catchercondition"];
    $catcherremark = $row["catcherremark"];
    $fliescondition = $row["fliescondition"];
    $fliesremark = $row["fliesremark"];
    $roachescondition = $row["roachescondition"];
    $roachesremark=$row["roachesremark"];
    $ratscondition=$row["ratscondition"];
    $ratsremark=$row["ratsremark"];
    $cratescondition=$row["cratescondition"];
    $cratesremark=$row["cratesremark"];
    $uniformcondition=$row["uniformcondition"];
    $uniformremark=$row["uniformremark"];
    $scoatcondition=$row["scoatcondition"];
    $scoatremark=$row["scoatremark"];
    $ovenmancondition=$row["ovenmancondition"];
    $ovenmanremark=$row["ovenmanremark"];
    $suniformcondition=$row["suniformcondition"];
    $suniformremark=$row["suniformremark"];
    $m1mechanical=$row["m1mechanical"];
    $m1layout=$row["m1layout"];
    $m1remark=$row["m1remark"];
    $m2mechanical=$row["m2mechanical"];
    $m2layout=$row["m2layout"];
    $m2remark=$row["m2remark"];
    $dmechanical=$row["dmechanical"];
    $dlayout=$row["dlayout"];
    $dremark=$row["dremark"];
    $p1mechanical=$row["p1mechanical"];
    $p1layout=$row["p1layout"];
    $p1remark=$row["p1remark"];
    $p2mechanical=$row["p2mechanical"];
    $p2layout=$row["p2layout"];
    $p2remark=$row["p2remark"];
    $p3mechanical=$row["p3mechanical"];
    $p3layout=$row["p3layout"];
    $p3remark=$row["p3remark"];
    $o1mechanical=$row["o1mechanical"];
    $o1layout=$row["o1layout"];
    $o1remark=$row["o1remark"];
    $o2mechanical=$row["o2mechanical"];
    $o2layout=$row["o2layout"];
    $o2remark=$row["o2remark"];
    $o3mechanical=$row["o3mechanical"];
    $o3layout=$row["o3layout"];
    $o3remark=$row["o3remark"];
    $slicermechanical=$row["slicermechanical"];
    $slicerlayout=$row["slicerlayout"];
    $slicerremark=$row["slicerremark"];
    $gmechanical=$row["gmechanical"];
    $glayout=$row["glayout"];
    $gremark=$row["gremark"];
    $edsmechanical=$row["edsmechanical"];
    $edslayout=$row["edslayout"];
    $edsremark=$row["edsremark"];
    $scalemechanical=$row["scalemechanical"];
    $scalelayout=$row["scalelayout"];
    $scaleremark=$row["scaleremark"];
    $maintenanceoften=$row["maintenanceoften"];
    $maintenancestate=$row["maintenancestate"];
    $maintenanceremark=$row["maintenanceremark"];
    $tinsmechanical=$row["tinsmechanical"];
    $tinslayout=$row["tinslayout"];
    $tinsremark=$row["tinsremark"];
    $wiresmechanical=$row["wiresmechanical"];
    $wireslayout=$row["wireslayout"];
    $wiresremark=$row["wiresremark"];
    $tideness=$row["tideness"];
    $comment1=$row["comment1"];
    $alterations=$row["alterations"];
    $comment2=$row["comment2"];
    $manager_checks=$row["manager_checks"];
    $comment3=$row["comment3"];
    $mixchart_cashflow=$row["mixchart_cashflow"];
    $comment4=$row["comment4"];
    $mixchart_production=$row["mixchart_production"];
    $comment5=$row["comment5"];
    $consumption=$row["consumption"];
    $comment6=$row["comment6"];
    $sellbydate=$row["sellbydate"];
    $comment7=$row["comment7"];
    $breadreturns=$row["breadreturns"];
    $comment8=$row["comment8"];
    $damagepolybags=$row["damagepolybags"];
    $comment9=$row["comment9"];
    $processflow=$row["processflow"];
    $comment10=$row["comment10"];
    $slicing=$row["slicing"];
    $comment11=$row["comment11"];
    $dividing_range=$row["dividing_range"];
    $comment12=$row["comment12"];
    $breadweight=$row["breadweight"];
    $comment13=$row["comment13"];
    $bread_yield=$row["bread_yield"];
    $comment14=$row["comment14"];
    $tapes=$row["tapes"];
    $comment15=$row["comment15"];
    $ingredients=$row["ingredients"];
    $comment16=$row["comment16"];
    $gunnybags=$row["gunnybags"];
    $comment17=$row["comment17"];
    $flour=$row["flour"];
    $comment18=$row["comment18"];
    $polybags=$row["polybags"];
    $comment19=$row["comment19"];
    $damagedpolybags=$row["damagedpolybags"];
    $comment20=$row["comment20"];
    $mkt_returns=$row["mkt_returns"];
    $comment21=$row["comment21"];
    $sell_by_date_returns=$row["sell_by_date_returns"];
    $comment22=$row["comment22"];
    $return_goods=$row["return_goods"];
    $comment23=$row["comment23"];
    $bread_color=$row["bread_color"];
    $comment24=$row["comment24"];
    $shape_size=$row["shape_size"];
    $comment25=$row["comment25"];
    $internal_texture=$row["internal_texture"];
    $comment26=$row["comment26"];
    $variety_by_varietyphysicalbalance=$row["variety_by_varietyphysicalbalance"];
    $comment27=$row["comment27"];
    $stocklevels=$row["stocklevels"];
    $comment28=$row["comment28"];
    $rotationofstocks=$row["rotationofstocks"];
    $comment29=$row["comment29"];
    $multiple_sell=$row["multiple_sell"];
    $comment30=$row["comment30"];
    $MngerLding_cond=$row["MngerLding_cond"];
    $MngerLding_remrk=$row["MngerLding_remrk"];
    $SupLding_cond=$row["SupLding_cond"];
    $SupLding_remrk=$row["SupLding_remrk"];
    $Security_loading=$row["Security_loading"];
    $Securitylding_remrk=$row["Securitylding_remrk"];
    $Security_attendance=$row["Security_attendance"];
    $Securityatt_remrk=$row["Securityatt_remrk"];
    $Security_OB=$row["Security_OB"];
    $SecurityOB_remrk=$row["SecurityOB_remrk"];
    $Reliability_loading=$row["Reliability_loading"];
    $Reliabiltylding_remrk=$row["Reliabiltylding_remrk"];
    $Reliability_Attendance=$row["Reliability_Attendance"];
    $Reliabiltyatt_remrk=$row["Reliabiltyatt_remrk"];
    $Reliability_OB=$row["Reliability_OB"];
    $Reliabiltyob_remrk=$row["Reliabiltyob_remrk"];
    $Minishpneatness_cond=$row["Minishpneatness_cond"];
    $Minishpneatness_remrk=$row["Minishpneatness_remrk"];
    $OG_Cond = $row["OG_Cond"];
    $OG_Remrk = $row["OG_Remrk"];
    $Uniform_Cond = $row["Uniform_Cond"];
    $Uniform_Remrk = $row["Uniform_Remrk"];
    $Shoes_Cond = $row["Shoes_Cond"];
    $Shoes_Remrk = $row["Shoes_Remrk"];
    $GB_Cond = $row["GB_Cond"];
    $GB_Remrk = $row["GB_Remrk"];
    $CG_Cond = $row["CG_Cond"];
    $CG_Remrk = $row["CG_Remrk"];
    $DM_Cond = $row["DM_Cond"];
    $DM_Remrk = $row["DM_Remrk"];
    $EK_Cond = $row["EK_Cond"]; 
    $EK_Remrk = $row["EK_Remrk"];
    $FE_Cond = $row["FE_Cond"];
    $FE_Renrk = $row["FE_Renrk"]; 
    $AS_Cond = $row["AS_Cond"];
    $AS_Remrk = $row["AS_Remrk"];
    $Mobile_Cond = $row["Mobile_Cond"];
    $Mobile_Remrk = $row["Mobile_Remrk"];
    $Fixed_Cond = $row["Fixed_Cond"];
    $Fixed_Remrk = $row["Fixed_Remrk"];
    $DL_Cond = $row["DL_Cond"];
    $DL_Remrk = $row["DL_Remrk"];
    $SL_Cond = $row["SL_Cond"];
    $SL_Remrk = $row["SL_Remrk"];
    $MR_Cond = $row["MR_Cond"];
    $MR_Remrk = $row["MR_Remrk"];
    $SupV_Cond = $row["SupV_Cond"];
    $SupV_Remrk = $row["SupV_Remrk"];
    $BakMng_Cond = $row["BakMng_Cond"];
    $BakMng_Remrk = $row["BakMng_Remrk"];
    $Discpline_Cond = $row["Discpline_Cond"];
    $Discpline_Remrk = $row["Discpline_Remrk"];
    $Training_Cond = $row["Training_Cond"];
    $Training_Remrk = $row["Training_Remrk"];
    $SCwrk_Cond = $row["SCwrk_Cond"]; 
    $SCwrk_Remrk = $row["SCwrk_Remrk"];
    $SCdr_Cond = $row["SCdr_Cond"];
    $SCdr_Remrk = $row["SCdr_Remrk"];
    $SCexced_Cond = $row["SCexced_Cond"];
    $SCexced_remrk = $row["SCexced_remrk"]; 
    $SCCasual_Cond = $row["SCCasual_Cond"];
    $SCCasual_Remrk = $row["SCCasual_Remrk"];
    $gen_repairs_cond = $row["gen_repairs_cond"];
    $gen_repairs_remarks = $row["gen_repairs_remarks"];
     $gen_repair_acc_condition = $row["gen_repair_acc_condition"];
     $gen_repairs_acc_remarks = $row["gen_repairs_acc_remarks"];
     $firstaid_ess_cond = $row["firstaid_ess_cond"];
     $firstaid_ess_remarks = $row["firstaid_ess_remarks"];
     $firstaid_usagerec_cond = $row["firstaid_usagerec_cond"];
     $firstaid_usagerec_remarks = $row["firstaid_usagerec_remarks"];
     $gen_cond = $row["gen_cond"];
     $gen_remarks = $row["gen_remarks"];
     $prod_cond = $row["prod_cond"];
     $prod_remarks= $row["prod_remarks"];
     $crate_rec_cond = $row["crate_rec_cond"];
     $crat_remark= $row["crat_remark"];
     $station_book_cond = $row["station_book_cond"];
     $station_book_remarks = $row["station_book_remarks"];
     $protect_cloth_book = $row["protect_cloth_book"];
     $protect_cloth_book_rem = $row["protect_cloth_book_rem"];
     $vehicle_mil_cond= $row["vehicle_mil_cond"];
     $vehicle_mil_remarks = $row["vehicle_mil_remarks"];
     $weight_chart_line_cond = $row["weight_chart_line_cond"];
     $weight_chart_file_remarks = $row["weight_chart_file_remarks"];
     $underweight_chart_file_cond = $row["underweight_chart_file_cond"];
     $underweight_chart_line_remarks = $row["underweight_chart_line_remarks"];
     $driver_allocation_cond= $row["driver_allocation_cond"];
     $driver_allocation_remarks = $row["driver_allocation_remarks"];
     $mil_per_litre_veh_cond = $row["mil_per_litre_veh_cond"];
     $mil_per_litre_veh_remar = $row["mil_per_litre_veh_remar"];
     $motor_veh_clean_cond = $row["motor_veh_clean_cond"];
     $motor_veh_clean_remarks = $row["motor_veh_clean_remarks"];
     $cus_comp_cond= $row["cus_comp_cond"];
     $cus_comp_remarks = $row["cus_comp_remarks"];
     $imp_ass_cond = $row["imp_ass_cond"];
     $imp_ass_remarks = $row["imp_ass_remarks"];
     $comm_cond = $row["comm_cond"];
     $comm_remarks = $row["comm_remarks"];
     $mon_load_trend_cond = $row["mon_load_trend_cond"];
     $mon_load_trend_remarks = $row["mon_load_trend_remarks"];
     $ver_cashflow_cond = $row["ver_cashflow_cond"];
     $ver_cashflow_remarks = $row["ver_cashflow_remarks"];
     $ver_bak_stock_cond = $row["ver_bak_stock_cond"];
     $ver_bak_stock_remarks = $row["ver_bak_stock_remarks"];
     $cash_ver_cashier_cond= $row["cash_ver_cashier_cond"];
     $cash_ver_cashier_remarks = $row["cash_ver_cashier_remarks"];
     $insuring_cont_debt_cred_cond = $row["insuring_cont_debt_cred_cond"];
     $insuring_cont_debt_cred_remarks = $row["insuring_cont_debt_cred_remarks"];

    } else{
        // URL doesn't contain valid id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
    
} else{
    echo "Oops! Something went wrong. Please try again later.";
}
}

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($link);
} else{
// URL doesn't contain id parameter. Redirect to error page
header("location: error.php");
exit();
}
?>