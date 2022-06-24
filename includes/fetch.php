<?php
/* Database connection start */
session_start();
include_once("../includes/db_connect.php");


if(isset($_POST["dataExport"])) {	
	$bname=$_POST['bname'];
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
	$sqlQuery = "SELECT * FROM adminstaffing where branchname='$bname' AND formdate BETWEEN '$date2' AND '$date1'";
	$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
	$developersData = array();
	while( $developer = mysqli_fetch_assoc($resultSet) ) {
		$developersData[] = $developer;
}	
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


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>
		MINI BAKERIES
	</title>

	<style>

		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			background-color:#DFFF00;
			font-family: serif;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 800px;
			margin: 50px auto;
			padding: 30px 20px;
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
  border-spacing: 0 
			border-radius: 20px;
			font-family: inherit;
			padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  padding-right: 10px;
			display: block;
			width: 95%;
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
  width: 200px;         
  background-color: #ccc;  
}
        .form-group{
  margin-bottom:20px;
}
		/* Styling Button */
		.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
	</style>
</head>

<body>


<!-- Create Form -->
	<form id="form" action = "fetch.php" method = "post">
	<img src="/images/supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        <body>
	<div class="header">
		<h2>Export data your data here</h2>
	</div>
  <div class="input-group">
			<label>Branch Name</label>
		
  <select class="custom-select" id="bname" name="bname" required="">
                    <option value="">Choose...</option>
                    <option value="Dandora 1" name="bname">DANDORA 1</option>
					<option value="Dandora 2" name="bname">DANDORA 2</option>
					<option value="Dandora 3" name="bname">DANDORA 3</option>
					<option value="Dandora 4" name="bname">DANDORA 4</option>
                    <option value="Dandora 5" name="bname">DANDORA 5</option>
                </select>
				
				<label>Start Date:</label>
		<input type="date" name="date2" id="date1">	

		<label>End Date:</label>
		<input type="date" name="date1" id="date2">	

		

			</div>		
     <center>
		
        <div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export</button>
			</form>
		</div>
	</div> 
    </center>
</form>
</body>

</html>
