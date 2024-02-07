
<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

$vastaus = 0;
$device_token = $_GET["device"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $sql = "SELECT id, token, user FROM devices WHERE token='".$device_token."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            if(strlen($row["user"])>5)
            {
                $vastaus=1;
            }
        }
    } 
        else 
    {
        //echo "0 results";
    }
    
    
    
    echo $vastaus;
    
    
    
$conn->close();
    
    ?>