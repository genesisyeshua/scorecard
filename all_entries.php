<!-- TABLE OF ALL ENTRIES -->
<!DOCTYPE html>
<html lang="en">

<body>
<table border="2" border="color: #761a9b">
     <thead>
        <tr>
        	<th>ID</th>
          <th>Service</th>
          <th>Cloudops Case</th>
          <th>Downtime</th>
         <th>Date</th>
         <th>Functions</th>
        </tr>
      </thead>
      <tbody>


<?php
require 'connection.php';
$conn= Connect();

// Displays Database Entries
$sql = "SELECT * FROM entries";
$result = mysqli_query($conn, $sql);


 if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
     	echo "<form method= 'post'><tr>
     	<td>" . $row["ID"]. "</td> 
     	<td>" . $row["service_name"]." </td>
     	<td><a href='http://cloudcntr.sdi.trendnet.org/display/RCA/RCA+".$row['service_name'].'+CLOUDOPS-'.$row['ticket']."'>CLOUDOPS-" .$row["ticket"]. "</td>
     	<td>" .$row["downtime"]." </td>
     	<td>" .$row["dbdate"]."</td>
     	<td><a href='update.php?id=".$row['ID']."'>Edit</a></td>". "
     	<td><a href='delete.php?id=".$row['ID'].". '>Delete</a></td>"."</tr></form>";
	} 
}
else {
     echo "0 results";
	}
mysqli_close($conn);
if (isset($_POST['submit'])){
$service= $_POST["service_name"];
$ticket= $_POST["ticket"];
$downtime= $_POST["downtime"];
$date= $_POST["dbdate"];
}
?>

</tbody>
</table>
</body>
</html>
