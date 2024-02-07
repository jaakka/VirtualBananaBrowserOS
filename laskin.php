<style>
body
{
     font-family: 'Courier New', monospace;
}

::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #ff6058;
  border:solid black 3px;
  border-radius: 5px;
}


#window_main
{
    -webkit-user-select: none; /* Safari */
    -ms-user-select: none; /* IE 10 and IE 11 */
    user-select: none; /* Standard syntax */
    position:absolute;
    top:250px;
    left:800px;
    width:300px;
    height:500px;
    display:none;
    background-color:#ff6058;
    border:solid black 4px;
    border-bottom-right-radius:100px;
}
#window_content
{
    position:absolute;
    top:0px;
    left:0px;
    width:266px;
    height:466px;
    background-color:white;
    border-bottom:solid black 4px;
    border-right:solid black 4px;
    border-bottom-right-radius:70px;
    overflow:hidden;
}


#window_numpad
{
    position:absolute;
    bottom:-4px;
    left:-4px; /*-208*/
    z-index:-1;
    width:200px;
    height:300px;
    background-color:#ff6058;
    border:solid black 4px;
    border-bottom-left-radius:50px;
    border-top-left-radius:50px;
}
#window_numpad_pad
{
    position:absolute;
    top:20px;
    left:20px;
    width:176px;
    height:250px;
    background-color:white;
    border:solid black 4px;
    border-bottom-left-radius:25px;
    border-top-left-radius:25px;
}

#window_close_btn
{
    position:absolute;
    bottom:27px;
    right:-2px;
    border:solid black 3px;
    width:54px;
    height:54px;
    border-radius:32px;
    background-image: url("exit.png");
    background-size:cover;
    background-repeat: no-repeat;
}

#window_hide_btn
{
    position:absolute;
    bottom:-10px;
    right:46px;
    border:solid black 3px;
    width:54px;
    height:54px;
    border-radius:32px;
    background-image: url("banaani_terttu.png");
    background-size:95%;
    background-color:#ff6058;
    background-position:center;
    background-repeat: no-repeat;
}
#window_text
{
    position:absolute;
    bottom:6px;
    width:55%;
    left:0px;
    text-align:center;
    font-weight:bold;
    font-size:110%;
}
#calc_btn_vastaus
{
    background-color:#ff6058;
    position:absolute;
    bottom:157px;
    width:54px;
    height:54px;
    right:-15px;
    text-align:center;
    font-weight:bold;
    border:solid black 3px;
    border-radius:32px;
    line-height:54px;
    font-size:300%;
}

#calc_btn_potenssi
{
    background-color:#ff6058;
    position:absolute;
    bottom:123px;
    width:54px;
    height:27px;
    right:-15px;
    text-align:center;
    font-weight:bold;
    border:solid black 3px;
    border-top-right-radius:32px;
    border-top-left-radius:32px;
    line-height:13px;
    font-size:150%;
}

#calc_btn_pii
{
    background-color:#ff6058;
    position:absolute;
    bottom:87px;
    width:54px;
    height:27px;
    right:-15px;
    text-align:center;
    font-weight:bold;
    border:solid black 3px;
    border-bottom-right-radius:32px;
    border-bottom-left-radius:32px;
    line-height:20px;
    font-size:250%;
}

#calc_btn_alkusulje
{
    display:none; /*Laskin ei osaa vielä käyttää näitä*/
    background-color:#ff6058;
    position:absolute;
    bottom:-15px;
    width:27px;
    height:54px;
    right:143px;
    text-align:center;
    font-weight:bold;
    border:solid black 3px;
    border-top-left-radius:32px;
    border-bottom-left-radius:32px;
    line-height:54px;
    font-size:250%;
}

#calc_btn_loppusulje
{
    display:none; /*Laskin ei osaa vielä käyttää näitä*/
    background-color:#ff6058;
    position:absolute;
    bottom:-15px;
    width:27px;
    height:54px;
    right:107px;
    text-align:center;
    font-weight:bold;
    border:solid black 3px;
    border-top-right-radius:32px;
    border-bottom-right-radius:32px;
    line-height:54px;
    font-size:250%;
}

#calc_btn_plus
{
    background-color:#ff6058;
    position:absolute;
    bottom:219px;
    width:54px;
    height:54px;
    right:-15px;
    text-align:center;
    font-weight:bold;
    line-height:54px;
    font-size:300%;
    border:solid black 3px;
    border-radius:32px;
}
#calc_btn_minus
{
    background-color:#ff6058;
    position:absolute;
    bottom:282px;
    width:54px;
    height:54px;
    right:-15px;
    text-align:center;
    font-weight:bold;
    line-height:54px;
    font-size:300%;
    border:solid black 3px;
    border-radius:32px;
}
#calc_btn_kerto
{
    background-color:#ff6058;
    position:absolute;
    bottom:345px;
    width:54px;
    height:54px;
    right:-15px;
    text-align:center;
    font-weight:bold;
    line-height:54px;
    font-size:300%;
    border:solid black 3px;
    border-radius:32px;
}
#calc_btn_jako
{
    background-color:#ff6058;
    position:absolute;
    bottom:407px;
    width:54px;
    height:54px;
    right:-15px;
    text-align:center;
    font-weight:bold;
    line-height:54px;
    font-size:300%;
    border:solid black 3px;
    border-radius:32px;
}

