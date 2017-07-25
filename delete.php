<!-- DELETE ENTRY FUNCTION -->
<?php
session_start(); 
session_set_save_handler();
$id = $_GET["id"];
// echo $id;
	require 'connection.php';
	$conn= Connect();

	$query   = "DELETE FROM entries WHERE id = '$id'";
	$success = $conn->query($query);

if (!$success) {
    die("Error: Entry Not Deleted ".$conn->error);

}
else {
echo "<br/>Entry Deleted! <br/>";
header("location:all_entries.php"); 
// After the entry is deleted, it will redirect to the all entries page
}
mysqli_close($conn);

?>
