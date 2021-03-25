// This code goes at the top of the website pages
<?php
include("../../sql.php");
$page="vpn.brenthopkins.me/[page].php"; 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("An error occurred.");
}

$sql = "INSERT INTO [table] (time, ipaddress, country, page)
VALUES ('$time', '$ip', '$country', '$page')";

if (mysqli_query($conn, $sql)) {
} else {
die();
}

mysqli_close($conn);
?>
// <html>... etc
