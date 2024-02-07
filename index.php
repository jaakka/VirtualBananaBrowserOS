<!-- Banana Os made by Jaakko Talvitie 2022
project started 15.11.2022
-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Banana Os v0.3</title>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>
<style>
body {
    overflow:hidden;
  font-family: 'Courier New', monospace;
  background-image: url("background.png");
   background-size: 100% 100%;
    background-position: center;
    background-color: #ff6058;
    background-repeat: no-repeat;
    
    
  /*background-color:#ff8680;
  /*cursor: none;*/
  cursor: none;
  
   -webkit-user-select: none;
        -webkit-touch-callout: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        
  /*
  vanha tausta #ff8680
  logon väri #ff6058;
  */
}
#qrcode
{
    /*background-image:url("https://jaakkagames.net/qrtesting/qrcodetest/test3.php?data=https://localhost/virtualbanana/login.php?session=test");*/
    background-color:lightgray;
    width:150px;
    height:150px;
    display:inline-block;
    background-size:cover;
    filter: grayscale(100%);
}
#deskspace
{
    position:absolute;
    top:2.5%;
    left:1.5%;
    width:90%;
    height:95%;
    /*border:dotted black 1px;*/
}

#deskicon
{
    pointer-events: none;
    position:relative;
    display:inline-block;
    width:140px;
    height:140px;
    /*background-color:blue;
   /* border:solid black 1px;
    /*margin:4px;*/
}
#selected_file
{
    position:absolute;
    top:0px;
    left:0px;
    width:100%;
    height:100%;
    background-color:black;
    opacity:10%;
}

#filename
{
    position:absolute;
    top:98px;
    text-align:center;
    font-size:120%;
    left:0px;
    width:100%;
    height:40px;
    font-weight:bold;
}
#folder_icon
{
    position:absolute;
    top:4px;
    left:20px;
    width:100px;
    height:92px;
    background-image: url("tyhja_kansio.png");
    background-size:cover;
}
#trash_icon
{ 
    position:absolute;
    top:4px;
    left:33px;
    width:76px;
    height:92px;
    background-image: url("trash.png");
    background-size:cover;
}
#file_icon
{
    position:absolute;
    top:4px;
    left:35px;
    width:70px;
    height:92px;
    background-image: url("file.png");
    background-size:cover;
}
#select_add_folder
{
    position:absolute;
    top:-5px;
    right:-28px;
    border:solid black 3px;
    width:54px;
    height:54px;
    border-radius:32px;
    background-image: url("add_folder2.png");
    background-size: 80%;
    background-position: center;
    background-color: #ff6058;
    background-repeat: no-repeat;
}


#select_add_file
{
    position:absolute;
    top:62px;
    right:-20px;
    border:solid black 3px;
    width:54px;
    height:58px;
    border-radius:32px;
    background-image: url("add_file2.png");
     background-size: 70%;
     background-color: #ff6058;
    background-position: center;
    background-repeat: no-repeat;
}


#select_close
{
    position:absolute;
    top:67px;
    right:50px;
    border:solid black 2px;
    width:54px;
    height:54px;
    border-radius:32px;
    background-image: url("exit.png");
    background-size:cover;
    background-repeat: no-repeat;
}


#startlogo
{
    position:absolute;
    top:calc(50% - 150px);
    left:calc(50% - 100px);
    width:200px;
    height:200px;
    background-image: url("newbanana.png");
    background-size:cover;
}
#custom_cursor
{
    pointer-events: none;
    position:absolute;
    display:none;
    top:0px
    left:0px;
    width:75px;
    height:67px;
    background-image: url("cursor_finger.png");
    background-size:cover;
}

#desktop
{
    pointer-events: none;
    width:100%;
    height:100%;
    top:0px;
    left:0px;
    position:absolute;

}

#starttext
{
    position:absolute;
    bottom:0px;
    left:calc(50% - 152px);
    width:300px;
    text-align:center;
    font-weight:bold;
    font-size:120%;
    border-top:solid black 4px;
    border-left:solid black 4px;
    border-right:solid black 4px;
    background-color:#ff6058;
    border-radius:0px;
    height:30px;
}

