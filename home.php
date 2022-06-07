<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Versiebeheer 2.T1 LO1E</title>
    <link href="css/home.css" rel="stylesheet" type="text/css">
</head>
<body>
  <section>
      <a href="#" id="inloggen">inloggen</a>
    <nav>
      <img id="logo" src="img/logo.png" alt="logo">
        <article id="nav">
            <a href="#" class="nav" id="curent-page">Home</a>
            <a href="#" class="nav">Producten</a>
            <a href="#" class="nav">Evenementen</a>
            <a href="#" class="nav">Contact</a>
        </article>
    </nav>
  </section>

  <section id="intro">
    <article id="img">
      <img src="img/blikjes.png">
    </article>

    <article id="text1">
      <h1>Welkom</h1>
      <p>Green dragon is de nieuwste en sterkste energie drink van deze tijd met 
        ons nieuwe recept is onze energie niet alleen powerfull maar ook laag in 
        calorieën tijdens festivals of projecten big or small Green dragon can give 
        it all.</p>
        <img src="img/draakje.png" width="50%">
    </article>
  </section>
</body>
</html>
<style>
  #intro{
    display: grid;
    grid-template-columns: 20vw 50vw;
    margin-top: 100px;
    margin-left: 250px;
  }
  #text1{
    color: white;
    font-size: 230%;
  }
  #text1 img{
    position: absolute;
    z-index: -1;
    opacity: 0.5;
    top: 300px;
  }
/*
  *{
    margin: 0px;
    padding: 0px;
}

#inloggen{
    color: white;
    float: right;
    text-decoration: none;
    font-size: 30px;
    padding: 5px 25px 5px 25px;
    border: 2px solid white;
    border-radius: 30px;
}
nav{
    background-color: black;
    display: grid;
    grid-template-columns: 40vw 60vw;
    align-items: center;
    position: relative;
    top: 30px;
}
#logo{
    width: 20%;
}
#nav{
    display: flex;
    column-gap: 40px;

}
.nav{
    font-size: 40px;
    text-decoration: none;
    color: white;
}
#curent-page{
    color: #a0e193;
}
a:hover{
    text-decoration: underline #a0e193;
}
body{
    background-color: black;
}

#intro{
    margin-top: 1000px;
}
*/
</style>