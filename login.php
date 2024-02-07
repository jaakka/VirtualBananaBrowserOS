<center><br><br><br><br>
<div id=startlogo>
    </div><br><br><br>
    
<script>
function newsession(token)
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) 
    {
        console.log(this.responseText);
        document.getElementById("login").style.display="none";
        if(String(this.responseText)=="1")
        {
            document.getElementById("logout").style.display="block";
        }
    }
  }
  xmlhttp.open("GET","session.php?create="+token,true);
  xmlhttp.send();

}

function joinsession(token)
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) 
    {
        console.log(this.responseText);
        document.getElementById("login").style.display="none";
        if(String(this.responseText)=="1")
        {
            document.getElementById("logout").style.display="block";
        }
       
    }
  }
  xmlhttp.open("GET","session.php?join="+token,true);
  xmlhttp.send();

}

function leftsession(token)
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) 
    {
        console.log(this.responseText);
        document.getElementById("login").style.display="none";
        if(String(this.responseText)=="1")
        {
            document.getElementById("logout").style.display="none";
        }
       
    }
  }
  xmlhttp.open("GET","session.php?left="+token,true);
  xmlhttp.send();

}
</script>
<?php 




$user_token="";
if(isset($_COOKIE["user_token"])) 
{
    $user_token=$_COOKIE["user_token"];
}
    else
{
    //ei ollu käyttäjää tallessa
}
?>





<head>
    <meta name="theme-color" content="#ff6058" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BananaOs - Kirjautuminen</title>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>

<style>
body
{
    -moz-user-select: none;  
    -webkit-user-select: none;  
    -ms-user-select: none;  
    -o-user-select: none;  
    user-select: none;
}
#startlogo
{
    width:190px;
    height:190px;
    background-image: url("newbanana.png");
    background-size:cover;
    border:solid black 4px;
    border-radius:100px;
}
#login
{
     width:250px;
    height:80px;
    line-height:80px;
    font-size:160%;
    background-color:#ff6058;
    border:solid black 4px;
    border-radius:100px;
}

#logout
{
    display:none;
    width:250px;
    height:80px;
    line-height:80px;
    font-size:160%;
    background-color:lightgray;
    border:solid black 4px;
    border-radius:100px;
}
body{
    background-color:#ff8680;
}
</style>
<?php

$session = $_GET["session"];

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

 $validsession = false;
    $sql = "SELECT id, token, user FROM devices WHERE token='".$session."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            if($row["user"]==-1 || $row["user"]==-2)
            {
                $validsession = true;
                //koodia ei siis ole käytetty
            }
        }
    } 
        else 
    {
        //echo "0 results";
    }

if(!$session=="" && $validsession == true)
{
    $sql = "UPDATE devices SET user='-2' WHERE token='".$session."'";

    if ($conn->query($sql) === TRUE) 
    {
        //echo "Record updated successfully";
    } 
        else 
    {
        //echo "Error updating record: " . $conn->error;
    }
}
$userid=-1;
if(!$user_token=="")
{
    $sql = "SELECT id, token FROM customers WHERE token='".$user_token."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            $userid=$row["token"];
        }
    } 
        else 
    {
        //echo "0 results";
    }
}
   

if($validsession == true)
{
    if($userid==-1)
    {
        //istuntoa ei ollut puhelimella
        echo "<div id=login onclick=newsession('".$session."')>Luo uusi istunto</div>";
    }
        else
    {
        echo "<div id=login onclick=joinsession('".$session."')>Jatka istuntoa</div>";
    }
    echo "<div id=logout onclick=leftsession('".$session."')>Kirjaudu ulos</div>";
}
    else
{
    echo "<h2>Istunto ei ole enää saatavissa</h2>";
}


$conn->close();
?>

    
</center>