#calc_btn_restart
{
    background-color:#ff6058;
    position:absolute;
    bottom:470px;
    width:54px;
    height:54px;
    right:-15px;
    text-align:center;
    font-weight:bold;
    line-height:54px;
    font-size:300%;
    border:solid black 3px;
    border-radius:32px;
}
#calc_btn_nappaimet
{
    background-color:#ff6058;
    position:absolute;
    bottom:-15px;
    width:54px;
    height:54px;
    left:-15px;
    text-align:center;
    font-weight:bold;
    border:solid black 3px;
    border-radius:32px;
    line-height:54px;
    font-size:150%;
}

#calc_print
{
    position:absolute;
    top:5px;
    left:5px;
    font-size:150%;
}
#keypad_button_1
{
    border-right:solid black 2px;
    border-bottom:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:0px;
    left:0px;
    width:33.33333333333333%;
    height:25%;
}
#keypad_button_2
{
   border-right:solid black 2px;
    border-bottom:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:0px;
    left:33.33333333333333%;
    width:33.33333333333333%;
    height:25%;
}
#keypad_button_3
{
   border-right:solid black 2px;
    border-bottom:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:0px;
    left:66.66666666666666%;
    width:33.33333333333333%;
    height:25%;
}
#keypad_button_4
{
    border-right:solid black 2px;
    border-bottom:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:25%;
    left:0px;
    width:33.33333333333333%;
    height:25%;
}
#keypad_button_5
{
   border-right:solid black 2px;
    border-bottom:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:25%;
    left:33.33333333333333%;
    width:33.33333333333333%;
    height:25%;
}
#keypad_button_6
{
   border-right:solid black 2px;
    border-bottom:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:25%;
    left:66.66666666666666%;
    width:33.33333333333333%;
    height:25%;
}
#keypad_button_7
{
    border-right:solid black 2px;
    border-bottom:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:50%;
    left:0px;
    width:33.33333333333333%;
    height:25%;
}
#keypad_button_8
{
   border-right:solid black 2px;
    border-bottom:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:50%;
    left:33.33333333333333%;
    width:33.33333333333333%;
    height:25%;
}
#keypad_button_9
{
   border-right:solid black 2px;
    border-bottom:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:50%;
    left:66.66666666666666%;
    width:33.33333333333333%;
    height:25%;
}
#keypad_button_0
{
   border-right:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:75%;
    left:0px;
    width:66.66666666666666%;
    height:25%;
}
#keypad_button_pilkku
{
   border-right:solid black 2px;
    position:absolute;
    text-align:center;
    font-weight:bold;
    line-height:64px;
    font-size:200%;
    top:75%;
    left:66.66666666666666%;
    width:33.33333333333333%;
    height:25%;
}

#kaava
{
   /* border:dashed black 0.1px;*/
   background-color:lightgray;
    display:inline-block;
    /*padding:10px;*/
    /*margin:2px;
    /*min-height:60px;*/
    /*height:50px;
    margin-top:5px;
    line-height:60px;*/
    min-width:15px;
    font-weight:bold;
    margin:2px;
    padding:7px;
}

#kaava_alekkain
{
   /* border:solid red 2px;*/
   background-color:lightgray;
    display:inline-block;
    /*padding:10px;*/
    /*margin:2px;
    min-width:30px;
    margin-top:5px;
    /*min-height:60px;*/
    /*height:50px;
    line-height:60px*/
margin:2px;
    min-width:15px;
    font-weight:bold;
    /*font-size:80%;*/
    position:relative;
    padding:7px;
}
    
#kaava_cursor
{
    border:dashed black 2px;
   background-color:lightgray;
    display:inline-block;
    /*padding:10px;
    margin:2px;
    margin-top:5px;*/
    min-width:15px;
   /* min-height:10px;*/
   /*height:50px;
    line-height:40px*/
    font-weight:bold;
    margin:2px;
    padding:7px;
    
}


#window_btn_calc_up
{
    background-color:#ff6058;
    position:absolute;
    top:-4px;
    width:27px;
    height:54px;
    left:-33px;
    text-align:center;
    font-weight:bold;
    line-height:54px;
    font-size:150%;
    border:solid black 3px;
    border-top-left-radius:15px;
}

