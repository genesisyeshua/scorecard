<!-- FROM UPDATE.PHP FORM, DATABASE will be updated with the new fields inputted by user  -->
<!-- Still has bugs since only the service name and ticket is updated. :((( 
not sure why. I think sa sql statement -->
<!-- Database -->
<?php
require 'connection.php';
$conn= Connect();
session_start(); 
session_set_save_handler();
$id = $_GET["id"];
$service= $_POST["service_name"];
$ticket= $_POST["ticket"];
$downtime= $_POST["downtime"];
$date= $_POST["date"];


$query   = "UPDATE `entries` SET 
service_name='" .$service. "',
ticket='" .$ticket. "',
downtime='".$downtime."',
dbdate='".$date."' 
WHERE `ID`= '".$id."' ";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't update data: ".$conn->error);

}
echo "<br/>Entry Updated! <br/>";
header("location:all_entries.php");

mysqli_close($conn);
?>

