<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HtsIT</title>
        <link href="css/style.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/menu.css" />
        <script type="text/javascript" src="scripts/swfobject/swfobject.js"></script>
        <script type="text/javascript">
            var flashvars = {};
            flashvars.cssSource = "css/piecemaker.css";
            flashvars.xmlSource = "piecemaker.xml";

            var params = {};
            params.play = "true";
            params.menu = "false";
            params.scale = "showall";
            params.wmode = "transparent";
            params.allowfullscreen = "true";
            params.allowscriptaccess = "always";
            params.allownetworking = "all";

            swfobject.embedSWF('piecemaker.swf', 'piecemaker', '960', '500', '10', null, flashvars,
                    params, null);

        </script>

    </head>
</body>

<div id="wrapper">
    <?php include './resources/navbar.php'; ?>
    <div id="Meddelande">     
        <marquee onMouseover="this.scrollAmount = 1" onMouseout="this.scrollAmount = 6">
            <font color="#86d2ff">[HtsIT]</font> Välkommen till HTSIT! Twitter: <a href="https://twitter.com/htsit3040">@htsit3040</a>
        </marquee>
        <div id="slut"></div>
        <div id="start"></div>     
    </div>

    </br></br>
    <img src="images/gallery/HTS.jpg" alt="image 2" />
    <div class="main_wh">
    </div>	
    <div id="links">
        <div class="main3_wh">
            <h2>Länkar:</h2>
            <h5><a href="http://www.hts.se" class="more">HTS</a></h5>
            <h5><a href="http://htsit.se/krmAcademy/" class="more">Magnus Kurser</a></h5>
            <h5><a href="https://fronter.com/hassleholm/" class="more">Fronter</a></h5>
            <h5><a href="https://sms8.schoolsoft.se/hassleholm/jsp/Login.jsp" class="more">Schoolsoft</a></h5>
            <h5><a href="http://www.hts.se/mat/" class="more">Matsedel</a></h5>
            <h5><a href="http://www.htsIT.se" class="more">Yes Javascript</a></h5></br></br></br></br>
            <h2>Kom ihåg:</h2>
            <p><b>Gymnasiearbetet ska vara inlämnat denna veckan, onsdagen den 30 april.</br></br>
                    Muntligt nationella prov i svenska tisdagen den 13 maj.</br></br>
                    Slutprov i kemi fredagen den 16 maj.</br></br></br></br></br></b></p>
            <h2>Kontakt:</h2>
            <p><b> Har du funderingar om hemsidan? </br>Eller några förslag om förbättringar?</br> Hör av er till mig på min email:</br>Ludwig.wolff@hotmail.com</br></br></br></br></b></p>
        </div>	
    </div>	
    <div id="main">
        <div class="main2_wh">
            <h2>Inriktningsvecka</h2> 
            <h5> 2014-04-05 </h5> 
            <p><b>Vecka 15</b> är det inriktningsvecka följande schema gäller </br>
                <b>Måndag 07/04:</b> GA-arbete, inga utsatta lektioner </br>
                <b>Tisdag 08/04:</b> Induviduellt val som vanligt, ca 09:40 samling i A008 inför avfärd mot lawicel i tyringe </br>
                <b>Onsdag 09/04:</b> Induviduellt val som vanligt, Gemensam information om Abstract, Mediaproduktion på eftermiddagen.</br>
                <b>Torsdag 10/04:</b> NP i svenska på förmiddagen, Lan/GA arbete på eftermiddagen. </br>
                <b>Fredag 11/04:</b> Lan/GA arbete</p>
        </div>	
        <div class="main2_wh">
            <h2>LAN</h2>
            <h5> 2014-03-24 </h5>
            <p>Ni som vill vara med på lanet vecka 15 ska anmäla ert intresse till Philip via mail, Philipwendel@hotmail.com med rubrik "LAN"</br></br>
                <b>OBS:</b> Anmälan till lanet kostar 20 kr som sedan kommer användas till turneringspriser. Pengarna ska lämnas in innan vecka 15.</p>
        </div>	
        <div class="main2_wh">
            <h2>HTSIT</h2>
            <p>Det här är en inofficiell sida för IT-inriktningen på HTS Teknikprogram. Vill du veta mer om HTS ska du gå till skolans hemsida <a href="http://www.hts.se">http://www.hts.se</a>.</p>	
        </div>	
    </div>
    <?php include'./resources/footer.php'; ?>
</div>	
</body>
</html>
