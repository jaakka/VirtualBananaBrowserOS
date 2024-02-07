<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$sessiontoken = $_GET["session"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, token, user FROM devices WHERE token='".$sessiontoken."'";
$result = $conn->query($sql);
$user=-3;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $user = $row["user"];
  }
} else {
  //echo "0 results";
}
$conn->close();

echo $user;
?>