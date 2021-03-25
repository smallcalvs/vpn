<?php
include("../../sql.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO [table] (time, profile, ipaddress, country)
VALUES ('$time', '$profile', '$ip', '$country')";

if (mysqli_query($conn, $sql)) {
} else {
die("Error occured.");
}

mysqli_close($conn);
?>
