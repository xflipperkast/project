<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Versiebeheer 2.T1 LO1E</title>
    <link href="css/contact.css" rel="stylesheet" type="text/css">
</head>


<body>
<nav class="navbar navbar-expand-xl navbar-dark">
    <img src="img/logo.png" width="200" alt=""> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="end">
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav">
              <li class="nav-item"> <a class="nav-link" href="home.php" data-abc="true">Home<span class="sr-only">(current)</span></a> </li>
              <li class="nav-item"> <a class="nav-link" href="product.php" data-abc="true">producten</a> </li>
              <li class="nav-item "> <a class="nav-link" href="reacties.php" data-abc="true">Evenementen</a> </li>
              <li class="nav-item active"> <a class="nav-link mt-2"  href="#"data-abc="true" id="clicked">Contact<span class="sr-only">(current)</span></a> </li>
              <li class="nav-item"> <a class="nav-link" href="login.php" data-abc="true">inloggen</a> </li>
            </ul>        
        </div>
    </div>    
</nav>

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