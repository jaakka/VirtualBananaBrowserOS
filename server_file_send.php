<?php
// ?folder="+String(folderId)+"&device="+String(deviceToken)+"&user="+String(userToken)
if(isset($_GET["folderId"]) && isset($_GET["deviceToken"]) && isset($_GET["userToken"]) && isset($_GET["filetype"]) && isset($_GET["name"]))
{
    $folder=$_GET["folderId"];
    $device=$_GET["deviceToken"];
    $user=$_GET["userToken"];
    $name=$_GET["name"];
    $type=$_GET["filetype"];
    
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";
    $correct_login=false;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, token, user FROM devices WHERE token='".$device."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            if($row["user"]==$user)
            {
                $correct_login=true;
            }
        }
    }
        else 
    {
        echo 0;
    }
    if($correct_login==true)
    {
        $sql = "INSERT INTO eDesk_".$user." (filetype, name, location)
VALUES ('".$type."', '".$name."', '".$folder."')";

        if ($conn->query($sql) === TRUE) 
        {
            echo 1;
        }    
            else 
        {
            echo 0;
        }
    }    
    
    $conn->close();
}
?>