#window_btn_calc_down
{
    background-color:#ff6058;
    position:absolute;
    top:57px;
    width:27px;
    height:54px;
    left:-33px;
    text-align:center;
    font-weight:bold;
    line-height:54px;
    font-size:150%;
    border:solid black 3px;
    border-bottom-left-radius:15px;
}
</style>
<!-- laskin -->
<div id="window_main">
<div id="window_content">

    <div id="calc_print">Aloita antamalla numero</div>
</div>
<div id="window_text">Laskin</div>

<div id="window_numpad">
    <div id="window_numpad_pad">
        <div id="keypad_button_1" onclick="lisaa_numero(1)">1</div>
        <div id="keypad_button_2" onclick="lisaa_numero(2)">2</div>
        <div id="keypad_button_3" onclick="lisaa_numero(3)">3</div>
        <div id="keypad_button_4" onclick="lisaa_numero(4)">4</div>
        <div id="keypad_button_5" onclick="lisaa_numero(5)">5</div>
        <div id="keypad_button_6" onclick="lisaa_numero(6)">6</div>
        <div id="keypad_button_7" onclick="lisaa_numero(7)">7</div>
        <div id="keypad_button_8" onclick="lisaa_numero(8)">8</div>
        <div id="keypad_button_9" onclick="lisaa_numero(9)">9</div>
        <div id="keypad_button_0" onclick="lisaa_numero(0)">0</div>
        <div id="keypad_button_pilkku" onclick="lisaa_numero('.')">,</div>
    </div>
</div>


<!-- tehdäänki niin että laitetaan reunaan -->
<div id="calc_btn_alkusulje" onclick="lisaa_numero(-1)">(</div>
<div id="calc_btn_loppusulje" onclick="lisaa_numero(-2)">)</div>
<div id="calc_btn_pii" onclick="lisaa_numero(-3)">π</div><!-- Math.PI ei ollu muijan mielestä riittävän tarkka -->
<div id="calc_btn_potenssi" onclick="lisaa_tekija('^')"><div style="margin-top:10px; position:relative;">1<div style="font-size:50%; position:absolute; right:16px; top:-4px;">x</div></div></div>
<div id="calc_btn_vastaus" onclick="laske()">=</div>
<div id="calc_btn_plus" onclick="lisaa_tekija('+')">+</div>
<div id="calc_btn_minus" onclick="lisaa_tekija('-')">-</div>
<div id="calc_btn_kerto" onclick="lisaa_tekija('*')">*</div>
<div id="calc_btn_jako" onclick="lisaa_tekija('/')">/</div><!--lisaa_numero('/');-->
<div id="calc_btn_restart" onclick="nollaa_laskin()">C</div>  
<div id="calc_btn_nappaimet" onclick="toggle_keyboard()">#</div>
<div id="window_close_btn" onclick=" close_calculator();" ></div> 
<div id="window_hide_btn" onclick="hide_calculator();"></div> 

<div id="window_btn_calc_up" onclick="laskinta_ylos()">▲</div>
<div id="window_btn_calc_down" onclick="laskinta_alas()" >▼</div>



</div>


