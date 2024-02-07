<?php

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ip = get_client_ip();

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$browser = $_SERVER['HTTP_USER_AGENT'];

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET["create"]))
{
    $sessionid=$_GET["create"];
    $alldone = true;
  
$user_token = generateRandomString();
$sql = "INSERT INTO customers (username, email, token, browser, ip)
VALUES ('', '', '".$user_token."', '".$browser."', '".$ip."')";
$nextstep = false;
if ($conn->query($sql) === TRUE) {
  //echo "käyttäjä luotu";
  setcookie("user_token", $user_token, time() + (86400 * 30), "/"); // 86400 = 1 day
  $nextstep = true;
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
  //echo 0;
  $alldone=false;
}

if($nextstep == true)
{
    $sql = "UPDATE devices SET user='".$user_token."' WHERE token='".$sessionid."'";

    if ($conn->query($sql) === TRUE) 
    {
        //echo "Record updated successfully";
        //echo 1;
    } 
        else 
    {
        //echo "Error updating record: " . $conn->error;
        //echo 0;
        $alldone=false;
    }
}

$sql = "CREATE TABLE eDesk_".$user_token." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
filetype INT(6) NOT NULL,
name VARCHAR(30) NOT NULL,
location INT(6),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  //echo "Table MyGuests created successfully";
} else {
  //echo "Error creating table: " . $conn->error;
  $alldone=false;
}

if($alldone==true){echo 1;}else{echo 0;}

}
if(isset($_GET["join"]))
{
    $sessionid=$_GET["join"];
    
    // sql to delete a record
$sql = "DELETE FROM devices WHERE user='".$_COOKIE["user_token"]."'"; //poistetaan laite listalta jossa asiakas oli ollut ennen

if ($conn->query($sql) === TRUE) {
  //echo "Record deleted successfully";
} else {
 // echo "Error deleting record: " . $conn->error;
}
    
     $sql = "UPDATE devices SET user='".$_COOKIE["user_token"]."' WHERE token='".$sessionid."'";

    if ($conn->query($sql) === TRUE) 
    {
        //echo "Record updated successfully";
        echo 1;
    } 
        else 
    {
        //echo "Error updating record: " . $conn->error;
        echo 0;
    }
}

if(isset($_GET["left"]))
{
    $sessionid=$_GET["left"];
    
// sql to delete a record
$sql = "DELETE FROM devices WHERE token='".$sessionid."'"; //poistetaan laite listalta 

if ($conn->query($sql) === TRUE) {
  //echo "Record deleted successfully";
} else {
 // echo "Error deleting record: " . $conn->error;
}

 $sql = "UPDATE devices SET user='0' WHERE token='".$sessionid."'";

    if ($conn->query($sql) === TRUE) 
    {
        //echo "Record updated successfully";
        echo 1;
    } 
        else 
    {
        //echo "Error updating record: " . $conn->error;
        echo 0;
    }
    
}

$conn->close();
?>