#rightdoor
{
    position:absolute;
    left:0px;
    top:0px;
    background-color:#ff6058;
    border-right:solid black 4px;
    height:100%;
    width:calc(50% - 2px);
}
#leftdoor
{
    background-color:#ff6058;
    position:absolute;
    right:0px;
    top:0px;
    border-left:solid black 4px;
    height:100%;
    width:calc(50% - 2px);
}

#selector
{
    pointer-events: none;
    border:dashed black 2px;
    top:-200px;
    left:-200px;
    width:100px;
    left:100px;
    position:absolute;
}

#loader {
    top:calc(50% - 153px);
    left:calc(50% - 103px);
  position:absolute;
  border: 4px solid black;
  border-radius: 50%;
  border-top: 4px solid white;
  width: 198px;
  height: 198px;
  -webkit-animation: spin 3s linear infinite; /* Safari */
  animation: spin 3s linear infinite;
}

#select_circle
{

    border:dotted black 4px;
    border-radius:50px;
    width:100px;
    height:100px;
    position:absolute;
    left:-200px;
    top:-200px;
}


#main_circle
{
    /*z-index:-2;*/
    border:dotted black 4px;
    border-radius:100px;
    width:170px;
    height:165px;
    position:absolute;
    left:calc(99% + 2px);
    top:calc(50% - 104px);
    display:none;
}

#menu_calculator
{
    position:absolute;
    top:-33px;
    left:15px;
    border:solid black 2px;
    width:54px;
    height:54px;
    border-radius:32px;
    background-image: url("laskin.png");
    background-size:60%;
    background-repeat: no-repeat;
    background-position:center;
    background-color: #ff6058;
}

#hidden_calculator
{
    display:none;
    position:absolute;
    top:350px;
    z-index:0;
    right:30px;
    border:solid black 2px;
    width:54px;
    height:54px;
    border-radius:32px;
    background-image: url("laskin.png");
    background-size:60%;
    background-repeat: no-repeat;
    background-position:center;
    background-color: #ff6058;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>

<div id="desktop"></div>

<div id="deskspace">
<!--

<div id="deskicon">
    <div id="trash_icon"></div>
    <div id="filename">Roskakori</div>
</div>

<div id="deskicon">
    <div id="icon"></div>
    <div id="filename">Kansio1</div>
</div>
<div id="deskicon">
    <div id="file"></div>
    <div id="filename">Tiedosto</div>
</div>
-->

<!-- 
Laskin lisätty 9.1.2020 
Laskin osaa laskea oikeassa laskujärjestyksessä
mutta ei osaa vielä käyttää sulkeita, 
sulkeiden painikkeet on piilotettu.
-->
<?php
 include("laskin.php");
?>

<div id=main_circle>
    <div id=menu_calculator onclick="toggle_menu(); calc_open(); document.getElementById('window_main').style.display='block'; open_keyboard(); console.log('laskin painettu');"></div>
</div>

</div> <!--  deskspace päättyy -->
<div id="select_circle">
    <div id="select_add_folder" onclick="add_folder_select()"></div>
    <div id="select_add_file" onclick="add_file_select()"></div>
    <div id="select_close" onclick="action_close_select()"></div>
</div>
<div id="hidden_calculator" onclick='document.getElementById("window_main").style.display="block"; open_keyboard(); document.getElementById("hidden_calculator").style.display="none";'></div>
<div id="rightdoor"></div>
<div id="leftdoor">
    
</div>
<div id="bottomdoor"></div>
<div id="startlogo" onclick="toggle_menu()">
</div>
<div id="loader"></div>
<div id=selector></div>


<div id=custom_cursor></div>

<div id=starttext>Aloita painamalla F11</div>

<script>


function calc_open()
{
    app_calc_mode=1;
    document.getElementById("menu_calculator").style.display="none";
}

function calc_closed()
{
    app_calc_mode=0;
    document.getElementById("menu_calculator").style.display="block";
}


function calc_hided()
{
    app_calc_mode=2;
    //document.getElementById("startlogo").style.backgroundImage="url('banaani_terttu.png')";
    document.getElementById("hidden_calculator").style.display="block";
}

/*nclick="add_folder_select()"></div>
    <div id="select_add_file" onclick="add_file_select()"></div>
    <div id="select_close" onclick="action_close_select()"
  */  
let app_calc_mode=0;
let files_count = 0;
let selected = false, sel_x = 0, sel_y=0;
let sel = document.getElementById("selector");
let mouse_x=0, mouse_y=0;
let ready = false; //järjestelmä käynistynyt
let main_menu=false;
let deviceToken="";
let desktop_files=[];
let folder_files=[];
let userToken="";
function getFolderFiles(folderId) {
    console.log("hankitaan tiedostot lista kansiosta "+String(folderId));
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    if(this.responseText=="0")
    {
        console.log("Tiedostojen haku epäonnistui");
    }
        if(folderId==0)
        {
            console.log("tiedoston vaihto vastasi '"+String(this.responseText)+"'");
            desktop_files=JSON.parse(String(this.responseText));
            i=0;
            while((files_count-1)<desktop_files.length) //-1 koska roskakoriki on työpöydäl
            {
                add_generate(desktop_files[i][0],desktop_files[i][1]);
                i+=1;
            }
        }
            else
        {
            folder_files=this.responseText;
        }
    }
  }
  xmlhttp.open("GET","server_file_trade.php?folderId="+String(folderId)+"&deviceToken="+String(deviceToken)+"&userToken="+String(userToken),true);
  xmlhttp.send();
}