<script>
function laske_kunnolla()
	{
	    let piin_arvo = 3.141592653589793238462643383279502884197;
	    let muuttujat=arvot.slice();
	    let tehtavat=tekijat.slice();
	    
	    //tarkistetaan onks = merkkejä
	    if(tehtavat.includes("="))
	    {
	        let e = tehtavat.length-1;//mennään vikaan listalla
	        while(e>0)
	        {
	            if(tehtavat[e]=="=")
	            {
	                console.log("särjettii");
	                console.log("===============");
	                console.log(tehtavat);
	                console.log(muuttujat);
	                muuttujat=muuttujat.slice(e+1,muuttujat.length);
	                tehtavat=tehtavat.slice(e+1,tehtavat.length); //leikataan ennen on merkkiä pois
	                console.log(tehtavat);
	                console.log(muuttujat);
	                console.log("===============");
	                break;
	            }
	            e--;
	        }
	    }
	    
	    
		let i = 0;
		let onko_sulkeita=false;
		while(i<muuttujat.length)
		{
			if(Array.isArray(muuttujat[i]))
			{
				muuttujat[i]=String(parseFloat(muuttujat[i][0])/parseFloat(muuttujat[i][1]));
				//muunetaan eka string to float sitten lasketaan jakolasku ja sitten muunnetaan takas string koska muukki on viel
			}
				else
			{
				if(muuttujat[i]=='π')
				{
					muuttujat[i]=String(piin_arvo); 
					//korvataan merkki arvolla
				}
				if(String(muuttujat[i]).includes(")"))
				{
					onko_sulkeita=true;
					//tarkistetaan samas loopis tääki
				}
			}
			i++;
		}
		//nyt meillä on pelkkiä arvoja
		//console.log("Pelkkinä arvoina sulkeiden kanssa");
		//console.log(muuttujat);
		//console.log(tehtavat);
		//console.log("======================");
		
		if(onko_sulkeita==false)
		{
			let kohta = -1; //käytetään monessa paikkaa tätä
			if(tehtavat.includes('^'))
			{
				kohta = tehtavat.indexOf('^');
				while(kohta!=-1)
				{
					tehtavat.splice(kohta, 1);
					console.log(String(parseFloat(muuttujat[kohta]))+"^"+String(parseFloat(muuttujat[kohta+1]))+" = "+String(parseFloat(muuttujat[kohta])**parseFloat(muuttujat[kohta+1])));
					muuttujat[kohta]=String(parseFloat(muuttujat[kohta])**parseFloat(muuttujat[kohta+1]));
					muuttujat.splice(kohta+1,1);
					kohta = tehtavat.indexOf('^');
				}
			//console.log("Potenssit laskettuina");
			//console.log(muuttujat);
			//console.log(tehtavat);
			//console.log("======================");
			}
			if(tehtavat.includes('*') || tehtavat.includes('/'))
			{
				kohta = 0;
				while(kohta<tehtavat.length) //lasketaan vasemmalta oikealle kertolaskut
				{
					if(tehtavat[kohta]=="*")
					{
						tehtavat.splice(kohta, 1);
						console.log(String(parseFloat(muuttujat[kohta]))+"*"+String(parseFloat(muuttujat[kohta+1]))+" = "+String(parseFloat(muuttujat[kohta])*parseFloat(muuttujat[kohta+1])));
						muuttujat[kohta]=String(parseFloat(muuttujat[kohta])*parseFloat(muuttujat[kohta+1]));
						muuttujat.splice(kohta+1,1);
					}
					if(tehtavat[kohta]=="/")
					{
						tehtavat.splice(kohta, 1);
						console.log(String(parseFloat(muuttujat[kohta]))+"/"+String(parseFloat(muuttujat[kohta+1]))+" = "+String(parseFloat(muuttujat[kohta])/parseFloat(muuttujat[kohta+1])));
						muuttujat[kohta]=String(parseFloat(muuttujat[kohta])/parseFloat(muuttujat[kohta+1]));
						muuttujat.splice(kohta+1,1);
					}
					if(tehtavat[kohta]!="/" && tehtavat[kohta]!="*")
					{
					    kohta++;
					}
				}
			//console.log("Kertolaskut ja jakolaskut laskettuina");
			//console.log(muuttujat);
			//console.log(tehtavat);
			//console.log("======================");
			}
			
			if(tehtavat.includes('+') || tehtavat.includes('-'))
			{
				kohta = 0;
				while(kohta<tehtavat.length+1) //lasketaan vasemmalta oikealle kertolaskut
				{
					if(tehtavat[kohta]=="+" || tehtavat[kohta]=="-")
					{
					
						if(tehtavat[kohta]=="+")
						{	
						    console.log(String(parseFloat(muuttujat[kohta]))+"+"+String(parseFloat(muuttujat[kohta+1]))+" = "+String(parseFloat(muuttujat[kohta])+parseFloat(muuttujat[kohta+1])));
							muuttujat[kohta]=String(parseFloat(muuttujat[kohta])+parseFloat(muuttujat[kohta+1]));
						}
							else //koska täälä silmukas ei voi olla kun plus ja miinus
						{	
						    console.log(String(parseFloat(muuttujat[kohta]))+"-"+String(parseFloat(muuttujat[kohta+1]))+" = "+String(parseFloat(muuttujat[kohta])-parseFloat(muuttujat[kohta+1])));
							muuttujat[kohta]=String(parseFloat(muuttujat[kohta])-parseFloat(muuttujat[kohta+1]));
						}
						tehtavat.splice(kohta, 1);
						muuttujat.splice(kohta+1,1);
					}
					    else
					{
					    kohta++;
					}
				}
			//console.log("Yhteen ja vähennys laskettuina");
			//console.log(muuttujat);
			//console.log(tehtavat);
			//console.log("======================");
			}
		
			return muuttujat[0];
		}
		
		
	}
	
