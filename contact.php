<?php
 require("dbconnect.php");
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Versiebeheer 2.T1 LO1E</title>
    <link href="css/contact.css" rel="stylesheet" type="text/css">
</head>
<body>
<section>
      <a href="#" id="inloggen">inloggen</a>
    <nav>
      <img id="logo" src="img/logo.png" alt="logo">
        <article id="nav">
            <a href="home.php" class="nav">Home</a>
            <a href="#" class="nav">Producten</a>
            <a href="#" class="nav">Evenementen</a>
            <a href="#" class="nav" id="curent-page">Contact</a>
        </article>
    </nav>
  </section>

  <article class="invulformulier">
   <div class="wrapper">
         <div class="row">
            <div class="neontext">
               <h1><em>Contactformulier</em></h1>
            </div>
         </div>
   <div class="form">
      <div class="inputfield">
         <label>Voornaam</label>
         <input type="text" class="input" id="naam">
      </div>  

       <div class="inputfield">
         <label>Achternaam</label>
         <input type="text" class="input" id="achternaam"> 
      </div>  

      <div class="inputfield">
         <label>Email</label>
         <input type="text" class="input" id="mail">
      </div>

       <div class="inputfield">
         <label>Onderwerp</label>
         <div class="custom_select">
           <select id="games">
             <option value="Maak uw keuze">Maak uw keuze</option>
             <option value="Ik heb een vraag">Ik heb een vraag</option>
             <option value="Ik heb een opmerking">Ik heb een opmerking</option>
             <option value="Ik wil een game aanraden">Ik wil een game aanraden</option>
             <option value="Ik wil een compliment geven">Ik wil een compliment geven</option>
           </select>
         </div>
      </div> 

     <div class="inputfield">
         <label>Bericht</label>
         <textarea class="textarea" id="bericht"></textarea>
      </div> 

     <div class="inputfield terms">
         <label class="check">
           <input type="checkbox" id="checker">
           <span class="checkmark"></span>
         </label>
         <p>Akkoord gaan met de algemene voorwaarde</p>
      </div> 
      
     <div class="inputfield">
       <input type="submit" value="submit" onclick="sendMessage()" class="btn">
     </div>
   </div>
</article>

</body>

</html>

<script>
function sendMessage(){
  if(!document.getElementById("checker").checked){
    return;
  }else{
var request = new XMLHttpRequest();
request.open("POST", "https://discord.com/api/webhooks/836241825437712435/Acuu_6LVuRarVLabNHi2Y_7fBbg46ZpIE8vc4u1E4MHItOELpw4l1qvMrtw-4K90Ir8X");
request.setRequestHeader('Content-type', 'application/json');

var myEmbed = {
  author: {
    name: "contact"
  },
  title: "new contact!",
  description: "naam: "+document.getElementById("naam").value+'\n' + "achtermaam: "+document.getElementById("achternaam").value+'\n' +"email: "+ document.getElementById("mail").value+'\n'+"keuze: "+document.getElementById("games").value+'\n'+'\n'+"bericht: "+document.getElementById("bericht").value,
  color: hexToDecimal("#ff0000")
}

var params = {
  username: "contactbot",
  embeds: [ myEmbed ]
}

request.send(JSON.stringify(params));
function hexToDecimal(hex) {
  return parseInt(hex.replace("#",""), 16)
}}
}
      </script>