function addFolderFile(folderId,filetype,name) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    if(this.responseText=="1")
    {
        console.log("Tiedoston lisääminen onnistui");
    }
        else
    {
        console.log("Tiedoston lisääminen ei onnistunut");
    }

    }
  }
  xmlhttp.open("GET","server_file_send.php?folderId="+String(folderId)+"&filetype="+String(filetype)+"&name="+String(name)+"&deviceToken="+String(deviceToken)+"&userToken="+String(userToken),true);
  xmlhttp.send();
}

function getDeviceToken() {
    console.log("hankitaan token");
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    if(this.responseText=="0")
    {
        console.log("Tunnisteen hakeminen ei onnistu!");
    }
        deviceToken=String(this.responseText);
        console.log("Uusi tunniste haettu tälle laitteelle "+String(deviceToken));
    }
  }
  xmlhttp.open("GET","newsession.php",true);
  xmlhttp.send();
}
/*

function stayalive() 
{
    console.log("stayalive!");
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() 
    {
        
        if (this.readyState==4 && this.status==200) 
        {
            if(String(this.responseText)=="1")
            {
                console.log(this.responseText);
            }
                else
            {
                close_doors();
            }
        }
        xmlhttp.open("GET","alivetest.php?device="+String(deviceToken),true);
        xmlhttp.send();
    }
    setTimeout(stayalive,2000);
}*/
let loaded_desktop=false;
let onlyonetime=false;
let hide_login=false;
function testAreQrCodeReaded() {
    console.log("qr code loop");
    
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        if(this.responseText=="-2")
        {
            readed=true;
            console.log("Tunniste luettu!");
        }
        saatudata = this.readyState;
        if(String(this.responseText).length>5)
        {
            readed=true;
            if(onlyonetime==false)
            {
                userToken=String(this.responseText);
                console.log("Järjestelmään kirjauduttiin tunnuksella "+String(userToken));
                //stayalive();
                //setTimeout(stayalive,3000);
                hide_login=true;
                document.getElementById("starttext").innerHTML="Tervetuloa!";
                setTimeout(anim_hide_load_txt,3000);
                console.log("loop");
                onlyonetime=true;
                
                
                
            }
        }
            else
        {
            if(onlyonetime==true)
            {
                close_doors();
            }
        }
    }
  }
  
  xmlhttp.open("GET","serverside_communication.php?session="+String(deviceToken),true);
  xmlhttp.send();
        if(hide_login==false)
        {
            if(readed==true)
            {
                document.getElementById("starttext").style.bottom="0px";
                document.getElementById("starttext").style.height="30px";
                document.getElementById("starttext").style.backgroundColor="#ff6058";
                document.getElementById("custom_cursor").style.display="block";
                document.getElementById("starttext").innerHTML="Odotetaan kirjautumista..";
               
            }
            setTimeout(testAreQrCodeReaded,1000);
        }
            else
        {
            if(loaded_desktop==false)
            {
                getFolderFiles(0);
                loaded_desktop=true;
            }
            setTimeout(testAreQrCodeReaded,5000);//loopataanki ny kokoaja tiiät kyl miks
        }
}
let readed=false;


