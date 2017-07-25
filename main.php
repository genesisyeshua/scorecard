<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Service Availability Report</title>
</head>
<body>
<!-- Main Form -->
<!-- Upon submit, redirect to ADD: submit_entry.php -->
<form action="submit_entry.php" method="post">
	<select name='service_name'>
		<option value="">Select Service</option>
		<option value="HES">HES</option>
		<option value="WFBSS">WFBSS</option>
		<option value="TMCAS">TMCAS</option>
		<option value="CloudEdge">CloudEdge</option>
		<option value="DDaAS">DDaAS</option>
		<option value="APT-CS">APT-CS</option>
		<option value="Prefilter">Prefilter</option>
		<option value="YAMSS">YAMSS</option>
		<option value="CES">CES</option>
		<option value='TMRM'>TMRM</option>
		<option value='CCS'>CCS</option>
		<option value='PLS'>PLS</option>
		<option value='Yamato'>Yamato</option>
		<option value='IWSaaS'>IWSaaS</option>
		<option value='TMMS'>TMMS</option>
		<option value='ERS'>ERS</option>
		<option value='FRS'>FRS</option>
	</select>
	<input type="number" name="ticket" min="1" placeholder="CLOUDOPS #" />
	<input type="number" name="downtime" min="1" placeholder="Downtime" />
	<input type="date" name="date"/>
	<input type="submit" value="Submit" />

<!-- Variables -->
<?php if (isset($_POST['submit'])){
$service= $_POST["service_name"];
$ticket= $_POST["ticket"];
$downtime= $_POST["downtime"];
$date= $_POST["date"];


// <!-- Checking if entry is valid -->

			if ($service=="" OR $ticket=="" OR $downtime=="" OR $date==""){
				echo "Invalid. Please complete entry details.";
				exit;
			}
			elseif($service==""){
				echo "Please select a service.";
				exit;
			}
			elseif($ticket==""){
				echo "Please enter case number.";
				exit;
			}
			elseif($downtime==""){
				echo "Please enter downtime in minutes.";
				exit;
			}
}
?>

</form>
</body>
</html>

