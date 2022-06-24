/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.24-MariaDB : Database - sel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sel` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sel`;

/*Table structure for table `adminstaffing` */

DROP TABLE IF EXISTS `adminstaffing`;

CREATE TABLE `adminstaffing` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `branch_id` int(255) NOT NULL,
  `branchmanager` varchar(255) NOT NULL,
  `opsmanager` varchar(255) NOT NULL,
  `TransactionDate` date NOT NULL DEFAULT current_timestamp(),
  `sweepcondition` text NOT NULL,
  `sweepremark` text NOT NULL,
  `washcondition` text NOT NULL,
  `washremark` text NOT NULL,
  `tablecondition` text NOT NULL,
  `tableremark` text NOT NULL,
  `smellcondition` text NOT NULL,
  `smellremark` text NOT NULL,
  `floorcondition` text NOT NULL,
  `floorremark` text NOT NULL,
  `garbagecondition` text NOT NULL,
  `garbageremark` text NOT NULL,
  `catchercondition` text NOT NULL,
  `catcherremark` text NOT NULL,
  `fliescondition` text NOT NULL,
  `fliesremark` text NOT NULL,
  `roachescondition` text NOT NULL,
  `roachesremark` text NOT NULL,
  `ratscondition` text NOT NULL,
  `ratsremark` text NOT NULL,
  `cratescondition` text NOT NULL,
  `cratesremark` text NOT NULL,
  `uniformcondition` text NOT NULL,
  `uniformremark` text NOT NULL,
  `scoatcondition` text NOT NULL,
  `scoatremark` text NOT NULL,
  `ovenmancondition` text NOT NULL,
  `ovenmanremark` text NOT NULL,
  `suniformcondition` text NOT NULL,
  `suniformremark` text NOT NULL,
  `m1mechanical` text NOT NULL,
  `m1layout` text NOT NULL,
  `m1remark` text NOT NULL,
  `m2mechanical` text NOT NULL,
  `m2layout` text NOT NULL,
  `m2remark` text NOT NULL,
  `dmechanical` text NOT NULL,
  `dlayout` text NOT NULL,
  `dremark` text NOT NULL,
  `p1mechanical` text NOT NULL,
  `p1layout` text NOT NULL,
  `p1remark` text NOT NULL,
  `p2mechanical` text NOT NULL,
  `p2layout` text NOT NULL,
  `p2remark` text NOT NULL,
  `p3mechanical` text NOT NULL,
  `p3layout` text NOT NULL,
  `p3remark` text NOT NULL,
  `o1mechanical` text NOT NULL,
  `o1layout` text NOT NULL,
  `o1remark` text NOT NULL,
  `o2mechanical` text NOT NULL,
  `o2layout` text NOT NULL,
  `o2remark` text NOT NULL,
  `o3mechanical` text NOT NULL,
  `o3layout` text NOT NULL,
  `o3remark` text NOT NULL,
  `slicermechanical` text NOT NULL,
  `slicerlayout` text NOT NULL,
  `slicerremark` text NOT NULL,
  `gmechanical` text NOT NULL,
  `glayout` text NOT NULL,
  `gremark` text NOT NULL,
  `edsmechanical` text NOT NULL,
  `edslayout` text NOT NULL,
  `edsremark` text NOT NULL,
  `scalemechanical` text NOT NULL,
  `scalelayout` text NOT NULL,
  `scaleremark` text NOT NULL,
  `maintenanceoften` text NOT NULL,
  `maintenancestate` text NOT NULL,
  `maintenanceremark` text NOT NULL,
  `tinsmechanical` text NOT NULL,
  `tinslayout` text NOT NULL,
  `tinsremark` text NOT NULL,
  `wiresmechanical` text NOT NULL,
  `wireslayout` text NOT NULL,
  `wiresremark` text NOT NULL,
  `tideness` text NOT NULL,
  `comment1` text NOT NULL,
  `alterations` text NOT NULL,
  `comment2` text NOT NULL,
  `manager_checks` text NOT NULL,
  `comment3` text NOT NULL,
  `mixchart_cashflow` text NOT NULL,
  `comment4` text NOT NULL,
  `mixchart_production` text NOT NULL,
  `comment5` text NOT NULL,
  `consumption` text NOT NULL,
  `comment6` text NOT NULL,
  `sellbydate` text NOT NULL,
  `comment7` text NOT NULL,
  `breadreturns` text NOT NULL,
  `comment8` text NOT NULL,
  `damagepolybags` text NOT NULL,
  `comment9` text NOT NULL,
  `processflow` text NOT NULL,
  `comment10` text NOT NULL,
  `slicing` text NOT NULL,
  `comment11` text NOT NULL,
  `dividing_range` text NOT NULL,
  `comment12` text NOT NULL,
  `breadweight` text NOT NULL,
  `comment13` text NOT NULL,
  `bread_yield` text NOT NULL,
  `comment14` text NOT NULL,
  `tapes` text NOT NULL,
  `comment15` text NOT NULL,
  `ingredients` text NOT NULL,
  `comment16` text NOT NULL,
  `gunnybags` text NOT NULL,
  `comment17` text NOT NULL,
  `flour` text NOT NULL,
  `comment18` text NOT NULL,
  `polybags` text NOT NULL,
  `comment19` text NOT NULL,
  `damagedpolybags` text NOT NULL,
  `comment20` text NOT NULL,
  `mkt_returns` text NOT NULL,
  `comment21` text NOT NULL,
  `sell_by_date_returns` text NOT NULL,
  `comment22` text NOT NULL,
  `return_goods` text NOT NULL,
  `comment23` text NOT NULL,
  `bread_color` text NOT NULL,
  `comment24` text NOT NULL,
  `shape_size` text NOT NULL,
  `comment25` text NOT NULL,
  `internal_texture` text NOT NULL,
  `comment26` text NOT NULL,
  `variety_by_varietyphysicalbalance` text NOT NULL,
  `comment27` text NOT NULL,
  `stocklevels` text NOT NULL,
  `comment28` text NOT NULL,
  `rotationofstocks` text NOT NULL,
  `comment29` text NOT NULL,
  `multiple_sell` text NOT NULL,
  `comment30` text NOT NULL,
  `MngerLding_cond` text NOT NULL,
  `MngerLding_remrk` text NOT NULL,
  `SupLding_cond` text NOT NULL,
  `SupLding_remrk` text NOT NULL,
  `Security_loading` text NOT NULL,
  `Securitylding_remrk` text NOT NULL,
  `Security_attendance` text NOT NULL,
  `Securityatt_remrk` text NOT NULL,
  `Security_OB` text NOT NULL,
  `SecurityOB_remrk` text NOT NULL,
  `Reliability_loading` text NOT NULL,
  `Reliabiltylding_remrk` text NOT NULL,
  `Reliability_Attendance` text NOT NULL,
  `Reliabiltyatt_remrk` text NOT NULL,
  `Reliability_OB` text NOT NULL,
  `Reliabiltyob_remrk` text NOT NULL,
  `Minishpneatness_cond` text NOT NULL,
  `Minishpneatness_remrk` text NOT NULL,
  `OG_Cond` text NOT NULL,
  `OG_Remrk` text NOT NULL,
  `Uniform_Cond` text NOT NULL,
  `Uniform_Remrk` text NOT NULL,
  `Shoes_Cond` text NOT NULL,
  `Shoes_Remrk` text NOT NULL,
  `GB_Cond` text NOT NULL,
  `GB_Remrk` text NOT NULL,
  `CG_Cond` text NOT NULL,
  `CG_Remrk` text NOT NULL,
  `DM_Cond` text NOT NULL,
  `DM_Remrk` text NOT NULL,
  `EK_Cond` text NOT NULL,
  `EK_Remrk` text NOT NULL,
  `FE_Cond` text NOT NULL,
  `FE_Renrk` text NOT NULL,
  `AS_Cond` text NOT NULL,
  `AS_Remrk` text NOT NULL,
  `Mobile_Cond` text NOT NULL,
  `Mobile_Remrk` text NOT NULL,
  `Fixed_Cond` text NOT NULL,
  `Fixed_Remrk` text NOT NULL,
  `DL_Cond` text NOT NULL,
  `DL_Remrk` text NOT NULL,
  `SL_Cond` text NOT NULL,
  `SL_Remrk` text NOT NULL,
  `MR_Cond` text NOT NULL,
  `MR_Remrk` text NOT NULL,
  `SupV_Cond` text NOT NULL,
  `SupV_Remrk` text NOT NULL,
  `BakMng_Cond` text NOT NULL,
  `BakMng_Remrk` text NOT NULL,
  `Discpline_Cond` text NOT NULL,
  `Discpline_Remrk` text NOT NULL,
  `Training_Cond` text NOT NULL,
  `Training_Remrk` text NOT NULL,
  `SCwrk_Cond` text NOT NULL,
  `SCwrk_Remrk` text NOT NULL,
  `SCdr_Cond` text NOT NULL,
  `SCdr_Remrk` text NOT NULL,
  `SCexced_Cond` text NOT NULL,
  `SCexced_remrk` text NOT NULL,
  `SCCasual_Cond` text NOT NULL,
  `SCCasual_Remrk` text NOT NULL,
  `gen_repairs_cond` varchar(255) DEFAULT NULL,
  `gen_repairs_remarks` text NOT NULL,
  `gen_repair_acc_condition` text NOT NULL,
  `gen_repairs_acc_remarks` text NOT NULL,
  `firstaid_ess_cond` text NOT NULL,
  `firstaid_ess_remarks` text NOT NULL,
  `firstaid_usagerec_cond` text NOT NULL,
  `firstaid_usagerec_remarks` text NOT NULL,
  `gen_cond` text NOT NULL,
  `gen_remarks` varchar(255) DEFAULT NULL,
  `prod_cond` text NOT NULL,
  `prod_remarks` text NOT NULL,
  `crate_rec_cond` text NOT NULL,
  `crat_remark` text NOT NULL,
  `station_book_cond` text NOT NULL,
  `station_book_remarks` text NOT NULL,
  `protect_cloth_book` text NOT NULL,
  `protect_cloth_book_rem` text NOT NULL,
  `vehicle_mil_cond` text NOT NULL,
  `vehicle_mil_remarks` text NOT NULL,
  `weight_chart_line_cond` text NOT NULL,
  `weight_chart_file_remarks` text NOT NULL,
  `underweight_chart_file_cond` text NOT NULL,
  `underweight_chart_line_remarks` text NOT NULL,
  `driver_allocation_cond` text NOT NULL,
  `driver_allocation_remarks` text NOT NULL,
  `mil_per_litre_veh_cond` text NOT NULL,
  `mil_per_litre_veh_remar` text NOT NULL,
  `motor_veh_clean_cond` text NOT NULL,
  `motor_veh_clean_remarks` text NOT NULL,
  `cus_comp_cond` text NOT NULL,
  `cus_comp_remarks` text NOT NULL,
  `imp_ass_cond` text NOT NULL,
  `imp_ass_remarks` text NOT NULL,
  `comm_cond` text NOT NULL,
  `comm_remarks` text NOT NULL,
  `mon_load_trend_cond` text NOT NULL,
  `mon_load_trend_remarks` text NOT NULL,
  `ver_cashflow_cond` text NOT NULL,
  `ver_cashflow_remarks` text NOT NULL,
  `ver_bak_stock_cond` text NOT NULL,
  `ver_bak_stock_remarks` text NOT NULL,
  `cash_ver_cashier_cond` text NOT NULL,
  `cash_ver_cashier_remarks` text NOT NULL,
  `insuring_cont_debt_cred_cond` text NOT NULL,
  `insuring_cont_debt_cred_remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `adminstaffing` */

insert  into `adminstaffing`(`id`,`branch_id`,`branchmanager`,`opsmanager`,`TransactionDate`,`sweepcondition`,`sweepremark`,`washcondition`,`washremark`,`tablecondition`,`tableremark`,`smellcondition`,`smellremark`,`floorcondition`,`floorremark`,`garbagecondition`,`garbageremark`,`catchercondition`,`catcherremark`,`fliescondition`,`fliesremark`,`roachescondition`,`roachesremark`,`ratscondition`,`ratsremark`,`cratescondition`,`cratesremark`,`uniformcondition`,`uniformremark`,`scoatcondition`,`scoatremark`,`ovenmancondition`,`ovenmanremark`,`suniformcondition`,`suniformremark`,`m1mechanical`,`m1layout`,`m1remark`,`m2mechanical`,`m2layout`,`m2remark`,`dmechanical`,`dlayout`,`dremark`,`p1mechanical`,`p1layout`,`p1remark`,`p2mechanical`,`p2layout`,`p2remark`,`p3mechanical`,`p3layout`,`p3remark`,`o1mechanical`,`o1layout`,`o1remark`,`o2mechanical`,`o2layout`,`o2remark`,`o3mechanical`,`o3layout`,`o3remark`,`slicermechanical`,`slicerlayout`,`slicerremark`,`gmechanical`,`glayout`,`gremark`,`edsmechanical`,`edslayout`,`edsremark`,`scalemechanical`,`scalelayout`,`scaleremark`,`maintenanceoften`,`maintenancestate`,`maintenanceremark`,`tinsmechanical`,`tinslayout`,`tinsremark`,`wiresmechanical`,`wireslayout`,`wiresremark`,`tideness`,`comment1`,`alterations`,`comment2`,`manager_checks`,`comment3`,`mixchart_cashflow`,`comment4`,`mixchart_production`,`comment5`,`consumption`,`comment6`,`sellbydate`,`comment7`,`breadreturns`,`comment8`,`damagepolybags`,`comment9`,`processflow`,`comment10`,`slicing`,`comment11`,`dividing_range`,`comment12`,`breadweight`,`comment13`,`bread_yield`,`comment14`,`tapes`,`comment15`,`ingredients`,`comment16`,`gunnybags`,`comment17`,`flour`,`comment18`,`polybags`,`comment19`,`damagedpolybags`,`comment20`,`mkt_returns`,`comment21`,`sell_by_date_returns`,`comment22`,`return_goods`,`comment23`,`bread_color`,`comment24`,`shape_size`,`comment25`,`internal_texture`,`comment26`,`variety_by_varietyphysicalbalance`,`comment27`,`stocklevels`,`comment28`,`rotationofstocks`,`comment29`,`multiple_sell`,`comment30`,`MngerLding_cond`,`MngerLding_remrk`,`SupLding_cond`,`SupLding_remrk`,`Security_loading`,`Securitylding_remrk`,`Security_attendance`,`Securityatt_remrk`,`Security_OB`,`SecurityOB_remrk`,`Reliability_loading`,`Reliabiltylding_remrk`,`Reliability_Attendance`,`Reliabiltyatt_remrk`,`Reliability_OB`,`Reliabiltyob_remrk`,`Minishpneatness_cond`,`Minishpneatness_remrk`,`OG_Cond`,`OG_Remrk`,`Uniform_Cond`,`Uniform_Remrk`,`Shoes_Cond`,`Shoes_Remrk`,`GB_Cond`,`GB_Remrk`,`CG_Cond`,`CG_Remrk`,`DM_Cond`,`DM_Remrk`,`EK_Cond`,`EK_Remrk`,`FE_Cond`,`FE_Renrk`,`AS_Cond`,`AS_Remrk`,`Mobile_Cond`,`Mobile_Remrk`,`Fixed_Cond`,`Fixed_Remrk`,`DL_Cond`,`DL_Remrk`,`SL_Cond`,`SL_Remrk`,`MR_Cond`,`MR_Remrk`,`SupV_Cond`,`SupV_Remrk`,`BakMng_Cond`,`BakMng_Remrk`,`Discpline_Cond`,`Discpline_Remrk`,`Training_Cond`,`Training_Remrk`,`SCwrk_Cond`,`SCwrk_Remrk`,`SCdr_Cond`,`SCdr_Remrk`,`SCexced_Cond`,`SCexced_remrk`,`SCCasual_Cond`,`SCCasual_Remrk`,`gen_repairs_cond`,`gen_repairs_remarks`,`gen_repair_acc_condition`,`gen_repairs_acc_remarks`,`firstaid_ess_cond`,`firstaid_ess_remarks`,`firstaid_usagerec_cond`,`firstaid_usagerec_remarks`,`gen_cond`,`gen_remarks`,`prod_cond`,`prod_remarks`,`crate_rec_cond`,`crat_remark`,`station_book_cond`,`station_book_remarks`,`protect_cloth_book`,`protect_cloth_book_rem`,`vehicle_mil_cond`,`vehicle_mil_remarks`,`weight_chart_line_cond`,`weight_chart_file_remarks`,`underweight_chart_file_cond`,`underweight_chart_line_remarks`,`driver_allocation_cond`,`driver_allocation_remarks`,`mil_per_litre_veh_cond`,`mil_per_litre_veh_remar`,`motor_veh_clean_cond`,`motor_veh_clean_remarks`,`cus_comp_cond`,`cus_comp_remarks`,`imp_ass_cond`,`imp_ass_remarks`,`comm_cond`,`comm_remarks`,`mon_load_trend_cond`,`mon_load_trend_remarks`,`ver_cashflow_cond`,`ver_cashflow_remarks`,`ver_bak_stock_cond`,`ver_bak_stock_remarks`,`cash_ver_cashier_cond`,`cash_ver_cashier_remarks`,`insuring_cont_debt_cred_cond`,`insuring_cont_debt_cred_remarks`) values (1,2,'Eldiego Mutiso','Victor Nyange','2022-06-08','Excessive','','Excessive','','Not Cleaned','','Smelly','','Excellent','','Delayed','','Some Broken','','Scanty','','Scanty','','Upto Date','','Satisfactory','','Not Provided','','Not Satisfactory','','Not Satisfactory','','Not Satisfactory','','Good','Poor','','Fair','Fair','','Poor','Good','','Poor','Good','','Fair','Fair','','Good','Poor','','Good','Poor','','Fair','Fair','','Poor','Good','','Poor','Good','','Fair','Fair','','Good','Poor','','Good','Poor','','','','','Good','Fair','','Fair','Fair','','No overwriting','            ','No Alterations','            ','Regular','            ','Different Figure','            ','Different Figure','            ','As Per Std ','                ','As Per Std ','                    ','Uncontrolled','                ','Uncontrolled','                ','smooth','                ','As Per Std ','                ','correct','                ','incorrect','                    ','Not Attained','                    ','Poorly Arranged','                        ','Poorly Arranged','                            ','well arranged','                        ','well arranged','                             ','Poorly Arranged ','                             ','well arranged','                                ','low','                            ','More than 2','                        ','Not Segregated','                        ','Segregated','                             ','okay','                                    ','okay','                                ','agrees','            ','low','                    ','haphazard','            ','not allowed','                    ','Not Maintained','            ','Unkempt','            ','No Alterations','                ','No Alterations','    ','Alterations Noted','                ','Alterations Noted','                ','    ','Alterations Noted','            ','Alterations Noted','Alterations Noted','                        ','Not Available','            ','Not Available','            ','Available','            ','Cleaner Has','            ','Cleaner Has','            ','Not In Use','            ','Not Available','            ','Intact','            ','Not Checked','            ','Not Working','            ','Working','            ','Laxity Observed','            ','Not Working','            ','Not Updating','                ','Before','    ','Before','                ','Excellent','                ','Not Satisfactoy','                ','Not Controlled','                        ','Not Displayed','                        ','Allowed','                        ','Updated','                        ','Updated','            ','Updated','            ','Missing','            ','Not Updated','            ','Not Maintained','                ','Not Maintained','    ','Maintained','                ','Maintained','                ','Not Maintained','                ','Maintained','                ','Not Maintained','                ','','                ','Yes','                    ','Below Average','                        ','Satisfactory','                    ','High','                        ','Not Satisfactory','                            ','Not Satisfactory','                        ','Not Monitor','                        ','Not Verified','','Not Verified','                        ','Not Verified','                         ','Monitor','                         '),(2,5,'Alice Nyagah','Alice Test','2022-06-08','Excessive','','As Per Std','','Cleaned','','Not Smelly','','Poor','','Delayed','','Some Broken','','Scanty','','Scanty','','Upto Date','','Satisfactory','','Provided','','Not Satisfactory','','Satisfactory','','Not Satisfactory','','Good','Poor','','Fair','Fair','','Poor','Good','','Poor','Good','','Fair','Fair','','Good','Poor','','Good','Poor','','Fair','Fair','','Poor','Good','','Poor','Good','','Fair','Fair','','Good','Poor','','Good','','','','','','Good','Fair','','Fair','Good','','No overwriting','            ','No Alterations','            ','Regular','            ','Same figure','            ','Different Figure','            ','Excessive','                ','Excessive','                    ','Controlled','                ','Controlled','                ','Delayed','                ','As Per Std ','                ','correct','                ','incorrect','                    ','Not Attained','                    ','well arranged','                        ','Poorly Arranged','                            ','well arranged','                        ','Poorly Arranged','                             ','Poorly Arranged ','                             ','well arranged','                                ','high','                            ','More than 2','                        ','Segregated','                        ','Segregated','                             ','okay','                                    ','Not Okay','                                ','Differs','            ','low','                    ','first in first out','            ','not allowed','                    ','Not Maintained','            ','Well Kept','            ','No Alterations','                ','Alterations Noted','    ','No Alterations','                ','No Alterations','                ','    ','Alterations Noted','            ','Alterations Noted','Alterations Noted','                        ','Available','            ','Not Available','            ','Available','            ','Cleaner Has','            ','Does not have','            ','Not In Use','            ','Not Available','            ','Intact','            ','Checked','            ','Not Working','            ','Not Working','            ','Laxity Observed','            ','Not Working','            ','Updating','                ','After Payment','    ','Before','                ','Excellent','                ','Not Satisfactoy','                ','Controlled','                        ','Displayed','                        ','Not Allowed','                        ','Not Updated','                        ','Updated','            ','Not Updated','            ','Missing','            ','Updated','            ','Maintained','                ','Maintained','    ','Not Maintained','                ','Not Maintained','                ','Maintained','                ','Not Maintained','                ','Not Maintained','                ','','                ','No','                    ','Below Average','                        ','Not Satisfactory','                    ','High','                        ','Not Satisfactory','                            ','Not Satisfactory','                        ','Monitor','                        ','Verified','','Not Verified','                        ','Not Verified','                         ','Monitor','                         '),(3,5,'Alice Nyagah','Alice Test','2022-06-08','Excessive','','Excessive','','Not Cleaned','','Smelly','','Excellent','','On Time','','Some Broken','','Scanty','','Scanty','','Upto Date','','Satisfactory','','Not Provided','','Not Satisfactory','','Satisfactory','','Satisfactory','','Poor','Good','','Fair','Fair','','Good','Poor','','Good','Poor','','Fair','Fair','','Poor','Good','','Poor','Good','','Poor','Fair','','Fair','Poor','','Good','Poor','','Good','Fair','','Fair','Good','','Poor','','','Frequent','Untidy','','Good','Fair','','Poor','Fair','','No overwriting','            ','No Alterations','            ','Regular','            ','Same figure','            ','Different Figure','            ','As Per Std ','                ','Excessive','                    ','Uncontrolled','                ','Uncontrolled','                ','smooth','                ','As Per Std ','                ','correct','                ','incorrect','                    ','Not Attained','                    ','Poorly Arranged','                        ','Poorly Arranged','                            ','well arranged','                        ','well arranged','                             ','Poorly Arranged ','                             ','Poorly Arranged','                                ','high','                            ','More than 2','                        ','Not Segregated','                        ','Segregated','                             ','Not Okay','                                    ','okay','                                ','agrees','            ','high','                    ','haphazard','            ','not allowed','                    ','Maintained','            ','Unkempt','            ','No Alterations','                ','No Alterations','    ','No Alterations','                ','Alterations Noted','                ','    ','Alterations Noted','            ','Alterations Noted','No Alterations','                        ','Not Available','            ','Not Available','            ','Not Available','            ','Cleaner Has','            ','Cleaner Has','            ','In Use','            ','Not Available','            ','Intact','            ','Not Checked','            ','Not Working','            ','Working','            ','Laxity Observed','            ','Working','            ','Updating','                ','Before','    ','Before','                ','Excellent','                ','Not Satisfactoy','                ','Not Controlled','                        ','Not Displayed','                        ','Allowed','                        ','Updated','                        ','Updated','            ','Updated','            ','Sufficient','            ','Not Updated','            ','Not Maintained','                ','Not Maintained','    ','Not Maintained','                ','Maintained','                ','Maintained','                ','Not Maintained','                ','Maintained','                ','','                ','No','                    ','Below Average','                        ','Satisfactory','                    ','High','                        ','Not Satisfactory','                            ','Satisfactory','                        ','Monitor','                        ','Not Verified','                            ','Verified','                        ','Verified','                         ','Not Monitor','                         ');

/*Table structure for table `branch` */

DROP TABLE IF EXISTS `branch`;

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branchname` varchar(255) NOT NULL,
  `branchmanager` varchar(255) NOT NULL,
  `opsmanager` varchar(255) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `branch` */

