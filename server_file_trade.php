<?php
// ?folder="+String(folderId)+"&device="+String(deviceToken)+"&user="+String(userToken)
if(isset($_GET["folderId"]) && isset($_GET["deviceToken"]) && isset($_GET["userToken"]))
{
    $folder=$_GET["folderId"];
    $device=$_GET["deviceToken"];
    $user=$_GET["userToken"];
    
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
       // echo "0 results";
    }
    $return_data = "[";
    if($correct_login==true)
    {
        
        $sql = "SELECT id, filetype, name, location FROM eDesk_".$user." WHERE location='".$folder."'";
        $result = $conn->query($sql);
        $eka=true;
        if ($result->num_rows > 0) 
        {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                $content = "[".$row["filetype"].",".'"'.$row["name"].'"'."]";
                if($eka==true)
                {
                    $return_data=$return_data.$content;
                    $eka=false;
                }
                    else
                {
                    $return_data=$return_data.",".$content;
                }
            }
        }
            else 
        {
            // echo "0 results";
        }
    }
    
    $conn->close();
    echo $return_data."]";
}
?>