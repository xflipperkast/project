<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/artiesten.css" rel="stylesheet" type="text/css">
<nav class="navbar navbar-expand-sm navbar-dark">
    <img src="img/logo.png" width="200" alt=""> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="end">
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav">
            <li class="nav-item active"> <a class="nav-link mt-2" href="home.php" data-abc="true" id="clicked">Home<span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="product.php" data-abc="true">Producten</a> </li>
                <li class="nav-item"> <a class="nav-link" href="reacties.php" data-abc="true">Evenementen</a> </li>
                <li class="nav-item"> <a class="nav-link" href="artiesten.php" data-abc="true">Artiesten</a> </li>
                <li class="nav-item"> <a class="nav-link" href="contact.php" data-abc="true">Contact</a> </li>
				<li class="nav-item"> <a class="nav-link" href="Login.php" data-abc="true">Inloggen</a> </li>
            </ul>        
        </div>
    </div>    
</nav>
<!-- Main Body -->

<?php

?>

<table>
    <tr>
        <th>Artiest</th>
        <th>Naam</th>
        <th>statement</th>
        <th>telefoon nr</th>
        <th>activiteit</th>
    </tr>    
    <?php
    require('config.php');


    $sql = "SELECT * FROM artiesten";
    if($result = $conn-> query($sql)){
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>";
            echo $row['naam'];
            echo "</td>";
            echo "<td>";
            echo $row['voornaam']." ".$row['tussenvoegsel']." ".$row['achternaam'];
            echo "</td>";
            echo "<td>";
            echo $row['statement'];
            echo "</td>";
            echo "<td>";
            echo $row['telefoon']; 
            echo "</td>";
            echo "<td>";
            if($row['actief'] == 1){
                echo "actief";
            }else if ($row['actief'] == 0){
                echo "non actief";
            }
            echo "</td></tr>";
        }
    }

    ?>
</table>

<section>
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>
</html>