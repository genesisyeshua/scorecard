<!-- DISPLAYS THE FORM OF THE ENTRY TO BE EDITED -->
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="view.css" media="all">
	<script type="text/javascript" src="view.js"></script>
	<script type="text/javascript" src="calendar.js"></script>

</head>
<body>
<table border="2" border="color: #761a9b">
     <thead>
        <tr>
        <th>Entry</th>
          <th>Service</th>
          <th>Cloudops Case</th>
          <th>Downtime</th>
         <th>Date</th>
         <th>Functions</th>
        </tr>
      </thead>
      <tbody>

<?php
session_start(); 
session_set_save_handler();
$id = $_GET["id"];
// echo $id;
	require 'connection.php';
	$conn= Connect();
// Display Database Entries
$sql = "SELECT * FROM entries WHERE ID= $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
     // output data of each row to be updated
     while($row = mysqli_fetch_assoc($result)) {
         echo "<form action='updatedb.php?id=".$row['ID']."' method='post'>
         <tr><td>" . $row["ID"]. "</td>
         <td><select name='service_name'>
           	<option value= ". $row["service_name"]."><b>". $row["service_name"]."</b></option>
           	<option value='HES'>HES</option>
      			<option value='WFBSS'>WFBSS</option>
      			<option value='TMCAS'>TMCAS</option>
      			<option value='CloudEdge'>CloudEdge</option>
      			<option value='DDaAS'>DDaAS</option>
      			<option value='APT-CS'>APT-CS</option>
      			<option value='Prefilter'>Prefilter</option>
      			<option value='YAMMS'>YAMSS</option>
      			<option value='CES'>CES</option>
      			<option value='TMRM'>TMRM</option>
      			<option value='CCS'>CCS</option>
      			<option value='PLS'>PLS</option>
      			<option value='Yamato'>Yamato</option>
      			<option value='IWSaaS'>IWSaaS</option>
      			<option value='TMMS'>TMMS</option>
      			<option value='ERS'>ERS</option>
      			<option value='FRS'>FRS</option>
			   </select></td>
         <td><input type='number' name='ticket' min='1' value='".$row["ticket"]."'></td>
         <td><input type='number' name='downtime' min='1' value='". $row["downtime"]."'></td>
         <td><input type='date' name='date' value='". $row["dbdate"]."' /></td>
         <td><input type='submit' value='Submit' /></td></tr></form>";
         };
     };
mysqli_close($conn);


// <!-- Variables -->
if (isset($_POST['submit'])){
$service= $_POST["service_name"];
$ticket= $_POST["ticket"];
$downtime= $_POST["downtime"];
$date= $_POST["dbdate"];
};
?>

 </tbody>
</table>
</body>
</html>