function laske()
{
    if(arvot.length>1)
    {
        let i=0, a=0, b=0; //mennää arvot läpi ja katotaa onko sulkeita
        while(i<arvot.length)
        {
            if(String(arvot[i]).includes("("))
            {
                let testdata = String(arvot[i]);
                while(testdata.includes("("))
                {
                    testdata= testdata.replace('(', '');
                    a+=1;
                }
            }
            if(String(arvot[i]).includes(")"))
            {
                let testdata = String(arvot[i]);
                while(testdata.includes(")"))
                {
                    testdata= testdata.replace(')', '');
                    b+=1;
                }
            }
            i+=1;
        }
        if(a!=b)
        {
            let elementti = document.getElementById("window_content");
            document.getElementById("calc_print").innerHTML=String(document.getElementById("calc_print").innerHTML)+"Virhe sulkeiden käytössä.<br><br><br>";
            elementti.scrollTop=elementti.scrollHeight;
        }
            else
        {
            //ei ollut suljevirheitä'π'
            let vastaus = laske_kunnolla();
            tekijat.push("=");
            
            /*let lopullinen = "";
            if(vastaus.length>15)
            {
                lopullinen = lopullinen + vastaus.slice(0, 14)+"<br>";
                vastaus = vastaus.slice(15,vastaus.length);
            }
                else
            {
                lopullinen = vastaus;
            }*/
            arvot.push(String(vastaus));
            update_calc_lcd();
        }
        
    }
        else
    {
        if(arvot.length>0)
        {
            if(Array.isArray(arvot[arvot.length-1]))
            {
                tekijat.push("=");
                let vastaus = parseFloat(arvot[arvot.length-1][0])/parseFloat(arvot[arvot.length-1][1]);
                let lopullinen = "";
                if(vastaus.length>15)
                {
                    lopullinen = lopullinen + vastaus.slice(0, 14)+"<br>";
                    vastaus = vastaus.slice(15,vastaus.length);
                }
                    else
                {
                    lopullinen = vastaus;
                }
                arvot.push(String(lopullinen));
                update_calc_lcd();
                //palautetaan yksinkertainen jakolasku
            }
        }
    }
    
    
}

function laskinta_ylos()
{
    let elementti = document.getElementById("window_content");
    
    if(elementti.scrollTop>39)
    {
        elementti.scrollTop-=40;
    }
        else
    {
        elementti.scrollTop=0;
    }
}

function laskinta_alas()
{
    let elementti = document.getElementById("window_content");
    
    if(elementti.scrollTop+40<elementti.scrollHeight)
    {
        elementti.scrollTop+=40;
    }
        else
    {
        elementti.scrollTop=elementti.scrollHeight;
    }
}


    
let pisin = 0;
let vikan_pituus = 0;

function rullaa_alas()
{
    let elementti = document.getElementById("window_content");
    elementti.scrollTop=elementti.scrollHeight;
}

function nollaa_laskin()
{
    let elementti = document.getElementById("window_content");
    elementti.scrollTop=0;
    arvot = [];
    tekijat = [];
    document.getElementById("calc_print").innerHTML="Aloita antamalla numero, Voit käyttää virtuaalista tai oikeaa näppäimistöä. <br><br>Numeron antamisen jälkeen voit valita toiminnat reunasta --><br><br>Voit piilottaa halutessasi näyttönäppäimistön painamalla #<br><br><br><br><br><br>tämä on vain rullaustesti<br><br>";
}


let shift = false;
document.addEventListener('keyup', function(event) {
    if(event.keyCode == 16) {
        
        shift = false;
    }
});
let arvot = [""];
let tekijat = [];
document.addEventListener('keydown', function(event) {
    if(event.keyCode == 16) {
        
        shift = true;
    }
    //console.log(event.keyCode);
    if(event.keyCode == 191 && shift==true) 
    { 
       lisaa_tekija("*");
        //painetaan kertomerkkiä
        //data=String(data)+"*";
    }
    
    if(event.keyCode == 49 || event.keyCode == 97) 
    { //painetaan kertomerkkiä
        lisaa_numero(1);
    }
    if(event.keyCode == 50 || event.keyCode == 98) 
    { //painetaan kertomerkkiä
        lisaa_numero(2);
    }
    if(event.keyCode == 51 || event.keyCode == 99) 
    { //painetaan kertomerkkiä
        lisaa_numero(3);
    }
    if(event.keyCode == 52 || event.keyCode == 100) 
    { //painetaan kertomerkkiä
        lisaa_numero(4);
    }
    if(event.keyCode == 53 || event.keyCode == 101) 
    { //painetaan kertomerkkiä
        lisaa_numero(5);
    }
    if(event.keyCode == 54 || event.keyCode == 102) 
    { //painetaan kertomerkkiä
        lisaa_numero(6);
    }
    if((event.keyCode == 55 && shift == false) || event.keyCode == 103) 
    { //painetaan kertomerkkiä
        lisaa_numero(7);
    }
    if((event.keyCode == 56 && shift == false) || event.keyCode == 104) 
    { //painetaan kertomerkkiä
        lisaa_numero(8);
    }
    if((event.keyCode == 57 && shift == false) || event.keyCode == 105) 
    { //painetaan kertomerkkiä
        lisaa_numero(9);
    }
    
    /*if(event.keyCode == 56 && shift == true) 
    { //painetaan kertomerkkiä
        lisaa_numero(-1);
    }
    if(event.keyCode == 57 && shift == true) 
    { //painetaan kertomerkkiä
        lisaa_numero(-2);
    }*/
    
    
    
    if(event.keyCode == 48 || event.keyCode == 96) 
    { //painetaan kertomerkkiä
        lisaa_numero(0);
    }
    if(event.keyCode == 190 || event.keyCode == 188) 
    {
        lisaa_numero('.');
    }
    if(event.keyCode == 186 && shift==true) 
    {
        lisaa_tekija('^');
    }
    if(event.keyCode == 189)
    {
        lisaa_tekija('-');
    }
    if(event.keyCode == 187)
    {
        lisaa_tekija('+');
    }
    
    if(event.keyCode == 8)
    {
        vahenna();
    }
    
    if((event.keyCode == 55 && shift == true)) 
    { //painetaan kertomerkkiä
        //lisaa_numero('/');
        lisaa_tekija('/');
    }
    
    if(event.keyCode == 13 || event.keyCode == 40) 
    { //painetaan kertomerkkiä
        if(arvot.length>0)
        {
            if(Array.isArray(arvot[arvot.length-1]))
            {
                if(arvot[arvot.length-1][0]!="" || arvot[arvot.length-1][0]!="-")
                {
                    //se on antanut jotain yläriville
                    if(arvot[arvot.length-1][1] == "B")
                    {
                        arvot[arvot.length-1][1] = "";
                        //nyt se pystyy kirjottaa
                        update_calc_lcd()
                    }
                }
            }
        }
    }
    
    
    
    //49-57 == 1-9
    
    
});