getDeviceToken();

function toggle_menu()
{
    
    if(main_menu==false)
    {
        main_menu=true;
        document.getElementById("main_circle").style.display="block";
        
        if(app_calc_mode==2)
        {
            document.getElementById("hidden_calculator").style.display="none";
        }
        //document.getElementById("menu_calculator").style.zIndex="-1";
    }
        else
    {
        main_menu=false;
        if(app_calc_mode==2)
        {
            document.getElementById("hidden_calculator").style.display="block";
        }
        document.getElementById("main_circle").style.display="none";
        //document.getElementById("menu_calculator").style.zIndex="1";
    }
}


function add_trash()
{
    let g = document.createElement('div');
    g.setAttribute("id", "deskicon");
    
    let tausta = document.createElement('div');
    tausta.setAttribute("id", "selected_file");
   // g.appendChild(tausta); 
    
    let icon = document.createElement('div');
    icon.setAttribute("id", "trash_icon");
    g.appendChild(icon); 
    
    let name = document.createElement('div');
    name.setAttribute("id", "filename");
    name.innerHTML="Roskakori";
    g.appendChild(name);
    console.log("add trash");
    document.getElementById("deskspace").appendChild(g);
    files_count+=1;
}
add_trash();


function add_file_select()
{
    action_close_select();
    let g = document.createElement('div');
    g.setAttribute("id", "deskicon");
    
    let icon = document.createElement('div');
    icon.setAttribute("id", "file_icon");
    g.appendChild(icon); 
    
    let name = document.createElement('div');
    name.setAttribute("id", "filename");
    name.innerHTML="Tiedosto";
    g.appendChild(name);
    console.log("add file");
    
    addFolderFile(0,1,"Tiedosto");
    document.getElementById("deskspace").appendChild(g);
    files_count+=1;
}

function add_folder_select()
{
    action_close_select();
    let g = document.createElement('div');
    g.setAttribute("id", "deskicon");
    
    let icon = document.createElement('div');
    icon.setAttribute("id", "folder_icon");
    g.appendChild(icon); 
    
    let name = document.createElement('div');
    name.setAttribute("id", "filename");
    name.innerHTML="Kansio";
    g.appendChild(name);
    console.log("add file");
    addFolderFile(0,0,"Kansio");
    document.getElementById("deskspace").appendChild(g);
    files_count+=1;
}

function add_generate(type,name)
{
    if(type==0)
    {
        add_folder_generate(name);
    }   
        else
    {
        add_file_generate(name);
    }
}

function add_file_generate(nametxt)
{
    action_close_select();
    let g = document.createElement('div');
    g.setAttribute("id", "deskicon");
    
    let icon = document.createElement('div');
    icon.setAttribute("id", "file_icon");
    g.appendChild(icon); 
    
    let name = document.createElement('div');
    name.setAttribute("id", "filename");
    name.innerHTML=nametxt;
    g.appendChild(name);
    console.log("add file");
    document.getElementById("deskspace").appendChild(g);
    files_count+=1;
}

function add_folder_generate(nametxt)
{
    action_close_select();
    let g = document.createElement('div');
    g.setAttribute("id", "deskicon");
    
    let icon = document.createElement('div');
    icon.setAttribute("id", "folder_icon");
    g.appendChild(icon); 
    
    let name = document.createElement('div');
    name.setAttribute("id", "filename");
    name.innerHTML=nametxt;
    g.appendChild(name);
    console.log("add file");
    document.getElementById("deskspace").appendChild(g);
    files_count+=1;
}
  
function action_close_select()
{
    document.getElementById("select_circle").style.left="-200px";
    document.getElementById("select_circle").style.top="-200px";
}

document.getElementById("starttext").style.height=30+"px";
function anim_hide_load_txt()
{
    let korkeus = parseInt(document.getElementById("starttext").style.height);
    console.log(korkeus);
    if(korkeus<23)
    {
        document.getElementById("starttext").innerHTML="";
    }
    if(korkeus>4)
    {
        document.getElementById("starttext").style.height=(korkeus-1)+"px";
        setTimeout(anim_hide_load_txt,1);
    }
        else
    {
        document.getElementById("starttext").style.display="none";
        open_doors();
    }
   
}