insert  into `branch`(`branch_id`,`branchname`,`branchmanager`,`opsmanager`) values (1,'Dandora 1','Dennis Waweru','Waweru Dennis'),(2,'Dandora 2','Eldiego Mutiso','Victor Nyange'),(3,'Dandora 3','Anto Wangira','Test Nyange'),(4,'Dandora 4','Test Testing','Test Victor'),(5,'Dandora 5','Alice Nyagah','Alice Test');

/*Table structure for table `userdata` */

DROP TABLE IF EXISTS `userdata`;

CREATE TABLE `userdata` (
  `user_id` int(100) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `userdata` */

insert  into `userdata`(`user_id`,`first_name`,`last_name`) values (1,'Me','Syl'),(2,'me','Vic');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `branch_id` int(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`user_type`,`branch_id`,`Password`) values (5,'Eldiego Mutiso','eld@test.com','staff',2,'827ccb0eea8a706c4c34a16891f84e7b'),(6,'Admin','admin@admin.com','admin',0,'827ccb0eea8a706c4c34a16891f84e7b'),(7,'Anto Wangira','anto@test.com','staff',3,'827ccb0eea8a706c4c34a16891f84e7b'),(8,'Dennis Waweru','dennis@test.com','staff',1,'827ccb0eea8a706c4c34a16891f84e7b'),(9,'Test Testing','test@test.com','staff',4,'827ccb0eea8a706c4c34a16891f84e7b'),(10,'Alice Nyagah','alice@test.com','staff',5,'827ccb0eea8a706c4c34a16891f84e7b');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