function vahenna()
{
    if(arvot[arvot.length-1]!="")
    {
        if(arvot.length>tekijat.length)
        {
            if(Array.isArray(arvot[arvot.length-1]))
            {
                if(arvot[arvot.length-1][0]!="")
                {
                    if(arvot[arvot.length-1][1]!="B")
                    {
                        arvot[arvot.length-1][1]="B";
                    }
                        else
                    {
                        arvot[arvot.length-1][0]="";
                    }
                }
                    else
                {
                    arvot.splice(arvot.length-1, 1);
                    arvot.push("");
                }
            }
                else
            {
                arvot.splice(arvot.length-1, 1);
                arvot.push("");
            }
        }
            else
        {
            tekijat.splice(tekijat.length-1, 1);
        }
    }
        else
    {
        tekijat.splice(tekijat.length-1, 1);
        arvot.splice(arvot.length-1, 1);
    }
    update_calc_lcd();
}

function lisaa_tekija(i)
{
    
     if(i=="-" && (arvot.length < tekijat.length || (arvot.length == 0 || arvot[arvot.length-1]=="")))
     {
         lisaa_numero("-");
     }
        else
    {
        if(arvot.length>0 && arvot.length >= tekijat.length)
        {
            if(Array.isArray(arvot[arvot.length-1]))
            {
                if(arvot[arvot.length-1][0]!="" && arvot[arvot.length-1][0]!="-" && arvot[arvot.length-1][1]!="" && arvot[arvot.length-1][1]!="-" && arvot[arvot.length-1][1]!="B")
                {
                    tekijat.push(i);
                    arvot.push("");
                    update_calc_lcd();
                }
            }
                else
            {
                if(arvot[arvot.length-1]!="" && arvot[arvot.length-1]!="-" && arvot[arvot.length-1]!="(")
                {
                    tekijat.push(i);
                    arvot.push("");
                    update_calc_lcd();
                }
            }
        }
    }
}