function mousemove(event){
    mouse_x=event.clientX;
    mouse_y=event.clientY;
    let kohde = document.getElementById("custom_cursor");
    //console.log(mouse_x);
    if(mouse_x>(window.innerWidth-230))
    {
        if(mouse_x<1914)
        {
            kohde.style.left=(event.clientX-70)+"px";
        }
        kohde.style.top=(event.clientY)+"px";
        kohde.style.backgroundImage='url("cursor_finger_right.png")';
    }
        else
    {
        kohde.style.left=(event.clientX)+"px";
        kohde.style.top=(event.clientY)+"px";
        kohde.style.backgroundImage='url("cursor_finger.png")';
    }
    
    if(selected==true)
    {
        if(sel_x<mouse_x)
        {
            sel.style.left=sel_x+"px";
            sel.style.width=(mouse_x-sel_x)+"px";
        }
            else
        {
            sel.style.left=mouse_x+"px";
            sel.style.width=(sel_x-mouse_x)+"px";
        }
        
        if(sel_y<mouse_y)
        {
            sel.style.top=sel_y+"px";
            sel.style.height=(mouse_y-sel_y)+"px";
        }
            else
        {
            sel.style.top=mouse_y+"px";
            sel.style.height=(sel_y-mouse_y)+"px";
        }
    }
}


window.addEventListener('mousemove', mousemove);



window.addEventListener("mouseup", unsel);
function unsel()
{
    if(selected==true)
    {
        sel.style.top="-200px";
        sel.style.left="-200px";
        sel.style.display="none";
        selected = false; 
        console.log("select end");
    }
}

window.addEventListener("mousedown", selector);
function selector()
{
    if(selected == false && ready == true)
    {
        //action_close_select();
        sel.style.display="block";
        sel_x = mouse_x;
        sel_y = mouse_y;
        console.log("select start");
        selected = true; 
        //ettei määritetä montaa kertaa aloituspistettä
    }
}


//document.addEventListener('contextmenu', event => event.preventDefault());
if (document.addEventListener) {
  document.addEventListener('contextmenu', function(e) {
    //alert("You've tried to open context menu"); //here you draw your own menu
    if(files_count<84 && ready == true && mouse_x<1800) //ei avata valikkoo ku työpöytä on täynnä
    {
        document.getElementById("select_circle").style.top=(mouse_y-50)+"px";
        document.getElementById("select_circle").style.left=(mouse_x-50)+"px";
    }
    e.preventDefault();
  }, false);
} else {
  document.attachEvent('oncontextmenu', function() {
    //alert("You've tried to open context menu");
    window.event.returnValue = false;
  });
}

function fade_black()
{
    document.getElementById("loader").style.borderTop="4px solid black";
    document.getElementById("loader").style.border="4px solid black";
    document.getElementById("rightdoor").style.borderRight="solid black 4px";
    document.getElementById("leftdoor").style.borderLeft="solid black 4px";
}

function close_doors()
{
    close_left_door();
    close_right_door();
    setTimeout(reload_page,1000);
}
function reload_page()
{
    window.location.replace("https://jaakkotalvitie.fi/virtualbanana");
}

function close_left_door()
{
    let pituus = parseInt(document.getElementById("leftdoor").style.width);
    document.getElementById("leftdoor").style.zIndex=5;
    document.getElementById("startlogo").style.zIndex=6;
    if(pituus<50)
    {
        document.getElementById("leftdoor").style.width=(pituus+1)+"%";
        if(pituus>6)
        {
            
            document.getElementById("startlogo").style.width="200px";
            document.getElementById("startlogo").style.height="200px";
            document.getElementById("startlogo").style.top="calc(50% - 150px)";
            document.getElementById("startlogo").style.left=(93.5-pituus)+"%";
            document.getElementById("startlogo").style.border="4px solid black";
            document.getElementById("startlogo").style.borderRadius="50%";
            ready=false; 
            /*
    LOGON ALOITUS
    top:calc(50% - 150px);
    left:calc(50% - 100px);
    width:200px;
    height:200px;
    background-image: url("newbanana.png");
    background-size:cover;
            
            */
        }
        setTimeout(close_left_door,1);
    }
        else
    {
        //document.getElementById("leftdoor").style.display="none";
    }
}
function close_right_door()
{
    document.getElementById("rightdoor").style.display="block";
    let pituus = parseInt(document.getElementById("rightdoor").style.width);
    document.getElementById("rightdoor").style.zIndex=5;
    if(pituus<50)
    {
        document.getElementById("rightdoor").style.width=(pituus+1)+"%";
        setTimeout(close_right_door,1);
    }
        else
    {
        
    }
}



