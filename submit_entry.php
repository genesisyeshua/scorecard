<!-- ADD ENTRY FUNCTION -->
<!-- Database -->
<?php
require 'connection.php';
$conn= Connect();


$id    = $conn->real_escape_string($_POST["ID"]);
$dbservice    = $conn->real_escape_string($_POST["service_name"]);
$dbticket   = $conn->real_escape_string($_POST["ticket"]);
$dbdowntime    = $conn->real_escape_string($_POST["downtime"]);
$dbdate    = $conn->real_escape_string($_POST["date"]);
$query   = "INSERT into entries (service_name,ticket,downtime,dbdate) VALUES('" . $dbservice . "','" . $dbticket . "','" . $dbdowntime . "','" . $dbdate ."')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
echo "<br/>Entry Submitted! <br/>";
header("location:all_entries.php");
// Once entry is submitted, it will show the all entries page again
mysqli_close($conn);
?>