function update_calc_lcd()
{
    let piin_arvo = 3.141592653589793238462643383279502884197;
    let total_data = arvot.length + tekijat.length;
    let i=0;
    let data="";
    let x=0,y=0;
    while(i<total_data)
    {
        if(i==0 || i % 2 == 0)
        {
            if(i==total_data-1)
            {
                let lisattava = arvot[x];
                let palautus = "";
                let kokonainen = lisattava.length;//kokonaispituus
                
               
                if(Array.isArray(lisattava))
                {
                    if(String(lisattava[0]).length>16)
                    {
                        while(String(lisattava[0]).length>0)
                        {
                            
                            if(String(lisattava[0]).length>16)
                            {
                                palautus = String(palautus) + String(lisattava[0].slice(0, 15))+"\n";
                                
                                lisattava[0] = String(String(lisattava[0]).slice(16,String(lisattava[0]).length));
  
                            }
                                else
                            {
                                palautus = String(palautus) + String(lisattava[0]);
                                lisattava[0]="";
                            }

                        }
                        lisattava[0]=palautus;
                    }
                     /*   else
                    {
                        palautus = [String(palautus),String(lisattava[1])];
                    }*/
                    palautus="";
                    if(String(lisattava[1]).length>16)
                    {
                        while(String(lisattava[1]).length>0)
                        {
                            
                            if(String(lisattava[1]).length>16)
                            {
                                palautus = String(palautus) + String(lisattava[1].slice(0, 15))+"\n";
                                
                                lisattava[1] = String(String(lisattava[1]).slice(16,String(lisattava[1]).length));
                            }
                                else
                            {
                                palautus = String(palautus) + String(lisattava[1]);
                                lisattava[1]="";
                            }
                        }
                        lisattava[1]=palautus;
                    }
                    
                    palautus = [String(lisattava[0]),String(lisattava[1])];
                     /*   else
                    {
                        palautus = [String(palautus[0]),String(palautus)];
                    }*/
                    
                }
                    else
                {
                    if(lisattava.length>15)
                    {
                        while(lisattava.length>0)
                        {
                            if(lisattava.length>15)
                            {
                                palautus = palautus + lisattava.slice(0, 14)+"<br>";
                                lisattava = lisattava.slice(15,lisattava.length);
                            }
                                else
                            {
                                palautus = palautus + lisattava;
                                lisattava="";
                            }
                        }
                    }
                        else
                    {
                        palautus = lisattava;
                    }
                }
                if(Array.isArray(lisattava))
                {

                    if(palautus[1]=="B")
                    {
                        data=String(data)+"<div id=kaava_alekkain><span style='border:dashed black 2px; padding:2px; height:30px;'>"+String(palautus[0])+"</span><br><span style='padding:2px;min-width:15px; height:30px;'>"+String(palautus[1])+"</span></div>";
                    }
                        else
                    {
                        data=String(data)+"<div id=kaava_alekkain><span style='height:30px; padding:2px;'>"+String(palautus[0])+"</span><br><span style='border:dashed black 2px; padding:2px; min-width:15px; height:30px;'>"+String(palautus[1])+"</span></div>";
                    }
                }
                    else
                {
                    data=String(data)+"<div id=kaava_cursor>"+String(palautus)+"</div>";
                }
            }
                else
            {
                let lisattava = arvot[x];
                let palautus = "";
                let kokonainen = lisattava.length;//kokonaispituus
                if(lisattava.length>14)
                {
                    while(lisattava.length>0)
                    {
                        if(lisattava.length>14)
                        {
                            palautus = palautus + lisattava.slice(0, 14)+"<br>";
                            lisattava = lisattava.slice(14,lisattava.length);
                        }
                            else
                        {
                            palautus = palautus + lisattava;
                            lisattava="";
                        }
                    }
                }
                    else
                {
                    palautus = lisattava;

                }
                
                
                    //data=String(data)+"<div id=kaava style='border:solid red 1px;'>"+String(palautus)+"</div>";
                    
                    if(Array.isArray(lisattava))
                {
                    data=String(data)+"<div id=kaava_alekkain><span style='border-bottom:solid black 2px; min-width:15px; height:30px; '>"+String(palautus[0])+"</span><br><span style='min-width:15px; height:30px;'>"+String(palautus[1])+"</span></div>";
                }
                    else
                {
                    data=String(data)+"<div id=kaava>"+String(palautus)+"</div>";
                }
                
            }

            x+=1;
        }
            else
        {
            if(i==total_data-1)
            {
                //if(tekijat[y]!="/")
                {
                    data=String(data)+"<div id=kaava_cursor>"+tekijat[y]+"</div>";
                }
            }
                else
            {
                //if(tekijat[y]!="/")
                {
                    data=String(data)+"<div id=kaava>"+tekijat[y]+"</div>";
                }
            }
            
            y+=1;
        }
        i+=1;
    }
    //console.log(data);
    console.log(tekijat);
    console.log(arvot);
    let tulostettava = data+"<br><br>"; //"<div id=kaava>"+String(data)+"</div>";
    
    while(tulostettava.includes(".")==true)
    {
        tulostettava= tulostettava.replace('.', ',');
    }
    
    //tulostettava.replace('.', ',');
    
    document.getElementById("calc_print").innerHTML=tulostettava;
    
    rullaa_alas();
}