function open_left_door()
{
    let pituus = parseInt(document.getElementById("leftdoor").style.width);
    if(pituus>3)
    {
        document.getElementById("leftdoor").style.width=(pituus-1)+"%";
        if(pituus>6)
        {
            document.getElementById("leftdoor").style.zIndex=-1;
            document.getElementById("startlogo").style.width="104px";
            document.getElementById("startlogo").style.height="104px";
            document.getElementById("startlogo").style.top="calc(50% - 75px)";
            document.getElementById("startlogo").style.left=(100-pituus)+"%";
            document.getElementById("loader").style.display="none";
            
            document.getElementById("startlogo").style.border="4px solid black";
            document.getElementById("startlogo").style.borderRadius="50%";
            ready=true; 
            /*document.getElementById("loader").style.width="100px";
            document.getElementById("loader").style.height="100px";
            document.getElementById("loader").style.top="calc(50% - 75px)";
            document.getElementById("loader").style.left=(100-pituus)+"%";*/
        }
        setTimeout(open_left_door,1);
    }
        else
    {
        //document.getElementById("leftdoor").style.display="none";
    }
}
function open_right_door()
{
    let pituus = parseInt(document.getElementById("rightdoor").style.width);
    if(pituus>1)
    {
        document.getElementById("rightdoor").style.width=(pituus-1)+"%";
        setTimeout(open_right_door,1);
    }
        else
    {
        document.getElementById("rightdoor").style.display="none";
    }
}

function open_doors()
{
    document.getElementById("loader").style.borderTop="4px solid white";
    document.getElementById("loader").style.border="4px solid white";
    document.getElementById("rightdoor").style.borderRight="solid white 4px";
    document.getElementById("leftdoor").style.borderLeft="solid white 4px";
    document.getElementById("leftdoor").style.width="50%";
    open_left_door();
    document.getElementById("rightdoor").style.width="50%";
    open_right_door();
    setTimeout(fade_black,50);
}

//setTimeout(anim_hide_load_txt,3000);

function letswaitfullscreen()
{
    if( window.innerHeight == screen.height) 
    {
        if(deviceToken=="")
        {
            document.getElementById("starttext").innerHTML="Haetaan tunnistetta..";
            setTimeout(letswaitfullscreen,100);
        }
        if(deviceToken=="0")
        {
            document.getElementById("starttext").innerHTML="Tunnisteen haku epäonnistui";
        }
        if(deviceToken!="0" && deviceToken!="")
        {
            testAreQrCodeReaded();
            document.getElementById("starttext").style.bottom="0px";
            document.getElementById("starttext").style.height="300px";
            document.getElementById("starttext").style.backgroundColor="lightgray";
            document.getElementById("starttext").innerHTML="<center><br><div id=qrcode style='background-image:url(https://jaakkagames.net/qrtesting/qrcodetest/test3.php?data=https://jaakkotalvitie.fi/virtualbanana/login.php?session="+String(deviceToken)+");'></div></center><br>Kirjaudu järjestelmään lukemalla qr-koodi";
            
            
        }
        /*
        position:absolute;
    bottom:0px;
    left:calc(50% - 152px);
    width:300px;
    text-align:center;
    font-weight:bold;
    font-size:120%;
    border-top:solid black 4px;
    border-left:solid black 4px;
    border-right:solid black 4px;
    background-color:#ff6058;
    border-radius:0px;
    height:30px;
        */
        //document.getElementById("starttext").innerHTML="Ladataan järjestelmää";
        //setTimeout(anim_hide_load_txt,3000);
    }
        else
    {
        setTimeout(letswaitfullscreen,100);
    }
}
letswaitfullscreen();

</script>
