<?php
$done = false;
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
  //die("Connection failed: " . $conn->connect_error);
}
$lista_tokeneista = array();
$sql = "SELECT id, token FROM devices";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      array_push($lista_tokeneista,$row["token"]);
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  //echo "0 results";
}

$newtoken = generateRandomString();
while(array_search($newtoken,$lista_tokeneista) != false)
{
    $newtoken = generateRandomString();
    //toistetaan niin kauan että saadaan oma
}

$sql = "INSERT INTO devices (token, user,browser, ip)
VALUES ('".$newtoken."', '-1', '".$browser."' ,'".$ip."')";

if ($conn->query($sql) === TRUE) {
  $done=true;
} else {
 //echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
if($done==true)
{
    echo $newtoken;
}
    else
{
    echo 0;
}
?>