function lisaa_numero(i)
{
    
    if(i==-1)
    {
        i="(";
    }
    if(i==-2)
    {
        i=")";
    }
    
    if(i==-3)
    {
        i="π";
    }
    
    if(arvot.length==0)
    {
        if(i=="/")
        {
            //lisaa_tekija("/");
            //arvot[arvot.length-1]=["A","B"];
            arvot.push(["","B"]);
        }
            else
        {
            if(i==".")
            {
                arvot.push("0"+String(i));
            }
                else
            {
                arvot.push(String(i));
            }
        }
    }
        else
    {
        
         if(i=="/")
        {
            //lisaa_tekija("/");
            if(arvot.length>tekijat.length && arvot[arvot.length-1]=="")
            {
                arvot[arvot.length-1]=["","B"];
            }
                else
            {
                if(String(arvot[arvot.length-1]).includes("(")==false && String(arvot[arvot.length-1]).includes(")")==false)
                {
                    //emme halua siirtää sulkeita jakolaskun sisälle
                    arvot[arvot.length-1]=[arvot[arvot.length-1],"B"];
                }
            }
            //arvot.push(["A","B"]);
        }
            else
        {   
            if(i==".")
            {
                if(arvot[arvot.length-1]=="")
                {
                    i="0.";
                }
            }
            if(String(arvot[arvot.length-1]).includes(".")==true && i==".")
            {
                arvot[arvot.length-1]=String(arvot[arvot.length-1]).replace('.', '');
                //poistetaan vanha piste
            }
            if(i!="/")
            {
                if(Array.isArray(arvot[arvot.length-1])) //jos vika on array listalla
                {
                    if(i!="(" && i!=")") //ei hyväksytä sulkeita alekkainlaskuihin vielä ainaskaa
                    {
                        if(arvot[arvot.length-1][1]=="B")
                        {
                            if(arvot[arvot.length-1][0]=="A"){arvot[arvot.length-1][0]="";}
                            arvot[arvot.length-1][0]=String(arvot[arvot.length-1][0])+String(i);
                        }
                            else
                        {
                            if(String(i)=='π')
                            {
                            arvot[arvot.length-1][1]=String(arvot[arvot.length-1][1])+String(i);
                            }
                        }
                    }
                }
                    else
                {
                    if(i=="(")
                    {
                        if(arvot[arvot.length-1]=="") //katotaan että on eka ruudussa
                        {
                            arvot[arvot.length-1]=String(arvot[arvot.length-1])+String(i);
                        }
                    }
                        else
                    {
                        if(i==")")
                        {
                            if(arvot[arvot.length-1].includes("(")==false && arvot[arvot.length-1].includes(")")==false && arvot[arvot.length-1]!="") //tarkistetaan ettei aloitus sulje ole samassa
                            {
                                arvot[arvot.length-1]=String(arvot[arvot.length-1])+String(i);
                            }
                        }
                            else
                        {
                            if(arvot[arvot.length-1].includes(")")==false)
                            {
                                arvot[arvot.length-1]=String(arvot[arvot.length-1])+String(i);
                            }
                        }
                    }
                }
            }
             //   vikan_pituus=arvot[arvot.length-1].length;
        }
        /*
        eli tässä tehdään näin otetaan eka vanha numero esim 69 sitten lisätään sanat "69" ja se i vaikka "4" 
        eli "69"+"4"="694" ja sen jälkeen muunnetaan se parse intiksi 
        EI voinukkaa muuttaa koska jos haluaa näyttää sulkeita
        */
    
}
    update_calc_lcd();
}
document.getElementById("window_numpad").style.left="-4px";
function open_keyboard()
{
    let kohta = parseInt(document.getElementById("window_numpad").style.left);
    if(kohta>-208)
    {
        kohta-=2;
        document.getElementById("window_numpad").style.left=String(kohta)+"px";
        setTimeout(open_keyboard,1);
    }
        else
    {
        document.getElementById("window_numpad").style.zIndex=0;
    }
}
//open_keyboard();

function close_keyboard()
{
    let kohta = parseInt(document.getElementById("window_numpad").style.left);
    if(kohta<-4)
    {
        kohta+=2;
        document.getElementById("window_numpad").style.left=String(kohta)+"px";
        setTimeout(close_keyboard,1);
    }
}

function toggle_keyboard()
{
    if(document.getElementById("window_numpad").style.left=="-4px")
    {
        open_keyboard();
    }
    if(document.getElementById("window_numpad").style.left=="-208px")
    {
        document.getElementById("window_numpad").style.zIndex=-1;
        close_keyboard();
    }
}


function hide_calculator()
{
    
    document.getElementById("window_numpad").style.zIndex=-1;
    let kohta = parseInt(document.getElementById("window_numpad").style.left);
    if(kohta<-4)
    {
        kohta+=2;
        document.getElementById("window_numpad").style.left=String(kohta)+"px";
        setTimeout(hide_calculator,1);
    }
        else
    {
        calc_hided();
        document.getElementById('window_main').style.display='none';
    }
}

function close_calculator()
{
    calc_closed();
    document.getElementById("window_numpad").style.zIndex=-1;
    document.getElementById("window_numpad").style.left=String(-4)+"px";
    document.getElementById('window_main').style.display='none';
    document.getElementById('window_main').style.display='none'; 
    arvot = ['']; 
    tekijat = []; 
    document.getElementById('calc_print').innerHTML='Aloita antamalla numero, Voit käyttää virtuaalista tai oikeaa näppäimistöä. <br><br>Numeron antamisen jälkeen voit valita toiminnat reunasta --><br><br>Voit piilottaa halutessasi näyttönäppäimistön painamalla #<br><br><br><br><br><br>tämä on vain rullaustesti<br><br>';
}



nollaa_laskin();
</script>

















